# OpenAPI\Client\IssueCustomFieldOptionsAppsApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createIssueFieldOption()**](IssueCustomFieldOptionsAppsApi.md#createIssueFieldOption) | **POST** /rest/api/2/field/{fieldKey}/option | Create issue field option |
| [**deleteIssueFieldOption()**](IssueCustomFieldOptionsAppsApi.md#deleteIssueFieldOption) | **DELETE** /rest/api/2/field/{fieldKey}/option/{optionId} | Delete issue field option |
| [**getAllIssueFieldOptions()**](IssueCustomFieldOptionsAppsApi.md#getAllIssueFieldOptions) | **GET** /rest/api/2/field/{fieldKey}/option | Get all issue field options |
| [**getIssueFieldOption()**](IssueCustomFieldOptionsAppsApi.md#getIssueFieldOption) | **GET** /rest/api/2/field/{fieldKey}/option/{optionId} | Get issue field option |
| [**getSelectableIssueFieldOptions()**](IssueCustomFieldOptionsAppsApi.md#getSelectableIssueFieldOptions) | **GET** /rest/api/2/field/{fieldKey}/option/suggestions/edit | Get selectable issue field options |
| [**getVisibleIssueFieldOptions()**](IssueCustomFieldOptionsAppsApi.md#getVisibleIssueFieldOptions) | **GET** /rest/api/2/field/{fieldKey}/option/suggestions/search | Get visible issue field options |
| [**replaceIssueFieldOption()**](IssueCustomFieldOptionsAppsApi.md#replaceIssueFieldOption) | **DELETE** /rest/api/2/field/{fieldKey}/option/{optionId}/issue | Replace issue field option |
| [**updateIssueFieldOption()**](IssueCustomFieldOptionsAppsApi.md#updateIssueFieldOption) | **PUT** /rest/api/2/field/{fieldKey}/option/{optionId} | Update issue field option |


## `createIssueFieldOption()`

```php
createIssueFieldOption($field_key, $request_body): \OpenAPI\Client\Model\IssueFieldOption
```

Create issue field option

Creates an option for a select list issue field.  Note that this operation **only works for issue field select list options added by Connect apps**, it cannot be used with issue field select list options created in Jira or using operations from the [Issue custom field options](#api-group-Issue-custom-field-options) resource.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg). Jira permissions are not required for the app providing the field.

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


$apiInstance = new OpenAPI\Client\Api\IssueCustomFieldOptionsAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field_key = 'field_key_example'; // string | The field key is specified in the following format: **$(app-key)\\_\\_$(field-key)**. For example, *example-add-on\\_\\_example-issue-field*. To determine the `fieldKey` value, do one of the following:   *  open the app's plugin descriptor, then **app-key** is the key at the top and **field-key** is the key in the `jiraIssueFields` module. **app-key** can also be found in the app listing in the Atlassian Universal Plugin Manager.  *  run [Get fields](#api-rest-api-2-field-get) and in the field details the value is returned in `key`. For example, `\"key\": \"teams-add-on__team-issue-field\"`
$request_body = {"config":{"attributes":[],"scope":{"global":{},"projects":[],"projects2":[{"attributes":["notSelectable"],"id":1002},{"attributes":["notSelectable"],"id":1001}]}},"properties":{"description":"The team's description","founded":"2016-06-06","leader":{"email":"lname@example.com","name":"Leader Name"},"members":42},"value":"Team 1"}; // array<string,mixed>

try {
    $result = $apiInstance->createIssueFieldOption($field_key, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueCustomFieldOptionsAppsApi->createIssueFieldOption: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **field_key** | **string**| The field key is specified in the following format: **$(app-key)\\_\\_$(field-key)**. For example, *example-add-on\\_\\_example-issue-field*. To determine the &#x60;fieldKey&#x60; value, do one of the following:   *  open the app&#39;s plugin descriptor, then **app-key** is the key at the top and **field-key** is the key in the &#x60;jiraIssueFields&#x60; module. **app-key** can also be found in the app listing in the Atlassian Universal Plugin Manager.  *  run [Get fields](#api-rest-api-2-field-get) and in the field details the value is returned in &#x60;key&#x60;. For example, &#x60;\&quot;key\&quot;: \&quot;teams-add-on__team-issue-field\&quot;&#x60; | |
| **request_body** | [**array<string,mixed>**](../Model/mixed.md)|  | |

### Return type

[**\OpenAPI\Client\Model\IssueFieldOption**](../Model/IssueFieldOption.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteIssueFieldOption()`

```php
deleteIssueFieldOption($field_key, $option_id): mixed
```

Delete issue field option

Deletes an option from a select list issue field.  Note that this operation **only works for issue field select list options added by Connect apps**, it cannot be used with issue field select list options created in Jira or using operations from the [Issue custom field options](#api-group-Issue-custom-field-options) resource.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg). Jira permissions are not required for the app providing the field.

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


$apiInstance = new OpenAPI\Client\Api\IssueCustomFieldOptionsAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field_key = 'field_key_example'; // string | The field key is specified in the following format: **$(app-key)\\_\\_$(field-key)**. For example, *example-add-on\\_\\_example-issue-field*. To determine the `fieldKey` value, do one of the following:   *  open the app's plugin descriptor, then **app-key** is the key at the top and **field-key** is the key in the `jiraIssueFields` module. **app-key** can also be found in the app listing in the Atlassian Universal Plugin Manager.  *  run [Get fields](#api-rest-api-2-field-get) and in the field details the value is returned in `key`. For example, `\"key\": \"teams-add-on__team-issue-field\"`
$option_id = 56; // int | The ID of the option to be deleted.

try {
    $result = $apiInstance->deleteIssueFieldOption($field_key, $option_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueCustomFieldOptionsAppsApi->deleteIssueFieldOption: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **field_key** | **string**| The field key is specified in the following format: **$(app-key)\\_\\_$(field-key)**. For example, *example-add-on\\_\\_example-issue-field*. To determine the &#x60;fieldKey&#x60; value, do one of the following:   *  open the app&#39;s plugin descriptor, then **app-key** is the key at the top and **field-key** is the key in the &#x60;jiraIssueFields&#x60; module. **app-key** can also be found in the app listing in the Atlassian Universal Plugin Manager.  *  run [Get fields](#api-rest-api-2-field-get) and in the field details the value is returned in &#x60;key&#x60;. For example, &#x60;\&quot;key\&quot;: \&quot;teams-add-on__team-issue-field\&quot;&#x60; | |
| **option_id** | **int**| The ID of the option to be deleted. | |

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

## `getAllIssueFieldOptions()`

```php
getAllIssueFieldOptions($field_key, $start_at, $max_results): \OpenAPI\Client\Model\PageBeanIssueFieldOption
```

Get all issue field options

Returns a [paginated](#pagination) list of all the options of a select list issue field. A select list issue field is a type of [issue field](https://developer.atlassian.com/cloud/jira/platform/modules/issue-field/) that enables a user to select a value from a list of options.  Note that this operation **only works for issue field select list options added by Connect apps**, it cannot be used with issue field select list options created in Jira or using operations from the [Issue custom field options](#api-group-Issue-custom-field-options) resource.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg). Jira permissions are not required for the app providing the field.

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


$apiInstance = new OpenAPI\Client\Api\IssueCustomFieldOptionsAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field_key = 'field_key_example'; // string | The field key is specified in the following format: **$(app-key)\\_\\_$(field-key)**. For example, *example-add-on\\_\\_example-issue-field*. To determine the `fieldKey` value, do one of the following:   *  open the app's plugin descriptor, then **app-key** is the key at the top and **field-key** is the key in the `jiraIssueFields` module. **app-key** can also be found in the app listing in the Atlassian Universal Plugin Manager.  *  run [Get fields](#api-rest-api-2-field-get) and in the field details the value is returned in `key`. For example, `\"key\": \"teams-add-on__team-issue-field\"`
$start_at = 0; // int | The index of the first item to return in a page of results (page offset).
$max_results = 50; // int | The maximum number of items to return per page.

try {
    $result = $apiInstance->getAllIssueFieldOptions($field_key, $start_at, $max_results);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueCustomFieldOptionsAppsApi->getAllIssueFieldOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **field_key** | **string**| The field key is specified in the following format: **$(app-key)\\_\\_$(field-key)**. For example, *example-add-on\\_\\_example-issue-field*. To determine the &#x60;fieldKey&#x60; value, do one of the following:   *  open the app&#39;s plugin descriptor, then **app-key** is the key at the top and **field-key** is the key in the &#x60;jiraIssueFields&#x60; module. **app-key** can also be found in the app listing in the Atlassian Universal Plugin Manager.  *  run [Get fields](#api-rest-api-2-field-get) and in the field details the value is returned in &#x60;key&#x60;. For example, &#x60;\&quot;key\&quot;: \&quot;teams-add-on__team-issue-field\&quot;&#x60; | |
| **start_at** | **int**| The index of the first item to return in a page of results (page offset). | [optional] [default to 0] |
| **max_results** | **int**| The maximum number of items to return per page. | [optional] [default to 50] |

### Return type

[**\OpenAPI\Client\Model\PageBeanIssueFieldOption**](../Model/PageBeanIssueFieldOption.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIssueFieldOption()`

```php
getIssueFieldOption($field_key, $option_id): \OpenAPI\Client\Model\IssueFieldOption
```

Get issue field option

Returns an option from a select list issue field.  Note that this operation **only works for issue field select list options added by Connect apps**, it cannot be used with issue field select list options created in Jira or using operations from the [Issue custom field options](#api-group-Issue-custom-field-options) resource.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg). Jira permissions are not required for the app providing the field.

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


$apiInstance = new OpenAPI\Client\Api\IssueCustomFieldOptionsAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field_key = 'field_key_example'; // string | The field key is specified in the following format: **$(app-key)\\_\\_$(field-key)**. For example, *example-add-on\\_\\_example-issue-field*. To determine the `fieldKey` value, do one of the following:   *  open the app's plugin descriptor, then **app-key** is the key at the top and **field-key** is the key in the `jiraIssueFields` module. **app-key** can also be found in the app listing in the Atlassian Universal Plugin Manager.  *  run [Get fields](#api-rest-api-2-field-get) and in the field details the value is returned in `key`. For example, `\"key\": \"teams-add-on__team-issue-field\"`
$option_id = 56; // int | The ID of the option to be returned.

try {
    $result = $apiInstance->getIssueFieldOption($field_key, $option_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueCustomFieldOptionsAppsApi->getIssueFieldOption: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **field_key** | **string**| The field key is specified in the following format: **$(app-key)\\_\\_$(field-key)**. For example, *example-add-on\\_\\_example-issue-field*. To determine the &#x60;fieldKey&#x60; value, do one of the following:   *  open the app&#39;s plugin descriptor, then **app-key** is the key at the top and **field-key** is the key in the &#x60;jiraIssueFields&#x60; module. **app-key** can also be found in the app listing in the Atlassian Universal Plugin Manager.  *  run [Get fields](#api-rest-api-2-field-get) and in the field details the value is returned in &#x60;key&#x60;. For example, &#x60;\&quot;key\&quot;: \&quot;teams-add-on__team-issue-field\&quot;&#x60; | |
| **option_id** | **int**| The ID of the option to be returned. | |

### Return type

[**\OpenAPI\Client\Model\IssueFieldOption**](../Model/IssueFieldOption.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSelectableIssueFieldOptions()`

```php
getSelectableIssueFieldOptions($field_key, $start_at, $max_results, $project_id): \OpenAPI\Client\Model\PageBeanIssueFieldOption
```

Get selectable issue field options

Returns a [paginated](#pagination) list of options for a select list issue field that can be viewed and selected by the user.  Note that this operation **only works for issue field select list options added by Connect apps**, it cannot be used with issue field select list options created in Jira or using operations from the [Issue custom field options](#api-group-Issue-custom-field-options) resource.  **[Permissions](#permissions) required:** Permission to access Jira.

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


$apiInstance = new OpenAPI\Client\Api\IssueCustomFieldOptionsAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field_key = 'field_key_example'; // string | The field key is specified in the following format: **$(app-key)\\_\\_$(field-key)**. For example, *example-add-on\\_\\_example-issue-field*. To determine the `fieldKey` value, do one of the following:   *  open the app's plugin descriptor, then **app-key** is the key at the top and **field-key** is the key in the `jiraIssueFields` module. **app-key** can also be found in the app listing in the Atlassian Universal Plugin Manager.  *  run [Get fields](#api-rest-api-2-field-get) and in the field details the value is returned in `key`. For example, `\"key\": \"teams-add-on__team-issue-field\"`
$start_at = 0; // int | The index of the first item to return in a page of results (page offset).
$max_results = 50; // int | The maximum number of items to return per page.
$project_id = 56; // int | Filters the results to options that are only available in the specified project.

try {
    $result = $apiInstance->getSelectableIssueFieldOptions($field_key, $start_at, $max_results, $project_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueCustomFieldOptionsAppsApi->getSelectableIssueFieldOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **field_key** | **string**| The field key is specified in the following format: **$(app-key)\\_\\_$(field-key)**. For example, *example-add-on\\_\\_example-issue-field*. To determine the &#x60;fieldKey&#x60; value, do one of the following:   *  open the app&#39;s plugin descriptor, then **app-key** is the key at the top and **field-key** is the key in the &#x60;jiraIssueFields&#x60; module. **app-key** can also be found in the app listing in the Atlassian Universal Plugin Manager.  *  run [Get fields](#api-rest-api-2-field-get) and in the field details the value is returned in &#x60;key&#x60;. For example, &#x60;\&quot;key\&quot;: \&quot;teams-add-on__team-issue-field\&quot;&#x60; | |
| **start_at** | **int**| The index of the first item to return in a page of results (page offset). | [optional] [default to 0] |
| **max_results** | **int**| The maximum number of items to return per page. | [optional] [default to 50] |
| **project_id** | **int**| Filters the results to options that are only available in the specified project. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PageBeanIssueFieldOption**](../Model/PageBeanIssueFieldOption.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVisibleIssueFieldOptions()`

```php
getVisibleIssueFieldOptions($field_key, $start_at, $max_results, $project_id): \OpenAPI\Client\Model\PageBeanIssueFieldOption
```

Get visible issue field options

Returns a [paginated](#pagination) list of options for a select list issue field that can be viewed by the user.  Note that this operation **only works for issue field select list options added by Connect apps**, it cannot be used with issue field select list options created in Jira or using operations from the [Issue custom field options](#api-group-Issue-custom-field-options) resource.  **[Permissions](#permissions) required:** Permission to access Jira.

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


$apiInstance = new OpenAPI\Client\Api\IssueCustomFieldOptionsAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field_key = 'field_key_example'; // string | The field key is specified in the following format: **$(app-key)\\_\\_$(field-key)**. For example, *example-add-on\\_\\_example-issue-field*. To determine the `fieldKey` value, do one of the following:   *  open the app's plugin descriptor, then **app-key** is the key at the top and **field-key** is the key in the `jiraIssueFields` module. **app-key** can also be found in the app listing in the Atlassian Universal Plugin Manager.  *  run [Get fields](#api-rest-api-2-field-get) and in the field details the value is returned in `key`. For example, `\"key\": \"teams-add-on__team-issue-field\"`
$start_at = 0; // int | The index of the first item to return in a page of results (page offset).
$max_results = 56; // int | The maximum number of items to return per page.
$project_id = 56; // int | Filters the results to options that are only available in the specified project.

try {
    $result = $apiInstance->getVisibleIssueFieldOptions($field_key, $start_at, $max_results, $project_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueCustomFieldOptionsAppsApi->getVisibleIssueFieldOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **field_key** | **string**| The field key is specified in the following format: **$(app-key)\\_\\_$(field-key)**. For example, *example-add-on\\_\\_example-issue-field*. To determine the &#x60;fieldKey&#x60; value, do one of the following:   *  open the app&#39;s plugin descriptor, then **app-key** is the key at the top and **field-key** is the key in the &#x60;jiraIssueFields&#x60; module. **app-key** can also be found in the app listing in the Atlassian Universal Plugin Manager.  *  run [Get fields](#api-rest-api-2-field-get) and in the field details the value is returned in &#x60;key&#x60;. For example, &#x60;\&quot;key\&quot;: \&quot;teams-add-on__team-issue-field\&quot;&#x60; | |
| **start_at** | **int**| The index of the first item to return in a page of results (page offset). | [optional] [default to 0] |
| **max_results** | **int**| The maximum number of items to return per page. | [optional] |
| **project_id** | **int**| Filters the results to options that are only available in the specified project. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PageBeanIssueFieldOption**](../Model/PageBeanIssueFieldOption.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `replaceIssueFieldOption()`

```php
replaceIssueFieldOption($field_key, $option_id, $replace_with, $jql, $override_screen_security, $override_editable_flag)
```

Replace issue field option

Deselects an issue-field select-list option from all issues where it is selected. A different option can be selected to replace the deselected option. The update can also be limited to a smaller set of issues by using a JQL query.  Connect and Forge app users with *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg) can override the screen security configuration using `overrideScreenSecurity` and `overrideEditableFlag`.  This is an [asynchronous operation](#async). The response object contains a link to the long-running task.  Note that this operation **only works for issue field select list options added by Connect apps**, it cannot be used with issue field select list options created in Jira or using operations from the [Issue custom field options](#api-group-Issue-custom-field-options) resource.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg). Jira permissions are not required for the app providing the field.

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


$apiInstance = new OpenAPI\Client\Api\IssueCustomFieldOptionsAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field_key = 'field_key_example'; // string | The field key is specified in the following format: **$(app-key)\\_\\_$(field-key)**. For example, *example-add-on\\_\\_example-issue-field*. To determine the `fieldKey` value, do one of the following:   *  open the app's plugin descriptor, then **app-key** is the key at the top and **field-key** is the key in the `jiraIssueFields` module. **app-key** can also be found in the app listing in the Atlassian Universal Plugin Manager.  *  run [Get fields](#api-rest-api-2-field-get) and in the field details the value is returned in `key`. For example, `\"key\": \"teams-add-on__team-issue-field\"`
$option_id = 56; // int | The ID of the option to be deselected.
$replace_with = 56; // int | The ID of the option that will replace the currently selected option.
$jql = 'jql_example'; // string | A JQL query that specifies the issues to be updated. For example, *project=10000*.
$override_screen_security = false; // bool | Whether screen security is overridden to enable hidden fields to be edited. Available to Connect and Forge app users with admin permission.
$override_editable_flag = false; // bool | Whether screen security is overridden to enable uneditable fields to be edited. Available to Connect and Forge app users with *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

try {
    $apiInstance->replaceIssueFieldOption($field_key, $option_id, $replace_with, $jql, $override_screen_security, $override_editable_flag);
} catch (Exception $e) {
    echo 'Exception when calling IssueCustomFieldOptionsAppsApi->replaceIssueFieldOption: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **field_key** | **string**| The field key is specified in the following format: **$(app-key)\\_\\_$(field-key)**. For example, *example-add-on\\_\\_example-issue-field*. To determine the &#x60;fieldKey&#x60; value, do one of the following:   *  open the app&#39;s plugin descriptor, then **app-key** is the key at the top and **field-key** is the key in the &#x60;jiraIssueFields&#x60; module. **app-key** can also be found in the app listing in the Atlassian Universal Plugin Manager.  *  run [Get fields](#api-rest-api-2-field-get) and in the field details the value is returned in &#x60;key&#x60;. For example, &#x60;\&quot;key\&quot;: \&quot;teams-add-on__team-issue-field\&quot;&#x60; | |
| **option_id** | **int**| The ID of the option to be deselected. | |
| **replace_with** | **int**| The ID of the option that will replace the currently selected option. | [optional] |
| **jql** | **string**| A JQL query that specifies the issues to be updated. For example, *project&#x3D;10000*. | [optional] |
| **override_screen_security** | **bool**| Whether screen security is overridden to enable hidden fields to be edited. Available to Connect and Forge app users with admin permission. | [optional] [default to false] |
| **override_editable_flag** | **bool**| Whether screen security is overridden to enable uneditable fields to be edited. Available to Connect and Forge app users with *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg). | [optional] [default to false] |

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

## `updateIssueFieldOption()`

```php
updateIssueFieldOption($field_key, $option_id, $issue_field_option): \OpenAPI\Client\Model\IssueFieldOption
```

Update issue field option

Updates or creates an option for a select list issue field. This operation requires that the option ID is provided when creating an option, therefore, the option ID needs to be specified as a path and body parameter. The option ID provided in the path and body must be identical.  Note that this operation **only works for issue field select list options added by Connect apps**, it cannot be used with issue field select list options created in Jira or using operations from the [Issue custom field options](#api-group-Issue-custom-field-options) resource.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg). Jira permissions are not required for the app providing the field.

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


$apiInstance = new OpenAPI\Client\Api\IssueCustomFieldOptionsAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field_key = 'field_key_example'; // string | The field key is specified in the following format: **$(app-key)\\_\\_$(field-key)**. For example, *example-add-on\\_\\_example-issue-field*. To determine the `fieldKey` value, do one of the following:   *  open the app's plugin descriptor, then **app-key** is the key at the top and **field-key** is the key in the `jiraIssueFields` module. **app-key** can also be found in the app listing in the Atlassian Universal Plugin Manager.  *  run [Get fields](#api-rest-api-2-field-get) and in the field details the value is returned in `key`. For example, `\"key\": \"teams-add-on__team-issue-field\"`
$option_id = 56; // int | The ID of the option to be updated.
$issue_field_option = {"config":{"attributes":[],"scope":{"global":{},"projects":[],"projects2":[{"attributes":["notSelectable"],"id":1002},{"attributes":["notSelectable"],"id":1001}]}},"id":1,"properties":{"description":"The team's description","founded":"2016-06-06","leader":{"email":"lname@example.com","name":"Leader Name"},"members":42},"value":"Team 1"}; // \OpenAPI\Client\Model\IssueFieldOption

try {
    $result = $apiInstance->updateIssueFieldOption($field_key, $option_id, $issue_field_option);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueCustomFieldOptionsAppsApi->updateIssueFieldOption: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **field_key** | **string**| The field key is specified in the following format: **$(app-key)\\_\\_$(field-key)**. For example, *example-add-on\\_\\_example-issue-field*. To determine the &#x60;fieldKey&#x60; value, do one of the following:   *  open the app&#39;s plugin descriptor, then **app-key** is the key at the top and **field-key** is the key in the &#x60;jiraIssueFields&#x60; module. **app-key** can also be found in the app listing in the Atlassian Universal Plugin Manager.  *  run [Get fields](#api-rest-api-2-field-get) and in the field details the value is returned in &#x60;key&#x60;. For example, &#x60;\&quot;key\&quot;: \&quot;teams-add-on__team-issue-field\&quot;&#x60; | |
| **option_id** | **int**| The ID of the option to be updated. | |
| **issue_field_option** | [**\OpenAPI\Client\Model\IssueFieldOption**](../Model/IssueFieldOption.md)|  | |

### Return type

[**\OpenAPI\Client\Model\IssueFieldOption**](../Model/IssueFieldOption.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
