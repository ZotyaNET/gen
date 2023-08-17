# OpenAPI\Client\DynamicModulesApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**dynamicModulesResourceGetModulesGet()**](DynamicModulesApi.md#dynamicModulesResourceGetModulesGet) | **GET** /rest/atlassian-connect/1/app/module/dynamic | Get modules |
| [**dynamicModulesResourceRegisterModulesPost()**](DynamicModulesApi.md#dynamicModulesResourceRegisterModulesPost) | **POST** /rest/atlassian-connect/1/app/module/dynamic | Register modules |
| [**dynamicModulesResourceRemoveModulesDelete()**](DynamicModulesApi.md#dynamicModulesResourceRemoveModulesDelete) | **DELETE** /rest/atlassian-connect/1/app/module/dynamic | Remove modules |


## `dynamicModulesResourceGetModulesGet()`

```php
dynamicModulesResourceGetModulesGet(): \OpenAPI\Client\Model\ConnectModules
```

Get modules

Returns all modules registered dynamically by the calling app.  **[Permissions](#permissions) required:** Only Connect apps can make this request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DynamicModulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->dynamicModulesResourceGetModulesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicModulesApi->dynamicModulesResourceGetModulesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ConnectModules**](../Model/ConnectModules.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dynamicModulesResourceRegisterModulesPost()`

```php
dynamicModulesResourceRegisterModulesPost($connect_modules)
```

Register modules

Registers a list of modules.  **[Permissions](#permissions) required:** Only Connect apps can make this request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DynamicModulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$connect_modules = new \OpenAPI\Client\Model\ConnectModules(); // \OpenAPI\Client\Model\ConnectModules

try {
    $apiInstance->dynamicModulesResourceRegisterModulesPost($connect_modules);
} catch (Exception $e) {
    echo 'Exception when calling DynamicModulesApi->dynamicModulesResourceRegisterModulesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **connect_modules** | [**\OpenAPI\Client\Model\ConnectModules**](../Model/ConnectModules.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dynamicModulesResourceRemoveModulesDelete()`

```php
dynamicModulesResourceRemoveModulesDelete($module_key)
```

Remove modules

Remove all or a list of modules registered by the calling app.  **[Permissions](#permissions) required:** Only Connect apps can make this request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DynamicModulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$module_key = array('module_key_example'); // string[] | The key of the module to remove. To include multiple module keys, provide multiple copies of this parameter. For example, `moduleKey=dynamic-attachment-entity-property&moduleKey=dynamic-select-field`. Nonexistent keys are ignored.

try {
    $apiInstance->dynamicModulesResourceRemoveModulesDelete($module_key);
} catch (Exception $e) {
    echo 'Exception when calling DynamicModulesApi->dynamicModulesResourceRemoveModulesDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **module_key** | [**string[]**](../Model/string.md)| The key of the module to remove. To include multiple module keys, provide multiple copies of this parameter. For example, &#x60;moduleKey&#x3D;dynamic-attachment-entity-property&amp;moduleKey&#x3D;dynamic-select-field&#x60;. Nonexistent keys are ignored. | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
