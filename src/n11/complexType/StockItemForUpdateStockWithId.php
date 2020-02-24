<?php
namespace N11\complexType;

class StockItemForUpdateStockWithId extends ComplexType
{
	/**
	 * StockItemForUpdateStockWithId constructor.
	 *
	 * @param int $id
	 * @param int $quantity
	 * @param int $version
	 * @param bool|null $delist
	 *
	 * @throws \ReflectionException
	 */
	public function __construct(int $id, int $quantity, int $version, bool $delist = null)
	{
		parent::__construct($id, $quantity, $version, $delist);
	}
}