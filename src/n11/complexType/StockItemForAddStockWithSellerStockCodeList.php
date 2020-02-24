<?php
namespace N11\complexType;

class StockItemForAddStockWithSellerStockCodeList extends ComplexType
{
	/**
	 * StockItemForAddStockWithSellerStockCodeList constructor.
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
	 * @param StockItemForAddStockWithSellerStockCode $stockItem
	 *
	 * @return $this
	 */
	public function add(StockItemForAddStockWithSellerStockCode $stockItem)
	{
		$stockItems = $this->offsetGet('stockItem');
		$stockItems[] = $stockItem;
		$this->offsetSet('stockItem', $stockItems);
		return $this;
	}
}