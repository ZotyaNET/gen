# OpenAPI\Client\ProjectPropertiesApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteProjectProperty()**](ProjectPropertiesApi.md#deleteProjectProperty) | **DELETE** /rest/api/2/project/{projectIdOrKey}/properties/{propertyKey} | Delete project property |
| [**getProjectProperty()**](ProjectPropertiesApi.md#getProjectProperty) | **GET** /rest/api/2/project/{projectIdOrKey}/properties/{propertyKey} | Get project property |
| [**getProjectPropertyKeys()**](ProjectPropertiesApi.md#getProjectPropertyKeys) | **GET** /rest/api/2/project/{projectIdOrKey}/properties | Get project property keys |
| [**setProjectProperty()**](ProjectPropertiesApi.md#setProjectProperty) | **PUT** /rest/api/2/project/{projectIdOrKey}/properties/{propertyKey} | Set project property |


## `deleteProjectProperty()`

```php
deleteProjectProperty($project_id_or_key, $property_key)
```

Delete project property

Deletes the [property](https://developer.atlassian.com/cloud/jira/platform/storing-data-without-a-database/#a-id-jira-entity-properties-a-jira-entity-properties) from a project.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg) or *Administer Projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project containing the property.

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


$apiInstance = new OpenAPI\Client\Api\ProjectPropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id_or_key = 'project_id_or_key_example'; // string | The project ID or project key (case sensitive).
$property_key = 'property_key_example'; // string | The project property key. Use [Get project property keys](#api-rest-api-2-project-projectIdOrKey-properties-get) to get a list of all project property keys.

try {
    $apiInstance->deleteProjectProperty($project_id_or_key, $property_key);
} catch (Exception $e) {
    echo 'Exception when calling ProjectPropertiesApi->deleteProjectProperty: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id_or_key** | **string**| The project ID or project key (case sensitive). | |
| **property_key** | **string**| The project property key. Use [Get project property keys](#api-rest-api-2-project-projectIdOrKey-properties-get) to get a list of all project property keys. | |

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

## `getProjectProperty()`

```php
getProjectProperty($project_id_or_key, $property_key): \OpenAPI\Client\Model\EntityProperty
```

Get project property

Returns the value of a [project property](https://developer.atlassian.com/cloud/jira/platform/storing-data-without-a-database/#a-id-jira-entity-properties-a-jira-entity-properties).  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** *Browse Projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project containing the property.

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


$apiInstance = new OpenAPI\Client\Api\ProjectPropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id_or_key = 'project_id_or_key_example'; // string | The project ID or project key (case sensitive).
$property_key = 'property_key_example'; // string | The project property key. Use [Get project property keys](#api-rest-api-2-project-projectIdOrKey-properties-get) to get a list of all project property keys.

try {
    $result = $apiInstance->getProjectProperty($project_id_or_key, $property_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectPropertiesApi->getProjectProperty: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id_or_key** | **string**| The project ID or project key (case sensitive). | |
| **property_key** | **string**| The project property key. Use [Get project property keys](#api-rest-api-2-project-projectIdOrKey-properties-get) to get a list of all project property keys. | |

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

## `getProjectPropertyKeys()`

```php
getProjectPropertyKeys($project_id_or_key): \OpenAPI\Client\Model\PropertyKeys
```

Get project property keys

Returns all [project property](https://developer.atlassian.com/cloud/jira/platform/storing-data-without-a-database/#a-id-jira-entity-properties-a-jira-entity-properties) keys for the project.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** *Browse Projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project.

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


$apiInstance = new OpenAPI\Client\Api\ProjectPropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id_or_key = 'project_id_or_key_example'; // string | The project ID or project key (case sensitive).

try {
    $result = $apiInstance->getProjectPropertyKeys($project_id_or_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectPropertiesApi->getProjectPropertyKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id_or_key** | **string**| The project ID or project key (case sensitive). | |

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

## `setProjectProperty()`

```php
setProjectProperty($project_id_or_key, $property_key, $body): mixed
```

Set project property

Sets the value of the [project property](https://developer.atlassian.com/cloud/jira/platform/storing-data-without-a-database/#a-id-jira-entity-properties-a-jira-entity-properties). You can use project properties to store custom data against the project.  The value of the request body must be a [valid](http://tools.ietf.org/html/rfc4627), non-empty JSON blob. The maximum length is 32768 characters.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg) or *Administer Projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project in which the property is created.

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


$apiInstance = new OpenAPI\Client\Api\ProjectPropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id_or_key = 'project_id_or_key_example'; // string | The project ID or project key (case sensitive).
$property_key = 'property_key_example'; // string | The key of the project property. The maximum length is 255 characters.
$body = {"number":5,"string":"string-value"}; // mixed

try {
    $result = $apiInstance->setProjectProperty($project_id_or_key, $property_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectPropertiesApi->setProjectProperty: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id_or_key** | **string**| The project ID or project key (case sensitive). | |
| **property_key** | **string**| The key of the project property. The maximum length is 255 characters. | |
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
