# OpenAPI\Client\IssueSecurityLevelApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getIssueSecurityLevel()**](IssueSecurityLevelApi.md#getIssueSecurityLevel) | **GET** /rest/api/2/securitylevel/{id} | Get issue security level |
| [**getIssueSecurityLevelMembers()**](IssueSecurityLevelApi.md#getIssueSecurityLevelMembers) | **GET** /rest/api/2/issuesecurityschemes/{issueSecuritySchemeId}/members | Get issue security level members |


## `getIssueSecurityLevel()`

```php
getIssueSecurityLevel($id): \OpenAPI\Client\Model\SecurityLevel
```

Get issue security level

Returns details of an issue security level.  Use [Get issue security scheme](#api-rest-api-2-issuesecurityschemes-id-get) to obtain the IDs of issue security levels associated with the issue security scheme.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** None.

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


$apiInstance = new OpenAPI\Client\Api\IssueSecurityLevelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the issue security level.

try {
    $result = $apiInstance->getIssueSecurityLevel($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueSecurityLevelApi->getIssueSecurityLevel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the issue security level. | |

### Return type

[**\OpenAPI\Client\Model\SecurityLevel**](../Model/SecurityLevel.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIssueSecurityLevelMembers()`

```php
getIssueSecurityLevelMembers($issue_security_scheme_id, $start_at, $max_results, $issue_security_level_id, $expand): \OpenAPI\Client\Model\PageBeanIssueSecurityLevelMember
```

Get issue security level members

Returns issue security level members.  Only issue security level members in context of classic projects are returned.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueSecurityLevelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_security_scheme_id = 56; // int | The ID of the issue security scheme. Use the [Get issue security schemes](#api-rest-api-2-issuesecurityschemes-get) operation to get a list of issue security scheme IDs.
$start_at = 0; // int | The index of the first item to return in a page of results (page offset).
$max_results = 50; // int | The maximum number of items to return per page.
$issue_security_level_id = array(56); // int[] | The list of issue security level IDs. To include multiple issue security levels separate IDs with ampersand: `issueSecurityLevelId=10000&issueSecurityLevelId=10001`.
$expand = 'expand_example'; // string | Use expand to include additional information in the response. This parameter accepts a comma-separated list. Expand options include:   *  `all` Returns all expandable information.  *  `field` Returns information about the custom field granted the permission.  *  `group` Returns information about the group that is granted the permission.  *  `projectRole` Returns information about the project role granted the permission.  *  `user` Returns information about the user who is granted the permission.

try {
    $result = $apiInstance->getIssueSecurityLevelMembers($issue_security_scheme_id, $start_at, $max_results, $issue_security_level_id, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueSecurityLevelApi->getIssueSecurityLevelMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_security_scheme_id** | **int**| The ID of the issue security scheme. Use the [Get issue security schemes](#api-rest-api-2-issuesecurityschemes-get) operation to get a list of issue security scheme IDs. | |
| **start_at** | **int**| The index of the first item to return in a page of results (page offset). | [optional] [default to 0] |
| **max_results** | **int**| The maximum number of items to return per page. | [optional] [default to 50] |
| **issue_security_level_id** | [**int[]**](../Model/int.md)| The list of issue security level IDs. To include multiple issue security levels separate IDs with ampersand: &#x60;issueSecurityLevelId&#x3D;10000&amp;issueSecurityLevelId&#x3D;10001&#x60;. | [optional] |
| **expand** | **string**| Use expand to include additional information in the response. This parameter accepts a comma-separated list. Expand options include:   *  &#x60;all&#x60; Returns all expandable information.  *  &#x60;field&#x60; Returns information about the custom field granted the permission.  *  &#x60;group&#x60; Returns information about the group that is granted the permission.  *  &#x60;projectRole&#x60; Returns information about the project role granted the permission.  *  &#x60;user&#x60; Returns information about the user who is granted the permission. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PageBeanIssueSecurityLevelMember**](../Model/PageBeanIssueSecurityLevelMember.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
