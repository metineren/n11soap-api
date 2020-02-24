<?php
namespace N11\complexType;

class OrderDataRequest extends ComplexType
{
	/**
	 * OrderDataRequest constructor.
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