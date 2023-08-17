# OpenAPI\Client\ProjectKeyAndNameValidationApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getValidProjectKey()**](ProjectKeyAndNameValidationApi.md#getValidProjectKey) | **GET** /rest/api/2/projectvalidate/validProjectKey | Get valid project key |
| [**getValidProjectName()**](ProjectKeyAndNameValidationApi.md#getValidProjectName) | **GET** /rest/api/2/projectvalidate/validProjectName | Get valid project name |
| [**validateProjectKey()**](ProjectKeyAndNameValidationApi.md#validateProjectKey) | **GET** /rest/api/2/projectvalidate/key | Validate project key |


## `getValidProjectKey()`

```php
getValidProjectKey($key): string
```

Get valid project key

Validates a project key and, if the key is invalid or in use, generates a valid random string for the project key.  **[Permissions](#permissions) required:** None.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ProjectKeyAndNameValidationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = HSP; // string | The project key.

try {
    $result = $apiInstance->getValidProjectKey($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectKeyAndNameValidationApi->getValidProjectKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The project key. | [optional] |

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getValidProjectName()`

```php
getValidProjectName($name): string
```

Get valid project name

Checks that a project name isn't in use. If the name isn't in use, the passed string is returned. If the name is in use, this operation attempts to generate a valid project name based on the one supplied, usually by adding a sequence number. If a valid project name cannot be generated, a 404 response is returned.  **[Permissions](#permissions) required:** None.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ProjectKeyAndNameValidationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | The project name.

try {
    $result = $apiInstance->getValidProjectName($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectKeyAndNameValidationApi->getValidProjectName: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The project name. | |

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `validateProjectKey()`

```php
validateProjectKey($key): \OpenAPI\Client\Model\ErrorCollection
```

Validate project key

Validates a project key by confirming the key is a valid string and not in use.  **[Permissions](#permissions) required:** None.

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


$apiInstance = new OpenAPI\Client\Api\ProjectKeyAndNameValidationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = HSP; // string | The project key.

try {
    $result = $apiInstance->validateProjectKey($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectKeyAndNameValidationApi->validateProjectKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The project key. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ErrorCollection**](../Model/ErrorCollection.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
