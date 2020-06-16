<?php

namespace mdlutz24\realpagepanda\Unit\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Address StructType
 * @subpackage Structs
 */
class Address extends AbstractStructBase
{
    /**
     * The BuildingID
     * Meta information extracted from the WSDL
     * - form: unqualified
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $BuildingID;
    /**
     * The Address1
     * Meta information extracted from the WSDL
     * - form: unqualified
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Address1;
    /**
     * The Address2
     * Meta information extracted from the WSDL
     * - form: unqualified
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Address2;
    /**
     * The BuildingNumber
     * Meta information extracted from the WSDL
     * - form: unqualified
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BuildingNumber;
    /**
     * The CityName
     * Meta information extracted from the WSDL
     * - form: unqualified
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CityName;
    /**
     * The CountryName
     * Meta information extracted from the WSDL
     * - form: unqualified
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CountryName;
    /**
     * The CountyName
     * Meta information extracted from the WSDL
     * - form: unqualified
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CountyName;
    /**
     * The State
     * Meta information extracted from the WSDL
     * - form: unqualified
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $State;
    /**
     * The UnitID
     * Meta information extracted from the WSDL
     * - form: unqualified
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $UnitID;
    /**
     * The UnitNumber
     * Meta information extracted from the WSDL
     * - form: unqualified
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $UnitNumber;
    /**
     * The Zip
     * Meta information extracted from the WSDL
     * - form: unqualified
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Zip;
    /**
     * Constructor method for Address
     * @uses Address::setBuildingID()
     * @uses Address::setAddress1()
     * @uses Address::setAddress2()
     * @uses Address::setBuildingNumber()
     * @uses Address::setCityName()
     * @uses Address::setCountryName()
     * @uses Address::setCountyName()
     * @uses Address::setState()
     * @uses Address::setUnitID()
     * @uses Address::setUnitNumber()
     * @uses Address::setZip()
     * @param int $buildingID
     * @param string $address1
     * @param string $address2
     * @param string $buildingNumber
     * @param string $cityName
     * @param string $countryName
     * @param string $countyName
     * @param string $state
     * @param string $unitID
     * @param string $unitNumber
     * @param string $zip
     */
    public function __construct($buildingID = null, $address1 = null, $address2 = null, $buildingNumber = null, $cityName = null, $countryName = null, $countyName = null, $state = null, $unitID = null, $unitNumber = null, $zip = null)
    {
        $this
            ->setBuildingID($buildingID)
            ->setAddress1($address1)
            ->setAddress2($address2)
            ->setBuildingNumber($buildingNumber)
            ->setCityName($cityName)
            ->setCountryName($countryName)
            ->setCountyName($countyName)
            ->setState($state)
            ->setUnitID($unitID)
            ->setUnitNumber($unitNumber)
            ->setZip($zip);
    }
    /**
     * Get BuildingID value
     * @return int
     */
    public function getBuildingID()
    {
        return $this->BuildingID;
    }
    /**
     * Set BuildingID value
     * @param int $buildingID
     * @return \mdlutz24\realpagepanda\Unit\StructType\Address
     */
    public function setBuildingID($buildingID = null)
    {
        // validation for constraint: int
        if (!is_null($buildingID) && !(is_int($buildingID) || ctype_digit($buildingID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($buildingID, true), gettype($buildingID)), __LINE__);
        }
        $this->BuildingID = $buildingID;
        return $this;
    }
    /**
     * Get Address1 value
     * @return string|null
     */
    public function getAddress1()
    {
        return $this->Address1;
    }
    /**
     * Set Address1 value
     * @param string $address1
     * @return \mdlutz24\realpagepanda\Unit\StructType\Address
     */
    public function setAddress1($address1 = null)
    {
        // validation for constraint: string
        if (!is_null($address1) && !is_string($address1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address1, true), gettype($address1)), __LINE__);
        }
        $this->Address1 = $address1;
        return $this;
    }
    /**
     * Get Address2 value
     * @return string|null
     */
    public function getAddress2()
    {
        return $this->Address2;
    }
    /**
     * Set Address2 value
     * @param string $address2
     * @return \mdlutz24\realpagepanda\Unit\StructType\Address
     */
    public function setAddress2($address2 = null)
    {
        // validation for constraint: string
        if (!is_null($address2) && !is_string($address2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address2, true), gettype($address2)), __LINE__);
        }
        $this->Address2 = $address2;
        return $this;
    }
    /**
     * Get BuildingNumber value
     * @return string|null
     */
    public function getBuildingNumber()
    {
        return $this->BuildingNumber;
    }
    /**
     * Set BuildingNumber value
     * @param string $buildingNumber
     * @return \mdlutz24\realpagepanda\Unit\StructType\Address
     */
    public function setBuildingNumber($buildingNumber = null)
    {
        // validation for constraint: string
        if (!is_null($buildingNumber) && !is_string($buildingNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($buildingNumber, true), gettype($buildingNumber)), __LINE__);
        }
        $this->BuildingNumber = $buildingNumber;
        return $this;
    }
    /**
     * Get CityName value
     * @return string|null
     */
    public function getCityName()
    {
        return $this->CityName;
    }
    /**
     * Set CityName value
     * @param string $cityName
     * @return \mdlutz24\realpagepanda\Unit\StructType\Address
     */
    public function setCityName($cityName = null)
    {
        // validation for constraint: string
        if (!is_null($cityName) && !is_string($cityName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cityName, true), gettype($cityName)), __LINE__);
        }
        $this->CityName = $cityName;
        return $this;
    }
    /**
     * Get CountryName value
     * @return string|null
     */
    public function getCountryName()
    {
        return $this->CountryName;
    }
    /**
     * Set CountryName value
     * @param string $countryName
     * @return \mdlutz24\realpagepanda\Unit\StructType\Address
     */
    public function setCountryName($countryName = null)
    {
        // validation for constraint: string
        if (!is_null($countryName) && !is_string($countryName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryName, true), gettype($countryName)), __LINE__);
        }
        $this->CountryName = $countryName;
        return $this;
    }
    /**
     * Get CountyName value
     * @return string|null
     */
    public function getCountyName()
    {
        return $this->CountyName;
    }
    /**
     * Set CountyName value
     * @param string $countyName
     * @return \mdlutz24\realpagepanda\Unit\StructType\Address
     */
    public function setCountyName($countyName = null)
    {
        // validation for constraint: string
        if (!is_null($countyName) && !is_string($countyName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countyName, true), gettype($countyName)), __LINE__);
        }
        $this->CountyName = $countyName;
        return $this;
    }
    /**
     * Get State value
     * @return string|null
     */
    public function getState()
    {
        return $this->State;
    }
    /**
     * Set State value
     * @param string $state
     * @return \mdlutz24\realpagepanda\Unit\StructType\Address
     */
    public function setState($state = null)
    {
        // validation for constraint: string
        if (!is_null($state) && !is_string($state)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($state, true), gettype($state)), __LINE__);
        }
        $this->State = $state;
        return $this;
    }
    /**
     * Get UnitID value
     * @return string|null
     */
    public function getUnitID()
    {
        return $this->UnitID;
    }
    /**
     * Set UnitID value
     * @param string $unitID
     * @return \mdlutz24\realpagepanda\Unit\StructType\Address
     */
    public function setUnitID($unitID = null)
    {
        // validation for constraint: string
        if (!is_null($unitID) && !is_string($unitID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitID, true), gettype($unitID)), __LINE__);
        }
        $this->UnitID = $unitID;
        return $this;
    }
    /**
     * Get UnitNumber value
     * @return string|null
     */
    public function getUnitNumber()
    {
        return $this->UnitNumber;
    }
    /**
     * Set UnitNumber value
     * @param string $unitNumber
     * @return \mdlutz24\realpagepanda\Unit\StructType\Address
     */
    public function setUnitNumber($unitNumber = null)
    {
        // validation for constraint: string
        if (!is_null($unitNumber) && !is_string($unitNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitNumber, true), gettype($unitNumber)), __LINE__);
        }
        $this->UnitNumber = $unitNumber;
        return $this;
    }
    /**
     * Get Zip value
     * @return string|null
     */
    public function getZip()
    {
        return $this->Zip;
    }
    /**
     * Set Zip value
     * @param string $zip
     * @return \mdlutz24\realpagepanda\Unit\StructType\Address
     */
    public function setZip($zip = null)
    {
        // validation for constraint: string
        if (!is_null($zip) && !is_string($zip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zip, true), gettype($zip)), __LINE__);
        }
        $this->Zip = $zip;
        return $this;
    }
}
