<?php
namespace N11\complexType;

class StockItemForUpdateStockWithIdList extends ComplexType
{
	/**
	 * StockItemForUpdateStockWithIdList constructor.
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
	 * @param StockItemForUpdateStockWithId $stockItem
	 *
	 * @return $this
	 */
	public function add(StockItemForUpdateStockWithId $stockItem)
	{
		$stockItems = $this->offsetGet('stockItem');
		$stockItems[] = $stockItem;
		$this->offsetSet('stockItem', $stockItems);
		return $this;
	}
}