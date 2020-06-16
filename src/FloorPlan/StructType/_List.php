<?php

namespace mdlutz24\realpagepanda\FloorPlan\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for List StructType
 * @subpackage Structs
 */
class _List extends AbstractStructBase
{
    /**
     * The listCriteria
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \mdlutz24\realpagepanda\FloorPlan\ArrayType\ArrayOfListCriterion
     */
    public $listCriteria;
    /**
     * Constructor method for List
     * @uses _List::setListCriteria()
     * @param \mdlutz24\realpagepanda\FloorPlan\ArrayType\ArrayOfListCriterion $listCriteria
     */
    public function __construct(\mdlutz24\realpagepanda\FloorPlan\ArrayType\ArrayOfListCriterion $listCriteria = null)
    {
        $this
            ->setListCriteria($listCriteria);
    }
    /**
     * Get listCriteria value
     * @return \mdlutz24\realpagepanda\FloorPlan\ArrayType\ArrayOfListCriterion|null
     */
    public function getListCriteria()
    {
        return $this->listCriteria;
    }
    /**
     * Set listCriteria value
     * @param \mdlutz24\realpagepanda\FloorPlan\ArrayType\ArrayOfListCriterion $listCriteria
     * @return \mdlutz24\realpagepanda\FloorPlan\StructType\_List
     */
    public function setListCriteria(\mdlutz24\realpagepanda\FloorPlan\ArrayType\ArrayOfListCriterion $listCriteria = null)
    {
        $this->listCriteria = $listCriteria;
        return $this;
    }
}
