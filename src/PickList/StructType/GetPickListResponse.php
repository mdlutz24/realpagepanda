<?php

namespace mdlutz24\realpagepanda\PickList\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPickListResponse StructType
 * @subpackage Structs
 */
class GetPickListResponse extends AbstractStructBase
{
    /**
     * The GetPickListResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \mdlutz24\realpagepanda\PickList\StructType\PickListObject
     */
    public $GetPickListResult;
    /**
     * Constructor method for GetPickListResponse
     * @uses GetPickListResponse::setGetPickListResult()
     * @param \mdlutz24\realpagepanda\PickList\StructType\PickListObject $getPickListResult
     */
    public function __construct(\mdlutz24\realpagepanda\PickList\StructType\PickListObject $getPickListResult = null)
    {
        $this
            ->setGetPickListResult($getPickListResult);
    }
    /**
     * Get GetPickListResult value
     * @return \mdlutz24\realpagepanda\PickList\StructType\PickListObject|null
     */
    public function getGetPickListResult()
    {
        return $this->GetPickListResult;
    }
    /**
     * Set GetPickListResult value
     * @param \mdlutz24\realpagepanda\PickList\StructType\PickListObject $getPickListResult
     * @return \mdlutz24\realpagepanda\PickList\StructType\GetPickListResponse
     */
    public function setGetPickListResult(\mdlutz24\realpagepanda\PickList\StructType\PickListObject $getPickListResult = null)
    {
        $this->GetPickListResult = $getPickListResult;
        return $this;
    }
}
