<?php
namespace N11\complexType;

class StockItemForAddStockWithAttributes extends ComplexType
{
	/**
	 * StockItemForAddStockWithAttributes constructor.
	 *
	 * @param StockAttributeList $attributes
	 * @param int $quantityToIncrease
	 * @param int $version
	 *
	 * @throws \ReflectionException
	 */
	public function __construct(StockAttributeList $attributes, int $quantityToIncrease, int $version)
	{
		parent::__construct($attributes, $quantityToIncrease, $version);
	}
}