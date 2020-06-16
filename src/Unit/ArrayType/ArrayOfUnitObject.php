<?php

namespace mdlutz24\realpagepanda\Unit\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfUnitObject ArrayType
 * @subpackage Arrays
 */
class ArrayOfUnitObject extends AbstractStructArrayBase
{
    /**
     * The UnitObject
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \mdlutz24\realpagepanda\Unit\StructType\UnitObject[]
     */
    public $UnitObject;
    /**
     * Constructor method for ArrayOfUnitObject
     * @uses ArrayOfUnitObject::setUnitObject()
     * @param \mdlutz24\realpagepanda\Unit\StructType\UnitObject[] $unitObject
     */
    public function __construct(array $unitObject = array())
    {
        $this
            ->setUnitObject($unitObject);
    }
    /**
     * Get UnitObject value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \mdlutz24\realpagepanda\Unit\StructType\UnitObject[]|null
     */
    public function getUnitObject()
    {
        return isset($this->UnitObject) ? $this->UnitObject : null;
    }
    /**
     * This method is responsible for validating the values passed to the setUnitObject method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUnitObject method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUnitObjectForArrayConstraintsFromSetUnitObject(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfUnitObjectUnitObjectItem) {
            // validation for constraint: itemType
            if (!$arrayOfUnitObjectUnitObjectItem instanceof \mdlutz24\realpagepanda\Unit\StructType\UnitObject) {
                $invalidValues[] = is_object($arrayOfUnitObjectUnitObjectItem) ? get_class($arrayOfUnitObjectUnitObjectItem) : sprintf('%s(%s)', gettype($arrayOfUnitObjectUnitObjectItem), var_export($arrayOfUnitObjectUnitObjectItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The UnitObject property can only contain items of type \mdlutz24\realpagepanda\Unit\StructType\UnitObject, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set UnitObject value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \mdlutz24\realpagepanda\Unit\StructType\UnitObject[] $unitObject
     * @return \mdlutz24\realpagepanda\Unit\ArrayType\ArrayOfUnitObject
     */
    public function setUnitObject(array $unitObject = array())
    {
        // validation for constraint: array
        if ('' !== ($unitObjectArrayErrorMessage = self::validateUnitObjectForArrayConstraintsFromSetUnitObject($unitObject))) {
            throw new \InvalidArgumentException($unitObjectArrayErrorMessage, __LINE__);
        }
        if (is_null($unitObject) || (is_array($unitObject) && empty($unitObject))) {
            unset($this->UnitObject);
        } else {
            $this->UnitObject = $unitObject;
        }
        return $this;
    }
    /**
     * Add item to UnitObject value
     * @throws \InvalidArgumentException
     * @param \mdlutz24\realpagepanda\Unit\StructType\UnitObject $item
     * @return \mdlutz24\realpagepanda\Unit\ArrayType\ArrayOfUnitObject
     */
    public function addToUnitObject(\mdlutz24\realpagepanda\Unit\StructType\UnitObject $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \mdlutz24\realpagepanda\Unit\StructType\UnitObject) {
            throw new \InvalidArgumentException(sprintf('The UnitObject property can only contain items of type \mdlutz24\realpagepanda\Unit\StructType\UnitObject, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->UnitObject[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \mdlutz24\realpagepanda\Unit\StructType\UnitObject|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \mdlutz24\realpagepanda\Unit\StructType\UnitObject|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \mdlutz24\realpagepanda\Unit\StructType\UnitObject|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \mdlutz24\realpagepanda\Unit\StructType\UnitObject|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \mdlutz24\realpagepanda\Unit\StructType\UnitObject|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string UnitObject
     */
    public function getAttributeName()
    {
        return 'UnitObject';
    }
}
