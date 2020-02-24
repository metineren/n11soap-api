<?php
namespace N11;


class ProductSellingService extends SoapClient
{
	/**
	 * @param int $productId
	 *
	 * @return object stdClass
	 * @throws SoapClientException
	 */
	public function StopSellingProductByProductId(int $productId)
	{
		return parent::__call(__FUNCTION__, array(array('productId' => $productId)));
	}

	/**
	 * @param string $productSellerCode
	 *
	 * @return object stdClass
	 * @throws SoapClientException
	 */
	public function StopSellingProductBySellerCode(string $productSellerCode)
	{
		return parent::__call(__FUNCTION__, array(array('productSellerCode' => $productSellerCode)));
	}

	/**
	 * @param int $productId
	 *
	 * @return object stdClass
	 * @throws SoapClientException
	 */
	public function StartSellingProductByProductId(int $productId)
	{
		return parent::__call(__FUNCTION__, array(array('productId' => $productId)));
	}

	/**
	 * @param string $productSellerCode
	 *
	 * @return object stdClass
	 * @throws SoapClientException
	 */
	public function StartSellingProductBySellerCode(string $productSellerCode)
	{
		return parent::__call(__FUNCTION__, array(array('productSellerCode' => $productSellerCode)));
	}
}