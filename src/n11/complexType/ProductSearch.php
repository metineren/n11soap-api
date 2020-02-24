<?php
namespace N11\complexType;

class ProductSearch extends ComplexType
{
	/**
	 * ProductSearch constructor.
	 *
	 * @param string $name
	 * @param DateRange $saleDate
	 * @param ProductStatus $approvalStatus
	 * @param bool|null $bundle
	 * @param string|null $mpn
	 * @param string|null $gtin
	 * @param string|null $oem
	 *
	 * @throws \ReflectionException
	 */
	public function __construct(string $name, DateRange $saleDate, ProductStatus $approvalStatus, bool $bundle = null, string $mpn = null, string $gtin = null, string $oem = null)
	{
		parent::__construct($name, $saleDate, $approvalStatus, $bundle, $mpn, $gtin, $oem);
	}
}