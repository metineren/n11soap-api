<?php
namespace N11\complexType;

class ShipmentSaveAddress extends ComplexType
{
	/**
	 * ShipmentSaveAddress constructor.
	 *
	 * @param string $title
	 * @param string $address
	 * @param DistrictApiModel $district
	 * @param CityApiModel $city
	 * @param string $postalCode
	 *
	 * @throws \ReflectionException
	 */
	public function __construct(string $title, string $address, DistrictApiModel $district, CityApiModel $city, string $postalCode)
	{
		parent::__construct($title, $address, $district, $city, $postalCode);
	}
}