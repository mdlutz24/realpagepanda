<?php

namespace mdlutz24\realpagepanda\Unit\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PickListObject StructType
 * @subpackage Structs
 */
class PickListObject extends AbstractStructBase
{
    /**
     * The ContentType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ContentType;
    /**
     * The Contents
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \mdlutz24\realpagepanda\Unit\ArrayType\ArrayOfPicklistItem
     */
    public $Contents;
    /**
     * Constructor method for PickListObject
     * @uses PickListObject::setContentType()
     * @uses PickListObject::setContents()
     * @param string $contentType
     * @param \mdlutz24\realpagepanda\Unit\ArrayType\ArrayOfPicklistItem $contents
     */
    public function __construct($contentType = null, \mdlutz24\realpagepanda\Unit\ArrayType\ArrayOfPicklistItem $contents = null)
    {
        $this
            ->setContentType($contentType)
            ->setContents($contents);
    }
    /**
     * Get ContentType value
     * @return string
     */
    public function getContentType()
    {
        return $this->ContentType;
    }
    /**
     * Set ContentType value
     * @uses \mdlutz24\realpagepanda\Unit\EnumType\ListType::valueIsValid()
     * @uses \mdlutz24\realpagepanda\Unit\EnumType\ListType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $contentType
     * @return \mdlutz24\realpagepanda\Unit\StructType\PickListObject
     */
    public function setContentType($contentType = null)
    {
        // validation for constraint: enumeration
        if (!\mdlutz24\realpagepanda\Unit\EnumType\ListType::valueIsValid($contentType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \mdlutz24\realpagepanda\Unit\EnumType\ListType', is_array($contentType) ? implode(', ', $contentType) : var_export($contentType, true), implode(', ', \mdlutz24\realpagepanda\Unit\EnumType\ListType::getValidValues())), __LINE__);
        }
        $this->ContentType = $contentType;
        return $this;
    }
    /**
     * Get Contents value
     * @return \mdlutz24\realpagepanda\Unit\ArrayType\ArrayOfPicklistItem|null
     */
    public function getContents()
    {
        return $this->Contents;
    }
    /**
     * Set Contents value
     * @param \mdlutz24\realpagepanda\Unit\ArrayType\ArrayOfPicklistItem $contents
     * @return \mdlutz24\realpagepanda\Unit\StructType\PickListObject
     */
    public function setContents(\mdlutz24\realpagepanda\Unit\ArrayType\ArrayOfPicklistItem $contents = null)
    {
        $this->Contents = $contents;
        return $this;
    }
}
