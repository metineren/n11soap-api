<?php
namespace N11\complexType;

class ClaimReturnSearch extends ComplexType
{
	/**
	 * ClaimReturnSearch constructor.
	 *
	 * @param string|null $status | Available Values; [REQUESTED, CANCELLED, DENIED, PENDING, PENDED, APPROVED, MANUAL_REFUND, ALL]
	 * @param string|null $executer | Available Values; [BUYER, SELLER, OPERATOR, SYSTEM, SHIPMENT]
	 * @param string|null $searchInfoType | Available Values; [BUYEREMAIL, RECIPIENTS, BUYERNAME, ORDERID, PRODUCTID]
	 * @param string|null $searchQuery
	 * @param DateRangeApiModel|null $period
	 *
	 * @throws |ReflectionException
	 */
	public function __construct(string $status = null, string $executer = null, string $searchInfoType = null, string $searchQuery = null, DateRangeApiModel $period = null)
	{
		parent::__construct($status, $executer, $searchInfoType, $searchQuery, $period);
	}
}