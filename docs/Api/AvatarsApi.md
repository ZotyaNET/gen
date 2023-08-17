# OpenAPI\Client\AvatarsApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteAvatar()**](AvatarsApi.md#deleteAvatar) | **DELETE** /rest/api/2/universal_avatar/type/{type}/owner/{owningObjectId}/avatar/{id} | Delete avatar |
| [**getAllSystemAvatars()**](AvatarsApi.md#getAllSystemAvatars) | **GET** /rest/api/2/avatar/{type}/system | Get system avatars by type |
| [**getAvatarImageByID()**](AvatarsApi.md#getAvatarImageByID) | **GET** /rest/api/2/universal_avatar/view/type/{type}/avatar/{id} | Get avatar image by ID |
| [**getAvatarImageByOwner()**](AvatarsApi.md#getAvatarImageByOwner) | **GET** /rest/api/2/universal_avatar/view/type/{type}/owner/{entityId} | Get avatar image by owner |
| [**getAvatarImageByType()**](AvatarsApi.md#getAvatarImageByType) | **GET** /rest/api/2/universal_avatar/view/type/{type} | Get avatar image by type |
| [**getAvatars()**](AvatarsApi.md#getAvatars) | **GET** /rest/api/2/universal_avatar/type/{type}/owner/{entityId} | Get avatars |
| [**storeAvatar()**](AvatarsApi.md#storeAvatar) | **POST** /rest/api/2/universal_avatar/type/{type}/owner/{entityId} | Load avatar |


## `deleteAvatar()`

```php
deleteAvatar($type, $owning_object_id, $id)
```

Delete avatar

Deletes an avatar from a project or issue type.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\AvatarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string | The avatar type.
$owning_object_id = 'owning_object_id_example'; // string | The ID of the item the avatar is associated with.
$id = 56; // int | The ID of the avatar.

try {
    $apiInstance->deleteAvatar($type, $owning_object_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling AvatarsApi->deleteAvatar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**| The avatar type. | |
| **owning_object_id** | **string**| The ID of the item the avatar is associated with. | |
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

## `getAllSystemAvatars()`

```php
getAllSystemAvatars($type): \OpenAPI\Client\Model\SystemAvatars
```

Get system avatars by type

Returns a list of system avatar details by owner type, where the owner types are issue type, project, or user.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** None.

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


$apiInstance = new OpenAPI\Client\Api\AvatarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = project; // string | The avatar type.

try {
    $result = $apiInstance->getAllSystemAvatars($type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvatarsApi->getAllSystemAvatars: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**| The avatar type. | |

### Return type

[**\OpenAPI\Client\Model\SystemAvatars**](../Model/SystemAvatars.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAvatarImageByID()`

```php
getAvatarImageByID($type, $id, $size, $format)
```

Get avatar image by ID

Returns a project or issue type avatar image by ID.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:**   *  For system avatars, none.  *  For custom project avatars, *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project the avatar belongs to.  *  For custom issue type avatars, *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for at least one project the issue type is used in.

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


$apiInstance = new OpenAPI\Client\Api\AvatarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string | The icon type of the avatar.
$id = 56; // int | The ID of the avatar.
$size = 'size_example'; // string | The size of the avatar image. If not provided the default size is returned.
$format = 'format_example'; // string | The format to return the avatar image in. If not provided the original content format is returned.

try {
    $apiInstance->getAvatarImageByID($type, $id, $size, $format);
} catch (Exception $e) {
    echo 'Exception when calling AvatarsApi->getAvatarImageByID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**| The icon type of the avatar. | |
| **id** | **int**| The ID of the avatar. | |
| **size** | **string**| The size of the avatar image. If not provided the default size is returned. | [optional] |
| **format** | **string**| The format to return the avatar image in. If not provided the original content format is returned. | [optional] |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`, `application/json`, `image/png`, `image/svg+xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAvatarImageByOwner()`

```php
getAvatarImageByOwner($type, $entity_id, $size, $format)
```

Get avatar image by owner

Returns the avatar image for a project or issue type.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:**   *  For system avatars, none.  *  For custom project avatars, *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project the avatar belongs to.  *  For custom issue type avatars, *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for at least one project the issue type is used in.

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


$apiInstance = new OpenAPI\Client\Api\AvatarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string | The icon type of the avatar.
$entity_id = 'entity_id_example'; // string | The ID of the project or issue type the avatar belongs to.
$size = 'size_example'; // string | The size of the avatar image. If not provided the default size is returned.
$format = 'format_example'; // string | The format to return the avatar image in. If not provided the original content format is returned.

try {
    $apiInstance->getAvatarImageByOwner($type, $entity_id, $size, $format);
} catch (Exception $e) {
    echo 'Exception when calling AvatarsApi->getAvatarImageByOwner: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**| The icon type of the avatar. | |
| **entity_id** | **string**| The ID of the project or issue type the avatar belongs to. | |
| **size** | **string**| The size of the avatar image. If not provided the default size is returned. | [optional] |
| **format** | **string**| The format to return the avatar image in. If not provided the original content format is returned. | [optional] |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`, `application/json`, `image/png`, `image/svg+xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAvatarImageByType()`

```php
getAvatarImageByType($type, $size, $format)
```

Get avatar image by type

Returns the default project or issue type avatar image.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** None.

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


$apiInstance = new OpenAPI\Client\Api\AvatarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string | The icon type of the avatar.
$size = 'size_example'; // string | The size of the avatar image. If not provided the default size is returned.
$format = 'format_example'; // string | The format to return the avatar image in. If not provided the original content format is returned.

try {
    $apiInstance->getAvatarImageByType($type, $size, $format);
} catch (Exception $e) {
    echo 'Exception when calling AvatarsApi->getAvatarImageByType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**| The icon type of the avatar. | |
| **size** | **string**| The size of the avatar image. If not provided the default size is returned. | [optional] |
| **format** | **string**| The format to return the avatar image in. If not provided the original content format is returned. | [optional] |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`, `application/json`, `image/png`, `image/svg+xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAvatars()`

```php
getAvatars($type, $entity_id): \OpenAPI\Client\Model\Avatars
```

Get avatars

Returns the system and custom avatars for a project or issue type.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:**   *  for custom project avatars, *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project the avatar belongs to.  *  for custom issue type avatars, *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for at least one project the issue type is used in.  *  for system avatars, none.

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


$apiInstance = new OpenAPI\Client\Api\AvatarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string | The avatar type.
$entity_id = 'entity_id_example'; // string | The ID of the item the avatar is associated with.

try {
    $result = $apiInstance->getAvatars($type, $entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvatarsApi->getAvatars: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**| The avatar type. | |
| **entity_id** | **string**| The ID of the item the avatar is associated with. | |

### Return type

[**\OpenAPI\Client\Model\Avatars**](../Model/Avatars.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storeAvatar()`

```php
storeAvatar($type, $entity_id, $size, $body, $x, $y): \OpenAPI\Client\Model\Avatar
```

Load avatar

Loads a custom avatar for a project or issue type.  Specify the avatar's local file location in the body of the request. Also, include the following headers:   *  `X-Atlassian-Token: no-check` To prevent XSRF protection blocking the request, for more information see [Special Headers](#special-request-headers).  *  `Content-Type: image/image type` Valid image types are JPEG, GIF, or PNG.  For example:   `curl --request POST `  `--user email@example.com:<api_token> `  `--header 'X-Atlassian-Token: no-check' `  `--header 'Content-Type: image/< image_type>' `  `--data-binary \"<@/path/to/file/with/your/avatar>\" `  `--url 'https://your-domain.atlassian.net/rest/api/2/universal_avatar/type/{type}/owner/{entityId}'`  The avatar is cropped to a square. If no crop parameters are specified, the square originates at the top left of the image. The length of the square's sides is set to the smaller of the height or width of the image.  The cropped image is then used to create avatars of 16x16, 24x24, 32x32, and 48x48 in size.  After creating the avatar use:   *  [Update issue type](#api-rest-api-2-issuetype-id-put) to set it as the issue type's displayed avatar.  *  [Set project avatar](#api-rest-api-2-project-projectIdOrKey-avatar-put) to set it as the project's displayed avatar.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\AvatarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string | The avatar type.
$entity_id = 'entity_id_example'; // string | The ID of the item the avatar is associated with.
$size = 56; // int | The length of each side of the crop region.
$body = NULL; // mixed
$x = 0; // int | The X coordinate of the top-left corner of the crop region.
$y = 0; // int | The Y coordinate of the top-left corner of the crop region.

try {
    $result = $apiInstance->storeAvatar($type, $entity_id, $size, $body, $x, $y);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvatarsApi->storeAvatar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**| The avatar type. | |
| **entity_id** | **string**| The ID of the item the avatar is associated with. | |
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
