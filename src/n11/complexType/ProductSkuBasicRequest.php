<?php
namespace N11\complexType;

class ProductSkuBasicRequest extends ComplexType
{
	/**
	 * ProductSkuBasicRequest constructor.
	 *
	 * @param string $sellerStockCode
	 * @param float $optionPrice
	 *
	 * @throws \ReflectionException
	 */
	public function __construct(string $sellerStockCode, float $optionPrice)
	{
		parent::__construct($sellerStockCode, $optionPrice);
	}
}