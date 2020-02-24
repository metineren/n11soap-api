<?php
namespace N11\complexType;

class StockItemForAddStockWithAttributesList extends ComplexType
{
	/**
	 * StockItemForAddStockWithAttributesList constructor.
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
	 * @param StockItemForAddStockWithAttributes $stockItem
	 *
	 * @return $this
	 */
	public function add(StockItemForAddStockWithAttributes $stockItem)
	{
		$stockItems = $this->offsetGet('stockItem');
		$stockItems[] = $stockItem;
		$this->offsetSet('stockItem', $stockItems);
		return $this;
	}
}