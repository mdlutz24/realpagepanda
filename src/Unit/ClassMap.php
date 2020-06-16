<?php

namespace mdlutz24\realpagepanda\Unit;

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
            'List' => '\\mdlutz24\\realpagepanda\\Unit\\StructType\\_List',
            'ArrayOfListCriterion' => '\\mdlutz24\\realpagepanda\\Unit\\ArrayType\\ArrayOfListCriterion',
            'ListCriterion' => '\\mdlutz24\\realpagepanda\\Unit\\StructType\\ListCriterion',
            'EntityBase' => '\\mdlutz24\\realpagepanda\\Unit\\StructType\\EntityBase',
            'ListResponse' => '\\mdlutz24\\realpagepanda\\Unit\\StructType\\ListResponse',
            'ArrayOfUnitObject' => '\\mdlutz24\\realpagepanda\\Unit\\ArrayType\\ArrayOfUnitObject',
            'UnitObject' => '\\mdlutz24\\realpagepanda\\Unit\\StructType\\UnitObject',
            'Accessibility' => '\\mdlutz24\\realpagepanda\\Unit\\StructType\\Accessibility',
            'Address' => '\\mdlutz24\\realpagepanda\\Unit\\StructType\\Address',
            'Availability' => '\\mdlutz24\\realpagepanda\\Unit\\StructType\\Availability',
            'FloorPlan' => '\\mdlutz24\\realpagepanda\\Unit\\StructType\\FloorPlan',
            'UnitDetails' => '\\mdlutz24\\realpagepanda\\Unit\\StructType\\UnitDetails',
            'rentMatrix' => '\\mdlutz24\\realpagepanda\\Unit\\StructType\\RentMatrix',
            'row' => '\\mdlutz24\\realpagepanda\\Unit\\StructType\\Row',
            'options' => '\\mdlutz24\\realpagepanda\\Unit\\StructType\\Options',
            'option' => '\\mdlutz24\\realpagepanda\\Unit\\StructType\\Option',
            'Concessions' => '\\mdlutz24\\realpagepanda\\Unit\\StructType\\Concessions',
            'UserAuthInfo' => '\\mdlutz24\\realpagepanda\\Unit\\StructType\\UserAuthInfo',
            'CallBackAuthInfo' => '\\mdlutz24\\realpagepanda\\Unit\\StructType\\CallBackAuthInfo',
            'GetRentMatrix' => '\\mdlutz24\\realpagepanda\\Unit\\StructType\\GetRentMatrix',
            'ArrayOfInt' => '\\mdlutz24\\realpagepanda\\Unit\\ArrayType\\ArrayOfInt',
            'GetRentMatrixResponse' => '\\mdlutz24\\realpagepanda\\Unit\\StructType\\GetRentMatrixResponse',
            'ArrayOfRentMatrix' => '\\mdlutz24\\realpagepanda\\Unit\\ArrayType\\ArrayOfRentMatrix',
            'RentMatrix' => '\\mdlutz24\\realpagepanda\\Unit\\StructType\\RentMatrix_1',
            'GetFloorPlanGroupsByProperty' => '\\mdlutz24\\realpagepanda\\Unit\\StructType\\GetFloorPlanGroupsByProperty',
            'GetFloorPlanGroupsByPropertyResponse' => '\\mdlutz24\\realpagepanda\\Unit\\StructType\\GetFloorPlanGroupsByPropertyResponse',
            'PickListObject' => '\\mdlutz24\\realpagepanda\\Unit\\StructType\\PickListObject',
            'ArrayOfPicklistItem' => '\\mdlutz24\\realpagepanda\\Unit\\ArrayType\\ArrayOfPicklistItem',
            'PicklistItem' => '\\mdlutz24\\realpagepanda\\Unit\\StructType\\PicklistItem',
            'WebServiceLogHeader' => '\\mdlutz24\\realpagepanda\\Unit\\StructType\\WebServiceLogHeader',
            'GetFloorPlanIDAndName' => '\\mdlutz24\\realpagepanda\\Unit\\StructType\\GetFloorPlanIDAndName',
            'GetFloorPlanIDAndNameResponse' => '\\mdlutz24\\realpagepanda\\Unit\\StructType\\GetFloorPlanIDAndNameResponse',
            'GetUnitsByProperty' => '\\mdlutz24\\realpagepanda\\Unit\\StructType\\GetUnitsByProperty',
            'GetUnitsByPropertyResponse' => '\\mdlutz24\\realpagepanda\\Unit\\StructType\\GetUnitsByPropertyResponse',
        );
    }
}
