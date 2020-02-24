<?php
namespace N11;

class SettlementService extends SoapClient
{
	/**
	 * @param string $startDate
	 * @param string $endDate
	 * @param int $page
	 * @param int $limit
	 *
	 * @return object stdClass
	 * @throws SoapClientException
	 */
	public function GetSettlementList(string $startDate, string $endDate, int $page = null, int $limit = null)
	{
		$page = (int)$page;
		$limit = (int)$limit;

		if ($page > 0)
			$page = $page -1;
		if ($page < 0)
			$page = 0;

		if ($limit <= 0)
			$limit = 30;

		return parent::__call(__FUNCTION__, array(array('startDate' => $startDate, 'endDate' => $endDate, 'pagingData' => array('currentPage' => $page, 'pageSize' => $limit))));
	}

	/**
	 * @param string $date
	 * @param int $page
	 * @param int $limit
	 *
	 * @return object stdClass
	 * @throws SoapClientException
	 */
	public function GetSettlementDetail(string $date, int $page = null, int $limit = null)
	{
		$page = (int)$page;
		$limit = (int)$limit;

		if ($page > 0)
			$page = $page -1;
		if ($page < 0)
			$page = 0;

		if ($limit <= 0)
			$limit = 30;
		return parent::__call(__FUNCTION__, array(array('date' => $date, 'pagingData' => array('currentPage' => $page, 'pageSize' => $limit))));
	}

}