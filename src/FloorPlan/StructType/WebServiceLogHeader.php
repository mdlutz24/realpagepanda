<?php

namespace mdlutz24\realpagepanda\FloorPlan\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WebServiceLogHeader StructType
 * Meta information extracted from the WSDL
 * - type: tns:WebServiceLogHeader
 * @subpackage Structs
 */
class WebServiceLogHeader extends AbstractStructBase
{
    /**
     * The WebServiceLogID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $WebServiceLogID;
    /**
     * Constructor method for WebServiceLogHeader
     * @uses WebServiceLogHeader::setWebServiceLogID()
     * @param string $webServiceLogID
     */
    public function __construct($webServiceLogID = null)
    {
        $this
            ->setWebServiceLogID($webServiceLogID);
    }
    /**
     * Get WebServiceLogID value
     * @return string|null
     */
    public function getWebServiceLogID()
    {
        return $this->WebServiceLogID;
    }
    /**
     * Set WebServiceLogID value
     * @param string $webServiceLogID
     * @return \mdlutz24\realpagepanda\FloorPlan\StructType\WebServiceLogHeader
     */
    public function setWebServiceLogID($webServiceLogID = null)
    {
        // validation for constraint: string
        if (!is_null($webServiceLogID) && !is_string($webServiceLogID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($webServiceLogID, true), gettype($webServiceLogID)), __LINE__);
        }
        $this->WebServiceLogID = $webServiceLogID;
        return $this;
    }
}
