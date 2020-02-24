<?php
namespace N11\complexType;

class SpecialProductInfoList extends ComplexType
{
	/**
	 * SpecialProductInfoList constructor.
	 *
	 * @param array $specialProductInfo
	 *
	 * @throws \ReflectionException
	 */
	public function __construct(array $specialProductInfo = array())
	{
		parent::__construct($specialProductInfo);
	}

	/**
	 * @param SpecialProductInfoApiModel $specialProductInfo
	 *
	 * @return $this
	 */
	public function add(SpecialProductInfoApiModel $specialProductInfo)
	{
		$specialProductInfos = $this->offsetGet('specialProductInfo');
		$specialProductInfos[] = $specialProductInfo;
		$this->offsetSet('specialProductInfo', $specialProductInfos);
		return $this;
	}
}