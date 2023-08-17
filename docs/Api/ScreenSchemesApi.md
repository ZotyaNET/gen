# OpenAPI\Client\ScreenSchemesApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createScreenScheme()**](ScreenSchemesApi.md#createScreenScheme) | **POST** /rest/api/2/screenscheme | Create screen scheme |
| [**deleteScreenScheme()**](ScreenSchemesApi.md#deleteScreenScheme) | **DELETE** /rest/api/2/screenscheme/{screenSchemeId} | Delete screen scheme |
| [**getScreenSchemes()**](ScreenSchemesApi.md#getScreenSchemes) | **GET** /rest/api/2/screenscheme | Get screen schemes |
| [**updateScreenScheme()**](ScreenSchemesApi.md#updateScreenScheme) | **PUT** /rest/api/2/screenscheme/{screenSchemeId} | Update screen scheme |


## `createScreenScheme()`

```php
createScreenScheme($screen_scheme_details): \OpenAPI\Client\Model\ScreenSchemeId
```

Create screen scheme

Creates a screen scheme.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\ScreenSchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$screen_scheme_details = {"description":"Manage employee data","name":"Employee screen scheme","screens":{"default":10017,"edit":10019,"view":10020}}; // \OpenAPI\Client\Model\ScreenSchemeDetails

try {
    $result = $apiInstance->createScreenScheme($screen_scheme_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScreenSchemesApi->createScreenScheme: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **screen_scheme_details** | [**\OpenAPI\Client\Model\ScreenSchemeDetails**](../Model/ScreenSchemeDetails.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ScreenSchemeId**](../Model/ScreenSchemeId.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteScreenScheme()`

```php
deleteScreenScheme($screen_scheme_id)
```

Delete screen scheme

Deletes a screen scheme. A screen scheme cannot be deleted if it is used in an issue type screen scheme.  Only screens schemes used in classic projects can be deleted.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\ScreenSchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$screen_scheme_id = 'screen_scheme_id_example'; // string | The ID of the screen scheme.

try {
    $apiInstance->deleteScreenScheme($screen_scheme_id);
} catch (Exception $e) {
    echo 'Exception when calling ScreenSchemesApi->deleteScreenScheme: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **screen_scheme_id** | **string**| The ID of the screen scheme. | |

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

## `getScreenSchemes()`

```php
getScreenSchemes($start_at, $max_results, $id, $expand, $query_string, $order_by): \OpenAPI\Client\Model\PageBeanScreenScheme
```

Get screen schemes

Returns a [paginated](#pagination) list of screen schemes.  Only screen schemes used in classic projects are returned.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\ScreenSchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_at = 0; // int | The index of the first item to return in a page of results (page offset).
$max_results = 25; // int | The maximum number of items to return per page.
$id = array(56); // int[] | The list of screen scheme IDs. To include multiple IDs, provide an ampersand-separated list. For example, `id=10000&id=10001`.
$expand = ''; // string | Use [expand](#expansion) include additional information in the response. This parameter accepts `issueTypeScreenSchemes` that, for each screen schemes, returns information about the issue type screen scheme the screen scheme is assigned to.
$query_string = ''; // string | String used to perform a case-insensitive partial match with screen scheme name.
$order_by = 'order_by_example'; // string | [Order](#ordering) the results by a field:   *  `id` Sorts by screen scheme ID.  *  `name` Sorts by screen scheme name.

try {
    $result = $apiInstance->getScreenSchemes($start_at, $max_results, $id, $expand, $query_string, $order_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScreenSchemesApi->getScreenSchemes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_at** | **int**| The index of the first item to return in a page of results (page offset). | [optional] [default to 0] |
| **max_results** | **int**| The maximum number of items to return per page. | [optional] [default to 25] |
| **id** | [**int[]**](../Model/int.md)| The list of screen scheme IDs. To include multiple IDs, provide an ampersand-separated list. For example, &#x60;id&#x3D;10000&amp;id&#x3D;10001&#x60;. | [optional] |
| **expand** | **string**| Use [expand](#expansion) include additional information in the response. This parameter accepts &#x60;issueTypeScreenSchemes&#x60; that, for each screen schemes, returns information about the issue type screen scheme the screen scheme is assigned to. | [optional] [default to &#39;&#39;] |
| **query_string** | **string**| String used to perform a case-insensitive partial match with screen scheme name. | [optional] [default to &#39;&#39;] |
| **order_by** | **string**| [Order](#ordering) the results by a field:   *  &#x60;id&#x60; Sorts by screen scheme ID.  *  &#x60;name&#x60; Sorts by screen scheme name. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PageBeanScreenScheme**](../Model/PageBeanScreenScheme.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateScreenScheme()`

```php
updateScreenScheme($screen_scheme_id, $update_screen_scheme_details): mixed
```

Update screen scheme

Updates a screen scheme. Only screen schemes used in classic projects can be updated.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\ScreenSchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$screen_scheme_id = 'screen_scheme_id_example'; // string | The ID of the screen scheme.
$update_screen_scheme_details = {"name":"Employee screen scheme v2","screens":{"create":"10019","default":"10018"}}; // \OpenAPI\Client\Model\UpdateScreenSchemeDetails | The screen scheme update details.

try {
    $result = $apiInstance->updateScreenScheme($screen_scheme_id, $update_screen_scheme_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScreenSchemesApi->updateScreenScheme: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **screen_scheme_id** | **string**| The ID of the screen scheme. | |
| **update_screen_scheme_details** | [**\OpenAPI\Client\Model\UpdateScreenSchemeDetails**](../Model/UpdateScreenSchemeDetails.md)| The screen scheme update details. | |

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
