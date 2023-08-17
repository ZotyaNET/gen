# OpenAPI\Client\IssueWorklogsApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addWorklog()**](IssueWorklogsApi.md#addWorklog) | **POST** /rest/api/2/issue/{issueIdOrKey}/worklog | Add worklog |
| [**deleteWorklog()**](IssueWorklogsApi.md#deleteWorklog) | **DELETE** /rest/api/2/issue/{issueIdOrKey}/worklog/{id} | Delete worklog |
| [**getIdsOfWorklogsDeletedSince()**](IssueWorklogsApi.md#getIdsOfWorklogsDeletedSince) | **GET** /rest/api/2/worklog/deleted | Get IDs of deleted worklogs |
| [**getIdsOfWorklogsModifiedSince()**](IssueWorklogsApi.md#getIdsOfWorklogsModifiedSince) | **GET** /rest/api/2/worklog/updated | Get IDs of updated worklogs |
| [**getIssueWorklog()**](IssueWorklogsApi.md#getIssueWorklog) | **GET** /rest/api/2/issue/{issueIdOrKey}/worklog | Get issue worklogs |
| [**getWorklog()**](IssueWorklogsApi.md#getWorklog) | **GET** /rest/api/2/issue/{issueIdOrKey}/worklog/{id} | Get worklog |
| [**getWorklogsForIds()**](IssueWorklogsApi.md#getWorklogsForIds) | **POST** /rest/api/2/worklog/list | Get worklogs |
| [**updateWorklog()**](IssueWorklogsApi.md#updateWorklog) | **PUT** /rest/api/2/issue/{issueIdOrKey}/worklog/{id} | Update worklog |


## `addWorklog()`

```php
addWorklog($issue_id_or_key, $request_body, $notify_users, $adjust_estimate, $new_estimate, $reduce_by, $expand, $override_editable_flag): \OpenAPI\Client\Model\Worklog
```

Add worklog

Adds a worklog to an issue.  Time tracking must be enabled in Jira, otherwise this operation returns an error. For more information, see [Configuring time tracking](https://confluence.atlassian.com/x/qoXKM).  This operation can be accessed anonymously.  **[Permissions](#permissions) required:**   *  *Browse projects* and *Work on issues* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project that the issue is in.  *  If [issue-level security](https://confluence.atlassian.com/x/J4lKLg) is configured, issue-level security permission to view the issue.

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


$apiInstance = new OpenAPI\Client\Api\IssueWorklogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_id_or_key = 'issue_id_or_key_example'; // string | The ID or key the issue.
$request_body = {"comment":"I did some work here.","started":"2021-01-17T12:34:00.000+0000","timeSpentSeconds":12000,"visibility":{"identifier":"276f955c-63d7-42c8-9520-92d01dca0625","type":"group"}}; // array<string,mixed>
$notify_users = true; // bool | Whether users watching the issue are notified by email.
$adjust_estimate = 'auto'; // string | Defines how to update the issue's time estimate, the options are:   *  `new` Sets the estimate to a specific value, defined in `newEstimate`.  *  `leave` Leaves the estimate unchanged.  *  `manual` Reduces the estimate by amount specified in `reduceBy`.  *  `auto` Reduces the estimate by the value of `timeSpent` in the worklog.
$new_estimate = 'new_estimate_example'; // string | The value to set as the issue's remaining time estimate, as days (\\#d), hours (\\#h), or minutes (\\#m or \\#). For example, *2d*. Required when `adjustEstimate` is `new`.
$reduce_by = 'reduce_by_example'; // string | The amount to reduce the issue's remaining estimate by, as days (\\#d), hours (\\#h), or minutes (\\#m). For example, *2d*. Required when `adjustEstimate` is `manual`.
$expand = ''; // string | Use [expand](#expansion) to include additional information about work logs in the response. This parameter accepts `properties`, which returns worklog properties.
$override_editable_flag = false; // bool | Whether the worklog entry should be added to the issue even if the issue is not editable, because jira.issue.editable set to false or missing. For example, the issue is closed. Connect and Forge app users with *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg) can use this flag.

try {
    $result = $apiInstance->addWorklog($issue_id_or_key, $request_body, $notify_users, $adjust_estimate, $new_estimate, $reduce_by, $expand, $override_editable_flag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueWorklogsApi->addWorklog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_id_or_key** | **string**| The ID or key the issue. | |
| **request_body** | [**array<string,mixed>**](../Model/mixed.md)|  | |
| **notify_users** | **bool**| Whether users watching the issue are notified by email. | [optional] [default to true] |
| **adjust_estimate** | **string**| Defines how to update the issue&#39;s time estimate, the options are:   *  &#x60;new&#x60; Sets the estimate to a specific value, defined in &#x60;newEstimate&#x60;.  *  &#x60;leave&#x60; Leaves the estimate unchanged.  *  &#x60;manual&#x60; Reduces the estimate by amount specified in &#x60;reduceBy&#x60;.  *  &#x60;auto&#x60; Reduces the estimate by the value of &#x60;timeSpent&#x60; in the worklog. | [optional] [default to &#39;auto&#39;] |
| **new_estimate** | **string**| The value to set as the issue&#39;s remaining time estimate, as days (\\#d), hours (\\#h), or minutes (\\#m or \\#). For example, *2d*. Required when &#x60;adjustEstimate&#x60; is &#x60;new&#x60;. | [optional] |
| **reduce_by** | **string**| The amount to reduce the issue&#39;s remaining estimate by, as days (\\#d), hours (\\#h), or minutes (\\#m). For example, *2d*. Required when &#x60;adjustEstimate&#x60; is &#x60;manual&#x60;. | [optional] |
| **expand** | **string**| Use [expand](#expansion) to include additional information about work logs in the response. This parameter accepts &#x60;properties&#x60;, which returns worklog properties. | [optional] [default to &#39;&#39;] |
| **override_editable_flag** | **bool**| Whether the worklog entry should be added to the issue even if the issue is not editable, because jira.issue.editable set to false or missing. For example, the issue is closed. Connect and Forge app users with *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg) can use this flag. | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\Worklog**](../Model/Worklog.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWorklog()`

```php
deleteWorklog($issue_id_or_key, $id, $notify_users, $adjust_estimate, $new_estimate, $increase_by, $override_editable_flag)
```

Delete worklog

Deletes a worklog from an issue.  Time tracking must be enabled in Jira, otherwise this operation returns an error. For more information, see [Configuring time tracking](https://confluence.atlassian.com/x/qoXKM).  This operation can be accessed anonymously.  **[Permissions](#permissions) required:**   *  *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project that the issue is in.  *  If [issue-level security](https://confluence.atlassian.com/x/J4lKLg) is configured, issue-level security permission to view the issue.  *  *Delete all worklogs*[ project permission](https://confluence.atlassian.com/x/yodKLg) to delete any worklog or *Delete own worklogs* to delete worklogs created by the user,  *  If the worklog has visibility restrictions, belongs to the group or has the role visibility is restricted to.

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


$apiInstance = new OpenAPI\Client\Api\IssueWorklogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_id_or_key = 'issue_id_or_key_example'; // string | The ID or key of the issue.
$id = 'id_example'; // string | The ID of the worklog.
$notify_users = true; // bool | Whether users watching the issue are notified by email.
$adjust_estimate = 'auto'; // string | Defines how to update the issue's time estimate, the options are:   *  `new` Sets the estimate to a specific value, defined in `newEstimate`.  *  `leave` Leaves the estimate unchanged.  *  `manual` Increases the estimate by amount specified in `increaseBy`.  *  `auto` Reduces the estimate by the value of `timeSpent` in the worklog.
$new_estimate = 'new_estimate_example'; // string | The value to set as the issue's remaining time estimate, as days (\\#d), hours (\\#h), or minutes (\\#m or \\#). For example, *2d*. Required when `adjustEstimate` is `new`.
$increase_by = 'increase_by_example'; // string | The amount to increase the issue's remaining estimate by, as days (\\#d), hours (\\#h), or minutes (\\#m or \\#). For example, *2d*. Required when `adjustEstimate` is `manual`.
$override_editable_flag = false; // bool | Whether the work log entry should be added to the issue even if the issue is not editable, because jira.issue.editable set to false or missing. For example, the issue is closed. Connect and Forge app users with admin permission can use this flag.

try {
    $apiInstance->deleteWorklog($issue_id_or_key, $id, $notify_users, $adjust_estimate, $new_estimate, $increase_by, $override_editable_flag);
} catch (Exception $e) {
    echo 'Exception when calling IssueWorklogsApi->deleteWorklog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_id_or_key** | **string**| The ID or key of the issue. | |
| **id** | **string**| The ID of the worklog. | |
| **notify_users** | **bool**| Whether users watching the issue are notified by email. | [optional] [default to true] |
| **adjust_estimate** | **string**| Defines how to update the issue&#39;s time estimate, the options are:   *  &#x60;new&#x60; Sets the estimate to a specific value, defined in &#x60;newEstimate&#x60;.  *  &#x60;leave&#x60; Leaves the estimate unchanged.  *  &#x60;manual&#x60; Increases the estimate by amount specified in &#x60;increaseBy&#x60;.  *  &#x60;auto&#x60; Reduces the estimate by the value of &#x60;timeSpent&#x60; in the worklog. | [optional] [default to &#39;auto&#39;] |
| **new_estimate** | **string**| The value to set as the issue&#39;s remaining time estimate, as days (\\#d), hours (\\#h), or minutes (\\#m or \\#). For example, *2d*. Required when &#x60;adjustEstimate&#x60; is &#x60;new&#x60;. | [optional] |
| **increase_by** | **string**| The amount to increase the issue&#39;s remaining estimate by, as days (\\#d), hours (\\#h), or minutes (\\#m or \\#). For example, *2d*. Required when &#x60;adjustEstimate&#x60; is &#x60;manual&#x60;. | [optional] |
| **override_editable_flag** | **bool**| Whether the work log entry should be added to the issue even if the issue is not editable, because jira.issue.editable set to false or missing. For example, the issue is closed. Connect and Forge app users with admin permission can use this flag. | [optional] [default to false] |

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

## `getIdsOfWorklogsDeletedSince()`

```php
getIdsOfWorklogsDeletedSince($since): \OpenAPI\Client\Model\ChangedWorklogs
```

Get IDs of deleted worklogs

Returns a list of IDs and delete timestamps for worklogs deleted after a date and time.  This resource is paginated, with a limit of 1000 worklogs per page. Each page lists worklogs from oldest to youngest. If the number of items in the date range exceeds 1000, `until` indicates the timestamp of the youngest item on the page. Also, `nextPage` provides the URL for the next page of worklogs. The `lastPage` parameter is set to true on the last page of worklogs.  This resource does not return worklogs deleted during the minute preceding the request.  **[Permissions](#permissions) required:** Permission to access Jira.

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


$apiInstance = new OpenAPI\Client\Api\IssueWorklogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$since = 0; // int | The date and time, as a UNIX timestamp in milliseconds, after which deleted worklogs are returned.

try {
    $result = $apiInstance->getIdsOfWorklogsDeletedSince($since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueWorklogsApi->getIdsOfWorklogsDeletedSince: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **since** | **int**| The date and time, as a UNIX timestamp in milliseconds, after which deleted worklogs are returned. | [optional] [default to 0] |

### Return type

[**\OpenAPI\Client\Model\ChangedWorklogs**](../Model/ChangedWorklogs.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIdsOfWorklogsModifiedSince()`

```php
getIdsOfWorklogsModifiedSince($since, $expand): \OpenAPI\Client\Model\ChangedWorklogs
```

Get IDs of updated worklogs

Returns a list of IDs and update timestamps for worklogs updated after a date and time.  This resource is paginated, with a limit of 1000 worklogs per page. Each page lists worklogs from oldest to youngest. If the number of items in the date range exceeds 1000, `until` indicates the timestamp of the youngest item on the page. Also, `nextPage` provides the URL for the next page of worklogs. The `lastPage` parameter is set to true on the last page of worklogs.  This resource does not return worklogs updated during the minute preceding the request.  **[Permissions](#permissions) required:** Permission to access Jira, however, worklogs are only returned where either of the following is true:   *  the worklog is set as *Viewable by All Users*.  *  the user is a member of a project role or group with permission to view the worklog.

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


$apiInstance = new OpenAPI\Client\Api\IssueWorklogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$since = 0; // int | The date and time, as a UNIX timestamp in milliseconds, after which updated worklogs are returned.
$expand = ''; // string | Use [expand](#expansion) to include additional information about worklogs in the response. This parameter accepts `properties` that returns the properties of each worklog.

try {
    $result = $apiInstance->getIdsOfWorklogsModifiedSince($since, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueWorklogsApi->getIdsOfWorklogsModifiedSince: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **since** | **int**| The date and time, as a UNIX timestamp in milliseconds, after which updated worklogs are returned. | [optional] [default to 0] |
| **expand** | **string**| Use [expand](#expansion) to include additional information about worklogs in the response. This parameter accepts &#x60;properties&#x60; that returns the properties of each worklog. | [optional] [default to &#39;&#39;] |

### Return type

[**\OpenAPI\Client\Model\ChangedWorklogs**](../Model/ChangedWorklogs.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIssueWorklog()`

```php
getIssueWorklog($issue_id_or_key, $start_at, $max_results, $started_after, $started_before, $expand): \OpenAPI\Client\Model\PageOfWorklogs
```

Get issue worklogs

Returns worklogs for an issue, starting from the oldest worklog or from the worklog started on or after a date and time.  Time tracking must be enabled in Jira, otherwise this operation returns an error. For more information, see [Configuring time tracking](https://confluence.atlassian.com/x/qoXKM).  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** Workloads are only returned where the user has:   *  *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project that the issue is in.  *  If [issue-level security](https://confluence.atlassian.com/x/J4lKLg) is configured, issue-level security permission to view the issue.  *  If the worklog has visibility restrictions, belongs to the group or has the role visibility is restricted to.

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


$apiInstance = new OpenAPI\Client\Api\IssueWorklogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_id_or_key = 'issue_id_or_key_example'; // string | The ID or key of the issue.
$start_at = 0; // int | The index of the first item to return in a page of results (page offset).
$max_results = 5000; // int | The maximum number of items to return per page.
$started_after = 56; // int | The worklog start date and time, as a UNIX timestamp in milliseconds, after which worklogs are returned.
$started_before = 56; // int | The worklog start date and time, as a UNIX timestamp in milliseconds, before which worklogs are returned.
$expand = ''; // string | Use [expand](#expansion) to include additional information about worklogs in the response. This parameter accepts`properties`, which returns worklog properties.

try {
    $result = $apiInstance->getIssueWorklog($issue_id_or_key, $start_at, $max_results, $started_after, $started_before, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueWorklogsApi->getIssueWorklog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_id_or_key** | **string**| The ID or key of the issue. | |
| **start_at** | **int**| The index of the first item to return in a page of results (page offset). | [optional] [default to 0] |
| **max_results** | **int**| The maximum number of items to return per page. | [optional] [default to 5000] |
| **started_after** | **int**| The worklog start date and time, as a UNIX timestamp in milliseconds, after which worklogs are returned. | [optional] |
| **started_before** | **int**| The worklog start date and time, as a UNIX timestamp in milliseconds, before which worklogs are returned. | [optional] |
| **expand** | **string**| Use [expand](#expansion) to include additional information about worklogs in the response. This parameter accepts&#x60;properties&#x60;, which returns worklog properties. | [optional] [default to &#39;&#39;] |

### Return type

[**\OpenAPI\Client\Model\PageOfWorklogs**](../Model/PageOfWorklogs.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWorklog()`

```php
getWorklog($issue_id_or_key, $id, $expand): \OpenAPI\Client\Model\Worklog
```

Get worklog

Returns a worklog.  Time tracking must be enabled in Jira, otherwise this operation returns an error. For more information, see [Configuring time tracking](https://confluence.atlassian.com/x/qoXKM).  This operation can be accessed anonymously.  **[Permissions](#permissions) required:**   *  *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project that the issue is in.  *  If [issue-level security](https://confluence.atlassian.com/x/J4lKLg) is configured, issue-level security permission to view the issue.  *  If the worklog has visibility restrictions, belongs to the group or has the role visibility is restricted to.

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


$apiInstance = new OpenAPI\Client\Api\IssueWorklogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_id_or_key = 'issue_id_or_key_example'; // string | The ID or key of the issue.
$id = 'id_example'; // string | The ID of the worklog.
$expand = ''; // string | Use [expand](#expansion) to include additional information about work logs in the response. This parameter accepts  `properties`, which returns worklog properties.

try {
    $result = $apiInstance->getWorklog($issue_id_or_key, $id, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueWorklogsApi->getWorklog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_id_or_key** | **string**| The ID or key of the issue. | |
| **id** | **string**| The ID of the worklog. | |
| **expand** | **string**| Use [expand](#expansion) to include additional information about work logs in the response. This parameter accepts  &#x60;properties&#x60;, which returns worklog properties. | [optional] [default to &#39;&#39;] |

### Return type

[**\OpenAPI\Client\Model\Worklog**](../Model/Worklog.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWorklogsForIds()`

```php
getWorklogsForIds($worklog_ids_request_bean, $expand): \OpenAPI\Client\Model\Worklog[]
```

Get worklogs

Returns worklog details for a list of worklog IDs.  The returned list of worklogs is limited to 1000 items.  **[Permissions](#permissions) required:** Permission to access Jira, however, worklogs are only returned where either of the following is true:   *  the worklog is set as *Viewable by All Users*.  *  the user is a member of a project role or group with permission to view the worklog.

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


$apiInstance = new OpenAPI\Client\Api\IssueWorklogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$worklog_ids_request_bean = {"ids":[1,2,5,10]}; // \OpenAPI\Client\Model\WorklogIdsRequestBean | A JSON object containing a list of worklog IDs.
$expand = ''; // string | Use [expand](#expansion) to include additional information about worklogs in the response. This parameter accepts `properties` that returns the properties of each worklog.

try {
    $result = $apiInstance->getWorklogsForIds($worklog_ids_request_bean, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueWorklogsApi->getWorklogsForIds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **worklog_ids_request_bean** | [**\OpenAPI\Client\Model\WorklogIdsRequestBean**](../Model/WorklogIdsRequestBean.md)| A JSON object containing a list of worklog IDs. | |
| **expand** | **string**| Use [expand](#expansion) to include additional information about worklogs in the response. This parameter accepts &#x60;properties&#x60; that returns the properties of each worklog. | [optional] [default to &#39;&#39;] |

### Return type

[**\OpenAPI\Client\Model\Worklog[]**](../Model/Worklog.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWorklog()`

```php
updateWorklog($issue_id_or_key, $id, $request_body, $notify_users, $adjust_estimate, $new_estimate, $expand, $override_editable_flag): \OpenAPI\Client\Model\Worklog
```

Update worklog

Updates a worklog.  Time tracking must be enabled in Jira, otherwise this operation returns an error. For more information, see [Configuring time tracking](https://confluence.atlassian.com/x/qoXKM).  This operation can be accessed anonymously.  **[Permissions](#permissions) required:**   *  *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project that the issue is in.  *  If [issue-level security](https://confluence.atlassian.com/x/J4lKLg) is configured, issue-level security permission to view the issue.  *  *Edit all worklogs*[ project permission](https://confluence.atlassian.com/x/yodKLg) to update any worklog or *Edit own worklogs* to update worklogs created by the user.  *  If the worklog has visibility restrictions, belongs to the group or has the role visibility is restricted to.

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


$apiInstance = new OpenAPI\Client\Api\IssueWorklogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_id_or_key = 'issue_id_or_key_example'; // string | The ID or key the issue.
$id = 'id_example'; // string | The ID of the worklog.
$request_body = {"comment":"I did some work here.","started":"2021-01-17T12:34:00.000+0000","timeSpentSeconds":12000,"visibility":{"identifier":"276f955c-63d7-42c8-9520-92d01dca0625","type":"group"}}; // array<string,mixed>
$notify_users = true; // bool | Whether users watching the issue are notified by email.
$adjust_estimate = 'auto'; // string | Defines how to update the issue's time estimate, the options are:   *  `new` Sets the estimate to a specific value, defined in `newEstimate`.  *  `leave` Leaves the estimate unchanged.  *  `auto` Updates the estimate by the difference between the original and updated value of `timeSpent` or `timeSpentSeconds`.
$new_estimate = 'new_estimate_example'; // string | The value to set as the issue's remaining time estimate, as days (\\#d), hours (\\#h), or minutes (\\#m or \\#). For example, *2d*. Required when `adjustEstimate` is `new`.
$expand = ''; // string | Use [expand](#expansion) to include additional information about worklogs in the response. This parameter accepts `properties`, which returns worklog properties.
$override_editable_flag = false; // bool | Whether the worklog should be added to the issue even if the issue is not editable. For example, because the issue is closed. Connect and Forge app users with *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg) can use this flag.

try {
    $result = $apiInstance->updateWorklog($issue_id_or_key, $id, $request_body, $notify_users, $adjust_estimate, $new_estimate, $expand, $override_editable_flag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueWorklogsApi->updateWorklog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_id_or_key** | **string**| The ID or key the issue. | |
| **id** | **string**| The ID of the worklog. | |
| **request_body** | [**array<string,mixed>**](../Model/mixed.md)|  | |
| **notify_users** | **bool**| Whether users watching the issue are notified by email. | [optional] [default to true] |
| **adjust_estimate** | **string**| Defines how to update the issue&#39;s time estimate, the options are:   *  &#x60;new&#x60; Sets the estimate to a specific value, defined in &#x60;newEstimate&#x60;.  *  &#x60;leave&#x60; Leaves the estimate unchanged.  *  &#x60;auto&#x60; Updates the estimate by the difference between the original and updated value of &#x60;timeSpent&#x60; or &#x60;timeSpentSeconds&#x60;. | [optional] [default to &#39;auto&#39;] |
| **new_estimate** | **string**| The value to set as the issue&#39;s remaining time estimate, as days (\\#d), hours (\\#h), or minutes (\\#m or \\#). For example, *2d*. Required when &#x60;adjustEstimate&#x60; is &#x60;new&#x60;. | [optional] |
| **expand** | **string**| Use [expand](#expansion) to include additional information about worklogs in the response. This parameter accepts &#x60;properties&#x60;, which returns worklog properties. | [optional] [default to &#39;&#39;] |
| **override_editable_flag** | **bool**| Whether the worklog should be added to the issue even if the issue is not editable. For example, because the issue is closed. Connect and Forge app users with *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg) can use this flag. | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\Worklog**](../Model/Worklog.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
