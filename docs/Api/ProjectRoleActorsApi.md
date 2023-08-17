# OpenAPI\Client\ProjectRoleActorsApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addActorUsers()**](ProjectRoleActorsApi.md#addActorUsers) | **POST** /rest/api/2/project/{projectIdOrKey}/role/{id} | Add actors to project role |
| [**addProjectRoleActorsToRole()**](ProjectRoleActorsApi.md#addProjectRoleActorsToRole) | **POST** /rest/api/2/role/{id}/actors | Add default actors to project role |
| [**deleteActor()**](ProjectRoleActorsApi.md#deleteActor) | **DELETE** /rest/api/2/project/{projectIdOrKey}/role/{id} | Delete actors from project role |
| [**deleteProjectRoleActorsFromRole()**](ProjectRoleActorsApi.md#deleteProjectRoleActorsFromRole) | **DELETE** /rest/api/2/role/{id}/actors | Delete default actors from project role |
| [**getProjectRoleActorsForRole()**](ProjectRoleActorsApi.md#getProjectRoleActorsForRole) | **GET** /rest/api/2/role/{id}/actors | Get default actors for project role |
| [**setActors()**](ProjectRoleActorsApi.md#setActors) | **PUT** /rest/api/2/project/{projectIdOrKey}/role/{id} | Set actors for project role |


## `addActorUsers()`

```php
addActorUsers($project_id_or_key, $id, $actors_map): \OpenAPI\Client\Model\ProjectRole
```

Add actors to project role

Adds actors to a project role for the project.  To replace all actors for the project, use [Set actors for project role](#api-rest-api-2-project-projectIdOrKey-role-id-put).  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** *Administer Projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project or *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\ProjectRoleActorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id_or_key = 'project_id_or_key_example'; // string | The project ID or project key (case sensitive).
$id = 56; // int | The ID of the project role. Use [Get all project roles](#api-rest-api-2-role-get) to get a list of project role IDs.
$actors_map = {"groupId":["952d12c3-5b5b-4d04-bb32-44d383afc4b2"]}; // \OpenAPI\Client\Model\ActorsMap | The groups or users to associate with the project role for this project. Provide the user account ID, group name, or group ID. As a group's name can change, use of group ID is recommended.

try {
    $result = $apiInstance->addActorUsers($project_id_or_key, $id, $actors_map);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectRoleActorsApi->addActorUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id_or_key** | **string**| The project ID or project key (case sensitive). | |
| **id** | **int**| The ID of the project role. Use [Get all project roles](#api-rest-api-2-role-get) to get a list of project role IDs. | |
| **actors_map** | [**\OpenAPI\Client\Model\ActorsMap**](../Model/ActorsMap.md)| The groups or users to associate with the project role for this project. Provide the user account ID, group name, or group ID. As a group&#39;s name can change, use of group ID is recommended. | |

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

## `addProjectRoleActorsToRole()`

```php
addProjectRoleActorsToRole($id, $actor_input_bean): \OpenAPI\Client\Model\ProjectRole
```

Add default actors to project role

Adds [default actors](#api-rest-api-2-resolution-get) to a role. You may add groups or users, but you cannot add groups and users in the same request.  Changing a project role's default actors does not affect project role members for projects already created.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\ProjectRoleActorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the project role. Use [Get all project roles](#api-rest-api-2-role-get) to get a list of project role IDs.
$actor_input_bean = {"user":["admin"]}; // \OpenAPI\Client\Model\ActorInputBean

try {
    $result = $apiInstance->addProjectRoleActorsToRole($id, $actor_input_bean);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectRoleActorsApi->addProjectRoleActorsToRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the project role. Use [Get all project roles](#api-rest-api-2-role-get) to get a list of project role IDs. | |
| **actor_input_bean** | [**\OpenAPI\Client\Model\ActorInputBean**](../Model/ActorInputBean.md)|  | |

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

## `deleteActor()`

```php
deleteActor($project_id_or_key, $id, $user, $group, $group_id)
```

Delete actors from project role

Deletes actors from a project role for the project.  To remove default actors from the project role, use [Delete default actors from project role](#api-rest-api-2-role-id-actors-delete).  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** *Administer Projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project or *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\ProjectRoleActorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id_or_key = 'project_id_or_key_example'; // string | The project ID or project key (case sensitive).
$id = 56; // int | The ID of the project role. Use [Get all project roles](#api-rest-api-2-role-get) to get a list of project role IDs.
$user = 5b10ac8d82e05b22cc7d4ef5; // string | The user account ID of the user to remove from the project role.
$group = 'group_example'; // string | The name of the group to remove from the project role. This parameter cannot be used with the `groupId` parameter. As a group's name can change, use of `groupId` is recommended.
$group_id = 'group_id_example'; // string | The ID of the group to remove from the project role. This parameter cannot be used with the `group` parameter.

try {
    $apiInstance->deleteActor($project_id_or_key, $id, $user, $group, $group_id);
} catch (Exception $e) {
    echo 'Exception when calling ProjectRoleActorsApi->deleteActor: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id_or_key** | **string**| The project ID or project key (case sensitive). | |
| **id** | **int**| The ID of the project role. Use [Get all project roles](#api-rest-api-2-role-get) to get a list of project role IDs. | |
| **user** | **string**| The user account ID of the user to remove from the project role. | [optional] |
| **group** | **string**| The name of the group to remove from the project role. This parameter cannot be used with the &#x60;groupId&#x60; parameter. As a group&#39;s name can change, use of &#x60;groupId&#x60; is recommended. | [optional] |
| **group_id** | **string**| The ID of the group to remove from the project role. This parameter cannot be used with the &#x60;group&#x60; parameter. | [optional] |

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

## `deleteProjectRoleActorsFromRole()`

```php
deleteProjectRoleActorsFromRole($id, $user, $group_id, $group): \OpenAPI\Client\Model\ProjectRole
```

Delete default actors from project role

Deletes the [default actors](#api-rest-api-2-resolution-get) from a project role. You may delete a group or user, but you cannot delete a group and a user in the same request.  Changing a project role's default actors does not affect project role members for projects already created.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\ProjectRoleActorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the project role. Use [Get all project roles](#api-rest-api-2-role-get) to get a list of project role IDs.
$user = 5b10ac8d82e05b22cc7d4ef5; // string | The user account ID of the user to remove as a default actor.
$group_id = 'group_id_example'; // string | The group ID of the group to be removed as a default actor. This parameter cannot be used with the `group` parameter.
$group = 'group_example'; // string | The group name of the group to be removed as a default actor.This parameter cannot be used with the `groupId` parameter. As a group's name can change, use of `groupId` is recommended.

try {
    $result = $apiInstance->deleteProjectRoleActorsFromRole($id, $user, $group_id, $group);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectRoleActorsApi->deleteProjectRoleActorsFromRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the project role. Use [Get all project roles](#api-rest-api-2-role-get) to get a list of project role IDs. | |
| **user** | **string**| The user account ID of the user to remove as a default actor. | [optional] |
| **group_id** | **string**| The group ID of the group to be removed as a default actor. This parameter cannot be used with the &#x60;group&#x60; parameter. | [optional] |
| **group** | **string**| The group name of the group to be removed as a default actor.This parameter cannot be used with the &#x60;groupId&#x60; parameter. As a group&#39;s name can change, use of &#x60;groupId&#x60; is recommended. | [optional] |

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

## `getProjectRoleActorsForRole()`

```php
getProjectRoleActorsForRole($id): \OpenAPI\Client\Model\ProjectRole
```

Get default actors for project role

Returns the [default actors](#api-rest-api-2-resolution-get) for the project role.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\ProjectRoleActorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the project role. Use [Get all project roles](#api-rest-api-2-role-get) to get a list of project role IDs.

try {
    $result = $apiInstance->getProjectRoleActorsForRole($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectRoleActorsApi->getProjectRoleActorsForRole: ', $e->getMessage(), PHP_EOL;
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

## `setActors()`

```php
setActors($project_id_or_key, $id, $project_role_actors_update_bean): \OpenAPI\Client\Model\ProjectRole
```

Set actors for project role

Sets the actors for a project role for a project, replacing all existing actors.  To add actors to the project without overwriting the existing list, use [Add actors to project role](#api-rest-api-2-project-projectIdOrKey-role-id-post).  **[Permissions](#permissions) required:** *Administer Projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project or *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\ProjectRoleActorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id_or_key = 'project_id_or_key_example'; // string | The project ID or project key (case sensitive).
$id = 56; // int | The ID of the project role. Use [Get all project roles](#api-rest-api-2-role-get) to get a list of project role IDs.
$project_role_actors_update_bean = {"categorisedActors":{"atlassian-group-role-actor-id":["952d12c3-5b5b-4d04-bb32-44d383afc4b2"],"atlassian-user-role-actor":["12345678-9abc-def1-2345-6789abcdef12"]}}; // \OpenAPI\Client\Model\ProjectRoleActorsUpdateBean | The groups or users to associate with the project role for this project. Provide the user account ID, group name, or group ID. As a group's name can change, use of group ID is recommended.

try {
    $result = $apiInstance->setActors($project_id_or_key, $id, $project_role_actors_update_bean);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectRoleActorsApi->setActors: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id_or_key** | **string**| The project ID or project key (case sensitive). | |
| **id** | **int**| The ID of the project role. Use [Get all project roles](#api-rest-api-2-role-get) to get a list of project role IDs. | |
| **project_role_actors_update_bean** | [**\OpenAPI\Client\Model\ProjectRoleActorsUpdateBean**](../Model/ProjectRoleActorsUpdateBean.md)| The groups or users to associate with the project role for this project. Provide the user account ID, group name, or group ID. As a group&#39;s name can change, use of group ID is recommended. | |

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
