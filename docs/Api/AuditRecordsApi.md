# OpenAPI\Client\AuditRecordsApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAuditRecords()**](AuditRecordsApi.md#getAuditRecords) | **GET** /rest/api/2/auditing/record | Get audit records |


## `getAuditRecords()`

```php
getAuditRecords($offset, $limit, $filter, $from, $to): \OpenAPI\Client\Model\AuditRecords
```

Get audit records

Returns a list of audit records. The list can be filtered to include items:   *  where each item in `filter` has at least one match in any of these fields:           *  `summary`      *  `category`      *  `eventSource`      *  `objectItem.name` If the object is a user, account ID is available to filter.      *  `objectItem.parentName`      *  `objectItem.typeName`      *  `changedValues.changedFrom`      *  `changedValues.changedTo`      *  `remoteAddress`          For example, if `filter` contains *man ed*, an audit record containing `summary\": \"User added to group\"` and `\"category\": \"group management\"` is returned.  *  created on or after a date and time.  *  created or or before a date and time.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\AuditRecordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 0; // int | The number of records to skip before returning the first result.
$limit = 1000; // int | The maximum number of results to return.
$filter = 'filter_example'; // string | The strings to match with audit field content, space separated.
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date and time on or after which returned audit records must have been created. If `to` is provided `from` must be before `to` or no audit records are returned.
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date and time on or before which returned audit results must have been created. If `from` is provided `to` must be after `from` or no audit records are returned.

try {
    $result = $apiInstance->getAuditRecords($offset, $limit, $filter, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuditRecordsApi->getAuditRecords: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offset** | **int**| The number of records to skip before returning the first result. | [optional] [default to 0] |
| **limit** | **int**| The maximum number of results to return. | [optional] [default to 1000] |
| **filter** | **string**| The strings to match with audit field content, space separated. | [optional] |
| **from** | **\DateTime**| The date and time on or after which returned audit records must have been created. If &#x60;to&#x60; is provided &#x60;from&#x60; must be before &#x60;to&#x60; or no audit records are returned. | [optional] |
| **to** | **\DateTime**| The date and time on or before which returned audit results must have been created. If &#x60;from&#x60; is provided &#x60;to&#x60; must be after &#x60;from&#x60; or no audit records are returned. | [optional] |

### Return type

[**\OpenAPI\Client\Model\AuditRecords**](../Model/AuditRecords.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
