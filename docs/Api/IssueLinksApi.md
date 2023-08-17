# OpenAPI\Client\IssueLinksApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteIssueLink()**](IssueLinksApi.md#deleteIssueLink) | **DELETE** /rest/api/2/issueLink/{linkId} | Delete issue link |
| [**getIssueLink()**](IssueLinksApi.md#getIssueLink) | **GET** /rest/api/2/issueLink/{linkId} | Get issue link |
| [**linkIssues()**](IssueLinksApi.md#linkIssues) | **POST** /rest/api/2/issueLink | Create issue link |


## `deleteIssueLink()`

```php
deleteIssueLink($link_id)
```

Delete issue link

Deletes an issue link.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:**   *  Browse project [project permission](https://confluence.atlassian.com/x/yodKLg) for all the projects containing the issues in the link.  *  *Link issues* [project permission](https://confluence.atlassian.com/x/yodKLg) for at least one of the projects containing issues in the link.  *  If [issue-level security](https://confluence.atlassian.com/x/J4lKLg) is configured, permission to view both of the issues.

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


$apiInstance = new OpenAPI\Client\Api\IssueLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$link_id = 'link_id_example'; // string | The ID of the issue link.

try {
    $apiInstance->deleteIssueLink($link_id);
} catch (Exception $e) {
    echo 'Exception when calling IssueLinksApi->deleteIssueLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **link_id** | **string**| The ID of the issue link. | |

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

## `getIssueLink()`

```php
getIssueLink($link_id): \OpenAPI\Client\Model\IssueLink
```

Get issue link

Returns an issue link.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:**   *  *Browse project* [project permission](https://confluence.atlassian.com/x/yodKLg) for all the projects containing the linked issues.  *  If [issue-level security](https://confluence.atlassian.com/x/J4lKLg) is configured, permission to view both of the issues.

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


$apiInstance = new OpenAPI\Client\Api\IssueLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$link_id = 'link_id_example'; // string | The ID of the issue link.

try {
    $result = $apiInstance->getIssueLink($link_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueLinksApi->getIssueLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **link_id** | **string**| The ID of the issue link. | |

### Return type

[**\OpenAPI\Client\Model\IssueLink**](../Model/IssueLink.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `linkIssues()`

```php
linkIssues($link_issue_request_json_bean): mixed
```

Create issue link

Creates a link between two issues. Use this operation to indicate a relationship between two issues and optionally add a comment to the from (outward) issue. To use this resource the site must have [Issue Linking](https://confluence.atlassian.com/x/yoXKM) enabled.  This resource returns nothing on the creation of an issue link. To obtain the ID of the issue link, use `https://your-domain.atlassian.net/rest/api/2/issue/[linked issue key]?fields=issuelinks`.  If the link request duplicates a link, the response indicates that the issue link was created. If the request included a comment, the comment is added.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:**   *  *Browse project* [project permission](https://confluence.atlassian.com/x/yodKLg) for all the projects containing the issues to be linked,  *  *Link issues* [project permission](https://confluence.atlassian.com/x/yodKLg) on the project containing the from (outward) issue,  *  If [issue-level security](https://confluence.atlassian.com/x/J4lKLg) is configured, issue-level security permission to view the issue.  *  If the comment has visibility restrictions, belongs to the group or has the role visibility is restricted to.

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


$apiInstance = new OpenAPI\Client\Api\IssueLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$link_issue_request_json_bean = {"comment":{"body":"Linked related issue!","visibility":{"identifier":"276f955c-63d7-42c8-9520-92d01dca0625","type":"group","value":"jira-software-users"}},"inwardIssue":{"key":"HSP-1"},"outwardIssue":{"key":"MKY-1"},"type":{"name":"Duplicate"}}; // \OpenAPI\Client\Model\LinkIssueRequestJsonBean | The issue link request.

try {
    $result = $apiInstance->linkIssues($link_issue_request_json_bean);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueLinksApi->linkIssues: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **link_issue_request_json_bean** | [**\OpenAPI\Client\Model\LinkIssueRequestJsonBean**](../Model/LinkIssueRequestJsonBean.md)| The issue link request. | |

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
