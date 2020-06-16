<?php

namespace mdlutz24\realpagepanda\Unit\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Concessions StructType
 * @subpackage Structs
 */
class Concessions extends AbstractStructBase
{
    /**
     * The Total
     * Meta information extracted from the WSDL
     * - form: unqualified
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Total;
    /**
     * The MonthlyFixed
     * Meta information extracted from the WSDL
     * - form: unqualified
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MonthlyFixed;
    /**
     * The MonthlyPercent
     * Meta information extracted from the WSDL
     * - form: unqualified
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MonthlyPercent;
    /**
     * The Months
     * Meta information extracted from the WSDL
     * - form: unqualified
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Months;
    /**
     * The OneTimeFixed
     * Meta information extracted from the WSDL
     * - form: unqualified
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $OneTimeFixed;
    /**
     * Constructor method for Concessions
     * @uses Concessions::setTotal()
     * @uses Concessions::setMonthlyFixed()
     * @uses Concessions::setMonthlyPercent()
     * @uses Concessions::setMonths()
     * @uses Concessions::setOneTimeFixed()
     * @param string $total
     * @param string $monthlyFixed
     * @param string $monthlyPercent
     * @param string $months
     * @param string $oneTimeFixed
     */
    public function __construct($total = null, $monthlyFixed = null, $monthlyPercent = null, $months = null, $oneTimeFixed = null)
    {
        $this
            ->setTotal($total)
            ->setMonthlyFixed($monthlyFixed)
            ->setMonthlyPercent($monthlyPercent)
            ->setMonths($months)
            ->setOneTimeFixed($oneTimeFixed);
    }
    /**
     * Get Total value
     * @return string|null
     */
    public function getTotal()
    {
        return $this->Total;
    }
    /**
     * Set Total value
     * @param string $total
     * @return \mdlutz24\realpagepanda\Unit\StructType\Concessions
     */
    public function setTotal($total = null)
    {
        // validation for constraint: string
        if (!is_null($total) && !is_string($total)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($total, true), gettype($total)), __LINE__);
        }
        $this->Total = $total;
        return $this;
    }
    /**
     * Get MonthlyFixed value
     * @return string|null
     */
    public function getMonthlyFixed()
    {
        return $this->MonthlyFixed;
    }
    /**
     * Set MonthlyFixed value
     * @param string $monthlyFixed
     * @return \mdlutz24\realpagepanda\Unit\StructType\Concessions
     */
    public function setMonthlyFixed($monthlyFixed = null)
    {
        // validation for constraint: string
        if (!is_null($monthlyFixed) && !is_string($monthlyFixed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($monthlyFixed, true), gettype($monthlyFixed)), __LINE__);
        }
        $this->MonthlyFixed = $monthlyFixed;
        return $this;
    }
    /**
     * Get MonthlyPercent value
     * @return string|null
     */
    public function getMonthlyPercent()
    {
        return $this->MonthlyPercent;
    }
    /**
     * Set MonthlyPercent value
     * @param string $monthlyPercent
     * @return \mdlutz24\realpagepanda\Unit\StructType\Concessions
     */
    public function setMonthlyPercent($monthlyPercent = null)
    {
        // validation for constraint: string
        if (!is_null($monthlyPercent) && !is_string($monthlyPercent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($monthlyPercent, true), gettype($monthlyPercent)), __LINE__);
        }
        $this->MonthlyPercent = $monthlyPercent;
        return $this;
    }
    /**
     * Get Months value
     * @return string|null
     */
    public function getMonths()
    {
        return $this->Months;
    }
    /**
     * Set Months value
     * @param string $months
     * @return \mdlutz24\realpagepanda\Unit\StructType\Concessions
     */
    public function setMonths($months = null)
    {
        // validation for constraint: string
        if (!is_null($months) && !is_string($months)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($months, true), gettype($months)), __LINE__);
        }
        $this->Months = $months;
        return $this;
    }
    /**
     * Get OneTimeFixed value
     * @return string|null
     */
    public function getOneTimeFixed()
    {
        return $this->OneTimeFixed;
    }
    /**
     * Set OneTimeFixed value
     * @param string $oneTimeFixed
     * @return \mdlutz24\realpagepanda\Unit\StructType\Concessions
     */
    public function setOneTimeFixed($oneTimeFixed = null)
    {
        // validation for constraint: string
        if (!is_null($oneTimeFixed) && !is_string($oneTimeFixed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oneTimeFixed, true), gettype($oneTimeFixed)), __LINE__);
        }
        $this->OneTimeFixed = $oneTimeFixed;
        return $this;
    }
}
