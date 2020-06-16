<?php

namespace mdlutz24\realpagepanda\PickList\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserAuthInfo StructType
 * Meta information extracted from the WSDL
 * - type: tns:UserAuthInfo
 * @subpackage Structs
 */
class UserAuthInfo extends AbstractStructBase
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
     * The UserName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $UserName;
    /**
     * The Password
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Password;
    /**
     * The InternalUser
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $InternalUser;
    /**
     * Constructor method for UserAuthInfo
     * @uses UserAuthInfo::setSiteID()
     * @uses UserAuthInfo::setPmcID()
     * @uses UserAuthInfo::setUserName()
     * @uses UserAuthInfo::setPassword()
     * @uses UserAuthInfo::setInternalUser()
     * @param int $siteID
     * @param int $pmcID
     * @param string $userName
     * @param string $password
     * @param string $internalUser
     */
    public function __construct($siteID = null, $pmcID = null, $userName = null, $password = null, $internalUser = null)
    {
        $this
            ->setSiteID($siteID)
            ->setPmcID($pmcID)
            ->setUserName($userName)
            ->setPassword($password)
            ->setInternalUser($internalUser);
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
     * @return \mdlutz24\realpagepanda\PickList\StructType\UserAuthInfo
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
     * @return \mdlutz24\realpagepanda\PickList\StructType\UserAuthInfo
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
     * Get UserName value
     * @return string|null
     */
    public function getUserName()
    {
        return $this->UserName;
    }
    /**
     * Set UserName value
     * @param string $userName
     * @return \mdlutz24\realpagepanda\PickList\StructType\UserAuthInfo
     */
    public function setUserName($userName = null)
    {
        // validation for constraint: string
        if (!is_null($userName) && !is_string($userName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userName, true), gettype($userName)), __LINE__);
        }
        $this->UserName = $userName;
        return $this;
    }
    /**
     * Get Password value
     * @return string|null
     */
    public function getPassword()
    {
        return $this->Password;
    }
    /**
     * Set Password value
     * @param string $password
     * @return \mdlutz24\realpagepanda\PickList\StructType\UserAuthInfo
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->Password = $password;
        return $this;
    }
    /**
     * Get InternalUser value
     * @return string|null
     */
    public function getInternalUser()
    {
        return $this->InternalUser;
    }
    /**
     * Set InternalUser value
     * @param string $internalUser
     * @return \mdlutz24\realpagepanda\PickList\StructType\UserAuthInfo
     */
    public function setInternalUser($internalUser = null)
    {
        // validation for constraint: string
        if (!is_null($internalUser) && !is_string($internalUser)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($internalUser, true), gettype($internalUser)), __LINE__);
        }
        $this->InternalUser = $internalUser;
        return $this;
    }
}
