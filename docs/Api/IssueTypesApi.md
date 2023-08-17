# OpenAPI\Client\IssueTypesApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createIssueType()**](IssueTypesApi.md#createIssueType) | **POST** /rest/api/2/issuetype | Create issue type |
| [**createIssueTypeAvatar()**](IssueTypesApi.md#createIssueTypeAvatar) | **POST** /rest/api/2/issuetype/{id}/avatar2 | Load issue type avatar |
| [**deleteIssueType()**](IssueTypesApi.md#deleteIssueType) | **DELETE** /rest/api/2/issuetype/{id} | Delete issue type |
| [**getAlternativeIssueTypes()**](IssueTypesApi.md#getAlternativeIssueTypes) | **GET** /rest/api/2/issuetype/{id}/alternatives | Get alternative issue types |
| [**getIssueAllTypes()**](IssueTypesApi.md#getIssueAllTypes) | **GET** /rest/api/2/issuetype | Get all issue types for user |
| [**getIssueType()**](IssueTypesApi.md#getIssueType) | **GET** /rest/api/2/issuetype/{id} | Get issue type |
| [**getIssueTypesForProject()**](IssueTypesApi.md#getIssueTypesForProject) | **GET** /rest/api/2/issuetype/project | Get issue types for project |
| [**updateIssueType()**](IssueTypesApi.md#updateIssueType) | **PUT** /rest/api/2/issuetype/{id} | Update issue type |


## `createIssueType()`

```php
createIssueType($issue_type_create_bean): \OpenAPI\Client\Model\IssueTypeDetails
```

Create issue type

Creates an issue type and adds it to the default issue type scheme.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_type_create_bean = {"description":"description","name":"name","type":"standard"}; // \OpenAPI\Client\Model\IssueTypeCreateBean

try {
    $result = $apiInstance->createIssueType($issue_type_create_bean);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueTypesApi->createIssueType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_type_create_bean** | [**\OpenAPI\Client\Model\IssueTypeCreateBean**](../Model/IssueTypeCreateBean.md)|  | |

### Return type

[**\OpenAPI\Client\Model\IssueTypeDetails**](../Model/IssueTypeDetails.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createIssueTypeAvatar()`

```php
createIssueTypeAvatar($id, $size, $body, $x, $y): \OpenAPI\Client\Model\Avatar
```

Load issue type avatar

Loads an avatar for the issue type.  Specify the avatar's local file location in the body of the request. Also, include the following headers:   *  `X-Atlassian-Token: no-check` To prevent XSRF protection blocking the request, for more information see [Special Headers](#special-request-headers).  *  `Content-Type: image/image type` Valid image types are JPEG, GIF, or PNG.  For example:   `curl --request POST \\ --user email@example.com:<api_token> \\ --header 'X-Atlassian-Token: no-check' \\ --header 'Content-Type: image/< image_type>' \\ --data-binary \"<@/path/to/file/with/your/avatar>\" \\ --url 'https://your-domain.atlassian.net/rest/api/2/issuetype/{issueTypeId}'This`  The avatar is cropped to a square. If no crop parameters are specified, the square originates at the top left of the image. The length of the square's sides is set to the smaller of the height or width of the image.  The cropped image is then used to create avatars of 16x16, 24x24, 32x32, and 48x48 in size.  After creating the avatar, use [ Update issue type](#api-rest-api-2-issuetype-id-put) to set it as the issue type's displayed avatar.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the issue type.
$size = 56; // int | The length of each side of the crop region.
$body = NULL; // mixed
$x = 0; // int | The X coordinate of the top-left corner of the crop region.
$y = 0; // int | The Y coordinate of the top-left corner of the crop region.

try {
    $result = $apiInstance->createIssueTypeAvatar($id, $size, $body, $x, $y);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueTypesApi->createIssueTypeAvatar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the issue type. | |
| **size** | **int**| The length of each side of the crop region. | |
| **body** | **mixed**|  | |
| **x** | **int**| The X coordinate of the top-left corner of the crop region. | [optional] [default to 0] |
| **y** | **int**| The Y coordinate of the top-left corner of the crop region. | [optional] [default to 0] |

### Return type

[**\OpenAPI\Client\Model\Avatar**](../Model/Avatar.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteIssueType()`

```php
deleteIssueType($id, $alternative_issue_type_id)
```

Delete issue type

Deletes the issue type. If the issue type is in use, all uses are updated with the alternative issue type (`alternativeIssueTypeId`). A list of alternative issue types are obtained from the [Get alternative issue types](#api-rest-api-2-issuetype-id-alternatives-get) resource.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the issue type.
$alternative_issue_type_id = 'alternative_issue_type_id_example'; // string | The ID of the replacement issue type.

try {
    $apiInstance->deleteIssueType($id, $alternative_issue_type_id);
} catch (Exception $e) {
    echo 'Exception when calling IssueTypesApi->deleteIssueType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the issue type. | |
| **alternative_issue_type_id** | **string**| The ID of the replacement issue type. | [optional] |

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

## `getAlternativeIssueTypes()`

```php
getAlternativeIssueTypes($id): \OpenAPI\Client\Model\IssueTypeDetails[]
```

Get alternative issue types

Returns a list of issue types that can be used to replace the issue type. The alternative issue types are those assigned to the same workflow scheme, field configuration scheme, and screen scheme.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** None.

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


$apiInstance = new OpenAPI\Client\Api\IssueTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the issue type.

try {
    $result = $apiInstance->getAlternativeIssueTypes($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueTypesApi->getAlternativeIssueTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the issue type. | |

### Return type

[**\OpenAPI\Client\Model\IssueTypeDetails[]**](../Model/IssueTypeDetails.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIssueAllTypes()`

```php
getIssueAllTypes(): \OpenAPI\Client\Model\IssueTypeDetails[]
```

Get all issue types for user

Returns all issue types.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** Issue types are only returned as follows:   *  if the user has the *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg), all issue types are returned.  *  if the user has the *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for one or more projects, the issue types associated with the projects the user has permission to browse are returned.

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


$apiInstance = new OpenAPI\Client\Api\IssueTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getIssueAllTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueTypesApi->getIssueAllTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\IssueTypeDetails[]**](../Model/IssueTypeDetails.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIssueType()`

```php
getIssueType($id): \OpenAPI\Client\Model\IssueTypeDetails
```

Get issue type

Returns an issue type.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg) in a project the issue type is associated with or *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the issue type.

try {
    $result = $apiInstance->getIssueType($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueTypesApi->getIssueType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the issue type. | |

### Return type

[**\OpenAPI\Client\Model\IssueTypeDetails**](../Model/IssueTypeDetails.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIssueTypesForProject()`

```php
getIssueTypesForProject($project_id, $level): \OpenAPI\Client\Model\IssueTypeDetails[]
```

Get issue types for project

Returns issue types for a project.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg) in the relevant project or *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 56; // int | The ID of the project.
$level = 56; // int | The level of the issue type to filter by. Use:   *  `-1` for Subtask.  *  `0` for Base.  *  `1` for Epic.

try {
    $result = $apiInstance->getIssueTypesForProject($project_id, $level);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueTypesApi->getIssueTypesForProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| The ID of the project. | |
| **level** | **int**| The level of the issue type to filter by. Use:   *  &#x60;-1&#x60; for Subtask.  *  &#x60;0&#x60; for Base.  *  &#x60;1&#x60; for Epic. | [optional] |

### Return type

[**\OpenAPI\Client\Model\IssueTypeDetails[]**](../Model/IssueTypeDetails.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateIssueType()`

```php
updateIssueType($id, $issue_type_update_bean): \OpenAPI\Client\Model\IssueTypeDetails
```

Update issue type

Updates the issue type.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the issue type.
$issue_type_update_bean = {"avatarId":1,"description":"description","name":"name"}; // \OpenAPI\Client\Model\IssueTypeUpdateBean

try {
    $result = $apiInstance->updateIssueType($id, $issue_type_update_bean);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueTypesApi->updateIssueType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the issue type. | |
| **issue_type_update_bean** | [**\OpenAPI\Client\Model\IssueTypeUpdateBean**](../Model/IssueTypeUpdateBean.md)|  | |

### Return type

[**\OpenAPI\Client\Model\IssueTypeDetails**](../Model/IssueTypeDetails.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
