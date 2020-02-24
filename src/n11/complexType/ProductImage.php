<?php
namespace N11\complexType;

class ProductImage extends ComplexType
{
	/**
	 * ProductImage constructor.
	 *
	 * @param string $url
	 * @param int $order
	 *
	 * @throws \ReflectionException
	 */
	public function __construct(string $url, int $order)
	{
		parent::__construct($url, $order);
	}
}