# OpenAPI\Client\ScreenTabsApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addScreenTab()**](ScreenTabsApi.md#addScreenTab) | **POST** /rest/api/2/screens/{screenId}/tabs | Create screen tab |
| [**deleteScreenTab()**](ScreenTabsApi.md#deleteScreenTab) | **DELETE** /rest/api/2/screens/{screenId}/tabs/{tabId} | Delete screen tab |
| [**getAllScreenTabs()**](ScreenTabsApi.md#getAllScreenTabs) | **GET** /rest/api/2/screens/{screenId}/tabs | Get all screen tabs |
| [**moveScreenTab()**](ScreenTabsApi.md#moveScreenTab) | **POST** /rest/api/2/screens/{screenId}/tabs/{tabId}/move/{pos} | Move screen tab |
| [**renameScreenTab()**](ScreenTabsApi.md#renameScreenTab) | **PUT** /rest/api/2/screens/{screenId}/tabs/{tabId} | Update screen tab |


## `addScreenTab()`

```php
addScreenTab($screen_id, $screenable_tab): \OpenAPI\Client\Model\ScreenableTab
```

Create screen tab

Creates a tab for a screen.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\ScreenTabsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$screen_id = 56; // int | The ID of the screen.
$screenable_tab = {"name":"Fields Tab"}; // \OpenAPI\Client\Model\ScreenableTab

try {
    $result = $apiInstance->addScreenTab($screen_id, $screenable_tab);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScreenTabsApi->addScreenTab: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **screen_id** | **int**| The ID of the screen. | |
| **screenable_tab** | [**\OpenAPI\Client\Model\ScreenableTab**](../Model/ScreenableTab.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ScreenableTab**](../Model/ScreenableTab.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteScreenTab()`

```php
deleteScreenTab($screen_id, $tab_id)
```

Delete screen tab

Deletes a screen tab.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\ScreenTabsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$screen_id = 56; // int | The ID of the screen.
$tab_id = 56; // int | The ID of the screen tab.

try {
    $apiInstance->deleteScreenTab($screen_id, $tab_id);
} catch (Exception $e) {
    echo 'Exception when calling ScreenTabsApi->deleteScreenTab: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **screen_id** | **int**| The ID of the screen. | |
| **tab_id** | **int**| The ID of the screen tab. | |

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

## `getAllScreenTabs()`

```php
getAllScreenTabs($screen_id, $project_key): \OpenAPI\Client\Model\ScreenableTab[]
```

Get all screen tabs

Returns the list of tabs for a screen.  **[Permissions](#permissions) required:**   *  *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).  *  *Administer projects* [project permission](https://confluence.atlassian.com/x/yodKLg) when the project key is specified, providing that the screen is associated with the project through a Screen Scheme and Issue Type Screen Scheme.

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


$apiInstance = new OpenAPI\Client\Api\ScreenTabsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$screen_id = 56; // int | The ID of the screen.
$project_key = 'project_key_example'; // string | The key of the project.

try {
    $result = $apiInstance->getAllScreenTabs($screen_id, $project_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScreenTabsApi->getAllScreenTabs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **screen_id** | **int**| The ID of the screen. | |
| **project_key** | **string**| The key of the project. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ScreenableTab[]**](../Model/ScreenableTab.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `moveScreenTab()`

```php
moveScreenTab($screen_id, $tab_id, $pos): mixed
```

Move screen tab

Moves a screen tab.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\ScreenTabsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$screen_id = 56; // int | The ID of the screen.
$tab_id = 56; // int | The ID of the screen tab.
$pos = 56; // int | The position of tab. The base index is 0.

try {
    $result = $apiInstance->moveScreenTab($screen_id, $tab_id, $pos);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScreenTabsApi->moveScreenTab: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **screen_id** | **int**| The ID of the screen. | |
| **tab_id** | **int**| The ID of the screen tab. | |
| **pos** | **int**| The position of tab. The base index is 0. | |

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

## `renameScreenTab()`

```php
renameScreenTab($screen_id, $tab_id, $screenable_tab): \OpenAPI\Client\Model\ScreenableTab
```

Update screen tab

Updates the name of a screen tab.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\ScreenTabsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$screen_id = 56; // int | The ID of the screen.
$tab_id = 56; // int | The ID of the screen tab.
$screenable_tab = new \OpenAPI\Client\Model\ScreenableTab(); // \OpenAPI\Client\Model\ScreenableTab

try {
    $result = $apiInstance->renameScreenTab($screen_id, $tab_id, $screenable_tab);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScreenTabsApi->renameScreenTab: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **screen_id** | **int**| The ID of the screen. | |
| **tab_id** | **int**| The ID of the screen tab. | |
| **screenable_tab** | [**\OpenAPI\Client\Model\ScreenableTab**](../Model/ScreenableTab.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ScreenableTab**](../Model/ScreenableTab.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
