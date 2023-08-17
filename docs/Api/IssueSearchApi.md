# OpenAPI\Client\IssueSearchApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getIssuePickerResource()**](IssueSearchApi.md#getIssuePickerResource) | **GET** /rest/api/2/issue/picker | Get issue picker suggestions |
| [**matchIssues()**](IssueSearchApi.md#matchIssues) | **POST** /rest/api/2/jql/match | Check issues against JQL |
| [**searchForIssuesUsingJql()**](IssueSearchApi.md#searchForIssuesUsingJql) | **GET** /rest/api/2/search | Search for issues using JQL (GET) |
| [**searchForIssuesUsingJqlPost()**](IssueSearchApi.md#searchForIssuesUsingJqlPost) | **POST** /rest/api/2/search | Search for issues using JQL (POST) |


## `getIssuePickerResource()`

```php
getIssuePickerResource($query, $current_jql, $current_issue_key, $current_project_id, $show_sub_tasks, $show_sub_task_parent): \OpenAPI\Client\Model\IssuePickerSuggestions
```

Get issue picker suggestions

Returns lists of issues matching a query string. Use this resource to provide auto-completion suggestions when the user is looking for an issue using a word or string.  This operation returns two lists:   *  `History Search` which includes issues from the user's history of created, edited, or viewed issues that contain the string in the `query` parameter.  *  `Current Search` which includes issues that match the JQL expression in `currentJQL` and contain the string in the `query` parameter.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** None.

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


$apiInstance = new OpenAPI\Client\Api\IssueSearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = query; // string | A string to match against text fields in the issue such as title, description, or comments.
$current_jql = 'current_jql_example'; // string | A JQL query defining a list of issues to search for the query term. Note that `username` and `userkey` cannot be used as search terms for this parameter, due to privacy reasons. Use `accountId` instead.
$current_issue_key = 'current_issue_key_example'; // string | The key of an issue to exclude from search results. For example, the issue the user is viewing when they perform this query.
$current_project_id = 'current_project_id_example'; // string | The ID of a project that suggested issues must belong to.
$show_sub_tasks = True; // bool | Indicate whether to include subtasks in the suggestions list.
$show_sub_task_parent = True; // bool | When `currentIssueKey` is a subtask, whether to include the parent issue in the suggestions if it matches the query.

try {
    $result = $apiInstance->getIssuePickerResource($query, $current_jql, $current_issue_key, $current_project_id, $show_sub_tasks, $show_sub_task_parent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueSearchApi->getIssuePickerResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **query** | **string**| A string to match against text fields in the issue such as title, description, or comments. | [optional] |
| **current_jql** | **string**| A JQL query defining a list of issues to search for the query term. Note that &#x60;username&#x60; and &#x60;userkey&#x60; cannot be used as search terms for this parameter, due to privacy reasons. Use &#x60;accountId&#x60; instead. | [optional] |
| **current_issue_key** | **string**| The key of an issue to exclude from search results. For example, the issue the user is viewing when they perform this query. | [optional] |
| **current_project_id** | **string**| The ID of a project that suggested issues must belong to. | [optional] |
| **show_sub_tasks** | **bool**| Indicate whether to include subtasks in the suggestions list. | [optional] |
| **show_sub_task_parent** | **bool**| When &#x60;currentIssueKey&#x60; is a subtask, whether to include the parent issue in the suggestions if it matches the query. | [optional] |

### Return type

[**\OpenAPI\Client\Model\IssuePickerSuggestions**](../Model/IssuePickerSuggestions.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `matchIssues()`

```php
matchIssues($issues_and_jql_queries): \OpenAPI\Client\Model\IssueMatches
```

Check issues against JQL

Checks whether one or more issues would be returned by one or more JQL queries.  **[Permissions](#permissions) required:** None, however, issues are only matched against JQL queries where the user has:   *  *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project that the issue is in.  *  If [issue-level security](https://confluence.atlassian.com/x/J4lKLg) is configured, issue-level security permission to view the issue.

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


$apiInstance = new OpenAPI\Client\Api\IssueSearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issues_and_jql_queries = {"issueIds":[10001,1000,10042],"jqls":["project = FOO","issuetype = Bug","summary ~ \"some text\" AND project in (FOO, BAR)"]}; // \OpenAPI\Client\Model\IssuesAndJQLQueries

try {
    $result = $apiInstance->matchIssues($issues_and_jql_queries);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueSearchApi->matchIssues: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issues_and_jql_queries** | [**\OpenAPI\Client\Model\IssuesAndJQLQueries**](../Model/IssuesAndJQLQueries.md)|  | |

### Return type

[**\OpenAPI\Client\Model\IssueMatches**](../Model/IssueMatches.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchForIssuesUsingJql()`

```php
searchForIssuesUsingJql($jql, $start_at, $max_results, $validate_query, $fields, $expand, $properties, $fields_by_keys): \OpenAPI\Client\Model\SearchResults
```

Search for issues using JQL (GET)

Searches for issues using [JQL](https://confluence.atlassian.com/x/egORLQ).  If the JQL query expression is too large to be encoded as a query parameter, use the [POST](#api-rest-api-2-search-post) version of this resource.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** Issues are included in the response where the user has:   *  *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project containing the issue.  *  If [issue-level security](https://confluence.atlassian.com/x/J4lKLg) is configured, issue-level security permission to view the issue.

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


$apiInstance = new OpenAPI\Client\Api\IssueSearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$jql = project = HSP; // string | The [JQL](https://confluence.atlassian.com/x/egORLQ) that defines the search. Note:   *  If no JQL expression is provided, all issues are returned.  *  `username` and `userkey` cannot be used as search terms due to privacy reasons. Use `accountId` instead.  *  If a user has hidden their email address in their user profile, partial matches of the email address will not find the user. An exact match is required.
$start_at = 0; // int | The index of the first item to return in a page of results (page offset).
$max_results = 50; // int | The maximum number of items to return per page. To manage page size, Jira may return fewer items per page where a large number of fields are requested. The greatest number of items returned per page is achieved when requesting `id` or `key` only.
$validate_query = 'strict'; // string | Determines how to validate the JQL query and treat the validation results. Supported values are:   *  `strict` Returns a 400 response code if any errors are found, along with a list of all errors (and warnings).  *  `warn` Returns all errors as warnings.  *  `none` No validation is performed.  *  `true` *Deprecated* A legacy synonym for `strict`.  *  `false` *Deprecated* A legacy synonym for `warn`.  Note: If the JQL is not correctly formed a 400 response code is returned, regardless of the `validateQuery` value.
$fields = array('fields_example'); // string[] | A list of fields to return for each issue, use it to retrieve a subset of fields. This parameter accepts a comma-separated list. Expand options include:   *  `*all` Returns all fields.  *  `*navigable` Returns navigable fields.  *  Any issue field, prefixed with a minus to exclude.  Examples:   *  `summary,comment` Returns only the summary and comments fields.  *  `-description` Returns all navigable (default) fields except description.  *  `*all,-comment` Returns all fields except comments.  This parameter may be specified multiple times. For example, `fields=field1,field2&fields=field3`.  Note: All navigable fields are returned by default. This differs from [GET issue](#api-rest-api-2-issue-issueIdOrKey-get) where the default is all fields.
$expand = 'expand_example'; // string | Use [expand](#expansion) to include additional information about issues in the response. This parameter accepts a comma-separated list. Expand options include:   *  `renderedFields` Returns field values rendered in HTML format.  *  `names` Returns the display name of each field.  *  `schema` Returns the schema describing a field type.  *  `transitions` Returns all possible transitions for the issue.  *  `operations` Returns all possible operations for the issue.  *  `editmeta` Returns information about how each field can be edited.  *  `changelog` Returns a list of recent updates to an issue, sorted by date, starting from the most recent.  *  `versionedRepresentations` Instead of `fields`, returns `versionedRepresentations` a JSON array containing each version of a field's value, with the highest numbered item representing the most recent version.
$properties = array('properties_example'); // string[] | A list of issue property keys for issue properties to include in the results. This parameter accepts a comma-separated list. Multiple properties can also be provided using an ampersand separated list. For example, `properties=prop1,prop2&properties=prop3`. A maximum of 5 issue property keys can be specified.
$fields_by_keys = false; // bool | Reference fields by their key (rather than ID).

try {
    $result = $apiInstance->searchForIssuesUsingJql($jql, $start_at, $max_results, $validate_query, $fields, $expand, $properties, $fields_by_keys);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueSearchApi->searchForIssuesUsingJql: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **jql** | **string**| The [JQL](https://confluence.atlassian.com/x/egORLQ) that defines the search. Note:   *  If no JQL expression is provided, all issues are returned.  *  &#x60;username&#x60; and &#x60;userkey&#x60; cannot be used as search terms due to privacy reasons. Use &#x60;accountId&#x60; instead.  *  If a user has hidden their email address in their user profile, partial matches of the email address will not find the user. An exact match is required. | [optional] |
| **start_at** | **int**| The index of the first item to return in a page of results (page offset). | [optional] [default to 0] |
| **max_results** | **int**| The maximum number of items to return per page. To manage page size, Jira may return fewer items per page where a large number of fields are requested. The greatest number of items returned per page is achieved when requesting &#x60;id&#x60; or &#x60;key&#x60; only. | [optional] [default to 50] |
| **validate_query** | **string**| Determines how to validate the JQL query and treat the validation results. Supported values are:   *  &#x60;strict&#x60; Returns a 400 response code if any errors are found, along with a list of all errors (and warnings).  *  &#x60;warn&#x60; Returns all errors as warnings.  *  &#x60;none&#x60; No validation is performed.  *  &#x60;true&#x60; *Deprecated* A legacy synonym for &#x60;strict&#x60;.  *  &#x60;false&#x60; *Deprecated* A legacy synonym for &#x60;warn&#x60;.  Note: If the JQL is not correctly formed a 400 response code is returned, regardless of the &#x60;validateQuery&#x60; value. | [optional] [default to &#39;strict&#39;] |
| **fields** | [**string[]**](../Model/string.md)| A list of fields to return for each issue, use it to retrieve a subset of fields. This parameter accepts a comma-separated list. Expand options include:   *  &#x60;*all&#x60; Returns all fields.  *  &#x60;*navigable&#x60; Returns navigable fields.  *  Any issue field, prefixed with a minus to exclude.  Examples:   *  &#x60;summary,comment&#x60; Returns only the summary and comments fields.  *  &#x60;-description&#x60; Returns all navigable (default) fields except description.  *  &#x60;*all,-comment&#x60; Returns all fields except comments.  This parameter may be specified multiple times. For example, &#x60;fields&#x3D;field1,field2&amp;fields&#x3D;field3&#x60;.  Note: All navigable fields are returned by default. This differs from [GET issue](#api-rest-api-2-issue-issueIdOrKey-get) where the default is all fields. | [optional] |
| **expand** | **string**| Use [expand](#expansion) to include additional information about issues in the response. This parameter accepts a comma-separated list. Expand options include:   *  &#x60;renderedFields&#x60; Returns field values rendered in HTML format.  *  &#x60;names&#x60; Returns the display name of each field.  *  &#x60;schema&#x60; Returns the schema describing a field type.  *  &#x60;transitions&#x60; Returns all possible transitions for the issue.  *  &#x60;operations&#x60; Returns all possible operations for the issue.  *  &#x60;editmeta&#x60; Returns information about how each field can be edited.  *  &#x60;changelog&#x60; Returns a list of recent updates to an issue, sorted by date, starting from the most recent.  *  &#x60;versionedRepresentations&#x60; Instead of &#x60;fields&#x60;, returns &#x60;versionedRepresentations&#x60; a JSON array containing each version of a field&#39;s value, with the highest numbered item representing the most recent version. | [optional] |
| **properties** | [**string[]**](../Model/string.md)| A list of issue property keys for issue properties to include in the results. This parameter accepts a comma-separated list. Multiple properties can also be provided using an ampersand separated list. For example, &#x60;properties&#x3D;prop1,prop2&amp;properties&#x3D;prop3&#x60;. A maximum of 5 issue property keys can be specified. | [optional] |
| **fields_by_keys** | **bool**| Reference fields by their key (rather than ID). | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\SearchResults**](../Model/SearchResults.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchForIssuesUsingJqlPost()`

```php
searchForIssuesUsingJqlPost($search_request_bean): \OpenAPI\Client\Model\SearchResults
```

Search for issues using JQL (POST)

Searches for issues using [JQL](https://confluence.atlassian.com/x/egORLQ).  There is a [GET](#api-rest-api-2-search-get) version of this resource that can be used for smaller JQL query expressions.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** Issues are included in the response where the user has:   *  *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project containing the issue.  *  If [issue-level security](https://confluence.atlassian.com/x/J4lKLg) is configured, issue-level security permission to view the issue.

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


$apiInstance = new OpenAPI\Client\Api\IssueSearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search_request_bean = {"expand":["names","schema","operations"],"fields":["summary","status","assignee"],"fieldsByKeys":false,"jql":"project = HSP","maxResults":15,"startAt":0}; // \OpenAPI\Client\Model\SearchRequestBean | A JSON object containing the search request.

try {
    $result = $apiInstance->searchForIssuesUsingJqlPost($search_request_bean);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueSearchApi->searchForIssuesUsingJqlPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **search_request_bean** | [**\OpenAPI\Client\Model\SearchRequestBean**](../Model/SearchRequestBean.md)| A JSON object containing the search request. | |

### Return type

[**\OpenAPI\Client\Model\SearchResults**](../Model/SearchResults.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
