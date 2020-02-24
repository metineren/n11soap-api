<?php
namespace N11\complexType;

class StockItemForUpdateStockWithSellerStockCodeList extends ComplexType
{
	/**
	 * StockItemForUpdateStockWithSellerStockCodeList constructor.
	 *
	 * @param array $stockItem
	 *
	 * @throws \ReflectionException
	 */
	public function __construct(array $stockItem = array())
	{
		parent::__construct($stockItem);
	}

	/**
	 * @param StockItemForUpdateStockWithSellerStockCode $stockItem
	 *
	 * @return $this
	 */
	public function add(StockItemForUpdateStockWithSellerStockCode $stockItem)
	{
		$stockItems = $this->offsetSet('stockItem');
		$stockItems[] = $stockItem;
		$this->offsetSet('stockItem', $stockItems);
		return $this;
	}
}