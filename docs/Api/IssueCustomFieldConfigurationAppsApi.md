# OpenAPI\Client\IssueCustomFieldConfigurationAppsApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCustomFieldConfiguration()**](IssueCustomFieldConfigurationAppsApi.md#getCustomFieldConfiguration) | **GET** /rest/api/2/app/field/{fieldIdOrKey}/context/configuration | Get custom field configurations |
| [**updateCustomFieldConfiguration()**](IssueCustomFieldConfigurationAppsApi.md#updateCustomFieldConfiguration) | **PUT** /rest/api/2/app/field/{fieldIdOrKey}/context/configuration | Update custom field configurations |


## `getCustomFieldConfiguration()`

```php
getCustomFieldConfiguration($field_id_or_key, $id, $field_context_id, $issue_id, $project_key_or_id, $issue_type_id, $start_at, $max_results): \OpenAPI\Client\Model\PageBeanContextualConfiguration
```

Get custom field configurations

Returns a [paginated](#pagination) list of configurations for a custom field created by a [Forge app](https://developer.atlassian.com/platform/forge/).  The result can be filtered by one of these criteria:   *  `id`.  *  `fieldContextId`.  *  `issueId`.  *  `projectKeyOrId` and `issueTypeId`.  Otherwise, all configurations are returned.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg). Jira permissions are not required for the Forge app that created the custom field.

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


$apiInstance = new OpenAPI\Client\Api\IssueCustomFieldConfigurationAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field_id_or_key = 'field_id_or_key_example'; // string | The ID or key of the custom field, for example `customfield_10000`.
$id = array(56); // int[] | The list of configuration IDs. To include multiple configurations, separate IDs with an ampersand: `id=10000&id=10001`. Can't be provided with `fieldContextId`, `issueId`, `projectKeyOrId`, or `issueTypeId`.
$field_context_id = array(56); // int[] | The list of field context IDs. To include multiple field contexts, separate IDs with an ampersand: `fieldContextId=10000&fieldContextId=10001`. Can't be provided with `id`, `issueId`, `projectKeyOrId`, or `issueTypeId`.
$issue_id = 56; // int | The ID of the issue to filter results by. If the issue doesn't exist, an empty list is returned. Can't be provided with `projectKeyOrId`, or `issueTypeId`.
$project_key_or_id = 'project_key_or_id_example'; // string | The ID or key of the project to filter results by. Must be provided with `issueTypeId`. Can't be provided with `issueId`.
$issue_type_id = 'issue_type_id_example'; // string | The ID of the issue type to filter results by. Must be provided with `projectKeyOrId`. Can't be provided with `issueId`.
$start_at = 0; // int | The index of the first item to return in a page of results (page offset).
$max_results = 100; // int | The maximum number of items to return per page.

try {
    $result = $apiInstance->getCustomFieldConfiguration($field_id_or_key, $id, $field_context_id, $issue_id, $project_key_or_id, $issue_type_id, $start_at, $max_results);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueCustomFieldConfigurationAppsApi->getCustomFieldConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **field_id_or_key** | **string**| The ID or key of the custom field, for example &#x60;customfield_10000&#x60;. | |
| **id** | [**int[]**](../Model/int.md)| The list of configuration IDs. To include multiple configurations, separate IDs with an ampersand: &#x60;id&#x3D;10000&amp;id&#x3D;10001&#x60;. Can&#39;t be provided with &#x60;fieldContextId&#x60;, &#x60;issueId&#x60;, &#x60;projectKeyOrId&#x60;, or &#x60;issueTypeId&#x60;. | [optional] |
| **field_context_id** | [**int[]**](../Model/int.md)| The list of field context IDs. To include multiple field contexts, separate IDs with an ampersand: &#x60;fieldContextId&#x3D;10000&amp;fieldContextId&#x3D;10001&#x60;. Can&#39;t be provided with &#x60;id&#x60;, &#x60;issueId&#x60;, &#x60;projectKeyOrId&#x60;, or &#x60;issueTypeId&#x60;. | [optional] |
| **issue_id** | **int**| The ID of the issue to filter results by. If the issue doesn&#39;t exist, an empty list is returned. Can&#39;t be provided with &#x60;projectKeyOrId&#x60;, or &#x60;issueTypeId&#x60;. | [optional] |
| **project_key_or_id** | **string**| The ID or key of the project to filter results by. Must be provided with &#x60;issueTypeId&#x60;. Can&#39;t be provided with &#x60;issueId&#x60;. | [optional] |
| **issue_type_id** | **string**| The ID of the issue type to filter results by. Must be provided with &#x60;projectKeyOrId&#x60;. Can&#39;t be provided with &#x60;issueId&#x60;. | [optional] |
| **start_at** | **int**| The index of the first item to return in a page of results (page offset). | [optional] [default to 0] |
| **max_results** | **int**| The maximum number of items to return per page. | [optional] [default to 100] |

### Return type

[**\OpenAPI\Client\Model\PageBeanContextualConfiguration**](../Model/PageBeanContextualConfiguration.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCustomFieldConfiguration()`

```php
updateCustomFieldConfiguration($field_id_or_key, $custom_field_configurations): mixed
```

Update custom field configurations

Update the configuration for contexts of a custom field created by a [Forge app](https://developer.atlassian.com/platform/forge/).  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg). Jira permissions are not required for the Forge app that created the custom field.

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


$apiInstance = new OpenAPI\Client\Api\IssueCustomFieldConfigurationAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field_id_or_key = 'field_id_or_key_example'; // string | The ID or key of the custom field, for example `customfield_10000`.
$custom_field_configurations = {"configurations":[{"id":"10000"},{"configuration":{"maxValue":10000,"minValue":0},"id":"10001","schema":{"properties":{"amount":{"type":"number"},"currency":{"type":"string"}},"required":["amount","currency"]}}]}; // \OpenAPI\Client\Model\CustomFieldConfigurations

try {
    $result = $apiInstance->updateCustomFieldConfiguration($field_id_or_key, $custom_field_configurations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueCustomFieldConfigurationAppsApi->updateCustomFieldConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **field_id_or_key** | **string**| The ID or key of the custom field, for example &#x60;customfield_10000&#x60;. | |
| **custom_field_configurations** | [**\OpenAPI\Client\Model\CustomFieldConfigurations**](../Model/CustomFieldConfigurations.md)|  | |

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
