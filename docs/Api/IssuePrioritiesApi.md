# OpenAPI\Client\IssuePrioritiesApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPriority()**](IssuePrioritiesApi.md#createPriority) | **POST** /rest/api/2/priority | Create priority |
| [**deletePriority()**](IssuePrioritiesApi.md#deletePriority) | **DELETE** /rest/api/2/priority/{id} | Delete priority |
| [**getPriorities()**](IssuePrioritiesApi.md#getPriorities) | **GET** /rest/api/2/priority | Get priorities |
| [**getPriority()**](IssuePrioritiesApi.md#getPriority) | **GET** /rest/api/2/priority/{id} | Get priority |
| [**movePriorities()**](IssuePrioritiesApi.md#movePriorities) | **PUT** /rest/api/2/priority/move | Move priorities |
| [**searchPriorities()**](IssuePrioritiesApi.md#searchPriorities) | **GET** /rest/api/2/priority/search | Search priorities |
| [**setDefaultPriority()**](IssuePrioritiesApi.md#setDefaultPriority) | **PUT** /rest/api/2/priority/default | Set default priority |
| [**updatePriority()**](IssuePrioritiesApi.md#updatePriority) | **PUT** /rest/api/2/priority/{id} | Update priority |


## `createPriority()`

```php
createPriority($request_body): \OpenAPI\Client\Model\PriorityId
```

Create priority

Creates an issue priority.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssuePrioritiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_body = {"description":"My priority description","iconUrl":"images/icons/priorities/major.png","name":"My new priority","statusColor":"#ABCDEF"}; // array<string,mixed>

try {
    $result = $apiInstance->createPriority($request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuePrioritiesApi->createPriority: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_body** | [**array<string,mixed>**](../Model/mixed.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PriorityId**](../Model/PriorityId.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePriority()`

```php
deletePriority($id, $replace_with)
```

Delete priority

*Deprecated: please refer to the* [changelog](https://developer.atlassian.com/changelog/#CHANGE-1066) *for more details.*  Deletes an issue priority.  This operation is [asynchronous](#async). Follow the `location` link in the response to determine the status of the task and use [Get task](#api-rest-api-2-task-taskId-get) to obtain subsequent updates.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssuePrioritiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the issue priority.
$replace_with = 'replace_with_example'; // string | The ID of the issue priority that will replace the currently selected resolution.

try {
    $apiInstance->deletePriority($id, $replace_with);
} catch (Exception $e) {
    echo 'Exception when calling IssuePrioritiesApi->deletePriority: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the issue priority. | |
| **replace_with** | **string**| The ID of the issue priority that will replace the currently selected resolution. | |

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

## `getPriorities()`

```php
getPriorities(): \OpenAPI\Client\Model\Priority[]
```

Get priorities

Returns the list of all issue priorities.  **[Permissions](#permissions) required:** Permission to access Jira.

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


$apiInstance = new OpenAPI\Client\Api\IssuePrioritiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getPriorities();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuePrioritiesApi->getPriorities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Priority[]**](../Model/Priority.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPriority()`

```php
getPriority($id): \OpenAPI\Client\Model\Priority
```

Get priority

Returns an issue priority.  **[Permissions](#permissions) required:** Permission to access Jira.

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


$apiInstance = new OpenAPI\Client\Api\IssuePrioritiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the issue priority.

try {
    $result = $apiInstance->getPriority($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuePrioritiesApi->getPriority: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the issue priority. | |

### Return type

[**\OpenAPI\Client\Model\Priority**](../Model/Priority.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `movePriorities()`

```php
movePriorities($reorder_issue_priorities): mixed
```

Move priorities

Changes the order of issue priorities.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssuePrioritiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reorder_issue_priorities = {"after":"10003","ids":["10004","10005"]}; // \OpenAPI\Client\Model\ReorderIssuePriorities

try {
    $result = $apiInstance->movePriorities($reorder_issue_priorities);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuePrioritiesApi->movePriorities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reorder_issue_priorities** | [**\OpenAPI\Client\Model\ReorderIssuePriorities**](../Model/ReorderIssuePriorities.md)|  | |

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

## `searchPriorities()`

```php
searchPriorities($start_at, $max_results, $id, $project_id, $only_default): \OpenAPI\Client\Model\PageBeanPriority
```

Search priorities

Returns a [paginated](#pagination) list of priorities. The list can contain all priorities or a subset determined by any combination of these criteria:   *  a list of priority IDs. Any invalid priority IDs are ignored.  *  a list of project IDs. Only priorities that are available in these projects will be returned. Any invalid project IDs are ignored.  *  whether the field configuration is a default. This returns priorities from company-managed (classic) projects only, as there is no concept of default priorities in team-managed projects.  **[Permissions](#permissions) required:** Permission to access Jira.

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


$apiInstance = new OpenAPI\Client\Api\IssuePrioritiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_at = '0'; // string | The index of the first item to return in a page of results (page offset).
$max_results = '50'; // string | The maximum number of items to return per page.
$id = array('id_example'); // string[] | The list of priority IDs. To include multiple IDs, provide an ampersand-separated list. For example, `id=2&id=3`.
$project_id = array('project_id_example'); // string[] | The list of projects IDs. To include multiple IDs, provide an ampersand-separated list. For example, `projectid=10010&projectid=10111`.
$only_default = false; // bool | Whether only the default priority is returned.

try {
    $result = $apiInstance->searchPriorities($start_at, $max_results, $id, $project_id, $only_default);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuePrioritiesApi->searchPriorities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_at** | **string**| The index of the first item to return in a page of results (page offset). | [optional] [default to &#39;0&#39;] |
| **max_results** | **string**| The maximum number of items to return per page. | [optional] [default to &#39;50&#39;] |
| **id** | [**string[]**](../Model/string.md)| The list of priority IDs. To include multiple IDs, provide an ampersand-separated list. For example, &#x60;id&#x3D;2&amp;id&#x3D;3&#x60;. | [optional] |
| **project_id** | [**string[]**](../Model/string.md)| The list of projects IDs. To include multiple IDs, provide an ampersand-separated list. For example, &#x60;projectid&#x3D;10010&amp;projectid&#x3D;10111&#x60;. | [optional] |
| **only_default** | **bool**| Whether only the default priority is returned. | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\PageBeanPriority**](../Model/PageBeanPriority.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setDefaultPriority()`

```php
setDefaultPriority($set_default_priority_request): mixed
```

Set default priority

Sets default issue priority.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssuePrioritiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$set_default_priority_request = {"id":"3"}; // \OpenAPI\Client\Model\SetDefaultPriorityRequest

try {
    $result = $apiInstance->setDefaultPriority($set_default_priority_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuePrioritiesApi->setDefaultPriority: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **set_default_priority_request** | [**\OpenAPI\Client\Model\SetDefaultPriorityRequest**](../Model/SetDefaultPriorityRequest.md)|  | |

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

## `updatePriority()`

```php
updatePriority($id, $request_body): mixed
```

Update priority

Updates an issue priority.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssuePrioritiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the issue priority.
$request_body = {"description":"My updated priority description","iconUrl":"images/icons/priorities/minor.png","name":"My updated priority","statusColor":"#123456"}; // array<string,mixed>

try {
    $result = $apiInstance->updatePriority($id, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuePrioritiesApi->updatePriority: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the issue priority. | |
| **request_body** | [**array<string,mixed>**](../Model/mixed.md)|  | |

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
