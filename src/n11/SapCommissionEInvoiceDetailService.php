<?php
namespace N11;

class SapCommissionEInvoiceDetailService extends SoapClient
{
	/**
	 * @param string $date
	 *
	 * @return object stdClass
	 * @throws SoapClientException
	 *
	 * @note Daily 3 request accepts
	 */
	public function GetSapCommissionEInvoiceDetail(string $date)
	{
		return parent::__call(__FUNCTION__, array(array('date' => $date)));
	}
}