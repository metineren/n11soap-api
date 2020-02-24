<?php
namespace N11\complexType;

class DistrictApiModel extends ComplexType
{
	/**
	 * DistrictApiModel constructor.
	 *
	 * @param string $name
	 * @param int $id
	 *
	 * @throws \ReflectionException
	 */
	public function __construct(string $name, int $id)
	{
		parent::__construct($name, $id);
	}
}