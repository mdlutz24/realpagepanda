<?php

namespace mdlutz24\realpagepanda\FloorPlan\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFloorPlanObject ArrayType
 * @subpackage Arrays
 */
class ArrayOfFloorPlanObject extends AbstractStructArrayBase
{
    /**
     * The FloorPlanObject
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \mdlutz24\realpagepanda\FloorPlan\StructType\FloorPlanObject[]
     */
    public $FloorPlanObject;
    /**
     * Constructor method for ArrayOfFloorPlanObject
     * @uses ArrayOfFloorPlanObject::setFloorPlanObject()
     * @param \mdlutz24\realpagepanda\FloorPlan\StructType\FloorPlanObject[] $floorPlanObject
     */
    public function __construct(array $floorPlanObject = array())
    {
        $this
            ->setFloorPlanObject($floorPlanObject);
    }
    /**
     * Get FloorPlanObject value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \mdlutz24\realpagepanda\FloorPlan\StructType\FloorPlanObject[]|null
     */
    public function getFloorPlanObject()
    {
        return isset($this->FloorPlanObject) ? $this->FloorPlanObject : null;
    }
    /**
     * This method is responsible for validating the values passed to the setFloorPlanObject method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFloorPlanObject method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFloorPlanObjectForArrayConstraintsFromSetFloorPlanObject(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfFloorPlanObjectFloorPlanObjectItem) {
            // validation for constraint: itemType
            if (!$arrayOfFloorPlanObjectFloorPlanObjectItem instanceof \mdlutz24\realpagepanda\FloorPlan\StructType\FloorPlanObject) {
                $invalidValues[] = is_object($arrayOfFloorPlanObjectFloorPlanObjectItem) ? get_class($arrayOfFloorPlanObjectFloorPlanObjectItem) : sprintf('%s(%s)', gettype($arrayOfFloorPlanObjectFloorPlanObjectItem), var_export($arrayOfFloorPlanObjectFloorPlanObjectItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FloorPlanObject property can only contain items of type \mdlutz24\realpagepanda\FloorPlan\StructType\FloorPlanObject, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set FloorPlanObject value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \mdlutz24\realpagepanda\FloorPlan\StructType\FloorPlanObject[] $floorPlanObject
     * @return \mdlutz24\realpagepanda\FloorPlan\ArrayType\ArrayOfFloorPlanObject
     */
    public function setFloorPlanObject(array $floorPlanObject = array())
    {
        // validation for constraint: array
        if ('' !== ($floorPlanObjectArrayErrorMessage = self::validateFloorPlanObjectForArrayConstraintsFromSetFloorPlanObject($floorPlanObject))) {
            throw new \InvalidArgumentException($floorPlanObjectArrayErrorMessage, __LINE__);
        }
        if (is_null($floorPlanObject) || (is_array($floorPlanObject) && empty($floorPlanObject))) {
            unset($this->FloorPlanObject);
        } else {
            $this->FloorPlanObject = $floorPlanObject;
        }
        return $this;
    }
    /**
     * Add item to FloorPlanObject value
     * @throws \InvalidArgumentException
     * @param \mdlutz24\realpagepanda\FloorPlan\StructType\FloorPlanObject $item
     * @return \mdlutz24\realpagepanda\FloorPlan\ArrayType\ArrayOfFloorPlanObject
     */
    public function addToFloorPlanObject(\mdlutz24\realpagepanda\FloorPlan\StructType\FloorPlanObject $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \mdlutz24\realpagepanda\FloorPlan\StructType\FloorPlanObject) {
            throw new \InvalidArgumentException(sprintf('The FloorPlanObject property can only contain items of type \mdlutz24\realpagepanda\FloorPlan\StructType\FloorPlanObject, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->FloorPlanObject[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \mdlutz24\realpagepanda\FloorPlan\StructType\FloorPlanObject|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \mdlutz24\realpagepanda\FloorPlan\StructType\FloorPlanObject|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \mdlutz24\realpagepanda\FloorPlan\StructType\FloorPlanObject|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \mdlutz24\realpagepanda\FloorPlan\StructType\FloorPlanObject|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \mdlutz24\realpagepanda\FloorPlan\StructType\FloorPlanObject|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string FloorPlanObject
     */
    public function getAttributeName()
    {
        return 'FloorPlanObject';
    }
}
