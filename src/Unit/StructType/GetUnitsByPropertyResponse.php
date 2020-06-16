<?php

namespace mdlutz24\realpagepanda\Unit\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUnitsByPropertyResponse StructType
 * @subpackage Structs
 */
class GetUnitsByPropertyResponse extends AbstractStructBase
{
    /**
     * The GetUnitsByPropertyResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \mdlutz24\realpagepanda\Unit\ArrayType\ArrayOfUnitObject
     */
    public $GetUnitsByPropertyResult;
    /**
     * Constructor method for GetUnitsByPropertyResponse
     * @uses GetUnitsByPropertyResponse::setGetUnitsByPropertyResult()
     * @param \mdlutz24\realpagepanda\Unit\ArrayType\ArrayOfUnitObject $getUnitsByPropertyResult
     */
    public function __construct(\mdlutz24\realpagepanda\Unit\ArrayType\ArrayOfUnitObject $getUnitsByPropertyResult = null)
    {
        $this
            ->setGetUnitsByPropertyResult($getUnitsByPropertyResult);
    }
    /**
     * Get GetUnitsByPropertyResult value
     * @return \mdlutz24\realpagepanda\Unit\ArrayType\ArrayOfUnitObject|null
     */
    public function getGetUnitsByPropertyResult()
    {
        return $this->GetUnitsByPropertyResult;
    }
    /**
     * Set GetUnitsByPropertyResult value
     * @param \mdlutz24\realpagepanda\Unit\ArrayType\ArrayOfUnitObject $getUnitsByPropertyResult
     * @return \mdlutz24\realpagepanda\Unit\StructType\GetUnitsByPropertyResponse
     */
    public function setGetUnitsByPropertyResult(\mdlutz24\realpagepanda\Unit\ArrayType\ArrayOfUnitObject $getUnitsByPropertyResult = null)
    {
        $this->GetUnitsByPropertyResult = $getUnitsByPropertyResult;
        return $this;
    }
}
