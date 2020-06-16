<?php

namespace mdlutz24\realpagepanda\Unit\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EntityBase StructType
 * @subpackage Structs
 */
class EntityBase extends AbstractStructBase
{
    /**
     * The PmcID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $PmcID;
    /**
     * The SiteID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $SiteID;
    /**
     * Constructor method for EntityBase
     * @uses EntityBase::setPmcID()
     * @uses EntityBase::setSiteID()
     * @param int $pmcID
     * @param int $siteID
     */
    public function __construct($pmcID = null, $siteID = null)
    {
        $this
            ->setPmcID($pmcID)
            ->setSiteID($siteID);
    }
    /**
     * Get PmcID value
     * @return int
     */
    public function getPmcID()
    {
        return $this->PmcID;
    }
    /**
     * Set PmcID value
     * @param int $pmcID
     * @return \mdlutz24\realpagepanda\Unit\StructType\EntityBase
     */
    public function setPmcID($pmcID = null)
    {
        // validation for constraint: int
        if (!is_null($pmcID) && !(is_int($pmcID) || ctype_digit($pmcID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pmcID, true), gettype($pmcID)), __LINE__);
        }
        $this->PmcID = $pmcID;
        return $this;
    }
    /**
     * Get SiteID value
     * @return int
     */
    public function getSiteID()
    {
        return $this->SiteID;
    }
    /**
     * Set SiteID value
     * @param int $siteID
     * @return \mdlutz24\realpagepanda\Unit\StructType\EntityBase
     */
    public function setSiteID($siteID = null)
    {
        // validation for constraint: int
        if (!is_null($siteID) && !(is_int($siteID) || ctype_digit($siteID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($siteID, true), gettype($siteID)), __LINE__);
        }
        $this->SiteID = $siteID;
        return $this;
    }
}
