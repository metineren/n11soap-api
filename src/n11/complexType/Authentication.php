<?php
namespace N11\complexType;

class Authentication extends ComplexType
{
	/**
	 * Authentication constructor.
	 *
	 * @param string $appKey
	 * @param string $appSecret
	 *
	 * @throws |ReflectionException
	 */
	public function __construct(
		string $appKey,
		string $appSecret
	)
	{
		return parent::__construct($appKey, $appSecret);
	}
}