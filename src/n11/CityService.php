<?php
namespace N11;

class CityService extends SoapClient {

	/**
	 * @return object stdClass
	 * @throws SoapClientException
	 */
	public function GetCities()
	{
		return parent::__call(__FUNCTION__, array());
	}

	/**
	 * @param int $cityCode
	 *
	 * @return object stdClass
	 * @throws SoapClientException
	 */
	public function GetCity(int $cityCode)
	{
		return parent::__call(__FUNCTION__, array(array('cityCode' => $cityCode)));
	}

	/**
	 * @param int $cityCode
	 *
	 * @return object stdClass
	 * @throws SoapClientException
	 */
	public function GetDistrict(int $cityCode)
	{
		return parent::__call(__FUNCTION__, array(array('cityCode' => $cityCode)));
	}

	/**
	 * @param int $districtId
	 *
	 * @return object stdClass
	 * @throws SoapClientException
	 */
	public function GetNeighborhoods(int $districtId)
	{
		return parent::__call(__FUNCTION__, array(array('districtId' => $districtId)));
	}
}