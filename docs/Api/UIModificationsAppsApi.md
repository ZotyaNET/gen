# OpenAPI\Client\UIModificationsAppsApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createUiModification()**](UIModificationsAppsApi.md#createUiModification) | **POST** /rest/api/2/uiModifications | Create UI modification |
| [**deleteUiModification()**](UIModificationsAppsApi.md#deleteUiModification) | **DELETE** /rest/api/2/uiModifications/{uiModificationId} | Delete UI modification |
| [**getUiModifications()**](UIModificationsAppsApi.md#getUiModifications) | **GET** /rest/api/2/uiModifications | Get UI modifications |
| [**updateUiModification()**](UIModificationsAppsApi.md#updateUiModification) | **PUT** /rest/api/2/uiModifications/{uiModificationId} | Update UI modification |


## `createUiModification()`

```php
createUiModification($create_ui_modification_details): \OpenAPI\Client\Model\UiModificationIdentifiers
```

Create UI modification

Creates a UI modification. UI modification can only be created by Forge apps.  Each app can define up to 100 UI modifications. Each UI modification can define up to 1000 contexts.  **[Permissions](#permissions) required:**   *  *None* if the UI modification is created without contexts.  *  *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for one or more projects, if the UI modification is created with contexts.

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


$apiInstance = new OpenAPI\Client\Api\UIModificationsAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_ui_modification_details = {"contexts":[{"issueTypeId":"10000","projectId":"10000","viewType":"GIC"},{"issueTypeId":"10001","projectId":"10000","viewType":"GIC"}],"data":"{field: 'Story Points', config: {hidden: false}}","description":"Reveals Story Points field when any Sprint is selected.","name":"Reveal Story Points"}; // \OpenAPI\Client\Model\CreateUiModificationDetails | Details of the UI modification.

try {
    $result = $apiInstance->createUiModification($create_ui_modification_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UIModificationsAppsApi->createUiModification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_ui_modification_details** | [**\OpenAPI\Client\Model\CreateUiModificationDetails**](../Model/CreateUiModificationDetails.md)| Details of the UI modification. | |

### Return type

[**\OpenAPI\Client\Model\UiModificationIdentifiers**](../Model/UiModificationIdentifiers.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteUiModification()`

```php
deleteUiModification($ui_modification_id): mixed
```

Delete UI modification

Deletes a UI modification. All the contexts that belong to the UI modification are deleted too. UI modification can only be deleted by Forge apps.  **[Permissions](#permissions) required:** None.

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


$apiInstance = new OpenAPI\Client\Api\UIModificationsAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ui_modification_id = 'ui_modification_id_example'; // string | The ID of the UI modification.

try {
    $result = $apiInstance->deleteUiModification($ui_modification_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UIModificationsAppsApi->deleteUiModification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ui_modification_id** | **string**| The ID of the UI modification. | |

### Return type

**mixed**

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUiModifications()`

```php
getUiModifications($start_at, $max_results, $expand): \OpenAPI\Client\Model\PageBeanUiModificationDetails
```

Get UI modifications

Gets UI modifications. UI modifications can only be retrieved by Forge apps.  **[Permissions](#permissions) required:** None.

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


$apiInstance = new OpenAPI\Client\Api\UIModificationsAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_at = 0; // int | The index of the first item to return in a page of results (page offset).
$max_results = 50; // int | The maximum number of items to return per page.
$expand = 'expand_example'; // string | Use expand to include additional information in the response. This parameter accepts a comma-separated list. Expand options include:   *  `data` Returns UI modification data.  *  `contexts` Returns UI modification contexts.

try {
    $result = $apiInstance->getUiModifications($start_at, $max_results, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UIModificationsAppsApi->getUiModifications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_at** | **int**| The index of the first item to return in a page of results (page offset). | [optional] [default to 0] |
| **max_results** | **int**| The maximum number of items to return per page. | [optional] [default to 50] |
| **expand** | **string**| Use expand to include additional information in the response. This parameter accepts a comma-separated list. Expand options include:   *  &#x60;data&#x60; Returns UI modification data.  *  &#x60;contexts&#x60; Returns UI modification contexts. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PageBeanUiModificationDetails**](../Model/PageBeanUiModificationDetails.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateUiModification()`

```php
updateUiModification($ui_modification_id, $update_ui_modification_details): mixed
```

Update UI modification

Updates a UI modification. UI modification can only be updated by Forge apps.  Each UI modification can define up to 1000 contexts.  **[Permissions](#permissions) required:**   *  *None* if the UI modification is created without contexts.  *  *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for one or more projects, if the UI modification is created with contexts.

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


$apiInstance = new OpenAPI\Client\Api\UIModificationsAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ui_modification_id = 'ui_modification_id_example'; // string | The ID of the UI modification.
$update_ui_modification_details = {"contexts":[{"issueTypeId":"10000","projectId":"10000","viewType":"GIC"},{"issueTypeId":"10001","projectId":"10000","viewType":"GIC"}],"data":"{field: 'Story Points', config: {hidden: true}}","name":"Updated Reveal Story Points"}; // \OpenAPI\Client\Model\UpdateUiModificationDetails | Details of the UI modification.

try {
    $result = $apiInstance->updateUiModification($ui_modification_id, $update_ui_modification_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UIModificationsAppsApi->updateUiModification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ui_modification_id** | **string**| The ID of the UI modification. | |
| **update_ui_modification_details** | [**\OpenAPI\Client\Model\UpdateUiModificationDetails**](../Model/UpdateUiModificationDetails.md)| Details of the UI modification. | |

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
