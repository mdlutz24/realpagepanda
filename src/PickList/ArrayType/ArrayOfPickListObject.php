<?php

namespace mdlutz24\realpagepanda\PickList\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPickListObject ArrayType
 * @subpackage Arrays
 */
class ArrayOfPickListObject extends AbstractStructArrayBase
{
    /**
     * The PickListObject
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \mdlutz24\realpagepanda\PickList\StructType\PickListObject[]
     */
    public $PickListObject;
    /**
     * Constructor method for ArrayOfPickListObject
     * @uses ArrayOfPickListObject::setPickListObject()
     * @param \mdlutz24\realpagepanda\PickList\StructType\PickListObject[] $pickListObject
     */
    public function __construct(array $pickListObject = array())
    {
        $this
            ->setPickListObject($pickListObject);
    }
    /**
     * Get PickListObject value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \mdlutz24\realpagepanda\PickList\StructType\PickListObject[]|null
     */
    public function getPickListObject()
    {
        return isset($this->PickListObject) ? $this->PickListObject : null;
    }
    /**
     * This method is responsible for validating the values passed to the setPickListObject method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPickListObject method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePickListObjectForArrayConstraintsFromSetPickListObject(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfPickListObjectPickListObjectItem) {
            // validation for constraint: itemType
            if (!$arrayOfPickListObjectPickListObjectItem instanceof \mdlutz24\realpagepanda\PickList\StructType\PickListObject) {
                $invalidValues[] = is_object($arrayOfPickListObjectPickListObjectItem) ? get_class($arrayOfPickListObjectPickListObjectItem) : sprintf('%s(%s)', gettype($arrayOfPickListObjectPickListObjectItem), var_export($arrayOfPickListObjectPickListObjectItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PickListObject property can only contain items of type \mdlutz24\realpagepanda\PickList\StructType\PickListObject, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set PickListObject value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \mdlutz24\realpagepanda\PickList\StructType\PickListObject[] $pickListObject
     * @return \mdlutz24\realpagepanda\PickList\ArrayType\ArrayOfPickListObject
     */
    public function setPickListObject(array $pickListObject = array())
    {
        // validation for constraint: array
        if ('' !== ($pickListObjectArrayErrorMessage = self::validatePickListObjectForArrayConstraintsFromSetPickListObject($pickListObject))) {
            throw new \InvalidArgumentException($pickListObjectArrayErrorMessage, __LINE__);
        }
        if (is_null($pickListObject) || (is_array($pickListObject) && empty($pickListObject))) {
            unset($this->PickListObject);
        } else {
            $this->PickListObject = $pickListObject;
        }
        return $this;
    }
    /**
     * Add item to PickListObject value
     * @throws \InvalidArgumentException
     * @param \mdlutz24\realpagepanda\PickList\StructType\PickListObject $item
     * @return \mdlutz24\realpagepanda\PickList\ArrayType\ArrayOfPickListObject
     */
    public function addToPickListObject(\mdlutz24\realpagepanda\PickList\StructType\PickListObject $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \mdlutz24\realpagepanda\PickList\StructType\PickListObject) {
            throw new \InvalidArgumentException(sprintf('The PickListObject property can only contain items of type \mdlutz24\realpagepanda\PickList\StructType\PickListObject, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->PickListObject[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \mdlutz24\realpagepanda\PickList\StructType\PickListObject|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \mdlutz24\realpagepanda\PickList\StructType\PickListObject|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \mdlutz24\realpagepanda\PickList\StructType\PickListObject|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \mdlutz24\realpagepanda\PickList\StructType\PickListObject|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \mdlutz24\realpagepanda\PickList\StructType\PickListObject|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PickListObject
     */
    public function getAttributeName()
    {
        return 'PickListObject';
    }
}
