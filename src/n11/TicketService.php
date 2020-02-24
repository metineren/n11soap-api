<?php
namespace N11;

class TicketService extends SoapClient
{
	/**
	 * @param int $sellerId
	 * @param int $first
	 * @param int $pageSize
	 *
	 * @return object stdClass
	 * @throws SoapClientException
	 */
	public function TicketListingBelongsToSeller(int $sellerId, int $first = null, int $pageSize = null)
	{
		return parent::__call(__FUNCTION__, array(array('sellerId' => $sellerId, 'first' => $first, 'pageSize' => $pageSize)));
	}

	/**
	 * @param int $sellerId
	 * @param int $first
	 * @param int $pageSize
	 *
	 * @return object stdClass
	 * @throws SoapClientException
	 */
	public function TicketListingAssignedToSeller(int $sellerId, int $first = null, int $pageSize = null)
	{
		return parent::__call(__FUNCTION__, array(array('sellerId' => $sellerId, 'first' => $first, 'pageSize' => $pageSize)));
	}

	/**
	 * @param int $sellerId
	 * @param int $ticketId
	 * @param string $content
	 *
	 * @return object stdClass
	 * @throws SoapClientException
	 */
	public function TicketAnswer(int $sellerId, int $ticketId, string $content)
	{
		return parent::__call(__FUNCTION__, array(array('sellerId' => $sellerId, 'ticketId' => $ticketId, 'content' => $content)));
	}

	/**
	 * @param int $reasonId
	 * @param int $sellerId
	 * @param string $header
	 * @param string $content
	 *
	 * @return object stdClass
	 * @throws SoapClientException
	 */
	public function TicketCreate(int $reasonId, int $sellerId, string $header, string $content)
	{
		return parent::__call(__FUNCTION__, array(array('reasonId' => $reasonId, 'sellerId' => $sellerId, 'header' => $header, 'content' => $content)));
	}

	/**
	 * @return object stdClass
	 * @throws SoapClientException
	 */
	public function TicketReasons()
	{
		return parent::__call(__FUNCTION__, array());
	}

	/**
	 * @param int $ticketId
	 * @param int $sellerId
	 *
	 * @return object stdClass
	 * @throws SoapClientException
	 */
	public function TicketRead(int $ticketId, int $sellerId)
	{
		return parent::__call(__FUNCTION__, array(array('ticketId' => $ticketId, 'sellerId' => $sellerId)));
	}
}