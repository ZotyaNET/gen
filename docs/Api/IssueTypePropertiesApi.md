# OpenAPI\Client\IssueTypePropertiesApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteIssueTypeProperty()**](IssueTypePropertiesApi.md#deleteIssueTypeProperty) | **DELETE** /rest/api/2/issuetype/{issueTypeId}/properties/{propertyKey} | Delete issue type property |
| [**getIssueTypeProperty()**](IssueTypePropertiesApi.md#getIssueTypeProperty) | **GET** /rest/api/2/issuetype/{issueTypeId}/properties/{propertyKey} | Get issue type property |
| [**getIssueTypePropertyKeys()**](IssueTypePropertiesApi.md#getIssueTypePropertyKeys) | **GET** /rest/api/2/issuetype/{issueTypeId}/properties | Get issue type property keys |
| [**setIssueTypeProperty()**](IssueTypePropertiesApi.md#setIssueTypeProperty) | **PUT** /rest/api/2/issuetype/{issueTypeId}/properties/{propertyKey} | Set issue type property |


## `deleteIssueTypeProperty()`

```php
deleteIssueTypeProperty($issue_type_id, $property_key)
```

Delete issue type property

Deletes the [issue type property](https://developer.atlassian.com/cloud/jira/platform/storing-data-without-a-database/#a-id-jira-entity-properties-a-jira-entity-properties).  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueTypePropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_type_id = 'issue_type_id_example'; // string | The ID of the issue type.
$property_key = 'property_key_example'; // string | The key of the property. Use [Get issue type property keys](#api-rest-api-2-issuetype-issueTypeId-properties-get) to get a list of all issue type property keys.

try {
    $apiInstance->deleteIssueTypeProperty($issue_type_id, $property_key);
} catch (Exception $e) {
    echo 'Exception when calling IssueTypePropertiesApi->deleteIssueTypeProperty: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_type_id** | **string**| The ID of the issue type. | |
| **property_key** | **string**| The key of the property. Use [Get issue type property keys](#api-rest-api-2-issuetype-issueTypeId-properties-get) to get a list of all issue type property keys. | |

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

## `getIssueTypeProperty()`

```php
getIssueTypeProperty($issue_type_id, $property_key): \OpenAPI\Client\Model\EntityProperty
```

Get issue type property

Returns the key and value of the [issue type property](https://developer.atlassian.com/cloud/jira/platform/storing-data-without-a-database/#a-id-jira-entity-properties-a-jira-entity-properties).  This operation can be accessed anonymously.  **[Permissions](#permissions) required:**   *  *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg) to get the details of any issue type.  *  *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg) to get the details of any issue types associated with the projects the user has permission to browse.

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


$apiInstance = new OpenAPI\Client\Api\IssueTypePropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_type_id = 'issue_type_id_example'; // string | The ID of the issue type.
$property_key = 'property_key_example'; // string | The key of the property. Use [Get issue type property keys](#api-rest-api-2-issuetype-issueTypeId-properties-get) to get a list of all issue type property keys.

try {
    $result = $apiInstance->getIssueTypeProperty($issue_type_id, $property_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueTypePropertiesApi->getIssueTypeProperty: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_type_id** | **string**| The ID of the issue type. | |
| **property_key** | **string**| The key of the property. Use [Get issue type property keys](#api-rest-api-2-issuetype-issueTypeId-properties-get) to get a list of all issue type property keys. | |

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

## `getIssueTypePropertyKeys()`

```php
getIssueTypePropertyKeys($issue_type_id): \OpenAPI\Client\Model\PropertyKeys
```

Get issue type property keys

Returns all the [issue type property](https://developer.atlassian.com/cloud/jira/platform/storing-data-without-a-database/#a-id-jira-entity-properties-a-jira-entity-properties) keys of the issue type.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:**   *  *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg) to get the property keys of any issue type.  *  *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg) to get the property keys of any issue types associated with the projects the user has permission to browse.

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


$apiInstance = new OpenAPI\Client\Api\IssueTypePropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_type_id = 'issue_type_id_example'; // string | The ID of the issue type.

try {
    $result = $apiInstance->getIssueTypePropertyKeys($issue_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueTypePropertiesApi->getIssueTypePropertyKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_type_id** | **string**| The ID of the issue type. | |

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

## `setIssueTypeProperty()`

```php
setIssueTypeProperty($issue_type_id, $property_key, $body): mixed
```

Set issue type property

Creates or updates the value of the [issue type property](https://developer.atlassian.com/cloud/jira/platform/storing-data-without-a-database/#a-id-jira-entity-properties-a-jira-entity-properties). Use this resource to store and update data against an issue type.  The value of the request body must be a [valid](http://tools.ietf.org/html/rfc4627), non-empty JSON blob. The maximum length is 32768 characters.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueTypePropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_type_id = 'issue_type_id_example'; // string | The ID of the issue type.
$property_key = 'property_key_example'; // string | The key of the issue type property. The maximum length is 255 characters.
$body = {"number":5,"string":"string-value"}; // mixed

try {
    $result = $apiInstance->setIssueTypeProperty($issue_type_id, $property_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueTypePropertiesApi->setIssueTypeProperty: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_type_id** | **string**| The ID of the issue type. | |
| **property_key** | **string**| The key of the issue type property. The maximum length is 255 characters. | |
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
