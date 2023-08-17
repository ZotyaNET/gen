# OpenAPI\Client\JiraSettingsApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAdvancedSettings()**](JiraSettingsApi.md#getAdvancedSettings) | **GET** /rest/api/2/application-properties/advanced-settings | Get advanced settings |
| [**getApplicationProperty()**](JiraSettingsApi.md#getApplicationProperty) | **GET** /rest/api/2/application-properties | Get application property |
| [**getConfiguration()**](JiraSettingsApi.md#getConfiguration) | **GET** /rest/api/2/configuration | Get global settings |
| [**setApplicationProperty()**](JiraSettingsApi.md#setApplicationProperty) | **PUT** /rest/api/2/application-properties/{id} | Set application property |


## `getAdvancedSettings()`

```php
getAdvancedSettings(): \OpenAPI\Client\Model\ApplicationProperty[]
```

Get advanced settings

Returns the application properties that are accessible on the *Advanced Settings* page. To navigate to the *Advanced Settings* page in Jira, choose the Jira icon > **Jira settings** > **System**, **General Configuration** and then click **Advanced Settings** (in the upper right).  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\JiraSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAdvancedSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JiraSettingsApi->getAdvancedSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ApplicationProperty[]**](../Model/ApplicationProperty.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApplicationProperty()`

```php
getApplicationProperty($key, $permission_level, $key_filter): \OpenAPI\Client\Model\ApplicationProperty[]
```

Get application property

Returns all application properties or an application property.  If you specify a value for the `key` parameter, then an application property is returned as an object (not in an array). Otherwise, an array of all editable application properties is returned. See [Set application property](#api-rest-api-2-application-properties-id-put) for descriptions of editable properties.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\JiraSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | The key of the application property.
$permission_level = 'permission_level_example'; // string | The permission level of all items being returned in the list.
$key_filter = 'key_filter_example'; // string | When a `key` isn't provided, this filters the list of results by the application property `key` using a regular expression. For example, using `jira.lf.*` will return all application properties with keys that start with *jira.lf.*.

try {
    $result = $apiInstance->getApplicationProperty($key, $permission_level, $key_filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JiraSettingsApi->getApplicationProperty: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The key of the application property. | [optional] |
| **permission_level** | **string**| The permission level of all items being returned in the list. | [optional] |
| **key_filter** | **string**| When a &#x60;key&#x60; isn&#39;t provided, this filters the list of results by the application property &#x60;key&#x60; using a regular expression. For example, using &#x60;jira.lf.*&#x60; will return all application properties with keys that start with *jira.lf.*. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApplicationProperty[]**](../Model/ApplicationProperty.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConfiguration()`

```php
getConfiguration(): \OpenAPI\Client\Model\Configuration
```

Get global settings

Returns the [global settings](https://confluence.atlassian.com/x/qYXKM) in Jira. These settings determine whether optional features (for example, subtasks, time tracking, and others) are enabled. If time tracking is enabled, this operation also returns the time tracking configuration.  **[Permissions](#permissions) required:** Permission to access Jira.

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


$apiInstance = new OpenAPI\Client\Api\JiraSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getConfiguration();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JiraSettingsApi->getConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Configuration**](../Model/Configuration.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setApplicationProperty()`

```php
setApplicationProperty($id, $simple_application_property_bean): \OpenAPI\Client\Model\ApplicationProperty
```

Set application property

Changes the value of an application property. For example, you can change the value of the `jira.clone.prefix` from its default value of *CLONE -* to *Clone -* if you prefer sentence case capitalization. Editable properties are described below along with their default values.  #### Advanced settings ####  The advanced settings below are also accessible in [Jira](https://confluence.atlassian.com/x/vYXKM).  | Key | Description | Default value |   | -- | -- | -- |   | `jira.clone.prefix` | The string of text prefixed to the title of a cloned issue. | `CLONE -` |   | `jira.date.picker.java.format` | The date format for the Java (server-side) generated dates. This must be the same as the `jira.date.picker.javascript.format` format setting. | `d/MMM/yy` |   | `jira.date.picker.javascript.format` | The date format for the JavaScript (client-side) generated dates. This must be the same as the `jira.date.picker.java.format` format setting. | `%e/%b/%y` |   | `jira.date.time.picker.java.format` | The date format for the Java (server-side) generated date times. This must be the same as the `jira.date.time.picker.javascript.format` format setting. | `dd/MMM/yy h:mm a` |   | `jira.date.time.picker.javascript.format` | The date format for the JavaScript (client-side) generated date times. This must be the same as the `jira.date.time.picker.java.format` format setting. | `%e/%b/%y %I:%M %p` |   | `jira.issue.actions.order` | The default order of actions (such as *Comments* or *Change history*) displayed on the issue view. | `asc` |   | `jira.table.cols.subtasks` | The columns to show while viewing subtask issues in a table. For example, a list of subtasks on an issue. | `issuetype, status, assignee, progress` |   | `jira.view.issue.links.sort.order` | The sort order of the list of issue links on the issue view. | `type, status, priority` |   | `jira.comment.collapsing.minimum.hidden` | The minimum number of comments required for comment collapsing to occur. A value of `0` disables comment collapsing. | `4` |   | `jira.newsletter.tip.delay.days` | The number of days before a prompt to sign up to the Jira Insiders newsletter is shown. A value of `-1` disables this feature. | `7` |     #### Look and feel ####  The settings listed below adjust the [look and feel](https://confluence.atlassian.com/x/VwCLLg).  | Key | Description | Default value |   | -- | -- | -- |   | `jira.lf.date.time` | The [ time format](https://docs.oracle.com/javase/6/docs/api/index.html?java/text/SimpleDateFormat.html). | `h:mm a` |   | `jira.lf.date.day` | The [ day format](https://docs.oracle.com/javase/6/docs/api/index.html?java/text/SimpleDateFormat.html). | `EEEE h:mm a` |   | `jira.lf.date.complete` | The [ date and time format](https://docs.oracle.com/javase/6/docs/api/index.html?java/text/SimpleDateFormat.html). | `dd/MMM/yy h:mm a` |   | `jira.lf.date.dmy` | The [ date format](https://docs.oracle.com/javase/6/docs/api/index.html?java/text/SimpleDateFormat.html). | `dd/MMM/yy` |   | `jira.date.time.picker.use.iso8061` | When enabled, sets Monday as the first day of the week in the date picker, as specified by the ISO8601 standard. | `false` |   | `jira.lf.logo.url` | The URL of the logo image file. | `/images/icon-jira-logo.png` |   | `jira.lf.logo.show.application.title` | Controls the visibility of the application title on the sidebar. | `false` |   | `jira.lf.favicon.url` | The URL of the favicon. | `/favicon.ico` |   | `jira.lf.favicon.hires.url` | The URL of the high-resolution favicon. | `/images/64jira.png` |   | `jira.lf.navigation.bgcolour` | The background color of the sidebar. | `#0747A6` |   | `jira.lf.navigation.highlightcolour` | The color of the text and logo of the sidebar. | `#DEEBFF` |   | `jira.lf.hero.button.base.bg.colour` | The background color of the hero button. | `#3b7fc4` |   | `jira.title` | The text for the application title. The application title can also be set in *General settings*. | `Jira` |   | `jira.option.globalsharing` | Whether filters and dashboards can be shared with anyone signed into Jira. | `true` |   | `xflow.product.suggestions.enabled` | Whether to expose product suggestions for other Atlassian products within Jira. | `true` |     #### Other settings ####  | Key | Description | Default value |   | -- | -- | -- |   | `jira.issuenav.criteria.autoupdate` | Whether instant updates to search criteria is active. | `true` |     *Note: Be careful when changing [application properties and advanced settings](https://confluence.atlassian.com/x/vYXKM).*  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\JiraSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The key of the application property to update.
$simple_application_property_bean = {"id":"jira.home","value":"/var/jira/jira-home"}; // \OpenAPI\Client\Model\SimpleApplicationPropertyBean

try {
    $result = $apiInstance->setApplicationProperty($id, $simple_application_property_bean);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JiraSettingsApi->setApplicationProperty: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The key of the application property to update. | |
| **simple_application_property_bean** | [**\OpenAPI\Client\Model\SimpleApplicationPropertyBean**](../Model/SimpleApplicationPropertyBean.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ApplicationProperty**](../Model/ApplicationProperty.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
