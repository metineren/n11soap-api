<?php
namespace N11\complexType;

class OrderSearchPeriod extends ComplexType
{
	/**
	 * OrderSearchPeriod constructor.
	 *
	 * @param string|null $startDate
	 * @param string|null $endDate
	 *
	 * @throws \ReflectionException
	 */
	public function __construct( string $startDate = null, string $endDate = null )
	{
		return parent::__construct($startDate, $endDate);
	}
}