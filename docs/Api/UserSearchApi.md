# OpenAPI\Client\UserSearchApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**findAssignableUsers()**](UserSearchApi.md#findAssignableUsers) | **GET** /rest/api/2/user/assignable/search | Find users assignable to issues |
| [**findBulkAssignableUsers()**](UserSearchApi.md#findBulkAssignableUsers) | **GET** /rest/api/2/user/assignable/multiProjectSearch | Find users assignable to projects |
| [**findUserKeysByQuery()**](UserSearchApi.md#findUserKeysByQuery) | **GET** /rest/api/2/user/search/query/key | Find user keys by query |
| [**findUsers()**](UserSearchApi.md#findUsers) | **GET** /rest/api/2/user/search | Find users |
| [**findUsersByQuery()**](UserSearchApi.md#findUsersByQuery) | **GET** /rest/api/2/user/search/query | Find users by query |
| [**findUsersForPicker()**](UserSearchApi.md#findUsersForPicker) | **GET** /rest/api/2/user/picker | Find users for picker |
| [**findUsersWithAllPermissions()**](UserSearchApi.md#findUsersWithAllPermissions) | **GET** /rest/api/2/user/permission/search | Find users with permissions |
| [**findUsersWithBrowsePermission()**](UserSearchApi.md#findUsersWithBrowsePermission) | **GET** /rest/api/2/user/viewissue/search | Find users with browse permission |


## `findAssignableUsers()`

```php
findAssignableUsers($query, $session_id, $username, $account_id, $project, $issue_key, $start_at, $max_results, $action_descriptor_id, $recommend): \OpenAPI\Client\Model\User[]
```

Find users assignable to issues

Returns a list of users that can be assigned to an issue. Use this operation to find the list of users who can be assigned to:   *  a new issue, by providing the `projectKeyOrId`.  *  an updated issue, by providing the `issueKey`.  *  to an issue during a transition (workflow action), by providing the `issueKey` and the transition id in `actionDescriptorId`. You can obtain the IDs of an issue's valid transitions using the `transitions` option in the `expand` parameter of [ Get issue](#api-rest-api-2-issue-issueIdOrKey-get).  In all these cases, you can pass an account ID to determine if a user can be assigned to an issue. The user is returned in the response if they can be assigned to the issue or issue transition.  This operation takes the users in the range defined by `startAt` and `maxResults`, up to the thousandth user, and then returns only the users from that range that can be assigned the issue. This means the operation usually returns fewer users than specified in `maxResults`. To get all the users who can be assigned the issue, use [Get all users](#api-rest-api-2-users-search-get) and filter the records in your code.  Privacy controls are applied to the response based on the users' preferences. This could mean, for example, that the user's email address is hidden. See the [Profile visibility overview](https://developer.atlassian.com/cloud/jira/platform/profile-visibility/) for more details.  **[Permissions](#permissions) required:** Permission to access Jira.

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


$apiInstance = new OpenAPI\Client\Api\UserSearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = query; // string | A query string that is matched against user attributes, such as `displayName`, and `emailAddress`, to find relevant users. The string can match the prefix of the attribute's value. For example, *query=john* matches a user with a `displayName` of *John Smith* and a user with an `emailAddress` of *johnson@example.com*. Required, unless `username` or `accountId` is specified.
$session_id = 'session_id_example'; // string | The sessionId of this request. SessionId is the same until the assignee is set.
$username = 'username_example'; // string | This parameter is no longer available. See the [deprecation notice](https://developer.atlassian.com/cloud/jira/platform/deprecation-notice-user-privacy-api-migration-guide/) for details.
$account_id = 'account_id_example'; // string | A query string that is matched exactly against user `accountId`. Required, unless `query` is specified.
$project = 'project_example'; // string | The project ID or project key (case sensitive). Required, unless `issueKey` is specified.
$issue_key = 'issue_key_example'; // string | The key of the issue. Required, unless `project` is specified.
$start_at = 0; // int | The index of the first item to return in a page of results (page offset).
$max_results = 50; // int | The maximum number of items to return. This operation may return less than the maximum number of items even if more are available. The operation fetches users up to the maximum and then, from the fetched users, returns only the users that can be assigned to the issue.
$action_descriptor_id = 56; // int | The ID of the transition.
$recommend = false; // bool

try {
    $result = $apiInstance->findAssignableUsers($query, $session_id, $username, $account_id, $project, $issue_key, $start_at, $max_results, $action_descriptor_id, $recommend);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserSearchApi->findAssignableUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **query** | **string**| A query string that is matched against user attributes, such as &#x60;displayName&#x60;, and &#x60;emailAddress&#x60;, to find relevant users. The string can match the prefix of the attribute&#39;s value. For example, *query&#x3D;john* matches a user with a &#x60;displayName&#x60; of *John Smith* and a user with an &#x60;emailAddress&#x60; of *johnson@example.com*. Required, unless &#x60;username&#x60; or &#x60;accountId&#x60; is specified. | [optional] |
| **session_id** | **string**| The sessionId of this request. SessionId is the same until the assignee is set. | [optional] |
| **username** | **string**| This parameter is no longer available. See the [deprecation notice](https://developer.atlassian.com/cloud/jira/platform/deprecation-notice-user-privacy-api-migration-guide/) for details. | [optional] |
| **account_id** | **string**| A query string that is matched exactly against user &#x60;accountId&#x60;. Required, unless &#x60;query&#x60; is specified. | [optional] |
| **project** | **string**| The project ID or project key (case sensitive). Required, unless &#x60;issueKey&#x60; is specified. | [optional] |
| **issue_key** | **string**| The key of the issue. Required, unless &#x60;project&#x60; is specified. | [optional] |
| **start_at** | **int**| The index of the first item to return in a page of results (page offset). | [optional] [default to 0] |
| **max_results** | **int**| The maximum number of items to return. This operation may return less than the maximum number of items even if more are available. The operation fetches users up to the maximum and then, from the fetched users, returns only the users that can be assigned to the issue. | [optional] [default to 50] |
| **action_descriptor_id** | **int**| The ID of the transition. | [optional] |
| **recommend** | **bool**|  | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\User[]**](../Model/User.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findBulkAssignableUsers()`

```php
findBulkAssignableUsers($project_keys, $query, $username, $account_id, $start_at, $max_results): \OpenAPI\Client\Model\User[]
```

Find users assignable to projects

Returns a list of users who can be assigned issues in one or more projects. The list may be restricted to users whose attributes match a string.  This operation takes the users in the range defined by `startAt` and `maxResults`, up to the thousandth user, and then returns only the users from that range that can be assigned issues in the projects. This means the operation usually returns fewer users than specified in `maxResults`. To get all the users who can be assigned issues in the projects, use [Get all users](#api-rest-api-2-users-search-get) and filter the records in your code.  Privacy controls are applied to the response based on the users' preferences. This could mean, for example, that the user's email address is hidden. See the [Profile visibility overview](https://developer.atlassian.com/cloud/jira/platform/profile-visibility/) for more details.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** None.

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


$apiInstance = new OpenAPI\Client\Api\UserSearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_keys = 'project_keys_example'; // string | A list of project keys (case sensitive). This parameter accepts a comma-separated list.
$query = query; // string | A query string that is matched against user attributes, such as `displayName` and `emailAddress`, to find relevant users. The string can match the prefix of the attribute's value. For example, *query=john* matches a user with a `displayName` of *John Smith* and a user with an `emailAddress` of *johnson@example.com*. Required, unless `accountId` is specified.
$username = 'username_example'; // string | This parameter is no longer available. See the [deprecation notice](https://developer.atlassian.com/cloud/jira/platform/deprecation-notice-user-privacy-api-migration-guide/) for details.
$account_id = 'account_id_example'; // string | A query string that is matched exactly against user `accountId`. Required, unless `query` is specified.
$start_at = 0; // int | The index of the first item to return in a page of results (page offset).
$max_results = 50; // int | The maximum number of items to return per page.

try {
    $result = $apiInstance->findBulkAssignableUsers($project_keys, $query, $username, $account_id, $start_at, $max_results);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserSearchApi->findBulkAssignableUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_keys** | **string**| A list of project keys (case sensitive). This parameter accepts a comma-separated list. | |
| **query** | **string**| A query string that is matched against user attributes, such as &#x60;displayName&#x60; and &#x60;emailAddress&#x60;, to find relevant users. The string can match the prefix of the attribute&#39;s value. For example, *query&#x3D;john* matches a user with a &#x60;displayName&#x60; of *John Smith* and a user with an &#x60;emailAddress&#x60; of *johnson@example.com*. Required, unless &#x60;accountId&#x60; is specified. | [optional] |
| **username** | **string**| This parameter is no longer available. See the [deprecation notice](https://developer.atlassian.com/cloud/jira/platform/deprecation-notice-user-privacy-api-migration-guide/) for details. | [optional] |
| **account_id** | **string**| A query string that is matched exactly against user &#x60;accountId&#x60;. Required, unless &#x60;query&#x60; is specified. | [optional] |
| **start_at** | **int**| The index of the first item to return in a page of results (page offset). | [optional] [default to 0] |
| **max_results** | **int**| The maximum number of items to return per page. | [optional] [default to 50] |

### Return type

[**\OpenAPI\Client\Model\User[]**](../Model/User.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findUserKeysByQuery()`

```php
findUserKeysByQuery($query, $start_at, $max_results): \OpenAPI\Client\Model\PageBeanUserKey
```

Find user keys by query

Finds users with a structured query and returns a [paginated](#pagination) list of user keys.  This operation takes the users in the range defined by `startAt` and `maxResults`, up to the thousandth user, and then returns only the users from that range that match the structured query. This means the operation usually returns fewer users than specified in `maxResults`. To get all the users who match the structured query, use [Get all users](#api-rest-api-2-users-search-get) and filter the records in your code.  **[Permissions](#permissions) required:** *Browse users and groups* [global permission](https://confluence.atlassian.com/x/x4dKLg).  The query statements are:   *  `is assignee of PROJ` Returns the users that are assignees of at least one issue in project *PROJ*.  *  `is assignee of (PROJ-1, PROJ-2)` Returns users that are assignees on the issues *PROJ-1* or *PROJ-2*.  *  `is reporter of (PROJ-1, PROJ-2)` Returns users that are reporters on the issues *PROJ-1* or *PROJ-2*.  *  `is watcher of (PROJ-1, PROJ-2)` Returns users that are watchers on the issues *PROJ-1* or *PROJ-2*.  *  `is voter of (PROJ-1, PROJ-2)` Returns users that are voters on the issues *PROJ-1* or *PROJ-2*.  *  `is commenter of (PROJ-1, PROJ-2)` Returns users that have posted a comment on the issues *PROJ-1* or *PROJ-2*.  *  `is transitioner of (PROJ-1, PROJ-2)` Returns users that have performed a transition on issues *PROJ-1* or *PROJ-2*.  *  `[propertyKey].entity.property.path is \"property value\"` Returns users with the entity property value.  The list of issues can be extended as needed, as in *(PROJ-1, PROJ-2, ... PROJ-n)*. Statements can be combined using the `AND` and `OR` operators to form more complex queries. For example:  `is assignee of PROJ AND [propertyKey].entity.property.path is \"property value\"`

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


$apiInstance = new OpenAPI\Client\Api\UserSearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = 'query_example'; // string | The search query.
$start_at = 0; // int | The index of the first item to return in a page of results (page offset).
$max_results = 100; // int | The maximum number of items to return per page.

try {
    $result = $apiInstance->findUserKeysByQuery($query, $start_at, $max_results);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserSearchApi->findUserKeysByQuery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **query** | **string**| The search query. | |
| **start_at** | **int**| The index of the first item to return in a page of results (page offset). | [optional] [default to 0] |
| **max_results** | **int**| The maximum number of items to return per page. | [optional] [default to 100] |

### Return type

[**\OpenAPI\Client\Model\PageBeanUserKey**](../Model/PageBeanUserKey.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findUsers()`

```php
findUsers($query, $username, $account_id, $start_at, $max_results, $property): \OpenAPI\Client\Model\User[]
```

Find users

Returns a list of users that match the search string and property.  This operation first applies a filter to match the search string and property, and then takes the filtered users in the range defined by `startAt` and `maxResults`, up to the thousandth user. To get all the users who match the search string and property, use [Get all users](#api-rest-api-2-users-search-get) and filter the records in your code.  This operation can be accessed anonymously.  Privacy controls are applied to the response based on the users' preferences. This could mean, for example, that the user's email address is hidden. See the [Profile visibility overview](https://developer.atlassian.com/cloud/jira/platform/profile-visibility/) for more details.  **[Permissions](#permissions) required:** *Browse users and groups* [global permission](https://confluence.atlassian.com/x/x4dKLg). Anonymous calls or calls by users without the required permission return empty search results.

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


$apiInstance = new OpenAPI\Client\Api\UserSearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = query; // string | A query string that is matched against user attributes ( `displayName`, and `emailAddress`) to find relevant users. The string can match the prefix of the attribute's value. For example, *query=john* matches a user with a `displayName` of *John Smith* and a user with an `emailAddress` of *johnson@example.com*. Required, unless `accountId` or `property` is specified.
$username = 'username_example'; // string
$account_id = 'account_id_example'; // string | A query string that is matched exactly against a user `accountId`. Required, unless `query` or `property` is specified.
$start_at = 0; // int | The index of the first item to return in a page of filtered results (page offset).
$max_results = 50; // int | The maximum number of items to return per page.
$property = 'property_example'; // string | A query string used to search properties. Property keys are specified by path, so property keys containing dot (.) or equals (=) characters cannot be used. The query string cannot be specified using a JSON object. Example: To search for the value of `nested` from `{\"something\":{\"nested\":1,\"other\":2}}` use `thepropertykey.something.nested=1`. Required, unless `accountId` or `query` is specified.

try {
    $result = $apiInstance->findUsers($query, $username, $account_id, $start_at, $max_results, $property);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserSearchApi->findUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **query** | **string**| A query string that is matched against user attributes ( &#x60;displayName&#x60;, and &#x60;emailAddress&#x60;) to find relevant users. The string can match the prefix of the attribute&#39;s value. For example, *query&#x3D;john* matches a user with a &#x60;displayName&#x60; of *John Smith* and a user with an &#x60;emailAddress&#x60; of *johnson@example.com*. Required, unless &#x60;accountId&#x60; or &#x60;property&#x60; is specified. | [optional] |
| **username** | **string**|  | [optional] |
| **account_id** | **string**| A query string that is matched exactly against a user &#x60;accountId&#x60;. Required, unless &#x60;query&#x60; or &#x60;property&#x60; is specified. | [optional] |
| **start_at** | **int**| The index of the first item to return in a page of filtered results (page offset). | [optional] [default to 0] |
| **max_results** | **int**| The maximum number of items to return per page. | [optional] [default to 50] |
| **property** | **string**| A query string used to search properties. Property keys are specified by path, so property keys containing dot (.) or equals (&#x3D;) characters cannot be used. The query string cannot be specified using a JSON object. Example: To search for the value of &#x60;nested&#x60; from &#x60;{\&quot;something\&quot;:{\&quot;nested\&quot;:1,\&quot;other\&quot;:2}}&#x60; use &#x60;thepropertykey.something.nested&#x3D;1&#x60;. Required, unless &#x60;accountId&#x60; or &#x60;query&#x60; is specified. | [optional] |

### Return type

[**\OpenAPI\Client\Model\User[]**](../Model/User.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findUsersByQuery()`

```php
findUsersByQuery($query, $start_at, $max_results): \OpenAPI\Client\Model\PageBeanUser
```

Find users by query

Finds users with a structured query and returns a [paginated](#pagination) list of user details.  This operation takes the users in the range defined by `startAt` and `maxResults`, up to the thousandth user, and then returns only the users from that range that match the structured query. This means the operation usually returns fewer users than specified in `maxResults`. To get all the users who match the structured query, use [Get all users](#api-rest-api-2-users-search-get) and filter the records in your code.  **[Permissions](#permissions) required:** *Browse users and groups* [global permission](https://confluence.atlassian.com/x/x4dKLg).  The query statements are:   *  `is assignee of PROJ` Returns the users that are assignees of at least one issue in project *PROJ*.  *  `is assignee of (PROJ-1, PROJ-2)` Returns users that are assignees on the issues *PROJ-1* or *PROJ-2*.  *  `is reporter of (PROJ-1, PROJ-2)` Returns users that are reporters on the issues *PROJ-1* or *PROJ-2*.  *  `is watcher of (PROJ-1, PROJ-2)` Returns users that are watchers on the issues *PROJ-1* or *PROJ-2*.  *  `is voter of (PROJ-1, PROJ-2)` Returns users that are voters on the issues *PROJ-1* or *PROJ-2*.  *  `is commenter of (PROJ-1, PROJ-2)` Returns users that have posted a comment on the issues *PROJ-1* or *PROJ-2*.  *  `is transitioner of (PROJ-1, PROJ-2)` Returns users that have performed a transition on issues *PROJ-1* or *PROJ-2*.  *  `[propertyKey].entity.property.path is \"property value\"` Returns users with the entity property value.  The list of issues can be extended as needed, as in *(PROJ-1, PROJ-2, ... PROJ-n)*. Statements can be combined using the `AND` and `OR` operators to form more complex queries. For example:  `is assignee of PROJ AND [propertyKey].entity.property.path is \"property value\"`

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


$apiInstance = new OpenAPI\Client\Api\UserSearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = 'query_example'; // string | The search query.
$start_at = 0; // int | The index of the first item to return in a page of results (page offset).
$max_results = 100; // int | The maximum number of items to return per page.

try {
    $result = $apiInstance->findUsersByQuery($query, $start_at, $max_results);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserSearchApi->findUsersByQuery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **query** | **string**| The search query. | |
| **start_at** | **int**| The index of the first item to return in a page of results (page offset). | [optional] [default to 0] |
| **max_results** | **int**| The maximum number of items to return per page. | [optional] [default to 100] |

### Return type

[**\OpenAPI\Client\Model\PageBeanUser**](../Model/PageBeanUser.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findUsersForPicker()`

```php
findUsersForPicker($query, $max_results, $show_avatar, $exclude, $exclude_account_ids, $avatar_size, $exclude_connect_users): \OpenAPI\Client\Model\FoundUsers
```

Find users for picker

Returns a list of users whose attributes match the query term. The returned object includes the `html` field where the matched query term is highlighted with the HTML strong tag. A list of account IDs can be provided to exclude users from the results.  This operation takes the users in the range defined by `maxResults`, up to the thousandth user, and then returns only the users from that range that match the query term. This means the operation usually returns fewer users than specified in `maxResults`. To get all the users who match the query term, use [Get all users](#api-rest-api-2-users-search-get) and filter the records in your code.  Privacy controls are applied to the response based on the users' preferences. This could mean, for example, that the user's email address is hidden. See the [Profile visibility overview](https://developer.atlassian.com/cloud/jira/platform/profile-visibility/) for more details.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** *Browse users and groups* [global permission](https://confluence.atlassian.com/x/x4dKLg). Anonymous calls and calls by users without the required permission return search results for an exact name match only.

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


$apiInstance = new OpenAPI\Client\Api\UserSearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = 'query_example'; // string | A query string that is matched against user attributes, such as `displayName`, and `emailAddress`, to find relevant users. The string can match the prefix of the attribute's value. For example, *query=john* matches a user with a `displayName` of *John Smith* and a user with an `emailAddress` of *johnson@example.com*.
$max_results = 50; // int | The maximum number of items to return. The total number of matched users is returned in `total`.
$show_avatar = false; // bool | Include the URI to the user's avatar.
$exclude = array('exclude_example'); // string[] | This parameter is no longer available. See the [deprecation notice](https://developer.atlassian.com/cloud/jira/platform/deprecation-notice-user-privacy-api-migration-guide/) for details.
$exclude_account_ids = array('exclude_account_ids_example'); // string[] | A list of account IDs to exclude from the search results. This parameter accepts a comma-separated list. Multiple account IDs can also be provided using an ampersand-separated list. For example, `excludeAccountIds=5b10a2844c20165700ede21g,5b10a0effa615349cb016cd8&excludeAccountIds=5b10ac8d82e05b22cc7d4ef5`. Cannot be provided with `exclude`.
$avatar_size = 'avatar_size_example'; // string
$exclude_connect_users = false; // bool

try {
    $result = $apiInstance->findUsersForPicker($query, $max_results, $show_avatar, $exclude, $exclude_account_ids, $avatar_size, $exclude_connect_users);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserSearchApi->findUsersForPicker: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **query** | **string**| A query string that is matched against user attributes, such as &#x60;displayName&#x60;, and &#x60;emailAddress&#x60;, to find relevant users. The string can match the prefix of the attribute&#39;s value. For example, *query&#x3D;john* matches a user with a &#x60;displayName&#x60; of *John Smith* and a user with an &#x60;emailAddress&#x60; of *johnson@example.com*. | |
| **max_results** | **int**| The maximum number of items to return. The total number of matched users is returned in &#x60;total&#x60;. | [optional] [default to 50] |
| **show_avatar** | **bool**| Include the URI to the user&#39;s avatar. | [optional] [default to false] |
| **exclude** | [**string[]**](../Model/string.md)| This parameter is no longer available. See the [deprecation notice](https://developer.atlassian.com/cloud/jira/platform/deprecation-notice-user-privacy-api-migration-guide/) for details. | [optional] |
| **exclude_account_ids** | [**string[]**](../Model/string.md)| A list of account IDs to exclude from the search results. This parameter accepts a comma-separated list. Multiple account IDs can also be provided using an ampersand-separated list. For example, &#x60;excludeAccountIds&#x3D;5b10a2844c20165700ede21g,5b10a0effa615349cb016cd8&amp;excludeAccountIds&#x3D;5b10ac8d82e05b22cc7d4ef5&#x60;. Cannot be provided with &#x60;exclude&#x60;. | [optional] |
| **avatar_size** | **string**|  | [optional] |
| **exclude_connect_users** | **bool**|  | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\FoundUsers**](../Model/FoundUsers.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findUsersWithAllPermissions()`

```php
findUsersWithAllPermissions($permissions, $query, $username, $account_id, $issue_key, $project_key, $start_at, $max_results): \OpenAPI\Client\Model\User[]
```

Find users with permissions

Returns a list of users who fulfill these criteria:   *  their user attributes match a search string.  *  they have a set of permissions for a project or issue.  If no search string is provided, a list of all users with the permissions is returned.  This operation takes the users in the range defined by `startAt` and `maxResults`, up to the thousandth user, and then returns only the users from that range that match the search string and have permission for the project or issue. This means the operation usually returns fewer users than specified in `maxResults`. To get all the users who match the search string and have permission for the project or issue, use [Get all users](#api-rest-api-2-users-search-get) and filter the records in your code.  Privacy controls are applied to the response based on the users' preferences. This could mean, for example, that the user's email address is hidden. See the [Profile visibility overview](https://developer.atlassian.com/cloud/jira/platform/profile-visibility/) for more details.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:**   *  *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg), to get users for any project.  *  *Administer Projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for a project, to get users for that project.

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


$apiInstance = new OpenAPI\Client\Api\UserSearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$permissions = 'permissions_example'; // string | A comma separated list of permissions. Permissions can be specified as any:   *  permission returned by [Get all permissions](#api-rest-api-2-permissions-get).  *  custom project permission added by Connect apps.  *  (deprecated) one of the following:           *  ASSIGNABLE\\_USER      *  ASSIGN\\_ISSUE      *  ATTACHMENT\\_DELETE\\_ALL      *  ATTACHMENT\\_DELETE\\_OWN      *  BROWSE      *  CLOSE\\_ISSUE      *  COMMENT\\_DELETE\\_ALL      *  COMMENT\\_DELETE\\_OWN      *  COMMENT\\_EDIT\\_ALL      *  COMMENT\\_EDIT\\_OWN      *  COMMENT\\_ISSUE      *  CREATE\\_ATTACHMENT      *  CREATE\\_ISSUE      *  DELETE\\_ISSUE      *  EDIT\\_ISSUE      *  LINK\\_ISSUE      *  MANAGE\\_WATCHER\\_LIST      *  MODIFY\\_REPORTER      *  MOVE\\_ISSUE      *  PROJECT\\_ADMIN      *  RESOLVE\\_ISSUE      *  SCHEDULE\\_ISSUE      *  SET\\_ISSUE\\_SECURITY      *  TRANSITION\\_ISSUE      *  VIEW\\_VERSION\\_CONTROL      *  VIEW\\_VOTERS\\_AND\\_WATCHERS      *  VIEW\\_WORKFLOW\\_READONLY      *  WORKLOG\\_DELETE\\_ALL      *  WORKLOG\\_DELETE\\_OWN      *  WORKLOG\\_EDIT\\_ALL      *  WORKLOG\\_EDIT\\_OWN      *  WORK\\_ISSUE
$query = query; // string | A query string that is matched against user attributes, such as `displayName` and `emailAddress`, to find relevant users. The string can match the prefix of the attribute's value. For example, *query=john* matches a user with a `displayName` of *John Smith* and a user with an `emailAddress` of *johnson@example.com*. Required, unless `accountId` is specified.
$username = 'username_example'; // string | This parameter is no longer available. See the [deprecation notice](https://developer.atlassian.com/cloud/jira/platform/deprecation-notice-user-privacy-api-migration-guide/) for details.
$account_id = 'account_id_example'; // string | A query string that is matched exactly against user `accountId`. Required, unless `query` is specified.
$issue_key = 'issue_key_example'; // string | The issue key for the issue.
$project_key = 'project_key_example'; // string | The project key for the project (case sensitive).
$start_at = 0; // int | The index of the first item to return in a page of results (page offset).
$max_results = 50; // int | The maximum number of items to return per page.

try {
    $result = $apiInstance->findUsersWithAllPermissions($permissions, $query, $username, $account_id, $issue_key, $project_key, $start_at, $max_results);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserSearchApi->findUsersWithAllPermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **permissions** | **string**| A comma separated list of permissions. Permissions can be specified as any:   *  permission returned by [Get all permissions](#api-rest-api-2-permissions-get).  *  custom project permission added by Connect apps.  *  (deprecated) one of the following:           *  ASSIGNABLE\\_USER      *  ASSIGN\\_ISSUE      *  ATTACHMENT\\_DELETE\\_ALL      *  ATTACHMENT\\_DELETE\\_OWN      *  BROWSE      *  CLOSE\\_ISSUE      *  COMMENT\\_DELETE\\_ALL      *  COMMENT\\_DELETE\\_OWN      *  COMMENT\\_EDIT\\_ALL      *  COMMENT\\_EDIT\\_OWN      *  COMMENT\\_ISSUE      *  CREATE\\_ATTACHMENT      *  CREATE\\_ISSUE      *  DELETE\\_ISSUE      *  EDIT\\_ISSUE      *  LINK\\_ISSUE      *  MANAGE\\_WATCHER\\_LIST      *  MODIFY\\_REPORTER      *  MOVE\\_ISSUE      *  PROJECT\\_ADMIN      *  RESOLVE\\_ISSUE      *  SCHEDULE\\_ISSUE      *  SET\\_ISSUE\\_SECURITY      *  TRANSITION\\_ISSUE      *  VIEW\\_VERSION\\_CONTROL      *  VIEW\\_VOTERS\\_AND\\_WATCHERS      *  VIEW\\_WORKFLOW\\_READONLY      *  WORKLOG\\_DELETE\\_ALL      *  WORKLOG\\_DELETE\\_OWN      *  WORKLOG\\_EDIT\\_ALL      *  WORKLOG\\_EDIT\\_OWN      *  WORK\\_ISSUE | |
| **query** | **string**| A query string that is matched against user attributes, such as &#x60;displayName&#x60; and &#x60;emailAddress&#x60;, to find relevant users. The string can match the prefix of the attribute&#39;s value. For example, *query&#x3D;john* matches a user with a &#x60;displayName&#x60; of *John Smith* and a user with an &#x60;emailAddress&#x60; of *johnson@example.com*. Required, unless &#x60;accountId&#x60; is specified. | [optional] |
| **username** | **string**| This parameter is no longer available. See the [deprecation notice](https://developer.atlassian.com/cloud/jira/platform/deprecation-notice-user-privacy-api-migration-guide/) for details. | [optional] |
| **account_id** | **string**| A query string that is matched exactly against user &#x60;accountId&#x60;. Required, unless &#x60;query&#x60; is specified. | [optional] |
| **issue_key** | **string**| The issue key for the issue. | [optional] |
| **project_key** | **string**| The project key for the project (case sensitive). | [optional] |
| **start_at** | **int**| The index of the first item to return in a page of results (page offset). | [optional] [default to 0] |
| **max_results** | **int**| The maximum number of items to return per page. | [optional] [default to 50] |

### Return type

[**\OpenAPI\Client\Model\User[]**](../Model/User.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findUsersWithBrowsePermission()`

```php
findUsersWithBrowsePermission($query, $username, $account_id, $issue_key, $project_key, $start_at, $max_results): \OpenAPI\Client\Model\User[]
```

Find users with browse permission

Returns a list of users who fulfill these criteria:   *  their user attributes match a search string.  *  they have permission to browse issues.  Use this resource to find users who can browse:   *  an issue, by providing the `issueKey`.  *  any issue in a project, by providing the `projectKey`.  This operation takes the users in the range defined by `startAt` and `maxResults`, up to the thousandth user, and then returns only the users from that range that match the search string and have permission to browse issues. This means the operation usually returns fewer users than specified in `maxResults`. To get all the users who match the search string and have permission to browse issues, use [Get all users](#api-rest-api-2-users-search-get) and filter the records in your code.  Privacy controls are applied to the response based on the users' preferences. This could mean, for example, that the user's email address is hidden. See the [Profile visibility overview](https://developer.atlassian.com/cloud/jira/platform/profile-visibility/) for more details.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** *Browse users and groups* [global permission](https://confluence.atlassian.com/x/x4dKLg). Anonymous calls and calls by users without the required permission return empty search results.

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


$apiInstance = new OpenAPI\Client\Api\UserSearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = query; // string | A query string that is matched against user attributes, such as `displayName` and `emailAddress`, to find relevant users. The string can match the prefix of the attribute's value. For example, *query=john* matches a user with a `displayName` of *John Smith* and a user with an `emailAddress` of *johnson@example.com*. Required, unless `accountId` is specified.
$username = 'username_example'; // string | This parameter is no longer available. See the [deprecation notice](https://developer.atlassian.com/cloud/jira/platform/deprecation-notice-user-privacy-api-migration-guide/) for details.
$account_id = 'account_id_example'; // string | A query string that is matched exactly against user `accountId`. Required, unless `query` is specified.
$issue_key = 'issue_key_example'; // string | The issue key for the issue. Required, unless `projectKey` is specified.
$project_key = 'project_key_example'; // string | The project key for the project (case sensitive). Required, unless `issueKey` is specified.
$start_at = 0; // int | The index of the first item to return in a page of results (page offset).
$max_results = 50; // int | The maximum number of items to return per page.

try {
    $result = $apiInstance->findUsersWithBrowsePermission($query, $username, $account_id, $issue_key, $project_key, $start_at, $max_results);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserSearchApi->findUsersWithBrowsePermission: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **query** | **string**| A query string that is matched against user attributes, such as &#x60;displayName&#x60; and &#x60;emailAddress&#x60;, to find relevant users. The string can match the prefix of the attribute&#39;s value. For example, *query&#x3D;john* matches a user with a &#x60;displayName&#x60; of *John Smith* and a user with an &#x60;emailAddress&#x60; of *johnson@example.com*. Required, unless &#x60;accountId&#x60; is specified. | [optional] |
| **username** | **string**| This parameter is no longer available. See the [deprecation notice](https://developer.atlassian.com/cloud/jira/platform/deprecation-notice-user-privacy-api-migration-guide/) for details. | [optional] |
| **account_id** | **string**| A query string that is matched exactly against user &#x60;accountId&#x60;. Required, unless &#x60;query&#x60; is specified. | [optional] |
| **issue_key** | **string**| The issue key for the issue. Required, unless &#x60;projectKey&#x60; is specified. | [optional] |
| **project_key** | **string**| The project key for the project (case sensitive). Required, unless &#x60;issueKey&#x60; is specified. | [optional] |
| **start_at** | **int**| The index of the first item to return in a page of results (page offset). | [optional] [default to 0] |
| **max_results** | **int**| The maximum number of items to return per page. | [optional] [default to 50] |

### Return type

[**\OpenAPI\Client\Model\User[]**](../Model/User.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
