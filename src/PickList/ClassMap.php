<?php

namespace mdlutz24\realpagepanda\PickList;

/**
 * Class which returns the class map definition
 * @package
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'GetPickList' => '\\mdlutz24\\realpagepanda\\PickList\\StructType\\GetPickList',
            'GetPickListResponse' => '\\mdlutz24\\realpagepanda\\PickList\\StructType\\GetPickListResponse',
            'PickListObject' => '\\mdlutz24\\realpagepanda\\PickList\\StructType\\PickListObject',
            'ArrayOfPicklistItem' => '\\mdlutz24\\realpagepanda\\PickList\\ArrayType\\ArrayOfPicklistItem',
            'PicklistItem' => '\\mdlutz24\\realpagepanda\\PickList\\StructType\\PicklistItem',
            'UserAuthInfo' => '\\mdlutz24\\realpagepanda\\PickList\\StructType\\UserAuthInfo',
            'WebServiceLogHeader' => '\\mdlutz24\\realpagepanda\\PickList\\StructType\\WebServiceLogHeader',
            'GetPickLists' => '\\mdlutz24\\realpagepanda\\PickList\\StructType\\GetPickLists',
            'ArrayOfListType' => '\\mdlutz24\\realpagepanda\\PickList\\ArrayType\\ArrayOfListType',
            'GetPickListsResponse' => '\\mdlutz24\\realpagepanda\\PickList\\StructType\\GetPickListsResponse',
            'ArrayOfPickListObject' => '\\mdlutz24\\realpagepanda\\PickList\\ArrayType\\ArrayOfPickListObject',
        );
    }
}
