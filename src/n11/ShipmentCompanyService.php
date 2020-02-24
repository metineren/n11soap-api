<?php
namespace N11;

class ShipmentCompanyService extends SoapClient
{
	/**
	 * @return object stdClass
	 * @throws SoapClientException
	 */
	public function GetShipmentCompanies()
	{
		return parent::__call(__FUNCTION__, array());
	}
}