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
    private $latin_name;

    /**
     * @var string
     */
    private $alias;

    /**
     * @var string
     */
    private $code;

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
     * @var string
     */
    private $regulatory_status;

    /**
     * @var int
     */
    private $germination_rate;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $strains;

    /**
     * @var \Librinfo\VarietiesBundle\Entity\Species
     */
    private $species;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $plant_categories;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $professional_descriptions;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $amateur_descriptions;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $production_descriptions;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $commercial_descriptions;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $plant_descriptions;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $culture_descriptions;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $inner_descriptions;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->strains = new \Doctrine\Common\Collections\ArrayCollection();
        $this->plant_categories = new \Doctrine\Common\Collections\ArrayCollection();
        $this->professional_descriptions = new \Doctrine\Common\Collections\ArrayCollection();
        $this->amateur_descriptions = new \Doctrine\Common\Collections\ArrayCollection();
        $this->production_descriptions = new \Doctrine\Common\Collections\ArrayCollection();
        $this->commercial_descriptions = new \Doctrine\Common\Collections\ArrayCollection();
        $this->plant_descriptions = new \Doctrine\Common\Collections\ArrayCollection();
        $this->culture_descriptions = new \Doctrine\Common\Collections\ArrayCollection();
        $this->inner_descriptions = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set latinName
     *
     * @param string $latinName
     *
     * @return Variety
     */
    public function setLatinName($latinName)
    {
        $this->latin_name = $latinName;

        return $this;
    }

    /**
     * Get latinName
     *
     * @return string
     */
    public function getLatinName()
    {
        return $this->latin_name;
    }

    /**
     * Set alias
     *
     * @param string $alias
     *
     * @return Variety
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;

        return $this;
    }

    /**
     * Get alias
     *
     * @return string
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return Variety
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set lifeCycle
     *
     * @param string $lifeCycle
     *
     * @return Variety
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
     * @return Variety
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
     * @return Variety
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
     * @return Variety
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
     * @return Variety
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
     * @return Variety
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
     * @return Variety
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
     * Set regulatoryStatus
     *
     * @param string $regulatoryStatus
     *
     * @return Variety
     */
    public function setRegulatoryStatus($regulatoryStatus)
    {
        $this->regulatory_status = $regulatoryStatus;

        return $this;
    }

    /**
     * Get regulatoryStatus
     *
     * @return string
     */
    public function getRegulatoryStatus()
    {
        return $this->regulatory_status;
    }

    /**
     * Set germinationRate
     *
     * @param int $germinationRate
     *
     * @return Variety
     */
    public function setGerminationRate($germinationRate)
    {
        $this->germination_rate = $germinationRate;

        return $this;
    }

    /**
     * Get germinationRate
     *
     * @return int
     */
    public function getGerminationRate()
    {
        return $this->germination_rate;
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
        $this->strains[] = $strain;

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
     * Add professionalDescription
     *
     * @param \Librinfo\VarietiesBundle\Entity\VarietyDescriptionProfessional $professionalDescription
     *
     * @return SuperVariety
     */
    public function addProfessionalDescription(\Librinfo\VarietiesBundle\Entity\VarietyDescriptionProfessional $professionalDescription)
    {
        $this->professional_descriptions[] = $professionalDescription;

        return $this;
    }

    /**
     * Remove professionalDescription
     *
     * @param \Librinfo\VarietiesBundle\Entity\VarietyDescriptionProfessional $professionalDescription
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeProfessionalDescription(\Librinfo\VarietiesBundle\Entity\VarietyDescriptionProfessional $professionalDescription)
    {
        return $this->professional_descriptions->removeElement($professionalDescription);
    }

    /**
     * Get professionalDescriptions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProfessionalDescriptions()
    {
        return $this->professional_descriptions;
    }

    /**
     * alias for getProfessionalDescriptions()
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProfessional_descriptions()
    {
        return $this->getProfessionalDescriptions();
    }

    /**
     * Set professional descriptions
     * @param \Doctrine\Common\Collections\Collection $descriptions
     * @return Variety
     */
    public function setProfessionalDescriptions($descriptions)
    {
        foreach ($descriptions as $description)
            $description->setVariety($this);
        $this->professional_descriptions = $descriptions;
        return $this;
    }

    /**
     * Add amateurDescription
     *
     * @param \Librinfo\VarietiesBundle\Entity\VarietyDescriptionAmateur $amateurDescription
     *
     * @return SuperVariety
     */
    public function addAmateurDescription(\Librinfo\VarietiesBundle\Entity\VarietyDescriptionAmateur $amateurDescription)
    {
        $this->amateur_descriptions[] = $amateurDescription;

        return $this;
    }

    /**
     * Remove amateurDescription
     *
     * @param \Librinfo\VarietiesBundle\Entity\VarietyDescriptionAmateur $amateurDescription
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeAmateurDescription(\Librinfo\VarietiesBundle\Entity\VarietyDescriptionAmateur $amateurDescription)
    {
        return $this->amateur_descriptions->removeElement($amateurDescription);
    }

    /**
     * Get amateurDescriptions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAmateurDescriptions()
    {
        return $this->amateur_descriptions;
    }

    /**
     * Get amateurDescriptions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAmateur_descriptions()
    {
        return $this->amateur_descriptions;
    }

    /**
     * Set amateur descriptions
     * @param \Doctrine\Common\Collections\Collection $descriptions
     * @return Variety
     */
    public function setAmateurDescriptions($descriptions)
    {
        $this->amateur_descriptions = $descriptions;
        return $this;
    }

    /**
     * Add productionDescription
     *
     * @param \Librinfo\VarietiesBundle\Entity\VarietyDescriptionProduction $productionDescription
     *
     * @return SuperVariety
     */
    public function addProductionDescription(\Librinfo\VarietiesBundle\Entity\VarietyDescriptionProduction $productionDescription)
    {
        $this->production_descriptions[] = $productionDescription;

        return $this;
    }

    /**
     * Remove productionDescription
     *
     * @param \Librinfo\VarietiesBundle\Entity\VarietyDescriptionProduction $productionDescription
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeProductionDescription(\Librinfo\VarietiesBundle\Entity\VarietyDescriptionProduction $productionDescription)
    {
        return $this->production_descriptions->removeElement($productionDescription);
    }

    /**
     * Get productionDescriptions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProductionDescriptions()
    {
        return $this->production_descriptions;
    }

    /**
     * alias for getProductionDescriptions()
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProduction_descriptions()
    {
        return $this->getProductionDescriptions();
    }

    /**
     * Set production descriptions
     * @param \Doctrine\Common\Collections\Collection $descriptions
     * @return Variety
     */
    public function setProductionDescriptions($descriptions)
    {
        foreach ($descriptions as $description)
            $description->setVariety($this);
        $this->production_descriptions = $descriptions;
        return $this;
    }

    /**
     * Add commercialDescription
     *
     * @param \Librinfo\VarietiesBundle\Entity\VarietyDescriptionCommercial $commercialDescription
     *
     * @return SuperVariety
     */
    public function addCommercialDescription(\Librinfo\VarietiesBundle\Entity\VarietyDescriptionCommercial $commercialDescription)
    {
        $this->commercial_descriptions[] = $commercialDescription;

        return $this;
    }

    /**
     * Remove commercialDescription
     *
     * @param \Librinfo\VarietiesBundle\Entity\VarietyDescriptionCommercial $commercialDescription
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeCommercialDescription(\Librinfo\VarietiesBundle\Entity\VarietyDescriptionCommercial $commercialDescription)
    {
        return $this->commercial_descriptions->removeElement($commercialDescription);
    }

    /**
     * Get commercialDescriptions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCommercialDescriptions()
    {
        return $this->commercial_descriptions;
    }

    /**
     * alias for getCommercialDescriptions()
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCommercial_descriptions()
    {
        return $this->getCommercialDescriptions();
    }

    /**
     * Set commercial descriptions
     * @param \Doctrine\Common\Collections\Collection $descriptions
     * @return Variety
     */
    public function setCommercialDescriptions($descriptions)
    {
        foreach ($descriptions as $description)
            $description->setVariety($this);
        $this->commercial_descriptions = $descriptions;
        return $this;
    }

    /**
     * Add plantDescription
     *
     * @param \Librinfo\VarietiesBundle\Entity\VarietyDescriptionPlant $plantDescription
     *
     * @return SuperVariety
     */
    public function addPlantDescription(\Librinfo\VarietiesBundle\Entity\VarietyDescriptionPlant $plantDescription)
    {
        $this->plant_descriptions[] = $plantDescription;

        return $this;
    }

    /**
     * Remove plantDescription
     *
     * @param \Librinfo\VarietiesBundle\Entity\VarietyDescriptionPlant $plantDescription
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removePlantDescription(\Librinfo\VarietiesBundle\Entity\VarietyDescriptionPlant $plantDescription)
    {
        return $this->plant_descriptions->removeElement($plantDescription);
    }

    /**
     * Get plantDescriptions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPlantDescriptions()
    {
        return $this->plant_descriptions;
    }

    /**
     * alias for getPlantDescriptions()
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPlant_descriptions()
    {
        return $this->getPlantDescriptions();
    }

    /**
     * Set plant descriptions
     * @param \Doctrine\Common\Collections\Collection $descriptions
     * @return Variety
     */
    public function setPlantDescriptions($descriptions)
    {
        foreach ($descriptions as $description)
            $description->setVariety($this);
        $this->plant_descriptions = $descriptions;
        return $this;
    }

    /**
     * Add cultureDescription
     *
     * @param \Librinfo\VarietiesBundle\Entity\VarietyDescriptionCulture $cultureDescription
     *
     * @return SuperVariety
     */
    public function addCultureDescription(\Librinfo\VarietiesBundle\Entity\VarietyDescriptionCulture $cultureDescription)
    {
        $this->culture_descriptions[] = $cultureDescription;

        return $this;
    }

    /**
     * Remove cultureDescription
     *
     * @param \Librinfo\VarietiesBundle\Entity\VarietyDescriptionCulture $cultureDescription
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeCultureDescription(\Librinfo\VarietiesBundle\Entity\VarietyDescriptionCulture $cultureDescription)
    {
        return $this->culture_descriptions->removeElement($cultureDescription);
    }

    /**
     * Get cultureDescriptions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCultureDescriptions()
    {
        return $this->culture_descriptions;
    }

    /**
     * alias for getCultureDescriptions()
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCulture_descriptions()
    {
        return $this->getCultureDescriptions();
    }

    /**
     * Set culture descriptions
     * @param \Doctrine\Common\Collections\Collection $descriptions
     * @return Variety
     */
    public function setCultureDescriptions($descriptions)
    {
        foreach ($descriptions as $description)
            $description->setVariety($this);
        $this->culture_descriptions = $descriptions;
        return $this;
    }

    /**
     * Add innerDescription
     *
     * @param \Librinfo\VarietiesBundle\Entity\VarietyDescriptionInner $innerDescription
     *
     * @return SuperVariety
     */
    public function addInnerDescription(\Librinfo\VarietiesBundle\Entity\VarietyDescriptionInner $innerDescription)
    {
        $this->inner_descriptions[] = $innerDescription;

        return $this;
    }

    /**
     * Remove innerDescription
     *
     * @param \Librinfo\VarietiesBundle\Entity\VarietyDescriptionInner $innerDescription
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeInnerDescription(\Librinfo\VarietiesBundle\Entity\VarietyDescriptionInner $innerDescription)
    {
        return $this->inner_descriptions->removeElement($innerDescription);
    }

    /**
     * Get innerDescriptions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getInnerDescriptions()
    {
        return $this->inner_descriptions;
    }

    /**
     * Set inner descriptions
     * @param \Doctrine\Common\Collections\Collection $descriptions
     * @return Variety
     */
    public function setInnerDescriptions($descriptions)
    {
        $this->inner_descriptions = $descriptions;
        return $this;
    }

}
