<?php
namespace N11\complexType;

class ProductWithIdAndStockAttributes extends ComplexType
{
	/**
	 * ProductWithIdAndStockAttributes constructor.
	 *
	 * @param int $id
	 * @param array $stockItems
	 *
	 * @throws \ReflectionException
	 */
	public function __construct(int $id, array $stockItems = array())
	{
		parent::__construct($id, $stockItems);
	}

	/**
	 * @param StockItemForAddStockWithAttributesList $stockItem
	 *
	 * @return $this
	 */
	public function add(StockItemForAddStockWithAttributesList $stockItem)
	{
		$stockItems = $this->offsetGet('stockItems');
		$stockItems[] = $stockItem;
		$this->offsetSet('stockItems', $stockItems);
		return $this;
	}
}