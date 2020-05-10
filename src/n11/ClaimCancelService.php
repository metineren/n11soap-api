<?php
namespace N11;

use N11\complexType\ClaimCancelSearch;

class ClaimCancelService extends SoapClient
{
	/**
	 * @param ClaimCancelSearch|null $searchData
	 * @param int $page
	 * @param int $limit
	 *
	 * @return object
	 * @throws \N11\SoapClientException
	 */
	public function ClaimCancelList(ClaimCancelSearch $searchData = null, int $page = 1, int $limit = 30)
	{
		$page = (int)$page;
		$limit = (int)$limit;

		if ($page <= 0)
			$page = 1;

		if ($limit <= 0)
			$limit = 30;

		return parent::__call(__FUNCTION__, array(array('searchData' => $searchData, 'pagingData' => array('currentPage' => $page, 'pageSize' => $limit))));
	}

	/**
	 * @return object
	 * @throws SoapClientException
	 */
	public function ClaimCancelDenyReasonType()
	{
		return parent::__call(__FUNCTION__, array());
	}

	/**
	 * @param int $claimCancelId
	 * @param int $denyReasonId
	 * @param string|null $denyReasonNote
	 *
	 * @return object
	 * @throws SoapClientException
	 */
	public function ClaimCancelDeny(int $claimCancelId, int $denyReasonId, string $denyReasonNote = null)
	{
		return parent::__call(__FUNCTION__, array(array('claimCancelId' => $claimCancelId, 'denyReasonId' => $denyReasonId, 'denyReasonNote' => $denyReasonNote)));
	}

	/**
	 * @param int $claimCancelId
	 *
	 * @return object
	 * @throws SoapClientException
	 */
	public function ClaimCancelApprove(int $claimCancelId)
	{
		return parent::__call(__FUNCTION__, array(array('claimCancelId' => $claimCancelId)));
	}
}