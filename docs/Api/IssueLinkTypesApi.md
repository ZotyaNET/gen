# OpenAPI\Client\IssueLinkTypesApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createIssueLinkType()**](IssueLinkTypesApi.md#createIssueLinkType) | **POST** /rest/api/2/issueLinkType | Create issue link type |
| [**deleteIssueLinkType()**](IssueLinkTypesApi.md#deleteIssueLinkType) | **DELETE** /rest/api/2/issueLinkType/{issueLinkTypeId} | Delete issue link type |
| [**getIssueLinkType()**](IssueLinkTypesApi.md#getIssueLinkType) | **GET** /rest/api/2/issueLinkType/{issueLinkTypeId} | Get issue link type |
| [**getIssueLinkTypes()**](IssueLinkTypesApi.md#getIssueLinkTypes) | **GET** /rest/api/2/issueLinkType | Get issue link types |
| [**updateIssueLinkType()**](IssueLinkTypesApi.md#updateIssueLinkType) | **PUT** /rest/api/2/issueLinkType/{issueLinkTypeId} | Update issue link type |


## `createIssueLinkType()`

```php
createIssueLinkType($issue_link_type): \OpenAPI\Client\Model\IssueLinkType
```

Create issue link type

Creates an issue link type. Use this operation to create descriptions of the reasons why issues are linked. The issue link type consists of a name and descriptions for a link's inward and outward relationships.  To use this operation, the site must have [issue linking](https://confluence.atlassian.com/x/yoXKM) enabled.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueLinkTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_link_type = {"inward":"Duplicated by","name":"Duplicate","outward":"Duplicates"}; // \OpenAPI\Client\Model\IssueLinkType

try {
    $result = $apiInstance->createIssueLinkType($issue_link_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueLinkTypesApi->createIssueLinkType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_link_type** | [**\OpenAPI\Client\Model\IssueLinkType**](../Model/IssueLinkType.md)|  | |

### Return type

[**\OpenAPI\Client\Model\IssueLinkType**](../Model/IssueLinkType.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteIssueLinkType()`

```php
deleteIssueLinkType($issue_link_type_id)
```

Delete issue link type

Deletes an issue link type.  To use this operation, the site must have [issue linking](https://confluence.atlassian.com/x/yoXKM) enabled.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueLinkTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_link_type_id = 'issue_link_type_id_example'; // string | The ID of the issue link type.

try {
    $apiInstance->deleteIssueLinkType($issue_link_type_id);
} catch (Exception $e) {
    echo 'Exception when calling IssueLinkTypesApi->deleteIssueLinkType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_link_type_id** | **string**| The ID of the issue link type. | |

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

## `getIssueLinkType()`

```php
getIssueLinkType($issue_link_type_id): \OpenAPI\Client\Model\IssueLinkType
```

Get issue link type

Returns an issue link type.  To use this operation, the site must have [issue linking](https://confluence.atlassian.com/x/yoXKM) enabled.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for a project in the site.

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


$apiInstance = new OpenAPI\Client\Api\IssueLinkTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_link_type_id = 'issue_link_type_id_example'; // string | The ID of the issue link type.

try {
    $result = $apiInstance->getIssueLinkType($issue_link_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueLinkTypesApi->getIssueLinkType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_link_type_id** | **string**| The ID of the issue link type. | |

### Return type

[**\OpenAPI\Client\Model\IssueLinkType**](../Model/IssueLinkType.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIssueLinkTypes()`

```php
getIssueLinkTypes(): \OpenAPI\Client\Model\IssueLinkTypes
```

Get issue link types

Returns a list of all issue link types.  To use this operation, the site must have [issue linking](https://confluence.atlassian.com/x/yoXKM) enabled.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for a project in the site.

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


$apiInstance = new OpenAPI\Client\Api\IssueLinkTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getIssueLinkTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueLinkTypesApi->getIssueLinkTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\IssueLinkTypes**](../Model/IssueLinkTypes.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateIssueLinkType()`

```php
updateIssueLinkType($issue_link_type_id, $issue_link_type): \OpenAPI\Client\Model\IssueLinkType
```

Update issue link type

Updates an issue link type.  To use this operation, the site must have [issue linking](https://confluence.atlassian.com/x/yoXKM) enabled.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueLinkTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_link_type_id = 'issue_link_type_id_example'; // string | The ID of the issue link type.
$issue_link_type = {"inward":"Duplicated by","name":"Duplicate","outward":"Duplicates"}; // \OpenAPI\Client\Model\IssueLinkType

try {
    $result = $apiInstance->updateIssueLinkType($issue_link_type_id, $issue_link_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueLinkTypesApi->updateIssueLinkType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_link_type_id** | **string**| The ID of the issue link type. | |
| **issue_link_type** | [**\OpenAPI\Client\Model\IssueLinkType**](../Model/IssueLinkType.md)|  | |

### Return type

[**\OpenAPI\Client\Model\IssueLinkType**](../Model/IssueLinkType.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
