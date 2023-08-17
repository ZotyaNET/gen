# OpenAPI\Client\IssuesApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**archiveIssues()**](IssuesApi.md#archiveIssues) | **PUT** /rest/api/2/issue/archive | Archive issue(s) by issue ID/key |
| [**archiveIssuesAsync()**](IssuesApi.md#archiveIssuesAsync) | **POST** /rest/api/2/issue/archive | Archive issue(s) by JQL |
| [**assignIssue()**](IssuesApi.md#assignIssue) | **PUT** /rest/api/2/issue/{issueIdOrKey}/assignee | Assign issue |
| [**createIssue()**](IssuesApi.md#createIssue) | **POST** /rest/api/2/issue | Create issue |
| [**createIssues()**](IssuesApi.md#createIssues) | **POST** /rest/api/2/issue/bulk | Bulk create issue |
| [**deleteIssue()**](IssuesApi.md#deleteIssue) | **DELETE** /rest/api/2/issue/{issueIdOrKey} | Delete issue |
| [**doTransition()**](IssuesApi.md#doTransition) | **POST** /rest/api/2/issue/{issueIdOrKey}/transitions | Transition issue |
| [**editIssue()**](IssuesApi.md#editIssue) | **PUT** /rest/api/2/issue/{issueIdOrKey} | Edit issue |
| [**exportArchivedIssues()**](IssuesApi.md#exportArchivedIssues) | **PUT** /rest/api/2/issues/archive/export | Export archived issue(s) |
| [**getChangeLogs()**](IssuesApi.md#getChangeLogs) | **GET** /rest/api/2/issue/{issueIdOrKey}/changelog | Get changelogs |
| [**getChangeLogsByIds()**](IssuesApi.md#getChangeLogsByIds) | **POST** /rest/api/2/issue/{issueIdOrKey}/changelog/list | Get changelogs by IDs |
| [**getCreateIssueMeta()**](IssuesApi.md#getCreateIssueMeta) | **GET** /rest/api/2/issue/createmeta | Get create issue metadata |
| [**getEditIssueMeta()**](IssuesApi.md#getEditIssueMeta) | **GET** /rest/api/2/issue/{issueIdOrKey}/editmeta | Get edit issue metadata |
| [**getEvents()**](IssuesApi.md#getEvents) | **GET** /rest/api/2/events | Get events |
| [**getIssue()**](IssuesApi.md#getIssue) | **GET** /rest/api/2/issue/{issueIdOrKey} | Get issue |
| [**getTransitions()**](IssuesApi.md#getTransitions) | **GET** /rest/api/2/issue/{issueIdOrKey}/transitions | Get transitions |
| [**notify()**](IssuesApi.md#notify) | **POST** /rest/api/2/issue/{issueIdOrKey}/notify | Send notification for issue |
| [**unarchiveIssues()**](IssuesApi.md#unarchiveIssues) | **PUT** /rest/api/2/issue/unarchive | Unarchive issue(s) by issue keys/ID |


## `archiveIssues()`

```php
archiveIssues($issue_archival_sync_request): \OpenAPI\Client\Model\IssueArchivalSyncResponse
```

Archive issue(s) by issue ID/key

Enables admins to archive up to 1000 issues in a single request using issue ID/key, returning details of the issue(s) archived in the process and the errors encountered, if any.  **Note that:**   *  you can't archive subtasks directly, only through their parent issues  *  you can only archive issues from software, service management, and business projects  **[Permissions](#permissions) required:** Jira admin or site admin: [global permission](https://confluence.atlassian.com/x/x4dKLg)  **License required:** Premium or Enterprise  **Signed-in users only:** This API can't be accessed anonymously.

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


$apiInstance = new OpenAPI\Client\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_archival_sync_request = {"issueIdsOrKeys":["PR-1","1001","PROJECT-2"]}; // \OpenAPI\Client\Model\IssueArchivalSyncRequest | Contains a list of issue keys or IDs to be archived.

try {
    $result = $apiInstance->archiveIssues($issue_archival_sync_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->archiveIssues: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_archival_sync_request** | [**\OpenAPI\Client\Model\IssueArchivalSyncRequest**](../Model/IssueArchivalSyncRequest.md)| Contains a list of issue keys or IDs to be archived. | |

### Return type

[**\OpenAPI\Client\Model\IssueArchivalSyncResponse**](../Model/IssueArchivalSyncResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `archiveIssuesAsync()`

```php
archiveIssuesAsync($archive_issue_async_request): string
```

Archive issue(s) by JQL

Enables admins to archive up to 100,000 issues in a single request using JQL, returning the URL to check the status of the submitted request.  You can use the [get task](https://developer.atlassian.com/cloud/jira/platform/rest/v3/api-group-tasks/#api-rest-api-3-task-taskid-get) and [cancel task](https://developer.atlassian.com/cloud/jira/platform/rest/v3/api-group-tasks/#api-rest-api-3-task-taskid-cancel-post) APIs to manage the request.  **Note that:**   *  you can't archive subtasks directly, only through their parent issues  *  you can only archive issues from software, service management, and business projects  **[Permissions](#permissions) required:** Jira admin or site admin: [global permission](https://confluence.atlassian.com/x/x4dKLg)  **License required:** Premium or Enterprise  **Signed-in users only:** This API can't be accessed anonymously.  **Rate limiting:** Only a single request per user can be active at any given time.

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


$apiInstance = new OpenAPI\Client\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$archive_issue_async_request = {"jql":"project = FOO AND updated < -2y"}; // \OpenAPI\Client\Model\ArchiveIssueAsyncRequest | A JQL query specifying the issues to archive. Note that subtasks can only be archived through their parent issues.

try {
    $result = $apiInstance->archiveIssuesAsync($archive_issue_async_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->archiveIssuesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **archive_issue_async_request** | [**\OpenAPI\Client\Model\ArchiveIssueAsyncRequest**](../Model/ArchiveIssueAsyncRequest.md)| A JQL query specifying the issues to archive. Note that subtasks can only be archived through their parent issues. | |

### Return type

**string**

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `assignIssue()`

```php
assignIssue($issue_id_or_key, $user): mixed
```

Assign issue

Assigns an issue to a user. Use this operation when the calling user does not have the *Edit Issues* permission but has the *Assign issue* permission for the project that the issue is in.  If `name` or `accountId` is set to:   *  `\"-1\"`, the issue is assigned to the default assignee for the project.  *  `null`, the issue is set to unassigned.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:**   *  *Browse Projects* and *Assign Issues* [ project permission](https://confluence.atlassian.com/x/yodKLg) for the project that the issue is in.  *  If [issue-level security](https://confluence.atlassian.com/x/J4lKLg) is configured, issue-level security permission to view the issue.

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


$apiInstance = new OpenAPI\Client\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_id_or_key = 'issue_id_or_key_example'; // string | The ID or key of the issue to be assigned.
$user = {"accountId":"5b10ac8d82e05b22cc7d4ef5"}; // \OpenAPI\Client\Model\User | The request object with the user that the issue is assigned to.

try {
    $result = $apiInstance->assignIssue($issue_id_or_key, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->assignIssue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_id_or_key** | **string**| The ID or key of the issue to be assigned. | |
| **user** | [**\OpenAPI\Client\Model\User**](../Model/User.md)| The request object with the user that the issue is assigned to. | |

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

## `createIssue()`

```php
createIssue($request_body, $update_history): \OpenAPI\Client\Model\CreatedIssue
```

Create issue

Creates an issue or, where the option to create subtasks is enabled in Jira, a subtask. A transition may be applied, to move the issue or subtask to a workflow step other than the default start step, and issue properties set.  The content of the issue or subtask is defined using `update` and `fields`. The fields that can be set in the issue or subtask are determined using the [ Get create issue metadata](#api-rest-api-2-issue-createmeta-get). These are the same fields that appear on the issue's create screen.  Creating a subtask differs from creating an issue as follows:   *  `issueType` must be set to a subtask issue type (use [ Get create issue metadata](#api-rest-api-2-issue-createmeta-get) to find subtask issue types).  *  `parent` must contain the ID or key of the parent issue.  **[Permissions](#permissions) required:** *Browse projects* and *Create issues* [project permissions](https://confluence.atlassian.com/x/yodKLg) for the project in which the issue or subtask is created.

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


$apiInstance = new OpenAPI\Client\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_body = {"fields":{"assignee":{"id":"5b109f2e9729b51b54dc274d"},"components":[{"id":"10000"}],"customfield_10000":"09/Jun/19","customfield_20000":"06/Jul/19 3:25 PM","customfield_30000":["10000","10002"],"customfield_40000":"Occurs on all orders","customfield_50000":"Could impact day-to-day work.","customfield_60000":"jira-software-users","customfield_70000":["jira-administrators","jira-software-users"],"customfield_80000":{"value":"red"},"description":"Order entry fails when selecting supplier.","duedate":"2019-03-11","environment":"UAT","fixVersions":[{"id":"10001"}],"issuetype":{"id":"10000"},"labels":["bugfix","blitz_test"],"parent":{"key":"PROJ-123"},"priority":{"id":"20000"},"project":{"id":"10000"},"reporter":{"id":"5b10a2844c20165700ede21g"},"security":{"id":"10000"},"summary":"Main order flow broken","timetracking":{"originalEstimate":"10","remainingEstimate":"5"},"versions":[{"id":"10000"}]},"update":{"worklog":[{"add":{"started":"2019-07-05T11:05:00.000+0000","timeSpent":"60m"}}]}}; // array<string,mixed>
$update_history = false; // bool | Whether the project in which the issue is created is added to the user's **Recently viewed** project list, as shown under **Projects** in Jira. When provided, the issue type and request type are added to the user's history for a project. These values are then used to provide defaults on the issue create screen.

try {
    $result = $apiInstance->createIssue($request_body, $update_history);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->createIssue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_body** | [**array<string,mixed>**](../Model/mixed.md)|  | |
| **update_history** | **bool**| Whether the project in which the issue is created is added to the user&#39;s **Recently viewed** project list, as shown under **Projects** in Jira. When provided, the issue type and request type are added to the user&#39;s history for a project. These values are then used to provide defaults on the issue create screen. | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\CreatedIssue**](../Model/CreatedIssue.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createIssues()`

```php
createIssues($request_body): \OpenAPI\Client\Model\CreatedIssues
```

Bulk create issue

Creates upto **50** issues and, where the option to create subtasks is enabled in Jira, subtasks. Transitions may be applied, to move the issues or subtasks to a workflow step other than the default start step, and issue properties set.  The content of each issue or subtask is defined using `update` and `fields`. The fields that can be set in the issue or subtask are determined using the [ Get create issue metadata](#api-rest-api-2-issue-createmeta-get). These are the same fields that appear on the issues' create screens.  Creating a subtask differs from creating an issue as follows:   *  `issueType` must be set to a subtask issue type (use [ Get create issue metadata](#api-rest-api-2-issue-createmeta-get) to find subtask issue types).  *  `parent` the must contain the ID or key of the parent issue.  **[Permissions](#permissions) required:** *Browse projects* and *Create issues* [project permissions](https://confluence.atlassian.com/x/yodKLg) for the project in which each issue or subtask is created.

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


$apiInstance = new OpenAPI\Client\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_body = {"issueUpdates":[{"fields":{"assignee":{"id":"5b109f2e9729b51b54dc274d"},"components":[{"id":"10000"}],"customfield_10000":"09/Jun/19","customfield_20000":"06/Jul/19 3:25 PM","customfield_30000":["10000","10002"],"customfield_40000":"Occurs on all orders","customfield_50000":"Could impact day-to-day work.","customfield_60000":"jira-software-users","customfield_70000":["jira-administrators","jira-software-users"],"customfield_80000":{"value":"red"},"description":"Order entry fails when selecting supplier.","duedate":"2019-03-11","environment":"UAT","fixVersions":[{"id":"10001"}],"issuetype":{"id":"10000"},"labels":["bugfix","blitz_test"],"parent":{"key":"PROJ-123"},"priority":{"id":"20000"},"project":{"id":"10000"},"reporter":{"id":"5b10a2844c20165700ede21g"},"security":{"id":"10000"},"summary":"Main order flow broken","timetracking":{"originalEstimate":"10","remainingEstimate":"5"},"versions":[{"id":"10000"}]},"update":{"worklog":[{"add":{"started":"2019-07-05T11:05:00.000+0000","timeSpent":"60m"}}]}},{"fields":{"assignee":{"id":"5b109f2e9729b51b54dc274d"},"components":[{"id":"10000"}],"customfield_10000":"09/Jun/19","customfield_20000":"06/Jul/19 3:25 PM","customfield_30000":["10000","10002"],"customfield_40000":"Occurs on all orders","customfield_50000":"Could impact day-to-day work.","customfield_60000":"jira-software-users","customfield_70000":["jira-administrators","jira-software-users"],"customfield_80000":{"value":"red"},"description":"Order remains pending after approved.","duedate":"2019-04-16","environment":"UAT","fixVersions":[{"id":"10001"}],"issuetype":{"id":"10000"},"labels":["new_release"],"parent":{"id":"10034"},"priority":{"id":"20000"},"project":{"id":"1000"},"reporter":{"id":"5b10a2844c20165700ede21g"},"security":{"id":"10000"},"summary":"Order stuck in pending","timetracking":{"originalEstimate":"15","remainingEstimate":"5"},"versions":[{"id":"10000"}]},"update":{}}]}; // array<string,mixed>

try {
    $result = $apiInstance->createIssues($request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->createIssues: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_body** | [**array<string,mixed>**](../Model/mixed.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CreatedIssues**](../Model/CreatedIssues.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteIssue()`

```php
deleteIssue($issue_id_or_key, $delete_subtasks)
```

Delete issue

Deletes an issue.  An issue cannot be deleted if it has one or more subtasks. To delete an issue with subtasks, set `deleteSubtasks`. This causes the issue's subtasks to be deleted with the issue.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:**   *  *Browse projects* and *Delete issues* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project containing the issue.  *  If [issue-level security](https://confluence.atlassian.com/x/J4lKLg) is configured, issue-level security permission to view the issue.

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


$apiInstance = new OpenAPI\Client\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_id_or_key = 'issue_id_or_key_example'; // string | The ID or key of the issue.
$delete_subtasks = 'false'; // string | Whether the issue's subtasks are deleted when the issue is deleted.

try {
    $apiInstance->deleteIssue($issue_id_or_key, $delete_subtasks);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->deleteIssue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_id_or_key** | **string**| The ID or key of the issue. | |
| **delete_subtasks** | **string**| Whether the issue&#39;s subtasks are deleted when the issue is deleted. | [optional] [default to &#39;false&#39;] |

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

## `doTransition()`

```php
doTransition($issue_id_or_key, $request_body): mixed
```

Transition issue

Performs an issue transition and, if the transition has a screen, updates the fields from the transition screen.  sortByCategory To update the fields on the transition screen, specify the fields in the `fields` or `update` parameters in the request body. Get details about the fields using [ Get transitions](#api-rest-api-2-issue-issueIdOrKey-transitions-get) with the `transitions.fields` expand.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:**   *  *Browse projects* and *Transition issues* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project that the issue is in.  *  If [issue-level security](https://confluence.atlassian.com/x/J4lKLg) is configured, issue-level security permission to view the issue.

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


$apiInstance = new OpenAPI\Client\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_id_or_key = 'issue_id_or_key_example'; // string | The ID or key of the issue.
$request_body = {"fields":{"assignee":{"name":"Will"},"resolution":{"name":"Fixed"}},"historyMetadata":{"activityDescription":"Complete order processing","actor":{"avatarUrl":"http://mysystem/avatar/tony.jpg","displayName":"Tony","id":"tony","type":"mysystem-user","url":"http://mysystem/users/tony"},"cause":{"id":"myevent","type":"mysystem-event"},"description":"From the order testing process","extraData":{"Iteration":"10a","Step":"4"},"generator":{"id":"mysystem-1","type":"mysystem-application"},"type":"myplugin:type"},"transition":{"id":"5"},"update":{"comment":[{"add":{"body":"Bug has been fixed."}}]}}; // array<string,mixed>

try {
    $result = $apiInstance->doTransition($issue_id_or_key, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->doTransition: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_id_or_key** | **string**| The ID or key of the issue. | |
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

## `editIssue()`

```php
editIssue($issue_id_or_key, $request_body, $notify_users, $override_screen_security, $override_editable_flag): mixed
```

Edit issue

Edits an issue. A transition may be applied and issue properties updated as part of the edit.  The edits to the issue's fields are defined using `update` and `fields`. The fields that can be edited are determined using [ Get edit issue metadata](#api-rest-api-2-issue-issueIdOrKey-editmeta-get).  The parent field may be set by key or ID. For standard issue types, the parent may be removed by setting `update.parent.set.none` to *true*.  Connect apps having an app user with *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg), and Forge apps acting on behalf of users with *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg), can override the screen security configuration using `overrideScreenSecurity` and `overrideEditableFlag`.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:**   *  *Browse projects* and *Edit issues* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project that the issue is in.  *  If [issue-level security](https://confluence.atlassian.com/x/J4lKLg) is configured, issue-level security permission to view the issue.

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


$apiInstance = new OpenAPI\Client\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_id_or_key = 'issue_id_or_key_example'; // string | The ID or key of the issue.
$request_body = {"fields":{"customfield_10000":"Investigation underway","customfield_10010":1,"summary":"Completed orders still displaying in pending"},"historyMetadata":{"activityDescription":"Complete order processing","actor":{"avatarUrl":"http://mysystem/avatar/tony.jpg","displayName":"Tony","id":"tony","type":"mysystem-user","url":"http://mysystem/users/tony"},"cause":{"id":"myevent","type":"mysystem-event"},"description":"From the order testing process","extraData":{"Iteration":"10a","Step":"4"},"generator":{"id":"mysystem-1","type":"mysystem-application"},"type":"myplugin:type"},"properties":[{"key":"key1","value":"Order number 10784"},{"key":"key2","value":"Order number 10923"}],"update":{"components":[{"set":""}],"labels":[{"add":"triaged"},{"remove":"blocker"}],"summary":[{"set":"Bug in business logic"}],"timetracking":[{"edit":{"originalEstimate":"1w 1d","remainingEstimate":"4d"}}]}}; // array<string,mixed>
$notify_users = true; // bool | Whether a notification email about the issue update is sent to all watchers. To disable the notification, administer Jira or administer project permissions are required. If the user doesn't have the necessary permission the request is ignored.
$override_screen_security = false; // bool | Whether screen security is overridden to enable hidden fields to be edited. Available to Connect app users with *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg) and Forge apps acting on behalf of users with *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).
$override_editable_flag = false; // bool | Whether screen security is overridden to enable uneditable fields to be edited. Available to Connect app users with *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg) and Forge apps acting on behalf of users with *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

try {
    $result = $apiInstance->editIssue($issue_id_or_key, $request_body, $notify_users, $override_screen_security, $override_editable_flag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->editIssue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_id_or_key** | **string**| The ID or key of the issue. | |
| **request_body** | [**array<string,mixed>**](../Model/mixed.md)|  | |
| **notify_users** | **bool**| Whether a notification email about the issue update is sent to all watchers. To disable the notification, administer Jira or administer project permissions are required. If the user doesn&#39;t have the necessary permission the request is ignored. | [optional] [default to true] |
| **override_screen_security** | **bool**| Whether screen security is overridden to enable hidden fields to be edited. Available to Connect app users with *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg) and Forge apps acting on behalf of users with *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg). | [optional] [default to false] |
| **override_editable_flag** | **bool**| Whether screen security is overridden to enable uneditable fields to be edited. Available to Connect app users with *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg) and Forge apps acting on behalf of users with *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg). | [optional] [default to false] |

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

## `exportArchivedIssues()`

```php
exportArchivedIssues($request_body): \OpenAPI\Client\Model\ExportArchivedIssuesTaskProgressResponse
```

Export archived issue(s)

Enables admins to retrieve details of all archived issues. Upon a successful request, the admin who submitted it will receive an email with a link to download a CSV file with the issue details.  Note that this API only exports the values of system fields and archival-specific fields (`ArchivedBy` and `ArchivedDate`). Custom fields aren't supported.  **[Permissions](#permissions) required:** Jira admin or site admin: [global permission](https://confluence.atlassian.com/x/x4dKLg)  **License required:** Premium or Enterprise  **Signed-in users only:** This API can't be accessed anonymously.  **Rate limiting:** Only a single request can be active at any given time.

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


$apiInstance = new OpenAPI\Client\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_body = {"archivedBy":["uuid-rep-001","uuid-rep-002"],"archivedDate":{"dateAfter":"2023-01-01","dateBefore":"2023-01-12"},"archivedDateRange":{"dateAfter":"2023-01-01","dateBefore":"2023-01-12"},"issueTypes":["10001","10002"],"projects":["FOO","BAR"],"reporters":["uuid-rep-001","uuid-rep-002"]}; // array<string,mixed> | You can filter the issues in your request by the `projects`, `archivedBy`, `archivedDate`, `issueTypes`, and `reporters` fields. All filters are optional. If you don't provide any filters, you'll get a list of up to one million archived issues.

try {
    $result = $apiInstance->exportArchivedIssues($request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->exportArchivedIssues: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_body** | [**array<string,mixed>**](../Model/mixed.md)| You can filter the issues in your request by the &#x60;projects&#x60;, &#x60;archivedBy&#x60;, &#x60;archivedDate&#x60;, &#x60;issueTypes&#x60;, and &#x60;reporters&#x60; fields. All filters are optional. If you don&#39;t provide any filters, you&#39;ll get a list of up to one million archived issues. | |

### Return type

[**\OpenAPI\Client\Model\ExportArchivedIssuesTaskProgressResponse**](../Model/ExportArchivedIssuesTaskProgressResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChangeLogs()`

```php
getChangeLogs($issue_id_or_key, $start_at, $max_results): \OpenAPI\Client\Model\PageBeanChangelog
```

Get changelogs

Returns a [paginated](#pagination) list of all changelogs for an issue sorted by date, starting from the oldest.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:**   *  *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project that the issue is in.  *  If [issue-level security](https://confluence.atlassian.com/x/J4lKLg) is configured, issue-level security permission to view the issue.

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


$apiInstance = new OpenAPI\Client\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_id_or_key = 'issue_id_or_key_example'; // string | The ID or key of the issue.
$start_at = 0; // int | The index of the first item to return in a page of results (page offset).
$max_results = 100; // int | The maximum number of items to return per page.

try {
    $result = $apiInstance->getChangeLogs($issue_id_or_key, $start_at, $max_results);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->getChangeLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_id_or_key** | **string**| The ID or key of the issue. | |
| **start_at** | **int**| The index of the first item to return in a page of results (page offset). | [optional] [default to 0] |
| **max_results** | **int**| The maximum number of items to return per page. | [optional] [default to 100] |

### Return type

[**\OpenAPI\Client\Model\PageBeanChangelog**](../Model/PageBeanChangelog.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChangeLogsByIds()`

```php
getChangeLogsByIds($issue_id_or_key, $issue_changelog_ids): \OpenAPI\Client\Model\PageOfChangelogs
```

Get changelogs by IDs

Returns changelogs for an issue specified by a list of changelog IDs.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:**   *  *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project that the issue is in.  *  If [issue-level security](https://confluence.atlassian.com/x/J4lKLg) is configured, issue-level security permission to view the issue.

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


$apiInstance = new OpenAPI\Client\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_id_or_key = 'issue_id_or_key_example'; // string | The ID or key of the issue.
$issue_changelog_ids = {"changelogIds":[10001,10002]}; // \OpenAPI\Client\Model\IssueChangelogIds

try {
    $result = $apiInstance->getChangeLogsByIds($issue_id_or_key, $issue_changelog_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->getChangeLogsByIds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_id_or_key** | **string**| The ID or key of the issue. | |
| **issue_changelog_ids** | [**\OpenAPI\Client\Model\IssueChangelogIds**](../Model/IssueChangelogIds.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PageOfChangelogs**](../Model/PageOfChangelogs.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCreateIssueMeta()`

```php
getCreateIssueMeta($project_ids, $project_keys, $issuetype_ids, $issuetype_names, $expand): \OpenAPI\Client\Model\IssueCreateMetadata
```

Get create issue metadata

Returns details of projects, issue types within projects, and, when requested, the create screen fields for each issue type for the user. Use the information to populate the requests in [ Create issue](#api-rest-api-2-issue-post) and [Create issues](#api-rest-api-2-issue-bulk-post).  The request can be restricted to specific projects or issue types using the query parameters. The response will contain information for the valid projects, issue types, or project and issue type combinations requested. Note that invalid project, issue type, or project and issue type combinations do not generate errors.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** *Create issues* [project permission](https://confluence.atlassian.com/x/yodKLg) in the requested projects.

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


$apiInstance = new OpenAPI\Client\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_ids = array('project_ids_example'); // string[] | List of project IDs. This parameter accepts a comma-separated list. Multiple project IDs can also be provided using an ampersand-separated list. For example, `projectIds=10000,10001&projectIds=10020,10021`. This parameter may be provided with `projectKeys`.
$project_keys = array('project_keys_example'); // string[] | List of project keys. This parameter accepts a comma-separated list. Multiple project keys can also be provided using an ampersand-separated list. For example, `projectKeys=proj1,proj2&projectKeys=proj3`. This parameter may be provided with `projectIds`.
$issuetype_ids = array('issuetype_ids_example'); // string[] | List of issue type IDs. This parameter accepts a comma-separated list. Multiple issue type IDs can also be provided using an ampersand-separated list. For example, `issuetypeIds=10000,10001&issuetypeIds=10020,10021`. This parameter may be provided with `issuetypeNames`.
$issuetype_names = array('issuetype_names_example'); // string[] | List of issue type names. This parameter accepts a comma-separated list. Multiple issue type names can also be provided using an ampersand-separated list. For example, `issuetypeNames=name1,name2&issuetypeNames=name3`. This parameter may be provided with `issuetypeIds`.
$expand = 'expand_example'; // string | Use [expand](#expansion) to include additional information about issue metadata in the response. This parameter accepts `projects.issuetypes.fields`, which returns information about the fields in the issue creation screen for each issue type. Fields hidden from the screen are not returned. Use the information to populate the `fields` and `update` fields in [Create issue](#api-rest-api-2-issue-post) and [Create issues](#api-rest-api-2-issue-bulk-post).

try {
    $result = $apiInstance->getCreateIssueMeta($project_ids, $project_keys, $issuetype_ids, $issuetype_names, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->getCreateIssueMeta: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_ids** | [**string[]**](../Model/string.md)| List of project IDs. This parameter accepts a comma-separated list. Multiple project IDs can also be provided using an ampersand-separated list. For example, &#x60;projectIds&#x3D;10000,10001&amp;projectIds&#x3D;10020,10021&#x60;. This parameter may be provided with &#x60;projectKeys&#x60;. | [optional] |
| **project_keys** | [**string[]**](../Model/string.md)| List of project keys. This parameter accepts a comma-separated list. Multiple project keys can also be provided using an ampersand-separated list. For example, &#x60;projectKeys&#x3D;proj1,proj2&amp;projectKeys&#x3D;proj3&#x60;. This parameter may be provided with &#x60;projectIds&#x60;. | [optional] |
| **issuetype_ids** | [**string[]**](../Model/string.md)| List of issue type IDs. This parameter accepts a comma-separated list. Multiple issue type IDs can also be provided using an ampersand-separated list. For example, &#x60;issuetypeIds&#x3D;10000,10001&amp;issuetypeIds&#x3D;10020,10021&#x60;. This parameter may be provided with &#x60;issuetypeNames&#x60;. | [optional] |
| **issuetype_names** | [**string[]**](../Model/string.md)| List of issue type names. This parameter accepts a comma-separated list. Multiple issue type names can also be provided using an ampersand-separated list. For example, &#x60;issuetypeNames&#x3D;name1,name2&amp;issuetypeNames&#x3D;name3&#x60;. This parameter may be provided with &#x60;issuetypeIds&#x60;. | [optional] |
| **expand** | **string**| Use [expand](#expansion) to include additional information about issue metadata in the response. This parameter accepts &#x60;projects.issuetypes.fields&#x60;, which returns information about the fields in the issue creation screen for each issue type. Fields hidden from the screen are not returned. Use the information to populate the &#x60;fields&#x60; and &#x60;update&#x60; fields in [Create issue](#api-rest-api-2-issue-post) and [Create issues](#api-rest-api-2-issue-bulk-post). | [optional] |

### Return type

[**\OpenAPI\Client\Model\IssueCreateMetadata**](../Model/IssueCreateMetadata.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEditIssueMeta()`

```php
getEditIssueMeta($issue_id_or_key, $override_screen_security, $override_editable_flag): \OpenAPI\Client\Model\IssueUpdateMetadata
```

Get edit issue metadata

Returns the edit screen fields for an issue that are visible to and editable by the user. Use the information to populate the requests in [Edit issue](#api-rest-api-2-issue-issueIdOrKey-put).  This endpoint will check for these conditions:  1.  Field is available on a field screen - through screen, screen scheme, issue type screen scheme, and issue type scheme configuration. `overrideScreenSecurity=true` skips this condition. 2.  Field is visible in the [field configuration](https://support.atlassian.com/jira-cloud-administration/docs/change-a-field-configuration/). `overrideScreenSecurity=true` skips this condition. 3.  Field is shown on the issue: each field has different conditions here. For example: Attachment field only shows if attachments are enabled. Assignee only shows if user has permissions to assign the issue. 4.  If a field is custom then it must have valid custom field context, applicable for its project and issue type. All system fields are assumed to have context in all projects and all issue types. 5.  Issue has a project, issue type, and status defined. 6.  Issue is assigned to a valid workflow, and the current status has assigned a workflow step. `overrideEditableFlag=true` skips this condition. 7.  The current workflow step is editable. This is true by default, but [can be disabled by setting](https://support.atlassian.com/jira-cloud-administration/docs/use-workflow-properties/) the `jira.issue.editable` property to `false`. `overrideEditableFlag=true` skips this condition. 8.  User has [Edit issues permission](https://support.atlassian.com/jira-cloud-administration/docs/permissions-for-company-managed-projects/). 9.  Workflow permissions allow editing a field. This is true by default but [can be modified](https://support.atlassian.com/jira-cloud-administration/docs/use-workflow-properties/) using `jira.permission.*` workflow properties.  Fields hidden using [Issue layout settings page](https://support.atlassian.com/jira-software-cloud/docs/configure-field-layout-in-the-issue-view/) remain editable.  Connect apps having an app user with *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg), and Forge apps acting on behalf of users with *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg), can return additional details using:   *  `overrideScreenSecurity` When this flag is `true`, then this endpoint skips checking if fields are available through screens, and field configuration (conditions 1. and 2. from the list above).  *  `overrideEditableFlag` When this flag is `true`, then this endpoint skips checking if workflow is present and if the current step is editable (conditions 6. and 7. from the list above).  This operation can be accessed anonymously.  **[Permissions](#permissions) required:**   *  *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project that the issue is in.  *  If [issue-level security](https://confluence.atlassian.com/x/J4lKLg) is configured, issue-level security permission to view the issue.  Note: For any fields to be editable the user must have the *Edit issues* [project permission](https://confluence.atlassian.com/x/yodKLg) for the issue.

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


$apiInstance = new OpenAPI\Client\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_id_or_key = 'issue_id_or_key_example'; // string | The ID or key of the issue.
$override_screen_security = false; // bool | Whether hidden fields are returned. Available to Connect app users with *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg) and Forge apps acting on behalf of users with *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).
$override_editable_flag = false; // bool | Whether non-editable fields are returned. Available to Connect app users with *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg) and Forge apps acting on behalf of users with *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

try {
    $result = $apiInstance->getEditIssueMeta($issue_id_or_key, $override_screen_security, $override_editable_flag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->getEditIssueMeta: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_id_or_key** | **string**| The ID or key of the issue. | |
| **override_screen_security** | **bool**| Whether hidden fields are returned. Available to Connect app users with *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg) and Forge apps acting on behalf of users with *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg). | [optional] [default to false] |
| **override_editable_flag** | **bool**| Whether non-editable fields are returned. Available to Connect app users with *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg) and Forge apps acting on behalf of users with *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg). | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\IssueUpdateMetadata**](../Model/IssueUpdateMetadata.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEvents()`

```php
getEvents(): \OpenAPI\Client\Model\IssueEvent[]
```

Get events

Returns all issue events.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getEvents();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->getEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\IssueEvent[]**](../Model/IssueEvent.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIssue()`

```php
getIssue($issue_id_or_key, $fields, $fields_by_keys, $expand, $properties, $update_history): \OpenAPI\Client\Model\IssueBean
```

Get issue

Returns the details for an issue.  The issue is identified by its ID or key, however, if the identifier doesn't match an issue, a case-insensitive search and check for moved issues is performed. If a matching issue is found its details are returned, a 302 or other redirect is **not** returned. The issue key returned in the response is the key of the issue found.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:**   *  *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project that the issue is in.  *  If [issue-level security](https://confluence.atlassian.com/x/J4lKLg) is configured, issue-level security permission to view the issue.

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


$apiInstance = new OpenAPI\Client\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_id_or_key = 'issue_id_or_key_example'; // string | The ID or key of the issue.
$fields = array('fields_example'); // string[] | A list of fields to return for the issue. This parameter accepts a comma-separated list. Use it to retrieve a subset of fields. Allowed values:   *  `*all` Returns all fields.  *  `*navigable` Returns navigable fields.  *  Any issue field, prefixed with a minus to exclude.  Examples:   *  `summary,comment` Returns only the summary and comments fields.  *  `-description` Returns all (default) fields except description.  *  `*navigable,-comment` Returns all navigable fields except comment.  This parameter may be specified multiple times. For example, `fields=field1,field2& fields=field3`.  Note: All fields are returned by default. This differs from [Search for issues using JQL (GET)](#api-rest-api-2-search-get) and [Search for issues using JQL (POST)](#api-rest-api-2-search-post) where the default is all navigable fields.
$fields_by_keys = false; // bool | Whether fields in `fields` are referenced by keys rather than IDs. This parameter is useful where fields have been added by a connect app and a field's key may differ from its ID.
$expand = 'expand_example'; // string | Use [expand](#expansion) to include additional information about the issues in the response. This parameter accepts a comma-separated list. Expand options include:   *  `renderedFields` Returns field values rendered in HTML format.  *  `names` Returns the display name of each field.  *  `schema` Returns the schema describing a field type.  *  `transitions` Returns all possible transitions for the issue.  *  `editmeta` Returns information about how each field can be edited.  *  `changelog` Returns a list of recent updates to an issue, sorted by date, starting from the most recent.  *  `versionedRepresentations` Returns a JSON array for each version of a field's value, with the highest number representing the most recent version. Note: When included in the request, the `fields` parameter is ignored.
$properties = array('properties_example'); // string[] | A list of issue properties to return for the issue. This parameter accepts a comma-separated list. Allowed values:   *  `*all` Returns all issue properties.  *  Any issue property key, prefixed with a minus to exclude.  Examples:   *  `*all` Returns all properties.  *  `*all,-prop1` Returns all properties except `prop1`.  *  `prop1,prop2` Returns `prop1` and `prop2` properties.  This parameter may be specified multiple times. For example, `properties=prop1,prop2& properties=prop3`.
$update_history = false; // bool | Whether the project in which the issue is created is added to the user's **Recently viewed** project list, as shown under **Projects** in Jira. This also populates the [JQL issues search](#api-rest-api-2-search-get) `lastViewed` field.

try {
    $result = $apiInstance->getIssue($issue_id_or_key, $fields, $fields_by_keys, $expand, $properties, $update_history);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->getIssue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_id_or_key** | **string**| The ID or key of the issue. | |
| **fields** | [**string[]**](../Model/string.md)| A list of fields to return for the issue. This parameter accepts a comma-separated list. Use it to retrieve a subset of fields. Allowed values:   *  &#x60;*all&#x60; Returns all fields.  *  &#x60;*navigable&#x60; Returns navigable fields.  *  Any issue field, prefixed with a minus to exclude.  Examples:   *  &#x60;summary,comment&#x60; Returns only the summary and comments fields.  *  &#x60;-description&#x60; Returns all (default) fields except description.  *  &#x60;*navigable,-comment&#x60; Returns all navigable fields except comment.  This parameter may be specified multiple times. For example, &#x60;fields&#x3D;field1,field2&amp; fields&#x3D;field3&#x60;.  Note: All fields are returned by default. This differs from [Search for issues using JQL (GET)](#api-rest-api-2-search-get) and [Search for issues using JQL (POST)](#api-rest-api-2-search-post) where the default is all navigable fields. | [optional] |
| **fields_by_keys** | **bool**| Whether fields in &#x60;fields&#x60; are referenced by keys rather than IDs. This parameter is useful where fields have been added by a connect app and a field&#39;s key may differ from its ID. | [optional] [default to false] |
| **expand** | **string**| Use [expand](#expansion) to include additional information about the issues in the response. This parameter accepts a comma-separated list. Expand options include:   *  &#x60;renderedFields&#x60; Returns field values rendered in HTML format.  *  &#x60;names&#x60; Returns the display name of each field.  *  &#x60;schema&#x60; Returns the schema describing a field type.  *  &#x60;transitions&#x60; Returns all possible transitions for the issue.  *  &#x60;editmeta&#x60; Returns information about how each field can be edited.  *  &#x60;changelog&#x60; Returns a list of recent updates to an issue, sorted by date, starting from the most recent.  *  &#x60;versionedRepresentations&#x60; Returns a JSON array for each version of a field&#39;s value, with the highest number representing the most recent version. Note: When included in the request, the &#x60;fields&#x60; parameter is ignored. | [optional] |
| **properties** | [**string[]**](../Model/string.md)| A list of issue properties to return for the issue. This parameter accepts a comma-separated list. Allowed values:   *  &#x60;*all&#x60; Returns all issue properties.  *  Any issue property key, prefixed with a minus to exclude.  Examples:   *  &#x60;*all&#x60; Returns all properties.  *  &#x60;*all,-prop1&#x60; Returns all properties except &#x60;prop1&#x60;.  *  &#x60;prop1,prop2&#x60; Returns &#x60;prop1&#x60; and &#x60;prop2&#x60; properties.  This parameter may be specified multiple times. For example, &#x60;properties&#x3D;prop1,prop2&amp; properties&#x3D;prop3&#x60;. | [optional] |
| **update_history** | **bool**| Whether the project in which the issue is created is added to the user&#39;s **Recently viewed** project list, as shown under **Projects** in Jira. This also populates the [JQL issues search](#api-rest-api-2-search-get) &#x60;lastViewed&#x60; field. | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\IssueBean**](../Model/IssueBean.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransitions()`

```php
getTransitions($issue_id_or_key, $expand, $transition_id, $skip_remote_only_condition, $include_unavailable_transitions, $sort_by_ops_bar_and_status): \OpenAPI\Client\Model\Transitions
```

Get transitions

Returns either all transitions or a transition that can be performed by the user on an issue, based on the issue's status.  Note, if a request is made for a transition that does not exist or cannot be performed on the issue, given its status, the response will return any empty transitions list.  This operation can be accessed anonymously.  **[Permissions](#permissions) required: A list or transition is returned only when the user has:**   *  *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project that the issue is in.  *  If [issue-level security](https://confluence.atlassian.com/x/J4lKLg) is configured, issue-level security permission to view the issue.  However, if the user does not have the *Transition issues* [ project permission](https://confluence.atlassian.com/x/yodKLg) the response will not list any transitions.

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


$apiInstance = new OpenAPI\Client\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_id_or_key = 'issue_id_or_key_example'; // string | The ID or key of the issue.
$expand = 'expand_example'; // string | Use [expand](#expansion) to include additional information about transitions in the response. This parameter accepts `transitions.fields`, which returns information about the fields in the transition screen for each transition. Fields hidden from the screen are not returned. Use this information to populate the `fields` and `update` fields in [Transition issue](#api-rest-api-2-issue-issueIdOrKey-transitions-post).
$transition_id = 'transition_id_example'; // string | The ID of the transition.
$skip_remote_only_condition = false; // bool | Whether transitions with the condition *Hide From User Condition* are included in the response.
$include_unavailable_transitions = false; // bool | Whether details of transitions that fail a condition are included in the response
$sort_by_ops_bar_and_status = false; // bool | Whether the transitions are sorted by ops-bar sequence value first then category order (Todo, In Progress, Done) or only by ops-bar sequence value.

try {
    $result = $apiInstance->getTransitions($issue_id_or_key, $expand, $transition_id, $skip_remote_only_condition, $include_unavailable_transitions, $sort_by_ops_bar_and_status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->getTransitions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_id_or_key** | **string**| The ID or key of the issue. | |
| **expand** | **string**| Use [expand](#expansion) to include additional information about transitions in the response. This parameter accepts &#x60;transitions.fields&#x60;, which returns information about the fields in the transition screen for each transition. Fields hidden from the screen are not returned. Use this information to populate the &#x60;fields&#x60; and &#x60;update&#x60; fields in [Transition issue](#api-rest-api-2-issue-issueIdOrKey-transitions-post). | [optional] |
| **transition_id** | **string**| The ID of the transition. | [optional] |
| **skip_remote_only_condition** | **bool**| Whether transitions with the condition *Hide From User Condition* are included in the response. | [optional] [default to false] |
| **include_unavailable_transitions** | **bool**| Whether details of transitions that fail a condition are included in the response | [optional] [default to false] |
| **sort_by_ops_bar_and_status** | **bool**| Whether the transitions are sorted by ops-bar sequence value first then category order (Todo, In Progress, Done) or only by ops-bar sequence value. | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\Transitions**](../Model/Transitions.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `notify()`

```php
notify($issue_id_or_key, $request_body): mixed
```

Send notification for issue

Creates an email notification for an issue and adds it to the mail queue.  **[Permissions](#permissions) required:**   *  *Browse Projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project that the issue is in.  *  If [issue-level security](https://confluence.atlassian.com/x/J4lKLg) is configured, issue-level security permission to view the issue.

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


$apiInstance = new OpenAPI\Client\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_id_or_key = 'issue_id_or_key_example'; // string | ID or key of the issue that the notification is sent for.
$request_body = {"htmlBody":"The <strong>latest</strong> test results for this ticket are now available.","restrict":{"groupIds":[],"groups":[{"name":"notification-group"}],"permissions":[{"key":"BROWSE"}]},"subject":"Latest test results","textBody":"The latest test results for this ticket are now available.","to":{"assignee":false,"groupIds":[],"groups":[{"name":"notification-group"}],"reporter":false,"users":[{"accountId":"5b10a2844c20165700ede21g","active":false}],"voters":true,"watchers":true}}; // array<string,mixed> | The request object for the notification and recipients.

try {
    $result = $apiInstance->notify($issue_id_or_key, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->notify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_id_or_key** | **string**| ID or key of the issue that the notification is sent for. | |
| **request_body** | [**array<string,mixed>**](../Model/mixed.md)| The request object for the notification and recipients. | |

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

## `unarchiveIssues()`

```php
unarchiveIssues($issue_archival_sync_request): \OpenAPI\Client\Model\IssueArchivalSyncResponse
```

Unarchive issue(s) by issue keys/ID

Enables admins to unarchive up to 1000 issues in a single request using issue ID/key, returning details of the issue(s) unarchived in the process and the errors encountered, if any.  **Note that:**   *  you can't unarchive subtasks directly, only through their parent issues  *  you can only unarchive issues from software, service management, and business projects  **[Permissions](#permissions) required:** Jira admin or site admin: [global permission](https://confluence.atlassian.com/x/x4dKLg)  **License required:** Premium or Enterprise  **Signed-in users only:** This API can't be accessed anonymously.

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


$apiInstance = new OpenAPI\Client\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_archival_sync_request = {"issueIdsOrKeys":["PR-1","1001","PROJECT-2"]}; // \OpenAPI\Client\Model\IssueArchivalSyncRequest | Contains a list of issue keys or IDs to be unarchived.

try {
    $result = $apiInstance->unarchiveIssues($issue_archival_sync_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->unarchiveIssues: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_archival_sync_request** | [**\OpenAPI\Client\Model\IssueArchivalSyncRequest**](../Model/IssueArchivalSyncRequest.md)| Contains a list of issue keys or IDs to be unarchived. | |

### Return type

[**\OpenAPI\Client\Model\IssueArchivalSyncResponse**](../Model/IssueArchivalSyncResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
