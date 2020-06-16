<?php

namespace mdlutz24\realpagepanda\Unit\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFloorPlanIDAndNameResponse StructType
 * @subpackage Structs
 */
class GetFloorPlanIDAndNameResponse extends AbstractStructBase
{
    /**
     * The GetFloorPlanIDAndNameResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \mdlutz24\realpagepanda\Unit\StructType\PickListObject
     */
    public $GetFloorPlanIDAndNameResult;
    /**
     * Constructor method for GetFloorPlanIDAndNameResponse
     * @uses GetFloorPlanIDAndNameResponse::setGetFloorPlanIDAndNameResult()
     * @param \mdlutz24\realpagepanda\Unit\StructType\PickListObject $getFloorPlanIDAndNameResult
     */
    public function __construct(\mdlutz24\realpagepanda\Unit\StructType\PickListObject $getFloorPlanIDAndNameResult = null)
    {
        $this
            ->setGetFloorPlanIDAndNameResult($getFloorPlanIDAndNameResult);
    }
    /**
     * Get GetFloorPlanIDAndNameResult value
     * @return \mdlutz24\realpagepanda\Unit\StructType\PickListObject|null
     */
    public function getGetFloorPlanIDAndNameResult()
    {
        return $this->GetFloorPlanIDAndNameResult;
    }
    /**
     * Set GetFloorPlanIDAndNameResult value
     * @param \mdlutz24\realpagepanda\Unit\StructType\PickListObject $getFloorPlanIDAndNameResult
     * @return \mdlutz24\realpagepanda\Unit\StructType\GetFloorPlanIDAndNameResponse
     */
    public function setGetFloorPlanIDAndNameResult(\mdlutz24\realpagepanda\Unit\StructType\PickListObject $getFloorPlanIDAndNameResult = null)
    {
        $this->GetFloorPlanIDAndNameResult = $getFloorPlanIDAndNameResult;
        return $this;
    }
}
