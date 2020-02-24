<?php
namespace N11;

use N11\complexType\StockItemForAddStockWithIdList;
use N11\complexType\StockItemForAddStockWithSellerStockCodeList;
use N11\complexType\ProductWithIdAndStockAttributes;
use N11\complexType\StockItemForUpdateStockWithIdList;
use N11\complexType\StockItemForUpdateStockWithSellerStockCodeList;
use N11\complexType\ProductWithIdAndStockAttributesForUpdate;

class ProductStockService extends SoapClient
{
	/**
	 * @param int $productId
	 *
	 * @return object stdClass
	 * @throws SoapClientException
	 */
	public function GetProductStockByProductId(int $productId)
	{
		return parent::__call(__FUNCTION__, array(array('productId' => $productId)));
	}

	/**
	 * @param string $productSellerCode
	 *
	 * @return object stdClass
	 * @throws SoapClientException
	 */
	public function GetProductStockByProductSellerCode(string $productSellerCode)
	{
		return parent::__call(__FUNCTION__, array(array('productSellerCode' => $productSellerCode)));
	}

	/**
	 * @param StockItemForAddStockWithIdList $stockItems
	 *
	 * @return object stdClass
	 * @throws SoapClientException
	 */
	public function IncreaseStockByStockId(StockItemForAddStockWithIdList $stockItems)
	{
		return parent::__call(__FUNCTION__, array(array('stockItems' => $stockItems)));
	}

	/**
	 * @param StockItemForAddStockWithSellerStockCodeList $stockItems
	 *
	 * @return object stdClass
	 * @throws SoapClientException
	 */
	public function IncreaseStockByStockSellerCode(StockItemForAddStockWithSellerStockCodeList $stockItems)
	{
		return parent::__call(__FUNCTION__, array(array('stockItems' => $stockItems)));
	}

	/**
	 * @param ProductWithIdAndStockAttributes $product
	 *
	 * @return object stdClass
	 * @throws SoapClientException
	 */
	public function IncreaseStockByStockAttributes(ProductWithIdAndStockAttributes $product)
	{
		return parent::__call(__FUNCTION__, array(array('product' => $product)));
	}

	/**
	 * @param StockItemForUpdateStockWithIdList $stockItems
	 *
	 * @return object stdClass
	 * @throws SoapClientException
	 */
	public function UpdateStockByStockId(StockItemForUpdateStockWithIdList $stockItems)
	{
		return parent::__call(__FUNCTION__, array(array('stockItems' => $stockItems)));
	}

	/**
	 * @param StockItemForUpdateStockWithSellerStockCodeList $stockItems
	 *
	 * @return object stdClass
	 * @throws SoapClientException
	 */
	public function UpdateStockByStockSellerCode(StockItemForUpdateStockWithSellerStockCodeList $stockItems)
	{
		return parent::__call(__FUNCTION__, array(array('stockItems' => $stockItems)));
	}

	/**
	 * @param ProductWithIdAndStockAttributesForUpdate $product
	 *
	 * @return object stdClass
	 * @throws SoapClientException
	 */
	public function DeleteAndUpdateStockByStockAttributes(ProductWithIdAndStockAttributesForUpdate $product)
	{
		return parent::__call(__FUNCTION__, array(array('product' => $product)));
	}
}