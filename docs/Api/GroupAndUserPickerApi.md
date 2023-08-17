# OpenAPI\Client\GroupAndUserPickerApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**findUsersAndGroups()**](GroupAndUserPickerApi.md#findUsersAndGroups) | **GET** /rest/api/2/groupuserpicker | Find users and groups |


## `findUsersAndGroups()`

```php
findUsersAndGroups($query, $max_results, $show_avatar, $field_id, $project_id, $issue_type_id, $avatar_size, $case_insensitive, $exclude_connect_addons): \OpenAPI\Client\Model\FoundUsersAndGroups
```

Find users and groups

Returns a list of users and groups matching a string. The string is used:   *  for users, to find a case-insensitive match with display name and e-mail address. Note that if a user has hidden their email address in their user profile, partial matches of the email address will not find the user. An exact match is required.  *  for groups, to find a case-sensitive match with group name.  For example, if the string *tin* is used, records with the display name *Tina*, email address *sarah@tinplatetraining.com*, and the group *accounting* would be returned.  Optionally, the search can be refined to:   *  the projects and issue types associated with a custom field, such as a user picker. The search can then be further refined to return only users and groups that have permission to view specific:           *  projects.      *  issue types.          If multiple projects or issue types are specified, they must be a subset of those enabled for the custom field or no results are returned. For example, if a field is enabled for projects A, B, and C then the search could be limited to projects B and C. However, if the search is limited to projects B and D, nothing is returned.  *  not return Connect app users and groups.  *  return groups that have a case-insensitive match with the query.  The primary use case for this resource is to populate a picker field suggestion list with users or groups. To this end, the returned object includes an `html` field for each list. This field highlights the matched query term in the item name with the HTML strong tag. Also, each list is wrapped in a response object that contains a header for use in a picker, specifically *Showing X of Y matching groups*.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** *Browse users and groups* [global permission](https://confluence.atlassian.com/x/yodKLg).

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


$apiInstance = new OpenAPI\Client\Api\GroupAndUserPickerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = 'query_example'; // string | The search string.
$max_results = 50; // int | The maximum number of items to return in each list.
$show_avatar = false; // bool | Whether the user avatar should be returned. If an invalid value is provided, the default value is used.
$field_id = 'field_id_example'; // string | The custom field ID of the field this request is for.
$project_id = array('project_id_example'); // string[] | The ID of a project that returned users and groups must have permission to view. To include multiple projects, provide an ampersand-separated list. For example, `projectId=10000&projectId=10001`. This parameter is only used when `fieldId` is present.
$issue_type_id = array('issue_type_id_example'); // string[] | The ID of an issue type that returned users and groups must have permission to view. To include multiple issue types, provide an ampersand-separated list. For example, `issueTypeId=10000&issueTypeId=10001`. Special values, such as `-1` (all standard issue types) and `-2` (all subtask issue types), are supported. This parameter is only used when `fieldId` is present.
$avatar_size = 'xsmall'; // string | The size of the avatar to return. If an invalid value is provided, the default value is used.
$case_insensitive = false; // bool | Whether the search for groups should be case insensitive.
$exclude_connect_addons = false; // bool | Whether Connect app users and groups should be excluded from the search results. If an invalid value is provided, the default value is used.

try {
    $result = $apiInstance->findUsersAndGroups($query, $max_results, $show_avatar, $field_id, $project_id, $issue_type_id, $avatar_size, $case_insensitive, $exclude_connect_addons);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupAndUserPickerApi->findUsersAndGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **query** | **string**| The search string. | |
| **max_results** | **int**| The maximum number of items to return in each list. | [optional] [default to 50] |
| **show_avatar** | **bool**| Whether the user avatar should be returned. If an invalid value is provided, the default value is used. | [optional] [default to false] |
| **field_id** | **string**| The custom field ID of the field this request is for. | [optional] |
| **project_id** | [**string[]**](../Model/string.md)| The ID of a project that returned users and groups must have permission to view. To include multiple projects, provide an ampersand-separated list. For example, &#x60;projectId&#x3D;10000&amp;projectId&#x3D;10001&#x60;. This parameter is only used when &#x60;fieldId&#x60; is present. | [optional] |
| **issue_type_id** | [**string[]**](../Model/string.md)| The ID of an issue type that returned users and groups must have permission to view. To include multiple issue types, provide an ampersand-separated list. For example, &#x60;issueTypeId&#x3D;10000&amp;issueTypeId&#x3D;10001&#x60;. Special values, such as &#x60;-1&#x60; (all standard issue types) and &#x60;-2&#x60; (all subtask issue types), are supported. This parameter is only used when &#x60;fieldId&#x60; is present. | [optional] |
| **avatar_size** | **string**| The size of the avatar to return. If an invalid value is provided, the default value is used. | [optional] [default to &#39;xsmall&#39;] |
| **case_insensitive** | **bool**| Whether the search for groups should be case insensitive. | [optional] [default to false] |
| **exclude_connect_addons** | **bool**| Whether Connect app users and groups should be excluded from the search results. If an invalid value is provided, the default value is used. | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\FoundUsersAndGroups**](../Model/FoundUsersAndGroups.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
