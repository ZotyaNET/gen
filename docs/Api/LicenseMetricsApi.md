# OpenAPI\Client\LicenseMetricsApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApproximateApplicationLicenseCount()**](LicenseMetricsApi.md#getApproximateApplicationLicenseCount) | **GET** /rest/api/2/license/approximateLicenseCount/product/{applicationKey} | Get approximate application license count |
| [**getApproximateLicenseCount()**](LicenseMetricsApi.md#getApproximateLicenseCount) | **GET** /rest/api/2/license/approximateLicenseCount | Get approximate license count |
| [**getLicense()**](LicenseMetricsApi.md#getLicense) | **GET** /rest/api/2/instance/license | Get license |


## `getApproximateApplicationLicenseCount()`

```php
getApproximateApplicationLicenseCount($application_key): \OpenAPI\Client\Model\LicenseMetric
```

Get approximate application license count

Returns the total approximate number of user accounts for a single Jira license. Note that this information is cached with a 7-day lifecycle and could be stale at the time of call.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\LicenseMetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_key = 'application_key_example'; // string | The ID of the application, represents a specific version of Jira.

try {
    $result = $apiInstance->getApproximateApplicationLicenseCount($application_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicenseMetricsApi->getApproximateApplicationLicenseCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_key** | **string**| The ID of the application, represents a specific version of Jira. | |

### Return type

[**\OpenAPI\Client\Model\LicenseMetric**](../Model/LicenseMetric.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApproximateLicenseCount()`

```php
getApproximateLicenseCount(): \OpenAPI\Client\Model\LicenseMetric
```

Get approximate license count

Returns the approximate number of user accounts across all Jira licenses. Note that this information is cached with a 7-day lifecycle and could be stale at the time of call.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\LicenseMetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getApproximateLicenseCount();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicenseMetricsApi->getApproximateLicenseCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\LicenseMetric**](../Model/LicenseMetric.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLicense()`

```php
getLicense(): \OpenAPI\Client\Model\License
```

Get license

Returns licensing information about the Jira instance.  **[Permissions](#permissions) required:** None.

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


$apiInstance = new OpenAPI\Client\Api\LicenseMetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getLicense();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicenseMetricsApi->getLicense: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\License**](../Model/License.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
