# OpenAPI\Client\IssueCustomFieldOptionsApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCustomFieldOption()**](IssueCustomFieldOptionsApi.md#createCustomFieldOption) | **POST** /rest/api/2/field/{fieldId}/context/{contextId}/option | Create custom field options (context) |
| [**deleteCustomFieldOption()**](IssueCustomFieldOptionsApi.md#deleteCustomFieldOption) | **DELETE** /rest/api/2/field/{fieldId}/context/{contextId}/option/{optionId} | Delete custom field options (context) |
| [**getCustomFieldOption()**](IssueCustomFieldOptionsApi.md#getCustomFieldOption) | **GET** /rest/api/2/customFieldOption/{id} | Get custom field option |
| [**getOptionsForContext()**](IssueCustomFieldOptionsApi.md#getOptionsForContext) | **GET** /rest/api/2/field/{fieldId}/context/{contextId}/option | Get custom field options (context) |
| [**reorderCustomFieldOptions()**](IssueCustomFieldOptionsApi.md#reorderCustomFieldOptions) | **PUT** /rest/api/2/field/{fieldId}/context/{contextId}/option/move | Reorder custom field options (context) |
| [**updateCustomFieldOption()**](IssueCustomFieldOptionsApi.md#updateCustomFieldOption) | **PUT** /rest/api/2/field/{fieldId}/context/{contextId}/option | Update custom field options (context) |


## `createCustomFieldOption()`

```php
createCustomFieldOption($field_id, $context_id, $bulk_custom_field_option_create_request): \OpenAPI\Client\Model\CustomFieldCreatedContextOptionsList
```

Create custom field options (context)

Creates options and, where the custom select field is of the type Select List (cascading), cascading options for a custom select field. The options are added to a context of the field.  The maximum number of options that can be created per request is 1000 and each field can have a maximum of 10000 options.  This operation works for custom field options created in Jira or the operations from this resource. **To work with issue field select list options created for Connect apps use the [Issue custom field options (apps)](#api-group-issue-custom-field-options--apps-) operations.**  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueCustomFieldOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field_id = 'field_id_example'; // string | The ID of the custom field.
$context_id = 56; // int | The ID of the context.
$bulk_custom_field_option_create_request = {"options":[{"disabled":false,"value":"Scranton"},{"disabled":true,"optionId":"10000","value":"Manhattan"},{"disabled":false,"value":"The Electric City"}]}; // \OpenAPI\Client\Model\BulkCustomFieldOptionCreateRequest

try {
    $result = $apiInstance->createCustomFieldOption($field_id, $context_id, $bulk_custom_field_option_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueCustomFieldOptionsApi->createCustomFieldOption: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **field_id** | **string**| The ID of the custom field. | |
| **context_id** | **int**| The ID of the context. | |
| **bulk_custom_field_option_create_request** | [**\OpenAPI\Client\Model\BulkCustomFieldOptionCreateRequest**](../Model/BulkCustomFieldOptionCreateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CustomFieldCreatedContextOptionsList**](../Model/CustomFieldCreatedContextOptionsList.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCustomFieldOption()`

```php
deleteCustomFieldOption($field_id, $context_id, $option_id)
```

Delete custom field options (context)

Deletes a custom field option.  Options with cascading options cannot be deleted without deleting the cascading options first.  This operation works for custom field options created in Jira or the operations from this resource. **To work with issue field select list options created for Connect apps use the [Issue custom field options (apps)](#api-group-issue-custom-field-options--apps-) operations.**  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueCustomFieldOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field_id = 'field_id_example'; // string | The ID of the custom field.
$context_id = 56; // int | The ID of the context from which an option should be deleted.
$option_id = 56; // int | The ID of the option to delete.

try {
    $apiInstance->deleteCustomFieldOption($field_id, $context_id, $option_id);
} catch (Exception $e) {
    echo 'Exception when calling IssueCustomFieldOptionsApi->deleteCustomFieldOption: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **field_id** | **string**| The ID of the custom field. | |
| **context_id** | **int**| The ID of the context from which an option should be deleted. | |
| **option_id** | **int**| The ID of the option to delete. | |

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

## `getCustomFieldOption()`

```php
getCustomFieldOption($id): \OpenAPI\Client\Model\CustomFieldOption
```

Get custom field option

Returns a custom field option. For example, an option in a select list.  Note that this operation **only works for issue field select list options created in Jira or using operations from the [Issue custom field options](#api-group-Issue-custom-field-options) resource**, it cannot be used with issue field select list options created by Connect apps.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** The custom field option is returned as follows:   *  if the user has the *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).  *  if the user has the *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for at least one project the custom field is used in, and the field is visible in at least one layout the user has permission to view.

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


$apiInstance = new OpenAPI\Client\Api\IssueCustomFieldOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the custom field option.

try {
    $result = $apiInstance->getCustomFieldOption($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueCustomFieldOptionsApi->getCustomFieldOption: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the custom field option. | |

### Return type

[**\OpenAPI\Client\Model\CustomFieldOption**](../Model/CustomFieldOption.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOptionsForContext()`

```php
getOptionsForContext($field_id, $context_id, $option_id, $only_options, $start_at, $max_results): \OpenAPI\Client\Model\PageBeanCustomFieldContextOption
```

Get custom field options (context)

Returns a [paginated](#pagination) list of all custom field option for a context. Options are returned first then cascading options, in the order they display in Jira.  This operation works for custom field options created in Jira or the operations from this resource. **To work with issue field select list options created for Connect apps use the [Issue custom field options (apps)](#api-group-issue-custom-field-options--apps-) operations.**  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueCustomFieldOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field_id = 'field_id_example'; // string | The ID of the custom field.
$context_id = 56; // int | The ID of the context.
$option_id = 56; // int | The ID of the option.
$only_options = false; // bool | Whether only options are returned.
$start_at = 0; // int | The index of the first item to return in a page of results (page offset).
$max_results = 100; // int | The maximum number of items to return per page.

try {
    $result = $apiInstance->getOptionsForContext($field_id, $context_id, $option_id, $only_options, $start_at, $max_results);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueCustomFieldOptionsApi->getOptionsForContext: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **field_id** | **string**| The ID of the custom field. | |
| **context_id** | **int**| The ID of the context. | |
| **option_id** | **int**| The ID of the option. | [optional] |
| **only_options** | **bool**| Whether only options are returned. | [optional] [default to false] |
| **start_at** | **int**| The index of the first item to return in a page of results (page offset). | [optional] [default to 0] |
| **max_results** | **int**| The maximum number of items to return per page. | [optional] [default to 100] |

### Return type

[**\OpenAPI\Client\Model\PageBeanCustomFieldContextOption**](../Model/PageBeanCustomFieldContextOption.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reorderCustomFieldOptions()`

```php
reorderCustomFieldOptions($field_id, $context_id, $order_of_custom_field_options): mixed
```

Reorder custom field options (context)

Changes the order of custom field options or cascading options in a context.  This operation works for custom field options created in Jira or the operations from this resource. **To work with issue field select list options created for Connect apps use the [Issue custom field options (apps)](#api-group-issue-custom-field-options--apps-) operations.**  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueCustomFieldOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field_id = 'field_id_example'; // string | The ID of the custom field.
$context_id = 56; // int | The ID of the context.
$order_of_custom_field_options = {"customFieldOptionIds":["10001","10002"],"position":"First"}; // \OpenAPI\Client\Model\OrderOfCustomFieldOptions

try {
    $result = $apiInstance->reorderCustomFieldOptions($field_id, $context_id, $order_of_custom_field_options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueCustomFieldOptionsApi->reorderCustomFieldOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **field_id** | **string**| The ID of the custom field. | |
| **context_id** | **int**| The ID of the context. | |
| **order_of_custom_field_options** | [**\OpenAPI\Client\Model\OrderOfCustomFieldOptions**](../Model/OrderOfCustomFieldOptions.md)|  | |

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

## `updateCustomFieldOption()`

```php
updateCustomFieldOption($field_id, $context_id, $bulk_custom_field_option_update_request): \OpenAPI\Client\Model\CustomFieldUpdatedContextOptionsList
```

Update custom field options (context)

Updates the options of a custom field.  If any of the options are not found, no options are updated. Options where the values in the request match the current values aren't updated and aren't reported in the response.  Note that this operation **only works for issue field select list options created in Jira or using operations from the [Issue custom field options](#api-group-Issue-custom-field-options) resource**, it cannot be used with issue field select list options created by Connect apps.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueCustomFieldOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field_id = 'field_id_example'; // string | The ID of the custom field.
$context_id = 56; // int | The ID of the context.
$bulk_custom_field_option_update_request = {"options":[{"disabled":false,"id":"10001","value":"Scranton"},{"disabled":true,"id":"10002","value":"Manhattan"},{"disabled":false,"id":"10003","value":"The Electric City"}]}; // \OpenAPI\Client\Model\BulkCustomFieldOptionUpdateRequest

try {
    $result = $apiInstance->updateCustomFieldOption($field_id, $context_id, $bulk_custom_field_option_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueCustomFieldOptionsApi->updateCustomFieldOption: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **field_id** | **string**| The ID of the custom field. | |
| **context_id** | **int**| The ID of the context. | |
| **bulk_custom_field_option_update_request** | [**\OpenAPI\Client\Model\BulkCustomFieldOptionUpdateRequest**](../Model/BulkCustomFieldOptionUpdateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CustomFieldUpdatedContextOptionsList**](../Model/CustomFieldUpdatedContextOptionsList.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
