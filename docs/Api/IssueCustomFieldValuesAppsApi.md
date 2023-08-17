# OpenAPI\Client\IssueCustomFieldValuesAppsApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**updateCustomFieldValue()**](IssueCustomFieldValuesAppsApi.md#updateCustomFieldValue) | **PUT** /rest/api/2/app/field/{fieldIdOrKey}/value | Update custom field value |
| [**updateMultipleCustomFieldValues()**](IssueCustomFieldValuesAppsApi.md#updateMultipleCustomFieldValues) | **POST** /rest/api/2/app/field/value | Update custom fields |


## `updateCustomFieldValue()`

```php
updateCustomFieldValue($field_id_or_key, $custom_field_value_update_details, $generate_changelog): mixed
```

Update custom field value

Updates the value of a custom field on one or more issues. Custom fields can only be updated by the Forge app that created them.  **[Permissions](#permissions) required:** Only the app that created the custom field can update its values with this operation.

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


$apiInstance = new OpenAPI\Client\Api\IssueCustomFieldValuesAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field_id_or_key = 'field_id_or_key_example'; // string | The ID or key of the custom field. For example, `customfield_10010`.
$custom_field_value_update_details = {"updates":[{"issueIds":[10010],"value":"new value"}]}; // \OpenAPI\Client\Model\CustomFieldValueUpdateDetails
$generate_changelog = true; // bool | Whether to generate a changelog for this update.

try {
    $result = $apiInstance->updateCustomFieldValue($field_id_or_key, $custom_field_value_update_details, $generate_changelog);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueCustomFieldValuesAppsApi->updateCustomFieldValue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **field_id_or_key** | **string**| The ID or key of the custom field. For example, &#x60;customfield_10010&#x60;. | |
| **custom_field_value_update_details** | [**\OpenAPI\Client\Model\CustomFieldValueUpdateDetails**](../Model/CustomFieldValueUpdateDetails.md)|  | |
| **generate_changelog** | **bool**| Whether to generate a changelog for this update. | [optional] [default to true] |

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

## `updateMultipleCustomFieldValues()`

```php
updateMultipleCustomFieldValues($multiple_custom_field_values_update_details, $generate_changelog): mixed
```

Update custom fields

Updates the value of one or more custom fields on one or more issues. Combinations of custom field and issue should be unique within the request. Custom fields can only be updated by the Forge app that created them.  **[Permissions](#permissions) required:** Only the app that created the custom field can update its values with this operation.

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


$apiInstance = new OpenAPI\Client\Api\IssueCustomFieldValuesAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$multiple_custom_field_values_update_details = {"updates":[{"customField":"customfield_10010","issueIds":[10010,10011],"value":"new value"},{"customField":"customfield_10011","issueIds":[10010],"value":1000}]}; // \OpenAPI\Client\Model\MultipleCustomFieldValuesUpdateDetails
$generate_changelog = true; // bool | Whether to generate a changelog for this update.

try {
    $result = $apiInstance->updateMultipleCustomFieldValues($multiple_custom_field_values_update_details, $generate_changelog);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueCustomFieldValuesAppsApi->updateMultipleCustomFieldValues: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **multiple_custom_field_values_update_details** | [**\OpenAPI\Client\Model\MultipleCustomFieldValuesUpdateDetails**](../Model/MultipleCustomFieldValuesUpdateDetails.md)|  | |
| **generate_changelog** | **bool**| Whether to generate a changelog for this update. | [optional] [default to true] |

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
