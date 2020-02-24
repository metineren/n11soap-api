<?php
namespace N11\complexType;

class MakeShipmentInfoRequest extends ComplexType
{
	/**
	 * MakeShipmentInfoRequest constructor.
	 *
	 * @param ShipmentCompanyRequest $shipmentCompany
	 * @param string $campaignNumber
	 * @param string $trackingNumber
	 * @param int $shipmentMethod
	 *
	 * @throws \ReflectionException
	 */
	public function __construct(
		ShipmentCompanyRequest $shipmentCompany,
		string $campaignNumber,
		string $trackingNumber,
		int $shipmentMethod
	)
	{
		parent::__construct($shipmentCompany, $campaignNumber, $trackingNumber, $shipmentMethod);
	}
}