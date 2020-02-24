# N11 Soap API - Soap Api implementation for php 

[![Total Downloads](https://img.shields.io/packagist/dt/metineren/n11soap-api.svg)](https://packagist.org/packages/metineren/n11soap-api)
[![Latest Stable Version](https://img.shields.io/packagist/v/metineren/n11soap-api.svg)](https://packagist.org/packages/metineren/n11soap-api)


This library implements the [PSR-4](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-4-autoloader.md)
interface that you can type-hint against in your own libraries to keep
a maximum of interoperability.

## Installation

Install the latest version with

```bash
$ composer require metineren/n11soap-api
```

#### Basic Usage

```php
<?php

use N11\SoapClient;

// for get current api version
SoapClient::getVersion();

// for get all available api services
SoapClient::getAvailableServices();
```

#### CategoryService Usages
```php
<?php
use N11\CategoryService;
use N11\complexType\Authentication;

$apiKey = ''; // Your N11 Api Key
$apiSecret = ''; // Your N11 Api Key Secret

$authentication = new Authentication($apiKey, $apiSecret);
$service = new CategoryService(false, $authentication);

print_r($service->GetTopLevelCategories());
print_r($service->GetCategoryAttributes(1000001, 1, 30));
print_r($service->GetParentCategory(1000006));
print_r($service->GetCategoryAttributesId(1000001));
print_r($service->GetCategoryAttributeValue(7086918, 1, 30));
print_r($service->GetSubCategories(1000001));
```
#### CityService Usages
```php
<?php
use N11\CityService;
use N11\complexType\Authentication;

$apiKey = ''; // Your N11 Api Key
$apiSecret = ''; // Your N11 Api Key Secret

$authentication = new Authentication($apiKey, $apiSecret);
$service = new CityService(false, $authentication);

print_r($service->GetCities());
print_r($service->GetCity(34));
print_r($service->GetDistrict(34));
print_r($service->GetNeighborhoods(22350));
```
#### OrderService Usages
```php
<?php
use N11\OrderService;
use N11\complexType\Authentication;

$apiKey = ''; // Your N11 Api Key
$apiSecret = ''; // Your N11 Api Key Secret

$authentication = new Authentication($apiKey, $apiSecret);
$service = new OrderService(false, $authentication);

// service methods coming soon
```
#### ProductSellingService Usages
```php
<?php
use N11\ProductSellingService;
use N11\complexType\Authentication;

$apiKey = ''; // Your N11 Api Key
$apiSecret = ''; // Your N11 Api Key Secret

$authentication = new Authentication($apiKey, $apiSecret);
$service = new \N11\ProductStockService(false, $authentication);

// service methods coming soon
```
#### ProductService Usages
```php
<?php
use N11\ProductService;
use N11\complexType\Authentication;

$apiKey = ''; // Your N11 Api Key
$apiSecret = ''; // Your N11 Api Key Secret

$authentication = new Authentication($apiKey, $apiSecret);
$service = new ProdcutService(false, $authentication);

// service methods coming soon
```
#### ProductStockService Usages
```php
<?php
use N11\ProductStockService;
use N11\complexType\Authentication;

$apiKey = ''; // Your N11 Api Key
$apiSecret = ''; // Your N11 Api Key Secret

$authentication = new Authentication($apiKey, $apiSecret);
$service = new ProductStockService(false, $authentication);

// service methods coming soon
```
#### SapBankStatementEInvoiceService Usages
```php
<?php
use N11\SapBankStatementEInvoiceService;
use N11\complexType\Authentication;

$apiKey = ''; // Your N11 Api Key
$apiSecret = ''; // Your N11 Api Key Secret

$authentication = new Authentication($apiKey, $apiSecret);
$service = new SapBankStatementEInvoiceService(false, $authentication);

print_r($service->GetSapBankStatementEInvoice('2020-01-01', '2020-02-24'));
```
#### SapCommissionEInvoiceDetailService Usages
```php
<?php
use N11\SapCommissionEInvoiceDetailService;
use N11\complexType\Authentication;

$apiKey = ''; // Your N11 Api Key
$apiSecret = ''; // Your N11 Api Key Secret

$authentication = new Authentication($apiKey, $apiSecret);
$service = new SapCommissionEInvoiceDetailService(false, $authentication);

print_r($service->GetSapCommissionEInvoiceDetail('2020-02-24'));
```
#### SettlementService Usages
```php
<?php
use N11\SettlementService;
use N11\complexType\Authentication;

$apiKey = ''; // Your N11 Api Key
$apiSecret = ''; // Your N11 Api Key Secret

$authentication = new Authentication($apiKey, $apiSecret);
$service = new SettlementService(false, $authentication);

print_r($service->GetSettlementList('2020-01-01', '2020-02-24', 1, 30));
print_r($service->GetSettlementDetail('2020-02-24', 1, 30));
```
#### ShipmentCompanyService Usages
```php
<?php
use N11\ShipmentCompanyService;
use N11\complexType\Authentication;

$apiKey = ''; // Your N11 Api Key
$apiSecret = ''; // Your N11 Api Key Secret

$authentication = new Authentication($apiKey, $apiSecret);
$service = new ShipmentCompanyService(false, $authentication);

print_r($service->GetShipmentCompanies());
```
#### ShipmentService Usages
```php
<?php
use N11\ShipmentService;
use N11\complexType\Authentication;

use N11\complexType\ShipmentApiModel;

use N11\complexType\ShipmentSaveAddress;
use N11\complexType\ShipmentCompanyApiModelList;
use N11\complexType\CityApiModelList;
use N11\complexType\ShipmentCompanyApiModel;

use N11\complexType\DistrictApiModel;
use N11\complexType\CityApiModel;

$apiKey = ''; // Your N11 Api Key
$apiSecret = ''; // Your N11 Api Key Secret

$authentication = new Authentication($apiKey, $apiSecret);
$service = new ShipmentService(false, $authentication);

print_r($service->GetShipmentTemplateList());
print_r($service->GetShipmentTemplate('templateName'));


// Start Of ShipmentApiModel vars
$templateName = 'templateName';
$installmentInfo = 'installmentInfo';
$exchangeInfo = 'exchangeInfo';
$shippingInfo = 'shippingInfo';
$specialDelivery = false;
$deliveryFeeType = 'deliveryFeeType';
$combinedShipmentAllowed = false;
$shipmentMethod = 'shipmentMethod';
$cargoAccountNo = null;
$useDmallCargo = false;

// Start of $warehouseAddress & $exchangeAddress vars
$title = 'title';
$address = 'address';
$district = new DistrictApiModel('Avcılar', 22350);
$city = new CityApiModel('İstanbul', 34);
$postalCode = '34000';
// End of $warehouseAddress & $exchangeAddress vars

$warehouseAddress = new ShipmentSaveAddress($title, $address, $district, $city, $postalCode);
$exchangeAddress = new ShipmentSaveAddress($title, $address, $district, $city, $postalCode);
$shipmentCompanies = new ShipmentCompanyApiModelList();
$shipmentCompanies->add('Aras Kargo', 'ars');
$deliverableCities = new CityApiModelList(); // or null 
$deliverableCities->add('İstanbul', 34)->add('Bursa', 16)->add('İzmir', 35);
$claimShipmentCompany = new ShipmentCompanyApiModel('Aras Kargo', 'ars');
// End of ShipmentApiModel vars

$shipment = new ShipmentApiModel(
    $templateName,
    $installmentInfo,
    $exchangeInfo,
    $shippingInfo,
    $specialDelivery,
    $deliveryFeeType,
    $combinedShipmentAllowed,
    $shipmentMethod,
    $warehouseAddress,
    $exchangeAddress,
    $shipmentCompanies,
    $deliverableCities,
    $claimShipmentCompany,
    $cargoAccountNo,
    $useDmallCargo
);

var_dump($service->CreateOrUpdateShipmentTemplate($shipment));
```
#### TicketService Usages
```php
<?php
use N11\TicketService;
use N11\complexType\Authentication;

$apiKey = ''; // Your N11 Api Key
$apiSecret = ''; // Your N11 Api Key Secret

$authentication = new Authentication($apiKey, $apiSecret);
$service = new TicketService(false, $authentication);

print_r($service->TicketListingBelongsToSeller(12, 1, 30));
print_r($service->TicketReasons());
var_dump($service->TicketRead(12345332, 12));
print_r($service->TicketListingAssignedToSeller(12, 1, 30));
var_dump($service->TicketAnswer(12, 1231231231231233123, 'ticket answer here'));
var_dump($service->TicketCreate(143872, 12, 'Ticket title here', 'Ticket question here'));

```