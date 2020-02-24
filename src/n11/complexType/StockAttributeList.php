<?php
namespace N11\complexType;

class StockAttributeList extends ComplexType
{
	/**
	 * StockAttributeList constructor.
	 *
	 * @param array $attribute
	 *
	 * @throws \ReflectionException
	 */
	public function __construct(array $attribute = array())
	{
		parent::__construct($attribute);
	}

	/**
	 * @param StockAttribute $attribute
	 *
	 * @return $this
	 */
	public function add(StockAttribute $attribute)
	{
		$attributes = $this->offsetGet('attribute');
		$attributes[] = $attribute;
		$this->offsetSet('attribute', $attributes);
		return $this;
	}
}