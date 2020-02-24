<?php
namespace N11\complexType;

class ShipmentCompanyRequest extends ComplexType
{
	/**
	 * ShipmentCompanyRequest constructor.
	 *
	 * @param int $id
	 *
	 * @throws \ReflectionException
	 */
	public function __construct(int $id)
	{
		parent::__construct($id);
	}
}