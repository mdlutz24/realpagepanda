<?php

namespace mdlutz24\realpagepanda\PickList\ServiceType;

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
     * @param \mdlutz24\realpagepanda\PickList\StructType\UserAuthInfo $userAuthInfo
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderUserAuthInfo(\mdlutz24\realpagepanda\PickList\StructType\UserAuthInfo $userAuthInfo, $nameSpace = 'http://realpage.com/webservices', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'UserAuthInfo', $userAuthInfo, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named GetPickList
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserAuthInfo
     * - SOAPHeaderNamespaces: http://realpage.com/webservices
     * - SOAPHeaderTypes: \mdlutz24\realpagepanda\PickList\StructType\UserAuthInfo
     * - SOAPHeaders: required
     * - documentation: Retrieve a single Pick List, of the specified List Type.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \mdlutz24\realpagepanda\PickList\StructType\GetPickList $parameters
     * @return \mdlutz24\realpagepanda\PickList\StructType\GetPickListResponse|bool
     */
    public function GetPickList(\mdlutz24\realpagepanda\PickList\StructType\GetPickList $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetPickList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetPickLists
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserAuthInfo
     * - SOAPHeaderNamespaces: http://realpage.com/webservices
     * - SOAPHeaderTypes: \mdlutz24\realpagepanda\PickList\StructType\UserAuthInfo
     * - SOAPHeaders: required
     * - documentation: Obtain a set of one or more Pick Lists, of the specified List Types.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \mdlutz24\realpagepanda\PickList\StructType\GetPickLists $parameters
     * @return \mdlutz24\realpagepanda\PickList\StructType\GetPickListsResponse|bool
     */
    public function GetPickLists(\mdlutz24\realpagepanda\PickList\StructType\GetPickLists $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetPickLists($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \mdlutz24\realpagepanda\PickList\StructType\GetPickListResponse|\mdlutz24\realpagepanda\PickList\StructType\GetPickListsResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
