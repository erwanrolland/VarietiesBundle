<?php

namespace Librinfo\VarietiesBundle\Traits;

use Symfony\Component\Form\FormEvents;
use Doctrine\Common\Collections\ArrayCollection;
use Sonata\AdminBundle\Form\FormMapper;

trait DynamicDescriptions
{
    
    /**
     * @param FormMapper $mapper
     */
    protected function configureDynamicDescriptions($formMapper)
    {
        // Manage dynamic descriptions according to configurationsettings
        $config = $this->getConfigurationPool()->getContainer()->getParameter('librinfo_varieties')['variety_descriptions'];
        $admin = $this;

        $formMapper->getFormBuilder()->addEventListener(FormEvents::PRE_SET_DATA, function ($event) use ($admin, $config) {
            $subject = $admin->getSubject($event->getData());

            foreach ($config as $fieldset => $field)
            {
                $getter = 'get' . ucfirst($fieldset) . 'Descriptions';
                $setter = 'set' . ucfirst($fieldset) . 'Descriptions';
                $remover = 'remove' . ucfirst($fieldset) . 'Description';
                $adder = 'add' . ucfirst($fieldset) . 'Description';
                $constructor = '\Librinfo\VarietiesBundle\Entity\VarietyDescription' . ucfirst($fieldset);

                // Hide VarietyDescriptions that are not found in configuration
                foreach ($subject->$getter() as $desc)
                {
                    $found = false;
                    foreach ($config[$fieldset] as $field => $settings)
                        if ($desc->getField() == $field)
                        {
                            $found = true;
                            break;
                        }
                    if (!$found)
                        $subject->$remover($desc);
                }

                // Create missing VarietyDescriptions (described in configuration and not present in the Variety)
                foreach ($config[$fieldset] as $field => $settings)
                {
                    $exists = $subject->$getter()->exists(function($key, $element) use ($field) {
                        return $element->getField() == $field;
                    });
                    if (!$exists)
                    {
                        $desc = new $constructor();
                        $desc->setFieldset($fieldset);
                        $desc->setField($field);
                        $subject->$adder($desc);
                    }
                }

                // Sort VarietyDescriptions according to the configuration order
                $order = [];
                $i = 0;
                foreach ($config[$fieldset] as $field => $settings)
                    $order[$field] = $i++;
                $iterator = $subject->$getter()->getIterator();
                $iterator->uasort(function ($a, $b) use ($order) {
                    return ( $order[$a->getField()] < $order[$b->getField()] ) ? -1 : 1;
                });
                $subject->$setter(new ArrayCollection(iterator_to_array($iterator)));
            }
        }
        );
    }
}