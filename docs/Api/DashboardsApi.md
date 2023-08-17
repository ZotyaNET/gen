# OpenAPI\Client\DashboardsApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addGadget()**](DashboardsApi.md#addGadget) | **POST** /rest/api/2/dashboard/{dashboardId}/gadget | Add gadget to dashboard |
| [**copyDashboard()**](DashboardsApi.md#copyDashboard) | **POST** /rest/api/2/dashboard/{id}/copy | Copy dashboard |
| [**createDashboard()**](DashboardsApi.md#createDashboard) | **POST** /rest/api/2/dashboard | Create dashboard |
| [**deleteDashboard()**](DashboardsApi.md#deleteDashboard) | **DELETE** /rest/api/2/dashboard/{id} | Delete dashboard |
| [**deleteDashboardItemProperty()**](DashboardsApi.md#deleteDashboardItemProperty) | **DELETE** /rest/api/2/dashboard/{dashboardId}/items/{itemId}/properties/{propertyKey} | Delete dashboard item property |
| [**getAllAvailableDashboardGadgets()**](DashboardsApi.md#getAllAvailableDashboardGadgets) | **GET** /rest/api/2/dashboard/gadgets | Get available gadgets |
| [**getAllDashboards()**](DashboardsApi.md#getAllDashboards) | **GET** /rest/api/2/dashboard | Get all dashboards |
| [**getAllGadgets()**](DashboardsApi.md#getAllGadgets) | **GET** /rest/api/2/dashboard/{dashboardId}/gadget | Get gadgets |
| [**getDashboard()**](DashboardsApi.md#getDashboard) | **GET** /rest/api/2/dashboard/{id} | Get dashboard |
| [**getDashboardItemProperty()**](DashboardsApi.md#getDashboardItemProperty) | **GET** /rest/api/2/dashboard/{dashboardId}/items/{itemId}/properties/{propertyKey} | Get dashboard item property |
| [**getDashboardItemPropertyKeys()**](DashboardsApi.md#getDashboardItemPropertyKeys) | **GET** /rest/api/2/dashboard/{dashboardId}/items/{itemId}/properties | Get dashboard item property keys |
| [**getDashboardsPaginated()**](DashboardsApi.md#getDashboardsPaginated) | **GET** /rest/api/2/dashboard/search | Search for dashboards |
| [**removeGadget()**](DashboardsApi.md#removeGadget) | **DELETE** /rest/api/2/dashboard/{dashboardId}/gadget/{gadgetId} | Remove gadget from dashboard |
| [**setDashboardItemProperty()**](DashboardsApi.md#setDashboardItemProperty) | **PUT** /rest/api/2/dashboard/{dashboardId}/items/{itemId}/properties/{propertyKey} | Set dashboard item property |
| [**updateDashboard()**](DashboardsApi.md#updateDashboard) | **PUT** /rest/api/2/dashboard/{id} | Update dashboard |
| [**updateGadget()**](DashboardsApi.md#updateGadget) | **PUT** /rest/api/2/dashboard/{dashboardId}/gadget/{gadgetId} | Update gadget on dashboard |


## `addGadget()`

```php
addGadget($dashboard_id, $dashboard_gadget_settings): \OpenAPI\Client\Model\DashboardGadget
```

Add gadget to dashboard

Adds a gadget to a dashboard.  **[Permissions](#permissions) required:** None.

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


$apiInstance = new OpenAPI\Client\Api\DashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dashboard_id = 56; // int | The ID of the dashboard.
$dashboard_gadget_settings = {"color":"blue","ignoreUriAndModuleKeyValidation":false,"moduleKey":"com.atlassian.plugins.atlassian-connect-plugin:com.atlassian.connect.node.sample-addon__sample-dashboard-item","position":{"column":1,"row":0},"title":"Issue statistics"}; // \OpenAPI\Client\Model\DashboardGadgetSettings

try {
    $result = $apiInstance->addGadget($dashboard_id, $dashboard_gadget_settings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardsApi->addGadget: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dashboard_id** | **int**| The ID of the dashboard. | |
| **dashboard_gadget_settings** | [**\OpenAPI\Client\Model\DashboardGadgetSettings**](../Model/DashboardGadgetSettings.md)|  | |

### Return type

[**\OpenAPI\Client\Model\DashboardGadget**](../Model/DashboardGadget.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `copyDashboard()`

```php
copyDashboard($id, $dashboard_details): \OpenAPI\Client\Model\Dashboard
```

Copy dashboard

Copies a dashboard. Any values provided in the `dashboard` parameter replace those in the copied dashboard.  **[Permissions](#permissions) required:** None  The dashboard to be copied must be owned by or shared with the user.

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


$apiInstance = new OpenAPI\Client\Api\DashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$dashboard_details = {"description":"A dashboard to help auditors identify sample of issues to check.","editPermissions":[],"name":"Auditors dashboard","sharePermissions":[{"type":"global"}]}; // \OpenAPI\Client\Model\DashboardDetails | Dashboard details.

try {
    $result = $apiInstance->copyDashboard($id, $dashboard_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardsApi->copyDashboard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **dashboard_details** | [**\OpenAPI\Client\Model\DashboardDetails**](../Model/DashboardDetails.md)| Dashboard details. | |

### Return type

[**\OpenAPI\Client\Model\Dashboard**](../Model/Dashboard.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDashboard()`

```php
createDashboard($dashboard_details): \OpenAPI\Client\Model\Dashboard
```

Create dashboard

Creates a dashboard.  **[Permissions](#permissions) required:** None.

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


$apiInstance = new OpenAPI\Client\Api\DashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dashboard_details = {"description":"A dashboard to help auditors identify sample of issues to check.","editPermissions":[],"name":"Auditors dashboard","sharePermissions":[{"type":"global"}]}; // \OpenAPI\Client\Model\DashboardDetails | Dashboard details.

try {
    $result = $apiInstance->createDashboard($dashboard_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardsApi->createDashboard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dashboard_details** | [**\OpenAPI\Client\Model\DashboardDetails**](../Model/DashboardDetails.md)| Dashboard details. | |

### Return type

[**\OpenAPI\Client\Model\Dashboard**](../Model/Dashboard.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDashboard()`

```php
deleteDashboard($id)
```

Delete dashboard

Deletes a dashboard.  **[Permissions](#permissions) required:** None  The dashboard to be deleted must be owned by the user.

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


$apiInstance = new OpenAPI\Client\Api\DashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the dashboard.

try {
    $apiInstance->deleteDashboard($id);
} catch (Exception $e) {
    echo 'Exception when calling DashboardsApi->deleteDashboard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the dashboard. | |

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

## `deleteDashboardItemProperty()`

```php
deleteDashboardItemProperty($dashboard_id, $item_id, $property_key)
```

Delete dashboard item property

Deletes a dashboard item property.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** The user must be the owner of the dashboard. Note, users with the *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg) are considered owners of the System dashboard.

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


$apiInstance = new OpenAPI\Client\Api\DashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dashboard_id = 'dashboard_id_example'; // string | The ID of the dashboard.
$item_id = 'item_id_example'; // string | The ID of the dashboard item.
$property_key = 'property_key_example'; // string | The key of the dashboard item property.

try {
    $apiInstance->deleteDashboardItemProperty($dashboard_id, $item_id, $property_key);
} catch (Exception $e) {
    echo 'Exception when calling DashboardsApi->deleteDashboardItemProperty: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dashboard_id** | **string**| The ID of the dashboard. | |
| **item_id** | **string**| The ID of the dashboard item. | |
| **property_key** | **string**| The key of the dashboard item property. | |

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

## `getAllAvailableDashboardGadgets()`

```php
getAllAvailableDashboardGadgets(): \OpenAPI\Client\Model\AvailableDashboardGadgetsResponse
```

Get available gadgets

Gets a list of all available gadgets that can be added to all dashboards.  **[Permissions](#permissions) required:** None.

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


$apiInstance = new OpenAPI\Client\Api\DashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllAvailableDashboardGadgets();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardsApi->getAllAvailableDashboardGadgets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\AvailableDashboardGadgetsResponse**](../Model/AvailableDashboardGadgetsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllDashboards()`

```php
getAllDashboards($filter, $start_at, $max_results): \OpenAPI\Client\Model\PageOfDashboards
```

Get all dashboards

Returns a list of dashboards owned by or shared with the user. The list may be filtered to include only favorite or owned dashboards.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** None.

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


$apiInstance = new OpenAPI\Client\Api\DashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string | The filter applied to the list of dashboards. Valid values are:   *  `favourite` Returns dashboards the user has marked as favorite.  *  `my` Returns dashboards owned by the user.
$start_at = 0; // int | The index of the first item to return in a page of results (page offset).
$max_results = 20; // int | The maximum number of items to return per page.

try {
    $result = $apiInstance->getAllDashboards($filter, $start_at, $max_results);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardsApi->getAllDashboards: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**| The filter applied to the list of dashboards. Valid values are:   *  &#x60;favourite&#x60; Returns dashboards the user has marked as favorite.  *  &#x60;my&#x60; Returns dashboards owned by the user. | [optional] |
| **start_at** | **int**| The index of the first item to return in a page of results (page offset). | [optional] [default to 0] |
| **max_results** | **int**| The maximum number of items to return per page. | [optional] [default to 20] |

### Return type

[**\OpenAPI\Client\Model\PageOfDashboards**](../Model/PageOfDashboards.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllGadgets()`

```php
getAllGadgets($dashboard_id, $module_key, $uri, $gadget_id): \OpenAPI\Client\Model\DashboardGadgetResponse
```

Get gadgets

Returns a list of dashboard gadgets on a dashboard.  This operation returns:   *  Gadgets from a list of IDs, when `id` is set.  *  Gadgets with a module key, when `moduleKey` is set.  *  Gadgets from a list of URIs, when `uri` is set.  *  All gadgets, when no other parameters are set.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** None.

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


$apiInstance = new OpenAPI\Client\Api\DashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dashboard_id = 56; // int | The ID of the dashboard.
$module_key = array('module_key_example'); // string[] | The list of gadgets module keys. To include multiple module keys, separate module keys with ampersand: `moduleKey=key:one&moduleKey=key:two`.
$uri = array('uri_example'); // string[] | The list of gadgets URIs. To include multiple URIs, separate URIs with ampersand: `uri=/rest/example/uri/1&uri=/rest/example/uri/2`.
$gadget_id = array(56); // int[] | The list of gadgets IDs. To include multiple IDs, separate IDs with ampersand: `gadgetId=10000&gadgetId=10001`.

try {
    $result = $apiInstance->getAllGadgets($dashboard_id, $module_key, $uri, $gadget_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardsApi->getAllGadgets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dashboard_id** | **int**| The ID of the dashboard. | |
| **module_key** | [**string[]**](../Model/string.md)| The list of gadgets module keys. To include multiple module keys, separate module keys with ampersand: &#x60;moduleKey&#x3D;key:one&amp;moduleKey&#x3D;key:two&#x60;. | [optional] |
| **uri** | [**string[]**](../Model/string.md)| The list of gadgets URIs. To include multiple URIs, separate URIs with ampersand: &#x60;uri&#x3D;/rest/example/uri/1&amp;uri&#x3D;/rest/example/uri/2&#x60;. | [optional] |
| **gadget_id** | [**int[]**](../Model/int.md)| The list of gadgets IDs. To include multiple IDs, separate IDs with ampersand: &#x60;gadgetId&#x3D;10000&amp;gadgetId&#x3D;10001&#x60;. | [optional] |

### Return type

[**\OpenAPI\Client\Model\DashboardGadgetResponse**](../Model/DashboardGadgetResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDashboard()`

```php
getDashboard($id): \OpenAPI\Client\Model\Dashboard
```

Get dashboard

Returns a dashboard.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** None.  However, to get a dashboard, the dashboard must be shared with the user or the user must own it. Note, users with the *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg) are considered owners of the System dashboard. The System dashboard is considered to be shared with all other users.

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


$apiInstance = new OpenAPI\Client\Api\DashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the dashboard.

try {
    $result = $apiInstance->getDashboard($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardsApi->getDashboard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the dashboard. | |

### Return type

[**\OpenAPI\Client\Model\Dashboard**](../Model/Dashboard.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDashboardItemProperty()`

```php
getDashboardItemProperty($dashboard_id, $item_id, $property_key): \OpenAPI\Client\Model\EntityProperty
```

Get dashboard item property

Returns the key and value of a dashboard item property.  A dashboard item enables an app to add user-specific information to a user dashboard. Dashboard items are exposed to users as gadgets that users can add to their dashboards. For more information on how users do this, see [Adding and customizing gadgets](https://confluence.atlassian.com/x/7AeiLQ).  When an app creates a dashboard item it registers a callback to receive the dashboard item ID. The callback fires whenever the item is rendered or, where the item is configurable, the user edits the item. The app then uses this resource to store the item's content or configuration details. For more information on working with dashboard items, see [ Building a dashboard item for a JIRA Connect add-on](https://developer.atlassian.com/server/jira/platform/guide-building-a-dashboard-item-for-a-jira-connect-add-on-33746254/) and the [Dashboard Item](https://developer.atlassian.com/cloud/jira/platform/modules/dashboard-item/) documentation.  There is no resource to set or get dashboard items.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** The user must be the owner of the dashboard or have the dashboard shared with them. Note, users with the *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg) are considered owners of the System dashboard. The System dashboard is considered to be shared with all other users, and is accessible to anonymous users when Jira’s anonymous access is permitted.

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


$apiInstance = new OpenAPI\Client\Api\DashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dashboard_id = 'dashboard_id_example'; // string | The ID of the dashboard.
$item_id = 'item_id_example'; // string | The ID of the dashboard item.
$property_key = 'property_key_example'; // string | The key of the dashboard item property.

try {
    $result = $apiInstance->getDashboardItemProperty($dashboard_id, $item_id, $property_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardsApi->getDashboardItemProperty: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dashboard_id** | **string**| The ID of the dashboard. | |
| **item_id** | **string**| The ID of the dashboard item. | |
| **property_key** | **string**| The key of the dashboard item property. | |

### Return type

[**\OpenAPI\Client\Model\EntityProperty**](../Model/EntityProperty.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDashboardItemPropertyKeys()`

```php
getDashboardItemPropertyKeys($dashboard_id, $item_id): \OpenAPI\Client\Model\PropertyKeys
```

Get dashboard item property keys

Returns the keys of all properties for a dashboard item.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** The user must be the owner of the dashboard or have the dashboard shared with them. Note, users with the *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg) are considered owners of the System dashboard. The System dashboard is considered to be shared with all other users, and is accessible to anonymous users when Jira’s anonymous access is permitted.

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


$apiInstance = new OpenAPI\Client\Api\DashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dashboard_id = 'dashboard_id_example'; // string | The ID of the dashboard.
$item_id = 'item_id_example'; // string | The ID of the dashboard item.

try {
    $result = $apiInstance->getDashboardItemPropertyKeys($dashboard_id, $item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardsApi->getDashboardItemPropertyKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dashboard_id** | **string**| The ID of the dashboard. | |
| **item_id** | **string**| The ID of the dashboard item. | |

### Return type

[**\OpenAPI\Client\Model\PropertyKeys**](../Model/PropertyKeys.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDashboardsPaginated()`

```php
getDashboardsPaginated($dashboard_name, $account_id, $owner, $groupname, $group_id, $project_id, $order_by, $start_at, $max_results, $status, $expand): \OpenAPI\Client\Model\PageBeanDashboard
```

Search for dashboards

Returns a [paginated](#pagination) list of dashboards. This operation is similar to [Get dashboards](#api-rest-api-2-dashboard-get) except that the results can be refined to include dashboards that have specific attributes. For example, dashboards with a particular name. When multiple attributes are specified only filters matching all attributes are returned.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** The following dashboards that match the query parameters are returned:   *  Dashboards owned by the user. Not returned for anonymous users.  *  Dashboards shared with a group that the user is a member of. Not returned for anonymous users.  *  Dashboards shared with a private project that the user can browse. Not returned for anonymous users.  *  Dashboards shared with a public project.  *  Dashboards shared with the public.

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


$apiInstance = new OpenAPI\Client\Api\DashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dashboard_name = 'dashboard_name_example'; // string | String used to perform a case-insensitive partial match with `name`.
$account_id = 'account_id_example'; // string | User account ID used to return dashboards with the matching `owner.accountId`. This parameter cannot be used with the `owner` parameter.
$owner = 'owner_example'; // string | This parameter is deprecated because of privacy changes. Use `accountId` instead. See the [migration guide](https://developer.atlassian.com/cloud/jira/platform/deprecation-notice-user-privacy-api-migration-guide/) for details. User name used to return dashboards with the matching `owner.name`. This parameter cannot be used with the `accountId` parameter.
$groupname = 'groupname_example'; // string | As a group's name can change, use of `groupId` is recommended. Group name used to return dashboards that are shared with a group that matches `sharePermissions.group.name`. This parameter cannot be used with the `groupId` parameter.
$group_id = 'group_id_example'; // string | Group ID used to return dashboards that are shared with a group that matches `sharePermissions.group.groupId`. This parameter cannot be used with the `groupname` parameter.
$project_id = 56; // int | Project ID used to returns dashboards that are shared with a project that matches `sharePermissions.project.id`.
$order_by = 'name'; // string | [Order](#ordering) the results by a field:   *  `description` Sorts by dashboard description. Note that this sort works independently of whether the expand to display the description field is in use.  *  `favourite_count` Sorts by dashboard popularity.  *  `id` Sorts by dashboard ID.  *  `is_favourite` Sorts by whether the dashboard is marked as a favorite.  *  `name` Sorts by dashboard name.  *  `owner` Sorts by dashboard owner name.
$start_at = 0; // int | The index of the first item to return in a page of results (page offset).
$max_results = 50; // int | The maximum number of items to return per page.
$status = 'active'; // string | The status to filter by. It may be active, archived or deleted.
$expand = 'expand_example'; // string | Use [expand](#expansion) to include additional information about dashboard in the response. This parameter accepts a comma-separated list. Expand options include:   *  `description` Returns the description of the dashboard.  *  `owner` Returns the owner of the dashboard.  *  `viewUrl` Returns the URL that is used to view the dashboard.  *  `favourite` Returns `isFavourite`, an indicator of whether the user has set the dashboard as a favorite.  *  `favouritedCount` Returns `popularity`, a count of how many users have set this dashboard as a favorite.  *  `sharePermissions` Returns details of the share permissions defined for the dashboard.  *  `editPermissions` Returns details of the edit permissions defined for the dashboard.  *  `isWritable` Returns whether the current user has permission to edit the dashboard.

try {
    $result = $apiInstance->getDashboardsPaginated($dashboard_name, $account_id, $owner, $groupname, $group_id, $project_id, $order_by, $start_at, $max_results, $status, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardsApi->getDashboardsPaginated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dashboard_name** | **string**| String used to perform a case-insensitive partial match with &#x60;name&#x60;. | [optional] |
| **account_id** | **string**| User account ID used to return dashboards with the matching &#x60;owner.accountId&#x60;. This parameter cannot be used with the &#x60;owner&#x60; parameter. | [optional] |
| **owner** | **string**| This parameter is deprecated because of privacy changes. Use &#x60;accountId&#x60; instead. See the [migration guide](https://developer.atlassian.com/cloud/jira/platform/deprecation-notice-user-privacy-api-migration-guide/) for details. User name used to return dashboards with the matching &#x60;owner.name&#x60;. This parameter cannot be used with the &#x60;accountId&#x60; parameter. | [optional] |
| **groupname** | **string**| As a group&#39;s name can change, use of &#x60;groupId&#x60; is recommended. Group name used to return dashboards that are shared with a group that matches &#x60;sharePermissions.group.name&#x60;. This parameter cannot be used with the &#x60;groupId&#x60; parameter. | [optional] |
| **group_id** | **string**| Group ID used to return dashboards that are shared with a group that matches &#x60;sharePermissions.group.groupId&#x60;. This parameter cannot be used with the &#x60;groupname&#x60; parameter. | [optional] |
| **project_id** | **int**| Project ID used to returns dashboards that are shared with a project that matches &#x60;sharePermissions.project.id&#x60;. | [optional] |
| **order_by** | **string**| [Order](#ordering) the results by a field:   *  &#x60;description&#x60; Sorts by dashboard description. Note that this sort works independently of whether the expand to display the description field is in use.  *  &#x60;favourite_count&#x60; Sorts by dashboard popularity.  *  &#x60;id&#x60; Sorts by dashboard ID.  *  &#x60;is_favourite&#x60; Sorts by whether the dashboard is marked as a favorite.  *  &#x60;name&#x60; Sorts by dashboard name.  *  &#x60;owner&#x60; Sorts by dashboard owner name. | [optional] [default to &#39;name&#39;] |
| **start_at** | **int**| The index of the first item to return in a page of results (page offset). | [optional] [default to 0] |
| **max_results** | **int**| The maximum number of items to return per page. | [optional] [default to 50] |
| **status** | **string**| The status to filter by. It may be active, archived or deleted. | [optional] [default to &#39;active&#39;] |
| **expand** | **string**| Use [expand](#expansion) to include additional information about dashboard in the response. This parameter accepts a comma-separated list. Expand options include:   *  &#x60;description&#x60; Returns the description of the dashboard.  *  &#x60;owner&#x60; Returns the owner of the dashboard.  *  &#x60;viewUrl&#x60; Returns the URL that is used to view the dashboard.  *  &#x60;favourite&#x60; Returns &#x60;isFavourite&#x60;, an indicator of whether the user has set the dashboard as a favorite.  *  &#x60;favouritedCount&#x60; Returns &#x60;popularity&#x60;, a count of how many users have set this dashboard as a favorite.  *  &#x60;sharePermissions&#x60; Returns details of the share permissions defined for the dashboard.  *  &#x60;editPermissions&#x60; Returns details of the edit permissions defined for the dashboard.  *  &#x60;isWritable&#x60; Returns whether the current user has permission to edit the dashboard. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PageBeanDashboard**](../Model/PageBeanDashboard.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeGadget()`

```php
removeGadget($dashboard_id, $gadget_id): mixed
```

Remove gadget from dashboard

Removes a dashboard gadget from a dashboard.  When a gadget is removed from a dashboard, other gadgets in the same column are moved up to fill the emptied position.  **[Permissions](#permissions) required:** None.

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


$apiInstance = new OpenAPI\Client\Api\DashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dashboard_id = 56; // int | The ID of the dashboard.
$gadget_id = 56; // int | The ID of the gadget.

try {
    $result = $apiInstance->removeGadget($dashboard_id, $gadget_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardsApi->removeGadget: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dashboard_id** | **int**| The ID of the dashboard. | |
| **gadget_id** | **int**| The ID of the gadget. | |

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

## `setDashboardItemProperty()`

```php
setDashboardItemProperty($dashboard_id, $item_id, $property_key, $body): mixed
```

Set dashboard item property

Sets the value of a dashboard item property. Use this resource in apps to store custom data against a dashboard item.  A dashboard item enables an app to add user-specific information to a user dashboard. Dashboard items are exposed to users as gadgets that users can add to their dashboards. For more information on how users do this, see [Adding and customizing gadgets](https://confluence.atlassian.com/x/7AeiLQ).  When an app creates a dashboard item it registers a callback to receive the dashboard item ID. The callback fires whenever the item is rendered or, where the item is configurable, the user edits the item. The app then uses this resource to store the item's content or configuration details. For more information on working with dashboard items, see [ Building a dashboard item for a JIRA Connect add-on](https://developer.atlassian.com/server/jira/platform/guide-building-a-dashboard-item-for-a-jira-connect-add-on-33746254/) and the [Dashboard Item](https://developer.atlassian.com/cloud/jira/platform/modules/dashboard-item/) documentation.  There is no resource to set or get dashboard items.  The value of the request body must be a [valid](http://tools.ietf.org/html/rfc4627), non-empty JSON blob. The maximum length is 32768 characters.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** The user must be the owner of the dashboard. Note, users with the *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg) are considered owners of the System dashboard.

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


$apiInstance = new OpenAPI\Client\Api\DashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dashboard_id = 'dashboard_id_example'; // string | The ID of the dashboard.
$item_id = 'item_id_example'; // string | The ID of the dashboard item.
$property_key = 'property_key_example'; // string | The key of the dashboard item property. The maximum length is 255 characters. For dashboard items with a spec URI and no complete module key, if the provided propertyKey is equal to \"config\", the request body's JSON must be an object with all keys and values as strings.
$body = {"number":5,"string":"string-value"}; // mixed

try {
    $result = $apiInstance->setDashboardItemProperty($dashboard_id, $item_id, $property_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardsApi->setDashboardItemProperty: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dashboard_id** | **string**| The ID of the dashboard. | |
| **item_id** | **string**| The ID of the dashboard item. | |
| **property_key** | **string**| The key of the dashboard item property. The maximum length is 255 characters. For dashboard items with a spec URI and no complete module key, if the provided propertyKey is equal to \&quot;config\&quot;, the request body&#39;s JSON must be an object with all keys and values as strings. | |
| **body** | **mixed**|  | |

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

## `updateDashboard()`

```php
updateDashboard($id, $dashboard_details): \OpenAPI\Client\Model\Dashboard
```

Update dashboard

Updates a dashboard, replacing all the dashboard details with those provided.  **[Permissions](#permissions) required:** None  The dashboard to be updated must be owned by the user.

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


$apiInstance = new OpenAPI\Client\Api\DashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the dashboard to update.
$dashboard_details = {"description":"A dashboard to help auditors identify sample of issues to check.","editPermissions":[],"name":"Auditors dashboard","sharePermissions":[{"type":"global"}]}; // \OpenAPI\Client\Model\DashboardDetails | Replacement dashboard details.

try {
    $result = $apiInstance->updateDashboard($id, $dashboard_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardsApi->updateDashboard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the dashboard to update. | |
| **dashboard_details** | [**\OpenAPI\Client\Model\DashboardDetails**](../Model/DashboardDetails.md)| Replacement dashboard details. | |

### Return type

[**\OpenAPI\Client\Model\Dashboard**](../Model/Dashboard.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateGadget()`

```php
updateGadget($dashboard_id, $gadget_id, $dashboard_gadget_update_request): mixed
```

Update gadget on dashboard

Changes the title, position, and color of the gadget on a dashboard.  **[Permissions](#permissions) required:** None.

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


$apiInstance = new OpenAPI\Client\Api\DashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dashboard_id = 56; // int | The ID of the dashboard.
$gadget_id = 56; // int | The ID of the gadget.
$dashboard_gadget_update_request = {"color":"red","position":{"column":1,"row":1},"title":"My new gadget title"}; // \OpenAPI\Client\Model\DashboardGadgetUpdateRequest

try {
    $result = $apiInstance->updateGadget($dashboard_id, $gadget_id, $dashboard_gadget_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardsApi->updateGadget: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dashboard_id** | **int**| The ID of the dashboard. | |
| **gadget_id** | **int**| The ID of the gadget. | |
| **dashboard_gadget_update_request** | [**\OpenAPI\Client\Model\DashboardGadgetUpdateRequest**](../Model/DashboardGadgetUpdateRequest.md)|  | |

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
