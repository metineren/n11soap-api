<?php
namespace N11\complexType;

class ProductSkuBasicRequestItemList extends ComplexType
{
	/**
	 * ProductSkuBasicRequestItemList constructor.
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
	 * @param ProductSkuBasicRequest $stockItem
	 *
	 * @return $this
	 */
	public function add(ProductSkuBasicRequest $stockItem)
	{
		$stockItems = $this->offsetGet('stockItem');
		$stockItems[] = $stockItem;
		$this->offsetSet('stockItem', $stockItems);
		return $this;
	}
}