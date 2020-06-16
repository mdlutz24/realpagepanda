<?php

namespace mdlutz24\realpagepanda\Unit\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFloorPlanGroupsByPropertyResponse StructType
 * @subpackage Structs
 */
class GetFloorPlanGroupsByPropertyResponse extends AbstractStructBase
{
    /**
     * The GetFloorPlanGroupsByPropertyResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \mdlutz24\realpagepanda\Unit\StructType\PickListObject
     */
    public $GetFloorPlanGroupsByPropertyResult;
    /**
     * Constructor method for GetFloorPlanGroupsByPropertyResponse
     * @uses GetFloorPlanGroupsByPropertyResponse::setGetFloorPlanGroupsByPropertyResult()
     * @param \mdlutz24\realpagepanda\Unit\StructType\PickListObject $getFloorPlanGroupsByPropertyResult
     */
    public function __construct(\mdlutz24\realpagepanda\Unit\StructType\PickListObject $getFloorPlanGroupsByPropertyResult = null)
    {
        $this
            ->setGetFloorPlanGroupsByPropertyResult($getFloorPlanGroupsByPropertyResult);
    }
    /**
     * Get GetFloorPlanGroupsByPropertyResult value
     * @return \mdlutz24\realpagepanda\Unit\StructType\PickListObject|null
     */
    public function getGetFloorPlanGroupsByPropertyResult()
    {
        return $this->GetFloorPlanGroupsByPropertyResult;
    }
    /**
     * Set GetFloorPlanGroupsByPropertyResult value
     * @param \mdlutz24\realpagepanda\Unit\StructType\PickListObject $getFloorPlanGroupsByPropertyResult
     * @return \mdlutz24\realpagepanda\Unit\StructType\GetFloorPlanGroupsByPropertyResponse
     */
    public function setGetFloorPlanGroupsByPropertyResult(\mdlutz24\realpagepanda\Unit\StructType\PickListObject $getFloorPlanGroupsByPropertyResult = null)
    {
        $this->GetFloorPlanGroupsByPropertyResult = $getFloorPlanGroupsByPropertyResult;
        return $this;
    }
}
