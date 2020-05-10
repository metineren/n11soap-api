<?php
namespace N11\complexType;

class ProductSkuRequest extends ComplexType
{
	/**
	 * ProductSkuRequest constructor.
	 *
	 * @param bool|null $bundle
	 * @param string|null $mpn
	 * @param string|null $gtin
	 * @param string|null $n11CatalogId
	 * @param string|null $oem
	 * @param int $quantity
	 * @param string $sellerStockCode
	 * @param ProductAttributeRequestList $attributes
	 * @param float $optionPrice
	 *
	 * @throws |ReflectionException
	 */
	public function __construct(
		bool $bundle = null,
		string $mpn = null,
		string $gtin = null,
		string $n11CatalogId = null,
		string $oem = null,
		int $quantity,
		string $sellerStockCode,
		ProductAttributeRequestList $attributes,
		float $optionPrice
	)
	{
		parent::__construct($bundle, $mpn, $gtin, $n11CatalogId, $oem, $quantity, $sellerStockCode, $attributes, $optionPrice);
	}
}