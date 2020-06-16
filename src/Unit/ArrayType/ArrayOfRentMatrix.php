<?php

namespace mdlutz24\realpagepanda\Unit\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRentMatrix ArrayType
 * @subpackage Arrays
 */
class ArrayOfRentMatrix extends AbstractStructArrayBase
{
    /**
     * The RentMatrix
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \mdlutz24\realpagepanda\Unit\StructType\RentMatrix_1[]
     */
    public $RentMatrix;
    /**
     * Constructor method for ArrayOfRentMatrix
     * @uses ArrayOfRentMatrix::setRentMatrix()
     * @param \mdlutz24\realpagepanda\Unit\StructType\RentMatrix_1[] $rentMatrix
     */
    public function __construct(array $rentMatrix = array())
    {
        $this
            ->setRentMatrix($rentMatrix);
    }
    /**
     * Get RentMatrix value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \mdlutz24\realpagepanda\Unit\StructType\RentMatrix_1[]|null
     */
    public function getRentMatrix()
    {
        return isset($this->RentMatrix) ? $this->RentMatrix : null;
    }
    /**
     * This method is responsible for validating the values passed to the setRentMatrix method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRentMatrix method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRentMatrixForArrayConstraintsFromSetRentMatrix(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfRentMatrixRentMatrixItem) {
            // validation for constraint: itemType
            if (!$arrayOfRentMatrixRentMatrixItem instanceof \mdlutz24\realpagepanda\Unit\StructType\RentMatrix_1) {
                $invalidValues[] = is_object($arrayOfRentMatrixRentMatrixItem) ? get_class($arrayOfRentMatrixRentMatrixItem) : sprintf('%s(%s)', gettype($arrayOfRentMatrixRentMatrixItem), var_export($arrayOfRentMatrixRentMatrixItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RentMatrix property can only contain items of type \mdlutz24\realpagepanda\Unit\StructType\RentMatrix_1, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set RentMatrix value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \mdlutz24\realpagepanda\Unit\StructType\RentMatrix_1[] $rentMatrix
     * @return \mdlutz24\realpagepanda\Unit\ArrayType\ArrayOfRentMatrix
     */
    public function setRentMatrix(array $rentMatrix = array())
    {
        // validation for constraint: array
        if ('' !== ($rentMatrixArrayErrorMessage = self::validateRentMatrixForArrayConstraintsFromSetRentMatrix($rentMatrix))) {
            throw new \InvalidArgumentException($rentMatrixArrayErrorMessage, __LINE__);
        }
        if (is_null($rentMatrix) || (is_array($rentMatrix) && empty($rentMatrix))) {
            unset($this->RentMatrix);
        } else {
            $this->RentMatrix = $rentMatrix;
        }
        return $this;
    }
    /**
     * Add item to RentMatrix value
     * @throws \InvalidArgumentException
     * @param \mdlutz24\realpagepanda\Unit\StructType\RentMatrix_1 $item
     * @return \mdlutz24\realpagepanda\Unit\ArrayType\ArrayOfRentMatrix
     */
    public function addToRentMatrix(\mdlutz24\realpagepanda\Unit\StructType\RentMatrix_1 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \mdlutz24\realpagepanda\Unit\StructType\RentMatrix_1) {
            throw new \InvalidArgumentException(sprintf('The RentMatrix property can only contain items of type \mdlutz24\realpagepanda\Unit\StructType\RentMatrix_1, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->RentMatrix[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \mdlutz24\realpagepanda\Unit\StructType\RentMatrix_1|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \mdlutz24\realpagepanda\Unit\StructType\RentMatrix_1|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \mdlutz24\realpagepanda\Unit\StructType\RentMatrix_1|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \mdlutz24\realpagepanda\Unit\StructType\RentMatrix_1|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \mdlutz24\realpagepanda\Unit\StructType\RentMatrix_1|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string RentMatrix
     */
    public function getAttributeName()
    {
        return 'RentMatrix';
    }
}
