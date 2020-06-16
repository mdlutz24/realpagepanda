<?php

namespace mdlutz24\realpagepanda\Unit\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for row StructType
 * @subpackage Structs
 */
class Row extends AbstractStructBase
{
    /**
     * The options
     * Meta information extracted from the WSDL
     * - form: unqualified
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \mdlutz24\realpagepanda\Unit\StructType\Options[]
     */
    public $options;
    /**
     * The Building
     * @var string
     */
    public $Building;
    /**
     * The LeaseEndDate
     * @var string
     */
    public $LeaseEndDate;
    /**
     * The LeaseStartDate
     * @var string
     */
    public $LeaseStartDate;
    /**
     * The MakeReadyDate
     * @var string
     */
    public $MakeReadyDate;
    /**
     * The MaxRent
     * @var string
     */
    public $MaxRent;
    /**
     * The MinRent
     * @var string
     */
    public $MinRent;
    /**
     * The Rent
     * @var string
     */
    public $Rent;
    /**
     * The Unit
     * @var string
     */
    public $Unit;
    /**
     * Constructor method for row
     * @uses Row::setOptions()
     * @uses Row::setBuilding()
     * @uses Row::setLeaseEndDate()
     * @uses Row::setLeaseStartDate()
     * @uses Row::setMakeReadyDate()
     * @uses Row::setMaxRent()
     * @uses Row::setMinRent()
     * @uses Row::setRent()
     * @uses Row::setUnit()
     * @param \mdlutz24\realpagepanda\Unit\StructType\Options[] $options
     * @param string $building
     * @param string $leaseEndDate
     * @param string $leaseStartDate
     * @param string $makeReadyDate
     * @param string $maxRent
     * @param string $minRent
     * @param string $rent
     * @param string $unit
     */
    public function __construct(array $options = array(), $building = null, $leaseEndDate = null, $leaseStartDate = null, $makeReadyDate = null, $maxRent = null, $minRent = null, $rent = null, $unit = null)
    {
        $this
            ->setOptions($options)
            ->setBuilding($building)
            ->setLeaseEndDate($leaseEndDate)
            ->setLeaseStartDate($leaseStartDate)
            ->setMakeReadyDate($makeReadyDate)
            ->setMaxRent($maxRent)
            ->setMinRent($minRent)
            ->setRent($rent)
            ->setUnit($unit);
    }
    /**
     * Get options value
     * @return \mdlutz24\realpagepanda\Unit\StructType\Options[]|null
     */
    public function getOptions()
    {
        return $this->options;
    }
    /**
     * This method is responsible for validating the values passed to the setOptions method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOptions method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOptionsForArrayConstraintsFromSetOptions(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $rowOptionsItem) {
            // validation for constraint: itemType
            if (!$rowOptionsItem instanceof \mdlutz24\realpagepanda\Unit\StructType\Options) {
                $invalidValues[] = is_object($rowOptionsItem) ? get_class($rowOptionsItem) : sprintf('%s(%s)', gettype($rowOptionsItem), var_export($rowOptionsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The options property can only contain items of type \mdlutz24\realpagepanda\Unit\StructType\Options, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set options value
     * @throws \InvalidArgumentException
     * @param \mdlutz24\realpagepanda\Unit\StructType\Options[] $options
     * @return \mdlutz24\realpagepanda\Unit\StructType\Row
     */
    public function setOptions(array $options = array())
    {
        // validation for constraint: array
        if ('' !== ($optionsArrayErrorMessage = self::validateOptionsForArrayConstraintsFromSetOptions($options))) {
            throw new \InvalidArgumentException($optionsArrayErrorMessage, __LINE__);
        }
        $this->options = $options;
        return $this;
    }
    /**
     * Add item to options value
     * @throws \InvalidArgumentException
     * @param \mdlutz24\realpagepanda\Unit\StructType\Options $item
     * @return \mdlutz24\realpagepanda\Unit\StructType\Row
     */
    public function addToOptions(\mdlutz24\realpagepanda\Unit\StructType\Options $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \mdlutz24\realpagepanda\Unit\StructType\Options) {
            throw new \InvalidArgumentException(sprintf('The options property can only contain items of type \mdlutz24\realpagepanda\Unit\StructType\Options, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->options[] = $item;
        return $this;
    }
    /**
     * Get Building value
     * @return string|null
     */
    public function getBuilding()
    {
        return $this->Building;
    }
    /**
     * Set Building value
     * @param string $building
     * @return \mdlutz24\realpagepanda\Unit\StructType\Row
     */
    public function setBuilding($building = null)
    {
        // validation for constraint: string
        if (!is_null($building) && !is_string($building)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($building, true), gettype($building)), __LINE__);
        }
        $this->Building = $building;
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
     * @return \mdlutz24\realpagepanda\Unit\StructType\Row
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
     * @return \mdlutz24\realpagepanda\Unit\StructType\Row
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
    /**
     * Get MakeReadyDate value
     * @return string|null
     */
    public function getMakeReadyDate()
    {
        return $this->MakeReadyDate;
    }
    /**
     * Set MakeReadyDate value
     * @param string $makeReadyDate
     * @return \mdlutz24\realpagepanda\Unit\StructType\Row
     */
    public function setMakeReadyDate($makeReadyDate = null)
    {
        // validation for constraint: string
        if (!is_null($makeReadyDate) && !is_string($makeReadyDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($makeReadyDate, true), gettype($makeReadyDate)), __LINE__);
        }
        $this->MakeReadyDate = $makeReadyDate;
        return $this;
    }
    /**
     * Get MaxRent value
     * @return string|null
     */
    public function getMaxRent()
    {
        return $this->MaxRent;
    }
    /**
     * Set MaxRent value
     * @param string $maxRent
     * @return \mdlutz24\realpagepanda\Unit\StructType\Row
     */
    public function setMaxRent($maxRent = null)
    {
        // validation for constraint: string
        if (!is_null($maxRent) && !is_string($maxRent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($maxRent, true), gettype($maxRent)), __LINE__);
        }
        $this->MaxRent = $maxRent;
        return $this;
    }
    /**
     * Get MinRent value
     * @return string|null
     */
    public function getMinRent()
    {
        return $this->MinRent;
    }
    /**
     * Set MinRent value
     * @param string $minRent
     * @return \mdlutz24\realpagepanda\Unit\StructType\Row
     */
    public function setMinRent($minRent = null)
    {
        // validation for constraint: string
        if (!is_null($minRent) && !is_string($minRent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($minRent, true), gettype($minRent)), __LINE__);
        }
        $this->MinRent = $minRent;
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
     * @return \mdlutz24\realpagepanda\Unit\StructType\Row
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
    /**
     * Get Unit value
     * @return string|null
     */
    public function getUnit()
    {
        return $this->Unit;
    }
    /**
     * Set Unit value
     * @param string $unit
     * @return \mdlutz24\realpagepanda\Unit\StructType\Row
     */
    public function setUnit($unit = null)
    {
        // validation for constraint: string
        if (!is_null($unit) && !is_string($unit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unit, true), gettype($unit)), __LINE__);
        }
        $this->Unit = $unit;
        return $this;
    }
}
