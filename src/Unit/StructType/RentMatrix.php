<?php

namespace mdlutz24\realpagepanda\Unit\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rentMatrix StructType
 * @subpackage Structs
 */
class RentMatrix extends AbstractStructBase
{
    /**
     * The row
     * Meta information extracted from the WSDL
     * - form: unqualified
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \mdlutz24\realpagepanda\Unit\StructType\Row[]
     */
    public $row;
    /**
     * The LeaseTerm
     * @var string
     */
    public $LeaseTerm;
    /**
     * The LeaseTermMax
     * @var string
     */
    public $LeaseTermMax;
    /**
     * The LeaseTermMin
     * @var string
     */
    public $LeaseTermMin;
    /**
     * The NeededByDate
     * @var string
     */
    public $NeededByDate;
    /**
     * The PropertyID
     * @var string
     */
    public $PropertyID;
    /**
     * Constructor method for rentMatrix
     * @uses RentMatrix::setRow()
     * @uses RentMatrix::setLeaseTerm()
     * @uses RentMatrix::setLeaseTermMax()
     * @uses RentMatrix::setLeaseTermMin()
     * @uses RentMatrix::setNeededByDate()
     * @uses RentMatrix::setPropertyID()
     * @param \mdlutz24\realpagepanda\Unit\StructType\Row[] $row
     * @param string $leaseTerm
     * @param string $leaseTermMax
     * @param string $leaseTermMin
     * @param string $neededByDate
     * @param string $propertyID
     */
    public function __construct(array $row = array(), $leaseTerm = null, $leaseTermMax = null, $leaseTermMin = null, $neededByDate = null, $propertyID = null)
    {
        $this
            ->setRow($row)
            ->setLeaseTerm($leaseTerm)
            ->setLeaseTermMax($leaseTermMax)
            ->setLeaseTermMin($leaseTermMin)
            ->setNeededByDate($neededByDate)
            ->setPropertyID($propertyID);
    }
    /**
     * Get row value
     * @return \mdlutz24\realpagepanda\Unit\StructType\Row[]|null
     */
    public function getRow()
    {
        return $this->row;
    }
    /**
     * This method is responsible for validating the values passed to the setRow method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRow method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRowForArrayConstraintsFromSetRow(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $rentMatrixRowItem) {
            // validation for constraint: itemType
            if (!$rentMatrixRowItem instanceof \mdlutz24\realpagepanda\Unit\StructType\Row) {
                $invalidValues[] = is_object($rentMatrixRowItem) ? get_class($rentMatrixRowItem) : sprintf('%s(%s)', gettype($rentMatrixRowItem), var_export($rentMatrixRowItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The row property can only contain items of type \mdlutz24\realpagepanda\Unit\StructType\Row, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set row value
     * @throws \InvalidArgumentException
     * @param \mdlutz24\realpagepanda\Unit\StructType\Row[] $row
     * @return \mdlutz24\realpagepanda\Unit\StructType\RentMatrix
     */
    public function setRow(array $row = array())
    {
        // validation for constraint: array
        if ('' !== ($rowArrayErrorMessage = self::validateRowForArrayConstraintsFromSetRow($row))) {
            throw new \InvalidArgumentException($rowArrayErrorMessage, __LINE__);
        }
        $this->row = $row;
        return $this;
    }
    /**
     * Add item to row value
     * @throws \InvalidArgumentException
     * @param \mdlutz24\realpagepanda\Unit\StructType\Row $item
     * @return \mdlutz24\realpagepanda\Unit\StructType\RentMatrix
     */
    public function addToRow(\mdlutz24\realpagepanda\Unit\StructType\Row $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \mdlutz24\realpagepanda\Unit\StructType\Row) {
            throw new \InvalidArgumentException(sprintf('The row property can only contain items of type \mdlutz24\realpagepanda\Unit\StructType\Row, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->row[] = $item;
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
     * @return \mdlutz24\realpagepanda\Unit\StructType\RentMatrix
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
     * Get LeaseTermMax value
     * @return string|null
     */
    public function getLeaseTermMax()
    {
        return $this->LeaseTermMax;
    }
    /**
     * Set LeaseTermMax value
     * @param string $leaseTermMax
     * @return \mdlutz24\realpagepanda\Unit\StructType\RentMatrix
     */
    public function setLeaseTermMax($leaseTermMax = null)
    {
        // validation for constraint: string
        if (!is_null($leaseTermMax) && !is_string($leaseTermMax)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($leaseTermMax, true), gettype($leaseTermMax)), __LINE__);
        }
        $this->LeaseTermMax = $leaseTermMax;
        return $this;
    }
    /**
     * Get LeaseTermMin value
     * @return string|null
     */
    public function getLeaseTermMin()
    {
        return $this->LeaseTermMin;
    }
    /**
     * Set LeaseTermMin value
     * @param string $leaseTermMin
     * @return \mdlutz24\realpagepanda\Unit\StructType\RentMatrix
     */
    public function setLeaseTermMin($leaseTermMin = null)
    {
        // validation for constraint: string
        if (!is_null($leaseTermMin) && !is_string($leaseTermMin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($leaseTermMin, true), gettype($leaseTermMin)), __LINE__);
        }
        $this->LeaseTermMin = $leaseTermMin;
        return $this;
    }
    /**
     * Get NeededByDate value
     * @return string|null
     */
    public function getNeededByDate()
    {
        return $this->NeededByDate;
    }
    /**
     * Set NeededByDate value
     * @param string $neededByDate
     * @return \mdlutz24\realpagepanda\Unit\StructType\RentMatrix
     */
    public function setNeededByDate($neededByDate = null)
    {
        // validation for constraint: string
        if (!is_null($neededByDate) && !is_string($neededByDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($neededByDate, true), gettype($neededByDate)), __LINE__);
        }
        $this->NeededByDate = $neededByDate;
        return $this;
    }
    /**
     * Get PropertyID value
     * @return string|null
     */
    public function getPropertyID()
    {
        return $this->PropertyID;
    }
    /**
     * Set PropertyID value
     * @param string $propertyID
     * @return \mdlutz24\realpagepanda\Unit\StructType\RentMatrix
     */
    public function setPropertyID($propertyID = null)
    {
        // validation for constraint: string
        if (!is_null($propertyID) && !is_string($propertyID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($propertyID, true), gettype($propertyID)), __LINE__);
        }
        $this->PropertyID = $propertyID;
        return $this;
    }
}
