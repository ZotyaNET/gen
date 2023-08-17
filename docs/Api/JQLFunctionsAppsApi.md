# OpenAPI\Client\JQLFunctionsAppsApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getPrecomputations()**](JQLFunctionsAppsApi.md#getPrecomputations) | **GET** /rest/api/2/jql/function/computation | Get precomputations (apps) |
| [**updatePrecomputations()**](JQLFunctionsAppsApi.md#updatePrecomputations) | **POST** /rest/api/2/jql/function/computation | Update precomputations (apps) |


## `getPrecomputations()`

```php
getPrecomputations($function_key, $start_at, $max_results, $order_by, $filter): \OpenAPI\Client\Model\PageBeanJqlFunctionPrecomputationBean
```

Get precomputations (apps)

Returns the list of a function's precomputations along with information about when they were created, updated, and last used. Each precomputation has a `value` \\- the JQL fragment to replace the custom function clause with.  **[Permissions](#permissions) required:** This API is only accessible to apps and apps can only inspect their own functions.

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


$apiInstance = new OpenAPI\Client\Api\JQLFunctionsAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$function_key = array('function_key_example'); // string[] | The function key in format:   *  Forge: `ari:cloud:ecosystem::extension/[App ID]/[Environment ID]/static/[Function key from manifest]`.  *  Connect: `[App key]__[Module key]`.
$start_at = 0; // int | The index of the first item to return in a page of results (page offset).
$max_results = 100; // int | The maximum number of items to return per page.
$order_by = 'order_by_example'; // string | [Order](#ordering) the results by a field:   *  `functionKey` Sorts by the functionKey.  *  `used` Sorts by the used timestamp.  *  `created` Sorts by the created timestamp.  *  `updated` Sorts by the updated timestamp.
$filter = 'filter_example'; // string | Not supported yet.

try {
    $result = $apiInstance->getPrecomputations($function_key, $start_at, $max_results, $order_by, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JQLFunctionsAppsApi->getPrecomputations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **function_key** | [**string[]**](../Model/string.md)| The function key in format:   *  Forge: &#x60;ari:cloud:ecosystem::extension/[App ID]/[Environment ID]/static/[Function key from manifest]&#x60;.  *  Connect: &#x60;[App key]__[Module key]&#x60;. | [optional] |
| **start_at** | **int**| The index of the first item to return in a page of results (page offset). | [optional] [default to 0] |
| **max_results** | **int**| The maximum number of items to return per page. | [optional] [default to 100] |
| **order_by** | **string**| [Order](#ordering) the results by a field:   *  &#x60;functionKey&#x60; Sorts by the functionKey.  *  &#x60;used&#x60; Sorts by the used timestamp.  *  &#x60;created&#x60; Sorts by the created timestamp.  *  &#x60;updated&#x60; Sorts by the updated timestamp. | [optional] |
| **filter** | **string**| Not supported yet. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PageBeanJqlFunctionPrecomputationBean**](../Model/PageBeanJqlFunctionPrecomputationBean.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePrecomputations()`

```php
updatePrecomputations($jql_function_precomputation_update_request_bean): mixed
```

Update precomputations (apps)

Update the precomputation value of a function created by a Forge/Connect app.  **[Permissions](#permissions) required:** An API for apps to update their own precomputations.

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


$apiInstance = new OpenAPI\Client\Api\JQLFunctionsAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$jql_function_precomputation_update_request_bean = {"values":[{"id":"f2ef228b-367f-4c6b-bd9d-0d0e96b5bd7b","value":"issue in (TEST-1, TEST-2, TEST-3)"}]}; // \OpenAPI\Client\Model\JqlFunctionPrecomputationUpdateRequestBean

try {
    $result = $apiInstance->updatePrecomputations($jql_function_precomputation_update_request_bean);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JQLFunctionsAppsApi->updatePrecomputations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **jql_function_precomputation_update_request_bean** | [**\OpenAPI\Client\Model\JqlFunctionPrecomputationUpdateRequestBean**](../Model/JqlFunctionPrecomputationUpdateRequestBean.md)|  | |

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
