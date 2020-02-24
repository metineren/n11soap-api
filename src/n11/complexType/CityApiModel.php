<?php
namespace N11\complexType;

class CityApiModel extends ComplexType
{
	/**
	 * CityApiModel constructor.
	 *
	 * @param array $city
	 *
	 * @throws \ReflectionException
	 */
	public function __construct(array $city = array())
	{
		parent::__construct($city);
	}

	/**
	 * @param CityApiModel $city
	 *
	 * @return $this
	 */
	public function add(CityApiModel $city)
	{
		$cities = $this->offsetGet('city');
		$cities[] = $city;
		$this->offsetSet('city', $cities);
		return $this;
	}
}