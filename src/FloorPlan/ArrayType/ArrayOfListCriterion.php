<?php

namespace mdlutz24\realpagepanda\FloorPlan\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfListCriterion ArrayType
 * @subpackage Arrays
 */
class ArrayOfListCriterion extends AbstractStructArrayBase
{
    /**
     * The ListCriterion
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \mdlutz24\realpagepanda\FloorPlan\StructType\ListCriterion[]
     */
    public $ListCriterion;
    /**
     * Constructor method for ArrayOfListCriterion
     * @uses ArrayOfListCriterion::setListCriterion()
     * @param \mdlutz24\realpagepanda\FloorPlan\StructType\ListCriterion[] $listCriterion
     */
    public function __construct(array $listCriterion = array())
    {
        $this
            ->setListCriterion($listCriterion);
    }
    /**
     * Get ListCriterion value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \mdlutz24\realpagepanda\FloorPlan\StructType\ListCriterion[]|null
     */
    public function getListCriterion()
    {
        return isset($this->ListCriterion) ? $this->ListCriterion : null;
    }
    /**
     * This method is responsible for validating the values passed to the setListCriterion method
     * This method is willingly generated in order to preserve the one-line inline validation within the setListCriterion method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateListCriterionForArrayConstraintsFromSetListCriterion(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfListCriterionListCriterionItem) {
            // validation for constraint: itemType
            if (!$arrayOfListCriterionListCriterionItem instanceof \mdlutz24\realpagepanda\FloorPlan\StructType\ListCriterion) {
                $invalidValues[] = is_object($arrayOfListCriterionListCriterionItem) ? get_class($arrayOfListCriterionListCriterionItem) : sprintf('%s(%s)', gettype($arrayOfListCriterionListCriterionItem), var_export($arrayOfListCriterionListCriterionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ListCriterion property can only contain items of type \mdlutz24\realpagepanda\FloorPlan\StructType\ListCriterion, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ListCriterion value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \mdlutz24\realpagepanda\FloorPlan\StructType\ListCriterion[] $listCriterion
     * @return \mdlutz24\realpagepanda\FloorPlan\ArrayType\ArrayOfListCriterion
     */
    public function setListCriterion(array $listCriterion = array())
    {
        // validation for constraint: array
        if ('' !== ($listCriterionArrayErrorMessage = self::validateListCriterionForArrayConstraintsFromSetListCriterion($listCriterion))) {
            throw new \InvalidArgumentException($listCriterionArrayErrorMessage, __LINE__);
        }
        if (is_null($listCriterion) || (is_array($listCriterion) && empty($listCriterion))) {
            unset($this->ListCriterion);
        } else {
            $this->ListCriterion = $listCriterion;
        }
        return $this;
    }
    /**
     * Add item to ListCriterion value
     * @throws \InvalidArgumentException
     * @param \mdlutz24\realpagepanda\FloorPlan\StructType\ListCriterion $item
     * @return \mdlutz24\realpagepanda\FloorPlan\ArrayType\ArrayOfListCriterion
     */
    public function addToListCriterion(\mdlutz24\realpagepanda\FloorPlan\StructType\ListCriterion $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \mdlutz24\realpagepanda\FloorPlan\StructType\ListCriterion) {
            throw new \InvalidArgumentException(sprintf('The ListCriterion property can only contain items of type \mdlutz24\realpagepanda\FloorPlan\StructType\ListCriterion, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ListCriterion[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \mdlutz24\realpagepanda\FloorPlan\StructType\ListCriterion|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \mdlutz24\realpagepanda\FloorPlan\StructType\ListCriterion|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \mdlutz24\realpagepanda\FloorPlan\StructType\ListCriterion|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \mdlutz24\realpagepanda\FloorPlan\StructType\ListCriterion|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \mdlutz24\realpagepanda\FloorPlan\StructType\ListCriterion|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ListCriterion
     */
    public function getAttributeName()
    {
        return 'ListCriterion';
    }
}
