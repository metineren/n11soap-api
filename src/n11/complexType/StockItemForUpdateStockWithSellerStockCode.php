<?php
namespace N11\complexType;

class StockItemForUpdateStockWithSellerStockCode extends ComplexType
{
	/**
	 * StockItemForUpdateStockWithSellerStockCode constructor.
	 *
	 * @param string $sellerStockCode
	 * @param int $quantity
	 * @param int $version
	 *
	 * @throws \ReflectionException
	 */
	public function __construct(string $sellerStockCode, int $quantity, int $version)
	{
		parent::__construct($sellerStockCode, $quantity, $version);
	}
}