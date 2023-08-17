# OpenAPI\Client\ProjectPermissionSchemesApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**assignPermissionScheme()**](ProjectPermissionSchemesApi.md#assignPermissionScheme) | **PUT** /rest/api/2/project/{projectKeyOrId}/permissionscheme | Assign permission scheme |
| [**getAssignedPermissionScheme()**](ProjectPermissionSchemesApi.md#getAssignedPermissionScheme) | **GET** /rest/api/2/project/{projectKeyOrId}/permissionscheme | Get assigned permission scheme |
| [**getProjectIssueSecurityScheme()**](ProjectPermissionSchemesApi.md#getProjectIssueSecurityScheme) | **GET** /rest/api/2/project/{projectKeyOrId}/issuesecuritylevelscheme | Get project issue security scheme |
| [**getSecurityLevelsForProject()**](ProjectPermissionSchemesApi.md#getSecurityLevelsForProject) | **GET** /rest/api/2/project/{projectKeyOrId}/securitylevel | Get project issue security levels |


## `assignPermissionScheme()`

```php
assignPermissionScheme($project_key_or_id, $id_bean, $expand): \OpenAPI\Client\Model\PermissionScheme
```

Assign permission scheme

Assigns a permission scheme with a project. See [Managing project permissions](https://confluence.atlassian.com/x/yodKLg) for more information about permission schemes.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg)

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


$apiInstance = new OpenAPI\Client\Api\ProjectPermissionSchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_key_or_id = 'project_key_or_id_example'; // string | The project ID or project key (case sensitive).
$id_bean = {"id":10000}; // \OpenAPI\Client\Model\IdBean
$expand = 'expand_example'; // string | Use [expand](#expansion) to include additional information in the response. This parameter accepts a comma-separated list. Note that permissions are included when you specify any value. Expand options include:   *  `all` Returns all expandable information.  *  `field` Returns information about the custom field granted the permission.  *  `group` Returns information about the group that is granted the permission.  *  `permissions` Returns all permission grants for each permission scheme.  *  `projectRole` Returns information about the project role granted the permission.  *  `user` Returns information about the user who is granted the permission.

try {
    $result = $apiInstance->assignPermissionScheme($project_key_or_id, $id_bean, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectPermissionSchemesApi->assignPermissionScheme: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_key_or_id** | **string**| The project ID or project key (case sensitive). | |
| **id_bean** | [**\OpenAPI\Client\Model\IdBean**](../Model/IdBean.md)|  | |
| **expand** | **string**| Use [expand](#expansion) to include additional information in the response. This parameter accepts a comma-separated list. Note that permissions are included when you specify any value. Expand options include:   *  &#x60;all&#x60; Returns all expandable information.  *  &#x60;field&#x60; Returns information about the custom field granted the permission.  *  &#x60;group&#x60; Returns information about the group that is granted the permission.  *  &#x60;permissions&#x60; Returns all permission grants for each permission scheme.  *  &#x60;projectRole&#x60; Returns information about the project role granted the permission.  *  &#x60;user&#x60; Returns information about the user who is granted the permission. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PermissionScheme**](../Model/PermissionScheme.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAssignedPermissionScheme()`

```php
getAssignedPermissionScheme($project_key_or_id, $expand): \OpenAPI\Client\Model\PermissionScheme
```

Get assigned permission scheme

Gets the [permission scheme](https://confluence.atlassian.com/x/yodKLg) associated with the project.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg) or *Administer projects* [project permission](https://confluence.atlassian.com/x/yodKLg).

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


$apiInstance = new OpenAPI\Client\Api\ProjectPermissionSchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_key_or_id = 'project_key_or_id_example'; // string | The project ID or project key (case sensitive).
$expand = 'expand_example'; // string | Use [expand](#expansion) to include additional information in the response. This parameter accepts a comma-separated list. Note that permissions are included when you specify any value. Expand options include:   *  `all` Returns all expandable information.  *  `field` Returns information about the custom field granted the permission.  *  `group` Returns information about the group that is granted the permission.  *  `permissions` Returns all permission grants for each permission scheme.  *  `projectRole` Returns information about the project role granted the permission.  *  `user` Returns information about the user who is granted the permission.

try {
    $result = $apiInstance->getAssignedPermissionScheme($project_key_or_id, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectPermissionSchemesApi->getAssignedPermissionScheme: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_key_or_id** | **string**| The project ID or project key (case sensitive). | |
| **expand** | **string**| Use [expand](#expansion) to include additional information in the response. This parameter accepts a comma-separated list. Note that permissions are included when you specify any value. Expand options include:   *  &#x60;all&#x60; Returns all expandable information.  *  &#x60;field&#x60; Returns information about the custom field granted the permission.  *  &#x60;group&#x60; Returns information about the group that is granted the permission.  *  &#x60;permissions&#x60; Returns all permission grants for each permission scheme.  *  &#x60;projectRole&#x60; Returns information about the project role granted the permission.  *  &#x60;user&#x60; Returns information about the user who is granted the permission. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PermissionScheme**](../Model/PermissionScheme.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProjectIssueSecurityScheme()`

```php
getProjectIssueSecurityScheme($project_key_or_id): \OpenAPI\Client\Model\SecurityScheme
```

Get project issue security scheme

Returns the [issue security scheme](https://confluence.atlassian.com/x/J4lKLg) associated with the project.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg) or the *Administer Projects* [project permission](https://confluence.atlassian.com/x/yodKLg).

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


$apiInstance = new OpenAPI\Client\Api\ProjectPermissionSchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_key_or_id = 'project_key_or_id_example'; // string | The project ID or project key (case sensitive).

try {
    $result = $apiInstance->getProjectIssueSecurityScheme($project_key_or_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectPermissionSchemesApi->getProjectIssueSecurityScheme: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_key_or_id** | **string**| The project ID or project key (case sensitive). | |

### Return type

[**\OpenAPI\Client\Model\SecurityScheme**](../Model/SecurityScheme.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSecurityLevelsForProject()`

```php
getSecurityLevelsForProject($project_key_or_id): \OpenAPI\Client\Model\ProjectIssueSecurityLevels
```

Get project issue security levels

Returns all [issue security](https://confluence.atlassian.com/x/J4lKLg) levels for the project that the user has access to.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** *Browse projects* [global permission](https://confluence.atlassian.com/x/x4dKLg) for the project, however, issue security levels are only returned for authenticated user with *Set Issue Security* [global permission](https://confluence.atlassian.com/x/x4dKLg) for the project.

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


$apiInstance = new OpenAPI\Client\Api\ProjectPermissionSchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_key_or_id = 'project_key_or_id_example'; // string | The project ID or project key (case sensitive).

try {
    $result = $apiInstance->getSecurityLevelsForProject($project_key_or_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectPermissionSchemesApi->getSecurityLevelsForProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_key_or_id** | **string**| The project ID or project key (case sensitive). | |

### Return type

[**\OpenAPI\Client\Model\ProjectIssueSecurityLevels**](../Model/ProjectIssueSecurityLevels.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
