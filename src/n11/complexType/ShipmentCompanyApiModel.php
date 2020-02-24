<?php
namespace N11\complexType;

class ShipmentCompanyApiModel extends ComplexType
{
	/**
	 * ShipmentCompanyApiModel constructor.
	 *
	 * @param string $name
	 * @param string $shortName
	 *
	 * @throws \ReflectionException
	 */
	public function __construct(string $name, string $shortName)
	{
		parent::__construct($name, $shortName);
	}
}