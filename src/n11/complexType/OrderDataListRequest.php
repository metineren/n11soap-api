<?php
namespace N11\complexType;

class OrderDataListRequest extends ComplexType
{
	/**
	 * OrderDataListRequest constructor.
	 *
	 * @param int $productId
	 * @param string|null $status
	 * @param string $buyerName
	 * @param string $orderNumber
	 * @param string|null $productSellerCode
	 * @param string $recipient
	 * @param bool|null $sameDayDelivery
	 * @param OrderSearchPeriod|null $period
	 * @param bool $sortForUpdateDate
	 *
	 * @throws \ReflectionException
	 */
	public function __construct(
		int $productId,
		string $status = null,
		string $buyerName,
		string $orderNumber,
		string $productSellerCode = null,
		string $recipient,
		bool $sameDayDelivery = null,
		OrderSearchPeriod $period = null,
		bool $sortForUpdateDate
	)
	{
		return parent::__construct($productId, $status, $buyerName, $orderNumber, $productSellerCode, $recipient, $sameDayDelivery, $period, $sortForUpdateDate);
	}
}