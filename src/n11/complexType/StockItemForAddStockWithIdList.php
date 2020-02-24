<?php
namespace N11\complexType;

class StockItemForAddStockWithIdList extends ComplexType
{
	/**
	 * StockItemForAddStockWithIdList constructor.
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
	 * @param StockItemForAddStockWithId $stockItem
	 *
	 * @return $this
	 */
	public function add(StockItemForAddStockWithId $stockItem)
	{
		$stockItems = $this->offsetGet('stockItem');
		$stockItems[] = $stockItem;
		$this->offsetSet('stockItem', $stockItems);
		return $this;
	}
}