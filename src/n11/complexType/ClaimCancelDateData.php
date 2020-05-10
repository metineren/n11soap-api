<?php
namespace N11\complexType;

class ClaimCancelDateData extends ComplexType
{
	/**
	 * ClaimCancelDateData constructor.
	 *
	 * @param string $searchDateType | Available Values; [REQUESTED, ACCEPTED, DENIED]
	 * @param DateRangeApiModel $period
	 *
	 * @throws |ReflectionException
	 */
	public function __construct(string $searchDateType = null, DateRangeApiModel $period)
	{
		return parent::__construct($searchDateType, $period);
	}
}