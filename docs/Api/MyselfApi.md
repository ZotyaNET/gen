# OpenAPI\Client\MyselfApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteLocale()**](MyselfApi.md#deleteLocale) | **DELETE** /rest/api/2/mypreferences/locale | Delete locale |
| [**getCurrentUser()**](MyselfApi.md#getCurrentUser) | **GET** /rest/api/2/myself | Get current user |
| [**getLocale()**](MyselfApi.md#getLocale) | **GET** /rest/api/2/mypreferences/locale | Get locale |
| [**getPreference()**](MyselfApi.md#getPreference) | **GET** /rest/api/2/mypreferences | Get preference |
| [**removePreference()**](MyselfApi.md#removePreference) | **DELETE** /rest/api/2/mypreferences | Delete preference |
| [**setLocale()**](MyselfApi.md#setLocale) | **PUT** /rest/api/2/mypreferences/locale | Set locale |
| [**setPreference()**](MyselfApi.md#setPreference) | **PUT** /rest/api/2/mypreferences | Set preference |


## `deleteLocale()`

```php
deleteLocale(): mixed
```

Delete locale

Deprecated, use [ Update a user profile](https://developer.atlassian.com/cloud/admin/user-management/rest/#api-users-account-id-manage-profile-patch) from the user management REST API instead.  Deletes the locale of the user, which restores the default setting.  **[Permissions](#permissions) required:** Permission to access Jira.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MyselfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->deleteLocale();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyselfApi->deleteLocale: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**mixed**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCurrentUser()`

```php
getCurrentUser($expand): \OpenAPI\Client\Model\User
```

Get current user

Returns details for the current user.  **[Permissions](#permissions) required:** Permission to access Jira.

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


$apiInstance = new OpenAPI\Client\Api\MyselfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$expand = 'expand_example'; // string | Use [expand](#expansion) to include additional information about user in the response. This parameter accepts a comma-separated list. Expand options include:   *  `groups` Returns all groups, including nested groups, the user belongs to.  *  `applicationRoles` Returns the application roles the user is assigned to.

try {
    $result = $apiInstance->getCurrentUser($expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyselfApi->getCurrentUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **expand** | **string**| Use [expand](#expansion) to include additional information about user in the response. This parameter accepts a comma-separated list. Expand options include:   *  &#x60;groups&#x60; Returns all groups, including nested groups, the user belongs to.  *  &#x60;applicationRoles&#x60; Returns the application roles the user is assigned to. | [optional] |

### Return type

[**\OpenAPI\Client\Model\User**](../Model/User.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLocale()`

```php
getLocale(): \OpenAPI\Client\Model\Locale
```

Get locale

Returns the locale for the user.  If the user has no language preference set (which is the default setting) or this resource is accessed anonymous, the browser locale detected by Jira is returned. Jira detects the browser locale using the *Accept-Language* header in the request. However, if this doesn't match a locale available Jira, the site default locale is returned.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** None.

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


$apiInstance = new OpenAPI\Client\Api\MyselfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getLocale();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyselfApi->getLocale: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Locale**](../Model/Locale.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPreference()`

```php
getPreference($key): string
```

Get preference

Returns the value of a preference of the current user.  Note that these keys are deprecated:   *  *jira.user.locale* The locale of the user. By default this is not set and the user takes the locale of the instance.  *  *jira.user.timezone* The time zone of the user. By default this is not set and the user takes the timezone of the instance.  Use [ Update a user profile](https://developer.atlassian.com/cloud/admin/user-management/rest/#api-users-account-id-manage-profile-patch) from the user management REST API to manage timezone and locale instead.  **[Permissions](#permissions) required:** Permission to access Jira.

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


$apiInstance = new OpenAPI\Client\Api\MyselfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | The key of the preference.

try {
    $result = $apiInstance->getPreference($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyselfApi->getPreference: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The key of the preference. | |

### Return type

**string**

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removePreference()`

```php
removePreference($key)
```

Delete preference

Deletes a preference of the user, which restores the default value of system defined settings.  Note that these keys are deprecated:   *  *jira.user.locale* The locale of the user. By default, not set. The user takes the instance locale.  *  *jira.user.timezone* The time zone of the user. By default, not set. The user takes the instance timezone.  Use [ Update a user profile](https://developer.atlassian.com/cloud/admin/user-management/rest/#api-users-account-id-manage-profile-patch) from the user management REST API to manage timezone and locale instead.  **[Permissions](#permissions) required:** Permission to access Jira.

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


$apiInstance = new OpenAPI\Client\Api\MyselfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | The key of the preference.

try {
    $apiInstance->removePreference($key);
} catch (Exception $e) {
    echo 'Exception when calling MyselfApi->removePreference: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The key of the preference. | |

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

## `setLocale()`

```php
setLocale($locale): mixed
```

Set locale

Deprecated, use [ Update a user profile](https://developer.atlassian.com/cloud/admin/user-management/rest/#api-users-account-id-manage-profile-patch) from the user management REST API instead.  Sets the locale of the user. The locale must be one supported by the instance of Jira.  **[Permissions](#permissions) required:** Permission to access Jira.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MyselfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$locale = {"locale":"en_US"}; // \OpenAPI\Client\Model\Locale | The locale defined in a LocaleBean.

try {
    $result = $apiInstance->setLocale($locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyselfApi->setLocale: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **locale** | [**\OpenAPI\Client\Model\Locale**](../Model/Locale.md)| The locale defined in a LocaleBean. | |

### Return type

**mixed**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setPreference()`

```php
setPreference($key, $body): mixed
```

Set preference

Creates a preference for the user or updates a preference's value by sending a plain text string. For example, `false`. An arbitrary preference can be created with the value containing up to 255 characters. In addition, the following keys define system preferences that can be set or created:   *  *user.notifications.mimetype* The mime type used in notifications sent to the user. Defaults to `html`.  *  *user.notify.own.changes* Whether the user gets notified of their own changes. Defaults to `false`.  *  *user.default.share.private* Whether new [ filters](https://confluence.atlassian.com/x/eQiiLQ) are set to private. Defaults to `true`.  *  *user.keyboard.shortcuts.disabled* Whether keyboard shortcuts are disabled. Defaults to `false`.  *  *user.autowatch.disabled* Whether the user automatically watches issues they create or add a comment to. By default, not set: the user takes the instance autowatch setting.  Note that these keys are deprecated:   *  *jira.user.locale* The locale of the user. By default, not set. The user takes the instance locale.  *  *jira.user.timezone* The time zone of the user. By default, not set. The user takes the instance timezone.  Use [ Update a user profile](https://developer.atlassian.com/cloud/admin/user-management/rest/#api-users-account-id-manage-profile-patch) from the user management REST API to manage timezone and locale instead.  **[Permissions](#permissions) required:** Permission to access Jira.

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


$apiInstance = new OpenAPI\Client\Api\MyselfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | The key of the preference. The maximum length is 255 characters.
$body = 'body_example'; // string | The value of the preference as a plain text string. The maximum length is 255 characters.

try {
    $result = $apiInstance->setPreference($key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyselfApi->setPreference: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The key of the preference. The maximum length is 255 characters. | |
| **body** | **string**| The value of the preference as a plain text string. The maximum length is 255 characters. | |

### Return type

**mixed**

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `text/plain`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
