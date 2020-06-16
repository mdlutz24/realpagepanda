<?php

namespace mdlutz24\realpagepanda\FloorPlan\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListCriterion StructType
 * @subpackage Structs
 */
class ListCriterion extends EntityBase
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The SingleValue
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SingleValue;
    /**
     * The MinValue
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MinValue;
    /**
     * The MaxValue
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MaxValue;
    /**
     * Constructor method for ListCriterion
     * @uses ListCriterion::setName()
     * @uses ListCriterion::setSingleValue()
     * @uses ListCriterion::setMinValue()
     * @uses ListCriterion::setMaxValue()
     * @param string $name
     * @param string $singleValue
     * @param string $minValue
     * @param string $maxValue
     */
    public function __construct($name = null, $singleValue = null, $minValue = null, $maxValue = null)
    {
        $this
            ->setName($name)
            ->setSingleValue($singleValue)
            ->setMinValue($minValue)
            ->setMaxValue($maxValue);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \mdlutz24\realpagepanda\FloorPlan\StructType\ListCriterion
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get SingleValue value
     * @return string|null
     */
    public function getSingleValue()
    {
        return $this->SingleValue;
    }
    /**
     * Set SingleValue value
     * @param string $singleValue
     * @return \mdlutz24\realpagepanda\FloorPlan\StructType\ListCriterion
     */
    public function setSingleValue($singleValue = null)
    {
        // validation for constraint: string
        if (!is_null($singleValue) && !is_string($singleValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($singleValue, true), gettype($singleValue)), __LINE__);
        }
        $this->SingleValue = $singleValue;
        return $this;
    }
    /**
     * Get MinValue value
     * @return string|null
     */
    public function getMinValue()
    {
        return $this->MinValue;
    }
    /**
     * Set MinValue value
     * @param string $minValue
     * @return \mdlutz24\realpagepanda\FloorPlan\StructType\ListCriterion
     */
    public function setMinValue($minValue = null)
    {
        // validation for constraint: string
        if (!is_null($minValue) && !is_string($minValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($minValue, true), gettype($minValue)), __LINE__);
        }
        $this->MinValue = $minValue;
        return $this;
    }
    /**
     * Get MaxValue value
     * @return string|null
     */
    public function getMaxValue()
    {
        return $this->MaxValue;
    }
    /**
     * Set MaxValue value
     * @param string $maxValue
     * @return \mdlutz24\realpagepanda\FloorPlan\StructType\ListCriterion
     */
    public function setMaxValue($maxValue = null)
    {
        // validation for constraint: string
        if (!is_null($maxValue) && !is_string($maxValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($maxValue, true), gettype($maxValue)), __LINE__);
        }
        $this->MaxValue = $maxValue;
        return $this;
    }
}
