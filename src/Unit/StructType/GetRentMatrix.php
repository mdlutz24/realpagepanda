<?php

namespace mdlutz24\realpagepanda\Unit\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRentMatrix StructType
 * @subpackage Structs
 */
class GetRentMatrix extends AbstractStructBase
{
    /**
     * The NeededByDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $NeededByDate;
    /**
     * The LeaseTerm
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $LeaseTerm;
    /**
     * The includeAllLeaseTerms
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $includeAllLeaseTerms;
    /**
     * The UnitIDs
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \mdlutz24\realpagepanda\Unit\ArrayType\ArrayOfInt
     */
    public $UnitIDs;
    /**
     * Constructor method for GetRentMatrix
     * @uses GetRentMatrix::setNeededByDate()
     * @uses GetRentMatrix::setLeaseTerm()
     * @uses GetRentMatrix::setIncludeAllLeaseTerms()
     * @uses GetRentMatrix::setUnitIDs()
     * @param string $neededByDate
     * @param int $leaseTerm
     * @param bool $includeAllLeaseTerms
     * @param \mdlutz24\realpagepanda\Unit\ArrayType\ArrayOfInt $unitIDs
     */
    public function __construct($neededByDate = null, $leaseTerm = null, $includeAllLeaseTerms = null, \mdlutz24\realpagepanda\Unit\ArrayType\ArrayOfInt $unitIDs = null)
    {
        $this
            ->setNeededByDate($neededByDate)
            ->setLeaseTerm($leaseTerm)
            ->setIncludeAllLeaseTerms($includeAllLeaseTerms)
            ->setUnitIDs($unitIDs);
    }
    /**
     * Get NeededByDate value
     * @return string
     */
    public function getNeededByDate()
    {
        return $this->NeededByDate;
    }
    /**
     * Set NeededByDate value
     * @param string $neededByDate
     * @return \mdlutz24\realpagepanda\Unit\StructType\GetRentMatrix
     */
    public function setNeededByDate($neededByDate = null)
    {
        // validation for constraint: string
        if (!is_null($neededByDate) && !is_string($neededByDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($neededByDate, true), gettype($neededByDate)), __LINE__);
        }
        $this->NeededByDate = $neededByDate;
        return $this;
    }
    /**
     * Get LeaseTerm value
     * @return int
     */
    public function getLeaseTerm()
    {
        return $this->LeaseTerm;
    }
    /**
     * Set LeaseTerm value
     * @param int $leaseTerm
     * @return \mdlutz24\realpagepanda\Unit\StructType\GetRentMatrix
     */
    public function setLeaseTerm($leaseTerm = null)
    {
        // validation for constraint: int
        if (!is_null($leaseTerm) && !(is_int($leaseTerm) || ctype_digit($leaseTerm))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($leaseTerm, true), gettype($leaseTerm)), __LINE__);
        }
        $this->LeaseTerm = $leaseTerm;
        return $this;
    }
    /**
     * Get includeAllLeaseTerms value
     * @return bool
     */
    public function getIncludeAllLeaseTerms()
    {
        return $this->includeAllLeaseTerms;
    }
    /**
     * Set includeAllLeaseTerms value
     * @param bool $includeAllLeaseTerms
     * @return \mdlutz24\realpagepanda\Unit\StructType\GetRentMatrix
     */
    public function setIncludeAllLeaseTerms($includeAllLeaseTerms = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeAllLeaseTerms) && !is_bool($includeAllLeaseTerms)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeAllLeaseTerms, true), gettype($includeAllLeaseTerms)), __LINE__);
        }
        $this->includeAllLeaseTerms = $includeAllLeaseTerms;
        return $this;
    }
    /**
     * Get UnitIDs value
     * @return \mdlutz24\realpagepanda\Unit\ArrayType\ArrayOfInt|null
     */
    public function getUnitIDs()
    {
        return $this->UnitIDs;
    }
    /**
     * Set UnitIDs value
     * @param \mdlutz24\realpagepanda\Unit\ArrayType\ArrayOfInt $unitIDs
     * @return \mdlutz24\realpagepanda\Unit\StructType\GetRentMatrix
     */
    public function setUnitIDs(\mdlutz24\realpagepanda\Unit\ArrayType\ArrayOfInt $unitIDs = null)
    {
        $this->UnitIDs = $unitIDs;
        return $this;
    }
}
