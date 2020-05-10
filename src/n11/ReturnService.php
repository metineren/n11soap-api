<?php
namespace N11;

use N11\complexType\ClaimReturnSearch;

class ReturnService extends SoapClient
{
	/**
	 * @param int|null $claimReturnId
	 * @param int|null $pendingReasonId
	 * @param int|null $pendingDayCount
	 * @param string|null $pendingReasonNote
	 *
	 * @return object
	 * @throws SoapClientException
	 */
	public function ClaimReturnPending(int $claimReturnId = null, int $pendingReasonId = null, int $pendingDayCount = null, string $pendingReasonNote = null)
	{
		return parent::__call(__FUNCTION__, array(array('claimReturnId' => $claimReturnId, 'pendingReasonId' => $pendingReasonId, 'pendingDayCount' => $pendingDayCount, 'pendingReasonNote' => $pendingReasonNote)));
	}

	/**
	 * @return object
	 * @throws SoapClientException
	 */
	public function ClaimReturnDenyReasonTypes()
	{
		return parent::__call(__FUNCTION__, array());
	}

	/**
	 * @return object
	 * @throws SoapClientException
	 */
	public function ClaimReturnPendingReasonTypes()
	{
		return parent::__call(__FUNCTION__, array());
	}

	/**
	 * @param int|null $claimReturnId
	 *
	 * @return object
	 * @throws SoapClientException
	 */
	public function ClaimReturnApprove(int $claimReturnId = null)
	{
		return parent::__call(__FUNCTION__, array(array('claimReturnId' => $claimReturnId)));
	}

	/**
	 * @param int|null $claimReturnId
	 * @param int|null $denyReasonId
	 * @param string|null $denyReasonNote
	 * @param string|null $returnShipmentType
	 * @param int|null $shipmentCompanyId
	 * @param string|null $trackingNumber
	 * @param string|null $deliveryReceiptNumber
	 *
	 * @return object
	 * @throws SoapClientException
	 */
	public function ClaimReturnDeny(int $claimReturnId = null, int $denyReasonId = null, string $denyReasonNote = null, string $returnShipmentType = null, int $shipmentCompanyId = null, string $trackingNumber = null, string $deliveryReceiptNumber = null)
	{
		return parent::__call(__FUNCTION__, array(array('claimReturnId' => $claimReturnId, 'denyReasonId' => $denyReasonId, 'denyReasonNote' => $denyReasonNote, 'returnShipmentType' => $returnShipmentType, 'shipmentCompanyId' => $shipmentCompanyId, 'trackingNumber' => $trackingNumber, 'deliveryReceiptNumber' => $deliveryReceiptNumber)));
	}

	/**
	 * @param ClaimReturnSearch|null $searchData
	 * @param int $page
	 * @param int $limit
	 *
	 * @return object
	 * @throws SoapClientException
	 */
	public function ClaimReturnList(ClaimReturnSearch $searchData = null, int $page = 1, int $limit = 30)
	{
		$page = (int)$page;
		$limit = (int)$limit;

		if ($page < 0)
			$page = 0;

		if ($limit <= 0)
			$limit = 30;

		return parent::__call(__FUNCTION__, array(array('searchData' => $searchData, 'pagingData' => array('currentPage' => $page, 'pageSize' => $limit))));
	}
}