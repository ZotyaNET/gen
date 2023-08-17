# OpenAPI\Client\AppPropertiesApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addonPropertiesResourceDeleteAddonPropertyDelete()**](AppPropertiesApi.md#addonPropertiesResourceDeleteAddonPropertyDelete) | **DELETE** /rest/atlassian-connect/1/addons/{addonKey}/properties/{propertyKey} | Delete app property |
| [**addonPropertiesResourceDeleteAppPropertyDelete()**](AppPropertiesApi.md#addonPropertiesResourceDeleteAppPropertyDelete) | **DELETE** /rest/forge/1/app/properties/{propertyKey} | Delete app property (Forge) |
| [**addonPropertiesResourceGetAddonPropertiesGet()**](AppPropertiesApi.md#addonPropertiesResourceGetAddonPropertiesGet) | **GET** /rest/atlassian-connect/1/addons/{addonKey}/properties | Get app properties |
| [**addonPropertiesResourceGetAddonPropertyGet()**](AppPropertiesApi.md#addonPropertiesResourceGetAddonPropertyGet) | **GET** /rest/atlassian-connect/1/addons/{addonKey}/properties/{propertyKey} | Get app property |
| [**addonPropertiesResourcePutAddonPropertyPut()**](AppPropertiesApi.md#addonPropertiesResourcePutAddonPropertyPut) | **PUT** /rest/atlassian-connect/1/addons/{addonKey}/properties/{propertyKey} | Set app property |
| [**addonPropertiesResourcePutAppPropertyPut()**](AppPropertiesApi.md#addonPropertiesResourcePutAppPropertyPut) | **PUT** /rest/forge/1/app/properties/{propertyKey} | Set app property (Forge) |


## `addonPropertiesResourceDeleteAddonPropertyDelete()`

```php
addonPropertiesResourceDeleteAddonPropertyDelete($addon_key, $property_key)
```

Delete app property

Deletes an app's property.  **[Permissions](#permissions) required:** Only a Connect app whose key matches `addonKey` can make this request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppPropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$addon_key = 'addon_key_example'; // string | The key of the app, as defined in its descriptor.
$property_key = 'property_key_example'; // string | The key of the property.

try {
    $apiInstance->addonPropertiesResourceDeleteAddonPropertyDelete($addon_key, $property_key);
} catch (Exception $e) {
    echo 'Exception when calling AppPropertiesApi->addonPropertiesResourceDeleteAddonPropertyDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **addon_key** | **string**| The key of the app, as defined in its descriptor. | |
| **property_key** | **string**| The key of the property. | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addonPropertiesResourceDeleteAppPropertyDelete()`

```php
addonPropertiesResourceDeleteAppPropertyDelete($property_key)
```

Delete app property (Forge)

Deletes a Forge app's property.  **[Permissions](#permissions) required:** Only Forge apps can make this request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AppPropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_key = 'property_key_example'; // string | The key of the property.

try {
    $apiInstance->addonPropertiesResourceDeleteAppPropertyDelete($property_key);
} catch (Exception $e) {
    echo 'Exception when calling AppPropertiesApi->addonPropertiesResourceDeleteAppPropertyDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **property_key** | **string**| The key of the property. | |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addonPropertiesResourceGetAddonPropertiesGet()`

```php
addonPropertiesResourceGetAddonPropertiesGet($addon_key): \OpenAPI\Client\Model\PropertyKeys
```

Get app properties

Gets all the properties of an app.  **[Permissions](#permissions) required:** Only a Connect app whose key matches `addonKey` can make this request. Additionally, Forge apps published on the Marketplace can access properties of Connect apps they were [migrated from](https://developer.atlassian.com/platform/forge/build-a-connect-on-forge-app/).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AppPropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$addon_key = 'addon_key_example'; // string | The key of the app, as defined in its descriptor.

try {
    $result = $apiInstance->addonPropertiesResourceGetAddonPropertiesGet($addon_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppPropertiesApi->addonPropertiesResourceGetAddonPropertiesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **addon_key** | **string**| The key of the app, as defined in its descriptor. | |

### Return type

[**\OpenAPI\Client\Model\PropertyKeys**](../Model/PropertyKeys.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addonPropertiesResourceGetAddonPropertyGet()`

```php
addonPropertiesResourceGetAddonPropertyGet($addon_key, $property_key): \OpenAPI\Client\Model\EntityProperty
```

Get app property

Returns the key and value of an app's property.  **[Permissions](#permissions) required:** Only a Connect app whose key matches `addonKey` can make this request. Additionally, Forge apps published on the Marketplace can access properties of Connect apps they were [migrated from](https://developer.atlassian.com/platform/forge/build-a-connect-on-forge-app/).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AppPropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$addon_key = 'addon_key_example'; // string | The key of the app, as defined in its descriptor.
$property_key = 'property_key_example'; // string | The key of the property.

try {
    $result = $apiInstance->addonPropertiesResourceGetAddonPropertyGet($addon_key, $property_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppPropertiesApi->addonPropertiesResourceGetAddonPropertyGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **addon_key** | **string**| The key of the app, as defined in its descriptor. | |
| **property_key** | **string**| The key of the property. | |

### Return type

[**\OpenAPI\Client\Model\EntityProperty**](../Model/EntityProperty.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addonPropertiesResourcePutAddonPropertyPut()`

```php
addonPropertiesResourcePutAddonPropertyPut($addon_key, $property_key, $body): \OpenAPI\Client\Model\OperationMessage
```

Set app property

Sets the value of an app's property. Use this resource to store custom data for your app.  The value of the request body must be a [valid](http://tools.ietf.org/html/rfc4627), non-empty JSON blob. The maximum length is 32768 characters.  **[Permissions](#permissions) required:** Only a Connect app whose key matches `addonKey` can make this request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppPropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$addon_key = 'addon_key_example'; // string | The key of the app, as defined in its descriptor.
$property_key = 'property_key_example'; // string | The key of the property.
$body = NULL; // mixed

try {
    $result = $apiInstance->addonPropertiesResourcePutAddonPropertyPut($addon_key, $property_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppPropertiesApi->addonPropertiesResourcePutAddonPropertyPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **addon_key** | **string**| The key of the app, as defined in its descriptor. | |
| **property_key** | **string**| The key of the property. | |
| **body** | **mixed**|  | |

### Return type

[**\OpenAPI\Client\Model\OperationMessage**](../Model/OperationMessage.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addonPropertiesResourcePutAppPropertyPut()`

```php
addonPropertiesResourcePutAppPropertyPut($property_key, $body): \OpenAPI\Client\Model\OperationMessage
```

Set app property (Forge)

Sets the value of a Forge app's property. These values can be retrieved in [Jira expressions](https://developer.atlassian.com/cloud/jira/platform/jira-expressions/) through the `app` [context variable](https://developer.atlassian.com/cloud/jira/platform/jira-expressions/#context-variables).  For other use cases, use the [Storage API](https://developer.atlassian.com/platform/forge/runtime-reference/storage-api/).  The value of the request body must be a [valid](http://tools.ietf.org/html/rfc4627), non-empty JSON blob. The maximum length is 32768 characters.  **[Permissions](#permissions) required:** Only Forge apps can make this request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AppPropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_key = 'property_key_example'; // string | The key of the property.
$body = NULL; // mixed

try {
    $result = $apiInstance->addonPropertiesResourcePutAppPropertyPut($property_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppPropertiesApi->addonPropertiesResourcePutAppPropertyPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **property_key** | **string**| The key of the property. | |
| **body** | **mixed**|  | |

### Return type

[**\OpenAPI\Client\Model\OperationMessage**](../Model/OperationMessage.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
