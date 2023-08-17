# OpenAPI\Client\IssueCustomFieldContextsApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addIssueTypesToContext()**](IssueCustomFieldContextsApi.md#addIssueTypesToContext) | **PUT** /rest/api/2/field/{fieldId}/context/{contextId}/issuetype | Add issue types to context |
| [**assignProjectsToCustomFieldContext()**](IssueCustomFieldContextsApi.md#assignProjectsToCustomFieldContext) | **PUT** /rest/api/2/field/{fieldId}/context/{contextId}/project | Assign custom field context to projects |
| [**createCustomFieldContext()**](IssueCustomFieldContextsApi.md#createCustomFieldContext) | **POST** /rest/api/2/field/{fieldId}/context | Create custom field context |
| [**deleteCustomFieldContext()**](IssueCustomFieldContextsApi.md#deleteCustomFieldContext) | **DELETE** /rest/api/2/field/{fieldId}/context/{contextId} | Delete custom field context |
| [**getContextsForField()**](IssueCustomFieldContextsApi.md#getContextsForField) | **GET** /rest/api/2/field/{fieldId}/context | Get custom field contexts |
| [**getCustomFieldContextsForProjectsAndIssueTypes()**](IssueCustomFieldContextsApi.md#getCustomFieldContextsForProjectsAndIssueTypes) | **POST** /rest/api/2/field/{fieldId}/context/mapping | Get custom field contexts for projects and issue types |
| [**getDefaultValues()**](IssueCustomFieldContextsApi.md#getDefaultValues) | **GET** /rest/api/2/field/{fieldId}/context/defaultValue | Get custom field contexts default values |
| [**getIssueTypeMappingsForContexts()**](IssueCustomFieldContextsApi.md#getIssueTypeMappingsForContexts) | **GET** /rest/api/2/field/{fieldId}/context/issuetypemapping | Get issue types for custom field context |
| [**getProjectContextMapping()**](IssueCustomFieldContextsApi.md#getProjectContextMapping) | **GET** /rest/api/2/field/{fieldId}/context/projectmapping | Get project mappings for custom field context |
| [**removeCustomFieldContextFromProjects()**](IssueCustomFieldContextsApi.md#removeCustomFieldContextFromProjects) | **POST** /rest/api/2/field/{fieldId}/context/{contextId}/project/remove | Remove custom field context from projects |
| [**removeIssueTypesFromContext()**](IssueCustomFieldContextsApi.md#removeIssueTypesFromContext) | **POST** /rest/api/2/field/{fieldId}/context/{contextId}/issuetype/remove | Remove issue types from context |
| [**setDefaultValues()**](IssueCustomFieldContextsApi.md#setDefaultValues) | **PUT** /rest/api/2/field/{fieldId}/context/defaultValue | Set custom field contexts default values |
| [**updateCustomFieldContext()**](IssueCustomFieldContextsApi.md#updateCustomFieldContext) | **PUT** /rest/api/2/field/{fieldId}/context/{contextId} | Update custom field context |


## `addIssueTypesToContext()`

```php
addIssueTypesToContext($field_id, $context_id, $issue_type_ids): mixed
```

Add issue types to context

Adds issue types to a custom field context, appending the issue types to the issue types list.  A custom field context without any issue types applies to all issue types. Adding issue types to such a custom field context would result in it applying to only the listed issue types.  If any of the issue types exists in the custom field context, the operation fails and no issue types are added.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueCustomFieldContextsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field_id = 'field_id_example'; // string | The ID of the custom field.
$context_id = 56; // int | The ID of the context.
$issue_type_ids = {"issueTypeIds":["10001","10005","10006"]}; // \OpenAPI\Client\Model\IssueTypeIds

try {
    $result = $apiInstance->addIssueTypesToContext($field_id, $context_id, $issue_type_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueCustomFieldContextsApi->addIssueTypesToContext: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **field_id** | **string**| The ID of the custom field. | |
| **context_id** | **int**| The ID of the context. | |
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

## `assignProjectsToCustomFieldContext()`

```php
assignProjectsToCustomFieldContext($field_id, $context_id, $project_ids): mixed
```

Assign custom field context to projects

Assigns a custom field context to projects.  If any project in the request is assigned to any context of the custom field, the operation fails.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueCustomFieldContextsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field_id = 'field_id_example'; // string | The ID of the custom field.
$context_id = 56; // int | The ID of the context.
$project_ids = {"projectIds":["10001","10005","10006"]}; // \OpenAPI\Client\Model\ProjectIds

try {
    $result = $apiInstance->assignProjectsToCustomFieldContext($field_id, $context_id, $project_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueCustomFieldContextsApi->assignProjectsToCustomFieldContext: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **field_id** | **string**| The ID of the custom field. | |
| **context_id** | **int**| The ID of the context. | |
| **project_ids** | [**\OpenAPI\Client\Model\ProjectIds**](../Model/ProjectIds.md)|  | |

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

## `createCustomFieldContext()`

```php
createCustomFieldContext($field_id, $create_custom_field_context): \OpenAPI\Client\Model\CreateCustomFieldContext
```

Create custom field context

Creates a custom field context.  If `projectIds` is empty, a global context is created. A global context is one that applies to all project. If `issueTypeIds` is empty, the context applies to all issue types.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueCustomFieldContextsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field_id = 'field_id_example'; // string | The ID of the custom field.
$create_custom_field_context = {"description":"A context used to define the custom field options for bugs.","issueTypeIds":["10010"],"name":"Bug fields context","projectIds":[]}; // \OpenAPI\Client\Model\CreateCustomFieldContext

try {
    $result = $apiInstance->createCustomFieldContext($field_id, $create_custom_field_context);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueCustomFieldContextsApi->createCustomFieldContext: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **field_id** | **string**| The ID of the custom field. | |
| **create_custom_field_context** | [**\OpenAPI\Client\Model\CreateCustomFieldContext**](../Model/CreateCustomFieldContext.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CreateCustomFieldContext**](../Model/CreateCustomFieldContext.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCustomFieldContext()`

```php
deleteCustomFieldContext($field_id, $context_id): mixed
```

Delete custom field context

Deletes a [ custom field context](https://confluence.atlassian.com/adminjiracloud/what-are-custom-field-contexts-991923859.html).  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueCustomFieldContextsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field_id = 'field_id_example'; // string | The ID of the custom field.
$context_id = 56; // int | The ID of the context.

try {
    $result = $apiInstance->deleteCustomFieldContext($field_id, $context_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueCustomFieldContextsApi->deleteCustomFieldContext: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **field_id** | **string**| The ID of the custom field. | |
| **context_id** | **int**| The ID of the context. | |

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

## `getContextsForField()`

```php
getContextsForField($field_id, $is_any_issue_type, $is_global_context, $context_id, $start_at, $max_results): \OpenAPI\Client\Model\PageBeanCustomFieldContext
```

Get custom field contexts

Returns a [paginated](#pagination) list of [ contexts](https://confluence.atlassian.com/adminjiracloud/what-are-custom-field-contexts-991923859.html) for a custom field. Contexts can be returned as follows:   *  With no other parameters set, all contexts.  *  By defining `id` only, all contexts from the list of IDs.  *  By defining `isAnyIssueType`, limit the list of contexts returned to either those that apply to all issue types (true) or those that apply to only a subset of issue types (false)  *  By defining `isGlobalContext`, limit the list of contexts return to either those that apply to all projects (global contexts) (true) or those that apply to only a subset of projects (false).  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueCustomFieldContextsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field_id = 'field_id_example'; // string | The ID of the custom field.
$is_any_issue_type = True; // bool | Whether to return contexts that apply to all issue types.
$is_global_context = True; // bool | Whether to return contexts that apply to all projects.
$context_id = array(56); // int[] | The list of context IDs. To include multiple contexts, separate IDs with ampersand: `contextId=10000&contextId=10001`.
$start_at = 0; // int | The index of the first item to return in a page of results (page offset).
$max_results = 50; // int | The maximum number of items to return per page.

try {
    $result = $apiInstance->getContextsForField($field_id, $is_any_issue_type, $is_global_context, $context_id, $start_at, $max_results);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueCustomFieldContextsApi->getContextsForField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **field_id** | **string**| The ID of the custom field. | |
| **is_any_issue_type** | **bool**| Whether to return contexts that apply to all issue types. | [optional] |
| **is_global_context** | **bool**| Whether to return contexts that apply to all projects. | [optional] |
| **context_id** | [**int[]**](../Model/int.md)| The list of context IDs. To include multiple contexts, separate IDs with ampersand: &#x60;contextId&#x3D;10000&amp;contextId&#x3D;10001&#x60;. | [optional] |
| **start_at** | **int**| The index of the first item to return in a page of results (page offset). | [optional] [default to 0] |
| **max_results** | **int**| The maximum number of items to return per page. | [optional] [default to 50] |

### Return type

[**\OpenAPI\Client\Model\PageBeanCustomFieldContext**](../Model/PageBeanCustomFieldContext.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomFieldContextsForProjectsAndIssueTypes()`

```php
getCustomFieldContextsForProjectsAndIssueTypes($field_id, $project_issue_type_mappings, $start_at, $max_results): \OpenAPI\Client\Model\PageBeanContextForProjectAndIssueType
```

Get custom field contexts for projects and issue types

Returns a [paginated](#pagination) list of project and issue type mappings and, for each mapping, the ID of a [custom field context](https://confluence.atlassian.com/x/k44fOw) that applies to the project and issue type.  If there is no custom field context assigned to the project then, if present, the custom field context that applies to all projects is returned if it also applies to the issue type or all issue types. If a custom field context is not found, the returned custom field context ID is `null`.  Duplicate project and issue type mappings cannot be provided in the request.  The order of the returned values is the same as provided in the request.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueCustomFieldContextsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field_id = 'field_id_example'; // string | The ID of the custom field.
$project_issue_type_mappings = {"mappings":[{"issueTypeId":"10000","projectId":"10000"},{"issueTypeId":"10001","projectId":"10000"},{"issueTypeId":"10002","projectId":"10001"}]}; // \OpenAPI\Client\Model\ProjectIssueTypeMappings | The list of project and issue type mappings.
$start_at = 0; // int | The index of the first item to return in a page of results (page offset).
$max_results = 50; // int | The maximum number of items to return per page.

try {
    $result = $apiInstance->getCustomFieldContextsForProjectsAndIssueTypes($field_id, $project_issue_type_mappings, $start_at, $max_results);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueCustomFieldContextsApi->getCustomFieldContextsForProjectsAndIssueTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **field_id** | **string**| The ID of the custom field. | |
| **project_issue_type_mappings** | [**\OpenAPI\Client\Model\ProjectIssueTypeMappings**](../Model/ProjectIssueTypeMappings.md)| The list of project and issue type mappings. | |
| **start_at** | **int**| The index of the first item to return in a page of results (page offset). | [optional] [default to 0] |
| **max_results** | **int**| The maximum number of items to return per page. | [optional] [default to 50] |

### Return type

[**\OpenAPI\Client\Model\PageBeanContextForProjectAndIssueType**](../Model/PageBeanContextForProjectAndIssueType.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDefaultValues()`

```php
getDefaultValues($field_id, $context_id, $start_at, $max_results): \OpenAPI\Client\Model\PageBeanCustomFieldContextDefaultValue
```

Get custom field contexts default values

Returns a [paginated](#pagination) list of defaults for a custom field. The results can be filtered by `contextId`, otherwise all values are returned. If no defaults are set for a context, nothing is returned.   The returned object depends on type of the custom field:   *  `CustomFieldContextDefaultValueDate` (type `datepicker`) for date fields.  *  `CustomFieldContextDefaultValueDateTime` (type `datetimepicker`) for date-time fields.  *  `CustomFieldContextDefaultValueSingleOption` (type `option.single`) for single choice select lists and radio buttons.  *  `CustomFieldContextDefaultValueMultipleOption` (type `option.multiple`) for multiple choice select lists and checkboxes.  *  `CustomFieldContextDefaultValueCascadingOption` (type `option.cascading`) for cascading select lists.  *  `CustomFieldContextSingleUserPickerDefaults` (type `single.user.select`) for single users.  *  `CustomFieldContextDefaultValueMultiUserPicker` (type `multi.user.select`) for user lists.  *  `CustomFieldContextDefaultValueSingleGroupPicker` (type `grouppicker.single`) for single choice group pickers.  *  `CustomFieldContextDefaultValueMultipleGroupPicker` (type `grouppicker.multiple`) for multiple choice group pickers.  *  `CustomFieldContextDefaultValueURL` (type `url`) for URLs.  *  `CustomFieldContextDefaultValueProject` (type `project`) for project pickers.  *  `CustomFieldContextDefaultValueFloat` (type `float`) for floats (floating-point numbers).  *  `CustomFieldContextDefaultValueLabels` (type `labels`) for labels.  *  `CustomFieldContextDefaultValueTextField` (type `textfield`) for text fields.  *  `CustomFieldContextDefaultValueTextArea` (type `textarea`) for text area fields.  *  `CustomFieldContextDefaultValueReadOnly` (type `readonly`) for read only (text) fields.  *  `CustomFieldContextDefaultValueMultipleVersion` (type `version.multiple`) for single choice version pickers.  *  `CustomFieldContextDefaultValueSingleVersion` (type `version.single`) for multiple choice version pickers.  Forge custom fields [types](https://developer.atlassian.com/platform/forge/manifest-reference/modules/jira-custom-field-type/#data-types) are also supported, returning:   *  `CustomFieldContextDefaultValueForgeStringFieldBean` (type `forge.string`) for Forge string fields.  *  `CustomFieldContextDefaultValueForgeMultiStringFieldBean` (type `forge.string.list`) for Forge string collection fields.  *  `CustomFieldContextDefaultValueForgeObjectFieldBean` (type `forge.object`) for Forge object fields.  *  `CustomFieldContextDefaultValueForgeDateTimeFieldBean` (type `forge.datetime`) for Forge date-time fields.  *  `CustomFieldContextDefaultValueForgeGroupFieldBean` (type `forge.group`) for Forge group fields.  *  `CustomFieldContextDefaultValueForgeMultiGroupFieldBean` (type `forge.group.list`) for Forge group collection fields.  *  `CustomFieldContextDefaultValueForgeNumberFieldBean` (type `forge.number`) for Forge number fields.  *  `CustomFieldContextDefaultValueForgeUserFieldBean` (type `forge.user`) for Forge user fields.  *  `CustomFieldContextDefaultValueForgeMultiUserFieldBean` (type `forge.user.list`) for Forge user collection fields.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueCustomFieldContextsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field_id = 'field_id_example'; // string | The ID of the custom field, for example `customfield\\_10000`.
$context_id = array(56); // int[] | The IDs of the contexts.
$start_at = 0; // int | The index of the first item to return in a page of results (page offset).
$max_results = 50; // int | The maximum number of items to return per page.

try {
    $result = $apiInstance->getDefaultValues($field_id, $context_id, $start_at, $max_results);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueCustomFieldContextsApi->getDefaultValues: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **field_id** | **string**| The ID of the custom field, for example &#x60;customfield\\_10000&#x60;. | |
| **context_id** | [**int[]**](../Model/int.md)| The IDs of the contexts. | [optional] |
| **start_at** | **int**| The index of the first item to return in a page of results (page offset). | [optional] [default to 0] |
| **max_results** | **int**| The maximum number of items to return per page. | [optional] [default to 50] |

### Return type

[**\OpenAPI\Client\Model\PageBeanCustomFieldContextDefaultValue**](../Model/PageBeanCustomFieldContextDefaultValue.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIssueTypeMappingsForContexts()`

```php
getIssueTypeMappingsForContexts($field_id, $context_id, $start_at, $max_results): \OpenAPI\Client\Model\PageBeanIssueTypeToContextMapping
```

Get issue types for custom field context

Returns a [paginated](#pagination) list of context to issue type mappings for a custom field. Mappings are returned for all contexts or a list of contexts. Mappings are ordered first by context ID and then by issue type ID.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueCustomFieldContextsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field_id = 'field_id_example'; // string | The ID of the custom field.
$context_id = array(56); // int[] | The ID of the context. To include multiple contexts, provide an ampersand-separated list. For example, `contextId=10001&contextId=10002`.
$start_at = 0; // int | The index of the first item to return in a page of results (page offset).
$max_results = 50; // int | The maximum number of items to return per page.

try {
    $result = $apiInstance->getIssueTypeMappingsForContexts($field_id, $context_id, $start_at, $max_results);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueCustomFieldContextsApi->getIssueTypeMappingsForContexts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **field_id** | **string**| The ID of the custom field. | |
| **context_id** | [**int[]**](../Model/int.md)| The ID of the context. To include multiple contexts, provide an ampersand-separated list. For example, &#x60;contextId&#x3D;10001&amp;contextId&#x3D;10002&#x60;. | [optional] |
| **start_at** | **int**| The index of the first item to return in a page of results (page offset). | [optional] [default to 0] |
| **max_results** | **int**| The maximum number of items to return per page. | [optional] [default to 50] |

### Return type

[**\OpenAPI\Client\Model\PageBeanIssueTypeToContextMapping**](../Model/PageBeanIssueTypeToContextMapping.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProjectContextMapping()`

```php
getProjectContextMapping($field_id, $context_id, $start_at, $max_results): \OpenAPI\Client\Model\PageBeanCustomFieldContextProjectMapping
```

Get project mappings for custom field context

Returns a [paginated](#pagination) list of context to project mappings for a custom field. The result can be filtered by `contextId`. Otherwise, all mappings are returned. Invalid IDs are ignored.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueCustomFieldContextsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field_id = 'field_id_example'; // string | The ID of the custom field, for example `customfield\\_10000`.
$context_id = array(56); // int[] | The list of context IDs. To include multiple context, separate IDs with ampersand: `contextId=10000&contextId=10001`.
$start_at = 0; // int | The index of the first item to return in a page of results (page offset).
$max_results = 50; // int | The maximum number of items to return per page.

try {
    $result = $apiInstance->getProjectContextMapping($field_id, $context_id, $start_at, $max_results);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueCustomFieldContextsApi->getProjectContextMapping: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **field_id** | **string**| The ID of the custom field, for example &#x60;customfield\\_10000&#x60;. | |
| **context_id** | [**int[]**](../Model/int.md)| The list of context IDs. To include multiple context, separate IDs with ampersand: &#x60;contextId&#x3D;10000&amp;contextId&#x3D;10001&#x60;. | [optional] |
| **start_at** | **int**| The index of the first item to return in a page of results (page offset). | [optional] [default to 0] |
| **max_results** | **int**| The maximum number of items to return per page. | [optional] [default to 50] |

### Return type

[**\OpenAPI\Client\Model\PageBeanCustomFieldContextProjectMapping**](../Model/PageBeanCustomFieldContextProjectMapping.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeCustomFieldContextFromProjects()`

```php
removeCustomFieldContextFromProjects($field_id, $context_id, $project_ids): mixed
```

Remove custom field context from projects

Removes a custom field context from projects.  A custom field context without any projects applies to all projects. Removing all projects from a custom field context would result in it applying to all projects.  If any project in the request is not assigned to the context, or the operation would result in two global contexts for the field, the operation fails.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueCustomFieldContextsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field_id = 'field_id_example'; // string | The ID of the custom field.
$context_id = 56; // int | The ID of the context.
$project_ids = {"projectIds":["10001","10005","10006"]}; // \OpenAPI\Client\Model\ProjectIds

try {
    $result = $apiInstance->removeCustomFieldContextFromProjects($field_id, $context_id, $project_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueCustomFieldContextsApi->removeCustomFieldContextFromProjects: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **field_id** | **string**| The ID of the custom field. | |
| **context_id** | **int**| The ID of the context. | |
| **project_ids** | [**\OpenAPI\Client\Model\ProjectIds**](../Model/ProjectIds.md)|  | |

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

## `removeIssueTypesFromContext()`

```php
removeIssueTypesFromContext($field_id, $context_id, $issue_type_ids): mixed
```

Remove issue types from context

Removes issue types from a custom field context.  A custom field context without any issue types applies to all issue types.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueCustomFieldContextsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field_id = 'field_id_example'; // string | The ID of the custom field.
$context_id = 56; // int | The ID of the context.
$issue_type_ids = {"issueTypeIds":["10001","10005","10006"]}; // \OpenAPI\Client\Model\IssueTypeIds

try {
    $result = $apiInstance->removeIssueTypesFromContext($field_id, $context_id, $issue_type_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueCustomFieldContextsApi->removeIssueTypesFromContext: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **field_id** | **string**| The ID of the custom field. | |
| **context_id** | **int**| The ID of the context. | |
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

## `setDefaultValues()`

```php
setDefaultValues($field_id, $custom_field_context_default_value_update): mixed
```

Set custom field contexts default values

Sets default for contexts of a custom field. Default are defined using these objects:   *  `CustomFieldContextDefaultValueDate` (type `datepicker`) for date fields.  *  `CustomFieldContextDefaultValueDateTime` (type `datetimepicker`) for date-time fields.  *  `CustomFieldContextDefaultValueSingleOption` (type `option.single`) for single choice select lists and radio buttons.  *  `CustomFieldContextDefaultValueMultipleOption` (type `option.multiple`) for multiple choice select lists and checkboxes.  *  `CustomFieldContextDefaultValueCascadingOption` (type `option.cascading`) for cascading select lists.  *  `CustomFieldContextSingleUserPickerDefaults` (type `single.user.select`) for single users.  *  `CustomFieldContextDefaultValueMultiUserPicker` (type `multi.user.select`) for user lists.  *  `CustomFieldContextDefaultValueSingleGroupPicker` (type `grouppicker.single`) for single choice group pickers.  *  `CustomFieldContextDefaultValueMultipleGroupPicker` (type `grouppicker.multiple`) for multiple choice group pickers.  *  `CustomFieldContextDefaultValueURL` (type `url`) for URLs.  *  `CustomFieldContextDefaultValueProject` (type `project`) for project pickers.  *  `CustomFieldContextDefaultValueFloat` (type `float`) for floats (floating-point numbers).  *  `CustomFieldContextDefaultValueLabels` (type `labels`) for labels.  *  `CustomFieldContextDefaultValueTextField` (type `textfield`) for text fields.  *  `CustomFieldContextDefaultValueTextArea` (type `textarea`) for text area fields.  *  `CustomFieldContextDefaultValueReadOnly` (type `readonly`) for read only (text) fields.  *  `CustomFieldContextDefaultValueMultipleVersion` (type `version.multiple`) for single choice version pickers.  *  `CustomFieldContextDefaultValueSingleVersion` (type `version.single`) for multiple choice version pickers.  Forge custom fields [types](https://developer.atlassian.com/platform/forge/manifest-reference/modules/jira-custom-field-type/#data-types) are also supported, returning:   *  `CustomFieldContextDefaultValueForgeStringFieldBean` (type `forge.string`) for Forge string fields.  *  `CustomFieldContextDefaultValueForgeMultiStringFieldBean` (type `forge.string.list`) for Forge string collection fields.  *  `CustomFieldContextDefaultValueForgeObjectFieldBean` (type `forge.object`) for Forge object fields.  *  `CustomFieldContextDefaultValueForgeDateTimeFieldBean` (type `forge.datetime`) for Forge date-time fields.  *  `CustomFieldContextDefaultValueForgeGroupFieldBean` (type `forge.group`) for Forge group fields.  *  `CustomFieldContextDefaultValueForgeMultiGroupFieldBean` (type `forge.group.list`) for Forge group collection fields.  *  `CustomFieldContextDefaultValueForgeNumberFieldBean` (type `forge.number`) for Forge number fields.  *  `CustomFieldContextDefaultValueForgeUserFieldBean` (type `forge.user`) for Forge user fields.  *  `CustomFieldContextDefaultValueForgeMultiUserFieldBean` (type `forge.user.list`) for Forge user collection fields.  Only one type of default object can be included in a request. To remove a default for a context, set the default parameter to `null`.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueCustomFieldContextsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field_id = 'field_id_example'; // string | The ID of the custom field.
$custom_field_context_default_value_update = {"defaultValues":[{"contextId":"10100","optionId":"10001","type":"option.single"},{"contextId":"10101","optionId":"10003","type":"option.single"},{"contextId":"10103","optionId":"10005","type":"option.single"}]}; // \OpenAPI\Client\Model\CustomFieldContextDefaultValueUpdate

try {
    $result = $apiInstance->setDefaultValues($field_id, $custom_field_context_default_value_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueCustomFieldContextsApi->setDefaultValues: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **field_id** | **string**| The ID of the custom field. | |
| **custom_field_context_default_value_update** | [**\OpenAPI\Client\Model\CustomFieldContextDefaultValueUpdate**](../Model/CustomFieldContextDefaultValueUpdate.md)|  | |

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

## `updateCustomFieldContext()`

```php
updateCustomFieldContext($field_id, $context_id, $custom_field_context_update_details): mixed
```

Update custom field context

Updates a [ custom field context](https://confluence.atlassian.com/adminjiracloud/what-are-custom-field-contexts-991923859.html).  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueCustomFieldContextsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field_id = 'field_id_example'; // string | The ID of the custom field.
$context_id = 56; // int | The ID of the context.
$custom_field_context_update_details = {"description":"A context used to define the custom field options for bugs.","name":"Bug fields context"}; // \OpenAPI\Client\Model\CustomFieldContextUpdateDetails

try {
    $result = $apiInstance->updateCustomFieldContext($field_id, $context_id, $custom_field_context_update_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueCustomFieldContextsApi->updateCustomFieldContext: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **field_id** | **string**| The ID of the custom field. | |
| **context_id** | **int**| The ID of the context. | |
| **custom_field_context_update_details** | [**\OpenAPI\Client\Model\CustomFieldContextUpdateDetails**](../Model/CustomFieldContextUpdateDetails.md)|  | |

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
