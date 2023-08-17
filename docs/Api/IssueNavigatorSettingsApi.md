# OpenAPI\Client\IssueNavigatorSettingsApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getIssueNavigatorDefaultColumns()**](IssueNavigatorSettingsApi.md#getIssueNavigatorDefaultColumns) | **GET** /rest/api/2/settings/columns | Get issue navigator default columns |
| [**setIssueNavigatorDefaultColumns()**](IssueNavigatorSettingsApi.md#setIssueNavigatorDefaultColumns) | **PUT** /rest/api/2/settings/columns | Set issue navigator default columns |


## `getIssueNavigatorDefaultColumns()`

```php
getIssueNavigatorDefaultColumns(): \OpenAPI\Client\Model\ColumnItem[]
```

Get issue navigator default columns

Returns the default issue navigator columns.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\IssueNavigatorSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getIssueNavigatorDefaultColumns();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueNavigatorSettingsApi->getIssueNavigatorDefaultColumns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ColumnItem[]**](../Model/ColumnItem.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setIssueNavigatorDefaultColumns()`

```php
setIssueNavigatorDefaultColumns($request_body): mixed
```

Set issue navigator default columns

Sets the default issue navigator columns.  The `columns` parameter accepts a navigable field value and is expressed as HTML form data. To specify multiple columns, pass multiple `columns` parameters. For example, in curl:  `curl -X PUT -d columns=summary -d columns=description https://your-domain.atlassian.net/rest/api/2/settings/columns`  If no column details are sent, then all default columns are removed.  A navigable field is one that can be used as a column on the issue navigator. Find details of navigable issue columns using [Get fields](#api-rest-api-2-field-get).  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\IssueNavigatorSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_body = array('request_body_example'); // string[] | A navigable field value.

try {
    $result = $apiInstance->setIssueNavigatorDefaultColumns($request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueNavigatorSettingsApi->setIssueNavigatorDefaultColumns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_body** | [**string[]**](../Model/string.md)| A navigable field value. | [optional] |

### Return type

**mixed**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
