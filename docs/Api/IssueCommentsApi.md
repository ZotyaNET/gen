# OpenAPI\Client\IssueCommentsApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addComment()**](IssueCommentsApi.md#addComment) | **POST** /rest/api/2/issue/{issueIdOrKey}/comment | Add comment |
| [**deleteComment()**](IssueCommentsApi.md#deleteComment) | **DELETE** /rest/api/2/issue/{issueIdOrKey}/comment/{id} | Delete comment |
| [**getComment()**](IssueCommentsApi.md#getComment) | **GET** /rest/api/2/issue/{issueIdOrKey}/comment/{id} | Get comment |
| [**getComments()**](IssueCommentsApi.md#getComments) | **GET** /rest/api/2/issue/{issueIdOrKey}/comment | Get comments |
| [**getCommentsByIds()**](IssueCommentsApi.md#getCommentsByIds) | **POST** /rest/api/2/comment/list | Get comments by IDs |
| [**updateComment()**](IssueCommentsApi.md#updateComment) | **PUT** /rest/api/2/issue/{issueIdOrKey}/comment/{id} | Update comment |


## `addComment()`

```php
addComment($issue_id_or_key, $request_body, $expand): \OpenAPI\Client\Model\Comment
```

Add comment

Adds a comment to an issue.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:**   *  *Browse projects* and *Add comments* [ project permission](https://confluence.atlassian.com/x/yodKLg) for the project that the issue containing the comment is in.  *  If [issue-level security](https://confluence.atlassian.com/x/J4lKLg) is configured, issue-level security permission to view the issue.

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


$apiInstance = new OpenAPI\Client\Api\IssueCommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_id_or_key = 'issue_id_or_key_example'; // string | The ID or key of the issue.
$request_body = {"body":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget venenatis elit. Duis eu justo eget augue iaculis fermentum. Sed semper quam laoreet nisi egestas at posuere augue semper.","visibility":{"identifier":"Administrators","type":"role","value":"Administrators"}}; // array<string,mixed>
$expand = 'expand_example'; // string | Use [expand](#expansion) to include additional information about comments in the response. This parameter accepts `renderedBody`, which returns the comment body rendered in HTML.

try {
    $result = $apiInstance->addComment($issue_id_or_key, $request_body, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueCommentsApi->addComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_id_or_key** | **string**| The ID or key of the issue. | |
| **request_body** | [**array<string,mixed>**](../Model/mixed.md)|  | |
| **expand** | **string**| Use [expand](#expansion) to include additional information about comments in the response. This parameter accepts &#x60;renderedBody&#x60;, which returns the comment body rendered in HTML. | [optional] |

### Return type

[**\OpenAPI\Client\Model\Comment**](../Model/Comment.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteComment()`

```php
deleteComment($issue_id_or_key, $id)
```

Delete comment

Deletes a comment.  **[Permissions](#permissions) required:**   *  *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project that the issue containing the comment is in.  *  If [issue-level security](https://confluence.atlassian.com/x/J4lKLg) is configured, issue-level security permission to view the issue.  *  *Delete all comments*[ project permission](https://confluence.atlassian.com/x/yodKLg) to delete any comment or *Delete own comments* to delete comment created by the user,  *  If the comment has visibility restrictions, the user belongs to the group or has the role visibility is restricted to.

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


$apiInstance = new OpenAPI\Client\Api\IssueCommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_id_or_key = 'issue_id_or_key_example'; // string | The ID or key of the issue.
$id = 'id_example'; // string | The ID of the comment.

try {
    $apiInstance->deleteComment($issue_id_or_key, $id);
} catch (Exception $e) {
    echo 'Exception when calling IssueCommentsApi->deleteComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_id_or_key** | **string**| The ID or key of the issue. | |
| **id** | **string**| The ID of the comment. | |

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

## `getComment()`

```php
getComment($issue_id_or_key, $id, $expand): \OpenAPI\Client\Model\Comment
```

Get comment

Returns a comment.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:**   *  *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project containing the comment.  *  If [issue-level security](https://confluence.atlassian.com/x/J4lKLg) is configured, issue-level security permission to view the issue.  *  If the comment has visibility restrictions, the user belongs to the group or has the role visibility is restricted to.

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


$apiInstance = new OpenAPI\Client\Api\IssueCommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_id_or_key = 'issue_id_or_key_example'; // string | The ID or key of the issue.
$id = 'id_example'; // string | The ID of the comment.
$expand = 'expand_example'; // string | Use [expand](#expansion) to include additional information about comments in the response. This parameter accepts `renderedBody`, which returns the comment body rendered in HTML.

try {
    $result = $apiInstance->getComment($issue_id_or_key, $id, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueCommentsApi->getComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_id_or_key** | **string**| The ID or key of the issue. | |
| **id** | **string**| The ID of the comment. | |
| **expand** | **string**| Use [expand](#expansion) to include additional information about comments in the response. This parameter accepts &#x60;renderedBody&#x60;, which returns the comment body rendered in HTML. | [optional] |

### Return type

[**\OpenAPI\Client\Model\Comment**](../Model/Comment.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getComments()`

```php
getComments($issue_id_or_key, $start_at, $max_results, $order_by, $expand): \OpenAPI\Client\Model\PageOfComments
```

Get comments

Returns all comments for an issue.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** Comments are included in the response where the user has:   *  *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project containing the comment.  *  If [issue-level security](https://confluence.atlassian.com/x/J4lKLg) is configured, issue-level security permission to view the issue.  *  If the comment has visibility restrictions, belongs to the group or has the role visibility is role visibility is restricted to.

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


$apiInstance = new OpenAPI\Client\Api\IssueCommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_id_or_key = 'issue_id_or_key_example'; // string | The ID or key of the issue.
$start_at = 0; // int | The index of the first item to return in a page of results (page offset).
$max_results = 5000; // int | The maximum number of items to return per page.
$order_by = 'order_by_example'; // string | [Order](#ordering) the results by a field. Accepts *created* to sort comments by their created date.
$expand = 'expand_example'; // string | Use [expand](#expansion) to include additional information about comments in the response. This parameter accepts `renderedBody`, which returns the comment body rendered in HTML.

try {
    $result = $apiInstance->getComments($issue_id_or_key, $start_at, $max_results, $order_by, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueCommentsApi->getComments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_id_or_key** | **string**| The ID or key of the issue. | |
| **start_at** | **int**| The index of the first item to return in a page of results (page offset). | [optional] [default to 0] |
| **max_results** | **int**| The maximum number of items to return per page. | [optional] [default to 5000] |
| **order_by** | **string**| [Order](#ordering) the results by a field. Accepts *created* to sort comments by their created date. | [optional] |
| **expand** | **string**| Use [expand](#expansion) to include additional information about comments in the response. This parameter accepts &#x60;renderedBody&#x60;, which returns the comment body rendered in HTML. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PageOfComments**](../Model/PageOfComments.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCommentsByIds()`

```php
getCommentsByIds($issue_comment_list_request_bean, $expand): \OpenAPI\Client\Model\PageBeanComment
```

Get comments by IDs

Returns a [paginated](#pagination) list of comments specified by a list of comment IDs.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** Comments are returned where the user:   *  has *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project containing the comment.  *  If [issue-level security](https://confluence.atlassian.com/x/J4lKLg) is configured, issue-level security permission to view the issue.  *  If the comment has visibility restrictions, belongs to the group or has the role visibility is restricted to.

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


$apiInstance = new OpenAPI\Client\Api\IssueCommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_comment_list_request_bean = {"ids":[1,2,5,10]}; // \OpenAPI\Client\Model\IssueCommentListRequestBean | The list of comment IDs.
$expand = 'expand_example'; // string | Use [expand](#expansion) to include additional information about comments in the response. This parameter accepts a comma-separated list. Expand options include:   *  `renderedBody` Returns the comment body rendered in HTML.  *  `properties` Returns the comment's properties.

try {
    $result = $apiInstance->getCommentsByIds($issue_comment_list_request_bean, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueCommentsApi->getCommentsByIds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_comment_list_request_bean** | [**\OpenAPI\Client\Model\IssueCommentListRequestBean**](../Model/IssueCommentListRequestBean.md)| The list of comment IDs. | |
| **expand** | **string**| Use [expand](#expansion) to include additional information about comments in the response. This parameter accepts a comma-separated list. Expand options include:   *  &#x60;renderedBody&#x60; Returns the comment body rendered in HTML.  *  &#x60;properties&#x60; Returns the comment&#39;s properties. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PageBeanComment**](../Model/PageBeanComment.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateComment()`

```php
updateComment($issue_id_or_key, $id, $request_body, $notify_users, $override_editable_flag, $expand): \OpenAPI\Client\Model\Comment
```

Update comment

Updates a comment.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:**   *  *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project that the issue containing the comment is in.  *  If [issue-level security](https://confluence.atlassian.com/x/J4lKLg) is configured, issue-level security permission to view the issue.  *  *Edit all comments*[ project permission](https://confluence.atlassian.com/x/yodKLg) to update any comment or *Edit own comments* to update comment created by the user.  *  If the comment has visibility restrictions, the user belongs to the group or has the role visibility is restricted to.

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


$apiInstance = new OpenAPI\Client\Api\IssueCommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_id_or_key = 'issue_id_or_key_example'; // string | The ID or key of the issue.
$id = 'id_example'; // string | The ID of the comment.
$request_body = {"body":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget venenatis elit. Duis eu justo eget augue iaculis fermentum. Sed semper quam laoreet nisi egestas at posuere augue semper.","visibility":{"identifier":"Administrators","type":"role","value":"Administrators"}}; // array<string,mixed>
$notify_users = true; // bool | Whether users are notified when a comment is updated.
$override_editable_flag = false; // bool | Whether screen security is overridden to enable uneditable fields to be edited. Available to Connect app users with the *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg) and Forge apps acting on behalf of users with *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).
$expand = 'expand_example'; // string | Use [expand](#expansion) to include additional information about comments in the response. This parameter accepts `renderedBody`, which returns the comment body rendered in HTML.

try {
    $result = $apiInstance->updateComment($issue_id_or_key, $id, $request_body, $notify_users, $override_editable_flag, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueCommentsApi->updateComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_id_or_key** | **string**| The ID or key of the issue. | |
| **id** | **string**| The ID of the comment. | |
| **request_body** | [**array<string,mixed>**](../Model/mixed.md)|  | |
| **notify_users** | **bool**| Whether users are notified when a comment is updated. | [optional] [default to true] |
| **override_editable_flag** | **bool**| Whether screen security is overridden to enable uneditable fields to be edited. Available to Connect app users with the *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg) and Forge apps acting on behalf of users with *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg). | [optional] [default to false] |
| **expand** | **string**| Use [expand](#expansion) to include additional information about comments in the response. This parameter accepts &#x60;renderedBody&#x60;, which returns the comment body rendered in HTML. | [optional] |

### Return type

[**\OpenAPI\Client\Model\Comment**](../Model/Comment.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
