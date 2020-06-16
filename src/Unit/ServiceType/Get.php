<?php

namespace mdlutz24\realpagepanda\Unit\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Sets the UserAuthInfo SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \mdlutz24\realpagepanda\Unit\StructType\UserAuthInfo $userAuthInfo
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderUserAuthInfo(\mdlutz24\realpagepanda\Unit\StructType\UserAuthInfo $userAuthInfo, $nameSpace = 'http://realpage.com/webservices', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'UserAuthInfo', $userAuthInfo, $mustUnderstand, $actor);
    }
    /**
     * Sets the CallBackAuthInfo SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \mdlutz24\realpagepanda\Unit\StructType\CallBackAuthInfo $callBackAuthInfo
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderCallBackAuthInfo(\mdlutz24\realpagepanda\Unit\StructType\CallBackAuthInfo $callBackAuthInfo, $nameSpace = 'http://realpage.com/webservices', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'CallBackAuthInfo', $callBackAuthInfo, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named GetRentMatrix
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserAuthInfo, CallBackAuthInfo
     * - SOAPHeaderNamespaces: http://realpage.com/webservices, http://realpage.com/webservices
     * - SOAPHeaderTypes: \mdlutz24\realpagepanda\Unit\StructType\UserAuthInfo, \mdlutz24\realpagepanda\Unit\StructType\CallBackAuthInfo
     * - SOAPHeaders: required, required
     * - documentation: obtain YSPO rent matrix data for any list of one or more apartments
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \mdlutz24\realpagepanda\Unit\StructType\GetRentMatrix $parameters
     * @return \mdlutz24\realpagepanda\Unit\StructType\GetRentMatrixResponse|bool
     */
    public function GetRentMatrix(\mdlutz24\realpagepanda\Unit\StructType\GetRentMatrix $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetRentMatrix($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetFloorPlanGroupsByProperty
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserAuthInfo, CallBackAuthInfo
     * - SOAPHeaderNamespaces: http://realpage.com/webservices, http://realpage.com/webservices
     * - SOAPHeaderTypes: \mdlutz24\realpagepanda\Unit\StructType\UserAuthInfo, \mdlutz24\realpagepanda\Unit\StructType\CallBackAuthInfo
     * - SOAPHeaders: required, required
     * - documentation: Get floor plan groups by property
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \mdlutz24\realpagepanda\Unit\StructType\GetFloorPlanGroupsByProperty $parameters
     * @return \mdlutz24\realpagepanda\Unit\StructType\GetFloorPlanGroupsByPropertyResponse|bool
     */
    public function GetFloorPlanGroupsByProperty(\mdlutz24\realpagepanda\Unit\StructType\GetFloorPlanGroupsByProperty $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetFloorPlanGroupsByProperty($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetFloorPlanIDAndName
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserAuthInfo, CallBackAuthInfo
     * - SOAPHeaderNamespaces: http://realpage.com/webservices, http://realpage.com/webservices
     * - SOAPHeaderTypes: \mdlutz24\realpagepanda\Unit\StructType\UserAuthInfo, \mdlutz24\realpagepanda\Unit\StructType\CallBackAuthInfo
     * - SOAPHeaders: required, required
     * - documentation: Get floor plan ID and name
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \mdlutz24\realpagepanda\Unit\StructType\GetFloorPlanIDAndName $parameters
     * @return \mdlutz24\realpagepanda\Unit\StructType\GetFloorPlanIDAndNameResponse|bool
     */
    public function GetFloorPlanIDAndName(\mdlutz24\realpagepanda\Unit\StructType\GetFloorPlanIDAndName $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetFloorPlanIDAndName($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetUnitsByProperty
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserAuthInfo, CallBackAuthInfo
     * - SOAPHeaderNamespaces: http://realpage.com/webservices, http://realpage.com/webservices
     * - SOAPHeaderTypes: \mdlutz24\realpagepanda\Unit\StructType\UserAuthInfo, \mdlutz24\realpagepanda\Unit\StructType\CallBackAuthInfo
     * - SOAPHeaders: required, required
     * - documentation: Get units by property.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \mdlutz24\realpagepanda\Unit\StructType\GetUnitsByProperty $parameters
     * @return \mdlutz24\realpagepanda\Unit\StructType\GetUnitsByPropertyResponse|bool
     */
    public function GetUnitsByProperty(\mdlutz24\realpagepanda\Unit\StructType\GetUnitsByProperty $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetUnitsByProperty($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \mdlutz24\realpagepanda\Unit\StructType\GetFloorPlanGroupsByPropertyResponse|\mdlutz24\realpagepanda\Unit\StructType\GetFloorPlanIDAndNameResponse|\mdlutz24\realpagepanda\Unit\StructType\GetRentMatrixResponse|\mdlutz24\realpagepanda\Unit\StructType\GetUnitsByPropertyResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
