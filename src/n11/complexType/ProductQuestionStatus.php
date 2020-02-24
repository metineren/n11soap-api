<?php
namespace N11\complexType;

use App\Services\N11\SoapClientException;
use Illuminate\Contracts\Support\Arrayable;

class ProductQuestionStatus implements Arrayable
{
	/**
	 * @var array
	 */
	private $available_statuses = [
		'CLOSED',
		'OPEN'
	];

	/**
	 * @var
	 */
	private $value;

	/**
	 * ProductQuestionStatus constructor.
	 *
	 * @param $value
	 *
	 * @throws SoapClientException
	 */
	public function __construct($value)
	{
		if (!in_array($value, $this->available_statuses))
			throw new SoapClientException('Product Question Status value "'.$value.'" not in ('.implode(', ', $this->available_statuses).')');

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