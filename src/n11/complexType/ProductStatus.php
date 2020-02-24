<?php
namespace N11\complexType;


use N11\SoapClientException;

class ProductStatus implements Arrayable
{
	/**
	 * @var array
	 */
	private $available_statuses = [
		'Active',
		'Suspended',
		'Prohibited'
	];

	/**
	 * @var
	 */
	private $value;

	/**
	 * ProductStatus constructor.
	 *
	 * @param $value
	 *
	 * @throws SoapClientException
	 */
	public function __construct($value)
	{
		if (!in_array($value, $this->available_statuses))
			throw new SoapClientException('Product Status value "'.$value.'" not in ('.implode(', ', $this->available_statuses).')');

		$this->value = $value;
	}

	/**
	 * @return array
	 */
	public function toArray()
	{
		return $this->value;
	}
}