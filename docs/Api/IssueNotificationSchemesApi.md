# OpenAPI\Client\IssueNotificationSchemesApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addNotifications()**](IssueNotificationSchemesApi.md#addNotifications) | **PUT** /rest/api/2/notificationscheme/{id}/notification | Add notifications to notification scheme |
| [**createNotificationScheme()**](IssueNotificationSchemesApi.md#createNotificationScheme) | **POST** /rest/api/2/notificationscheme | Create notification scheme |
| [**deleteNotificationScheme()**](IssueNotificationSchemesApi.md#deleteNotificationScheme) | **DELETE** /rest/api/2/notificationscheme/{notificationSchemeId} | Delete notification scheme |
| [**getNotificationScheme()**](IssueNotificationSchemesApi.md#getNotificationScheme) | **GET** /rest/api/2/notificationscheme/{id} | Get notification scheme |
| [**getNotificationSchemeToProjectMappings()**](IssueNotificationSchemesApi.md#getNotificationSchemeToProjectMappings) | **GET** /rest/api/2/notificationscheme/project | Get projects using notification schemes paginated |
| [**getNotificationSchemes()**](IssueNotificationSchemesApi.md#getNotificationSchemes) | **GET** /rest/api/2/notificationscheme | Get notification schemes paginated |
| [**removeNotificationFromNotificationScheme()**](IssueNotificationSchemesApi.md#removeNotificationFromNotificationScheme) | **DELETE** /rest/api/2/notificationscheme/{notificationSchemeId}/notification/{notificationId} | Remove notification from notification scheme |
| [**updateNotificationScheme()**](IssueNotificationSchemesApi.md#updateNotificationScheme) | **PUT** /rest/api/2/notificationscheme/{id} | Update notification scheme |


## `addNotifications()`

```php
addNotifications($id, $request_body): mixed
```

Add notifications to notification scheme

Adds notifications to a notification scheme. You can add up to 1000 notifications per request.  *Deprecated: The notification type `EmailAddress` is no longer supported in Cloud. Refer to the [changelog](https://developer.atlassian.com/cloud/jira/platform/changelog/#CHANGE-1031) for more details.*  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueNotificationSchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the notification scheme.
$request_body = {"notificationSchemeEvents":[{"event":{"id":"1"},"notifications":[{"notificationType":"Group","parameter":"jira-administrators"}]}]}; // array<string,mixed>

try {
    $result = $apiInstance->addNotifications($id, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueNotificationSchemesApi->addNotifications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the notification scheme. | |
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

## `createNotificationScheme()`

```php
createNotificationScheme($request_body): \OpenAPI\Client\Model\NotificationSchemeId
```

Create notification scheme

Creates a notification scheme with notifications. You can create up to 1000 notifications per request.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueNotificationSchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_body = {"description":"My new scheme description","name":"My new notification scheme","notificationSchemeEvents":[{"event":{"id":"1"},"notifications":[{"notificationType":"Group","parameter":"jira-administrators"}]}]}; // array<string,mixed>

try {
    $result = $apiInstance->createNotificationScheme($request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueNotificationSchemesApi->createNotificationScheme: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_body** | [**array<string,mixed>**](../Model/mixed.md)|  | |

### Return type

[**\OpenAPI\Client\Model\NotificationSchemeId**](../Model/NotificationSchemeId.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteNotificationScheme()`

```php
deleteNotificationScheme($notification_scheme_id): mixed
```

Delete notification scheme

Deletes a notification scheme.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueNotificationSchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$notification_scheme_id = 'notification_scheme_id_example'; // string | The ID of the notification scheme.

try {
    $result = $apiInstance->deleteNotificationScheme($notification_scheme_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueNotificationSchemesApi->deleteNotificationScheme: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **notification_scheme_id** | **string**| The ID of the notification scheme. | |

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

## `getNotificationScheme()`

```php
getNotificationScheme($id, $expand): \OpenAPI\Client\Model\NotificationScheme
```

Get notification scheme

Returns a [notification scheme](https://confluence.atlassian.com/x/8YdKLg), including the list of events and the recipients who will receive notifications for those events.  **[Permissions](#permissions) required:** Permission to access Jira, however, the user must have permission to administer at least one project associated with the notification scheme.

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


$apiInstance = new OpenAPI\Client\Api\IssueNotificationSchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the notification scheme. Use [Get notification schemes paginated](#api-rest-api-2-notificationscheme-get) to get a list of notification scheme IDs.
$expand = 'expand_example'; // string | Use [expand](#expansion) to include additional information in the response. This parameter accepts a comma-separated list. Expand options include:   *  `all` Returns all expandable information  *  `field` Returns information about any custom fields assigned to receive an event  *  `group` Returns information about any groups assigned to receive an event  *  `notificationSchemeEvents` Returns a list of event associations. This list is returned for all expandable information  *  `projectRole` Returns information about any project roles assigned to receive an event  *  `user` Returns information about any users assigned to receive an event

try {
    $result = $apiInstance->getNotificationScheme($id, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueNotificationSchemesApi->getNotificationScheme: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the notification scheme. Use [Get notification schemes paginated](#api-rest-api-2-notificationscheme-get) to get a list of notification scheme IDs. | |
| **expand** | **string**| Use [expand](#expansion) to include additional information in the response. This parameter accepts a comma-separated list. Expand options include:   *  &#x60;all&#x60; Returns all expandable information  *  &#x60;field&#x60; Returns information about any custom fields assigned to receive an event  *  &#x60;group&#x60; Returns information about any groups assigned to receive an event  *  &#x60;notificationSchemeEvents&#x60; Returns a list of event associations. This list is returned for all expandable information  *  &#x60;projectRole&#x60; Returns information about any project roles assigned to receive an event  *  &#x60;user&#x60; Returns information about any users assigned to receive an event | [optional] |

### Return type

[**\OpenAPI\Client\Model\NotificationScheme**](../Model/NotificationScheme.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNotificationSchemeToProjectMappings()`

```php
getNotificationSchemeToProjectMappings($start_at, $max_results, $notification_scheme_id, $project_id): \OpenAPI\Client\Model\PageBeanNotificationSchemeAndProjectMappingJsonBean
```

Get projects using notification schemes paginated

Returns a [paginated](#pagination) mapping of project that have notification scheme assigned. You can provide either one or multiple notification scheme IDs or project IDs to filter by. If you don't provide any, this will return a list of all mappings. Note that only company-managed (classic) projects are supported. This is because team-managed projects don't have a concept of a default notification scheme. The mappings are ordered by projectId.  **[Permissions](#permissions) required:** Permission to access Jira.

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


$apiInstance = new OpenAPI\Client\Api\IssueNotificationSchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_at = '0'; // string | The index of the first item to return in a page of results (page offset).
$max_results = '50'; // string | The maximum number of items to return per page.
$notification_scheme_id = array('notification_scheme_id_example'); // string[] | The list of notifications scheme IDs to be filtered out
$project_id = array('project_id_example'); // string[] | The list of project IDs to be filtered out

try {
    $result = $apiInstance->getNotificationSchemeToProjectMappings($start_at, $max_results, $notification_scheme_id, $project_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueNotificationSchemesApi->getNotificationSchemeToProjectMappings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_at** | **string**| The index of the first item to return in a page of results (page offset). | [optional] [default to &#39;0&#39;] |
| **max_results** | **string**| The maximum number of items to return per page. | [optional] [default to &#39;50&#39;] |
| **notification_scheme_id** | [**string[]**](../Model/string.md)| The list of notifications scheme IDs to be filtered out | [optional] |
| **project_id** | [**string[]**](../Model/string.md)| The list of project IDs to be filtered out | [optional] |

### Return type

[**\OpenAPI\Client\Model\PageBeanNotificationSchemeAndProjectMappingJsonBean**](../Model/PageBeanNotificationSchemeAndProjectMappingJsonBean.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNotificationSchemes()`

```php
getNotificationSchemes($start_at, $max_results, $id, $project_id, $only_default, $expand): \OpenAPI\Client\Model\PageBeanNotificationScheme
```

Get notification schemes paginated

Returns a [paginated](#pagination) list of [notification schemes](https://confluence.atlassian.com/x/8YdKLg) ordered by the display name.  *Note that you should allow for events without recipients to appear in responses.*  **[Permissions](#permissions) required:** Permission to access Jira, however, the user must have permission to administer at least one project associated with a notification scheme for it to be returned.

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


$apiInstance = new OpenAPI\Client\Api\IssueNotificationSchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_at = '0'; // string | The index of the first item to return in a page of results (page offset).
$max_results = '50'; // string | The maximum number of items to return per page.
$id = array('id_example'); // string[] | The list of notification schemes IDs to be filtered by
$project_id = array('project_id_example'); // string[] | The list of projects IDs to be filtered by
$only_default = false; // bool | When set to true, returns only the default notification scheme. If you provide project IDs not associated with the default, returns an empty page. The default value is false.
$expand = 'expand_example'; // string | Use [expand](#expansion) to include additional information in the response. This parameter accepts a comma-separated list. Expand options include:   *  `all` Returns all expandable information  *  `field` Returns information about any custom fields assigned to receive an event  *  `group` Returns information about any groups assigned to receive an event  *  `notificationSchemeEvents` Returns a list of event associations. This list is returned for all expandable information  *  `projectRole` Returns information about any project roles assigned to receive an event  *  `user` Returns information about any users assigned to receive an event

try {
    $result = $apiInstance->getNotificationSchemes($start_at, $max_results, $id, $project_id, $only_default, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueNotificationSchemesApi->getNotificationSchemes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_at** | **string**| The index of the first item to return in a page of results (page offset). | [optional] [default to &#39;0&#39;] |
| **max_results** | **string**| The maximum number of items to return per page. | [optional] [default to &#39;50&#39;] |
| **id** | [**string[]**](../Model/string.md)| The list of notification schemes IDs to be filtered by | [optional] |
| **project_id** | [**string[]**](../Model/string.md)| The list of projects IDs to be filtered by | [optional] |
| **only_default** | **bool**| When set to true, returns only the default notification scheme. If you provide project IDs not associated with the default, returns an empty page. The default value is false. | [optional] [default to false] |
| **expand** | **string**| Use [expand](#expansion) to include additional information in the response. This parameter accepts a comma-separated list. Expand options include:   *  &#x60;all&#x60; Returns all expandable information  *  &#x60;field&#x60; Returns information about any custom fields assigned to receive an event  *  &#x60;group&#x60; Returns information about any groups assigned to receive an event  *  &#x60;notificationSchemeEvents&#x60; Returns a list of event associations. This list is returned for all expandable information  *  &#x60;projectRole&#x60; Returns information about any project roles assigned to receive an event  *  &#x60;user&#x60; Returns information about any users assigned to receive an event | [optional] |

### Return type

[**\OpenAPI\Client\Model\PageBeanNotificationScheme**](../Model/PageBeanNotificationScheme.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeNotificationFromNotificationScheme()`

```php
removeNotificationFromNotificationScheme($notification_scheme_id, $notification_id): mixed
```

Remove notification from notification scheme

Removes a notification from a notification scheme.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueNotificationSchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$notification_scheme_id = 'notification_scheme_id_example'; // string | The ID of the notification scheme.
$notification_id = 'notification_id_example'; // string | The ID of the notification.

try {
    $result = $apiInstance->removeNotificationFromNotificationScheme($notification_scheme_id, $notification_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueNotificationSchemesApi->removeNotificationFromNotificationScheme: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **notification_scheme_id** | **string**| The ID of the notification scheme. | |
| **notification_id** | **string**| The ID of the notification. | |

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

## `updateNotificationScheme()`

```php
updateNotificationScheme($id, $request_body): mixed
```

Update notification scheme

Updates a notification scheme.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueNotificationSchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the notification scheme.
$request_body = {"description":"My updated notification scheme description","name":"My updated notification scheme"}; // array<string,mixed>

try {
    $result = $apiInstance->updateNotificationScheme($id, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueNotificationSchemesApi->updateNotificationScheme: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the notification scheme. | |
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
