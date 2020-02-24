<?php
namespace N11\complexType;

class ProductIdList extends ComplexType
{
	/**
	 * ProductIdList constructor.
	 *
	 * @param array $productIdList
	 *
	 * @throws \ReflectionException
	 */
	public function __construct(array $productIdList = array())
	{
		parent::__construct($productIdList);
	}

	/**
	 * @param int $productIdList
	 *
	 * @return $this
	 */
	public function add(int $productIdList)
	{
		$productIdLists = $this->offsetGet('productIdList');
		$productIdLists[] = $productIdList;
		$this->offsetSet('productIdList', $productIdLists);
		return $this;
	}
}