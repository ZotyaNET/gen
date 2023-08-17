# OpenAPI\Client\TimeTrackingApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAvailableTimeTrackingImplementations()**](TimeTrackingApi.md#getAvailableTimeTrackingImplementations) | **GET** /rest/api/2/configuration/timetracking/list | Get all time tracking providers |
| [**getSelectedTimeTrackingImplementation()**](TimeTrackingApi.md#getSelectedTimeTrackingImplementation) | **GET** /rest/api/2/configuration/timetracking | Get selected time tracking provider |
| [**getSharedTimeTrackingConfiguration()**](TimeTrackingApi.md#getSharedTimeTrackingConfiguration) | **GET** /rest/api/2/configuration/timetracking/options | Get time tracking settings |
| [**selectTimeTrackingImplementation()**](TimeTrackingApi.md#selectTimeTrackingImplementation) | **PUT** /rest/api/2/configuration/timetracking | Select time tracking provider |
| [**setSharedTimeTrackingConfiguration()**](TimeTrackingApi.md#setSharedTimeTrackingConfiguration) | **PUT** /rest/api/2/configuration/timetracking/options | Set time tracking settings |


## `getAvailableTimeTrackingImplementations()`

```php
getAvailableTimeTrackingImplementations(): \OpenAPI\Client\Model\TimeTrackingProvider[]
```

Get all time tracking providers

Returns all time tracking providers. By default, Jira only has one time tracking provider: *JIRA provided time tracking*. However, you can install other time tracking providers via apps from the Atlassian Marketplace. For more information on time tracking providers, see the documentation for the [ Time Tracking Provider](https://developer.atlassian.com/cloud/jira/platform/modules/time-tracking-provider/) module.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\TimeTrackingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAvailableTimeTrackingImplementations();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeTrackingApi->getAvailableTimeTrackingImplementations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\TimeTrackingProvider[]**](../Model/TimeTrackingProvider.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSelectedTimeTrackingImplementation()`

```php
getSelectedTimeTrackingImplementation(): \OpenAPI\Client\Model\TimeTrackingProvider
```

Get selected time tracking provider

Returns the time tracking provider that is currently selected. Note that if time tracking is disabled, then a successful but empty response is returned.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\TimeTrackingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getSelectedTimeTrackingImplementation();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeTrackingApi->getSelectedTimeTrackingImplementation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\TimeTrackingProvider**](../Model/TimeTrackingProvider.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSharedTimeTrackingConfiguration()`

```php
getSharedTimeTrackingConfiguration(): \OpenAPI\Client\Model\TimeTrackingConfiguration
```

Get time tracking settings

Returns the time tracking settings. This includes settings such as the time format, default time unit, and others. For more information, see [Configuring time tracking](https://confluence.atlassian.com/x/qoXKM).  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\TimeTrackingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getSharedTimeTrackingConfiguration();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeTrackingApi->getSharedTimeTrackingConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\TimeTrackingConfiguration**](../Model/TimeTrackingConfiguration.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `selectTimeTrackingImplementation()`

```php
selectTimeTrackingImplementation($time_tracking_provider): mixed
```

Select time tracking provider

Selects a time tracking provider.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\TimeTrackingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$time_tracking_provider = {"key":"Jira"}; // \OpenAPI\Client\Model\TimeTrackingProvider

try {
    $result = $apiInstance->selectTimeTrackingImplementation($time_tracking_provider);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeTrackingApi->selectTimeTrackingImplementation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **time_tracking_provider** | [**\OpenAPI\Client\Model\TimeTrackingProvider**](../Model/TimeTrackingProvider.md)|  | |

### Return type

**mixed**

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setSharedTimeTrackingConfiguration()`

```php
setSharedTimeTrackingConfiguration($time_tracking_configuration): \OpenAPI\Client\Model\TimeTrackingConfiguration
```

Set time tracking settings

Sets the time tracking settings.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\TimeTrackingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$time_tracking_configuration = {"defaultUnit":"hour","timeFormat":"pretty","workingDaysPerWeek":5.5,"workingHoursPerDay":7.6}; // \OpenAPI\Client\Model\TimeTrackingConfiguration

try {
    $result = $apiInstance->setSharedTimeTrackingConfiguration($time_tracking_configuration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeTrackingApi->setSharedTimeTrackingConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **time_tracking_configuration** | [**\OpenAPI\Client\Model\TimeTrackingConfiguration**](../Model/TimeTrackingConfiguration.md)|  | |

### Return type

[**\OpenAPI\Client\Model\TimeTrackingConfiguration**](../Model/TimeTrackingConfiguration.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
