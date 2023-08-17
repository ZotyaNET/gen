# OpenAPI\Client\ProjectComponentsApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createComponent()**](ProjectComponentsApi.md#createComponent) | **POST** /rest/api/2/component | Create component |
| [**deleteComponent()**](ProjectComponentsApi.md#deleteComponent) | **DELETE** /rest/api/2/component/{id} | Delete component |
| [**getComponent()**](ProjectComponentsApi.md#getComponent) | **GET** /rest/api/2/component/{id} | Get component |
| [**getComponentRelatedIssues()**](ProjectComponentsApi.md#getComponentRelatedIssues) | **GET** /rest/api/2/component/{id}/relatedIssueCounts | Get component issues count |
| [**getProjectComponents()**](ProjectComponentsApi.md#getProjectComponents) | **GET** /rest/api/2/project/{projectIdOrKey}/components | Get project components |
| [**getProjectComponentsPaginated()**](ProjectComponentsApi.md#getProjectComponentsPaginated) | **GET** /rest/api/2/project/{projectIdOrKey}/component | Get project components paginated |
| [**updateComponent()**](ProjectComponentsApi.md#updateComponent) | **PUT** /rest/api/2/component/{id} | Update component |


## `createComponent()`

```php
createComponent($project_component): \OpenAPI\Client\Model\ProjectComponent
```

Create component

Creates a component. Use components to provide containers for issues within a project.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** *Administer projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project in which the component is created or *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\ProjectComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_component = {"assigneeType":"PROJECT_LEAD","description":"This is a Jira component","isAssigneeTypeValid":false,"leadAccountId":"5b10a2844c20165700ede21g","name":"Component 1","project":"HSP"}; // \OpenAPI\Client\Model\ProjectComponent

try {
    $result = $apiInstance->createComponent($project_component);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectComponentsApi->createComponent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_component** | [**\OpenAPI\Client\Model\ProjectComponent**](../Model/ProjectComponent.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProjectComponent**](../Model/ProjectComponent.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteComponent()`

```php
deleteComponent($id, $move_issues_to)
```

Delete component

Deletes a component.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** *Administer projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project containing the component or *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\ProjectComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the component.
$move_issues_to = 'move_issues_to_example'; // string | The ID of the component to replace the deleted component. If this value is null no replacement is made.

try {
    $apiInstance->deleteComponent($id, $move_issues_to);
} catch (Exception $e) {
    echo 'Exception when calling ProjectComponentsApi->deleteComponent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the component. | |
| **move_issues_to** | **string**| The ID of the component to replace the deleted component. If this value is null no replacement is made. | [optional] |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getComponent()`

```php
getComponent($id): \OpenAPI\Client\Model\ProjectComponent
```

Get component

Returns a component.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for project containing the component.

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


$apiInstance = new OpenAPI\Client\Api\ProjectComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the component.

try {
    $result = $apiInstance->getComponent($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectComponentsApi->getComponent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the component. | |

### Return type

[**\OpenAPI\Client\Model\ProjectComponent**](../Model/ProjectComponent.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getComponentRelatedIssues()`

```php
getComponentRelatedIssues($id): \OpenAPI\Client\Model\ComponentIssuesCount
```

Get component issues count

Returns the counts of issues assigned to the component.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** None.

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


$apiInstance = new OpenAPI\Client\Api\ProjectComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the component.

try {
    $result = $apiInstance->getComponentRelatedIssues($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectComponentsApi->getComponentRelatedIssues: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the component. | |

### Return type

[**\OpenAPI\Client\Model\ComponentIssuesCount**](../Model/ComponentIssuesCount.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProjectComponents()`

```php
getProjectComponents($project_id_or_key): \OpenAPI\Client\Model\ProjectComponent[]
```

Get project components

Returns all components in a project. See the [Get project components paginated](#api-rest-api-2-project-projectIdOrKey-component-get) resource if you want to get a full list of components with pagination.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** *Browse Projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project.

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


$apiInstance = new OpenAPI\Client\Api\ProjectComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id_or_key = 'project_id_or_key_example'; // string | The project ID or project key (case sensitive).

try {
    $result = $apiInstance->getProjectComponents($project_id_or_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectComponentsApi->getProjectComponents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id_or_key** | **string**| The project ID or project key (case sensitive). | |

### Return type

[**\OpenAPI\Client\Model\ProjectComponent[]**](../Model/ProjectComponent.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProjectComponentsPaginated()`

```php
getProjectComponentsPaginated($project_id_or_key, $start_at, $max_results, $order_by, $query): \OpenAPI\Client\Model\PageBeanComponentWithIssueCount
```

Get project components paginated

Returns a [paginated](#pagination) list of all components in a project. See the [Get project components](#api-rest-api-2-project-projectIdOrKey-components-get) resource if you want to get a full list of versions without pagination.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** *Browse Projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project.

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


$apiInstance = new OpenAPI\Client\Api\ProjectComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id_or_key = 'project_id_or_key_example'; // string | The project ID or project key (case sensitive).
$start_at = 0; // int | The index of the first item to return in a page of results (page offset).
$max_results = 50; // int | The maximum number of items to return per page.
$order_by = 'order_by_example'; // string | [Order](#ordering) the results by a field:   *  `description` Sorts by the component description.  *  `issueCount` Sorts by the count of issues associated with the component.  *  `lead` Sorts by the user key of the component's project lead.  *  `name` Sorts by component name.
$query = 'query_example'; // string | Filter the results using a literal string. Components with a matching `name` or `description` are returned (case insensitive).

try {
    $result = $apiInstance->getProjectComponentsPaginated($project_id_or_key, $start_at, $max_results, $order_by, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectComponentsApi->getProjectComponentsPaginated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id_or_key** | **string**| The project ID or project key (case sensitive). | |
| **start_at** | **int**| The index of the first item to return in a page of results (page offset). | [optional] [default to 0] |
| **max_results** | **int**| The maximum number of items to return per page. | [optional] [default to 50] |
| **order_by** | **string**| [Order](#ordering) the results by a field:   *  &#x60;description&#x60; Sorts by the component description.  *  &#x60;issueCount&#x60; Sorts by the count of issues associated with the component.  *  &#x60;lead&#x60; Sorts by the user key of the component&#39;s project lead.  *  &#x60;name&#x60; Sorts by component name. | [optional] |
| **query** | **string**| Filter the results using a literal string. Components with a matching &#x60;name&#x60; or &#x60;description&#x60; are returned (case insensitive). | [optional] |

### Return type

[**\OpenAPI\Client\Model\PageBeanComponentWithIssueCount**](../Model/PageBeanComponentWithIssueCount.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateComponent()`

```php
updateComponent($id, $project_component): \OpenAPI\Client\Model\ProjectComponent
```

Update component

Updates a component. Any fields included in the request are overwritten. If `leadAccountId` is an empty string (\"\") the component lead is removed.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** *Administer projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project containing the component or *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\ProjectComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the component.
$project_component = {"assigneeType":"PROJECT_LEAD","description":"This is a Jira component","isAssigneeTypeValid":false,"leadAccountId":"5b10a2844c20165700ede21g","name":"Component 1"}; // \OpenAPI\Client\Model\ProjectComponent

try {
    $result = $apiInstance->updateComponent($id, $project_component);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectComponentsApi->updateComponent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the component. | |
| **project_component** | [**\OpenAPI\Client\Model\ProjectComponent**](../Model/ProjectComponent.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProjectComponent**](../Model/ProjectComponent.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
