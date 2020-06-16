<?php

namespace mdlutz24\realpagepanda\Unit\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Availability StructType
 * @subpackage Structs
 */
class Availability extends AbstractStructBase
{
    /**
     * The MadeReadyBit
     * Meta information extracted from the WSDL
     * - form: unqualified
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $MadeReadyBit;
    /**
     * The AvailableBit
     * Meta information extracted from the WSDL
     * - form: unqualified
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $AvailableBit;
    /**
     * The VacantBit
     * Meta information extracted from the WSDL
     * - form: unqualified
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $VacantBit;
    /**
     * The UnavailableCode
     * Meta information extracted from the WSDL
     * - form: unqualified
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $UnavailableCode;
    /**
     * The MadeReadyDate
     * Meta information extracted from the WSDL
     * - form: unqualified
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MadeReadyDate;
    /**
     * The AvailableDate
     * Meta information extracted from the WSDL
     * - form: unqualified
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AvailableDate;
    /**
     * The LastActionCode
     * Meta information extracted from the WSDL
     * - form: unqualified
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $LastActionCode;
    /**
     * The LastActionDesc
     * Meta information extracted from the WSDL
     * - form: unqualified
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $LastActionDesc;
    /**
     * The VacantDate
     * Meta information extracted from the WSDL
     * - form: unqualified
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $VacantDate;
    /**
     * Constructor method for Availability
     * @uses Availability::setMadeReadyBit()
     * @uses Availability::setAvailableBit()
     * @uses Availability::setVacantBit()
     * @uses Availability::setUnavailableCode()
     * @uses Availability::setMadeReadyDate()
     * @uses Availability::setAvailableDate()
     * @uses Availability::setLastActionCode()
     * @uses Availability::setLastActionDesc()
     * @uses Availability::setVacantDate()
     * @param bool $madeReadyBit
     * @param bool $availableBit
     * @param bool $vacantBit
     * @param string $unavailableCode
     * @param string $madeReadyDate
     * @param string $availableDate
     * @param string $lastActionCode
     * @param string $lastActionDesc
     * @param string $vacantDate
     */
    public function __construct($madeReadyBit = null, $availableBit = null, $vacantBit = null, $unavailableCode = null, $madeReadyDate = null, $availableDate = null, $lastActionCode = null, $lastActionDesc = null, $vacantDate = null)
    {
        $this
            ->setMadeReadyBit($madeReadyBit)
            ->setAvailableBit($availableBit)
            ->setVacantBit($vacantBit)
            ->setUnavailableCode($unavailableCode)
            ->setMadeReadyDate($madeReadyDate)
            ->setAvailableDate($availableDate)
            ->setLastActionCode($lastActionCode)
            ->setLastActionDesc($lastActionDesc)
            ->setVacantDate($vacantDate);
    }
    /**
     * Get MadeReadyBit value
     * @return bool
     */
    public function getMadeReadyBit()
    {
        return $this->MadeReadyBit;
    }
    /**
     * Set MadeReadyBit value
     * @param bool $madeReadyBit
     * @return \mdlutz24\realpagepanda\Unit\StructType\Availability
     */
    public function setMadeReadyBit($madeReadyBit = null)
    {
        // validation for constraint: boolean
        if (!is_null($madeReadyBit) && !is_bool($madeReadyBit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($madeReadyBit, true), gettype($madeReadyBit)), __LINE__);
        }
        $this->MadeReadyBit = $madeReadyBit;
        return $this;
    }
    /**
     * Get AvailableBit value
     * @return bool
     */
    public function getAvailableBit()
    {
        return $this->AvailableBit;
    }
    /**
     * Set AvailableBit value
     * @param bool $availableBit
     * @return \mdlutz24\realpagepanda\Unit\StructType\Availability
     */
    public function setAvailableBit($availableBit = null)
    {
        // validation for constraint: boolean
        if (!is_null($availableBit) && !is_bool($availableBit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($availableBit, true), gettype($availableBit)), __LINE__);
        }
        $this->AvailableBit = $availableBit;
        return $this;
    }
    /**
     * Get VacantBit value
     * @return bool
     */
    public function getVacantBit()
    {
        return $this->VacantBit;
    }
    /**
     * Set VacantBit value
     * @param bool $vacantBit
     * @return \mdlutz24\realpagepanda\Unit\StructType\Availability
     */
    public function setVacantBit($vacantBit = null)
    {
        // validation for constraint: boolean
        if (!is_null($vacantBit) && !is_bool($vacantBit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($vacantBit, true), gettype($vacantBit)), __LINE__);
        }
        $this->VacantBit = $vacantBit;
        return $this;
    }
    /**
     * Get UnavailableCode value
     * @return string|null
     */
    public function getUnavailableCode()
    {
        return $this->UnavailableCode;
    }
    /**
     * Set UnavailableCode value
     * @param string $unavailableCode
     * @return \mdlutz24\realpagepanda\Unit\StructType\Availability
     */
    public function setUnavailableCode($unavailableCode = null)
    {
        // validation for constraint: string
        if (!is_null($unavailableCode) && !is_string($unavailableCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unavailableCode, true), gettype($unavailableCode)), __LINE__);
        }
        $this->UnavailableCode = $unavailableCode;
        return $this;
    }
    /**
     * Get MadeReadyDate value
     * @return string|null
     */
    public function getMadeReadyDate()
    {
        return $this->MadeReadyDate;
    }
    /**
     * Set MadeReadyDate value
     * @param string $madeReadyDate
     * @return \mdlutz24\realpagepanda\Unit\StructType\Availability
     */
    public function setMadeReadyDate($madeReadyDate = null)
    {
        // validation for constraint: string
        if (!is_null($madeReadyDate) && !is_string($madeReadyDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($madeReadyDate, true), gettype($madeReadyDate)), __LINE__);
        }
        $this->MadeReadyDate = $madeReadyDate;
        return $this;
    }
    /**
     * Get AvailableDate value
     * @return string|null
     */
    public function getAvailableDate()
    {
        return $this->AvailableDate;
    }
    /**
     * Set AvailableDate value
     * @param string $availableDate
     * @return \mdlutz24\realpagepanda\Unit\StructType\Availability
     */
    public function setAvailableDate($availableDate = null)
    {
        // validation for constraint: string
        if (!is_null($availableDate) && !is_string($availableDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($availableDate, true), gettype($availableDate)), __LINE__);
        }
        $this->AvailableDate = $availableDate;
        return $this;
    }
    /**
     * Get LastActionCode value
     * @return string|null
     */
    public function getLastActionCode()
    {
        return $this->LastActionCode;
    }
    /**
     * Set LastActionCode value
     * @param string $lastActionCode
     * @return \mdlutz24\realpagepanda\Unit\StructType\Availability
     */
    public function setLastActionCode($lastActionCode = null)
    {
        // validation for constraint: string
        if (!is_null($lastActionCode) && !is_string($lastActionCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastActionCode, true), gettype($lastActionCode)), __LINE__);
        }
        $this->LastActionCode = $lastActionCode;
        return $this;
    }
    /**
     * Get LastActionDesc value
     * @return string|null
     */
    public function getLastActionDesc()
    {
        return $this->LastActionDesc;
    }
    /**
     * Set LastActionDesc value
     * @param string $lastActionDesc
     * @return \mdlutz24\realpagepanda\Unit\StructType\Availability
     */
    public function setLastActionDesc($lastActionDesc = null)
    {
        // validation for constraint: string
        if (!is_null($lastActionDesc) && !is_string($lastActionDesc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastActionDesc, true), gettype($lastActionDesc)), __LINE__);
        }
        $this->LastActionDesc = $lastActionDesc;
        return $this;
    }
    /**
     * Get VacantDate value
     * @return string|null
     */
    public function getVacantDate()
    {
        return $this->VacantDate;
    }
    /**
     * Set VacantDate value
     * @param string $vacantDate
     * @return \mdlutz24\realpagepanda\Unit\StructType\Availability
     */
    public function setVacantDate($vacantDate = null)
    {
        // validation for constraint: string
        if (!is_null($vacantDate) && !is_string($vacantDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vacantDate, true), gettype($vacantDate)), __LINE__);
        }
        $this->VacantDate = $vacantDate;
        return $this;
    }
}
