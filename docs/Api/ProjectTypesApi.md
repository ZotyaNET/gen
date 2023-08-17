# OpenAPI\Client\ProjectTypesApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAccessibleProjectTypeByKey()**](ProjectTypesApi.md#getAccessibleProjectTypeByKey) | **GET** /rest/api/2/project/type/{projectTypeKey}/accessible | Get accessible project type by key |
| [**getAllAccessibleProjectTypes()**](ProjectTypesApi.md#getAllAccessibleProjectTypes) | **GET** /rest/api/2/project/type/accessible | Get licensed project types |
| [**getAllProjectTypes()**](ProjectTypesApi.md#getAllProjectTypes) | **GET** /rest/api/2/project/type | Get all project types |
| [**getProjectTypeByKey()**](ProjectTypesApi.md#getProjectTypeByKey) | **GET** /rest/api/2/project/type/{projectTypeKey} | Get project type by key |


## `getAccessibleProjectTypeByKey()`

```php
getAccessibleProjectTypeByKey($project_type_key): \OpenAPI\Client\Model\ProjectType
```

Get accessible project type by key

Returns a [project type](https://confluence.atlassian.com/x/Var1Nw) if it is accessible to the user.  **[Permissions](#permissions) required:** Permission to access Jira.

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


$apiInstance = new OpenAPI\Client\Api\ProjectTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_type_key = 'project_type_key_example'; // string | The key of the project type.

try {
    $result = $apiInstance->getAccessibleProjectTypeByKey($project_type_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTypesApi->getAccessibleProjectTypeByKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_type_key** | **string**| The key of the project type. | |

### Return type

[**\OpenAPI\Client\Model\ProjectType**](../Model/ProjectType.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllAccessibleProjectTypes()`

```php
getAllAccessibleProjectTypes(): \OpenAPI\Client\Model\ProjectType[]
```

Get licensed project types

Returns all [project types](https://confluence.atlassian.com/x/Var1Nw) with a valid license.

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


$apiInstance = new OpenAPI\Client\Api\ProjectTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllAccessibleProjectTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTypesApi->getAllAccessibleProjectTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ProjectType[]**](../Model/ProjectType.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllProjectTypes()`

```php
getAllProjectTypes(): \OpenAPI\Client\Model\ProjectType[]
```

Get all project types

Returns all [project types](https://confluence.atlassian.com/x/Var1Nw), whether or not the instance has a valid license for each type.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** None.

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


$apiInstance = new OpenAPI\Client\Api\ProjectTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllProjectTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTypesApi->getAllProjectTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ProjectType[]**](../Model/ProjectType.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProjectTypeByKey()`

```php
getProjectTypeByKey($project_type_key): \OpenAPI\Client\Model\ProjectType
```

Get project type by key

Returns a [project type](https://confluence.atlassian.com/x/Var1Nw).  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** None.

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


$apiInstance = new OpenAPI\Client\Api\ProjectTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_type_key = 'project_type_key_example'; // string | The key of the project type.

try {
    $result = $apiInstance->getProjectTypeByKey($project_type_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTypesApi->getProjectTypeByKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_type_key** | **string**| The key of the project type. | |

### Return type

[**\OpenAPI\Client\Model\ProjectType**](../Model/ProjectType.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
