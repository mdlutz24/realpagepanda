<?php

namespace mdlutz24\realpagepanda\PickList\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PicklistItem StructType
 * @subpackage Structs
 */
class PicklistItem extends AbstractStructBase
{
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Value;
    /**
     * The Text
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Text;
    /**
     * Constructor method for PicklistItem
     * @uses PicklistItem::setValue()
     * @uses PicklistItem::setText()
     * @param string $value
     * @param string $text
     */
    public function __construct($value = null, $text = null)
    {
        $this
            ->setValue($value)
            ->setText($text);
    }
    /**
     * Get Value value
     * @return string|null
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param string $value
     * @return \mdlutz24\realpagepanda\PickList\StructType\PicklistItem
     */
    public function setValue($value = null)
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->Value = $value;
        return $this;
    }
    /**
     * Get Text value
     * @return string|null
     */
    public function getText()
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @param string $text
     * @return \mdlutz24\realpagepanda\PickList\StructType\PicklistItem
     */
    public function setText($text = null)
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($text, true), gettype($text)), __LINE__);
        }
        $this->Text = $text;
        return $this;
    }
}
