<?php
namespace N11\complexType;

class ProductAttributeRequestList extends ComplexType
{
	/**
	 * ProductAttributeRequestList constructor.
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
	 * @param ProductAttributeRequest $attribute
	 *
	 * @return $this
	 */
	public function add(ProductAttributeRequest $attribute)
	{
		$attributes = $this->offsetGet('attribute');
		$attributes[] = $attribute;
		$this->offsetSet('attribute', $attributes);
		return $this;
	}
}