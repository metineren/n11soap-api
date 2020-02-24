<?php
namespace N11\complexType;

class OrderItemDataListRequest extends ComplexType
{
	/**
	 * OrderItemDataListRequest constructor.
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
	 * @param OrderItemDataRequest $orderItem
	 *
	 * @return $this
	 */
	public function add(OrderItemDataRequest $orderItem)
	{
		$orderItems = $this->offsetGet('orderItem');
		$orderItems[] = $orderItem;
		$this->offsetSet('orderItem', $orderItems);
		return $this;
	}
}