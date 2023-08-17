# OpenAPI\Client\AppMigrationApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**appIssueFieldValueUpdateResourceUpdateIssueFieldsPut()**](AppMigrationApi.md#appIssueFieldValueUpdateResourceUpdateIssueFieldsPut) | **PUT** /rest/atlassian-connect/1/migration/field | Bulk update custom field value |
| [**migrationResourceUpdateEntityPropertiesValuePut()**](AppMigrationApi.md#migrationResourceUpdateEntityPropertiesValuePut) | **PUT** /rest/atlassian-connect/1/migration/properties/{entityType} | Bulk update entity properties |
| [**migrationResourceWorkflowRuleSearchPost()**](AppMigrationApi.md#migrationResourceWorkflowRuleSearchPost) | **POST** /rest/atlassian-connect/1/migration/workflow/rule/search | Get workflow transition rule configurations |


## `appIssueFieldValueUpdateResourceUpdateIssueFieldsPut()`

```php
appIssueFieldValueUpdateResourceUpdateIssueFieldsPut($atlassian_transfer_id, $connect_custom_field_values): mixed
```

Bulk update custom field value

Updates the value of a custom field added by Connect apps on one or more issues. The values of up to 200 custom fields can be updated.  **[Permissions](#permissions) required:** Only Connect apps can make this request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppMigrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$atlassian_transfer_id = 'atlassian_transfer_id_example'; // string | The ID of the transfer.
$connect_custom_field_values = {"updateValueList":[{"_type":"StringIssueField","issueID":10001,"fieldID":10076,"string":"new string value"},{"_type":"TextIssueField","issueID":10002,"fieldID":10077,"text":"new text value"},{"_type":"SingleSelectIssueField","issueID":10003,"fieldID":10078,"optionID":"1"},{"_type":"MultiSelectIssueField","issueID":10004,"fieldID":10079,"optionID":"2"},{"_type":"RichTextIssueField","issueID":10005,"fieldID":10080,"richText":"new rich text value"},{"_type":"NumberIssueField","issueID":10006,"fieldID":10082,"number":54}]}; // \OpenAPI\Client\Model\ConnectCustomFieldValues

try {
    $result = $apiInstance->appIssueFieldValueUpdateResourceUpdateIssueFieldsPut($atlassian_transfer_id, $connect_custom_field_values);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppMigrationApi->appIssueFieldValueUpdateResourceUpdateIssueFieldsPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **atlassian_transfer_id** | **string**| The ID of the transfer. | |
| **connect_custom_field_values** | [**\OpenAPI\Client\Model\ConnectCustomFieldValues**](../Model/ConnectCustomFieldValues.md)|  | |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `migrationResourceUpdateEntityPropertiesValuePut()`

```php
migrationResourceUpdateEntityPropertiesValuePut($atlassian_transfer_id, $entity_type, $entity_property_details)
```

Bulk update entity properties

Updates the values of multiple entity properties for an object, up to 50 updates per request. This operation is for use by Connect apps during app migration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppMigrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$atlassian_transfer_id = 'atlassian_transfer_id_example'; // string | The app migration transfer ID.
$entity_type = 'entity_type_example'; // string | The type indicating the object that contains the entity properties.
$entity_property_details = array(new \OpenAPI\Client\Model\EntityPropertyDetails()); // \OpenAPI\Client\Model\EntityPropertyDetails[]

try {
    $apiInstance->migrationResourceUpdateEntityPropertiesValuePut($atlassian_transfer_id, $entity_type, $entity_property_details);
} catch (Exception $e) {
    echo 'Exception when calling AppMigrationApi->migrationResourceUpdateEntityPropertiesValuePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **atlassian_transfer_id** | **string**| The app migration transfer ID. | |
| **entity_type** | **string**| The type indicating the object that contains the entity properties. | |
| **entity_property_details** | [**\OpenAPI\Client\Model\EntityPropertyDetails[]**](../Model/EntityPropertyDetails.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `migrationResourceWorkflowRuleSearchPost()`

```php
migrationResourceWorkflowRuleSearchPost($atlassian_transfer_id, $workflow_rules_search): \OpenAPI\Client\Model\WorkflowRulesSearchDetails
```

Get workflow transition rule configurations

Returns configurations for workflow transition rules migrated from server to cloud and owned by the calling Connect app.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppMigrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$atlassian_transfer_id = 'atlassian_transfer_id_example'; // string | The app migration transfer ID.
$workflow_rules_search = new \OpenAPI\Client\Model\WorkflowRulesSearch(); // \OpenAPI\Client\Model\WorkflowRulesSearch

try {
    $result = $apiInstance->migrationResourceWorkflowRuleSearchPost($atlassian_transfer_id, $workflow_rules_search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppMigrationApi->migrationResourceWorkflowRuleSearchPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **atlassian_transfer_id** | **string**| The app migration transfer ID. | |
| **workflow_rules_search** | [**\OpenAPI\Client\Model\WorkflowRulesSearch**](../Model/WorkflowRulesSearch.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WorkflowRulesSearchDetails**](../Model/WorkflowRulesSearchDetails.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
