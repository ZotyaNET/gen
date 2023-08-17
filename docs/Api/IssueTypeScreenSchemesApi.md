# OpenAPI\Client\IssueTypeScreenSchemesApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**appendMappingsForIssueTypeScreenScheme()**](IssueTypeScreenSchemesApi.md#appendMappingsForIssueTypeScreenScheme) | **PUT** /rest/api/2/issuetypescreenscheme/{issueTypeScreenSchemeId}/mapping | Append mappings to issue type screen scheme |
| [**assignIssueTypeScreenSchemeToProject()**](IssueTypeScreenSchemesApi.md#assignIssueTypeScreenSchemeToProject) | **PUT** /rest/api/2/issuetypescreenscheme/project | Assign issue type screen scheme to project |
| [**createIssueTypeScreenScheme()**](IssueTypeScreenSchemesApi.md#createIssueTypeScreenScheme) | **POST** /rest/api/2/issuetypescreenscheme | Create issue type screen scheme |
| [**deleteIssueTypeScreenScheme()**](IssueTypeScreenSchemesApi.md#deleteIssueTypeScreenScheme) | **DELETE** /rest/api/2/issuetypescreenscheme/{issueTypeScreenSchemeId} | Delete issue type screen scheme |
| [**getIssueTypeScreenSchemeMappings()**](IssueTypeScreenSchemesApi.md#getIssueTypeScreenSchemeMappings) | **GET** /rest/api/2/issuetypescreenscheme/mapping | Get issue type screen scheme items |
| [**getIssueTypeScreenSchemeProjectAssociations()**](IssueTypeScreenSchemesApi.md#getIssueTypeScreenSchemeProjectAssociations) | **GET** /rest/api/2/issuetypescreenscheme/project | Get issue type screen schemes for projects |
| [**getIssueTypeScreenSchemes()**](IssueTypeScreenSchemesApi.md#getIssueTypeScreenSchemes) | **GET** /rest/api/2/issuetypescreenscheme | Get issue type screen schemes |
| [**getProjectsForIssueTypeScreenScheme()**](IssueTypeScreenSchemesApi.md#getProjectsForIssueTypeScreenScheme) | **GET** /rest/api/2/issuetypescreenscheme/{issueTypeScreenSchemeId}/project | Get issue type screen scheme projects |
| [**removeMappingsFromIssueTypeScreenScheme()**](IssueTypeScreenSchemesApi.md#removeMappingsFromIssueTypeScreenScheme) | **POST** /rest/api/2/issuetypescreenscheme/{issueTypeScreenSchemeId}/mapping/remove | Remove mappings from issue type screen scheme |
| [**updateDefaultScreenScheme()**](IssueTypeScreenSchemesApi.md#updateDefaultScreenScheme) | **PUT** /rest/api/2/issuetypescreenscheme/{issueTypeScreenSchemeId}/mapping/default | Update issue type screen scheme default screen scheme |
| [**updateIssueTypeScreenScheme()**](IssueTypeScreenSchemesApi.md#updateIssueTypeScreenScheme) | **PUT** /rest/api/2/issuetypescreenscheme/{issueTypeScreenSchemeId} | Update issue type screen scheme |


## `appendMappingsForIssueTypeScreenScheme()`

```php
appendMappingsForIssueTypeScreenScheme($issue_type_screen_scheme_id, $issue_type_screen_scheme_mapping_details): mixed
```

Append mappings to issue type screen scheme

Appends issue type to screen scheme mappings to an issue type screen scheme.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueTypeScreenSchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_type_screen_scheme_id = 'issue_type_screen_scheme_id_example'; // string | The ID of the issue type screen scheme.
$issue_type_screen_scheme_mapping_details = {"issueTypeMappings":[{"issueTypeId":"10000","screenSchemeId":"10001"},{"issueTypeId":"10001","screenSchemeId":"10002"},{"issueTypeId":"10002","screenSchemeId":"10002"}]}; // \OpenAPI\Client\Model\IssueTypeScreenSchemeMappingDetails

try {
    $result = $apiInstance->appendMappingsForIssueTypeScreenScheme($issue_type_screen_scheme_id, $issue_type_screen_scheme_mapping_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueTypeScreenSchemesApi->appendMappingsForIssueTypeScreenScheme: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_type_screen_scheme_id** | **string**| The ID of the issue type screen scheme. | |
| **issue_type_screen_scheme_mapping_details** | [**\OpenAPI\Client\Model\IssueTypeScreenSchemeMappingDetails**](../Model/IssueTypeScreenSchemeMappingDetails.md)|  | |

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

## `assignIssueTypeScreenSchemeToProject()`

```php
assignIssueTypeScreenSchemeToProject($issue_type_screen_scheme_project_association): mixed
```

Assign issue type screen scheme to project

Assigns an issue type screen scheme to a project.  Issue type screen schemes can only be assigned to classic projects.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueTypeScreenSchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_type_screen_scheme_project_association = {"issueTypeScreenSchemeId":"10001","projectId":"10002"}; // \OpenAPI\Client\Model\IssueTypeScreenSchemeProjectAssociation

try {
    $result = $apiInstance->assignIssueTypeScreenSchemeToProject($issue_type_screen_scheme_project_association);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueTypeScreenSchemesApi->assignIssueTypeScreenSchemeToProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_type_screen_scheme_project_association** | [**\OpenAPI\Client\Model\IssueTypeScreenSchemeProjectAssociation**](../Model/IssueTypeScreenSchemeProjectAssociation.md)|  | |

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

## `createIssueTypeScreenScheme()`

```php
createIssueTypeScreenScheme($issue_type_screen_scheme_details): \OpenAPI\Client\Model\IssueTypeScreenSchemeId
```

Create issue type screen scheme

Creates an issue type screen scheme.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueTypeScreenSchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_type_screen_scheme_details = {"issueTypeMappings":[{"issueTypeId":"default","screenSchemeId":"10001"},{"issueTypeId":"10001","screenSchemeId":"10002"},{"issueTypeId":"10002","screenSchemeId":"10002"}],"name":"Scrum issue type screen scheme"}; // \OpenAPI\Client\Model\IssueTypeScreenSchemeDetails | An issue type screen scheme bean.

try {
    $result = $apiInstance->createIssueTypeScreenScheme($issue_type_screen_scheme_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueTypeScreenSchemesApi->createIssueTypeScreenScheme: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_type_screen_scheme_details** | [**\OpenAPI\Client\Model\IssueTypeScreenSchemeDetails**](../Model/IssueTypeScreenSchemeDetails.md)| An issue type screen scheme bean. | |

### Return type

[**\OpenAPI\Client\Model\IssueTypeScreenSchemeId**](../Model/IssueTypeScreenSchemeId.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteIssueTypeScreenScheme()`

```php
deleteIssueTypeScreenScheme($issue_type_screen_scheme_id): mixed
```

Delete issue type screen scheme

Deletes an issue type screen scheme.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueTypeScreenSchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_type_screen_scheme_id = 'issue_type_screen_scheme_id_example'; // string | The ID of the issue type screen scheme.

try {
    $result = $apiInstance->deleteIssueTypeScreenScheme($issue_type_screen_scheme_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueTypeScreenSchemesApi->deleteIssueTypeScreenScheme: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_type_screen_scheme_id** | **string**| The ID of the issue type screen scheme. | |

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

## `getIssueTypeScreenSchemeMappings()`

```php
getIssueTypeScreenSchemeMappings($start_at, $max_results, $issue_type_screen_scheme_id): \OpenAPI\Client\Model\PageBeanIssueTypeScreenSchemeItem
```

Get issue type screen scheme items

Returns a [paginated](#pagination) list of issue type screen scheme items.  Only issue type screen schemes used in classic projects are returned.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueTypeScreenSchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_at = 0; // int | The index of the first item to return in a page of results (page offset).
$max_results = 50; // int | The maximum number of items to return per page.
$issue_type_screen_scheme_id = array(56); // int[] | The list of issue type screen scheme IDs. To include multiple issue type screen schemes, separate IDs with ampersand: `issueTypeScreenSchemeId=10000&issueTypeScreenSchemeId=10001`.

try {
    $result = $apiInstance->getIssueTypeScreenSchemeMappings($start_at, $max_results, $issue_type_screen_scheme_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueTypeScreenSchemesApi->getIssueTypeScreenSchemeMappings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_at** | **int**| The index of the first item to return in a page of results (page offset). | [optional] [default to 0] |
| **max_results** | **int**| The maximum number of items to return per page. | [optional] [default to 50] |
| **issue_type_screen_scheme_id** | [**int[]**](../Model/int.md)| The list of issue type screen scheme IDs. To include multiple issue type screen schemes, separate IDs with ampersand: &#x60;issueTypeScreenSchemeId&#x3D;10000&amp;issueTypeScreenSchemeId&#x3D;10001&#x60;. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PageBeanIssueTypeScreenSchemeItem**](../Model/PageBeanIssueTypeScreenSchemeItem.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIssueTypeScreenSchemeProjectAssociations()`

```php
getIssueTypeScreenSchemeProjectAssociations($project_id, $start_at, $max_results): \OpenAPI\Client\Model\PageBeanIssueTypeScreenSchemesProjects
```

Get issue type screen schemes for projects

Returns a [paginated](#pagination) list of issue type screen schemes and, for each issue type screen scheme, a list of the projects that use it.  Only issue type screen schemes used in classic projects are returned.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueTypeScreenSchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = array(56); // int[] | The list of project IDs. To include multiple projects, separate IDs with ampersand: `projectId=10000&projectId=10001`.
$start_at = 0; // int | The index of the first item to return in a page of results (page offset).
$max_results = 50; // int | The maximum number of items to return per page.

try {
    $result = $apiInstance->getIssueTypeScreenSchemeProjectAssociations($project_id, $start_at, $max_results);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueTypeScreenSchemesApi->getIssueTypeScreenSchemeProjectAssociations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | [**int[]**](../Model/int.md)| The list of project IDs. To include multiple projects, separate IDs with ampersand: &#x60;projectId&#x3D;10000&amp;projectId&#x3D;10001&#x60;. | |
| **start_at** | **int**| The index of the first item to return in a page of results (page offset). | [optional] [default to 0] |
| **max_results** | **int**| The maximum number of items to return per page. | [optional] [default to 50] |

### Return type

[**\OpenAPI\Client\Model\PageBeanIssueTypeScreenSchemesProjects**](../Model/PageBeanIssueTypeScreenSchemesProjects.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIssueTypeScreenSchemes()`

```php
getIssueTypeScreenSchemes($start_at, $max_results, $id, $query_string, $order_by, $expand): \OpenAPI\Client\Model\PageBeanIssueTypeScreenScheme
```

Get issue type screen schemes

Returns a [paginated](#pagination) list of issue type screen schemes.  Only issue type screen schemes used in classic projects are returned.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueTypeScreenSchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_at = 0; // int | The index of the first item to return in a page of results (page offset).
$max_results = 50; // int | The maximum number of items to return per page.
$id = array(56); // int[] | The list of issue type screen scheme IDs. To include multiple IDs, provide an ampersand-separated list. For example, `id=10000&id=10001`.
$query_string = ''; // string | String used to perform a case-insensitive partial match with issue type screen scheme name.
$order_by = 'id'; // string | [Order](#ordering) the results by a field:   *  `name` Sorts by issue type screen scheme name.  *  `id` Sorts by issue type screen scheme ID.
$expand = ''; // string | Use [expand](#expansion) to include additional information in the response. This parameter accepts `projects` that, for each issue type screen schemes, returns information about the projects the issue type screen scheme is assigned to.

try {
    $result = $apiInstance->getIssueTypeScreenSchemes($start_at, $max_results, $id, $query_string, $order_by, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueTypeScreenSchemesApi->getIssueTypeScreenSchemes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_at** | **int**| The index of the first item to return in a page of results (page offset). | [optional] [default to 0] |
| **max_results** | **int**| The maximum number of items to return per page. | [optional] [default to 50] |
| **id** | [**int[]**](../Model/int.md)| The list of issue type screen scheme IDs. To include multiple IDs, provide an ampersand-separated list. For example, &#x60;id&#x3D;10000&amp;id&#x3D;10001&#x60;. | [optional] |
| **query_string** | **string**| String used to perform a case-insensitive partial match with issue type screen scheme name. | [optional] [default to &#39;&#39;] |
| **order_by** | **string**| [Order](#ordering) the results by a field:   *  &#x60;name&#x60; Sorts by issue type screen scheme name.  *  &#x60;id&#x60; Sorts by issue type screen scheme ID. | [optional] [default to &#39;id&#39;] |
| **expand** | **string**| Use [expand](#expansion) to include additional information in the response. This parameter accepts &#x60;projects&#x60; that, for each issue type screen schemes, returns information about the projects the issue type screen scheme is assigned to. | [optional] [default to &#39;&#39;] |

### Return type

[**\OpenAPI\Client\Model\PageBeanIssueTypeScreenScheme**](../Model/PageBeanIssueTypeScreenScheme.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProjectsForIssueTypeScreenScheme()`

```php
getProjectsForIssueTypeScreenScheme($issue_type_screen_scheme_id, $start_at, $max_results, $query): \OpenAPI\Client\Model\PageBeanProjectDetails
```

Get issue type screen scheme projects

Returns a [paginated](#pagination) list of projects associated with an issue type screen scheme.  Only company-managed projects associated with an issue type screen scheme are returned.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueTypeScreenSchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_type_screen_scheme_id = 56; // int | The ID of the issue type screen scheme.
$start_at = 0; // int | The index of the first item to return in a page of results (page offset).
$max_results = 50; // int | The maximum number of items to return per page.
$query = ''; // string

try {
    $result = $apiInstance->getProjectsForIssueTypeScreenScheme($issue_type_screen_scheme_id, $start_at, $max_results, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueTypeScreenSchemesApi->getProjectsForIssueTypeScreenScheme: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_type_screen_scheme_id** | **int**| The ID of the issue type screen scheme. | |
| **start_at** | **int**| The index of the first item to return in a page of results (page offset). | [optional] [default to 0] |
| **max_results** | **int**| The maximum number of items to return per page. | [optional] [default to 50] |
| **query** | **string**|  | [optional] [default to &#39;&#39;] |

### Return type

[**\OpenAPI\Client\Model\PageBeanProjectDetails**](../Model/PageBeanProjectDetails.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeMappingsFromIssueTypeScreenScheme()`

```php
removeMappingsFromIssueTypeScreenScheme($issue_type_screen_scheme_id, $issue_type_ids): mixed
```

Remove mappings from issue type screen scheme

Removes issue type to screen scheme mappings from an issue type screen scheme.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueTypeScreenSchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_type_screen_scheme_id = 'issue_type_screen_scheme_id_example'; // string | The ID of the issue type screen scheme.
$issue_type_ids = {"issueTypeIds":["10000","10001","10004"]}; // \OpenAPI\Client\Model\IssueTypeIds

try {
    $result = $apiInstance->removeMappingsFromIssueTypeScreenScheme($issue_type_screen_scheme_id, $issue_type_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueTypeScreenSchemesApi->removeMappingsFromIssueTypeScreenScheme: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_type_screen_scheme_id** | **string**| The ID of the issue type screen scheme. | |
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

## `updateDefaultScreenScheme()`

```php
updateDefaultScreenScheme($issue_type_screen_scheme_id, $update_default_screen_scheme): mixed
```

Update issue type screen scheme default screen scheme

Updates the default screen scheme of an issue type screen scheme. The default screen scheme is used for all unmapped issue types.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueTypeScreenSchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_type_screen_scheme_id = 'issue_type_screen_scheme_id_example'; // string | The ID of the issue type screen scheme.
$update_default_screen_scheme = {"screenSchemeId":"10010"}; // \OpenAPI\Client\Model\UpdateDefaultScreenScheme

try {
    $result = $apiInstance->updateDefaultScreenScheme($issue_type_screen_scheme_id, $update_default_screen_scheme);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueTypeScreenSchemesApi->updateDefaultScreenScheme: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_type_screen_scheme_id** | **string**| The ID of the issue type screen scheme. | |
| **update_default_screen_scheme** | [**\OpenAPI\Client\Model\UpdateDefaultScreenScheme**](../Model/UpdateDefaultScreenScheme.md)|  | |

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

## `updateIssueTypeScreenScheme()`

```php
updateIssueTypeScreenScheme($issue_type_screen_scheme_id, $issue_type_screen_scheme_update_details): mixed
```

Update issue type screen scheme

Updates an issue type screen scheme.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueTypeScreenSchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_type_screen_scheme_id = 'issue_type_screen_scheme_id_example'; // string | The ID of the issue type screen scheme.
$issue_type_screen_scheme_update_details = {"description":"Screens for scrum issue types.","name":"Scrum scheme"}; // \OpenAPI\Client\Model\IssueTypeScreenSchemeUpdateDetails | The issue type screen scheme update details.

try {
    $result = $apiInstance->updateIssueTypeScreenScheme($issue_type_screen_scheme_id, $issue_type_screen_scheme_update_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueTypeScreenSchemesApi->updateIssueTypeScreenScheme: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_type_screen_scheme_id** | **string**| The ID of the issue type screen scheme. | |
| **issue_type_screen_scheme_update_details** | [**\OpenAPI\Client\Model\IssueTypeScreenSchemeUpdateDetails**](../Model/IssueTypeScreenSchemeUpdateDetails.md)| The issue type screen scheme update details. | |

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
