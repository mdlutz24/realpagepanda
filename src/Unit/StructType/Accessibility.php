<?php

namespace mdlutz24\realpagepanda\Unit\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Accessibility StructType
 * @subpackage Structs
 */
class Accessibility extends AbstractStructBase
{
    /**
     * The HearingBit
     * Meta information extracted from the WSDL
     * - form: unqualified
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $HearingBit;
    /**
     * The MobilityBit
     * Meta information extracted from the WSDL
     * - form: unqualified
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $MobilityBit;
    /**
     * The VisionBit
     * Meta information extracted from the WSDL
     * - form: unqualified
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $VisionBit;
    /**
     * Constructor method for Accessibility
     * @uses Accessibility::setHearingBit()
     * @uses Accessibility::setMobilityBit()
     * @uses Accessibility::setVisionBit()
     * @param bool $hearingBit
     * @param bool $mobilityBit
     * @param bool $visionBit
     */
    public function __construct($hearingBit = null, $mobilityBit = null, $visionBit = null)
    {
        $this
            ->setHearingBit($hearingBit)
            ->setMobilityBit($mobilityBit)
            ->setVisionBit($visionBit);
    }
    /**
     * Get HearingBit value
     * @return bool
     */
    public function getHearingBit()
    {
        return $this->HearingBit;
    }
    /**
     * Set HearingBit value
     * @param bool $hearingBit
     * @return \mdlutz24\realpagepanda\Unit\StructType\Accessibility
     */
    public function setHearingBit($hearingBit = null)
    {
        // validation for constraint: boolean
        if (!is_null($hearingBit) && !is_bool($hearingBit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hearingBit, true), gettype($hearingBit)), __LINE__);
        }
        $this->HearingBit = $hearingBit;
        return $this;
    }
    /**
     * Get MobilityBit value
     * @return bool
     */
    public function getMobilityBit()
    {
        return $this->MobilityBit;
    }
    /**
     * Set MobilityBit value
     * @param bool $mobilityBit
     * @return \mdlutz24\realpagepanda\Unit\StructType\Accessibility
     */
    public function setMobilityBit($mobilityBit = null)
    {
        // validation for constraint: boolean
        if (!is_null($mobilityBit) && !is_bool($mobilityBit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($mobilityBit, true), gettype($mobilityBit)), __LINE__);
        }
        $this->MobilityBit = $mobilityBit;
        return $this;
    }
    /**
     * Get VisionBit value
     * @return bool
     */
    public function getVisionBit()
    {
        return $this->VisionBit;
    }
    /**
     * Set VisionBit value
     * @param bool $visionBit
     * @return \mdlutz24\realpagepanda\Unit\StructType\Accessibility
     */
    public function setVisionBit($visionBit = null)
    {
        // validation for constraint: boolean
        if (!is_null($visionBit) && !is_bool($visionBit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($visionBit, true), gettype($visionBit)), __LINE__);
        }
        $this->VisionBit = $visionBit;
        return $this;
    }
}
