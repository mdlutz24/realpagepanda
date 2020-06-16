<?php

namespace mdlutz24\realpagepanda\Unit\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for option StructType
 * @subpackage Structs
 */
class Option extends AbstractStructBase
{
    /**
     * The Best
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $Best;
    /**
     * The Concessions
     * Meta information extracted from the WSDL
     * - form: unqualified
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \mdlutz24\realpagepanda\Unit\StructType\Concessions[]
     */
    public $Concessions;
    /**
     * The LeaseEndDate
     * @var string
     */
    public $LeaseEndDate;
    /**
     * The LeaseTerm
     * @var string
     */
    public $LeaseTerm;
    /**
     * The Rent
     * @var string
     */
    public $Rent;
    /**
     * Constructor method for option
     * @uses Option::setBest()
     * @uses Option::setConcessions()
     * @uses Option::setLeaseEndDate()
     * @uses Option::setLeaseTerm()
     * @uses Option::setRent()
     * @param bool $best
     * @param \mdlutz24\realpagepanda\Unit\StructType\Concessions[] $concessions
     * @param string $leaseEndDate
     * @param string $leaseTerm
     * @param string $rent
     */
    public function __construct($best = null, array $concessions = array(), $leaseEndDate = null, $leaseTerm = null, $rent = null)
    {
        $this
            ->setBest($best)
            ->setConcessions($concessions)
            ->setLeaseEndDate($leaseEndDate)
            ->setLeaseTerm($leaseTerm)
            ->setRent($rent);
    }
    /**
     * Get Best value
     * @return bool
     */
    public function getBest()
    {
        return $this->Best;
    }
    /**
     * Set Best value
     * @param bool $best
     * @return \mdlutz24\realpagepanda\Unit\StructType\Option
     */
    public function setBest($best = null)
    {
        // validation for constraint: boolean
        if (!is_null($best) && !is_bool($best)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($best, true), gettype($best)), __LINE__);
        }
        $this->Best = $best;
        return $this;
    }
    /**
     * Get Concessions value
     * @return \mdlutz24\realpagepanda\Unit\StructType\Concessions[]|null
     */
    public function getConcessions()
    {
        return $this->Concessions;
    }
    /**
     * This method is responsible for validating the values passed to the setConcessions method
     * This method is willingly generated in order to preserve the one-line inline validation within the setConcessions method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateConcessionsForArrayConstraintsFromSetConcessions(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $optionConcessionsItem) {
            // validation for constraint: itemType
            if (!$optionConcessionsItem instanceof \mdlutz24\realpagepanda\Unit\StructType\Concessions) {
                $invalidValues[] = is_object($optionConcessionsItem) ? get_class($optionConcessionsItem) : sprintf('%s(%s)', gettype($optionConcessionsItem), var_export($optionConcessionsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Concessions property can only contain items of type \mdlutz24\realpagepanda\Unit\StructType\Concessions, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Concessions value
     * @throws \InvalidArgumentException
     * @param \mdlutz24\realpagepanda\Unit\StructType\Concessions[] $concessions
     * @return \mdlutz24\realpagepanda\Unit\StructType\Option
     */
    public function setConcessions(array $concessions = array())
    {
        // validation for constraint: array
        if ('' !== ($concessionsArrayErrorMessage = self::validateConcessionsForArrayConstraintsFromSetConcessions($concessions))) {
            throw new \InvalidArgumentException($concessionsArrayErrorMessage, __LINE__);
        }
        $this->Concessions = $concessions;
        return $this;
    }
    /**
     * Add item to Concessions value
     * @throws \InvalidArgumentException
     * @param \mdlutz24\realpagepanda\Unit\StructType\Concessions $item
     * @return \mdlutz24\realpagepanda\Unit\StructType\Option
     */
    public function addToConcessions(\mdlutz24\realpagepanda\Unit\StructType\Concessions $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \mdlutz24\realpagepanda\Unit\StructType\Concessions) {
            throw new \InvalidArgumentException(sprintf('The Concessions property can only contain items of type \mdlutz24\realpagepanda\Unit\StructType\Concessions, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Concessions[] = $item;
        return $this;
    }
    /**
     * Get LeaseEndDate value
     * @return string|null
     */
    public function getLeaseEndDate()
    {
        return $this->LeaseEndDate;
    }
    /**
     * Set LeaseEndDate value
     * @param string $leaseEndDate
     * @return \mdlutz24\realpagepanda\Unit\StructType\Option
     */
    public function setLeaseEndDate($leaseEndDate = null)
    {
        // validation for constraint: string
        if (!is_null($leaseEndDate) && !is_string($leaseEndDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($leaseEndDate, true), gettype($leaseEndDate)), __LINE__);
        }
        $this->LeaseEndDate = $leaseEndDate;
        return $this;
    }
    /**
     * Get LeaseTerm value
     * @return string|null
     */
    public function getLeaseTerm()
    {
        return $this->LeaseTerm;
    }
    /**
     * Set LeaseTerm value
     * @param string $leaseTerm
     * @return \mdlutz24\realpagepanda\Unit\StructType\Option
     */
    public function setLeaseTerm($leaseTerm = null)
    {
        // validation for constraint: string
        if (!is_null($leaseTerm) && !is_string($leaseTerm)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($leaseTerm, true), gettype($leaseTerm)), __LINE__);
        }
        $this->LeaseTerm = $leaseTerm;
        return $this;
    }
    /**
     * Get Rent value
     * @return string|null
     */
    public function getRent()
    {
        return $this->Rent;
    }
    /**
     * Set Rent value
     * @param string $rent
     * @return \mdlutz24\realpagepanda\Unit\StructType\Option
     */
    public function setRent($rent = null)
    {
        // validation for constraint: string
        if (!is_null($rent) && !is_string($rent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rent, true), gettype($rent)), __LINE__);
        }
        $this->Rent = $rent;
        return $this;
    }
}
