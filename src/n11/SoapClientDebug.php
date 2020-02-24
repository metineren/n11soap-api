<?php
namespace N11;

use SoapClient as SoapClientNative;

class SoapClientDebug extends SoapClientNative
{
	public function __doRequest ($request, $location, $action, $version, $one_way = 0)
	{
		$return = parent::__doRequest($request, $location, $action, $version, $one_way);
		// Log::debug('N11 Log -> '.json_encode(compact('request', 'location', 'action', 'version', 'one_way') + array('Response' => $return, 'Request Headers' => $this->__getLastRequestHeaders(), 'Response Headers' => $this->__getLastResponseHeaders())));
		return $return;
	}
}