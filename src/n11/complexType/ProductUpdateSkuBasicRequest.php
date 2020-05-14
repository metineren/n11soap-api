<?php
namespace N11\complexType;

class ProductUpdateSkuBasicRequest extends ComplexType
{
	/**
	 * ProductUpdateSkuBasicRequest constructor.
	 *
	 * @param string $sellerStockCode
	 * @param int $id
	 * @param float $optionPrice
	 * @param int $quantity
	 *
	 * @throws |ReflectionException
	 */
	public function __construct(string $sellerStockCode, int $id, float $optionPrice, int $quantity)
	{
		parent::__construct($sellerStockCode, $id, $optionPrice, $quantity);
	}
}