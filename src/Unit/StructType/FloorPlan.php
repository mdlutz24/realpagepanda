<?php

namespace mdlutz24\realpagepanda\Unit\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FloorPlan StructType
 * @subpackage Structs
 */
class FloorPlan extends AbstractStructBase
{
    /**
     * The FloorPlanID
     * Meta information extracted from the WSDL
     * - form: unqualified
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $FloorPlanID;
    /**
     * The FloorPlanCode
     * Meta information extracted from the WSDL
     * - form: unqualified
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FloorPlanCode;
    /**
     * The FloorPlanName
     * Meta information extracted from the WSDL
     * - form: unqualified
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FloorPlanName;
    /**
     * The FloorPlanGroupName
     * Meta information extracted from the WSDL
     * - form: unqualified
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FloorPlanGroupName;
    /**
     * The FloorPlanGroupID
     * Meta information extracted from the WSDL
     * - form: unqualified
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FloorPlanGroupID;
    /**
     * Constructor method for FloorPlan
     * @uses FloorPlan::setFloorPlanID()
     * @uses FloorPlan::setFloorPlanCode()
     * @uses FloorPlan::setFloorPlanName()
     * @uses FloorPlan::setFloorPlanGroupName()
     * @uses FloorPlan::setFloorPlanGroupID()
     * @param int $floorPlanID
     * @param string $floorPlanCode
     * @param string $floorPlanName
     * @param string $floorPlanGroupName
     * @param string $floorPlanGroupID
     */
    public function __construct($floorPlanID = null, $floorPlanCode = null, $floorPlanName = null, $floorPlanGroupName = null, $floorPlanGroupID = null)
    {
        $this
            ->setFloorPlanID($floorPlanID)
            ->setFloorPlanCode($floorPlanCode)
            ->setFloorPlanName($floorPlanName)
            ->setFloorPlanGroupName($floorPlanGroupName)
            ->setFloorPlanGroupID($floorPlanGroupID);
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
     * @return \mdlutz24\realpagepanda\Unit\StructType\FloorPlan
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
     * @return \mdlutz24\realpagepanda\Unit\StructType\FloorPlan
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
     * @return \mdlutz24\realpagepanda\Unit\StructType\FloorPlan
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
     * @return \mdlutz24\realpagepanda\Unit\StructType\FloorPlan
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
     * @return \mdlutz24\realpagepanda\Unit\StructType\FloorPlan
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
}
