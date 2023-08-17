# OpenAPI\Client\ScreenTabFieldsApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addScreenTabField()**](ScreenTabFieldsApi.md#addScreenTabField) | **POST** /rest/api/2/screens/{screenId}/tabs/{tabId}/fields | Add screen tab field |
| [**getAllScreenTabFields()**](ScreenTabFieldsApi.md#getAllScreenTabFields) | **GET** /rest/api/2/screens/{screenId}/tabs/{tabId}/fields | Get all screen tab fields |
| [**moveScreenTabField()**](ScreenTabFieldsApi.md#moveScreenTabField) | **POST** /rest/api/2/screens/{screenId}/tabs/{tabId}/fields/{id}/move | Move screen tab field |
| [**removeScreenTabField()**](ScreenTabFieldsApi.md#removeScreenTabField) | **DELETE** /rest/api/2/screens/{screenId}/tabs/{tabId}/fields/{id} | Remove screen tab field |


## `addScreenTabField()`

```php
addScreenTabField($screen_id, $tab_id, $add_field_bean): \OpenAPI\Client\Model\ScreenableField
```

Add screen tab field

Adds a field to a screen tab.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\ScreenTabFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$screen_id = 56; // int | The ID of the screen.
$tab_id = 56; // int | The ID of the screen tab.
$add_field_bean = {"fieldId":"summary"}; // \OpenAPI\Client\Model\AddFieldBean

try {
    $result = $apiInstance->addScreenTabField($screen_id, $tab_id, $add_field_bean);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScreenTabFieldsApi->addScreenTabField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **screen_id** | **int**| The ID of the screen. | |
| **tab_id** | **int**| The ID of the screen tab. | |
| **add_field_bean** | [**\OpenAPI\Client\Model\AddFieldBean**](../Model/AddFieldBean.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ScreenableField**](../Model/ScreenableField.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllScreenTabFields()`

```php
getAllScreenTabFields($screen_id, $tab_id, $project_key): \OpenAPI\Client\Model\ScreenableField[]
```

Get all screen tab fields

Returns all fields for a screen tab.  **[Permissions](#permissions) required:**   *  *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).  *  *Administer projects* [project permission](https://confluence.atlassian.com/x/yodKLg) when the project key is specified, providing that the screen is associated with the project through a Screen Scheme and Issue Type Screen Scheme.

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


$apiInstance = new OpenAPI\Client\Api\ScreenTabFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$screen_id = 56; // int | The ID of the screen.
$tab_id = 56; // int | The ID of the screen tab.
$project_key = 'project_key_example'; // string | The key of the project.

try {
    $result = $apiInstance->getAllScreenTabFields($screen_id, $tab_id, $project_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScreenTabFieldsApi->getAllScreenTabFields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **screen_id** | **int**| The ID of the screen. | |
| **tab_id** | **int**| The ID of the screen tab. | |
| **project_key** | **string**| The key of the project. | [optional] |

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

## `moveScreenTabField()`

```php
moveScreenTabField($screen_id, $tab_id, $id, $move_field_bean): mixed
```

Move screen tab field

Moves a screen tab field.  If `after` and `position` are provided in the request, `position` is ignored.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\ScreenTabFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$screen_id = 56; // int | The ID of the screen.
$tab_id = 56; // int | The ID of the screen tab.
$id = 'id_example'; // string | The ID of the field.
$move_field_bean = new \OpenAPI\Client\Model\MoveFieldBean(); // \OpenAPI\Client\Model\MoveFieldBean

try {
    $result = $apiInstance->moveScreenTabField($screen_id, $tab_id, $id, $move_field_bean);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScreenTabFieldsApi->moveScreenTabField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **screen_id** | **int**| The ID of the screen. | |
| **tab_id** | **int**| The ID of the screen tab. | |
| **id** | **string**| The ID of the field. | |
| **move_field_bean** | [**\OpenAPI\Client\Model\MoveFieldBean**](../Model/MoveFieldBean.md)|  | |

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

## `removeScreenTabField()`

```php
removeScreenTabField($screen_id, $tab_id, $id)
```

Remove screen tab field

Removes a field from a screen tab.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\ScreenTabFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$screen_id = 56; // int | The ID of the screen.
$tab_id = 56; // int | The ID of the screen tab.
$id = 'id_example'; // string | The ID of the field.

try {
    $apiInstance->removeScreenTabField($screen_id, $tab_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling ScreenTabFieldsApi->removeScreenTabField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **screen_id** | **int**| The ID of the screen. | |
| **tab_id** | **int**| The ID of the screen tab. | |
| **id** | **string**| The ID of the field. | |

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
