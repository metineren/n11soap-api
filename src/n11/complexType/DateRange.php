<?php
namespace N11\complexType;

class DateRange extends ComplexType
{
	/**
	 * DateRange constructor.
	 *
	 * @param string $startDate
	 * @param string $endDate
	 *
	 * @throws \ReflectionException
	 */
	public function __construct(string $startDate, string $endDate)
	{
		parent::__construct($startDate, $endDate);
	}
}