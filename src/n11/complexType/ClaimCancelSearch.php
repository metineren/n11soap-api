<?php
namespace N11\complexType;

class ClaimCancelSearch extends ComplexType
{
	/**
	 * ClaimCancelSearch constructor.
	 *
	 * @param string $status | Available Values; [REQUESTED, RETRACTED, COMPLETED, DENIED, REJECT, MANUAL_REFUND, ALL]
	 * @param string $executer | Available Values; [BUYER, SELLER, OPERATOR, SYSTEM, SHIPMENT]
	 * @param string $searchInfoType | Available Values; [BUYEREMAIL, RECIPIENTS, BUYERNAME, ORDERID, PRODUCTID]
	 * @param string $searchQuery
	 * @param ClaimCancelDateData $searchDate
	 *
	 * @throws |ReflectionException
	 */
	public function __construct(string $status, string $executer, string $searchInfoType, string $searchQuery, ClaimCancelDateData $searchDate)
	{
		parent::__construct($status, $executer, $searchInfoType, $searchQuery, $searchDate);
	}
}