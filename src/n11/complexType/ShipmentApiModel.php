<?php
namespace N11\complexType;

class ShipmentApiModel extends ComplexType
{
	/**
	 * ShipmentApiModel constructor.
	 *
	 * @param string $templateName
	 * @param string $installmentInfo
	 * @param string $exchangeInfo
	 * @param string $shippingInfo
	 * @param bool $specialDelivery
	 * @param string $deliveryFeeType
	 * @param bool $combinedShipmentAllowed
	 * @param string $shipmentMethod
	 * @param ShipmentSaveAddress $warehouseAddress
	 * @param ShipmentSaveAddress $exchangeAddress
	 * @param ShipmentCompanyApiModelList $shipmentCompanies
	 * @param CityApiModelList|null $deliverableCities
	 * @param ShipmentCompanyApiModel $claimShipmentCompany
	 * @param string|null $cargoAccountNo
	 * @param bool $useDmallCargo
	 */
	public function __construct(
		string $templateName,
		string $installmentInfo,
		string $exchangeInfo,
		string $shippingInfo,
		bool $specialDelivery,
		string $deliveryFeeType,
		bool $combinedShipmentAllowed,
		string $shipmentMethod,
		ShipmentSaveAddress $warehouseAddress,
		ShipmentSaveAddress $exchangeAddress,
		ShipmentCompanyApiModelList $shipmentCompanies,
		CityApiModelList $deliverableCities = null,
		ShipmentCompanyApiModel $claimShipmentCompany,
		string $cargoAccountNo = null,
		bool $useDmallCargo
	)
	{
		parent::__costruct(
			$templateName,
			$installmentInfo,
			$exchangeInfo,
			$shippingInfo,
			$specialDelivery,
			$deliveryFeeType,
			$combinedShipmentAllowed,
			$shipmentMethod,
			$warehouseAddress,
			$exchangeAddress,
			$shipmentCompanies,
			$deliverableCities,
			$claimShipmentCompany,
			$cargoAccountNo,
			$useDmallCargo
		);
	}
}