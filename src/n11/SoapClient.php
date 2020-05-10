<?php
namespace N11;


use Exception;
use SoapClient as SoapClientNative;
use N11\complexType\Authentication;

/** Disable Soap Cache for prevent some errors */
@ini_set('soap.wsdl_cache_enabled', 0);
@ini_set('soap.wsdl_cache', 0);
@ini_set('soap.wsdl_cache_ttl', 0);

class SoapClient
{
	/**
	 * @var string $version
	 */
	public static $version = '5.2';

	/**
	 * @var object SoapClient instance $service
	 */
	protected $service = false;

	/**
	 * @var string $app_key N11 API KEY
	 * @var string $app_secret N11 API SECRET
	 */
	private $app_key;
	private $app_secret;

	/**
	 * @var bool $debug
	 */
	private $debug = false;

	/**
	 * @var string $api_url is N11 Soap Api Base URL
	 */
	protected $api_url = 'https://api.n11.com/ws/';

	/**
	 * @var array $available_services is N11 Soap Api Services
	 */
	protected static $available_services = array(
		'CategoryService.wsdl',
		'CityService.wsdl',
		'OrderService.wsdl',
		'ProductSellingService.wsdl',
		'ProductService.wsdl',
		'ProductStockService.wsdl',
		'SapBankStatementEInvoiceService.wsdl',
		'SapCommissionEInvoiceDetailService.wsdl',
		'SettlementService.wsdl',
		'ShipmentCompanyService.wsdl',
		'ShipmentService.wsdl',
		'TicketService.wsdl',
		'ClaimCancelService.wsdl',
		'ReturnService.wsdl'
	);

	/**
	 * @var string $encoding SoapClient Encoding
	 */
	protected $encoding = 'UTF-8';

	/**
	 * Returns the *Singleton* instance of this class.
	 *
	 * @param bool $debug
	 * @param Authentication $authentication
	 *
	 * @return SoapClient
	 * @throws SoapClientException
	 */
	public static function getInstance(bool $debug, Authentication $authentication)
	{
		return new static($debug, $authentication);
	}

	/**
	 * SoapClient constructor.
	 *
	 * @param bool $debug
	 * @param Authentication $authentication
	 *
	 * @throws SoapClientException
	 */
	public function __construct(bool $debug, Authentication $authentication)
	{
		$this->debug = boolval($debug);

		$authentication = $authentication->toArray();

		$this->app_key = $authentication['appKey'];
		$this->app_secret = $authentication['appSecret'];

		if (!$this->app_key || !$this->app_secret)
			throw new SoapClientException("N11 Rest API KEY or API SECRET is not defined!");

		$class = str_replace(__NAMESPACE__.'\\', '', get_class($this));

		if (in_array($class, static::$available_services) || in_array($class.'.wsdl', static::$available_services))
		{
			$service = $class;
			if (substr($service, -5) == '.wsdl')
				$service = substr($service, 0, strlen($service)-5);

			$this->setService($service);
		}
		else
		{
			throw new SoapClientException("Service Not Found");
		}
	}

	/**
	 * @param null $service
	 * @see $this->available_services
	 *
	 * @return $this
	 * @throws | SoapFault
	 */
	private function setService($service = null)
	{

		if (in_array($service, static::$available_services))
			$service_url = $this->api_url.$service;
		elseif (in_array($service.'.wsdl', static::$available_services))
			$service_url = $this->api_url.$service.'.wsdl';
		else
			throw new SoapClientException("Service $service not defined in available services");

		if (!$this->service)
		{
			$this->service = (
				$this->debug ?
					new SoapClientDebug($service_url, array(
						'encoding' => $this->encoding,
						'cache_wsdl' => WSDL_CACHE_BOTH
					)) :
					new SoapClientNative($service_url, array(
						'encoding' => $this->encoding,
						'cache_wsdl' => WSDL_CACHE_BOTH
					))
			);
		}
		else
			$this->service->__setLocation($service_url);

		return $this;
	}

	/**
	 * @return object SoapClient Service instance
	 */
	private function getService()
	{
		return $this->service;
	}

	/**
	 * @param string $method
	 * @param array $args
	 *
	 * @throws | N11SoapClientException if Authentication is failed or any throwed SoapExceptions
	 *
	 * @return object stdClass
	 */
	public function __call($method, $args = array())
	{
		if (!isset($args[0]))
			$args[0] = array();
		$args[0]['auth']['appKey'] = $this->app_key;
		$args[0]['auth']['appSecret'] = $this->app_secret;

		if (isset($args[0]['pagingData']['currentPage']))
		{
			$args[0]['pagingData']['currentPage'] -= 1;
		}

		$args = $this->objectToArray($args);

		try
		{
			$return = $this->getService()->__SoapCall($method, $args);
		}
		catch (Exception $e)
		{
			if ($e->getMessage() == 'authenticationFailed')
				throw new SoapClientException('N11 API Authentication failed! API KEY or API SECRET incorrect.');
			else
				throw new SoapClientException($e->getMessage(), 0, $e);
		}

		return $return;
	}

	/**
	 * @return mixed
	 */
	public function getFunctions()
	{
		return $this->getService()->__getFunctions();
	}

	/**
	 * @return mixed
	 */
	public function getTypes()
	{
		return $this->getService()->__getTypes();
	}

	/**
	 * @param $obj
	 *
	 * @return array
	 */
	private function objectToArray($obj)
	{
		if(is_object($obj) || is_array($obj)) {

			if (is_object($obj) && method_exists($obj, 'toArray'))
			{
				$obj = $obj->toArray();
			}

			$ret = (array) $obj;
			foreach($ret as &$item)
			{
				$item = $this->objectToArray($item);
			}
			return $ret;
		}
		else
		{
			return $obj;
		}
	}

	/**
	 * @return string
	 */
	public static function getVersion()
	{
		return static::$version;
	}

	/**
	 * @return array
	 */
	public static function getAvailableServices()
	{
		$available_services = static::$available_services;

		foreach ($available_services as $key => $available_service)
		{
			$available_services[$key] = substr($available_service, 0, -5);
		}

		return $available_services;
	}
}