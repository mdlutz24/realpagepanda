<?php

namespace mdlutz24\realpagepanda\PickList\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPickListsResponse StructType
 * @subpackage Structs
 */
class GetPickListsResponse extends AbstractStructBase
{
    /**
     * The GetPickListsResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \mdlutz24\realpagepanda\PickList\ArrayType\ArrayOfPickListObject
     */
    public $GetPickListsResult;
    /**
     * Constructor method for GetPickListsResponse
     * @uses GetPickListsResponse::setGetPickListsResult()
     * @param \mdlutz24\realpagepanda\PickList\ArrayType\ArrayOfPickListObject $getPickListsResult
     */
    public function __construct(\mdlutz24\realpagepanda\PickList\ArrayType\ArrayOfPickListObject $getPickListsResult = null)
    {
        $this
            ->setGetPickListsResult($getPickListsResult);
    }
    /**
     * Get GetPickListsResult value
     * @return \mdlutz24\realpagepanda\PickList\ArrayType\ArrayOfPickListObject|null
     */
    public function getGetPickListsResult()
    {
        return $this->GetPickListsResult;
    }
    /**
     * Set GetPickListsResult value
     * @param \mdlutz24\realpagepanda\PickList\ArrayType\ArrayOfPickListObject $getPickListsResult
     * @return \mdlutz24\realpagepanda\PickList\StructType\GetPickListsResponse
     */
    public function setGetPickListsResult(\mdlutz24\realpagepanda\PickList\ArrayType\ArrayOfPickListObject $getPickListsResult = null)
    {
        $this->GetPickListsResult = $getPickListsResult;
        return $this;
    }
}
