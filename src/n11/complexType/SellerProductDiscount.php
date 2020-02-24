<?php
namespace N11\complexType;

class SellerProductDiscount extends ComplexType
{
	/**
	 * SellerProductDiscount constructor.
	 *
	 * @param int $discountType
	 * @param float $discountValue
	 * @param string $discountStartDate
	 * @param string $discountEndDate
	 *
	 * @throws \ReflectionException
	 */
	public function __construct(int $discountType, float $discountValue, string $discountStartDate, string $discountEndDate)
	{
		parent::__construct($discountType, $discountValue, $discountStartDate, $discountEndDate);
	}
}