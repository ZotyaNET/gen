# OpenAPI\Client\ProjectRolesApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createProjectRole()**](ProjectRolesApi.md#createProjectRole) | **POST** /rest/api/2/role | Create project role |
| [**deleteProjectRole()**](ProjectRolesApi.md#deleteProjectRole) | **DELETE** /rest/api/2/role/{id} | Delete project role |
| [**fullyUpdateProjectRole()**](ProjectRolesApi.md#fullyUpdateProjectRole) | **PUT** /rest/api/2/role/{id} | Fully update project role |
| [**getAllProjectRoles()**](ProjectRolesApi.md#getAllProjectRoles) | **GET** /rest/api/2/role | Get all project roles |
| [**getProjectRole()**](ProjectRolesApi.md#getProjectRole) | **GET** /rest/api/2/project/{projectIdOrKey}/role/{id} | Get project role for project |
| [**getProjectRoleById()**](ProjectRolesApi.md#getProjectRoleById) | **GET** /rest/api/2/role/{id} | Get project role by ID |
| [**getProjectRoleDetails()**](ProjectRolesApi.md#getProjectRoleDetails) | **GET** /rest/api/2/project/{projectIdOrKey}/roledetails | Get project role details |
| [**getProjectRoles()**](ProjectRolesApi.md#getProjectRoles) | **GET** /rest/api/2/project/{projectIdOrKey}/role | Get project roles for project |
| [**partialUpdateProjectRole()**](ProjectRolesApi.md#partialUpdateProjectRole) | **POST** /rest/api/2/role/{id} | Partial update project role |


## `createProjectRole()`

```php
createProjectRole($create_update_role_request_bean): \OpenAPI\Client\Model\ProjectRole
```

Create project role

Creates a new project role with no [default actors](#api-rest-api-2-resolution-get). You can use the [Add default actors to project role](#api-rest-api-2-role-id-actors-post) operation to add default actors to the project role after creating it.  *Note that although a new project role is available to all projects upon creation, any default actors that are associated with the project role are not added to projects that existed prior to the role being created.*<  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\ProjectRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_update_role_request_bean = {"description":"A project role that represents developers in a project","name":"Developers"}; // \OpenAPI\Client\Model\CreateUpdateRoleRequestBean

try {
    $result = $apiInstance->createProjectRole($create_update_role_request_bean);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectRolesApi->createProjectRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_update_role_request_bean** | [**\OpenAPI\Client\Model\CreateUpdateRoleRequestBean**](../Model/CreateUpdateRoleRequestBean.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProjectRole**](../Model/ProjectRole.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteProjectRole()`

```php
deleteProjectRole($id, $swap)
```

Delete project role

Deletes a project role. You must specify a replacement project role if you wish to delete a project role that is in use.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\ProjectRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the project role to delete. Use [Get all project roles](#api-rest-api-2-role-get) to get a list of project role IDs.
$swap = 56; // int | The ID of the project role that will replace the one being deleted.

try {
    $apiInstance->deleteProjectRole($id, $swap);
} catch (Exception $e) {
    echo 'Exception when calling ProjectRolesApi->deleteProjectRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the project role to delete. Use [Get all project roles](#api-rest-api-2-role-get) to get a list of project role IDs. | |
| **swap** | **int**| The ID of the project role that will replace the one being deleted. | [optional] |

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

## `fullyUpdateProjectRole()`

```php
fullyUpdateProjectRole($id, $create_update_role_request_bean): \OpenAPI\Client\Model\ProjectRole
```

Fully update project role

Updates the project role's name and description. You must include both a name and a description in the request.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\ProjectRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the project role. Use [Get all project roles](#api-rest-api-2-role-get) to get a list of project role IDs.
$create_update_role_request_bean = {"description":"A project role that represents developers in a project","name":"Developers"}; // \OpenAPI\Client\Model\CreateUpdateRoleRequestBean

try {
    $result = $apiInstance->fullyUpdateProjectRole($id, $create_update_role_request_bean);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectRolesApi->fullyUpdateProjectRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the project role. Use [Get all project roles](#api-rest-api-2-role-get) to get a list of project role IDs. | |
| **create_update_role_request_bean** | [**\OpenAPI\Client\Model\CreateUpdateRoleRequestBean**](../Model/CreateUpdateRoleRequestBean.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProjectRole**](../Model/ProjectRole.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllProjectRoles()`

```php
getAllProjectRoles(): \OpenAPI\Client\Model\ProjectRole[]
```

Get all project roles

Gets a list of all project roles, complete with project role details and default actors.  ### About project roles ###  [Project roles](https://confluence.atlassian.com/x/3odKLg) are a flexible way to to associate users and groups with projects. In Jira Cloud, the list of project roles is shared globally with all projects, but each project can have a different set of actors associated with it (unlike groups, which have the same membership throughout all Jira applications).  Project roles are used in [permission schemes](#api-rest-api-2-permissionscheme-get), [email notification schemes](#api-rest-api-2-notificationscheme-get), [issue security levels](#api-rest-api-2-issuesecurityschemes-get), [comment visibility](#api-rest-api-2-comment-list-post), and workflow conditions.  #### Members and actors ####  In the Jira REST API, a member of a project role is called an *actor*. An *actor* is a group or user associated with a project role.  Actors may be set as [default members](https://confluence.atlassian.com/x/3odKLg#Managingprojectroles-Specifying'defaultmembers'foraprojectrole) of the project role or set at the project level:   *  Default actors: Users and groups that are assigned to the project role for all newly created projects. The default actors can be removed at the project level later if desired.  *  Actors: Users and groups that are associated with a project role for a project, which may differ from the default actors. This enables you to assign a user to different roles in different projects.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\ProjectRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllProjectRoles();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectRolesApi->getAllProjectRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ProjectRole[]**](../Model/ProjectRole.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProjectRole()`

```php
getProjectRole($project_id_or_key, $id, $exclude_inactive_users): \OpenAPI\Client\Model\ProjectRole
```

Get project role for project

Returns a project role's details and actors associated with the project. The list of actors is sorted by display name.  To check whether a user belongs to a role based on their group memberships, use [Get user](#api-rest-api-2-user-get) with the `groups` expand parameter selected. Then check whether the user keys and groups match with the actors returned for the project.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** *Administer Projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project or *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\ProjectRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id_or_key = 'project_id_or_key_example'; // string | The project ID or project key (case sensitive).
$id = 56; // int | The ID of the project role. Use [Get all project roles](#api-rest-api-2-role-get) to get a list of project role IDs.
$exclude_inactive_users = false; // bool | Exclude inactive users.

try {
    $result = $apiInstance->getProjectRole($project_id_or_key, $id, $exclude_inactive_users);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectRolesApi->getProjectRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id_or_key** | **string**| The project ID or project key (case sensitive). | |
| **id** | **int**| The ID of the project role. Use [Get all project roles](#api-rest-api-2-role-get) to get a list of project role IDs. | |
| **exclude_inactive_users** | **bool**| Exclude inactive users. | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\ProjectRole**](../Model/ProjectRole.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProjectRoleById()`

```php
getProjectRoleById($id): \OpenAPI\Client\Model\ProjectRole
```

Get project role by ID

Gets the project role details and the default actors associated with the role. The list of default actors is sorted by display name.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\ProjectRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the project role. Use [Get all project roles](#api-rest-api-2-role-get) to get a list of project role IDs.

try {
    $result = $apiInstance->getProjectRoleById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectRolesApi->getProjectRoleById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the project role. Use [Get all project roles](#api-rest-api-2-role-get) to get a list of project role IDs. | |

### Return type

[**\OpenAPI\Client\Model\ProjectRole**](../Model/ProjectRole.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProjectRoleDetails()`

```php
getProjectRoleDetails($project_id_or_key, $current_member, $exclude_connect_addons): \OpenAPI\Client\Model\ProjectRoleDetails[]
```

Get project role details

Returns all [project roles](https://confluence.atlassian.com/x/3odKLg) and the details for each role. Note that the list of project roles is common to all projects.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg) or *Administer projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project.

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


$apiInstance = new OpenAPI\Client\Api\ProjectRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id_or_key = 'project_id_or_key_example'; // string | The project ID or project key (case sensitive).
$current_member = false; // bool | Whether the roles should be filtered to include only those the user is assigned to.
$exclude_connect_addons = false; // bool

try {
    $result = $apiInstance->getProjectRoleDetails($project_id_or_key, $current_member, $exclude_connect_addons);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectRolesApi->getProjectRoleDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id_or_key** | **string**| The project ID or project key (case sensitive). | |
| **current_member** | **bool**| Whether the roles should be filtered to include only those the user is assigned to. | [optional] [default to false] |
| **exclude_connect_addons** | **bool**|  | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\ProjectRoleDetails[]**](../Model/ProjectRoleDetails.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProjectRoles()`

```php
getProjectRoles($project_id_or_key): array<string,string>
```

Get project roles for project

Returns a list of [project roles](https://confluence.atlassian.com/x/3odKLg) for the project returning the name and self URL for each role.  Note that all project roles are shared with all projects in Jira Cloud. See [Get all project roles](#api-rest-api-2-role-get) for more information.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** *Administer Projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for any project on the site or *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\ProjectRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id_or_key = 'project_id_or_key_example'; // string | The project ID or project key (case sensitive).

try {
    $result = $apiInstance->getProjectRoles($project_id_or_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectRolesApi->getProjectRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id_or_key** | **string**| The project ID or project key (case sensitive). | |

### Return type

**array<string,string>**

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `partialUpdateProjectRole()`

```php
partialUpdateProjectRole($id, $create_update_role_request_bean): \OpenAPI\Client\Model\ProjectRole
```

Partial update project role

Updates either the project role's name or its description.  You cannot update both the name and description at the same time using this operation. If you send a request with a name and a description only the name is updated.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\ProjectRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the project role. Use [Get all project roles](#api-rest-api-2-role-get) to get a list of project role IDs.
$create_update_role_request_bean = {"description":"A project role that represents developers in a project","name":"Developers"}; // \OpenAPI\Client\Model\CreateUpdateRoleRequestBean

try {
    $result = $apiInstance->partialUpdateProjectRole($id, $create_update_role_request_bean);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectRolesApi->partialUpdateProjectRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the project role. Use [Get all project roles](#api-rest-api-2-role-get) to get a list of project role IDs. | |
| **create_update_role_request_bean** | [**\OpenAPI\Client\Model\CreateUpdateRoleRequestBean**](../Model/CreateUpdateRoleRequestBean.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProjectRole**](../Model/ProjectRole.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
