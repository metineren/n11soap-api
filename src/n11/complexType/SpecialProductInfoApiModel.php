<?php
namespace N11\complexType;

class SpecialProductInfoApiModel extends ComplexType
{
	/**
	 * SpecialProductInfoApiModel constructor.
	 *
	 * @param string $key
	 * @param string $value
	 *
	 * @throws \ReflectionException
	 */
	public function __construct(string $key, string $value)
	{
		parent::__construct($key, $value);
	}
}