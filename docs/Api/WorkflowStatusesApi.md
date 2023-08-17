# OpenAPI\Client\WorkflowStatusesApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getStatus()**](WorkflowStatusesApi.md#getStatus) | **GET** /rest/api/2/status/{idOrName} | Get status |
| [**getStatuses()**](WorkflowStatusesApi.md#getStatuses) | **GET** /rest/api/2/status | Get all statuses |


## `getStatus()`

```php
getStatus($id_or_name): \OpenAPI\Client\Model\StatusDetails
```

Get status

Returns a status. The status must be associated with an active workflow to be returned.  If a name is used on more than one status, only the status found first is returned. Therefore, identifying the status by its ID may be preferable.  This operation can be accessed anonymously.  [Permissions](#permissions) required: None.

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


$apiInstance = new OpenAPI\Client\Api\WorkflowStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_or_name = 'id_or_name_example'; // string | The ID or name of the status.

try {
    $result = $apiInstance->getStatus($id_or_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowStatusesApi->getStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id_or_name** | **string**| The ID or name of the status. | |

### Return type

[**\OpenAPI\Client\Model\StatusDetails**](../Model/StatusDetails.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStatuses()`

```php
getStatuses(): \OpenAPI\Client\Model\StatusDetails[]
```

Get all statuses

Returns a list of all statuses associated with active workflows.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** None.

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


$apiInstance = new OpenAPI\Client\Api\WorkflowStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getStatuses();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowStatusesApi->getStatuses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\StatusDetails[]**](../Model/StatusDetails.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
