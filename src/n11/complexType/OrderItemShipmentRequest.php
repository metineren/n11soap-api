<?php
namespace N11\complexType;

class OrderItemShipmentRequest extends ComplexType
{
	/**
	 * OrderItemShipmentRequest constructor.
	 *
	 * @param int $id
	 * @param MakeShipmentInfoRequest $shipmentInfo
	 *
	 * @throws \ReflectionException
	 */
	public function __construct(int $id, MakeShipmentInfoRequest $shipmentInfo)
	{
		parent::__construct($id, $shipmentInfo);
	}
}