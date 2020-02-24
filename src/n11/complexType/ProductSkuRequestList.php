<?php
namespace N11\complexType;

class ProductSkuRequestList extends ComplexType
{
	/**
	 * ProductSkuRequestList constructor.
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
	 * @param ProductSkuRequest $stockItem
	 *
	 * @return $this
	 */
	public function add(ProductSkuRequest $stockItem)
	{
		$stockItems = $this->offsetGet('stockItem');
		$stockItems[] = $stockItem;
		$this->offsetSet('stockItem', $stockItems);
		return $this;
	}
}