# OpenAPI\Client\IssueResolutionsApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createResolution()**](IssueResolutionsApi.md#createResolution) | **POST** /rest/api/2/resolution | Create resolution |
| [**deleteResolution()**](IssueResolutionsApi.md#deleteResolution) | **DELETE** /rest/api/2/resolution/{id} | Delete resolution |
| [**getResolution()**](IssueResolutionsApi.md#getResolution) | **GET** /rest/api/2/resolution/{id} | Get resolution |
| [**getResolutions()**](IssueResolutionsApi.md#getResolutions) | **GET** /rest/api/2/resolution | Get resolutions |
| [**moveResolutions()**](IssueResolutionsApi.md#moveResolutions) | **PUT** /rest/api/2/resolution/move | Move resolutions |
| [**searchResolutions()**](IssueResolutionsApi.md#searchResolutions) | **GET** /rest/api/2/resolution/search | Search resolutions |
| [**setDefaultResolution()**](IssueResolutionsApi.md#setDefaultResolution) | **PUT** /rest/api/2/resolution/default | Set default resolution |
| [**updateResolution()**](IssueResolutionsApi.md#updateResolution) | **PUT** /rest/api/2/resolution/{id} | Update resolution |


## `createResolution()`

```php
createResolution($request_body): \OpenAPI\Client\Model\ResolutionId
```

Create resolution

Creates an issue resolution.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueResolutionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_body = {"description":"My resolution description","name":"My new resolution"}; // array<string,mixed>

try {
    $result = $apiInstance->createResolution($request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueResolutionsApi->createResolution: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_body** | [**array<string,mixed>**](../Model/mixed.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ResolutionId**](../Model/ResolutionId.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteResolution()`

```php
deleteResolution($id, $replace_with)
```

Delete resolution

Deletes an issue resolution.  This operation is [asynchronous](#async). Follow the `location` link in the response to determine the status of the task and use [Get task](#api-rest-api-2-task-taskId-get) to obtain subsequent updates.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueResolutionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the issue resolution.
$replace_with = 'replace_with_example'; // string | The ID of the issue resolution that will replace the currently selected resolution.

try {
    $apiInstance->deleteResolution($id, $replace_with);
} catch (Exception $e) {
    echo 'Exception when calling IssueResolutionsApi->deleteResolution: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the issue resolution. | |
| **replace_with** | **string**| The ID of the issue resolution that will replace the currently selected resolution. | |

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

## `getResolution()`

```php
getResolution($id): \OpenAPI\Client\Model\Resolution
```

Get resolution

Returns an issue resolution value.  **[Permissions](#permissions) required:** Permission to access Jira.

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


$apiInstance = new OpenAPI\Client\Api\IssueResolutionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the issue resolution value.

try {
    $result = $apiInstance->getResolution($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueResolutionsApi->getResolution: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the issue resolution value. | |

### Return type

[**\OpenAPI\Client\Model\Resolution**](../Model/Resolution.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getResolutions()`

```php
getResolutions(): \OpenAPI\Client\Model\Resolution[]
```

Get resolutions

Returns a list of all issue resolution values.  **[Permissions](#permissions) required:** Permission to access Jira.

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


$apiInstance = new OpenAPI\Client\Api\IssueResolutionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getResolutions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueResolutionsApi->getResolutions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Resolution[]**](../Model/Resolution.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `moveResolutions()`

```php
moveResolutions($reorder_issue_resolutions_request): mixed
```

Move resolutions

Changes the order of issue resolutions.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueResolutionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reorder_issue_resolutions_request = {"after":"10002","ids":["10000","10001"]}; // \OpenAPI\Client\Model\ReorderIssueResolutionsRequest

try {
    $result = $apiInstance->moveResolutions($reorder_issue_resolutions_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueResolutionsApi->moveResolutions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reorder_issue_resolutions_request** | [**\OpenAPI\Client\Model\ReorderIssueResolutionsRequest**](../Model/ReorderIssueResolutionsRequest.md)|  | |

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

## `searchResolutions()`

```php
searchResolutions($start_at, $max_results, $id, $only_default): \OpenAPI\Client\Model\PageBeanResolutionJsonBean
```

Search resolutions

Returns a [paginated](#pagination) list of resolutions. The list can contain all resolutions or a subset determined by any combination of these criteria:   *  a list of resolutions IDs.  *  whether the field configuration is a default. This returns resolutions from company-managed (classic) projects only, as there is no concept of default resolutions in team-managed projects.  **[Permissions](#permissions) required:** Permission to access Jira.

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


$apiInstance = new OpenAPI\Client\Api\IssueResolutionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_at = '0'; // string | The index of the first item to return in a page of results (page offset).
$max_results = '50'; // string | The maximum number of items to return per page.
$id = array('id_example'); // string[] | The list of resolutions IDs to be filtered out
$only_default = false; // bool | When set to true, return default only, when IDs provided, if none of them is default, return empty page. Default value is false

try {
    $result = $apiInstance->searchResolutions($start_at, $max_results, $id, $only_default);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueResolutionsApi->searchResolutions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_at** | **string**| The index of the first item to return in a page of results (page offset). | [optional] [default to &#39;0&#39;] |
| **max_results** | **string**| The maximum number of items to return per page. | [optional] [default to &#39;50&#39;] |
| **id** | [**string[]**](../Model/string.md)| The list of resolutions IDs to be filtered out | [optional] |
| **only_default** | **bool**| When set to true, return default only, when IDs provided, if none of them is default, return empty page. Default value is false | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\PageBeanResolutionJsonBean**](../Model/PageBeanResolutionJsonBean.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setDefaultResolution()`

```php
setDefaultResolution($set_default_resolution_request): mixed
```

Set default resolution

Sets default issue resolution.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueResolutionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$set_default_resolution_request = {"id":"3"}; // \OpenAPI\Client\Model\SetDefaultResolutionRequest

try {
    $result = $apiInstance->setDefaultResolution($set_default_resolution_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueResolutionsApi->setDefaultResolution: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **set_default_resolution_request** | [**\OpenAPI\Client\Model\SetDefaultResolutionRequest**](../Model/SetDefaultResolutionRequest.md)|  | |

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

## `updateResolution()`

```php
updateResolution($id, $request_body): mixed
```

Update resolution

Updates an issue resolution.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueResolutionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the issue resolution.
$request_body = {"description":"My updated resolution description","name":"My updated resolution"}; // array<string,mixed>

try {
    $result = $apiInstance->updateResolution($id, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueResolutionsApi->updateResolution: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the issue resolution. | |
| **request_body** | [**array<string,mixed>**](../Model/mixed.md)|  | |

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
