<?php

namespace mdlutz24\realpagepanda\Unit\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnitDetails StructType
 * @subpackage Structs
 */
class UnitDetails extends AbstractStructBase
{
    /**
     * The GrossSqFtCount
     * Meta information extracted from the WSDL
     * - form: unqualified
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $GrossSqFtCount;
    /**
     * The RentSqFtCount
     * Meta information extracted from the WSDL
     * - form: unqualified
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $RentSqFtCount;
    /**
     * The FloorNumber
     * Meta information extracted from the WSDL
     * - form: unqualified
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $FloorNumber;
    /**
     * The Bedrooms
     * Meta information extracted from the WSDL
     * - form: unqualified
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Bedrooms;
    /**
     * The Bathrooms
     * Meta information extracted from the WSDL
     * - form: unqualified
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Bathrooms;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - form: unqualified
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The NoteDescription
     * Meta information extracted from the WSDL
     * - form: unqualified
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $NoteDescription;
    /**
     * Constructor method for UnitDetails
     * @uses UnitDetails::setGrossSqFtCount()
     * @uses UnitDetails::setRentSqFtCount()
     * @uses UnitDetails::setFloorNumber()
     * @uses UnitDetails::setBedrooms()
     * @uses UnitDetails::setBathrooms()
     * @uses UnitDetails::setDescription()
     * @uses UnitDetails::setNoteDescription()
     * @param int $grossSqFtCount
     * @param int $rentSqFtCount
     * @param int $floorNumber
     * @param string $bedrooms
     * @param string $bathrooms
     * @param string $description
     * @param string $noteDescription
     */
    public function __construct($grossSqFtCount = null, $rentSqFtCount = null, $floorNumber = null, $bedrooms = null, $bathrooms = null, $description = null, $noteDescription = null)
    {
        $this
            ->setGrossSqFtCount($grossSqFtCount)
            ->setRentSqFtCount($rentSqFtCount)
            ->setFloorNumber($floorNumber)
            ->setBedrooms($bedrooms)
            ->setBathrooms($bathrooms)
            ->setDescription($description)
            ->setNoteDescription($noteDescription);
    }
    /**
     * Get GrossSqFtCount value
     * @return int
     */
    public function getGrossSqFtCount()
    {
        return $this->GrossSqFtCount;
    }
    /**
     * Set GrossSqFtCount value
     * @param int $grossSqFtCount
     * @return \mdlutz24\realpagepanda\Unit\StructType\UnitDetails
     */
    public function setGrossSqFtCount($grossSqFtCount = null)
    {
        // validation for constraint: int
        if (!is_null($grossSqFtCount) && !(is_int($grossSqFtCount) || ctype_digit($grossSqFtCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($grossSqFtCount, true), gettype($grossSqFtCount)), __LINE__);
        }
        $this->GrossSqFtCount = $grossSqFtCount;
        return $this;
    }
    /**
     * Get RentSqFtCount value
     * @return int
     */
    public function getRentSqFtCount()
    {
        return $this->RentSqFtCount;
    }
    /**
     * Set RentSqFtCount value
     * @param int $rentSqFtCount
     * @return \mdlutz24\realpagepanda\Unit\StructType\UnitDetails
     */
    public function setRentSqFtCount($rentSqFtCount = null)
    {
        // validation for constraint: int
        if (!is_null($rentSqFtCount) && !(is_int($rentSqFtCount) || ctype_digit($rentSqFtCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($rentSqFtCount, true), gettype($rentSqFtCount)), __LINE__);
        }
        $this->RentSqFtCount = $rentSqFtCount;
        return $this;
    }
    /**
     * Get FloorNumber value
     * @return int
     */
    public function getFloorNumber()
    {
        return $this->FloorNumber;
    }
    /**
     * Set FloorNumber value
     * @param int $floorNumber
     * @return \mdlutz24\realpagepanda\Unit\StructType\UnitDetails
     */
    public function setFloorNumber($floorNumber = null)
    {
        // validation for constraint: int
        if (!is_null($floorNumber) && !(is_int($floorNumber) || ctype_digit($floorNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($floorNumber, true), gettype($floorNumber)), __LINE__);
        }
        $this->FloorNumber = $floorNumber;
        return $this;
    }
    /**
     * Get Bedrooms value
     * @return string|null
     */
    public function getBedrooms()
    {
        return $this->Bedrooms;
    }
    /**
     * Set Bedrooms value
     * @param string $bedrooms
     * @return \mdlutz24\realpagepanda\Unit\StructType\UnitDetails
     */
    public function setBedrooms($bedrooms = null)
    {
        // validation for constraint: string
        if (!is_null($bedrooms) && !is_string($bedrooms)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bedrooms, true), gettype($bedrooms)), __LINE__);
        }
        $this->Bedrooms = $bedrooms;
        return $this;
    }
    /**
     * Get Bathrooms value
     * @return string|null
     */
    public function getBathrooms()
    {
        return $this->Bathrooms;
    }
    /**
     * Set Bathrooms value
     * @param string $bathrooms
     * @return \mdlutz24\realpagepanda\Unit\StructType\UnitDetails
     */
    public function setBathrooms($bathrooms = null)
    {
        // validation for constraint: string
        if (!is_null($bathrooms) && !is_string($bathrooms)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bathrooms, true), gettype($bathrooms)), __LINE__);
        }
        $this->Bathrooms = $bathrooms;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \mdlutz24\realpagepanda\Unit\StructType\UnitDetails
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get NoteDescription value
     * @return string|null
     */
    public function getNoteDescription()
    {
        return $this->NoteDescription;
    }
    /**
     * Set NoteDescription value
     * @param string $noteDescription
     * @return \mdlutz24\realpagepanda\Unit\StructType\UnitDetails
     */
    public function setNoteDescription($noteDescription = null)
    {
        // validation for constraint: string
        if (!is_null($noteDescription) && !is_string($noteDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($noteDescription, true), gettype($noteDescription)), __LINE__);
        }
        $this->NoteDescription = $noteDescription;
        return $this;
    }
}
