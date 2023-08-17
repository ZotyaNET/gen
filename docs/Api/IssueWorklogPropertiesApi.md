# OpenAPI\Client\IssueWorklogPropertiesApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteWorklogProperty()**](IssueWorklogPropertiesApi.md#deleteWorklogProperty) | **DELETE** /rest/api/2/issue/{issueIdOrKey}/worklog/{worklogId}/properties/{propertyKey} | Delete worklog property |
| [**getWorklogProperty()**](IssueWorklogPropertiesApi.md#getWorklogProperty) | **GET** /rest/api/2/issue/{issueIdOrKey}/worklog/{worklogId}/properties/{propertyKey} | Get worklog property |
| [**getWorklogPropertyKeys()**](IssueWorklogPropertiesApi.md#getWorklogPropertyKeys) | **GET** /rest/api/2/issue/{issueIdOrKey}/worklog/{worklogId}/properties | Get worklog property keys |
| [**setWorklogProperty()**](IssueWorklogPropertiesApi.md#setWorklogProperty) | **PUT** /rest/api/2/issue/{issueIdOrKey}/worklog/{worklogId}/properties/{propertyKey} | Set worklog property |


## `deleteWorklogProperty()`

```php
deleteWorklogProperty($issue_id_or_key, $worklog_id, $property_key)
```

Delete worklog property

Deletes a worklog property.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:**   *  *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project that the issue is in.  *  If [issue-level security](https://confluence.atlassian.com/x/J4lKLg) is configured, issue-level security permission to view the issue.  *  If the worklog has visibility restrictions, belongs to the group or has the role visibility is restricted to.

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


$apiInstance = new OpenAPI\Client\Api\IssueWorklogPropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_id_or_key = 'issue_id_or_key_example'; // string | The ID or key of the issue.
$worklog_id = 'worklog_id_example'; // string | The ID of the worklog.
$property_key = 'property_key_example'; // string | The key of the property.

try {
    $apiInstance->deleteWorklogProperty($issue_id_or_key, $worklog_id, $property_key);
} catch (Exception $e) {
    echo 'Exception when calling IssueWorklogPropertiesApi->deleteWorklogProperty: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_id_or_key** | **string**| The ID or key of the issue. | |
| **worklog_id** | **string**| The ID of the worklog. | |
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

## `getWorklogProperty()`

```php
getWorklogProperty($issue_id_or_key, $worklog_id, $property_key): \OpenAPI\Client\Model\EntityProperty
```

Get worklog property

Returns the value of a worklog property.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:**   *  *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project that the issue is in.  *  If [issue-level security](https://confluence.atlassian.com/x/J4lKLg) is configured, issue-level security permission to view the issue.  *  If the worklog has visibility restrictions, belongs to the group or has the role visibility is restricted to.

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


$apiInstance = new OpenAPI\Client\Api\IssueWorklogPropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_id_or_key = 'issue_id_or_key_example'; // string | The ID or key of the issue.
$worklog_id = 'worklog_id_example'; // string | The ID of the worklog.
$property_key = 'property_key_example'; // string | The key of the property.

try {
    $result = $apiInstance->getWorklogProperty($issue_id_or_key, $worklog_id, $property_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueWorklogPropertiesApi->getWorklogProperty: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_id_or_key** | **string**| The ID or key of the issue. | |
| **worklog_id** | **string**| The ID of the worklog. | |
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

## `getWorklogPropertyKeys()`

```php
getWorklogPropertyKeys($issue_id_or_key, $worklog_id): \OpenAPI\Client\Model\PropertyKeys
```

Get worklog property keys

Returns the keys of all properties for a worklog.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:**   *  *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project that the issue is in.  *  If [issue-level security](https://confluence.atlassian.com/x/J4lKLg) is configured, issue-level security permission to view the issue.  *  If the worklog has visibility restrictions, belongs to the group or has the role visibility is restricted to.

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


$apiInstance = new OpenAPI\Client\Api\IssueWorklogPropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_id_or_key = 'issue_id_or_key_example'; // string | The ID or key of the issue.
$worklog_id = 'worklog_id_example'; // string | The ID of the worklog.

try {
    $result = $apiInstance->getWorklogPropertyKeys($issue_id_or_key, $worklog_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueWorklogPropertiesApi->getWorklogPropertyKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_id_or_key** | **string**| The ID or key of the issue. | |
| **worklog_id** | **string**| The ID of the worklog. | |

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

## `setWorklogProperty()`

```php
setWorklogProperty($issue_id_or_key, $worklog_id, $property_key, $body): mixed
```

Set worklog property

Sets the value of a worklog property. Use this operation to store custom data against the worklog.  The value of the request body must be a [valid](http://tools.ietf.org/html/rfc4627), non-empty JSON blob. The maximum length is 32768 characters.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:**   *  *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project that the issue is in.  *  If [issue-level security](https://confluence.atlassian.com/x/J4lKLg) is configured, issue-level security permission to view the issue.  *  *Edit all worklogs*[ project permission](https://confluence.atlassian.com/x/yodKLg) to update any worklog or *Edit own worklogs* to update worklogs created by the user.  *  If the worklog has visibility restrictions, belongs to the group or has the role visibility is restricted to.

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


$apiInstance = new OpenAPI\Client\Api\IssueWorklogPropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_id_or_key = 'issue_id_or_key_example'; // string | The ID or key of the issue.
$worklog_id = 'worklog_id_example'; // string | The ID of the worklog.
$property_key = 'property_key_example'; // string | The key of the issue property. The maximum length is 255 characters.
$body = NULL; // mixed

try {
    $result = $apiInstance->setWorklogProperty($issue_id_or_key, $worklog_id, $property_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueWorklogPropertiesApi->setWorklogProperty: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_id_or_key** | **string**| The ID or key of the issue. | |
| **worklog_id** | **string**| The ID of the worklog. | |
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
