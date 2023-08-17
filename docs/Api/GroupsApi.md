# OpenAPI\Client\GroupsApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addUserToGroup()**](GroupsApi.md#addUserToGroup) | **POST** /rest/api/2/group/user | Add user to group |
| [**bulkGetGroups()**](GroupsApi.md#bulkGetGroups) | **GET** /rest/api/2/group/bulk | Bulk get groups |
| [**createGroup()**](GroupsApi.md#createGroup) | **POST** /rest/api/2/group | Create group |
| [**findGroups()**](GroupsApi.md#findGroups) | **GET** /rest/api/2/groups/picker | Find groups |
| [**getGroup()**](GroupsApi.md#getGroup) | **GET** /rest/api/2/group | Get group |
| [**getUsersFromGroup()**](GroupsApi.md#getUsersFromGroup) | **GET** /rest/api/2/group/member | Get users from group |
| [**removeGroup()**](GroupsApi.md#removeGroup) | **DELETE** /rest/api/2/group | Remove group |
| [**removeUserFromGroup()**](GroupsApi.md#removeUserFromGroup) | **DELETE** /rest/api/2/group/user | Remove user from group |


## `addUserToGroup()`

```php
addUserToGroup($request_body, $groupname, $group_id): \OpenAPI\Client\Model\Group
```

Add user to group

Adds a user to a group.  **[Permissions](#permissions) required:** Site administration (that is, member of the *site-admin* [group](https://confluence.atlassian.com/x/24xjL)).

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


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_body = {"accountId":"5b10ac8d82e05b22cc7d4ef5"}; // array<string,mixed> | The user to add to the group.
$groupname = 'groupname_example'; // string | As a group's name can change, use of `groupId` is recommended to identify a group.   The name of the group. This parameter cannot be used with the `groupId` parameter.
$group_id = 'group_id_example'; // string | The ID of the group. This parameter cannot be used with the `groupName` parameter.

try {
    $result = $apiInstance->addUserToGroup($request_body, $groupname, $group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->addUserToGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_body** | [**array<string,mixed>**](../Model/mixed.md)| The user to add to the group. | |
| **groupname** | **string**| As a group&#39;s name can change, use of &#x60;groupId&#x60; is recommended to identify a group.   The name of the group. This parameter cannot be used with the &#x60;groupId&#x60; parameter. | [optional] |
| **group_id** | **string**| The ID of the group. This parameter cannot be used with the &#x60;groupName&#x60; parameter. | [optional] |

### Return type

[**\OpenAPI\Client\Model\Group**](../Model/Group.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkGetGroups()`

```php
bulkGetGroups($start_at, $max_results, $group_id, $group_name, $access_type, $application_key): \OpenAPI\Client\Model\PageBeanGroupDetails
```

Bulk get groups

Returns a [paginated](#pagination) list of groups.  **[Permissions](#permissions) required:** *Browse users and groups* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_at = 0; // int | The index of the first item to return in a page of results (page offset).
$max_results = 50; // int | The maximum number of items to return per page.
$group_id = 3571b9a7-348f-414a-9087-8e1ea03a7df8; // string[] | The ID of a group. To specify multiple IDs, pass multiple `groupId` parameters. For example, `groupId=5b10a2844c20165700ede21g&groupId=5b10ac8d82e05b22cc7d4ef5`.
$group_name = array('group_name_example'); // string[] | The name of a group. To specify multiple names, pass multiple `groupName` parameters. For example, `groupName=administrators&groupName=jira-software-users`.
$access_type = 'access_type_example'; // string | The access level of a group. Valid values: 'site-admin', 'admin', 'user'.
$application_key = 'application_key_example'; // string | The application key of the product user groups to search for. Valid values: 'jira-servicedesk', 'jira-software', 'jira-product-discovery', 'jira-core'.

try {
    $result = $apiInstance->bulkGetGroups($start_at, $max_results, $group_id, $group_name, $access_type, $application_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->bulkGetGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_at** | **int**| The index of the first item to return in a page of results (page offset). | [optional] [default to 0] |
| **max_results** | **int**| The maximum number of items to return per page. | [optional] [default to 50] |
| **group_id** | [**string[]**](../Model/string.md)| The ID of a group. To specify multiple IDs, pass multiple &#x60;groupId&#x60; parameters. For example, &#x60;groupId&#x3D;5b10a2844c20165700ede21g&amp;groupId&#x3D;5b10ac8d82e05b22cc7d4ef5&#x60;. | [optional] |
| **group_name** | [**string[]**](../Model/string.md)| The name of a group. To specify multiple names, pass multiple &#x60;groupName&#x60; parameters. For example, &#x60;groupName&#x3D;administrators&amp;groupName&#x3D;jira-software-users&#x60;. | [optional] |
| **access_type** | **string**| The access level of a group. Valid values: &#39;site-admin&#39;, &#39;admin&#39;, &#39;user&#39;. | [optional] |
| **application_key** | **string**| The application key of the product user groups to search for. Valid values: &#39;jira-servicedesk&#39;, &#39;jira-software&#39;, &#39;jira-product-discovery&#39;, &#39;jira-core&#39;. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PageBeanGroupDetails**](../Model/PageBeanGroupDetails.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createGroup()`

```php
createGroup($request_body): \OpenAPI\Client\Model\Group
```

Create group

Creates a group.  **[Permissions](#permissions) required:** Site administration (that is, member of the *site-admin* [group](https://confluence.atlassian.com/x/24xjL)).

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


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_body = {"name":"power-users"}; // array<string,mixed> | The name of the group.

try {
    $result = $apiInstance->createGroup($request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->createGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_body** | [**array<string,mixed>**](../Model/mixed.md)| The name of the group. | |

### Return type

[**\OpenAPI\Client\Model\Group**](../Model/Group.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findGroups()`

```php
findGroups($account_id, $query, $exclude, $exclude_id, $max_results, $case_insensitive, $user_name): \OpenAPI\Client\Model\FoundGroups
```

Find groups

Returns a list of groups whose names contain a query string. A list of group names can be provided to exclude groups from the results.  The primary use case for this resource is to populate a group picker suggestions list. To this end, the returned object includes the `html` field where the matched query term is highlighted in the group name with the HTML strong tag. Also, the groups list is wrapped in a response object that contains a header for use in the picker, specifically *Showing X of Y matching groups*.  The list returns with the groups sorted. If no groups match the list criteria, an empty list is returned.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg). Anonymous calls and calls by users without the required permission return an empty list.  *Browse users and groups* [global permission](https://confluence.atlassian.com/x/x4dKLg). Without this permission, calls where query is not an exact match to an existing group will return an empty list.

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


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | This parameter is deprecated, setting it does not affect the results. To find groups containing a particular user, use [Get user groups](#api-rest-api-2-user-groups-get).
$query = query; // string | The string to find in group names.
$exclude = array('exclude_example'); // string[] | As a group's name can change, use of `excludeGroupIds` is recommended to identify a group.   A group to exclude from the result. To exclude multiple groups, provide an ampersand-separated list. For example, `exclude=group1&exclude=group2`. This parameter cannot be used with the `excludeGroupIds` parameter.
$exclude_id = array('exclude_id_example'); // string[] | A group ID to exclude from the result. To exclude multiple groups, provide an ampersand-separated list. For example, `excludeId=group1-id&excludeId=group2-id`. This parameter cannot be used with the `excludeGroups` parameter.
$max_results = 56; // int | The maximum number of groups to return. The maximum number of groups that can be returned is limited by the system property `jira.ajax.autocomplete.limit`.
$case_insensitive = false; // bool | Whether the search for groups should be case insensitive.
$user_name = 'user_name_example'; // string | This parameter is no longer available. See the [deprecation notice](https://developer.atlassian.com/cloud/jira/platform/deprecation-notice-user-privacy-api-migration-guide/) for details.

try {
    $result = $apiInstance->findGroups($account_id, $query, $exclude, $exclude_id, $max_results, $case_insensitive, $user_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->findGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| This parameter is deprecated, setting it does not affect the results. To find groups containing a particular user, use [Get user groups](#api-rest-api-2-user-groups-get). | [optional] |
| **query** | **string**| The string to find in group names. | [optional] |
| **exclude** | [**string[]**](../Model/string.md)| As a group&#39;s name can change, use of &#x60;excludeGroupIds&#x60; is recommended to identify a group.   A group to exclude from the result. To exclude multiple groups, provide an ampersand-separated list. For example, &#x60;exclude&#x3D;group1&amp;exclude&#x3D;group2&#x60;. This parameter cannot be used with the &#x60;excludeGroupIds&#x60; parameter. | [optional] |
| **exclude_id** | [**string[]**](../Model/string.md)| A group ID to exclude from the result. To exclude multiple groups, provide an ampersand-separated list. For example, &#x60;excludeId&#x3D;group1-id&amp;excludeId&#x3D;group2-id&#x60;. This parameter cannot be used with the &#x60;excludeGroups&#x60; parameter. | [optional] |
| **max_results** | **int**| The maximum number of groups to return. The maximum number of groups that can be returned is limited by the system property &#x60;jira.ajax.autocomplete.limit&#x60;. | [optional] |
| **case_insensitive** | **bool**| Whether the search for groups should be case insensitive. | [optional] [default to false] |
| **user_name** | **string**| This parameter is no longer available. See the [deprecation notice](https://developer.atlassian.com/cloud/jira/platform/deprecation-notice-user-privacy-api-migration-guide/) for details. | [optional] |

### Return type

[**\OpenAPI\Client\Model\FoundGroups**](../Model/FoundGroups.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroup()`

```php
getGroup($groupname, $group_id, $expand): \OpenAPI\Client\Model\Group
```

Get group

This operation is deprecated, use [`group/member`](#api-rest-api-2-group-member-get).  Returns all users in a group.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupname = 'groupname_example'; // string | As a group's name can change, use of `groupId` is recommended to identify a group.   The name of the group. This parameter cannot be used with the `groupId` parameter.
$group_id = 'group_id_example'; // string | The ID of the group. This parameter cannot be used with the `groupName` parameter.
$expand = 'expand_example'; // string | List of fields to expand.

try {
    $result = $apiInstance->getGroup($groupname, $group_id, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **groupname** | **string**| As a group&#39;s name can change, use of &#x60;groupId&#x60; is recommended to identify a group.   The name of the group. This parameter cannot be used with the &#x60;groupId&#x60; parameter. | [optional] |
| **group_id** | **string**| The ID of the group. This parameter cannot be used with the &#x60;groupName&#x60; parameter. | [optional] |
| **expand** | **string**| List of fields to expand. | [optional] |

### Return type

[**\OpenAPI\Client\Model\Group**](../Model/Group.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUsersFromGroup()`

```php
getUsersFromGroup($groupname, $group_id, $include_inactive_users, $start_at, $max_results): \OpenAPI\Client\Model\PageBeanUserDetails
```

Get users from group

Returns a [paginated](#pagination) list of all users in a group.  Note that users are ordered by username, however the username is not returned in the results due to privacy reasons.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupname = 'groupname_example'; // string | As a group's name can change, use of `groupId` is recommended to identify a group.   The name of the group. This parameter cannot be used with the `groupId` parameter.
$group_id = 'group_id_example'; // string | The ID of the group. This parameter cannot be used with the `groupName` parameter.
$include_inactive_users = false; // bool | Include inactive users.
$start_at = 0; // int | The index of the first item to return in a page of results (page offset).
$max_results = 50; // int | The maximum number of items to return per page.

try {
    $result = $apiInstance->getUsersFromGroup($groupname, $group_id, $include_inactive_users, $start_at, $max_results);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getUsersFromGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **groupname** | **string**| As a group&#39;s name can change, use of &#x60;groupId&#x60; is recommended to identify a group.   The name of the group. This parameter cannot be used with the &#x60;groupId&#x60; parameter. | [optional] |
| **group_id** | **string**| The ID of the group. This parameter cannot be used with the &#x60;groupName&#x60; parameter. | [optional] |
| **include_inactive_users** | **bool**| Include inactive users. | [optional] [default to false] |
| **start_at** | **int**| The index of the first item to return in a page of results (page offset). | [optional] [default to 0] |
| **max_results** | **int**| The maximum number of items to return per page. | [optional] [default to 50] |

### Return type

[**\OpenAPI\Client\Model\PageBeanUserDetails**](../Model/PageBeanUserDetails.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeGroup()`

```php
removeGroup($groupname, $group_id, $swap_group, $swap_group_id)
```

Remove group

Deletes a group.  **[Permissions](#permissions) required:** Site administration (that is, member of the *site-admin* strategic [group](https://confluence.atlassian.com/x/24xjL)).

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


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupname = 'groupname_example'; // string
$group_id = 'group_id_example'; // string | The ID of the group. This parameter cannot be used with the `groupname` parameter.
$swap_group = 'swap_group_example'; // string | As a group's name can change, use of `swapGroupId` is recommended to identify a group.   The group to transfer restrictions to. Only comments and worklogs are transferred. If restrictions are not transferred, comments and worklogs are inaccessible after the deletion. This parameter cannot be used with the `swapGroupId` parameter.
$swap_group_id = 'swap_group_id_example'; // string | The ID of the group to transfer restrictions to. Only comments and worklogs are transferred. If restrictions are not transferred, comments and worklogs are inaccessible after the deletion. This parameter cannot be used with the `swapGroup` parameter.

try {
    $apiInstance->removeGroup($groupname, $group_id, $swap_group, $swap_group_id);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->removeGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **groupname** | **string**|  | [optional] |
| **group_id** | **string**| The ID of the group. This parameter cannot be used with the &#x60;groupname&#x60; parameter. | [optional] |
| **swap_group** | **string**| As a group&#39;s name can change, use of &#x60;swapGroupId&#x60; is recommended to identify a group.   The group to transfer restrictions to. Only comments and worklogs are transferred. If restrictions are not transferred, comments and worklogs are inaccessible after the deletion. This parameter cannot be used with the &#x60;swapGroupId&#x60; parameter. | [optional] |
| **swap_group_id** | **string**| The ID of the group to transfer restrictions to. Only comments and worklogs are transferred. If restrictions are not transferred, comments and worklogs are inaccessible after the deletion. This parameter cannot be used with the &#x60;swapGroup&#x60; parameter. | [optional] |

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

## `removeUserFromGroup()`

```php
removeUserFromGroup($account_id, $groupname, $group_id, $username)
```

Remove user from group

Removes a user from a group.  **[Permissions](#permissions) required:** Site administration (that is, member of the *site-admin* [group](https://confluence.atlassian.com/x/24xjL)).

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


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 5b10ac8d82e05b22cc7d4ef5; // string | The account ID of the user, which uniquely identifies the user across all Atlassian products. For example, *5b10ac8d82e05b22cc7d4ef5*.
$groupname = 'groupname_example'; // string | As a group's name can change, use of `groupId` is recommended to identify a group.   The name of the group. This parameter cannot be used with the `groupId` parameter.
$group_id = 'group_id_example'; // string | The ID of the group. This parameter cannot be used with the `groupName` parameter.
$username = 'username_example'; // string | This parameter is no longer available. See the [deprecation notice](https://developer.atlassian.com/cloud/jira/platform/deprecation-notice-user-privacy-api-migration-guide/) for details.

try {
    $apiInstance->removeUserFromGroup($account_id, $groupname, $group_id, $username);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->removeUserFromGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The account ID of the user, which uniquely identifies the user across all Atlassian products. For example, *5b10ac8d82e05b22cc7d4ef5*. | |
| **groupname** | **string**| As a group&#39;s name can change, use of &#x60;groupId&#x60; is recommended to identify a group.   The name of the group. This parameter cannot be used with the &#x60;groupId&#x60; parameter. | [optional] |
| **group_id** | **string**| The ID of the group. This parameter cannot be used with the &#x60;groupName&#x60; parameter. | [optional] |
| **username** | **string**| This parameter is no longer available. See the [deprecation notice](https://developer.atlassian.com/cloud/jira/platform/deprecation-notice-user-privacy-api-migration-guide/) for details. | [optional] |

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
