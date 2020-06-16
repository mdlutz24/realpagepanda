<?php

namespace mdlutz24\realpagepanda\FloorPlan;

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
            'List' => '\\mdlutz24\\realpagepanda\\FloorPlan\\StructType\\_List',
            'ArrayOfListCriterion' => '\\mdlutz24\\realpagepanda\\FloorPlan\\ArrayType\\ArrayOfListCriterion',
            'ListCriterion' => '\\mdlutz24\\realpagepanda\\FloorPlan\\StructType\\ListCriterion',
            'EntityBase' => '\\mdlutz24\\realpagepanda\\FloorPlan\\StructType\\EntityBase',
            'ListResponse' => '\\mdlutz24\\realpagepanda\\FloorPlan\\StructType\\ListResponse',
            'ArrayOfFloorPlanObject' => '\\mdlutz24\\realpagepanda\\FloorPlan\\ArrayType\\ArrayOfFloorPlanObject',
            'FloorPlanObject' => '\\mdlutz24\\realpagepanda\\FloorPlan\\StructType\\FloorPlanObject',
            'UserAuthInfo' => '\\mdlutz24\\realpagepanda\\FloorPlan\\StructType\\UserAuthInfo',
            'CallBackAuthInfo' => '\\mdlutz24\\realpagepanda\\FloorPlan\\StructType\\CallBackAuthInfo',
            'WebServiceLogHeader' => '\\mdlutz24\\realpagepanda\\FloorPlan\\StructType\\WebServiceLogHeader',
        );
    }
}
