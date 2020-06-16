<?php

namespace mdlutz24\realpagepanda\FloorPlan\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FloorPlanObject StructType
 * @subpackage Structs
 */
class FloorPlanObject extends AbstractStructBase
{
    /**
     * The FloorPlanID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $FloorPlanID;
    /**
     * The FloorPlanCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FloorPlanCode;
    /**
     * The FloorPlanName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FloorPlanName;
    /**
     * The FloorPlanNameMarketing
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FloorPlanNameMarketing;
    /**
     * The FloorPlanDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FloorPlanDescription;
    /**
     * The Bedrooms
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Bedrooms;
    /**
     * The Bathrooms
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Bathrooms;
    /**
     * The FloorPlanGroupID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FloorPlanGroupID;
    /**
     * The FloorPlanGroupName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FloorPlanGroupName;
    /**
     * The MaximumOccupants
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MaximumOccupants;
    /**
     * The ExcludedFromOccupancy
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ExcludedFromOccupancy;
    /**
     * The GrossSquareFootage
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $GrossSquareFootage;
    /**
     * The RentableSquareFootage
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RentableSquareFootage;
    /**
     * The RentMin
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RentMin;
    /**
     * The RentMax
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RentMax;
    /**
     * Constructor method for FloorPlanObject
     * @uses FloorPlanObject::setFloorPlanID()
     * @uses FloorPlanObject::setFloorPlanCode()
     * @uses FloorPlanObject::setFloorPlanName()
     * @uses FloorPlanObject::setFloorPlanNameMarketing()
     * @uses FloorPlanObject::setFloorPlanDescription()
     * @uses FloorPlanObject::setBedrooms()
     * @uses FloorPlanObject::setBathrooms()
     * @uses FloorPlanObject::setFloorPlanGroupID()
     * @uses FloorPlanObject::setFloorPlanGroupName()
     * @uses FloorPlanObject::setMaximumOccupants()
     * @uses FloorPlanObject::setExcludedFromOccupancy()
     * @uses FloorPlanObject::setGrossSquareFootage()
     * @uses FloorPlanObject::setRentableSquareFootage()
     * @uses FloorPlanObject::setRentMin()
     * @uses FloorPlanObject::setRentMax()
     * @param int $floorPlanID
     * @param string $floorPlanCode
     * @param string $floorPlanName
     * @param string $floorPlanNameMarketing
     * @param string $floorPlanDescription
     * @param string $bedrooms
     * @param string $bathrooms
     * @param string $floorPlanGroupID
     * @param string $floorPlanGroupName
     * @param string $maximumOccupants
     * @param string $excludedFromOccupancy
     * @param string $grossSquareFootage
     * @param string $rentableSquareFootage
     * @param string $rentMin
     * @param string $rentMax
     */
    public function __construct($floorPlanID = null, $floorPlanCode = null, $floorPlanName = null, $floorPlanNameMarketing = null, $floorPlanDescription = null, $bedrooms = null, $bathrooms = null, $floorPlanGroupID = null, $floorPlanGroupName = null, $maximumOccupants = null, $excludedFromOccupancy = null, $grossSquareFootage = null, $rentableSquareFootage = null, $rentMin = null, $rentMax = null)
    {
        $this
            ->setFloorPlanID($floorPlanID)
            ->setFloorPlanCode($floorPlanCode)
            ->setFloorPlanName($floorPlanName)
            ->setFloorPlanNameMarketing($floorPlanNameMarketing)
            ->setFloorPlanDescription($floorPlanDescription)
            ->setBedrooms($bedrooms)
            ->setBathrooms($bathrooms)
            ->setFloorPlanGroupID($floorPlanGroupID)
            ->setFloorPlanGroupName($floorPlanGroupName)
            ->setMaximumOccupants($maximumOccupants)
            ->setExcludedFromOccupancy($excludedFromOccupancy)
            ->setGrossSquareFootage($grossSquareFootage)
            ->setRentableSquareFootage($rentableSquareFootage)
            ->setRentMin($rentMin)
            ->setRentMax($rentMax);
    }
    /**
     * Get FloorPlanID value
     * @return int
     */
    public function getFloorPlanID()
    {
        return $this->FloorPlanID;
    }
    /**
     * Set FloorPlanID value
     * @param int $floorPlanID
     * @return \mdlutz24\realpagepanda\FloorPlan\StructType\FloorPlanObject
     */
    public function setFloorPlanID($floorPlanID = null)
    {
        // validation for constraint: int
        if (!is_null($floorPlanID) && !(is_int($floorPlanID) || ctype_digit($floorPlanID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($floorPlanID, true), gettype($floorPlanID)), __LINE__);
        }
        $this->FloorPlanID = $floorPlanID;
        return $this;
    }
    /**
     * Get FloorPlanCode value
     * @return string|null
     */
    public function getFloorPlanCode()
    {
        return $this->FloorPlanCode;
    }
    /**
     * Set FloorPlanCode value
     * @param string $floorPlanCode
     * @return \mdlutz24\realpagepanda\FloorPlan\StructType\FloorPlanObject
     */
    public function setFloorPlanCode($floorPlanCode = null)
    {
        // validation for constraint: string
        if (!is_null($floorPlanCode) && !is_string($floorPlanCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($floorPlanCode, true), gettype($floorPlanCode)), __LINE__);
        }
        $this->FloorPlanCode = $floorPlanCode;
        return $this;
    }
    /**
     * Get FloorPlanName value
     * @return string|null
     */
    public function getFloorPlanName()
    {
        return $this->FloorPlanName;
    }
    /**
     * Set FloorPlanName value
     * @param string $floorPlanName
     * @return \mdlutz24\realpagepanda\FloorPlan\StructType\FloorPlanObject
     */
    public function setFloorPlanName($floorPlanName = null)
    {
        // validation for constraint: string
        if (!is_null($floorPlanName) && !is_string($floorPlanName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($floorPlanName, true), gettype($floorPlanName)), __LINE__);
        }
        $this->FloorPlanName = $floorPlanName;
        return $this;
    }
    /**
     * Get FloorPlanNameMarketing value
     * @return string|null
     */
    public function getFloorPlanNameMarketing()
    {
        return $this->FloorPlanNameMarketing;
    }
    /**
     * Set FloorPlanNameMarketing value
     * @param string $floorPlanNameMarketing
     * @return \mdlutz24\realpagepanda\FloorPlan\StructType\FloorPlanObject
     */
    public function setFloorPlanNameMarketing($floorPlanNameMarketing = null)
    {
        // validation for constraint: string
        if (!is_null($floorPlanNameMarketing) && !is_string($floorPlanNameMarketing)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($floorPlanNameMarketing, true), gettype($floorPlanNameMarketing)), __LINE__);
        }
        $this->FloorPlanNameMarketing = $floorPlanNameMarketing;
        return $this;
    }
    /**
     * Get FloorPlanDescription value
     * @return string|null
     */
    public function getFloorPlanDescription()
    {
        return $this->FloorPlanDescription;
    }
    /**
     * Set FloorPlanDescription value
     * @param string $floorPlanDescription
     * @return \mdlutz24\realpagepanda\FloorPlan\StructType\FloorPlanObject
     */
    public function setFloorPlanDescription($floorPlanDescription = null)
    {
        // validation for constraint: string
        if (!is_null($floorPlanDescription) && !is_string($floorPlanDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($floorPlanDescription, true), gettype($floorPlanDescription)), __LINE__);
        }
        $this->FloorPlanDescription = $floorPlanDescription;
        return $this;
    }
    /**
     * Get Bedrooms value
     * @return string|null
     */
    public function getBedrooms()
    {
        return $this->Bedrooms;
    }
    /**
     * Set Bedrooms value
     * @param string $bedrooms
     * @return \mdlutz24\realpagepanda\FloorPlan\StructType\FloorPlanObject
     */
    public function setBedrooms($bedrooms = null)
    {
        // validation for constraint: string
        if (!is_null($bedrooms) && !is_string($bedrooms)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bedrooms, true), gettype($bedrooms)), __LINE__);
        }
        $this->Bedrooms = $bedrooms;
        return $this;
    }
    /**
     * Get Bathrooms value
     * @return string|null
     */
    public function getBathrooms()
    {
        return $this->Bathrooms;
    }
    /**
     * Set Bathrooms value
     * @param string $bathrooms
     * @return \mdlutz24\realpagepanda\FloorPlan\StructType\FloorPlanObject
     */
    public function setBathrooms($bathrooms = null)
    {
        // validation for constraint: string
        if (!is_null($bathrooms) && !is_string($bathrooms)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bathrooms, true), gettype($bathrooms)), __LINE__);
        }
        $this->Bathrooms = $bathrooms;
        return $this;
    }
    /**
     * Get FloorPlanGroupID value
     * @return string|null
     */
    public function getFloorPlanGroupID()
    {
        return $this->FloorPlanGroupID;
    }
    /**
     * Set FloorPlanGroupID value
     * @param string $floorPlanGroupID
     * @return \mdlutz24\realpagepanda\FloorPlan\StructType\FloorPlanObject
     */
    public function setFloorPlanGroupID($floorPlanGroupID = null)
    {
        // validation for constraint: string
        if (!is_null($floorPlanGroupID) && !is_string($floorPlanGroupID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($floorPlanGroupID, true), gettype($floorPlanGroupID)), __LINE__);
        }
        $this->FloorPlanGroupID = $floorPlanGroupID;
        return $this;
    }
    /**
     * Get FloorPlanGroupName value
     * @return string|null
     */
    public function getFloorPlanGroupName()
    {
        return $this->FloorPlanGroupName;
    }
    /**
     * Set FloorPlanGroupName value
     * @param string $floorPlanGroupName
     * @return \mdlutz24\realpagepanda\FloorPlan\StructType\FloorPlanObject
     */
    public function setFloorPlanGroupName($floorPlanGroupName = null)
    {
        // validation for constraint: string
        if (!is_null($floorPlanGroupName) && !is_string($floorPlanGroupName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($floorPlanGroupName, true), gettype($floorPlanGroupName)), __LINE__);
        }
        $this->FloorPlanGroupName = $floorPlanGroupName;
        return $this;
    }
    /**
     * Get MaximumOccupants value
     * @return string|null
     */
    public function getMaximumOccupants()
    {
        return $this->MaximumOccupants;
    }
    /**
     * Set MaximumOccupants value
     * @param string $maximumOccupants
     * @return \mdlutz24\realpagepanda\FloorPlan\StructType\FloorPlanObject
     */
    public function setMaximumOccupants($maximumOccupants = null)
    {
        // validation for constraint: string
        if (!is_null($maximumOccupants) && !is_string($maximumOccupants)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($maximumOccupants, true), gettype($maximumOccupants)), __LINE__);
        }
        $this->MaximumOccupants = $maximumOccupants;
        return $this;
    }
    /**
     * Get ExcludedFromOccupancy value
     * @return string|null
     */
    public function getExcludedFromOccupancy()
    {
        return $this->ExcludedFromOccupancy;
    }
    /**
     * Set ExcludedFromOccupancy value
     * @param string $excludedFromOccupancy
     * @return \mdlutz24\realpagepanda\FloorPlan\StructType\FloorPlanObject
     */
    public function setExcludedFromOccupancy($excludedFromOccupancy = null)
    {
        // validation for constraint: string
        if (!is_null($excludedFromOccupancy) && !is_string($excludedFromOccupancy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($excludedFromOccupancy, true), gettype($excludedFromOccupancy)), __LINE__);
        }
        $this->ExcludedFromOccupancy = $excludedFromOccupancy;
        return $this;
    }
    /**
     * Get GrossSquareFootage value
     * @return string|null
     */
    public function getGrossSquareFootage()
    {
        return $this->GrossSquareFootage;
    }
    /**
     * Set GrossSquareFootage value
     * @param string $grossSquareFootage
     * @return \mdlutz24\realpagepanda\FloorPlan\StructType\FloorPlanObject
     */
    public function setGrossSquareFootage($grossSquareFootage = null)
    {
        // validation for constraint: string
        if (!is_null($grossSquareFootage) && !is_string($grossSquareFootage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($grossSquareFootage, true), gettype($grossSquareFootage)), __LINE__);
        }
        $this->GrossSquareFootage = $grossSquareFootage;
        return $this;
    }
    /**
     * Get RentableSquareFootage value
     * @return string|null
     */
    public function getRentableSquareFootage()
    {
        return $this->RentableSquareFootage;
    }
    /**
     * Set RentableSquareFootage value
     * @param string $rentableSquareFootage
     * @return \mdlutz24\realpagepanda\FloorPlan\StructType\FloorPlanObject
     */
    public function setRentableSquareFootage($rentableSquareFootage = null)
    {
        // validation for constraint: string
        if (!is_null($rentableSquareFootage) && !is_string($rentableSquareFootage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rentableSquareFootage, true), gettype($rentableSquareFootage)), __LINE__);
        }
        $this->RentableSquareFootage = $rentableSquareFootage;
        return $this;
    }
    /**
     * Get RentMin value
     * @return string|null
     */
    public function getRentMin()
    {
        return $this->RentMin;
    }
    /**
     * Set RentMin value
     * @param string $rentMin
     * @return \mdlutz24\realpagepanda\FloorPlan\StructType\FloorPlanObject
     */
    public function setRentMin($rentMin = null)
    {
        // validation for constraint: string
        if (!is_null($rentMin) && !is_string($rentMin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rentMin, true), gettype($rentMin)), __LINE__);
        }
        $this->RentMin = $rentMin;
        return $this;
    }
    /**
     * Get RentMax value
     * @return string|null
     */
    public function getRentMax()
    {
        return $this->RentMax;
    }
    /**
     * Set RentMax value
     * @param string $rentMax
     * @return \mdlutz24\realpagepanda\FloorPlan\StructType\FloorPlanObject
     */
    public function setRentMax($rentMax = null)
    {
        // validation for constraint: string
        if (!is_null($rentMax) && !is_string($rentMax)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rentMax, true), gettype($rentMax)), __LINE__);
        }
        $this->RentMax = $rentMax;
        return $this;
    }
}
