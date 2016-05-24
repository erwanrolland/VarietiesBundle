<?php

namespace Librinfo\VarietiesBundle\Entity;

use Librinfo\DoctrineBundle\Entity\Traits\Nameable;
use Librinfo\UserBundle\Entity\Traits\Traceable;
use Librinfo\DoctrineBundle\Entity\Traits\Descriptible;

/**
 * Variety
 */
class Variety extends SuperVariety
{
    use Nameable,
        Traceable,
        Descriptible;

    /**
     * @var string
     */
    private $life_cycle;

    /**
     * @var bool
     */
    private $official;

    /**
     * @var string
     */
    private $official_name;

    /**
     * @var \DateTime
     */
    private $official_date_in;

    /**
     * @var \DateTime
     */
    private $official_date_out;

    /**
     * @var string
     */
    private $official_maintainer;

    /**
     * @var int
     */
    private $legal_germination_rate;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $strains;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $variety_descriptions;

    /**
     * @var \Librinfo\VarietiesBundle\Entity\Species
     */
    private $species;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $plant_categories;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->strains = new \Doctrine\Common\Collections\ArrayCollection();
        $this->variety_descriptions = new \Doctrine\Common\Collections\ArrayCollection();
        $this->plant_categories = new \Doctrine\Common\Collections\ArrayCollection();
    }

//    public function __get($name)
//    {
//        if (property_exists($this, $name)) {
//          return $this->$name;
//        }
//
//        if ( strpos($name, 'description_') === 0 )
//        {
//            $parts = explode('_', $name);
//            if ( count($parts) == 3 )
//                return $this->getGenericDescription($parts[1], $parts[2]);
//        }
//
//
//        trigger_error(
//            'Undefined property via __get(): ' . $name .
//            ' in ' . $trace[0]['file'] .
//            ' on line ' . $trace[0]['line'],
//            E_USER_NOTICE);
//        return null;
//    }

   /**
     * Set lifeCycle
     *
     * @param string $lifeCycle
     *
     * @return SuperVariety
     */
    public function setLifeCycle($lifeCycle)
    {
        $this->life_cycle = $lifeCycle;

        return $this;
    }

    /**
     * Get lifeCycle
     *
     * @return string
     */
    public function getLifeCycle()
    {
        return $this->life_cycle;
    }

    /**
     * Set official
     *
     * @param bool $official
     *
     * @return SuperVariety
     */
    public function setOfficial($official)
    {
        $this->official = $official;

        return $this;
    }

    /**
     * Get official
     *
     * @return bool
     */
    public function getOfficial()
    {
        return $this->official;
    }

    /**
     * Set officialName
     *
     * @param string $officialName
     *
     * @return SuperVariety
     */
    public function setOfficialName($officialName)
    {
        $this->official_name = $officialName;

        return $this;
    }

    /**
     * Get officialName
     *
     * @return string
     */
    public function getOfficialName()
    {
        return $this->official_name;
    }

    /**
     * Set officialDateIn
     *
     * @param \DateTime $officialDateIn
     *
     * @return SuperVariety
     */
    public function setOfficialDateIn($officialDateIn)
    {
        $this->official_date_in = $officialDateIn;

        return $this;
    }

    /**
     * Get officialDateIn
     *
     * @return \DateTime
     */
    public function getOfficialDateIn()
    {
        return $this->official_date_in;
    }

    /**
     * Set officialDateOut
     *
     * @param \DateTime $officialDateOut
     *
     * @return SuperVariety
     */
    public function setOfficialDateOut($officialDateOut)
    {
        $this->official_date_out = $officialDateOut;

        return $this;
    }

    /**
     * Get officialDateOut
     *
     * @return \DateTime
     */
    public function getOfficialDateOut()
    {
        return $this->official_date_out;
    }

    /**
     * Set officialMaintainer
     *
     * @param string $officialMaintainer
     *
     * @return SuperVariety
     */
    public function setOfficialMaintainer($officialMaintainer)
    {
        $this->official_maintainer = $officialMaintainer;

        return $this;
    }

    /**
     * Get officialMaintainer
     *
     * @return string
     */
    public function getOfficialMaintainer()
    {
        return $this->official_maintainer;
    }

    /**
     * Set legalGerminationRate
     *
     * @param int $legalGerminationRate
     *
     * @return SuperVariety
     */
    public function setLegalGerminationRate($legalGerminationRate)
    {
        $this->legal_germination_rate = $legalGerminationRate;

        return $this;
    }

    /**
     * Get legalGerminationRate
     *
     * @return int
     */
    public function getLegalGerminationRate()
    {
        return $this->legal_germination_rate;
    }

    /**
     * Add strain
     *
     * @param \Librinfo\VarietiesBundle\Entity\Strain $strain
     *
     * @return Variety
     */
    public function addStrain(\Librinfo\VarietiesBundle\Entity\Strain $strain)
    {
        $strain->setVariety($this);
        $this->strains->add($strain);
        return $this;
    }

    /**
     * Remove strain
     *
     * @param \Librinfo\VarietiesBundle\Entity\Strain $strain
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeStrain(\Librinfo\VarietiesBundle\Entity\Strain $strain)
    {
        return $this->strains->removeElement($strain);
    }

    /**
     * Get strains
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getStrains()
    {
        return $this->strains;
    }

    /**
     * Add varietyDescription
     *
     * @param \Librinfo\VarietiesBundle\Entity\VarietyDescription $varietyDescription
     *
     * @return Variety
     */
    public function addVarietyDescription(\Librinfo\VarietiesBundle\Entity\VarietyDescription $varietyDescription)
    {
        $varietyDescription->setVariety($this);
        $this->variety_descriptions->add($varietyDescription);
        return $this;
    }

    /**
     * Remove varietyDescription
     *
     * @param \Librinfo\VarietiesBundle\Entity\VarietyDescription $varietyDescription
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeVarietyDescription(\Librinfo\VarietiesBundle\Entity\VarietyDescription $varietyDescription)
    {
        return $this->variety_descriptions->removeElement($varietyDescription);
    }

    /**
     * Get varietyDescriptions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getVarietyDescriptions()
    {
        return $this->variety_descriptions;
    }

    public function getVariety_descriptions()
    {
        return $this->getVarietyDescriptions();
    }


    /**
     * Set species
     *
     * @param \Librinfo\VarietiesBundle\Entity\Species $species
     *
     * @return Variety
     */
    public function setSpecies(\Librinfo\VarietiesBundle\Entity\Species $species = null)
    {
        $this->species = $species;

        return $this;
    }

    /**
     * Get species
     *
     * @return \Librinfo\VarietiesBundle\Entity\Species
     */
    public function getSpecies()
    {
        return $this->species;
    }

    public function getSpeciesName()
    {
        return $this->species->getName();
    }

    /**
     * Add plantCategory
     *
     * @param \Librinfo\VarietiesBundle\Entity\PlantCategory $plantCategory
     *
     * @return Variety
     */
    public function addPlantCategory(\Librinfo\VarietiesBundle\Entity\PlantCategory $plantCategory)
    {
        $this->plant_categories[] = $plantCategory;

        return $this;
    }

    /**
     * Remove plantCategory
     *
     * @param \Librinfo\VarietiesBundle\Entity\PlantCategory $plantCategory
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removePlantCategory(\Librinfo\VarietiesBundle\Entity\PlantCategory $plantCategory)
    {
        return $this->plant_categories->removeElement($plantCategory);
    }

    /**
     * Get plantCategories
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPlantCategories()
    {
        return $this->plant_categories;
    }

    /**
     *
     * @param string $fieldset
     * @param string $field
     * @return \Librinfo\VarietiesBundle\Entity\VarietyDescription
     */
//    public function getGenericDescription($fieldset, $field)
//    {
//        foreach ( $this->getVarietyDescriptions() as $description )
//        if ( $description->getFieldset() == $fieldset && $description->getField() == $field )
//            return $description;
//
//        $description = new VarietyDescription();
//        $description->setFieldset($fieldset);
//        $description->setField($field);
//        $this->addVarietyDescription($description);
//        return $description;
//    }

}

