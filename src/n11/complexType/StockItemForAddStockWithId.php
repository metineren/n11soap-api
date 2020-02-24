<?php
namespace N11\complexType;

class StockItemForAddStockWithId extends ComplexType
{
	/**
	 * StockItemForAddStockWithId constructor.
	 *
	 * @param int $id
	 * @param int $quantityToIncrease
	 * @param int $version
	 *
	 * @throws \ReflectionException
	 */
	public function __construct(int $id, int $quantityToIncrease, int $version)
	{
		parent::__construct($id, $quantityToIncrease, $version);
	}
}