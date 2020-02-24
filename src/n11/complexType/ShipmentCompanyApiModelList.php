<?php
namespace N11\complexType;

class ShipmentCompanyApiModelList extends ComplexType
{
	/**
	 * ShipmentCompanyApiModelList constructor.
	 *
	 * @param array $shipmentCompany
	 *
	 * @throws \ReflectionException
	 */
	public function __construct(array $shipmentCompany = array())
	{
		parent::__construct($shipmentCompany);
	}

	/**
	 * @param ShipmentCompanyApiModel $shipmentCompany
	 *
	 * @return $this
	 */
	public function add(ShipmentCompanyApiModel $shipmentCompany)
	{
		$shipmentCompanies = $this->offsetGet('shipmentCompany');
		$shipmentCompanies[] = $shipmentCompany;
		$this->offsetSet('shipmentCompany', $shipmentCompanies);
		return $this;
	}
}