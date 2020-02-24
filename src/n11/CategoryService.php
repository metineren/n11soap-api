<?php
namespace N11;

class CategoryService extends SoapClient{

	/**
	 * @return object stdClass
	 * @throws SoapClientException
	 */
	public function GetTopLevelCategories()
	{
		return parent::__call(__FUNCTION__, array());
	}

	/**
	 * @param int $categoryId
	 * @param int $page
	 * @param int $limit
	 *
	 * @return object stdClass
	 * @throws SoapClientException
	 */
	public function GetCategoryAttributes(int $categoryId, int $page = null, int $limit = null)
	{
		$page = (int)$page;
		$limit = (int)$limit;

		if ($page > 0)
			$page = $page -1;
		if ($page < 0)
			$page = 0;

		if ($limit <= 0)
			$limit = 30;

		return parent::__call(__FUNCTION__, array(array('categoryId' => $categoryId, 'pagingData' => array('currentPage' => $page, 'pageSize' => $limit))));
	}

	/**
	 * @param int $categoryId
	 *
	 * @return object stdClass
	 * @throws SoapClientException
	 */
	public function GetParentCategory(int $categoryId)
	{
		return parent::__call(__FUNCTION__, array(array('categoryId' => $categoryId)));
	}

	/**
	 * @param int $categoryId
	 *
	 * @return object stdClass
	 * @throws SoapClientException
	 */
	public function GetCategoryAttributesId(int $categoryId)
	{
		return parent::__call(__FUNCTION__, array(array('categoryId' => $categoryId)));
	}

	/**
	 * @param int $categoryProductAttributeId
	 * @param int $page
	 * @param int $limit
	 *
	 * @return object stdClass
	 * @throws SoapClientException
	 */
	public function GetCategoryAttributeValue(int $categoryProductAttributeId, int $page = null, int $limit = null)
	{
		$page = (int)$page;
		$limit = (int)$limit;

		if ($page > 0)
			$page = $page -1;
		if ($page < 0)
			$page = 0;

		if ($limit <= 0)
			$limit = 30;

		return parent::__call(__FUNCTION__, array(array('pagingData' => array('currentPage' => $page, 'pageSize' => $limit), 'categoryProductAttributeId' => $categoryProductAttributeId)));
	}

	/**
	 * @param int $categoryId
	 *
	 * @return object stdClass
	 * @throws SoapClientException
	 */
	public function GetSubCategories(int $categoryId)
	{
		return parent::__call(__FUNCTION__, array(array('categoryId' => $categoryId)));
	}
}