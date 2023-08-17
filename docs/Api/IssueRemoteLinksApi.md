# OpenAPI\Client\IssueRemoteLinksApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createOrUpdateRemoteIssueLink()**](IssueRemoteLinksApi.md#createOrUpdateRemoteIssueLink) | **POST** /rest/api/2/issue/{issueIdOrKey}/remotelink | Create or update remote issue link |
| [**deleteRemoteIssueLinkByGlobalId()**](IssueRemoteLinksApi.md#deleteRemoteIssueLinkByGlobalId) | **DELETE** /rest/api/2/issue/{issueIdOrKey}/remotelink | Delete remote issue link by global ID |
| [**deleteRemoteIssueLinkById()**](IssueRemoteLinksApi.md#deleteRemoteIssueLinkById) | **DELETE** /rest/api/2/issue/{issueIdOrKey}/remotelink/{linkId} | Delete remote issue link by ID |
| [**getRemoteIssueLinkById()**](IssueRemoteLinksApi.md#getRemoteIssueLinkById) | **GET** /rest/api/2/issue/{issueIdOrKey}/remotelink/{linkId} | Get remote issue link by ID |
| [**getRemoteIssueLinks()**](IssueRemoteLinksApi.md#getRemoteIssueLinks) | **GET** /rest/api/2/issue/{issueIdOrKey}/remotelink | Get remote issue links |
| [**updateRemoteIssueLink()**](IssueRemoteLinksApi.md#updateRemoteIssueLink) | **PUT** /rest/api/2/issue/{issueIdOrKey}/remotelink/{linkId} | Update remote issue link by ID |


## `createOrUpdateRemoteIssueLink()`

```php
createOrUpdateRemoteIssueLink($issue_id_or_key, $request_body): \OpenAPI\Client\Model\RemoteIssueLinkIdentifies
```

Create or update remote issue link

Creates or updates a remote issue link for an issue.  If a `globalId` is provided and a remote issue link with that global ID is found it is updated. Any fields without values in the request are set to null. Otherwise, the remote issue link is created.  This operation requires [issue linking to be active](https://confluence.atlassian.com/x/yoXKM).  This operation can be accessed anonymously.  **[Permissions](#permissions) required:**   *  *Browse projects* and *Link issues* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project that the issue is in.  *  If [issue-level security](https://confluence.atlassian.com/x/J4lKLg) is configured, issue-level security permission to view the issue.

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


$apiInstance = new OpenAPI\Client\Api\IssueRemoteLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_id_or_key = 'issue_id_or_key_example'; // string | The ID or key of the issue.
$request_body = {"application":{"name":"My Acme Tracker","type":"com.acme.tracker"},"globalId":"system=http://www.mycompany.com/support&id=1","object":{"icon":{"title":"Support Ticket","url16x16":"http://www.mycompany.com/support/ticket.png"},"status":{"icon":{"link":"http://www.mycompany.com/support?id=1&details=closed","title":"Case Closed","url16x16":"http://www.mycompany.com/support/resolved.png"},"resolved":true},"summary":"Customer support issue","title":"TSTSUP-111","url":"http://www.mycompany.com/support?id=1"},"relationship":"causes"}; // array<string,mixed>

try {
    $result = $apiInstance->createOrUpdateRemoteIssueLink($issue_id_or_key, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueRemoteLinksApi->createOrUpdateRemoteIssueLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_id_or_key** | **string**| The ID or key of the issue. | |
| **request_body** | [**array<string,mixed>**](../Model/mixed.md)|  | |

### Return type

[**\OpenAPI\Client\Model\RemoteIssueLinkIdentifies**](../Model/RemoteIssueLinkIdentifies.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteRemoteIssueLinkByGlobalId()`

```php
deleteRemoteIssueLinkByGlobalId($issue_id_or_key, $global_id)
```

Delete remote issue link by global ID

Deletes the remote issue link from the issue using the link's global ID. Where the global ID includes reserved URL characters these must be escaped in the request. For example, pass `system=http://www.mycompany.com/support&id=1` as `system%3Dhttp%3A%2F%2Fwww.mycompany.com%2Fsupport%26id%3D1`.  This operation requires [issue linking to be active](https://confluence.atlassian.com/x/yoXKM).  This operation can be accessed anonymously.  **[Permissions](#permissions) required:**   *  *Browse projects* and *Link issues* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project that the issue is in.  *  If [issue-level security](https://confluence.atlassian.com/x/J4lKLg) is implemented, issue-level security permission to view the issue.

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


$apiInstance = new OpenAPI\Client\Api\IssueRemoteLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_id_or_key = 10000; // string | The ID or key of the issue.
$global_id = system=http://www.mycompany.com/support&id=1; // string | The global ID of a remote issue link.

try {
    $apiInstance->deleteRemoteIssueLinkByGlobalId($issue_id_or_key, $global_id);
} catch (Exception $e) {
    echo 'Exception when calling IssueRemoteLinksApi->deleteRemoteIssueLinkByGlobalId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_id_or_key** | **string**| The ID or key of the issue. | |
| **global_id** | **string**| The global ID of a remote issue link. | |

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

## `deleteRemoteIssueLinkById()`

```php
deleteRemoteIssueLinkById($issue_id_or_key, $link_id)
```

Delete remote issue link by ID

Deletes a remote issue link from an issue.  This operation requires [issue linking to be active](https://confluence.atlassian.com/x/yoXKM).  This operation can be accessed anonymously.  **[Permissions](#permissions) required:**   *  *Browse projects*, *Edit issues*, and *Link issues* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project that the issue is in.  *  If [issue-level security](https://confluence.atlassian.com/x/J4lKLg) is configured, issue-level security permission to view the issue.

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


$apiInstance = new OpenAPI\Client\Api\IssueRemoteLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_id_or_key = 10000; // string | The ID or key of the issue.
$link_id = 10000; // string | The ID of a remote issue link.

try {
    $apiInstance->deleteRemoteIssueLinkById($issue_id_or_key, $link_id);
} catch (Exception $e) {
    echo 'Exception when calling IssueRemoteLinksApi->deleteRemoteIssueLinkById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_id_or_key** | **string**| The ID or key of the issue. | |
| **link_id** | **string**| The ID of a remote issue link. | |

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

## `getRemoteIssueLinkById()`

```php
getRemoteIssueLinkById($issue_id_or_key, $link_id): \OpenAPI\Client\Model\RemoteIssueLink
```

Get remote issue link by ID

Returns a remote issue link for an issue.  This operation requires [issue linking to be active](https://confluence.atlassian.com/x/yoXKM).  This operation can be accessed anonymously.  **[Permissions](#permissions) required:**   *  *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project that the issue is in.  *  If [issue-level security](https://confluence.atlassian.com/x/J4lKLg) is configured, issue-level security permission to view the issue.

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


$apiInstance = new OpenAPI\Client\Api\IssueRemoteLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_id_or_key = 'issue_id_or_key_example'; // string | The ID or key of the issue.
$link_id = 'link_id_example'; // string | The ID of the remote issue link.

try {
    $result = $apiInstance->getRemoteIssueLinkById($issue_id_or_key, $link_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueRemoteLinksApi->getRemoteIssueLinkById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_id_or_key** | **string**| The ID or key of the issue. | |
| **link_id** | **string**| The ID of the remote issue link. | |

### Return type

[**\OpenAPI\Client\Model\RemoteIssueLink**](../Model/RemoteIssueLink.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRemoteIssueLinks()`

```php
getRemoteIssueLinks($issue_id_or_key, $global_id): \OpenAPI\Client\Model\RemoteIssueLink
```

Get remote issue links

Returns the remote issue links for an issue. When a remote issue link global ID is provided the record with that global ID is returned, otherwise all remote issue links are returned. Where a global ID includes reserved URL characters these must be escaped in the request. For example, pass `system=http://www.mycompany.com/support&id=1` as `system%3Dhttp%3A%2F%2Fwww.mycompany.com%2Fsupport%26id%3D1`.  This operation requires [issue linking to be active](https://confluence.atlassian.com/x/yoXKM).  This operation can be accessed anonymously.  **[Permissions](#permissions) required:**   *  *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project that the issue is in.  *  If [issue-level security](https://confluence.atlassian.com/x/J4lKLg) is configured, issue-level security permission to view the issue.

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


$apiInstance = new OpenAPI\Client\Api\IssueRemoteLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_id_or_key = 10000; // string | The ID or key of the issue.
$global_id = 'global_id_example'; // string | The global ID of the remote issue link.

try {
    $result = $apiInstance->getRemoteIssueLinks($issue_id_or_key, $global_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueRemoteLinksApi->getRemoteIssueLinks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_id_or_key** | **string**| The ID or key of the issue. | |
| **global_id** | **string**| The global ID of the remote issue link. | [optional] |

### Return type

[**\OpenAPI\Client\Model\RemoteIssueLink**](../Model/RemoteIssueLink.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateRemoteIssueLink()`

```php
updateRemoteIssueLink($issue_id_or_key, $link_id, $request_body): mixed
```

Update remote issue link by ID

Updates a remote issue link for an issue.  Note: Fields without values in the request are set to null.  This operation requires [issue linking to be active](https://confluence.atlassian.com/x/yoXKM).  This operation can be accessed anonymously.  **[Permissions](#permissions) required:**   *  *Browse projects* and *Link issues* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project that the issue is in.  *  If [issue-level security](https://confluence.atlassian.com/x/J4lKLg) is configured, issue-level security permission to view the issue.

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


$apiInstance = new OpenAPI\Client\Api\IssueRemoteLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_id_or_key = 10000; // string | The ID or key of the issue.
$link_id = 10000; // string | The ID of the remote issue link.
$request_body = {"application":{"name":"My Acme Tracker","type":"com.acme.tracker"},"globalId":"system=http://www.mycompany.com/support&id=1","object":{"icon":{"title":"Support Ticket","url16x16":"http://www.mycompany.com/support/ticket.png"},"status":{"icon":{"link":"http://www.mycompany.com/support?id=1&details=closed","title":"Case Closed","url16x16":"http://www.mycompany.com/support/resolved.png"},"resolved":true},"summary":"Customer support issue","title":"TSTSUP-111","url":"http://www.mycompany.com/support?id=1"},"relationship":"causes"}; // array<string,mixed>

try {
    $result = $apiInstance->updateRemoteIssueLink($issue_id_or_key, $link_id, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueRemoteLinksApi->updateRemoteIssueLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_id_or_key** | **string**| The ID or key of the issue. | |
| **link_id** | **string**| The ID of the remote issue link. | |
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
