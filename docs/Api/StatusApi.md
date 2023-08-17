# OpenAPI\Client\StatusApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createStatuses()**](StatusApi.md#createStatuses) | **POST** /rest/api/2/statuses | Bulk create statuses |
| [**deleteStatusesById()**](StatusApi.md#deleteStatusesById) | **DELETE** /rest/api/2/statuses | Bulk delete Statuses |
| [**getStatusesById()**](StatusApi.md#getStatusesById) | **GET** /rest/api/2/statuses | Bulk get statuses |
| [**search()**](StatusApi.md#search) | **GET** /rest/api/2/statuses/search | Search statuses paginated |
| [**updateStatuses()**](StatusApi.md#updateStatuses) | **PUT** /rest/api/2/statuses | Bulk update statuses |


## `createStatuses()`

```php
createStatuses($status_create_request): \OpenAPI\Client\Model\JiraStatus[]
```

Bulk create statuses

Creates statuses for a global or project scope.  **[Permissions](#permissions) required:**   *  *Administer projects* [project permission.](https://confluence.atlassian.com/x/yodKLg)  *  *Administer Jira* [project permission.](https://confluence.atlassian.com/x/yodKLg)

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


$apiInstance = new OpenAPI\Client\Api\StatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status_create_request = {"scope":{"project":{"id":"1"},"type":"PROJECT"},"statuses":[{"description":"The issue is resolved","name":"Finished","statusCategory":"DONE"}]}; // \OpenAPI\Client\Model\StatusCreateRequest | Details of the statuses being created and their scope.

try {
    $result = $apiInstance->createStatuses($status_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatusApi->createStatuses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **status_create_request** | [**\OpenAPI\Client\Model\StatusCreateRequest**](../Model/StatusCreateRequest.md)| Details of the statuses being created and their scope. | |

### Return type

[**\OpenAPI\Client\Model\JiraStatus[]**](../Model/JiraStatus.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteStatusesById()`

```php
deleteStatusesById($id): mixed
```

Bulk delete Statuses

Deletes statuses by ID.  **[Permissions](#permissions) required:**   *  *Administer projects* [project permission.](https://confluence.atlassian.com/x/yodKLg)  *  *Administer Jira* [project permission.](https://confluence.atlassian.com/x/yodKLg)

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


$apiInstance = new OpenAPI\Client\Api\StatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = array('id_example'); // string[] | The list of status IDs. To include multiple IDs, provide an ampersand-separated list. For example, id=10000&id=10001.  Min items `1`, Max items `50`

try {
    $result = $apiInstance->deleteStatusesById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatusApi->deleteStatusesById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**string[]**](../Model/string.md)| The list of status IDs. To include multiple IDs, provide an ampersand-separated list. For example, id&#x3D;10000&amp;id&#x3D;10001.  Min items &#x60;1&#x60;, Max items &#x60;50&#x60; | [optional] |

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

## `getStatusesById()`

```php
getStatusesById($expand, $id): \OpenAPI\Client\Model\JiraStatus[]
```

Bulk get statuses

Returns a list of the statuses specified by one or more status IDs.  **[Permissions](#permissions) required:**   *  *Administer projects* [project permission.](https://confluence.atlassian.com/x/yodKLg)  *  *Administer Jira* [project permission.](https://confluence.atlassian.com/x/yodKLg)

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


$apiInstance = new OpenAPI\Client\Api\StatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$expand = 'expand_example'; // string | Use [expand](#expansion) to include additional information in the response. This parameter accepts a comma-separated list. Expand options include:   *  `usages` Returns the project and issue types that use the status in their workflow.  *  `workflowUsages` Returns the workflows that use the status.
$id = array('id_example'); // string[] | The list of status IDs. To include multiple IDs, provide an ampersand-separated list. For example, id=10000&id=10001.  Min items `1`, Max items `50`

try {
    $result = $apiInstance->getStatusesById($expand, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatusApi->getStatusesById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **expand** | **string**| Use [expand](#expansion) to include additional information in the response. This parameter accepts a comma-separated list. Expand options include:   *  &#x60;usages&#x60; Returns the project and issue types that use the status in their workflow.  *  &#x60;workflowUsages&#x60; Returns the workflows that use the status. | [optional] |
| **id** | [**string[]**](../Model/string.md)| The list of status IDs. To include multiple IDs, provide an ampersand-separated list. For example, id&#x3D;10000&amp;id&#x3D;10001.  Min items &#x60;1&#x60;, Max items &#x60;50&#x60; | [optional] |

### Return type

[**\OpenAPI\Client\Model\JiraStatus[]**](../Model/JiraStatus.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `search()`

```php
search($expand, $project_id, $start_at, $max_results, $search_string, $status_category): \OpenAPI\Client\Model\PageOfStatuses
```

Search statuses paginated

Returns a [paginated](https://developer.atlassian.com/cloud/jira/platform/rest/v3/intro/#pagination) list of statuses that match a search on name or project.  **[Permissions](#permissions) required:**   *  *Administer projects* [project permission.](https://confluence.atlassian.com/x/yodKLg)  *  *Administer Jira* [project permission.](https://confluence.atlassian.com/x/yodKLg)

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


$apiInstance = new OpenAPI\Client\Api\StatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$expand = 'expand_example'; // string | Use [expand](#expansion) to include additional information in the response. This parameter accepts a comma-separated list. Expand options include:   *  `usages` Returns the project and issue types that use the status in their workflow.  *  `workflowUsages` Returns the workflows that use the status.
$project_id = 'project_id_example'; // string | The project the status is part of or null for global statuses.
$start_at = 0; // int | The index of the first item to return in a page of results (page offset).
$max_results = 200; // int | The maximum number of items to return per page.
$search_string = 'search_string_example'; // string | Term to match status names against or null to search for all statuses in the search scope.
$status_category = 'status_category_example'; // string | Category of the status to filter by. The supported values are: `TODO`, `IN_PROGRESS`, and `DONE`.

try {
    $result = $apiInstance->search($expand, $project_id, $start_at, $max_results, $search_string, $status_category);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatusApi->search: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **expand** | **string**| Use [expand](#expansion) to include additional information in the response. This parameter accepts a comma-separated list. Expand options include:   *  &#x60;usages&#x60; Returns the project and issue types that use the status in their workflow.  *  &#x60;workflowUsages&#x60; Returns the workflows that use the status. | [optional] |
| **project_id** | **string**| The project the status is part of or null for global statuses. | [optional] |
| **start_at** | **int**| The index of the first item to return in a page of results (page offset). | [optional] [default to 0] |
| **max_results** | **int**| The maximum number of items to return per page. | [optional] [default to 200] |
| **search_string** | **string**| Term to match status names against or null to search for all statuses in the search scope. | [optional] |
| **status_category** | **string**| Category of the status to filter by. The supported values are: &#x60;TODO&#x60;, &#x60;IN_PROGRESS&#x60;, and &#x60;DONE&#x60;. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PageOfStatuses**](../Model/PageOfStatuses.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateStatuses()`

```php
updateStatuses($status_update_request): mixed
```

Bulk update statuses

Updates statuses by ID.  **[Permissions](#permissions) required:**   *  *Administer projects* [project permission.](https://confluence.atlassian.com/x/yodKLg)  *  *Administer Jira* [project permission.](https://confluence.atlassian.com/x/yodKLg)

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


$apiInstance = new OpenAPI\Client\Api\StatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status_update_request = {"statuses":[{"description":"The issue is resolved","id":"1000","name":"Finished","statusCategory":"DONE"}]}; // \OpenAPI\Client\Model\StatusUpdateRequest | The list of statuses that will be updated.

try {
    $result = $apiInstance->updateStatuses($status_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatusApi->updateStatuses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **status_update_request** | [**\OpenAPI\Client\Model\StatusUpdateRequest**](../Model/StatusUpdateRequest.md)| The list of statuses that will be updated. | |

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
