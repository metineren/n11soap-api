<?php
namespace N11\complexType;

class ProductQuestionSearch extends ComplexType
{
	/**
	 * ProductQuestionSearch constructor.
	 *
	 * @param int $productId
	 * @param string $buyerEmail
	 * @param string $subject
	 * @param ProductQuestionStatus $status
	 * @param string $questionDate
	 *
	 * @throws \ReflectionException
	 */
	public function __construct(int $productId, string $buyerEmail, string $subject, ProductQuestionStatus $status, string $questionDate)
	{
		parent::__construct($productId, $buyerEmail, $subject, $status, $questionDate);
	}
}