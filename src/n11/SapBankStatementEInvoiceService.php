<?php
namespace N11;

class SapBankStatementEInvoiceService extends SoapClient
{
	/**
	 * @param string $startDate
	 * @param string $endDate
	 *
	 * @return object
	 * @throws SoapClientException
	 */
	public function GetSapBankStatementEInvoice(string $startDate, string $endDate)
	{
		return parent::__call(__FUNCTION__, array(array('startDate' => $startDate, 'endDate' => $endDate)));
	}
}