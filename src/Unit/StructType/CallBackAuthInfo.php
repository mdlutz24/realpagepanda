<?php

namespace mdlutz24\realpagepanda\Unit\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CallBackAuthInfo StructType
 * Meta information extracted from the WSDL
 * - type: tns:CallBackAuthInfo
 * @subpackage Structs
 */
class CallBackAuthInfo extends AbstractStructBase
{
    /**
     * The SiteID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $SiteID;
    /**
     * The PmcID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $PmcID;
    /**
     * The App
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $App;
    /**
     * The SessionID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SessionID;
    /**
     * The EncryptionKey
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $EncryptionKey;
    /**
     * Constructor method for CallBackAuthInfo
     * @uses CallBackAuthInfo::setSiteID()
     * @uses CallBackAuthInfo::setPmcID()
     * @uses CallBackAuthInfo::setApp()
     * @uses CallBackAuthInfo::setSessionID()
     * @uses CallBackAuthInfo::setEncryptionKey()
     * @param int $siteID
     * @param int $pmcID
     * @param string $app
     * @param string $sessionID
     * @param string $encryptionKey
     */
    public function __construct($siteID = null, $pmcID = null, $app = null, $sessionID = null, $encryptionKey = null)
    {
        $this
            ->setSiteID($siteID)
            ->setPmcID($pmcID)
            ->setApp($app)
            ->setSessionID($sessionID)
            ->setEncryptionKey($encryptionKey);
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
     * @return \mdlutz24\realpagepanda\Unit\StructType\CallBackAuthInfo
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
     * @return \mdlutz24\realpagepanda\Unit\StructType\CallBackAuthInfo
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
     * Get App value
     * @return string|null
     */
    public function getApp()
    {
        return $this->App;
    }
    /**
     * Set App value
     * @param string $app
     * @return \mdlutz24\realpagepanda\Unit\StructType\CallBackAuthInfo
     */
    public function setApp($app = null)
    {
        // validation for constraint: string
        if (!is_null($app) && !is_string($app)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($app, true), gettype($app)), __LINE__);
        }
        $this->App = $app;
        return $this;
    }
    /**
     * Get SessionID value
     * @return string|null
     */
    public function getSessionID()
    {
        return $this->SessionID;
    }
    /**
     * Set SessionID value
     * @param string $sessionID
     * @return \mdlutz24\realpagepanda\Unit\StructType\CallBackAuthInfo
     */
    public function setSessionID($sessionID = null)
    {
        // validation for constraint: string
        if (!is_null($sessionID) && !is_string($sessionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sessionID, true), gettype($sessionID)), __LINE__);
        }
        $this->SessionID = $sessionID;
        return $this;
    }
    /**
     * Get EncryptionKey value
     * @return string|null
     */
    public function getEncryptionKey()
    {
        return $this->EncryptionKey;
    }
    /**
     * Set EncryptionKey value
     * @param string $encryptionKey
     * @return \mdlutz24\realpagepanda\Unit\StructType\CallBackAuthInfo
     */
    public function setEncryptionKey($encryptionKey = null)
    {
        // validation for constraint: string
        if (!is_null($encryptionKey) && !is_string($encryptionKey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($encryptionKey, true), gettype($encryptionKey)), __LINE__);
        }
        $this->EncryptionKey = $encryptionKey;
        return $this;
    }
}
