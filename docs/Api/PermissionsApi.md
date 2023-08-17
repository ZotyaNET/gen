# OpenAPI\Client\PermissionsApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAllPermissions()**](PermissionsApi.md#getAllPermissions) | **GET** /rest/api/2/permissions | Get all permissions |
| [**getBulkPermissions()**](PermissionsApi.md#getBulkPermissions) | **POST** /rest/api/2/permissions/check | Get bulk permissions |
| [**getMyPermissions()**](PermissionsApi.md#getMyPermissions) | **GET** /rest/api/2/mypermissions | Get my permissions |
| [**getPermittedProjects()**](PermissionsApi.md#getPermittedProjects) | **POST** /rest/api/2/permissions/project | Get permitted projects |


## `getAllPermissions()`

```php
getAllPermissions(): \OpenAPI\Client\Model\Permissions
```

Get all permissions

Returns all permissions, including:   *  global permissions.  *  project permissions.  *  global permissions added by plugins.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\PermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllPermissions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionsApi->getAllPermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Permissions**](../Model/Permissions.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBulkPermissions()`

```php
getBulkPermissions($bulk_permissions_request_bean): \OpenAPI\Client\Model\BulkPermissionGrants
```

Get bulk permissions

Returns:   *  for a list of global permissions, the global permissions granted to a user.  *  for a list of project permissions and lists of projects and issues, for each project permission a list of the projects and issues a user can access or manipulate.  If no account ID is provided, the operation returns details for the logged in user.  Note that:   *  Invalid project and issue IDs are ignored.  *  A maximum of 1000 projects and 1000 issues can be checked.  *  Null values in `globalPermissions`, `projectPermissions`, `projectPermissions.projects`, and `projectPermissions.issues` are ignored.  *  Empty strings in `projectPermissions.permissions` are ignored.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg) to check the permissions for other users, otherwise none. However, Connect apps can make a call from the app server to the product to obtain permission details for any user, without admin permission. This Connect app ability doesn't apply to calls made using AP.request() in a browser.

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


$apiInstance = new OpenAPI\Client\Api\PermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bulk_permissions_request_bean = {"accountId":"5b10a2844c20165700ede21g","globalPermissions":["ADMINISTER"],"projectPermissions":[{"issues":[10010,10011,10012,10013,10014],"permissions":["EDIT_ISSUES"],"projects":[10001]}]}; // \OpenAPI\Client\Model\BulkPermissionsRequestBean | Details of the permissions to check.

try {
    $result = $apiInstance->getBulkPermissions($bulk_permissions_request_bean);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionsApi->getBulkPermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bulk_permissions_request_bean** | [**\OpenAPI\Client\Model\BulkPermissionsRequestBean**](../Model/BulkPermissionsRequestBean.md)| Details of the permissions to check. | |

### Return type

[**\OpenAPI\Client\Model\BulkPermissionGrants**](../Model/BulkPermissionGrants.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMyPermissions()`

```php
getMyPermissions($project_key, $project_id, $issue_key, $issue_id, $permissions, $project_uuid, $project_configuration_uuid, $comment_id): \OpenAPI\Client\Model\Permissions
```

Get my permissions

Returns a list of permissions indicating which permissions the user has. Details of the user's permissions can be obtained in a global, project, issue or comment context.  The user is reported as having a project permission:   *  in the global context, if the user has the project permission in any project.  *  for a project, where the project permission is determined using issue data, if the user meets the permission's criteria for any issue in the project. Otherwise, if the user has the project permission in the project.  *  for an issue, where a project permission is determined using issue data, if the user has the permission in the issue. Otherwise, if the user has the project permission in the project containing the issue.  *  for a comment, where the user has both the permission to browse the comment and the project permission for the comment's parent issue. Only the BROWSE\\_PROJECTS permission is supported. If a `commentId` is provided whose `permissions` does not equal BROWSE\\_PROJECTS, a 400 error will be returned.  This means that users may be shown as having an issue permission (such as EDIT\\_ISSUES) in the global context or a project context but may not have the permission for any or all issues. For example, if Reporters have the EDIT\\_ISSUES permission a user would be shown as having this permission in the global context or the context of a project, because any user can be a reporter. However, if they are not the user who reported the issue queried they would not have EDIT\\_ISSUES permission for that issue.  Global permissions are unaffected by context.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** None.

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


$apiInstance = new OpenAPI\Client\Api\PermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_key = 'project_key_example'; // string | The key of project. Ignored if `projectId` is provided.
$project_id = 'project_id_example'; // string | The ID of project.
$issue_key = 'issue_key_example'; // string | The key of the issue. Ignored if `issueId` is provided.
$issue_id = 'issue_id_example'; // string | The ID of the issue.
$permissions = BROWSE_PROJECTS,EDIT_ISSUES; // string | A list of permission keys. (Required) This parameter accepts a comma-separated list. To get the list of available permissions, use [Get all permissions](#api-rest-api-2-permissions-get).
$project_uuid = 'project_uuid_example'; // string
$project_configuration_uuid = 'project_configuration_uuid_example'; // string
$comment_id = 'comment_id_example'; // string | The ID of the comment.

try {
    $result = $apiInstance->getMyPermissions($project_key, $project_id, $issue_key, $issue_id, $permissions, $project_uuid, $project_configuration_uuid, $comment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionsApi->getMyPermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_key** | **string**| The key of project. Ignored if &#x60;projectId&#x60; is provided. | [optional] |
| **project_id** | **string**| The ID of project. | [optional] |
| **issue_key** | **string**| The key of the issue. Ignored if &#x60;issueId&#x60; is provided. | [optional] |
| **issue_id** | **string**| The ID of the issue. | [optional] |
| **permissions** | **string**| A list of permission keys. (Required) This parameter accepts a comma-separated list. To get the list of available permissions, use [Get all permissions](#api-rest-api-2-permissions-get). | [optional] |
| **project_uuid** | **string**|  | [optional] |
| **project_configuration_uuid** | **string**|  | [optional] |
| **comment_id** | **string**| The ID of the comment. | [optional] |

### Return type

[**\OpenAPI\Client\Model\Permissions**](../Model/Permissions.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPermittedProjects()`

```php
getPermittedProjects($permissions_keys_bean): \OpenAPI\Client\Model\PermittedProjects
```

Get permitted projects

Returns all the projects where the user is granted a list of project permissions.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** None.

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


$apiInstance = new OpenAPI\Client\Api\PermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$permissions_keys_bean = new \OpenAPI\Client\Model\PermissionsKeysBean(); // \OpenAPI\Client\Model\PermissionsKeysBean

try {
    $result = $apiInstance->getPermittedProjects($permissions_keys_bean);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionsApi->getPermittedProjects: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **permissions_keys_bean** | [**\OpenAPI\Client\Model\PermissionsKeysBean**](../Model/PermissionsKeysBean.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PermittedProjects**](../Model/PermittedProjects.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
