# OpenAPI\Client\ProjectAvatarsApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createProjectAvatar()**](ProjectAvatarsApi.md#createProjectAvatar) | **POST** /rest/api/2/project/{projectIdOrKey}/avatar2 | Load project avatar |
| [**deleteProjectAvatar()**](ProjectAvatarsApi.md#deleteProjectAvatar) | **DELETE** /rest/api/2/project/{projectIdOrKey}/avatar/{id} | Delete project avatar |
| [**getAllProjectAvatars()**](ProjectAvatarsApi.md#getAllProjectAvatars) | **GET** /rest/api/2/project/{projectIdOrKey}/avatars | Get all project avatars |
| [**updateProjectAvatar()**](ProjectAvatarsApi.md#updateProjectAvatar) | **PUT** /rest/api/2/project/{projectIdOrKey}/avatar | Set project avatar |


## `createProjectAvatar()`

```php
createProjectAvatar($project_id_or_key, $body, $x, $y, $size): \OpenAPI\Client\Model\Avatar
```

Load project avatar

Loads an avatar for a project.  Specify the avatar's local file location in the body of the request. Also, include the following headers:   *  `X-Atlassian-Token: no-check` To prevent XSRF protection blocking the request, for more information see [Special Headers](#special-request-headers).  *  `Content-Type: image/image type` Valid image types are JPEG, GIF, or PNG.  For example:   `curl --request POST `  `--user email@example.com:<api_token> `  `--header 'X-Atlassian-Token: no-check' `  `--header 'Content-Type: image/< image_type>' `  `--data-binary \"<@/path/to/file/with/your/avatar>\" `  `--url 'https://your-domain.atlassian.net/rest/api/2/project/{projectIdOrKey}/avatar2'`  The avatar is cropped to a square. If no crop parameters are specified, the square originates at the top left of the image. The length of the square's sides is set to the smaller of the height or width of the image.  The cropped image is then used to create avatars of 16x16, 24x24, 32x32, and 48x48 in size.  After creating the avatar use [Set project avatar](#api-rest-api-2-project-projectIdOrKey-avatar-put) to set it as the project's displayed avatar.  **[Permissions](#permissions) required:** *Administer projects* [project permission](https://confluence.atlassian.com/x/yodKLg).

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


$apiInstance = new OpenAPI\Client\Api\ProjectAvatarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id_or_key = 'project_id_or_key_example'; // string | The ID or (case-sensitive) key of the project.
$body = NULL; // mixed
$x = 0; // int | The X coordinate of the top-left corner of the crop region.
$y = 0; // int | The Y coordinate of the top-left corner of the crop region.
$size = 56; // int | The length of each side of the crop region.

try {
    $result = $apiInstance->createProjectAvatar($project_id_or_key, $body, $x, $y, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectAvatarsApi->createProjectAvatar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id_or_key** | **string**| The ID or (case-sensitive) key of the project. | |
| **body** | **mixed**|  | |
| **x** | **int**| The X coordinate of the top-left corner of the crop region. | [optional] [default to 0] |
| **y** | **int**| The Y coordinate of the top-left corner of the crop region. | [optional] [default to 0] |
| **size** | **int**| The length of each side of the crop region. | [optional] |

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

## `deleteProjectAvatar()`

```php
deleteProjectAvatar($project_id_or_key, $id)
```

Delete project avatar

Deletes a custom avatar from a project. Note that system avatars cannot be deleted.  **[Permissions](#permissions) required:** *Administer projects* [project permission](https://confluence.atlassian.com/x/yodKLg).

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


$apiInstance = new OpenAPI\Client\Api\ProjectAvatarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id_or_key = 'project_id_or_key_example'; // string | The project ID or (case-sensitive) key.
$id = 56; // int | The ID of the avatar.

try {
    $apiInstance->deleteProjectAvatar($project_id_or_key, $id);
} catch (Exception $e) {
    echo 'Exception when calling ProjectAvatarsApi->deleteProjectAvatar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id_or_key** | **string**| The project ID or (case-sensitive) key. | |
| **id** | **int**| The ID of the avatar. | |

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

## `getAllProjectAvatars()`

```php
getAllProjectAvatars($project_id_or_key): \OpenAPI\Client\Model\ProjectAvatars
```

Get all project avatars

Returns all project avatars, grouped by system and custom avatars.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project.

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


$apiInstance = new OpenAPI\Client\Api\ProjectAvatarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id_or_key = 'project_id_or_key_example'; // string | The ID or (case-sensitive) key of the project.

try {
    $result = $apiInstance->getAllProjectAvatars($project_id_or_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectAvatarsApi->getAllProjectAvatars: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id_or_key** | **string**| The ID or (case-sensitive) key of the project. | |

### Return type

[**\OpenAPI\Client\Model\ProjectAvatars**](../Model/ProjectAvatars.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProjectAvatar()`

```php
updateProjectAvatar($project_id_or_key, $request_body): mixed
```

Set project avatar

Sets the avatar displayed for a project.  Use [Load project avatar](#api-rest-api-2-project-projectIdOrKey-avatar2-post) to store avatars against the project, before using this operation to set the displayed avatar.  **[Permissions](#permissions) required:** *Administer projects* [project permission](https://confluence.atlassian.com/x/yodKLg).

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


$apiInstance = new OpenAPI\Client\Api\ProjectAvatarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id_or_key = 'project_id_or_key_example'; // string | The ID or (case-sensitive) key of the project.
$request_body = {"id":"10010"}; // array<string,mixed>

try {
    $result = $apiInstance->updateProjectAvatar($project_id_or_key, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectAvatarsApi->updateProjectAvatar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id_or_key** | **string**| The ID or (case-sensitive) key of the project. | |
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
