<?php
namespace N11\complexType;

class ProductWithIdAndStockAttributesForUpdate extends ComplexType
{
	/**
	 * ProductWithIdAndStockAttributesForUpdate constructor.
	 *
	 * @param int $id
	 * @param StockItemForUpdateStockWithAttributesList $stockItems
	 *
	 * @throws \ReflectionException
	 */
	public function __construct(int $id, StockItemForUpdateStockWithAttributesList $stockItems)
	{
		parent::__construct($id, $stockItems);
	}
}