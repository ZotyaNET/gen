# OpenAPI\Client\IssuePropertiesApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**bulkDeleteIssueProperty()**](IssuePropertiesApi.md#bulkDeleteIssueProperty) | **DELETE** /rest/api/2/issue/properties/{propertyKey} | Bulk delete issue property |
| [**bulkSetIssuePropertiesByIssue()**](IssuePropertiesApi.md#bulkSetIssuePropertiesByIssue) | **POST** /rest/api/2/issue/properties/multi | Bulk set issue properties by issue |
| [**bulkSetIssueProperty()**](IssuePropertiesApi.md#bulkSetIssueProperty) | **PUT** /rest/api/2/issue/properties/{propertyKey} | Bulk set issue property |
| [**bulkSetIssuesPropertiesList()**](IssuePropertiesApi.md#bulkSetIssuesPropertiesList) | **POST** /rest/api/2/issue/properties | Bulk set issues properties by list |
| [**deleteIssueProperty()**](IssuePropertiesApi.md#deleteIssueProperty) | **DELETE** /rest/api/2/issue/{issueIdOrKey}/properties/{propertyKey} | Delete issue property |
| [**getIssueProperty()**](IssuePropertiesApi.md#getIssueProperty) | **GET** /rest/api/2/issue/{issueIdOrKey}/properties/{propertyKey} | Get issue property |
| [**getIssuePropertyKeys()**](IssuePropertiesApi.md#getIssuePropertyKeys) | **GET** /rest/api/2/issue/{issueIdOrKey}/properties | Get issue property keys |
| [**setIssueProperty()**](IssuePropertiesApi.md#setIssueProperty) | **PUT** /rest/api/2/issue/{issueIdOrKey}/properties/{propertyKey} | Set issue property |


## `bulkDeleteIssueProperty()`

```php
bulkDeleteIssueProperty($property_key, $issue_filter_for_bulk_property_delete)
```

Bulk delete issue property

Deletes a property value from multiple issues. The issues to be updated can be specified by filter criteria.  The criteria the filter used to identify eligible issues are:   *  `entityIds` Only issues from this list are eligible.  *  `currentValue` Only issues with the property set to this value are eligible.  If both criteria is specified, they are joined with the logical *AND*: only issues that satisfy both criteria are considered eligible.  If no filter criteria are specified, all the issues visible to the user and where the user has the EDIT\\_ISSUES permission for the issue are considered eligible.  This operation is:   *  transactional, either the property is deleted from all eligible issues or, when errors occur, no properties are deleted.  *  [asynchronous](#async). Follow the `location` link in the response to determine the status of the task and use [Get task](#api-rest-api-2-task-taskId-get) to obtain subsequent updates.  **[Permissions](#permissions) required:**   *  *Browse projects* [ project permission](https://confluence.atlassian.com/x/yodKLg) for each project containing issues.  *  If [issue-level security](https://confluence.atlassian.com/x/J4lKLg) is configured, issue-level security permission to view the issue.  *  *Edit issues* [project permission](https://confluence.atlassian.com/x/yodKLg) for each issue.

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


$apiInstance = new OpenAPI\Client\Api\IssuePropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_key = 'property_key_example'; // string | The key of the property.
$issue_filter_for_bulk_property_delete = {"currentValue":"deprecated value","entityIds":[10100,100010]}; // \OpenAPI\Client\Model\IssueFilterForBulkPropertyDelete

try {
    $apiInstance->bulkDeleteIssueProperty($property_key, $issue_filter_for_bulk_property_delete);
} catch (Exception $e) {
    echo 'Exception when calling IssuePropertiesApi->bulkDeleteIssueProperty: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **property_key** | **string**| The key of the property. | |
| **issue_filter_for_bulk_property_delete** | [**\OpenAPI\Client\Model\IssueFilterForBulkPropertyDelete**](../Model/IssueFilterForBulkPropertyDelete.md)|  | |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkSetIssuePropertiesByIssue()`

```php
bulkSetIssuePropertiesByIssue($multi_issue_entity_properties)
```

Bulk set issue properties by issue

Sets or updates entity property values on issues. Up to 10 entity properties can be specified for each issue and up to 100 issues included in the request.  The value of the request body must be a [valid](http://tools.ietf.org/html/rfc4627), non-empty JSON.  This operation is:   *  [asynchronous](#async). Follow the `location` link in the response to determine the status of the task and use [Get task](#api-rest-api-2-task-taskId-get) to obtain subsequent updates.  *  non-transactional. Updating some entities may fail. Such information will available in the task result.  **[Permissions](#permissions) required:**   *  *Browse projects* and *Edit issues* [project permissions](https://confluence.atlassian.com/x/yodKLg) for the project containing the issue.  *  If [issue-level security](https://confluence.atlassian.com/x/J4lKLg) is configured, issue-level security permission to view the issue.

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


$apiInstance = new OpenAPI\Client\Api\IssuePropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$multi_issue_entity_properties = {"issues":[{"issueID":1000,"properties":{"myProperty":{"owner":"admin","weight":100}}},{"issueID":1001,"properties":{"myOtherProperty":{"cost":150,"transportation":"car"}}}]}; // \OpenAPI\Client\Model\MultiIssueEntityProperties | Details of the issue properties to be set or updated. Note that if an issue is not found, it is ignored.

try {
    $apiInstance->bulkSetIssuePropertiesByIssue($multi_issue_entity_properties);
} catch (Exception $e) {
    echo 'Exception when calling IssuePropertiesApi->bulkSetIssuePropertiesByIssue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **multi_issue_entity_properties** | [**\OpenAPI\Client\Model\MultiIssueEntityProperties**](../Model/MultiIssueEntityProperties.md)| Details of the issue properties to be set or updated. Note that if an issue is not found, it is ignored. | |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkSetIssueProperty()`

```php
bulkSetIssueProperty($property_key, $bulk_issue_property_update_request)
```

Bulk set issue property

Sets a property value on multiple issues.  The value set can be a constant or determined by a [Jira expression](https://developer.atlassian.com/cloud/jira/platform/jira-expressions/). Expressions must be computable with constant complexity when applied to a set of issues. Expressions must also comply with the [restrictions](https://developer.atlassian.com/cloud/jira/platform/jira-expressions/#restrictions) that apply to all Jira expressions.  The issues to be updated can be specified by a filter.  The filter identifies issues eligible for update using these criteria:   *  `entityIds` Only issues from this list are eligible.  *  `currentValue` Only issues with the property set to this value are eligible.  *  `hasProperty`:           *  If *true*, only issues with the property are eligible.      *  If *false*, only issues without the property are eligible.  If more than one criteria is specified, they are joined with the logical *AND*: only issues that satisfy all criteria are eligible.  If an invalid combination of criteria is provided, an error is returned. For example, specifying a `currentValue` and `hasProperty` as *false* would not match any issues (because without the property the property cannot have a value).  The filter is optional. Without the filter all the issues visible to the user and where the user has the EDIT\\_ISSUES permission for the issue are considered eligible.  This operation is:   *  transactional, either all eligible issues are updated or, when errors occur, none are updated.  *  [asynchronous](#async). Follow the `location` link in the response to determine the status of the task and use [Get task](#api-rest-api-2-task-taskId-get) to obtain subsequent updates.  **[Permissions](#permissions) required:**   *  *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for each project containing issues.  *  If [issue-level security](https://confluence.atlassian.com/x/J4lKLg) is configured, issue-level security permission to view the issue.  *  *Edit issues* [project permission](https://confluence.atlassian.com/x/yodKLg) for each issue.

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


$apiInstance = new OpenAPI\Client\Api\IssuePropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_key = 'property_key_example'; // string | The key of the property. The maximum length is 255 characters.
$bulk_issue_property_update_request = {"filter":{"currentValue":{"owner":"admin","weight":50},"entityIds":[10100,100010],"hasProperty":true},"value":{"owner":"admin","weight":100}}; // \OpenAPI\Client\Model\BulkIssuePropertyUpdateRequest

try {
    $apiInstance->bulkSetIssueProperty($property_key, $bulk_issue_property_update_request);
} catch (Exception $e) {
    echo 'Exception when calling IssuePropertiesApi->bulkSetIssueProperty: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **property_key** | **string**| The key of the property. The maximum length is 255 characters. | |
| **bulk_issue_property_update_request** | [**\OpenAPI\Client\Model\BulkIssuePropertyUpdateRequest**](../Model/BulkIssuePropertyUpdateRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkSetIssuesPropertiesList()`

```php
bulkSetIssuesPropertiesList($issue_entity_properties)
```

Bulk set issues properties by list

Sets or updates a list of entity property values on issues. A list of up to 10 entity properties can be specified along with up to 10,000 issues on which to set or update that list of entity properties.  The value of the request body must be a [valid](http://tools.ietf.org/html/rfc4627), non-empty JSON. The maximum length of single issue property value is 32768 characters. This operation can be accessed anonymously.  This operation is:   *  transactional, either all properties are updated in all eligible issues or, when errors occur, no properties are updated.  *  [asynchronous](#async). Follow the `location` link in the response to determine the status of the task and use [Get task](#api-rest-api-2-task-taskId-get) to obtain subsequent updates.  **[Permissions](#permissions) required:**   *  *Browse projects* and *Edit issues* [project permissions](https://confluence.atlassian.com/x/yodKLg) for the project containing the issue.  *  If [issue-level security](https://confluence.atlassian.com/x/J4lKLg) is configured, issue-level security permission to view the issue.

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


$apiInstance = new OpenAPI\Client\Api\IssuePropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_entity_properties = new \OpenAPI\Client\Model\IssueEntityProperties(); // \OpenAPI\Client\Model\IssueEntityProperties | Issue properties to be set or updated with values.

try {
    $apiInstance->bulkSetIssuesPropertiesList($issue_entity_properties);
} catch (Exception $e) {
    echo 'Exception when calling IssuePropertiesApi->bulkSetIssuesPropertiesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_entity_properties** | [**\OpenAPI\Client\Model\IssueEntityProperties**](../Model/IssueEntityProperties.md)| Issue properties to be set or updated with values. | |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteIssueProperty()`

```php
deleteIssueProperty($issue_id_or_key, $property_key)
```

Delete issue property

Deletes an issue's property.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:**   *  *Browse projects* and *Edit issues* [project permissions](https://confluence.atlassian.com/x/yodKLg) for the project containing the issue.  *  If [issue-level security](https://confluence.atlassian.com/x/J4lKLg) is configured, issue-level security permission to view the issue.

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


$apiInstance = new OpenAPI\Client\Api\IssuePropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_id_or_key = 'issue_id_or_key_example'; // string | The key or ID of the issue.
$property_key = 'property_key_example'; // string | The key of the property.

try {
    $apiInstance->deleteIssueProperty($issue_id_or_key, $property_key);
} catch (Exception $e) {
    echo 'Exception when calling IssuePropertiesApi->deleteIssueProperty: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_id_or_key** | **string**| The key or ID of the issue. | |
| **property_key** | **string**| The key of the property. | |

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

## `getIssueProperty()`

```php
getIssueProperty($issue_id_or_key, $property_key): \OpenAPI\Client\Model\EntityProperty
```

Get issue property

Returns the key and value of an issue's property.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:**   *  *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project containing the issue.  *  If [issue-level security](https://confluence.atlassian.com/x/J4lKLg) is configured, issue-level security permission to view the issue.

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


$apiInstance = new OpenAPI\Client\Api\IssuePropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_id_or_key = 'issue_id_or_key_example'; // string | The key or ID of the issue.
$property_key = 'property_key_example'; // string | The key of the property.

try {
    $result = $apiInstance->getIssueProperty($issue_id_or_key, $property_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuePropertiesApi->getIssueProperty: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_id_or_key** | **string**| The key or ID of the issue. | |
| **property_key** | **string**| The key of the property. | |

### Return type

[**\OpenAPI\Client\Model\EntityProperty**](../Model/EntityProperty.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIssuePropertyKeys()`

```php
getIssuePropertyKeys($issue_id_or_key): \OpenAPI\Client\Model\PropertyKeys
```

Get issue property keys

Returns the URLs and keys of an issue's properties.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** Property details are only returned where the user has:   *  *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project containing the issue.  *  If [issue-level security](https://confluence.atlassian.com/x/J4lKLg) is configured, issue-level security permission to view the issue.

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


$apiInstance = new OpenAPI\Client\Api\IssuePropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_id_or_key = 'issue_id_or_key_example'; // string | The key or ID of the issue.

try {
    $result = $apiInstance->getIssuePropertyKeys($issue_id_or_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuePropertiesApi->getIssuePropertyKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_id_or_key** | **string**| The key or ID of the issue. | |

### Return type

[**\OpenAPI\Client\Model\PropertyKeys**](../Model/PropertyKeys.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setIssueProperty()`

```php
setIssueProperty($issue_id_or_key, $property_key, $body): mixed
```

Set issue property

Sets the value of an issue's property. Use this resource to store custom data against an issue.  The value of the request body must be a [valid](http://tools.ietf.org/html/rfc4627), non-empty JSON blob. The maximum length is 32768 characters.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:**   *  *Browse projects* and *Edit issues* [project permissions](https://confluence.atlassian.com/x/yodKLg) for the project containing the issue.  *  If [issue-level security](https://confluence.atlassian.com/x/J4lKLg) is configured, issue-level security permission to view the issue.

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


$apiInstance = new OpenAPI\Client\Api\IssuePropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_id_or_key = 'issue_id_or_key_example'; // string | The ID or key of the issue.
$property_key = 'property_key_example'; // string | The key of the issue property. The maximum length is 255 characters.
$body = NULL; // mixed

try {
    $result = $apiInstance->setIssueProperty($issue_id_or_key, $property_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuePropertiesApi->setIssueProperty: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_id_or_key** | **string**| The ID or key of the issue. | |
| **property_key** | **string**| The key of the issue property. The maximum length is 255 characters. | |
| **body** | **mixed**|  | |

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
