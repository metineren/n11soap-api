<?php
namespace N11\complexType;

class ProductRequest extends ComplexType
{
	/**
	 * ProductRequest constructor.
	 *
	 * @param string $productSellerCode
	 * @param string $title
	 * @param string $subtitle
	 * @param string $description
	 * @param bool $domestic
	 * @param CategoryRequest $category
	 * @param SpecialProductInfoList|null $specialProductInfoList
	 * @param float $price
	 * @param int $currencyType
	 * @param ProductImageList $images
	 * @param int|null $approvalStatus
	 * @param string $groupAttribute
	 * @param string $groupItemCode
	 * @param string $itemName
	 * @param ProductAttributeRequestList $attributes
	 * @param string $saleStartDate
	 * @param string $saleEndDate
	 * @param string $productionDate
	 * @param string $expirationDate
	 * @param string $productCondition
	 * @param int $preparingDay
	 * @param ProductDiscountRequest $discount
	 * @param string $shipmentTemplate
	 * @param ProductSkuRequestList $stockItems
	 *
	 * @throws \ReflectionException
	 */
	public function __construct(
		string $productSellerCode,
		string $title,
		string $subtitle,
		string $description,
		bool $domestic,
		CategoryRequest $category,
		SpecialProductInfoList $specialProductInfoList = null,
		float $price,
		int $currencyType,
		ProductImageList $images,
		int $approvalStatus = null,
		string $groupAttribute,
		string $groupItemCode,
		string $itemName,
		ProductAttributeRequestList $attributes,
		string $saleStartDate,
		string $saleEndDate,
		string $productionDate,
		string $expirationDate,
		string $productCondition,
		int $preparingDay,
		ProductDiscountRequest $discount,
		string $shipmentTemplate,
		ProductSkuRequestList $stockItems
	)
	{
		parent::__construct( $productSellerCode, $title, $subtitle, $description, $domestic, $category, $specialProductInfoList, $price, $currencyType, $images, $approvalStatus, $groupAttribute, $groupItemCode, $itemName, $attributes, $saleStartDate, $saleEndDate, $productionDate, $expirationDate, $productCondition, $preparingDay, $discount, $shipmentTemplate, $stockItems );
	}
}