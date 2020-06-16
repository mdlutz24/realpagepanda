<?php

namespace mdlutz24\realpagepanda\Unit\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRentMatrixResponse StructType
 * @subpackage Structs
 */
class GetRentMatrixResponse extends AbstractStructBase
{
    /**
     * The GetRentMatrixResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \mdlutz24\realpagepanda\Unit\ArrayType\ArrayOfRentMatrix
     */
    public $GetRentMatrixResult;
    /**
     * Constructor method for GetRentMatrixResponse
     * @uses GetRentMatrixResponse::setGetRentMatrixResult()
     * @param \mdlutz24\realpagepanda\Unit\ArrayType\ArrayOfRentMatrix $getRentMatrixResult
     */
    public function __construct(\mdlutz24\realpagepanda\Unit\ArrayType\ArrayOfRentMatrix $getRentMatrixResult = null)
    {
        $this
            ->setGetRentMatrixResult($getRentMatrixResult);
    }
    /**
     * Get GetRentMatrixResult value
     * @return \mdlutz24\realpagepanda\Unit\ArrayType\ArrayOfRentMatrix|null
     */
    public function getGetRentMatrixResult()
    {
        return $this->GetRentMatrixResult;
    }
    /**
     * Set GetRentMatrixResult value
     * @param \mdlutz24\realpagepanda\Unit\ArrayType\ArrayOfRentMatrix $getRentMatrixResult
     * @return \mdlutz24\realpagepanda\Unit\StructType\GetRentMatrixResponse
     */
    public function setGetRentMatrixResult(\mdlutz24\realpagepanda\Unit\ArrayType\ArrayOfRentMatrix $getRentMatrixResult = null)
    {
        $this->GetRentMatrixResult = $getRentMatrixResult;
        return $this;
    }
}
