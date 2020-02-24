<?php
namespace N11\complexType;

class OrderItemListShipmentRequest extends ComplexType
{
	/**
	 * OrderItemListShipmentRequest constructor.
	 *
	 * @param array $orderItem
	 *
	 * @throws \ReflectionException
	 */
	public function __construct(array $orderItem = array())
	{
		parent::__construct($orderItem);
	}

	/**
	 * @param OrderItemShipmentRequest $orderItem
	 *
	 * @return $this
	 */
	public function add(OrderItemShipmentRequest $orderItem)
	{
		$orderItems = $this->offsetGet('orderItem');
		$orderItems[] = $orderItem;
		$this->offsetSet('orderItem', $orderItem);
		return $this;
	}
}