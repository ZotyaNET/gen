# OpenAPI\Client\WorkflowStatusCategoriesApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getStatusCategories()**](WorkflowStatusCategoriesApi.md#getStatusCategories) | **GET** /rest/api/2/statuscategory | Get all status categories |
| [**getStatusCategory()**](WorkflowStatusCategoriesApi.md#getStatusCategory) | **GET** /rest/api/2/statuscategory/{idOrKey} | Get status category |


## `getStatusCategories()`

```php
getStatusCategories(): \OpenAPI\Client\Model\StatusCategory[]
```

Get all status categories

Returns a list of all status categories.  **[Permissions](#permissions) required:** Permission to access Jira.

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


$apiInstance = new OpenAPI\Client\Api\WorkflowStatusCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getStatusCategories();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowStatusCategoriesApi->getStatusCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\StatusCategory[]**](../Model/StatusCategory.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStatusCategory()`

```php
getStatusCategory($id_or_key): \OpenAPI\Client\Model\StatusCategory
```

Get status category

Returns a status category. Status categories provided a mechanism for categorizing [statuses](#api-rest-api-2-status-idOrName-get).  **[Permissions](#permissions) required:** Permission to access Jira.

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


$apiInstance = new OpenAPI\Client\Api\WorkflowStatusCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_or_key = 'id_or_key_example'; // string | The ID or key of the status category.

try {
    $result = $apiInstance->getStatusCategory($id_or_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowStatusCategoriesApi->getStatusCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id_or_key** | **string**| The ID or key of the status category. | |

### Return type

[**\OpenAPI\Client\Model\StatusCategory**](../Model/StatusCategory.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
