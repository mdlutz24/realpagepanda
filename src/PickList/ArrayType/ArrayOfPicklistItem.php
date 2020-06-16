<?php

namespace mdlutz24\realpagepanda\PickList\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPicklistItem ArrayType
 * @subpackage Arrays
 */
class ArrayOfPicklistItem extends AbstractStructArrayBase
{
    /**
     * The PicklistItem
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \mdlutz24\realpagepanda\PickList\StructType\PicklistItem[]
     */
    public $PicklistItem;
    /**
     * Constructor method for ArrayOfPicklistItem
     * @uses ArrayOfPicklistItem::setPicklistItem()
     * @param \mdlutz24\realpagepanda\PickList\StructType\PicklistItem[] $picklistItem
     */
    public function __construct(array $picklistItem = array())
    {
        $this
            ->setPicklistItem($picklistItem);
    }
    /**
     * Get PicklistItem value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \mdlutz24\realpagepanda\PickList\StructType\PicklistItem[]|null
     */
    public function getPicklistItem()
    {
        return isset($this->PicklistItem) ? $this->PicklistItem : null;
    }
    /**
     * This method is responsible for validating the values passed to the setPicklistItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPicklistItem method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePicklistItemForArrayConstraintsFromSetPicklistItem(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfPicklistItemPicklistItemItem) {
            // validation for constraint: itemType
            if (!$arrayOfPicklistItemPicklistItemItem instanceof \mdlutz24\realpagepanda\PickList\StructType\PicklistItem) {
                $invalidValues[] = is_object($arrayOfPicklistItemPicklistItemItem) ? get_class($arrayOfPicklistItemPicklistItemItem) : sprintf('%s(%s)', gettype($arrayOfPicklistItemPicklistItemItem), var_export($arrayOfPicklistItemPicklistItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PicklistItem property can only contain items of type \mdlutz24\realpagepanda\PickList\StructType\PicklistItem, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set PicklistItem value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \mdlutz24\realpagepanda\PickList\StructType\PicklistItem[] $picklistItem
     * @return \mdlutz24\realpagepanda\PickList\ArrayType\ArrayOfPicklistItem
     */
    public function setPicklistItem(array $picklistItem = array())
    {
        // validation for constraint: array
        if ('' !== ($picklistItemArrayErrorMessage = self::validatePicklistItemForArrayConstraintsFromSetPicklistItem($picklistItem))) {
            throw new \InvalidArgumentException($picklistItemArrayErrorMessage, __LINE__);
        }
        if (is_null($picklistItem) || (is_array($picklistItem) && empty($picklistItem))) {
            unset($this->PicklistItem);
        } else {
            $this->PicklistItem = $picklistItem;
        }
        return $this;
    }
    /**
     * Add item to PicklistItem value
     * @throws \InvalidArgumentException
     * @param \mdlutz24\realpagepanda\PickList\StructType\PicklistItem $item
     * @return \mdlutz24\realpagepanda\PickList\ArrayType\ArrayOfPicklistItem
     */
    public function addToPicklistItem(\mdlutz24\realpagepanda\PickList\StructType\PicklistItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \mdlutz24\realpagepanda\PickList\StructType\PicklistItem) {
            throw new \InvalidArgumentException(sprintf('The PicklistItem property can only contain items of type \mdlutz24\realpagepanda\PickList\StructType\PicklistItem, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->PicklistItem[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \mdlutz24\realpagepanda\PickList\StructType\PicklistItem|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \mdlutz24\realpagepanda\PickList\StructType\PicklistItem|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \mdlutz24\realpagepanda\PickList\StructType\PicklistItem|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \mdlutz24\realpagepanda\PickList\StructType\PicklistItem|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \mdlutz24\realpagepanda\PickList\StructType\PicklistItem|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PicklistItem
     */
    public function getAttributeName()
    {
        return 'PicklistItem';
    }
}
