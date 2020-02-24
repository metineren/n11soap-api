<?php
namespace N11\complexType;

class ProductAttributeRequest extends ComplexType
{
	/**
	 * ProductAttributeRequest constructor.
	 *
	 * @param string $name
	 * @param string $value
	 *
	 * @throws \ReflectionException
	 */
	public function __construct( string $name, string $value )
	{
		parent::__construct( $name, $value );
	}
}