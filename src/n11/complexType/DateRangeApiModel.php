<?php
namespace N11\complexType;

class DateRangeApiModel extends ComplexType
{
	/**
	 * DateRangeApiModel constructor.
	 *
	 * @param string $startDate
	 * @param string $endDate
	 *
	 * @throws |ReflectionException
	 */
	public function __construct(string $startDate, string $endDate)
	{
		parent::__construct($startDate, $endDate);
	}
}
