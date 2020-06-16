<?php

namespace mdlutz24\realpagepanda\Unit\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnitObject StructType
 * @subpackage Structs
 */
class UnitObject extends AbstractStructBase
{
    /**
     * The PropertyNumberID
     * Meta information extracted from the WSDL
     * - form: unqualified
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $PropertyNumberID;
    /**
     * The BaseRentAmount
     * Meta information extracted from the WSDL
     * - form: unqualified
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $BaseRentAmount;
    /**
     * The FloorPlanMarketRent
     * Meta information extracted from the WSDL
     * - form: unqualified
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $FloorPlanMarketRent;
    /**
     * The UnitMarketRent
     * Meta information extracted from the WSDL
     * - form: unqualified
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $UnitMarketRent;
    /**
     * The NonRevenueFlag
     * Meta information extracted from the WSDL
     * - form: unqualified
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $NonRevenueFlag;
    /**
     * The NonRefundFee
     * Meta information extracted from the WSDL
     * - form: unqualified
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $NonRefundFee;
    /**
     * The DepositAmount
     * Meta information extracted from the WSDL
     * - form: unqualified
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $DepositAmount;
    /**
     * The NonRevenueDescription
     * Meta information extracted from the WSDL
     * - form: unqualified
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $NonRevenueDescription;
    /**
     * The Accessibility
     * Meta information extracted from the WSDL
     * - form: unqualified
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \mdlutz24\realpagepanda\Unit\StructType\Accessibility
     */
    public $Accessibility;
    /**
     * The Address
     * Meta information extracted from the WSDL
     * - form: unqualified
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \mdlutz24\realpagepanda\Unit\StructType\Address
     */
    public $Address;
    /**
     * The Availability
     * Meta information extracted from the WSDL
     * - form: unqualified
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \mdlutz24\realpagepanda\Unit\StructType\Availability
     */
    public $Availability;
    /**
     * The FloorPlan
     * Meta information extracted from the WSDL
     * - form: unqualified
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \mdlutz24\realpagepanda\Unit\StructType\FloorPlan
     */
    public $FloorPlan;
    /**
     * The UnitDetails
     * Meta information extracted from the WSDL
     * - form: unqualified
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \mdlutz24\realpagepanda\Unit\StructType\UnitDetails
     */
    public $UnitDetails;
    /**
     * The rentMatrix
     * Meta information extracted from the WSDL
     * - form: unqualified
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \mdlutz24\realpagepanda\Unit\StructType\RentMatrix
     */
    public $rentMatrix;
    /**
     * Constructor method for UnitObject
     * @uses UnitObject::setPropertyNumberID()
     * @uses UnitObject::setBaseRentAmount()
     * @uses UnitObject::setFloorPlanMarketRent()
     * @uses UnitObject::setUnitMarketRent()
     * @uses UnitObject::setNonRevenueFlag()
     * @uses UnitObject::setNonRefundFee()
     * @uses UnitObject::setDepositAmount()
     * @uses UnitObject::setNonRevenueDescription()
     * @uses UnitObject::setAccessibility()
     * @uses UnitObject::setAddress()
     * @uses UnitObject::setAvailability()
     * @uses UnitObject::setFloorPlan()
     * @uses UnitObject::setUnitDetails()
     * @uses UnitObject::setRentMatrix()
     * @param int $propertyNumberID
     * @param float $baseRentAmount
     * @param float $floorPlanMarketRent
     * @param float $unitMarketRent
     * @param string $nonRevenueFlag
     * @param float $nonRefundFee
     * @param float $depositAmount
     * @param string $nonRevenueDescription
     * @param \mdlutz24\realpagepanda\Unit\StructType\Accessibility $accessibility
     * @param \mdlutz24\realpagepanda\Unit\StructType\Address $address
     * @param \mdlutz24\realpagepanda\Unit\StructType\Availability $availability
     * @param \mdlutz24\realpagepanda\Unit\StructType\FloorPlan $floorPlan
     * @param \mdlutz24\realpagepanda\Unit\StructType\UnitDetails $unitDetails
     * @param \mdlutz24\realpagepanda\Unit\StructType\RentMatrix $rentMatrix
     */
    public function __construct($propertyNumberID = null, $baseRentAmount = null, $floorPlanMarketRent = null, $unitMarketRent = null, $nonRevenueFlag = null, $nonRefundFee = null, $depositAmount = null, $nonRevenueDescription = null, \mdlutz24\realpagepanda\Unit\StructType\Accessibility $accessibility = null, \mdlutz24\realpagepanda\Unit\StructType\Address $address = null, \mdlutz24\realpagepanda\Unit\StructType\Availability $availability = null, \mdlutz24\realpagepanda\Unit\StructType\FloorPlan $floorPlan = null, \mdlutz24\realpagepanda\Unit\StructType\UnitDetails $unitDetails = null, \mdlutz24\realpagepanda\Unit\StructType\RentMatrix $rentMatrix = null)
    {
        $this
            ->setPropertyNumberID($propertyNumberID)
            ->setBaseRentAmount($baseRentAmount)
            ->setFloorPlanMarketRent($floorPlanMarketRent)
            ->setUnitMarketRent($unitMarketRent)
            ->setNonRevenueFlag($nonRevenueFlag)
            ->setNonRefundFee($nonRefundFee)
            ->setDepositAmount($depositAmount)
            ->setNonRevenueDescription($nonRevenueDescription)
            ->setAccessibility($accessibility)
            ->setAddress($address)
            ->setAvailability($availability)
            ->setFloorPlan($floorPlan)
            ->setUnitDetails($unitDetails)
            ->setRentMatrix($rentMatrix);
    }
    /**
     * Get PropertyNumberID value
     * @return int
     */
    public function getPropertyNumberID()
    {
        return $this->PropertyNumberID;
    }
    /**
     * Set PropertyNumberID value
     * @param int $propertyNumberID
     * @return \mdlutz24\realpagepanda\Unit\StructType\UnitObject
     */
    public function setPropertyNumberID($propertyNumberID = null)
    {
        // validation for constraint: int
        if (!is_null($propertyNumberID) && !(is_int($propertyNumberID) || ctype_digit($propertyNumberID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($propertyNumberID, true), gettype($propertyNumberID)), __LINE__);
        }
        $this->PropertyNumberID = $propertyNumberID;
        return $this;
    }
    /**
     * Get BaseRentAmount value
     * @return float
     */
    public function getBaseRentAmount()
    {
        return $this->BaseRentAmount;
    }
    /**
     * Set BaseRentAmount value
     * @param float $baseRentAmount
     * @return \mdlutz24\realpagepanda\Unit\StructType\UnitObject
     */
    public function setBaseRentAmount($baseRentAmount = null)
    {
        // validation for constraint: float
        if (!is_null($baseRentAmount) && !(is_float($baseRentAmount) || is_numeric($baseRentAmount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($baseRentAmount, true), gettype($baseRentAmount)), __LINE__);
        }
        $this->BaseRentAmount = $baseRentAmount;
        return $this;
    }
    /**
     * Get FloorPlanMarketRent value
     * @return float
     */
    public function getFloorPlanMarketRent()
    {
        return $this->FloorPlanMarketRent;
    }
    /**
     * Set FloorPlanMarketRent value
     * @param float $floorPlanMarketRent
     * @return \mdlutz24\realpagepanda\Unit\StructType\UnitObject
     */
    public function setFloorPlanMarketRent($floorPlanMarketRent = null)
    {
        // validation for constraint: float
        if (!is_null($floorPlanMarketRent) && !(is_float($floorPlanMarketRent) || is_numeric($floorPlanMarketRent))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($floorPlanMarketRent, true), gettype($floorPlanMarketRent)), __LINE__);
        }
        $this->FloorPlanMarketRent = $floorPlanMarketRent;
        return $this;
    }
    /**
     * Get UnitMarketRent value
     * @return float
     */
    public function getUnitMarketRent()
    {
        return $this->UnitMarketRent;
    }
    /**
     * Set UnitMarketRent value
     * @param float $unitMarketRent
     * @return \mdlutz24\realpagepanda\Unit\StructType\UnitObject
     */
    public function setUnitMarketRent($unitMarketRent = null)
    {
        // validation for constraint: float
        if (!is_null($unitMarketRent) && !(is_float($unitMarketRent) || is_numeric($unitMarketRent))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($unitMarketRent, true), gettype($unitMarketRent)), __LINE__);
        }
        $this->UnitMarketRent = $unitMarketRent;
        return $this;
    }
    /**
     * Get NonRevenueFlag value
     * @return string
     */
    public function getNonRevenueFlag()
    {
        return $this->NonRevenueFlag;
    }
    /**
     * Set NonRevenueFlag value
     * @param string $nonRevenueFlag
     * @return \mdlutz24\realpagepanda\Unit\StructType\UnitObject
     */
    public function setNonRevenueFlag($nonRevenueFlag = null)
    {
        // validation for constraint: string
        if (!is_null($nonRevenueFlag) && !is_string($nonRevenueFlag)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nonRevenueFlag, true), gettype($nonRevenueFlag)), __LINE__);
        }
        $this->NonRevenueFlag = $nonRevenueFlag;
        return $this;
    }
    /**
     * Get NonRefundFee value
     * @return float
     */
    public function getNonRefundFee()
    {
        return $this->NonRefundFee;
    }
    /**
     * Set NonRefundFee value
     * @param float $nonRefundFee
     * @return \mdlutz24\realpagepanda\Unit\StructType\UnitObject
     */
    public function setNonRefundFee($nonRefundFee = null)
    {
        // validation for constraint: float
        if (!is_null($nonRefundFee) && !(is_float($nonRefundFee) || is_numeric($nonRefundFee))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($nonRefundFee, true), gettype($nonRefundFee)), __LINE__);
        }
        $this->NonRefundFee = $nonRefundFee;
        return $this;
    }
    /**
     * Get DepositAmount value
     * @return float
     */
    public function getDepositAmount()
    {
        return $this->DepositAmount;
    }
    /**
     * Set DepositAmount value
     * @param float $depositAmount
     * @return \mdlutz24\realpagepanda\Unit\StructType\UnitObject
     */
    public function setDepositAmount($depositAmount = null)
    {
        // validation for constraint: float
        if (!is_null($depositAmount) && !(is_float($depositAmount) || is_numeric($depositAmount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($depositAmount, true), gettype($depositAmount)), __LINE__);
        }
        $this->DepositAmount = $depositAmount;
        return $this;
    }
    /**
     * Get NonRevenueDescription value
     * @return string|null
     */
    public function getNonRevenueDescription()
    {
        return $this->NonRevenueDescription;
    }
    /**
     * Set NonRevenueDescription value
     * @param string $nonRevenueDescription
     * @return \mdlutz24\realpagepanda\Unit\StructType\UnitObject
     */
    public function setNonRevenueDescription($nonRevenueDescription = null)
    {
        // validation for constraint: string
        if (!is_null($nonRevenueDescription) && !is_string($nonRevenueDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nonRevenueDescription, true), gettype($nonRevenueDescription)), __LINE__);
        }
        $this->NonRevenueDescription = $nonRevenueDescription;
        return $this;
    }
    /**
     * Get Accessibility value
     * @return \mdlutz24\realpagepanda\Unit\StructType\Accessibility|null
     */
    public function getAccessibility()
    {
        return $this->Accessibility;
    }
    /**
     * Set Accessibility value
     * @param \mdlutz24\realpagepanda\Unit\StructType\Accessibility $accessibility
     * @return \mdlutz24\realpagepanda\Unit\StructType\UnitObject
     */
    public function setAccessibility(\mdlutz24\realpagepanda\Unit\StructType\Accessibility $accessibility = null)
    {
        $this->Accessibility = $accessibility;
        return $this;
    }
    /**
     * Get Address value
     * @return \mdlutz24\realpagepanda\Unit\StructType\Address|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param \mdlutz24\realpagepanda\Unit\StructType\Address $address
     * @return \mdlutz24\realpagepanda\Unit\StructType\UnitObject
     */
    public function setAddress(\mdlutz24\realpagepanda\Unit\StructType\Address $address = null)
    {
        $this->Address = $address;
        return $this;
    }
    /**
     * Get Availability value
     * @return \mdlutz24\realpagepanda\Unit\StructType\Availability|null
     */
    public function getAvailability()
    {
        return $this->Availability;
    }
    /**
     * Set Availability value
     * @param \mdlutz24\realpagepanda\Unit\StructType\Availability $availability
     * @return \mdlutz24\realpagepanda\Unit\StructType\UnitObject
     */
    public function setAvailability(\mdlutz24\realpagepanda\Unit\StructType\Availability $availability = null)
    {
        $this->Availability = $availability;
        return $this;
    }
    /**
     * Get FloorPlan value
     * @return \mdlutz24\realpagepanda\Unit\StructType\FloorPlan|null
     */
    public function getFloorPlan()
    {
        return $this->FloorPlan;
    }
    /**
     * Set FloorPlan value
     * @param \mdlutz24\realpagepanda\Unit\StructType\FloorPlan $floorPlan
     * @return \mdlutz24\realpagepanda\Unit\StructType\UnitObject
     */
    public function setFloorPlan(\mdlutz24\realpagepanda\Unit\StructType\FloorPlan $floorPlan = null)
    {
        $this->FloorPlan = $floorPlan;
        return $this;
    }
    /**
     * Get UnitDetails value
     * @return \mdlutz24\realpagepanda\Unit\StructType\UnitDetails|null
     */
    public function getUnitDetails()
    {
        return $this->UnitDetails;
    }
    /**
     * Set UnitDetails value
     * @param \mdlutz24\realpagepanda\Unit\StructType\UnitDetails $unitDetails
     * @return \mdlutz24\realpagepanda\Unit\StructType\UnitObject
     */
    public function setUnitDetails(\mdlutz24\realpagepanda\Unit\StructType\UnitDetails $unitDetails = null)
    {
        $this->UnitDetails = $unitDetails;
        return $this;
    }
    /**
     * Get rentMatrix value
     * @return \mdlutz24\realpagepanda\Unit\StructType\RentMatrix|null
     */
    public function getRentMatrix()
    {
        return $this->rentMatrix;
    }
    /**
     * Set rentMatrix value
     * @param \mdlutz24\realpagepanda\Unit\StructType\RentMatrix $rentMatrix
     * @return \mdlutz24\realpagepanda\Unit\StructType\UnitObject
     */
    public function setRentMatrix(\mdlutz24\realpagepanda\Unit\StructType\RentMatrix $rentMatrix = null)
    {
        $this->rentMatrix = $rentMatrix;
        return $this;
    }
}
