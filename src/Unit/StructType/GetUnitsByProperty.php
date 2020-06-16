<?php

namespace mdlutz24\realpagepanda\Unit\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUnitsByProperty StructType
 * @subpackage Structs
 */
class GetUnitsByProperty extends AbstractStructBase
{
    /**
     * The listCriteria
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \mdlutz24\realpagepanda\Unit\ArrayType\ArrayOfListCriterion
     */
    public $listCriteria;
    /**
     * Constructor method for GetUnitsByProperty
     * @uses GetUnitsByProperty::setListCriteria()
     * @param \mdlutz24\realpagepanda\Unit\ArrayType\ArrayOfListCriterion $listCriteria
     */
    public function __construct(\mdlutz24\realpagepanda\Unit\ArrayType\ArrayOfListCriterion $listCriteria = null)
    {
        $this
            ->setListCriteria($listCriteria);
    }
    /**
     * Get listCriteria value
     * @return \mdlutz24\realpagepanda\Unit\ArrayType\ArrayOfListCriterion|null
     */
    public function getListCriteria()
    {
        return $this->listCriteria;
    }
    /**
     * Set listCriteria value
     * @param \mdlutz24\realpagepanda\Unit\ArrayType\ArrayOfListCriterion $listCriteria
     * @return \mdlutz24\realpagepanda\Unit\StructType\GetUnitsByProperty
     */
    public function setListCriteria(\mdlutz24\realpagepanda\Unit\ArrayType\ArrayOfListCriterion $listCriteria = null)
    {
        $this->listCriteria = $listCriteria;
        return $this;
    }
}
