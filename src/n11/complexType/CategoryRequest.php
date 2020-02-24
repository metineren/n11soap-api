<?php
namespace N11\complexType;

class CategoryRequest extends ComplexType
{
	/**
	 * CategoryRequest constructor.
	 *
	 * @param int $id
	 *
	 * @throws \ReflectionException
	 */
	public function __construct(int $id)
	{
		parent::__construct($id);
	}
}