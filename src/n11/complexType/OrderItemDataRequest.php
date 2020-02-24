<?php
namespace N11\complexType;

class OrderItemDataRequest extends ComplexType
{
	/**
	 * OrderItemDataRequest constructor.
	 *
	 * @param int $id
	 *
	 * @throws \ReflectionException
	 */
	public function __construct(int $id)
	{
		return parent::__construct($id);
	}
}