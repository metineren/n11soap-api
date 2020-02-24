<?php
namespace N11\complexType;

class ProductDiscountRequest extends ComplexType
{
	/**
	 * ProductDiscountRequest constructor.
	 *
	 * @param string $startDate
	 * @param string $endDate
	 * @param string $type
	 * @param string $value
	 *
	 * @throws \ReflectionException
	 */
	public function __construct(string $startDate, string $endDate, string $type, string $value)
	{
		parent::__construct($startDate, $endDate, $type, $value);
	}
}