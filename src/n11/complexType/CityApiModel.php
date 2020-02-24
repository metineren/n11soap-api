<?php
namespace N11\complexType;

class CityApiModel extends ComplexType
{
	/**
	 * CityApiModel constructor.
	 *
	 * @param string $name
	 * @param int $code
	 *
	 * @throws \ReflectionException
	 */
	public function __construct(string $name, int $code)
	{
		parent::__construct($name, $code);
	}
}