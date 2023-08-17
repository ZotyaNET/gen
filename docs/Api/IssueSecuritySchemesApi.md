# OpenAPI\Client\IssueSecuritySchemesApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addSecurityLevel()**](IssueSecuritySchemesApi.md#addSecurityLevel) | **PUT** /rest/api/2/issuesecurityschemes/{schemeId}/level | Add issue security levels |
| [**addSecurityLevelMembers()**](IssueSecuritySchemesApi.md#addSecurityLevelMembers) | **PUT** /rest/api/2/issuesecurityschemes/{schemeId}/level/{levelId}/member | Add issue security level members |
| [**associateSchemesToProjects()**](IssueSecuritySchemesApi.md#associateSchemesToProjects) | **PUT** /rest/api/2/issuesecurityschemes/project | Associate security scheme to project |
| [**createIssueSecurityScheme()**](IssueSecuritySchemesApi.md#createIssueSecurityScheme) | **POST** /rest/api/2/issuesecurityschemes | Create issue security scheme |
| [**deleteSecurityScheme()**](IssueSecuritySchemesApi.md#deleteSecurityScheme) | **DELETE** /rest/api/2/issuesecurityschemes/{schemeId} | Delete issue security scheme |
| [**getIssueSecurityScheme()**](IssueSecuritySchemesApi.md#getIssueSecurityScheme) | **GET** /rest/api/2/issuesecurityschemes/{id} | Get issue security scheme |
| [**getIssueSecuritySchemes()**](IssueSecuritySchemesApi.md#getIssueSecuritySchemes) | **GET** /rest/api/2/issuesecurityschemes | Get issue security schemes |
| [**getSecurityLevelMembers()**](IssueSecuritySchemesApi.md#getSecurityLevelMembers) | **GET** /rest/api/2/issuesecurityschemes/level/member | Get issue security level members |
| [**getSecurityLevels()**](IssueSecuritySchemesApi.md#getSecurityLevels) | **GET** /rest/api/2/issuesecurityschemes/level | Get issue security levels |
| [**removeLevel()**](IssueSecuritySchemesApi.md#removeLevel) | **DELETE** /rest/api/2/issuesecurityschemes/{schemeId}/level/{levelId} | Remove issue security level |
| [**removeMemberFromSecurityLevel()**](IssueSecuritySchemesApi.md#removeMemberFromSecurityLevel) | **DELETE** /rest/api/2/issuesecurityschemes/{schemeId}/level/{levelId}/member/{memberId} | Remove member from issue security level |
| [**searchProjectsUsingSecuritySchemes()**](IssueSecuritySchemesApi.md#searchProjectsUsingSecuritySchemes) | **GET** /rest/api/2/issuesecurityschemes/project | Get projects using issue security schemes |
| [**searchSecuritySchemes()**](IssueSecuritySchemesApi.md#searchSecuritySchemes) | **GET** /rest/api/2/issuesecurityschemes/search | Search issue security schemes |
| [**setDefaultLevels()**](IssueSecuritySchemesApi.md#setDefaultLevels) | **PUT** /rest/api/2/issuesecurityschemes/level/default | Set default issue security levels |
| [**updateIssueSecurityScheme()**](IssueSecuritySchemesApi.md#updateIssueSecurityScheme) | **PUT** /rest/api/2/issuesecurityschemes/{id} | Update issue security scheme |
| [**updateSecurityLevel()**](IssueSecuritySchemesApi.md#updateSecurityLevel) | **PUT** /rest/api/2/issuesecurityschemes/{schemeId}/level/{levelId} | Update issue security level |


## `addSecurityLevel()`

```php
addSecurityLevel($scheme_id, $add_security_scheme_levels_request_bean): mixed
```

Add issue security levels

Adds levels and levels' members to the issue security scheme. You can add up to 100 levels per request.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueSecuritySchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scheme_id = 'scheme_id_example'; // string | The ID of the issue security scheme.
$add_security_scheme_levels_request_bean = {"levels":[{"description":"First Level Description","isDefault":true,"members":[{"type":"reporter"},{"parameter":"jira-administrators","type":"group"}],"name":"First Level"}]}; // \OpenAPI\Client\Model\AddSecuritySchemeLevelsRequestBean

try {
    $result = $apiInstance->addSecurityLevel($scheme_id, $add_security_scheme_levels_request_bean);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueSecuritySchemesApi->addSecurityLevel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **scheme_id** | **string**| The ID of the issue security scheme. | |
| **add_security_scheme_levels_request_bean** | [**\OpenAPI\Client\Model\AddSecuritySchemeLevelsRequestBean**](../Model/AddSecuritySchemeLevelsRequestBean.md)|  | |

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

## `addSecurityLevelMembers()`

```php
addSecurityLevelMembers($scheme_id, $level_id, $security_scheme_members_request): mixed
```

Add issue security level members

Adds members to the issue security level. You can add up to 100 members per request.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueSecuritySchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scheme_id = 'scheme_id_example'; // string | The ID of the issue security scheme.
$level_id = 'level_id_example'; // string | The ID of the issue security level.
$security_scheme_members_request = {"members":[{"type":"reporter"},{"parameter":"jira-administrators","type":"group"}]}; // \OpenAPI\Client\Model\SecuritySchemeMembersRequest

try {
    $result = $apiInstance->addSecurityLevelMembers($scheme_id, $level_id, $security_scheme_members_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueSecuritySchemesApi->addSecurityLevelMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **scheme_id** | **string**| The ID of the issue security scheme. | |
| **level_id** | **string**| The ID of the issue security level. | |
| **security_scheme_members_request** | [**\OpenAPI\Client\Model\SecuritySchemeMembersRequest**](../Model/SecuritySchemeMembersRequest.md)|  | |

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

## `associateSchemesToProjects()`

```php
associateSchemesToProjects($associate_security_scheme_with_project_details)
```

Associate security scheme to project

Associates an issue security scheme with a project and remaps security levels of issues to the new levels, if provided.  This operation is [asynchronous](#async). Follow the `location` link in the response to determine the status of the task and use [Get task](#api-rest-api-2-task-taskId-get) to obtain subsequent updates.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueSecuritySchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_security_scheme_with_project_details = {"oldToNewSecurityLevelMappings":[{"newLevelId":"30001","oldLevelId":"30000"}],"projectId":"10000","schemeId":"20000"}; // \OpenAPI\Client\Model\AssociateSecuritySchemeWithProjectDetails

try {
    $apiInstance->associateSchemesToProjects($associate_security_scheme_with_project_details);
} catch (Exception $e) {
    echo 'Exception when calling IssueSecuritySchemesApi->associateSchemesToProjects: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **associate_security_scheme_with_project_details** | [**\OpenAPI\Client\Model\AssociateSecuritySchemeWithProjectDetails**](../Model/AssociateSecuritySchemeWithProjectDetails.md)|  | |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createIssueSecurityScheme()`

```php
createIssueSecurityScheme($request_body): \OpenAPI\Client\Model\SecuritySchemeId
```

Create issue security scheme

Creates a security scheme with security scheme levels and levels' members. You can create up to 100 security scheme levels and security scheme levels' members per request.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueSecuritySchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_body = {"description":"Newly created issue security scheme","levels":[{"description":"Newly created level","isDefault":true,"members":[{"parameter":"administrators","type":"group"}],"name":"New level"}],"name":"New security scheme"}; // array<string,mixed>

try {
    $result = $apiInstance->createIssueSecurityScheme($request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueSecuritySchemesApi->createIssueSecurityScheme: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_body** | [**array<string,mixed>**](../Model/mixed.md)|  | |

### Return type

[**\OpenAPI\Client\Model\SecuritySchemeId**](../Model/SecuritySchemeId.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSecurityScheme()`

```php
deleteSecurityScheme($scheme_id): mixed
```

Delete issue security scheme

Deletes an issue security scheme.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueSecuritySchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scheme_id = 'scheme_id_example'; // string | The ID of the issue security scheme.

try {
    $result = $apiInstance->deleteSecurityScheme($scheme_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueSecuritySchemesApi->deleteSecurityScheme: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **scheme_id** | **string**| The ID of the issue security scheme. | |

### Return type

**mixed**

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIssueSecurityScheme()`

```php
getIssueSecurityScheme($id): \OpenAPI\Client\Model\SecurityScheme
```

Get issue security scheme

Returns an issue security scheme along with its security levels.  **[Permissions](#permissions) required:**   *  *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).  *  *Administer Projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for a project that uses the requested issue security scheme.

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


$apiInstance = new OpenAPI\Client\Api\IssueSecuritySchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the issue security scheme. Use the [Get issue security schemes](#api-rest-api-2-issuesecurityschemes-get) operation to get a list of issue security scheme IDs.

try {
    $result = $apiInstance->getIssueSecurityScheme($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueSecuritySchemesApi->getIssueSecurityScheme: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the issue security scheme. Use the [Get issue security schemes](#api-rest-api-2-issuesecurityschemes-get) operation to get a list of issue security scheme IDs. | |

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

## `getIssueSecuritySchemes()`

```php
getIssueSecuritySchemes(): \OpenAPI\Client\Model\SecuritySchemes
```

Get issue security schemes

Returns all [issue security schemes](https://confluence.atlassian.com/x/J4lKLg).  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueSecuritySchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getIssueSecuritySchemes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueSecuritySchemesApi->getIssueSecuritySchemes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\SecuritySchemes**](../Model/SecuritySchemes.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSecurityLevelMembers()`

```php
getSecurityLevelMembers($start_at, $max_results, $id, $scheme_id, $level_id, $expand): \OpenAPI\Client\Model\PageBeanSecurityLevelMember
```

Get issue security level members

Returns a [paginated](#pagination) list of issue security level members.  Only issue security level members in the context of classic projects are returned.  Filtering using parameters is inclusive: if you specify both security scheme IDs and level IDs, the result will include all issue security level members from the specified schemes and levels.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueSecuritySchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_at = '0'; // string | The index of the first item to return in a page of results (page offset).
$max_results = '50'; // string | The maximum number of items to return per page.
$id = array('id_example'); // string[] | The list of issue security level member IDs. To include multiple issue security level members separate IDs with an ampersand: `id=10000&id=10001`.
$scheme_id = array('scheme_id_example'); // string[] | The list of issue security scheme IDs. To include multiple issue security schemes separate IDs with an ampersand: `schemeId=10000&schemeId=10001`.
$level_id = array('level_id_example'); // string[] | The list of issue security level IDs. To include multiple issue security levels separate IDs with an ampersand: `levelId=10000&levelId=10001`.
$expand = 'expand_example'; // string | Use expand to include additional information in the response. This parameter accepts a comma-separated list. Expand options include:   *  `all` Returns all expandable information  *  `field` Returns information about the custom field granted the permission  *  `group` Returns information about the group that is granted the permission  *  `projectRole` Returns information about the project role granted the permission  *  `user` Returns information about the user who is granted the permission

try {
    $result = $apiInstance->getSecurityLevelMembers($start_at, $max_results, $id, $scheme_id, $level_id, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueSecuritySchemesApi->getSecurityLevelMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_at** | **string**| The index of the first item to return in a page of results (page offset). | [optional] [default to &#39;0&#39;] |
| **max_results** | **string**| The maximum number of items to return per page. | [optional] [default to &#39;50&#39;] |
| **id** | [**string[]**](../Model/string.md)| The list of issue security level member IDs. To include multiple issue security level members separate IDs with an ampersand: &#x60;id&#x3D;10000&amp;id&#x3D;10001&#x60;. | [optional] |
| **scheme_id** | [**string[]**](../Model/string.md)| The list of issue security scheme IDs. To include multiple issue security schemes separate IDs with an ampersand: &#x60;schemeId&#x3D;10000&amp;schemeId&#x3D;10001&#x60;. | [optional] |
| **level_id** | [**string[]**](../Model/string.md)| The list of issue security level IDs. To include multiple issue security levels separate IDs with an ampersand: &#x60;levelId&#x3D;10000&amp;levelId&#x3D;10001&#x60;. | [optional] |
| **expand** | **string**| Use expand to include additional information in the response. This parameter accepts a comma-separated list. Expand options include:   *  &#x60;all&#x60; Returns all expandable information  *  &#x60;field&#x60; Returns information about the custom field granted the permission  *  &#x60;group&#x60; Returns information about the group that is granted the permission  *  &#x60;projectRole&#x60; Returns information about the project role granted the permission  *  &#x60;user&#x60; Returns information about the user who is granted the permission | [optional] |

### Return type

[**\OpenAPI\Client\Model\PageBeanSecurityLevelMember**](../Model/PageBeanSecurityLevelMember.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSecurityLevels()`

```php
getSecurityLevels($start_at, $max_results, $id, $scheme_id, $only_default): \OpenAPI\Client\Model\PageBeanSecurityLevel
```

Get issue security levels

Returns a [paginated](#pagination) list of issue security levels.  Only issue security levels in the context of classic projects are returned.  Filtering using IDs is inclusive: if you specify both security scheme IDs and level IDs, the result will include both specified issue security levels and all issue security levels from the specified schemes.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueSecuritySchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_at = '0'; // string | The index of the first item to return in a page of results (page offset).
$max_results = '50'; // string | The maximum number of items to return per page.
$id = array('id_example'); // string[] | The list of issue security scheme level IDs. To include multiple issue security levels, separate IDs with an ampersand: `id=10000&id=10001`.
$scheme_id = array('scheme_id_example'); // string[] | The list of issue security scheme IDs. To include multiple issue security schemes, separate IDs with an ampersand: `schemeId=10000&schemeId=10001`.
$only_default = false; // bool | When set to true, returns multiple default levels for each security scheme containing a default. If you provide scheme and level IDs not associated with the default, returns an empty page. The default value is false.

try {
    $result = $apiInstance->getSecurityLevels($start_at, $max_results, $id, $scheme_id, $only_default);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueSecuritySchemesApi->getSecurityLevels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_at** | **string**| The index of the first item to return in a page of results (page offset). | [optional] [default to &#39;0&#39;] |
| **max_results** | **string**| The maximum number of items to return per page. | [optional] [default to &#39;50&#39;] |
| **id** | [**string[]**](../Model/string.md)| The list of issue security scheme level IDs. To include multiple issue security levels, separate IDs with an ampersand: &#x60;id&#x3D;10000&amp;id&#x3D;10001&#x60;. | [optional] |
| **scheme_id** | [**string[]**](../Model/string.md)| The list of issue security scheme IDs. To include multiple issue security schemes, separate IDs with an ampersand: &#x60;schemeId&#x3D;10000&amp;schemeId&#x3D;10001&#x60;. | [optional] |
| **only_default** | **bool**| When set to true, returns multiple default levels for each security scheme containing a default. If you provide scheme and level IDs not associated with the default, returns an empty page. The default value is false. | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\PageBeanSecurityLevel**](../Model/PageBeanSecurityLevel.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeLevel()`

```php
removeLevel($scheme_id, $level_id, $replace_with)
```

Remove issue security level

Deletes an issue security level.  This operation is [asynchronous](#async). Follow the `location` link in the response to determine the status of the task and use [Get task](#api-rest-api-2-task-taskId-get) to obtain subsequent updates.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueSecuritySchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scheme_id = 'scheme_id_example'; // string | The ID of the issue security scheme.
$level_id = 'level_id_example'; // string | The ID of the issue security level to remove.
$replace_with = 'replace_with_example'; // string | The ID of the issue security level that will replace the currently selected level.

try {
    $apiInstance->removeLevel($scheme_id, $level_id, $replace_with);
} catch (Exception $e) {
    echo 'Exception when calling IssueSecuritySchemesApi->removeLevel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **scheme_id** | **string**| The ID of the issue security scheme. | |
| **level_id** | **string**| The ID of the issue security level to remove. | |
| **replace_with** | **string**| The ID of the issue security level that will replace the currently selected level. | [optional] |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeMemberFromSecurityLevel()`

```php
removeMemberFromSecurityLevel($scheme_id, $level_id, $member_id): mixed
```

Remove member from issue security level

Removes an issue security level member from an issue security scheme.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueSecuritySchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scheme_id = 'scheme_id_example'; // string | The ID of the issue security scheme.
$level_id = 'level_id_example'; // string | The ID of the issue security level.
$member_id = 'member_id_example'; // string | The ID of the issue security level member to be removed.

try {
    $result = $apiInstance->removeMemberFromSecurityLevel($scheme_id, $level_id, $member_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueSecuritySchemesApi->removeMemberFromSecurityLevel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **scheme_id** | **string**| The ID of the issue security scheme. | |
| **level_id** | **string**| The ID of the issue security level. | |
| **member_id** | **string**| The ID of the issue security level member to be removed. | |

### Return type

**mixed**

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchProjectsUsingSecuritySchemes()`

```php
searchProjectsUsingSecuritySchemes($start_at, $max_results, $issue_security_scheme_id, $project_id): \OpenAPI\Client\Model\PageBeanIssueSecuritySchemeToProjectMapping
```

Get projects using issue security schemes

Returns a [paginated](#pagination) mapping of projects that are using security schemes. You can provide either one or multiple security scheme IDs or project IDs to filter by. If you don't provide any, this will return a list of all mappings. Only issue security schemes in the context of classic projects are supported. **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueSecuritySchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_at = '0'; // string | The index of the first item to return in a page of results (page offset).
$max_results = '50'; // string | The maximum number of items to return per page.
$issue_security_scheme_id = array('issue_security_scheme_id_example'); // string[] | The list of security scheme IDs to be filtered out.
$project_id = array('project_id_example'); // string[] | The list of project IDs to be filtered out.

try {
    $result = $apiInstance->searchProjectsUsingSecuritySchemes($start_at, $max_results, $issue_security_scheme_id, $project_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueSecuritySchemesApi->searchProjectsUsingSecuritySchemes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_at** | **string**| The index of the first item to return in a page of results (page offset). | [optional] [default to &#39;0&#39;] |
| **max_results** | **string**| The maximum number of items to return per page. | [optional] [default to &#39;50&#39;] |
| **issue_security_scheme_id** | [**string[]**](../Model/string.md)| The list of security scheme IDs to be filtered out. | [optional] |
| **project_id** | [**string[]**](../Model/string.md)| The list of project IDs to be filtered out. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PageBeanIssueSecuritySchemeToProjectMapping**](../Model/PageBeanIssueSecuritySchemeToProjectMapping.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchSecuritySchemes()`

```php
searchSecuritySchemes($start_at, $max_results, $id, $project_id): \OpenAPI\Client\Model\PageBeanSecuritySchemeWithProjects
```

Search issue security schemes

Returns a [paginated](#pagination) list of issue security schemes.   If you specify the project ID parameter, the result will contain issue security schemes and related project IDs you filter by. Use \\{@link IssueSecuritySchemeResource\\#searchProjectsUsingSecuritySchemes(String, String, Set, Set)\\} to obtain all projects related to scheme.  Only issue security schemes in the context of classic projects are returned.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueSecuritySchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_at = '0'; // string | The index of the first item to return in a page of results (page offset).
$max_results = '50'; // string | The maximum number of items to return per page.
$id = array('id_example'); // string[] | The list of issue security scheme IDs. To include multiple issue security scheme IDs, separate IDs with an ampersand: `id=10000&id=10001`.
$project_id = array('project_id_example'); // string[] | The list of project IDs. To include multiple project IDs, separate IDs with an ampersand: `projectId=10000&projectId=10001`.

try {
    $result = $apiInstance->searchSecuritySchemes($start_at, $max_results, $id, $project_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueSecuritySchemesApi->searchSecuritySchemes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_at** | **string**| The index of the first item to return in a page of results (page offset). | [optional] [default to &#39;0&#39;] |
| **max_results** | **string**| The maximum number of items to return per page. | [optional] [default to &#39;50&#39;] |
| **id** | [**string[]**](../Model/string.md)| The list of issue security scheme IDs. To include multiple issue security scheme IDs, separate IDs with an ampersand: &#x60;id&#x3D;10000&amp;id&#x3D;10001&#x60;. | [optional] |
| **project_id** | [**string[]**](../Model/string.md)| The list of project IDs. To include multiple project IDs, separate IDs with an ampersand: &#x60;projectId&#x3D;10000&amp;projectId&#x3D;10001&#x60;. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PageBeanSecuritySchemeWithProjects**](../Model/PageBeanSecuritySchemeWithProjects.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setDefaultLevels()`

```php
setDefaultLevels($request_body): mixed
```

Set default issue security levels

Sets default issue security levels for schemes.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueSecuritySchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_body = {"defaultValues":[{"defaultLevelId":"20000","issueSecuritySchemeId":"10000"},{"defaultLevelId":"30000","issueSecuritySchemeId":"12000"}]}; // array<string,mixed>

try {
    $result = $apiInstance->setDefaultLevels($request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueSecuritySchemesApi->setDefaultLevels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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

## `updateIssueSecurityScheme()`

```php
updateIssueSecurityScheme($id, $update_issue_security_scheme_request_bean): mixed
```

Update issue security scheme

Updates the issue security scheme.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueSecuritySchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the issue security scheme.
$update_issue_security_scheme_request_bean = {"description":"My issue security scheme description","name":"My issue security scheme name"}; // \OpenAPI\Client\Model\UpdateIssueSecuritySchemeRequestBean

try {
    $result = $apiInstance->updateIssueSecurityScheme($id, $update_issue_security_scheme_request_bean);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueSecuritySchemesApi->updateIssueSecurityScheme: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the issue security scheme. | |
| **update_issue_security_scheme_request_bean** | [**\OpenAPI\Client\Model\UpdateIssueSecuritySchemeRequestBean**](../Model/UpdateIssueSecuritySchemeRequestBean.md)|  | |

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

## `updateSecurityLevel()`

```php
updateSecurityLevel($scheme_id, $level_id, $request_body): mixed
```

Update issue security level

Updates the issue security level.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueSecuritySchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scheme_id = 'scheme_id_example'; // string | The ID of the issue security scheme level belongs to.
$level_id = 'level_id_example'; // string | The ID of the issue security level to update.
$request_body = {"description":"New level description","name":"New level name"}; // array<string,mixed>

try {
    $result = $apiInstance->updateSecurityLevel($scheme_id, $level_id, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueSecuritySchemesApi->updateSecurityLevel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **scheme_id** | **string**| The ID of the issue security scheme level belongs to. | |
| **level_id** | **string**| The ID of the issue security level to update. | |
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
