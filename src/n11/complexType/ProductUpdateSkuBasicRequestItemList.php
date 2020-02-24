<?php
namespace N11\complexType;

class ProductUpdateSkuBasicRequestItemList extends ComplexType
{
	/**
	 * ProductUpdateSkuBasicRequestItemList constructor.
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
	 * @param ProductUpdateSkuBasicRequest $stockItem
	 *
	 * @return $this
	 */
	public function add(ProductUpdateSkuBasicRequest $stockItem)
	{
		$stockItems = $this->offsetGet('stockItem');
		$stockItems[] = $stockItem;
		$this->offsetSet('stockItem', $stockItems);
		return $this;
	}
}