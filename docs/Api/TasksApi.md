# OpenAPI\Client\TasksApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelTask()**](TasksApi.md#cancelTask) | **POST** /rest/api/2/task/{taskId}/cancel | Cancel task |
| [**getTask()**](TasksApi.md#getTask) | **GET** /rest/api/2/task/{taskId} | Get task |


## `cancelTask()`

```php
cancelTask($task_id): mixed
```

Cancel task

Cancels a task.  **[Permissions](#permissions) required:** either of:   *  *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).  *  Creator of the task.

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


$apiInstance = new OpenAPI\Client\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string | The ID of the task.

try {
    $result = $apiInstance->cancelTask($task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->cancelTask: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **task_id** | **string**| The ID of the task. | |

### Return type

**mixed**

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTask()`

```php
getTask($task_id): \OpenAPI\Client\Model\TaskProgressBeanObject
```

Get task

Returns the status of a [long-running asynchronous task](#async).  When a task has finished, this operation returns the JSON blob applicable to the task. See the documentation of the operation that created the task for details. Task details are not permanently retained. As of September 2019, details are retained for 14 days although this period may change without notice.  **[Permissions](#permissions) required:** either of:   *  *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).  *  Creator of the task.

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


$apiInstance = new OpenAPI\Client\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string | The ID of the task.

try {
    $result = $apiInstance->getTask($task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->getTask: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **task_id** | **string**| The ID of the task. | |

### Return type

[**\OpenAPI\Client\Model\TaskProgressBeanObject**](../Model/TaskProgressBeanObject.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
