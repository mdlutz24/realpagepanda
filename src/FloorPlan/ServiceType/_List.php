<?php

namespace mdlutz24\realpagepanda\FloorPlan\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for List ServiceType
 * @subpackage Services
 */
class _List extends AbstractSoapClientBase
{
    /**
     * Sets the UserAuthInfo SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \mdlutz24\realpagepanda\FloorPlan\StructType\UserAuthInfo $userAuthInfo
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderUserAuthInfo(\mdlutz24\realpagepanda\FloorPlan\StructType\UserAuthInfo $userAuthInfo, $nameSpace = 'http://realpage.com/webservices', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'UserAuthInfo', $userAuthInfo, $mustUnderstand, $actor);
    }
    /**
     * Sets the CallBackAuthInfo SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \mdlutz24\realpagepanda\FloorPlan\StructType\CallBackAuthInfo $callBackAuthInfo
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderCallBackAuthInfo(\mdlutz24\realpagepanda\FloorPlan\StructType\CallBackAuthInfo $callBackAuthInfo, $nameSpace = 'http://realpage.com/webservices', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'CallBackAuthInfo', $callBackAuthInfo, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named List
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserAuthInfo, CallBackAuthInfo
     * - SOAPHeaderNamespaces: http://realpage.com/webservices, http://realpage.com/webservices
     * - SOAPHeaderTypes: \mdlutz24\realpagepanda\FloorPlan\StructType\UserAuthInfo, \mdlutz24\realpagepanda\FloorPlan\StructType\CallBackAuthInfo
     * - SOAPHeaders: required, required
     * - documentation: list FloorPlan information, including pricing
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \mdlutz24\realpagepanda\FloorPlan\StructType\_List $parameters
     * @return \mdlutz24\realpagepanda\FloorPlan\StructType\ListResponse|bool
     */
    public function _List(\mdlutz24\realpagepanda\FloorPlan\StructType\_List $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->List($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \mdlutz24\realpagepanda\FloorPlan\StructType\ListResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
