# OpenAPI\Client\IssueTypeSchemesApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addIssueTypesToIssueTypeScheme()**](IssueTypeSchemesApi.md#addIssueTypesToIssueTypeScheme) | **PUT** /rest/api/2/issuetypescheme/{issueTypeSchemeId}/issuetype | Add issue types to issue type scheme |
| [**assignIssueTypeSchemeToProject()**](IssueTypeSchemesApi.md#assignIssueTypeSchemeToProject) | **PUT** /rest/api/2/issuetypescheme/project | Assign issue type scheme to project |
| [**createIssueTypeScheme()**](IssueTypeSchemesApi.md#createIssueTypeScheme) | **POST** /rest/api/2/issuetypescheme | Create issue type scheme |
| [**deleteIssueTypeScheme()**](IssueTypeSchemesApi.md#deleteIssueTypeScheme) | **DELETE** /rest/api/2/issuetypescheme/{issueTypeSchemeId} | Delete issue type scheme |
| [**getAllIssueTypeSchemes()**](IssueTypeSchemesApi.md#getAllIssueTypeSchemes) | **GET** /rest/api/2/issuetypescheme | Get all issue type schemes |
| [**getIssueTypeSchemeForProjects()**](IssueTypeSchemesApi.md#getIssueTypeSchemeForProjects) | **GET** /rest/api/2/issuetypescheme/project | Get issue type schemes for projects |
| [**getIssueTypeSchemesMapping()**](IssueTypeSchemesApi.md#getIssueTypeSchemesMapping) | **GET** /rest/api/2/issuetypescheme/mapping | Get issue type scheme items |
| [**removeIssueTypeFromIssueTypeScheme()**](IssueTypeSchemesApi.md#removeIssueTypeFromIssueTypeScheme) | **DELETE** /rest/api/2/issuetypescheme/{issueTypeSchemeId}/issuetype/{issueTypeId} | Remove issue type from issue type scheme |
| [**reorderIssueTypesInIssueTypeScheme()**](IssueTypeSchemesApi.md#reorderIssueTypesInIssueTypeScheme) | **PUT** /rest/api/2/issuetypescheme/{issueTypeSchemeId}/issuetype/move | Change order of issue types |
| [**updateIssueTypeScheme()**](IssueTypeSchemesApi.md#updateIssueTypeScheme) | **PUT** /rest/api/2/issuetypescheme/{issueTypeSchemeId} | Update issue type scheme |


## `addIssueTypesToIssueTypeScheme()`

```php
addIssueTypesToIssueTypeScheme($issue_type_scheme_id, $issue_type_ids): mixed
```

Add issue types to issue type scheme

Adds issue types to an issue type scheme.  The added issue types are appended to the issue types list.  If any of the issue types exist in the issue type scheme, the operation fails and no issue types are added.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueTypeSchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_type_scheme_id = 56; // int | The ID of the issue type scheme.
$issue_type_ids = {"issueTypeIds":["10000","10002","10003"]}; // \OpenAPI\Client\Model\IssueTypeIds

try {
    $result = $apiInstance->addIssueTypesToIssueTypeScheme($issue_type_scheme_id, $issue_type_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueTypeSchemesApi->addIssueTypesToIssueTypeScheme: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_type_scheme_id** | **int**| The ID of the issue type scheme. | |
| **issue_type_ids** | [**\OpenAPI\Client\Model\IssueTypeIds**](../Model/IssueTypeIds.md)|  | |

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

## `assignIssueTypeSchemeToProject()`

```php
assignIssueTypeSchemeToProject($issue_type_scheme_project_association): mixed
```

Assign issue type scheme to project

Assigns an issue type scheme to a project.  If any issues in the project are assigned issue types not present in the new scheme, the operation will fail. To complete the assignment those issues must be updated to use issue types in the new scheme.  Issue type schemes can only be assigned to classic projects.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueTypeSchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_type_scheme_project_association = {"issueTypeSchemeId":"10000","projectId":"10000"}; // \OpenAPI\Client\Model\IssueTypeSchemeProjectAssociation

try {
    $result = $apiInstance->assignIssueTypeSchemeToProject($issue_type_scheme_project_association);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueTypeSchemesApi->assignIssueTypeSchemeToProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_type_scheme_project_association** | [**\OpenAPI\Client\Model\IssueTypeSchemeProjectAssociation**](../Model/IssueTypeSchemeProjectAssociation.md)|  | |

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

## `createIssueTypeScheme()`

```php
createIssueTypeScheme($issue_type_scheme_details): \OpenAPI\Client\Model\IssueTypeSchemeID
```

Create issue type scheme

Creates an issue type scheme.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueTypeSchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_type_scheme_details = {"defaultIssueTypeId":"10002","description":"A collection of issue types suited to use in a kanban style project.","issueTypeIds":["10001","10002","10003"],"name":"Kanban Issue Type Scheme"}; // \OpenAPI\Client\Model\IssueTypeSchemeDetails

try {
    $result = $apiInstance->createIssueTypeScheme($issue_type_scheme_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueTypeSchemesApi->createIssueTypeScheme: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_type_scheme_details** | [**\OpenAPI\Client\Model\IssueTypeSchemeDetails**](../Model/IssueTypeSchemeDetails.md)|  | |

### Return type

[**\OpenAPI\Client\Model\IssueTypeSchemeID**](../Model/IssueTypeSchemeID.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteIssueTypeScheme()`

```php
deleteIssueTypeScheme($issue_type_scheme_id): mixed
```

Delete issue type scheme

Deletes an issue type scheme.  Only issue type schemes used in classic projects can be deleted.  Any projects assigned to the scheme are reassigned to the default issue type scheme.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueTypeSchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_type_scheme_id = 56; // int | The ID of the issue type scheme.

try {
    $result = $apiInstance->deleteIssueTypeScheme($issue_type_scheme_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueTypeSchemesApi->deleteIssueTypeScheme: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_type_scheme_id** | **int**| The ID of the issue type scheme. | |

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

## `getAllIssueTypeSchemes()`

```php
getAllIssueTypeSchemes($start_at, $max_results, $id, $order_by, $expand, $query_string): \OpenAPI\Client\Model\PageBeanIssueTypeScheme
```

Get all issue type schemes

Returns a [paginated](#pagination) list of issue type schemes.  Only issue type schemes used in classic projects are returned.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueTypeSchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_at = 0; // int | The index of the first item to return in a page of results (page offset).
$max_results = 50; // int | The maximum number of items to return per page.
$id = array(56); // int[] | The list of issue type schemes IDs. To include multiple IDs, provide an ampersand-separated list. For example, `id=10000&id=10001`.
$order_by = 'id'; // string | [Order](#ordering) the results by a field:   *  `name` Sorts by issue type scheme name.  *  `id` Sorts by issue type scheme ID.
$expand = ''; // string | Use [expand](#expansion) to include additional information in the response. This parameter accepts a comma-separated list. Expand options include:   *  `projects` For each issue type schemes, returns information about the projects the issue type scheme is assigned to.  *  `issueTypes` For each issue type schemes, returns information about the issueTypes the issue type scheme have.
$query_string = ''; // string | String used to perform a case-insensitive partial match with issue type scheme name.

try {
    $result = $apiInstance->getAllIssueTypeSchemes($start_at, $max_results, $id, $order_by, $expand, $query_string);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueTypeSchemesApi->getAllIssueTypeSchemes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_at** | **int**| The index of the first item to return in a page of results (page offset). | [optional] [default to 0] |
| **max_results** | **int**| The maximum number of items to return per page. | [optional] [default to 50] |
| **id** | [**int[]**](../Model/int.md)| The list of issue type schemes IDs. To include multiple IDs, provide an ampersand-separated list. For example, &#x60;id&#x3D;10000&amp;id&#x3D;10001&#x60;. | [optional] |
| **order_by** | **string**| [Order](#ordering) the results by a field:   *  &#x60;name&#x60; Sorts by issue type scheme name.  *  &#x60;id&#x60; Sorts by issue type scheme ID. | [optional] [default to &#39;id&#39;] |
| **expand** | **string**| Use [expand](#expansion) to include additional information in the response. This parameter accepts a comma-separated list. Expand options include:   *  &#x60;projects&#x60; For each issue type schemes, returns information about the projects the issue type scheme is assigned to.  *  &#x60;issueTypes&#x60; For each issue type schemes, returns information about the issueTypes the issue type scheme have. | [optional] [default to &#39;&#39;] |
| **query_string** | **string**| String used to perform a case-insensitive partial match with issue type scheme name. | [optional] [default to &#39;&#39;] |

### Return type

[**\OpenAPI\Client\Model\PageBeanIssueTypeScheme**](../Model/PageBeanIssueTypeScheme.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIssueTypeSchemeForProjects()`

```php
getIssueTypeSchemeForProjects($project_id, $start_at, $max_results): \OpenAPI\Client\Model\PageBeanIssueTypeSchemeProjects
```

Get issue type schemes for projects

Returns a [paginated](#pagination) list of issue type schemes and, for each issue type scheme, a list of the projects that use it.  Only issue type schemes used in classic projects are returned.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueTypeSchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = array(56); // int[] | The list of project IDs. To include multiple project IDs, provide an ampersand-separated list. For example, `projectId=10000&projectId=10001`.
$start_at = 0; // int | The index of the first item to return in a page of results (page offset).
$max_results = 50; // int | The maximum number of items to return per page.

try {
    $result = $apiInstance->getIssueTypeSchemeForProjects($project_id, $start_at, $max_results);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueTypeSchemesApi->getIssueTypeSchemeForProjects: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | [**int[]**](../Model/int.md)| The list of project IDs. To include multiple project IDs, provide an ampersand-separated list. For example, &#x60;projectId&#x3D;10000&amp;projectId&#x3D;10001&#x60;. | |
| **start_at** | **int**| The index of the first item to return in a page of results (page offset). | [optional] [default to 0] |
| **max_results** | **int**| The maximum number of items to return per page. | [optional] [default to 50] |

### Return type

[**\OpenAPI\Client\Model\PageBeanIssueTypeSchemeProjects**](../Model/PageBeanIssueTypeSchemeProjects.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIssueTypeSchemesMapping()`

```php
getIssueTypeSchemesMapping($start_at, $max_results, $issue_type_scheme_id): \OpenAPI\Client\Model\PageBeanIssueTypeSchemeMapping
```

Get issue type scheme items

Returns a [paginated](#pagination) list of issue type scheme items.  Only issue type scheme items used in classic projects are returned.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueTypeSchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_at = 0; // int | The index of the first item to return in a page of results (page offset).
$max_results = 50; // int | The maximum number of items to return per page.
$issue_type_scheme_id = array(56); // int[] | The list of issue type scheme IDs. To include multiple IDs, provide an ampersand-separated list. For example, `issueTypeSchemeId=10000&issueTypeSchemeId=10001`.

try {
    $result = $apiInstance->getIssueTypeSchemesMapping($start_at, $max_results, $issue_type_scheme_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueTypeSchemesApi->getIssueTypeSchemesMapping: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_at** | **int**| The index of the first item to return in a page of results (page offset). | [optional] [default to 0] |
| **max_results** | **int**| The maximum number of items to return per page. | [optional] [default to 50] |
| **issue_type_scheme_id** | [**int[]**](../Model/int.md)| The list of issue type scheme IDs. To include multiple IDs, provide an ampersand-separated list. For example, &#x60;issueTypeSchemeId&#x3D;10000&amp;issueTypeSchemeId&#x3D;10001&#x60;. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PageBeanIssueTypeSchemeMapping**](../Model/PageBeanIssueTypeSchemeMapping.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeIssueTypeFromIssueTypeScheme()`

```php
removeIssueTypeFromIssueTypeScheme($issue_type_scheme_id, $issue_type_id): mixed
```

Remove issue type from issue type scheme

Removes an issue type from an issue type scheme.  This operation cannot remove:   *  any issue type used by issues.  *  any issue types from the default issue type scheme.  *  the last standard issue type from an issue type scheme.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueTypeSchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_type_scheme_id = 56; // int | The ID of the issue type scheme.
$issue_type_id = 56; // int | The ID of the issue type.

try {
    $result = $apiInstance->removeIssueTypeFromIssueTypeScheme($issue_type_scheme_id, $issue_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueTypeSchemesApi->removeIssueTypeFromIssueTypeScheme: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_type_scheme_id** | **int**| The ID of the issue type scheme. | |
| **issue_type_id** | **int**| The ID of the issue type. | |

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

## `reorderIssueTypesInIssueTypeScheme()`

```php
reorderIssueTypesInIssueTypeScheme($issue_type_scheme_id, $order_of_issue_types): mixed
```

Change order of issue types

Changes the order of issue types in an issue type scheme.  The request body parameters must meet the following requirements:   *  all of the issue types must belong to the issue type scheme.  *  either `after` or `position` must be provided.  *  the issue type in `after` must not be in the issue type list.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueTypeSchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_type_scheme_id = 56; // int | The ID of the issue type scheme.
$order_of_issue_types = {"after":"10008","issueTypeIds":["10001","10004","10002"]}; // \OpenAPI\Client\Model\OrderOfIssueTypes

try {
    $result = $apiInstance->reorderIssueTypesInIssueTypeScheme($issue_type_scheme_id, $order_of_issue_types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueTypeSchemesApi->reorderIssueTypesInIssueTypeScheme: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_type_scheme_id** | **int**| The ID of the issue type scheme. | |
| **order_of_issue_types** | [**\OpenAPI\Client\Model\OrderOfIssueTypes**](../Model/OrderOfIssueTypes.md)|  | |

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

## `updateIssueTypeScheme()`

```php
updateIssueTypeScheme($issue_type_scheme_id, $issue_type_scheme_update_details): mixed
```

Update issue type scheme

Updates an issue type scheme.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueTypeSchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_type_scheme_id = 56; // int | The ID of the issue type scheme.
$issue_type_scheme_update_details = {"defaultIssueTypeId":"10002","description":"A collection of issue types suited to use in a kanban style project.","name":"Kanban Issue Type Scheme"}; // \OpenAPI\Client\Model\IssueTypeSchemeUpdateDetails

try {
    $result = $apiInstance->updateIssueTypeScheme($issue_type_scheme_id, $issue_type_scheme_update_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueTypeSchemesApi->updateIssueTypeScheme: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_type_scheme_id** | **int**| The ID of the issue type scheme. | |
| **issue_type_scheme_update_details** | [**\OpenAPI\Client\Model\IssueTypeSchemeUpdateDetails**](../Model/IssueTypeSchemeUpdateDetails.md)|  | |

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
