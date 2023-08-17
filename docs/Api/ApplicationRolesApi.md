# OpenAPI\Client\ApplicationRolesApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAllApplicationRoles()**](ApplicationRolesApi.md#getAllApplicationRoles) | **GET** /rest/api/2/applicationrole | Get all application roles |
| [**getApplicationRole()**](ApplicationRolesApi.md#getApplicationRole) | **GET** /rest/api/2/applicationrole/{key} | Get application role |


## `getAllApplicationRoles()`

```php
getAllApplicationRoles(): \OpenAPI\Client\Model\ApplicationRole[]
```

Get all application roles

Returns all application roles. In Jira, application roles are managed using the [Application access configuration](https://confluence.atlassian.com/x/3YxjL) page.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ApplicationRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllApplicationRoles();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationRolesApi->getAllApplicationRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ApplicationRole[]**](../Model/ApplicationRole.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApplicationRole()`

```php
getApplicationRole($key): \OpenAPI\Client\Model\ApplicationRole
```

Get application role

Returns an application role.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ApplicationRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = jira-software; // string | The key of the application role. Use the [Get all application roles](#api-rest-api-2-applicationrole-get) operation to get the key for each application role.

try {
    $result = $apiInstance->getApplicationRole($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationRolesApi->getApplicationRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The key of the application role. Use the [Get all application roles](#api-rest-api-2-applicationrole-get) operation to get the key for each application role. | |

### Return type

[**\OpenAPI\Client\Model\ApplicationRole**](../Model/ApplicationRole.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
