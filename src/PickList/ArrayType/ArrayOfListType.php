<?php

namespace mdlutz24\realpagepanda\PickList\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfListType ArrayType
 * @subpackage Arrays
 */
class ArrayOfListType extends AbstractStructArrayBase
{
    /**
     * The ListType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $ListType;
    /**
     * Constructor method for ArrayOfListType
     * @uses ArrayOfListType::setListType()
     * @param string[] $listType
     */
    public function __construct(array $listType = array())
    {
        $this
            ->setListType($listType);
    }
    /**
     * Get ListType value
     * @return string[]|null
     */
    public function getListType()
    {
        return $this->ListType;
    }
    /**
     * This method is responsible for validating the values passed to the setListType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setListType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateListTypeForArrayConstraintsFromSetListType(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfListTypeListTypeItem) {
            // validation for constraint: enumeration
            if (!\mdlutz24\realpagepanda\PickList\EnumType\ListType::valueIsValid($arrayOfListTypeListTypeItem)) {
                $invalidValues[] = is_object($arrayOfListTypeListTypeItem) ? get_class($arrayOfListTypeListTypeItem) : sprintf('%s(%s)', gettype($arrayOfListTypeListTypeItem), var_export($arrayOfListTypeListTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \mdlutz24\realpagepanda\PickList\EnumType\ListType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \mdlutz24\realpagepanda\PickList\EnumType\ListType::getValidValues()));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ListType value
     * @uses \mdlutz24\realpagepanda\PickList\EnumType\ListType::valueIsValid()
     * @uses \mdlutz24\realpagepanda\PickList\EnumType\ListType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $listType
     * @return \mdlutz24\realpagepanda\PickList\ArrayType\ArrayOfListType
     */
    public function setListType(array $listType = array())
    {
        // validation for constraint: array
        if ('' !== ($listTypeArrayErrorMessage = self::validateListTypeForArrayConstraintsFromSetListType($listType))) {
            throw new \InvalidArgumentException($listTypeArrayErrorMessage, __LINE__);
        }
        $this->ListType = $listType;
        return $this;
    }
    /**
     * Add item to ListType value
     * @uses \mdlutz24\realpagepanda\PickList\EnumType\ListType::valueIsValid()
     * @uses \mdlutz24\realpagepanda\PickList\EnumType\ListType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \mdlutz24\realpagepanda\PickList\ArrayType\ArrayOfListType
     */
    public function addToListType($item)
    {
        // validation for constraint: enumeration
        if (!\mdlutz24\realpagepanda\PickList\EnumType\ListType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \mdlutz24\realpagepanda\PickList\EnumType\ListType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \mdlutz24\realpagepanda\PickList\EnumType\ListType::getValidValues())), __LINE__);
        }
        $this->ListType[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return string|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return string|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return string|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return string|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return string|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws \InvalidArgumentException
     * @uses \mdlutz24\realpagepanda\PickList\EnumType\ListType::valueIsValid()
     * @param string $item
     * @return \mdlutz24\realpagepanda\PickList\ArrayType\ArrayOfListType
     */
    public function add($item)
    {
        // validation for constraint: enumeration
        if (!\mdlutz24\realpagepanda\PickList\EnumType\ListType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \mdlutz24\realpagepanda\PickList\EnumType\ListType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \mdlutz24\realpagepanda\PickList\EnumType\ListType::getValidValues())), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ListType
     */
    public function getAttributeName()
    {
        return 'ListType';
    }
}
