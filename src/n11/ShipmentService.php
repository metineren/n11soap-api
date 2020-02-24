<?php
namespace N11;

use N11\complexType\ShipmentApiModel;

class ShipmentService extends SoapClient
{
	/**
	 * @param ShipmentApiModel $shipment
	 *
	 * @return object stdClass
	 * @throws SoapClientException
	 */
	public function CreateOrUpdateShipmentTemplate(ShipmentApiModel $shipment)
	{
		return parent::__call(__FUNCTION__, array(array('shipment' => $shipment)));
	}

	/**
	 * @param null $name
	 *
	 * @return object stdClass
	 * @throws SoapClientException
	 */
	public function GetShipmentTemplate($name = null)
	{
		return parent::__call(__FUNCTION__, array(array('name' => $name)));
	}

	/**
	 * @return object stdClass
	 * @throws SoapClientException
	 */
	public function GetShipmentTemplateList()
	{
		return parent::__call(__FUNCTION__, array());
	}
}