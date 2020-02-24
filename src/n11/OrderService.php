<?php
namespace N11;

use N11\complexType\OrderDataListRequest;
use N11\complexType\OrderDataRequest;
use N11\complexType\OrderItemDataListRequest;
use N11\complexType\OrderItemListShipmentRequest;

class OrderService extends SoapClient
{
	/**
	 * @param OrderDataListRequest|null $searchData
	 * @param int $page
	 * @param int $limit
	 *
	 * @return object stdClass
	 * @throws SoapClientException
	 */
	public function OrderList(OrderDataListRequest $searchData = null, int $page = null, int $limit = null)
	{
		$page = (int)$page;
		$limit = (int)$limit;

		if ($page > 0)
			$page = $page -1;
		if ($page < 0)
			$page = 0;

		if ($limit <= 0)
			$limit = 30;

		return parent::__call(__FUNCTION__, array(array('pagingData' => array('currentPage' => $page, 'pageSize' => $limit), 'searchData' => $searchData)));
	}

	/**
	 * @param OrderDataListRequest|null $searchData
	 * @param int $page
	 * @param int $limit
	 *
	 * @return object stdClass
	 * @throws SoapClientException
	 */
	public function DetailedOrderList(OrderDataListRequest $searchData = null, int $page = null, int $limit = null)
	{
		$page = (int)$page;
		$limit = (int)$limit;

		if ($page > 0)
			$page = $page -1;
		if ($page < 0)
			$page = 0;

		if ($limit <= 0)
			$limit = 30;

		return parent::__call(__FUNCTION__, array(array('pagingData' => array('currentPage' => $page, 'pageSize' => $limit), 'searchData' => $searchData)));
	}

	/**
	 * @param OrderItemDataListRequest $orderItemList
	 *
	 * @return object stdClass
	 * @throws SoapClientException
	 */
	public function OrderItemAccept(OrderItemDataListRequest $orderItemList)
	{
		return parent::__call(__FUNCTION__, array(array('orderItemList' => $orderItemList)));
	}

	/**
	 * @param OrderItemDataListRequest $orderItemList
	 * @param string $rejectReason
	 * @param string|null $rejectReasonType
	 *
	 * @return object stdClass
	 * @throws SoapClientException
	 */
	public function OrderItemReject(OrderItemDataListRequest $orderItemList, string $rejectReason, string $rejectReasonType = null)
	{
		return parent::__call(__FUNCTION__, array(array('orderItemList' => $orderItemList, 'rejectReason' => $rejectReason, 'rejectReasonType' => $rejectReasonType)));
	}

	/**
	 * @param OrderItemListShipmentRequest $orderItemList
	 *
	 * @return object stdClass
	 * @throws SoapClientException
	 */
	public function MakeOrderItemShipment(OrderItemListShipmentRequest $orderItemList)
	{
		return parent::__call(__FUNCTION__, array(array('orderItemList' => $orderItemList)));
	}

	/**
	 * @param OrderDataRequest $orderRequest
	 *
	 * @return object stdClass
	 * @throws SoapClientException
	 */
	public function OrderDetail(OrderDataRequest $orderRequest)
	{
		return parent::__call(__FUNCTION__, array(array('orderRequest' => $orderRequest)));
	}

	/**
	 * @param OrderItemDataListRequest $orderItemList
	 *
	 * @return object stdClass
	 * @throws SoapClientException
	 */
	public function ComplementaryItemDetail(OrderItemDataListRequest $orderItemList)
	{
		return parent::__call(__FUNCTION__, array(array('orderItemList' => $orderItemList)));
	}

}