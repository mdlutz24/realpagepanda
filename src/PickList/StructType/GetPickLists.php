<?php

namespace mdlutz24\realpagepanda\PickList\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPickLists StructType
 * @subpackage Structs
 */
class GetPickLists extends AbstractStructBase
{
    /**
     * The lTypes
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \mdlutz24\realpagepanda\PickList\ArrayType\ArrayOfListType
     */
    public $lTypes;
    /**
     * Constructor method for GetPickLists
     * @uses GetPickLists::setLTypes()
     * @param \mdlutz24\realpagepanda\PickList\ArrayType\ArrayOfListType $lTypes
     */
    public function __construct(\mdlutz24\realpagepanda\PickList\ArrayType\ArrayOfListType $lTypes = null)
    {
        $this
            ->setLTypes($lTypes);
    }
    /**
     * Get lTypes value
     * @return \mdlutz24\realpagepanda\PickList\ArrayType\ArrayOfListType|null
     */
    public function getLTypes()
    {
        return $this->lTypes;
    }
    /**
     * Set lTypes value
     * @param \mdlutz24\realpagepanda\PickList\ArrayType\ArrayOfListType $lTypes
     * @return \mdlutz24\realpagepanda\PickList\StructType\GetPickLists
     */
    public function setLTypes(\mdlutz24\realpagepanda\PickList\ArrayType\ArrayOfListType $lTypes = null)
    {
        $this->lTypes = $lTypes;
        return $this;
    }
}
