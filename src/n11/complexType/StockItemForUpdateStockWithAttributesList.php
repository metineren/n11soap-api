<?php
namespace N11\complexType;

class StockItemForUpdateStockWithAttributesList extends ComplexType
{
	/**
	 * StockItemForUpdateStockWithAttributesList constructor.
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
	 * @param StockItemForUpdateStockWithAttributes $stockItem
	 *
	 * @return $this
	 */
	public function add(StockItemForUpdateStockWithAttributes $stockItem)
	{
		$stockItems = $this->offsetGet('stockItem');
		$stockItems[] = $stockItem;
		$this->offsetSet('stockItem', $stockItems);
		return $this;
	}
}