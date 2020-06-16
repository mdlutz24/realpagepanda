<?php

namespace mdlutz24\realpagepanda\Unit\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for options StructType
 * @subpackage Structs
 */
class Options extends AbstractStructBase
{
    /**
     * The option
     * Meta information extracted from the WSDL
     * - form: unqualified
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \mdlutz24\realpagepanda\Unit\StructType\Option[]
     */
    public $option;
    /**
     * The LeaseStartDate
     * @var string
     */
    public $LeaseStartDate;
    /**
     * Constructor method for options
     * @uses Options::setOption()
     * @uses Options::setLeaseStartDate()
     * @param \mdlutz24\realpagepanda\Unit\StructType\Option[] $option
     * @param string $leaseStartDate
     */
    public function __construct(array $option = array(), $leaseStartDate = null)
    {
        $this
            ->setOption($option)
            ->setLeaseStartDate($leaseStartDate);
    }
    /**
     * Get option value
     * @return \mdlutz24\realpagepanda\Unit\StructType\Option[]|null
     */
    public function getOption()
    {
        return $this->option;
    }
    /**
     * This method is responsible for validating the values passed to the setOption method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOption method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOptionForArrayConstraintsFromSetOption(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $optionsOptionItem) {
            // validation for constraint: itemType
            if (!$optionsOptionItem instanceof \mdlutz24\realpagepanda\Unit\StructType\Option) {
                $invalidValues[] = is_object($optionsOptionItem) ? get_class($optionsOptionItem) : sprintf('%s(%s)', gettype($optionsOptionItem), var_export($optionsOptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The option property can only contain items of type \mdlutz24\realpagepanda\Unit\StructType\Option, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set option value
     * @throws \InvalidArgumentException
     * @param \mdlutz24\realpagepanda\Unit\StructType\Option[] $option
     * @return \mdlutz24\realpagepanda\Unit\StructType\Options
     */
    public function setOption(array $option = array())
    {
        // validation for constraint: array
        if ('' !== ($optionArrayErrorMessage = self::validateOptionForArrayConstraintsFromSetOption($option))) {
            throw new \InvalidArgumentException($optionArrayErrorMessage, __LINE__);
        }
        $this->option = $option;
        return $this;
    }
    /**
     * Add item to option value
     * @throws \InvalidArgumentException
     * @param \mdlutz24\realpagepanda\Unit\StructType\Option $item
     * @return \mdlutz24\realpagepanda\Unit\StructType\Options
     */
    public function addToOption(\mdlutz24\realpagepanda\Unit\StructType\Option $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \mdlutz24\realpagepanda\Unit\StructType\Option) {
            throw new \InvalidArgumentException(sprintf('The option property can only contain items of type \mdlutz24\realpagepanda\Unit\StructType\Option, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->option[] = $item;
        return $this;
    }
    /**
     * Get LeaseStartDate value
     * @return string|null
     */
    public function getLeaseStartDate()
    {
        return $this->LeaseStartDate;
    }
    /**
     * Set LeaseStartDate value
     * @param string $leaseStartDate
     * @return \mdlutz24\realpagepanda\Unit\StructType\Options
     */
    public function setLeaseStartDate($leaseStartDate = null)
    {
        // validation for constraint: string
        if (!is_null($leaseStartDate) && !is_string($leaseStartDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($leaseStartDate, true), gettype($leaseStartDate)), __LINE__);
        }
        $this->LeaseStartDate = $leaseStartDate;
        return $this;
    }
}
