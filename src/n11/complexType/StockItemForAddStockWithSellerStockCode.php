<?php
namespace N11\complexType;

class StockItemForAddStockWithSellerStockCode extends ComplexType
{
	/**
	 * StockItemForAddStockWithSellerStockCode constructor.
	 *
	 * @param string $sellerStockCode
	 * @param int $quantityToIncrease
	 * @param int $version
	 *
	 * @throws \ReflectionException
	 */
	public function __construct(string $sellerStockCode, int $quantityToIncrease, int $version)
	{
		parent::__construct($sellerStockCode, $quantityToIncrease, $version);
	}
}