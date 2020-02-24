<?php
namespace N11\complexType;

class StockItemForUpdateStockWithAttributes extends ComplexType
{
	/**
	 * StockItemForUpdateStockWithAttributes constructor.
	 *
	 * @param StockAttributeList $attributes
	 * @param int $quantity
	 * @param int $version
	 *
	 * @throws \ReflectionException
	 */
	public function __construct(StockAttributeList $attributes, int $quantity, int $version)
	{
		parent::__construct($attributes, $quantity, $version);
	}
}