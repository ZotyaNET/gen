# OpenAPI\Client\ScreensApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addFieldToDefaultScreen()**](ScreensApi.md#addFieldToDefaultScreen) | **POST** /rest/api/2/screens/addToDefault/{fieldId} | Add field to default screen |
| [**createScreen()**](ScreensApi.md#createScreen) | **POST** /rest/api/2/screens | Create screen |
| [**deleteScreen()**](ScreensApi.md#deleteScreen) | **DELETE** /rest/api/2/screens/{screenId} | Delete screen |
| [**getAvailableScreenFields()**](ScreensApi.md#getAvailableScreenFields) | **GET** /rest/api/2/screens/{screenId}/availableFields | Get available screen fields |
| [**getScreens()**](ScreensApi.md#getScreens) | **GET** /rest/api/2/screens | Get screens |
| [**getScreensForField()**](ScreensApi.md#getScreensForField) | **GET** /rest/api/2/field/{fieldId}/screens | Get screens for a field |
| [**updateScreen()**](ScreensApi.md#updateScreen) | **PUT** /rest/api/2/screens/{screenId} | Update screen |


## `addFieldToDefaultScreen()`

```php
addFieldToDefaultScreen($field_id): mixed
```

Add field to default screen

Adds a field to the default tab of the default screen.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\ScreensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field_id = 'field_id_example'; // string | The ID of the field.

try {
    $result = $apiInstance->addFieldToDefaultScreen($field_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScreensApi->addFieldToDefaultScreen: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **field_id** | **string**| The ID of the field. | |

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

## `createScreen()`

```php
createScreen($screen_details): \OpenAPI\Client\Model\Screen
```

Create screen

Creates a screen with a default field tab.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\ScreensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$screen_details = {"description":"Enables changes to resolution and linked issues.","name":"Resolve Security Issue Screen"}; // \OpenAPI\Client\Model\ScreenDetails

try {
    $result = $apiInstance->createScreen($screen_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScreensApi->createScreen: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **screen_details** | [**\OpenAPI\Client\Model\ScreenDetails**](../Model/ScreenDetails.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Screen**](../Model/Screen.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteScreen()`

```php
deleteScreen($screen_id)
```

Delete screen

Deletes a screen. A screen cannot be deleted if it is used in a screen scheme, workflow, or workflow draft.  Only screens used in classic projects can be deleted.

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


$apiInstance = new OpenAPI\Client\Api\ScreensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$screen_id = 56; // int | The ID of the screen.

try {
    $apiInstance->deleteScreen($screen_id);
} catch (Exception $e) {
    echo 'Exception when calling ScreensApi->deleteScreen: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **screen_id** | **int**| The ID of the screen. | |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAvailableScreenFields()`

```php
getAvailableScreenFields($screen_id): \OpenAPI\Client\Model\ScreenableField[]
```

Get available screen fields

Returns the fields that can be added to a tab on a screen.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\ScreensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$screen_id = 56; // int | The ID of the screen.

try {
    $result = $apiInstance->getAvailableScreenFields($screen_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScreensApi->getAvailableScreenFields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **screen_id** | **int**| The ID of the screen. | |

### Return type

[**\OpenAPI\Client\Model\ScreenableField[]**](../Model/ScreenableField.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getScreens()`

```php
getScreens($start_at, $max_results, $id, $query_string, $scope, $order_by): \OpenAPI\Client\Model\PageBeanScreen
```

Get screens

Returns a [paginated](#pagination) list of all screens or those specified by one or more screen IDs.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\ScreensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_at = 0; // int | The index of the first item to return in a page of results (page offset).
$max_results = 100; // int | The maximum number of items to return per page.
$id = array(56); // int[] | The list of screen IDs. To include multiple IDs, provide an ampersand-separated list. For example, `id=10000&id=10001`.
$query_string = ''; // string | String used to perform a case-insensitive partial match with screen name.
$scope = array('scope_example'); // string[] | The scope filter string. To filter by multiple scope, provide an ampersand-separated list. For example, `scope=GLOBAL&scope=PROJECT`.
$order_by = 'order_by_example'; // string | [Order](#ordering) the results by a field:   *  `id` Sorts by screen ID.  *  `name` Sorts by screen name.

try {
    $result = $apiInstance->getScreens($start_at, $max_results, $id, $query_string, $scope, $order_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScreensApi->getScreens: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_at** | **int**| The index of the first item to return in a page of results (page offset). | [optional] [default to 0] |
| **max_results** | **int**| The maximum number of items to return per page. | [optional] [default to 100] |
| **id** | [**int[]**](../Model/int.md)| The list of screen IDs. To include multiple IDs, provide an ampersand-separated list. For example, &#x60;id&#x3D;10000&amp;id&#x3D;10001&#x60;. | [optional] |
| **query_string** | **string**| String used to perform a case-insensitive partial match with screen name. | [optional] [default to &#39;&#39;] |
| **scope** | [**string[]**](../Model/string.md)| The scope filter string. To filter by multiple scope, provide an ampersand-separated list. For example, &#x60;scope&#x3D;GLOBAL&amp;scope&#x3D;PROJECT&#x60;. | [optional] |
| **order_by** | **string**| [Order](#ordering) the results by a field:   *  &#x60;id&#x60; Sorts by screen ID.  *  &#x60;name&#x60; Sorts by screen name. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PageBeanScreen**](../Model/PageBeanScreen.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getScreensForField()`

```php
getScreensForField($field_id, $start_at, $max_results, $expand): \OpenAPI\Client\Model\PageBeanScreenWithTab
```

Get screens for a field

Returns a [paginated](#pagination) list of the screens a field is used in.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\ScreensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field_id = 'field_id_example'; // string | The ID of the field to return screens for.
$start_at = 0; // int | The index of the first item to return in a page of results (page offset).
$max_results = 100; // int | The maximum number of items to return per page.
$expand = 'expand_example'; // string | Use [expand](#expansion) to include additional information about screens in the response. This parameter accepts `tab` which returns details about the screen tabs the field is used in.

try {
    $result = $apiInstance->getScreensForField($field_id, $start_at, $max_results, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScreensApi->getScreensForField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **field_id** | **string**| The ID of the field to return screens for. | |
| **start_at** | **int**| The index of the first item to return in a page of results (page offset). | [optional] [default to 0] |
| **max_results** | **int**| The maximum number of items to return per page. | [optional] [default to 100] |
| **expand** | **string**| Use [expand](#expansion) to include additional information about screens in the response. This parameter accepts &#x60;tab&#x60; which returns details about the screen tabs the field is used in. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PageBeanScreenWithTab**](../Model/PageBeanScreenWithTab.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateScreen()`

```php
updateScreen($screen_id, $update_screen_details): \OpenAPI\Client\Model\Screen
```

Update screen

Updates a screen. Only screens used in classic projects can be updated.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\ScreensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$screen_id = 56; // int | The ID of the screen.
$update_screen_details = {"description":"Enables changes to resolution and linked issues for accessibility related issues.","name":"Resolve Accessibility Issue Screen"}; // \OpenAPI\Client\Model\UpdateScreenDetails

try {
    $result = $apiInstance->updateScreen($screen_id, $update_screen_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScreensApi->updateScreen: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **screen_id** | **int**| The ID of the screen. | |
| **update_screen_details** | [**\OpenAPI\Client\Model\UpdateScreenDetails**](../Model/UpdateScreenDetails.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Screen**](../Model/Screen.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
