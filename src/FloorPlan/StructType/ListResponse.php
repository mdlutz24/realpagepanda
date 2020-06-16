<?php

namespace mdlutz24\realpagepanda\FloorPlan\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListResponse StructType
 * @subpackage Structs
 */
class ListResponse extends AbstractStructBase
{
    /**
     * The ListResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \mdlutz24\realpagepanda\FloorPlan\ArrayType\ArrayOfFloorPlanObject
     */
    public $ListResult;
    /**
     * Constructor method for ListResponse
     * @uses ListResponse::setListResult()
     * @param \mdlutz24\realpagepanda\FloorPlan\ArrayType\ArrayOfFloorPlanObject $listResult
     */
    public function __construct(\mdlutz24\realpagepanda\FloorPlan\ArrayType\ArrayOfFloorPlanObject $listResult = null)
    {
        $this
            ->setListResult($listResult);
    }
    /**
     * Get ListResult value
     * @return \mdlutz24\realpagepanda\FloorPlan\ArrayType\ArrayOfFloorPlanObject|null
     */
    public function getListResult()
    {
        return $this->ListResult;
    }
    /**
     * Set ListResult value
     * @param \mdlutz24\realpagepanda\FloorPlan\ArrayType\ArrayOfFloorPlanObject $listResult
     * @return \mdlutz24\realpagepanda\FloorPlan\StructType\ListResponse
     */
    public function setListResult(\mdlutz24\realpagepanda\FloorPlan\ArrayType\ArrayOfFloorPlanObject $listResult = null)
    {
        $this->ListResult = $listResult;
        return $this;
    }
}
