<?php
namespace N11;

use N11\complexType\ProductRequest;
use N11\complexType\ProductSkuBasicRequestItemList;
use N11\complexType\ProductSearch;
use N11\complexType\SellerProductDiscount;
use N11\complexType\ProductUpdateSkuBasicRequestItemList;
use N11\complexType\ProductImageList;
use N11\complexType\ProductQuestionSearch;
use N11\complexType\ProductIdList;

class ProductService extends SoapClient {

	/**
	 * @param int $productId
	 *
	 * @return object stdClass
	 * @throws SoapClientException
	 */
	public function GetProductByProductId(int $productId)
	{
		return parent::__call(__FUNCTION__, array(array('productId' => $productId)));
	}

	/**
	 * @param string $sellerCode
	 *
	 * @return object stdClass
	 * @throws SoapClientException
	 */
	public function GetProductBySellerCode(string $sellerCode)
	{
		return parent::__call(__FUNCTION__, array(array('sellerCode' => $sellerCode)));
	}

	/**
	 * @param int $page
	 * @param int $limit
	 *
	 * @return object stdClass
	 * @throws SoapClientException
	 */
	public function GetProductList(int $page = null, int $limit = null)
	{
		$page = (int)$page;
		$limit = (int)$limit;

		if ($page > 0)
			$page = $page -1;
		if ($page < 0)
			$page = 0;

		if ($limit <= 0)
			$limit = 30;

		return parent::__call(__FUNCTION__, array(array('pagingData' => array('currentPage' => $page, 'pageSize' => $limit))));
	}

	/**
	 * @param string $productSearch
	 * @param int $page
	 * @param int $limit
	 *
	 * @return object stdClass
	 * @throws SoapClientException
	 */
	public function SearchProducts(ProductSearch $productSearch, int $page = null, int $limit = null)
	{
		$page = (int)$page;
		$limit = (int)$limit;

		if ($page > 0)
			$page = $page -1;
		if ($page < 0)
			$page = 0;

		if ($limit <= 0)
			$limit = 30;

		return parent::__call(__FUNCTION__, array(array('pagingData' => array('currentPage' => $page, 'pageSize' => $limit), 'productSearch' => $productSearch)));
	}

	/**
	 * @param int $productId
	 * @param float $price
	 * @todo  $currencyType only allow "1" value now, because N11 API only accepts Turkish Lira for now
	 * @param ProductSkuBasicRequestItemList $stockItems
	 *
	 * @return object stdClass
	 * @throws SoapClientException
	 */
	public function UpdateProductPriceById(int $productId, float $price, ProductSkuBasicRequestItemList $stockItems)
	{
		$currencyType = 1;
		return parent::__call(__FUNCTION__, array(array('productId' => $productId, 'price' => $price, 'currencyType' => $currencyType, 'stockItems' => $stockItems)));
	}

	/**
	 * @param string $productSellerCode
	 * @param float $price
	 * @todo  $currencyType only allow "1" value now, because N11 API only accepts Turkish Lira for now
	 * @param ProductSkuBasicRequestItemList $stockItems
	 *
	 * @return object stdClass
	 * @throws SoapClientException
	 */
	public function UpdateProductPriceBySellerCode(string $productSellerCode, float $price, ProductSkuBasicRequestItemList $stockItems)
	{
		$currencyType = 1;
		return parent::__call(__FUNCTION__, array(array('productSellerCode' => $productSellerCode, 'price' => $price, 'currencyType' => $currencyType, 'stockItems' => $stockItems)));
	}

	/**
	 * @param int $productId
	 *
	 * @return object stdClass
	 * @throws SoapClientException
	 */
	public function DeleteProductById(int $productId)
	{
		return parent::__call(__FUNCTION__, array(array('productId' => $productId)));
	}

	/**
	 * @param string $productSellerCode
	 *
	 * @return object stdClass
	 * @throws SoapClientException
	 */
	public function DeleteProductBySellerCode(string $productSellerCode)
	{
		return parent::__call(__FUNCTION__, array(array('productSellerCode' => $productSellerCode)));
	}

	/**
	 * @param ProductRequest $product
	 *
	 * @return object stdClass
	 * @throws SoapClientException
	 */
	public function SaveProduct(ProductRequest $product)
	{
		return parent::__call(__FUNCTION__, array(array('product' => $product)));
	}

	/**
	 * @param int $productId
	 * @param string $productSellerCode
	 * @param float $price
	 * @param SellerProductDiscount $productDiscount
	 * @param ProductUpdateSkuBasicRequestItemList $stockItems
	 * @param string $description
	 * @param ProductImageList $images
	 *
	 * @return object stdClass
	 * @throws SoapClientException
	 */
	public function UpdateProductBasic(
		int $productId,
		string $productSellerCode,
		float $price,
		SellerProductDiscount $productDiscount,
		ProductUpdateSkuBasicRequestItemList $stockItems,
		string $description,
		ProductImageList $images
	)
	{
		return parent::__call(__FUNCTION__, array(array('productId' => $productId, 'productSellerCode' => $productSellerCode, 'price' => $price, 'productDiscount' => $productDiscount, 'stockItems' => $stockItems, 'description' => $description, 'images' => $images)));
	}

	/**
	 * @param int $productId
	 * @param SellerProductDiscount $productDiscount
	 *
	 * @return object stdClass
	 * @throws SoapClientException
	 */
	public function UpdateDiscountValueByProductId(int $productId, SellerProductDiscount $productDiscount)
	{
		return parent::__call(__FUNCTION__, array(array('productId' => $productId, 'productDiscount' => $productDiscount)));
	}

	/**
	 * @param string $productSellerCode
	 * @param SellerProductDiscount $productDiscount
	 *
	 * @return object stdClass
	 * @throws SoapClientException
	 */
	public function UpdateDiscountValueBySellerCode(string $productSellerCode, SellerProductDiscount $productDiscount)
	{
		return parent::__call(__FUNCTION__, array(array('productSellerCode' => $productSellerCode, 'productDiscount' => $productDiscount)));
	}

	/**
	 * @param ProductQuestionSearch $productQuestionSearch
	 * @param int $page
	 * @param int $limit
	 *
	 * @return object stdClass
	 * @throws SoapClientException
	 */
	public function GetProductQuestionList(ProductQuestionSearch $productQuestionSearch, int $page = null, int $limit = null)
	{
		$page = (int)$page;
		$limit = (int)$limit;

		if ($page > 0)
			$page = $page -1;
		if ($page < 0)
			$page = 0;

		if ($limit <= 0)
			$limit = 30;

		return parent::__call(__FUNCTION__, array(array('pagingData' => array('currentPage' => $page, 'pageSize' => $limit), 'productQuestionSearch' => $productQuestionSearch)));
	}

	/**
	 * @param int $productQuestionId
	 *
	 * @return object stdClass
	 * @throws SoapClientException
	 */
	public function GetProductQuestionDetail(int $productQuestionId)
	{
		return parent::__call(__FUNCTION__, array(array('productQuestionId' => $productQuestionId)));
	}

	/**
	 * @param int $productQuestionId
	 * @param string $answer
	 *
	 * @return object stdClass
	 * @throws SoapClientException
	 */
	public function SaveProductAnswer(int $productQuestionId, string $answer)
	{
		return parent::__call(__FUNCTION__, array(array('productQuestionId' => $productQuestionId, 'answer' => $answer)));
	}

	/**
	 * @return object stdClass
	 * @throws SoapClientException
	 */
	public function AdaptUnificationProducts()
	{
		return parent::__call(__FUNCTION__, array());
	}

	/**
	 * @return object stdClass
	 * @throws SoapClientException
	 */
	public function ProductApprovalStatus()
	{
		return parent::__call(__FUNCTION__, array());
	}

	/**
	 * @param ProductIdList $productIdList
	 *
	 * @return object stdClass
	 * @throws SoapClientException
	 */
	public function UpdateProductsByPims(ProductIdList $productIdList)
	{
		return parent::__call(__FUNCTION__, array(array('productIdList' => $productIdList)));
	}
}