<?php

namespace mdlutz24\realpagepanda\PickList\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPickList StructType
 * @subpackage Structs
 */
class GetPickList extends AbstractStructBase
{
    /**
     * The lType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $lType;
    /**
     * Constructor method for GetPickList
     * @uses GetPickList::setLType()
     * @param string $lType
     */
    public function __construct($lType = null)
    {
        $this
            ->setLType($lType);
    }
    /**
     * Get lType value
     * @return string
     */
    public function getLType()
    {
        return $this->lType;
    }
    /**
     * Set lType value
     * @uses \mdlutz24\realpagepanda\PickList\EnumType\ListType::valueIsValid()
     * @uses \mdlutz24\realpagepanda\PickList\EnumType\ListType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $lType
     * @return \mdlutz24\realpagepanda\PickList\StructType\GetPickList
     */
    public function setLType($lType = null)
    {
        // validation for constraint: enumeration
        if (!\mdlutz24\realpagepanda\PickList\EnumType\ListType::valueIsValid($lType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \mdlutz24\realpagepanda\PickList\EnumType\ListType', is_array($lType) ? implode(', ', $lType) : var_export($lType, true), implode(', ', \mdlutz24\realpagepanda\PickList\EnumType\ListType::getValidValues())), __LINE__);
        }
        $this->lType = $lType;
        return $this;
    }
}
