<?php
namespace N11\complexType;

class ProductImageList extends ComplexType
{
	/**
	 * ProductImageList constructor.
	 *
	 * @param array $image
	 *
	 * @throws \ReflectionException
	 */
	public function __construct(array $image = array())
	{
		parent::__construct($image);
	}

	/**
	 * @param ProductImage $image
	 *
	 * @return $this
	 */
	public function add(ProductImage $image)
	{
		$images = $this->offsetGet('image');
		$images[] = $image;
		$this->offsetSet('image', $images);
		return $this;
	}
}