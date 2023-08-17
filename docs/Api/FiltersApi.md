# OpenAPI\Client\FiltersApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**changeFilterOwner()**](FiltersApi.md#changeFilterOwner) | **PUT** /rest/api/2/filter/{id}/owner | Change filter owner |
| [**createFilter()**](FiltersApi.md#createFilter) | **POST** /rest/api/2/filter | Create filter |
| [**deleteFavouriteForFilter()**](FiltersApi.md#deleteFavouriteForFilter) | **DELETE** /rest/api/2/filter/{id}/favourite | Remove filter as favorite |
| [**deleteFilter()**](FiltersApi.md#deleteFilter) | **DELETE** /rest/api/2/filter/{id} | Delete filter |
| [**getColumns()**](FiltersApi.md#getColumns) | **GET** /rest/api/2/filter/{id}/columns | Get columns |
| [**getFavouriteFilters()**](FiltersApi.md#getFavouriteFilters) | **GET** /rest/api/2/filter/favourite | Get favorite filters |
| [**getFilter()**](FiltersApi.md#getFilter) | **GET** /rest/api/2/filter/{id} | Get filter |
| [**getFiltersPaginated()**](FiltersApi.md#getFiltersPaginated) | **GET** /rest/api/2/filter/search | Search for filters |
| [**getMyFilters()**](FiltersApi.md#getMyFilters) | **GET** /rest/api/2/filter/my | Get my filters |
| [**resetColumns()**](FiltersApi.md#resetColumns) | **DELETE** /rest/api/2/filter/{id}/columns | Reset columns |
| [**setColumns()**](FiltersApi.md#setColumns) | **PUT** /rest/api/2/filter/{id}/columns | Set columns |
| [**setFavouriteForFilter()**](FiltersApi.md#setFavouriteForFilter) | **PUT** /rest/api/2/filter/{id}/favourite | Add filter as favorite |
| [**updateFilter()**](FiltersApi.md#updateFilter) | **PUT** /rest/api/2/filter/{id} | Update filter |


## `changeFilterOwner()`

```php
changeFilterOwner($id, $change_filter_owner): mixed
```

Change filter owner

Changes the owner of the filter.  **[Permissions](#permissions) required:** Permission to access Jira. However, the user must own the filter or have the *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\FiltersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the filter to update.
$change_filter_owner = {"accountId":"0000-0000-0000-0000"}; // \OpenAPI\Client\Model\ChangeFilterOwner | The account ID of the new owner of the filter.

try {
    $result = $apiInstance->changeFilterOwner($id, $change_filter_owner);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiltersApi->changeFilterOwner: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the filter to update. | |
| **change_filter_owner** | [**\OpenAPI\Client\Model\ChangeFilterOwner**](../Model/ChangeFilterOwner.md)| The account ID of the new owner of the filter. | |

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

## `createFilter()`

```php
createFilter($filter, $expand, $override_share_permissions): \OpenAPI\Client\Model\Filter
```

Create filter

Creates a filter. The filter is shared according to the [default share scope](#api-rest-api-2-filter-post). The filter is not selected as a favorite.  **[Permissions](#permissions) required:** Permission to access Jira.

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


$apiInstance = new OpenAPI\Client\Api\FiltersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = {"description":"Lists all open bugs","jql":"type = Bug and resolution is empty","name":"All Open Bugs"}; // \OpenAPI\Client\Model\Filter | The filter to create.
$expand = 'expand_example'; // string | Use [expand](#expansion) to include additional information about filter in the response. This parameter accepts a comma-separated list. Expand options include:   *  `sharedUsers` Returns the users that the filter is shared with. This includes users that can browse projects that the filter is shared with. If you don't specify `sharedUsers`, then the `sharedUsers` object is returned but it doesn't list any users. The list of users returned is limited to 1000, to access additional users append `[start-index:end-index]` to the expand request. For example, to access the next 1000 users, use `?expand=sharedUsers[1001:2000]`.  *  `subscriptions` Returns the users that are subscribed to the filter. If you don't specify `subscriptions`, the `subscriptions` object is returned but it doesn't list any subscriptions. The list of subscriptions returned is limited to 1000, to access additional subscriptions append `[start-index:end-index]` to the expand request. For example, to access the next 1000 subscriptions, use `?expand=subscriptions[1001:2000]`.
$override_share_permissions = false; // bool | EXPERIMENTAL: Whether share permissions are overridden to enable filters with any share permissions to be created. Available to users with *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

try {
    $result = $apiInstance->createFilter($filter, $expand, $override_share_permissions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiltersApi->createFilter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | [**\OpenAPI\Client\Model\Filter**](../Model/Filter.md)| The filter to create. | |
| **expand** | **string**| Use [expand](#expansion) to include additional information about filter in the response. This parameter accepts a comma-separated list. Expand options include:   *  &#x60;sharedUsers&#x60; Returns the users that the filter is shared with. This includes users that can browse projects that the filter is shared with. If you don&#39;t specify &#x60;sharedUsers&#x60;, then the &#x60;sharedUsers&#x60; object is returned but it doesn&#39;t list any users. The list of users returned is limited to 1000, to access additional users append &#x60;[start-index:end-index]&#x60; to the expand request. For example, to access the next 1000 users, use &#x60;?expand&#x3D;sharedUsers[1001:2000]&#x60;.  *  &#x60;subscriptions&#x60; Returns the users that are subscribed to the filter. If you don&#39;t specify &#x60;subscriptions&#x60;, the &#x60;subscriptions&#x60; object is returned but it doesn&#39;t list any subscriptions. The list of subscriptions returned is limited to 1000, to access additional subscriptions append &#x60;[start-index:end-index]&#x60; to the expand request. For example, to access the next 1000 subscriptions, use &#x60;?expand&#x3D;subscriptions[1001:2000]&#x60;. | [optional] |
| **override_share_permissions** | **bool**| EXPERIMENTAL: Whether share permissions are overridden to enable filters with any share permissions to be created. Available to users with *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg). | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\Filter**](../Model/Filter.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteFavouriteForFilter()`

```php
deleteFavouriteForFilter($id, $expand): \OpenAPI\Client\Model\Filter
```

Remove filter as favorite

Removes a filter as a favorite for the user. Note that this operation only removes filters visible to the user from the user's favorites list. For example, if the user favorites a public filter that is subsequently made private (and is therefore no longer visible on their favorites list) they cannot remove it from their favorites list.  **[Permissions](#permissions) required:** Permission to access Jira.

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


$apiInstance = new OpenAPI\Client\Api\FiltersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the filter.
$expand = 'expand_example'; // string | Use [expand](#expansion) to include additional information about filter in the response. This parameter accepts a comma-separated list. Expand options include:   *  `sharedUsers` Returns the users that the filter is shared with. This includes users that can browse projects that the filter is shared with. If you don't specify `sharedUsers`, then the `sharedUsers` object is returned but it doesn't list any users. The list of users returned is limited to 1000, to access additional users append `[start-index:end-index]` to the expand request. For example, to access the next 1000 users, use `?expand=sharedUsers[1001:2000]`.  *  `subscriptions` Returns the users that are subscribed to the filter. If you don't specify `subscriptions`, the `subscriptions` object is returned but it doesn't list any subscriptions. The list of subscriptions returned is limited to 1000, to access additional subscriptions append `[start-index:end-index]` to the expand request. For example, to access the next 1000 subscriptions, use `?expand=subscriptions[1001:2000]`.

try {
    $result = $apiInstance->deleteFavouriteForFilter($id, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiltersApi->deleteFavouriteForFilter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the filter. | |
| **expand** | **string**| Use [expand](#expansion) to include additional information about filter in the response. This parameter accepts a comma-separated list. Expand options include:   *  &#x60;sharedUsers&#x60; Returns the users that the filter is shared with. This includes users that can browse projects that the filter is shared with. If you don&#39;t specify &#x60;sharedUsers&#x60;, then the &#x60;sharedUsers&#x60; object is returned but it doesn&#39;t list any users. The list of users returned is limited to 1000, to access additional users append &#x60;[start-index:end-index]&#x60; to the expand request. For example, to access the next 1000 users, use &#x60;?expand&#x3D;sharedUsers[1001:2000]&#x60;.  *  &#x60;subscriptions&#x60; Returns the users that are subscribed to the filter. If you don&#39;t specify &#x60;subscriptions&#x60;, the &#x60;subscriptions&#x60; object is returned but it doesn&#39;t list any subscriptions. The list of subscriptions returned is limited to 1000, to access additional subscriptions append &#x60;[start-index:end-index]&#x60; to the expand request. For example, to access the next 1000 subscriptions, use &#x60;?expand&#x3D;subscriptions[1001:2000]&#x60;. | [optional] |

### Return type

[**\OpenAPI\Client\Model\Filter**](../Model/Filter.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteFilter()`

```php
deleteFilter($id)
```

Delete filter

Delete a filter.  **[Permissions](#permissions) required:** Permission to access Jira, however filters can only be deleted by the creator of the filter or a user with *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\FiltersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the filter to delete.

try {
    $apiInstance->deleteFilter($id);
} catch (Exception $e) {
    echo 'Exception when calling FiltersApi->deleteFilter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the filter to delete. | |

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

## `getColumns()`

```php
getColumns($id): \OpenAPI\Client\Model\ColumnItem[]
```

Get columns

Returns the columns configured for a filter. The column configuration is used when the filter's results are viewed in *List View* with the *Columns* set to *Filter*.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** None, however, column details are only returned for:   *  filters owned by the user.  *  filters shared with a group that the user is a member of.  *  filters shared with a private project that the user has *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for.  *  filters shared with a public project.  *  filters shared with the public.

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


$apiInstance = new OpenAPI\Client\Api\FiltersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the filter.

try {
    $result = $apiInstance->getColumns($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiltersApi->getColumns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the filter. | |

### Return type

[**\OpenAPI\Client\Model\ColumnItem[]**](../Model/ColumnItem.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFavouriteFilters()`

```php
getFavouriteFilters($expand): \OpenAPI\Client\Model\Filter[]
```

Get favorite filters

Returns the visible favorite filters of the user.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** A favorite filter is only visible to the user where the filter is:   *  owned by the user.  *  shared with a group that the user is a member of.  *  shared with a private project that the user has *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for.  *  shared with a public project.  *  shared with the public.  For example, if the user favorites a public filter that is subsequently made private that filter is not returned by this operation.

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


$apiInstance = new OpenAPI\Client\Api\FiltersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$expand = 'expand_example'; // string | Use [expand](#expansion) to include additional information about filter in the response. This parameter accepts a comma-separated list. Expand options include:   *  `sharedUsers` Returns the users that the filter is shared with. This includes users that can browse projects that the filter is shared with. If you don't specify `sharedUsers`, then the `sharedUsers` object is returned but it doesn't list any users. The list of users returned is limited to 1000, to access additional users append `[start-index:end-index]` to the expand request. For example, to access the next 1000 users, use `?expand=sharedUsers[1001:2000]`.  *  `subscriptions` Returns the users that are subscribed to the filter. If you don't specify `subscriptions`, the `subscriptions` object is returned but it doesn't list any subscriptions. The list of subscriptions returned is limited to 1000, to access additional subscriptions append `[start-index:end-index]` to the expand request. For example, to access the next 1000 subscriptions, use `?expand=subscriptions[1001:2000]`.

try {
    $result = $apiInstance->getFavouriteFilters($expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiltersApi->getFavouriteFilters: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **expand** | **string**| Use [expand](#expansion) to include additional information about filter in the response. This parameter accepts a comma-separated list. Expand options include:   *  &#x60;sharedUsers&#x60; Returns the users that the filter is shared with. This includes users that can browse projects that the filter is shared with. If you don&#39;t specify &#x60;sharedUsers&#x60;, then the &#x60;sharedUsers&#x60; object is returned but it doesn&#39;t list any users. The list of users returned is limited to 1000, to access additional users append &#x60;[start-index:end-index]&#x60; to the expand request. For example, to access the next 1000 users, use &#x60;?expand&#x3D;sharedUsers[1001:2000]&#x60;.  *  &#x60;subscriptions&#x60; Returns the users that are subscribed to the filter. If you don&#39;t specify &#x60;subscriptions&#x60;, the &#x60;subscriptions&#x60; object is returned but it doesn&#39;t list any subscriptions. The list of subscriptions returned is limited to 1000, to access additional subscriptions append &#x60;[start-index:end-index]&#x60; to the expand request. For example, to access the next 1000 subscriptions, use &#x60;?expand&#x3D;subscriptions[1001:2000]&#x60;. | [optional] |

### Return type

[**\OpenAPI\Client\Model\Filter[]**](../Model/Filter.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFilter()`

```php
getFilter($id, $expand, $override_share_permissions): \OpenAPI\Client\Model\Filter
```

Get filter

Returns a filter.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** None, however, the filter is only returned where it is:   *  owned by the user.  *  shared with a group that the user is a member of.  *  shared with a private project that the user has *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for.  *  shared with a public project.  *  shared with the public.

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


$apiInstance = new OpenAPI\Client\Api\FiltersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the filter to return.
$expand = 'expand_example'; // string | Use [expand](#expansion) to include additional information about filter in the response. This parameter accepts a comma-separated list. Expand options include:   *  `sharedUsers` Returns the users that the filter is shared with. This includes users that can browse projects that the filter is shared with. If you don't specify `sharedUsers`, then the `sharedUsers` object is returned but it doesn't list any users. The list of users returned is limited to 1000, to access additional users append `[start-index:end-index]` to the expand request. For example, to access the next 1000 users, use `?expand=sharedUsers[1001:2000]`.  *  `subscriptions` Returns the users that are subscribed to the filter. If you don't specify `subscriptions`, the `subscriptions` object is returned but it doesn't list any subscriptions. The list of subscriptions returned is limited to 1000, to access additional subscriptions append `[start-index:end-index]` to the expand request. For example, to access the next 1000 subscriptions, use `?expand=subscriptions[1001:2000]`.
$override_share_permissions = false; // bool | EXPERIMENTAL: Whether share permissions are overridden to enable filters with any share permissions to be returned. Available to users with *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

try {
    $result = $apiInstance->getFilter($id, $expand, $override_share_permissions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiltersApi->getFilter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the filter to return. | |
| **expand** | **string**| Use [expand](#expansion) to include additional information about filter in the response. This parameter accepts a comma-separated list. Expand options include:   *  &#x60;sharedUsers&#x60; Returns the users that the filter is shared with. This includes users that can browse projects that the filter is shared with. If you don&#39;t specify &#x60;sharedUsers&#x60;, then the &#x60;sharedUsers&#x60; object is returned but it doesn&#39;t list any users. The list of users returned is limited to 1000, to access additional users append &#x60;[start-index:end-index]&#x60; to the expand request. For example, to access the next 1000 users, use &#x60;?expand&#x3D;sharedUsers[1001:2000]&#x60;.  *  &#x60;subscriptions&#x60; Returns the users that are subscribed to the filter. If you don&#39;t specify &#x60;subscriptions&#x60;, the &#x60;subscriptions&#x60; object is returned but it doesn&#39;t list any subscriptions. The list of subscriptions returned is limited to 1000, to access additional subscriptions append &#x60;[start-index:end-index]&#x60; to the expand request. For example, to access the next 1000 subscriptions, use &#x60;?expand&#x3D;subscriptions[1001:2000]&#x60;. | [optional] |
| **override_share_permissions** | **bool**| EXPERIMENTAL: Whether share permissions are overridden to enable filters with any share permissions to be returned. Available to users with *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg). | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\Filter**](../Model/Filter.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFiltersPaginated()`

```php
getFiltersPaginated($filter_name, $account_id, $owner, $groupname, $group_id, $project_id, $id, $order_by, $start_at, $max_results, $expand, $override_share_permissions): \OpenAPI\Client\Model\PageBeanFilterDetails
```

Search for filters

Returns a [paginated](#pagination) list of filters. Use this operation to get:   *  specific filters, by defining `id` only.  *  filters that match all of the specified attributes. For example, all filters for a user with a particular word in their name. When multiple attributes are specified only filters matching all attributes are returned.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** None, however, only the following filters that match the query parameters are returned:   *  filters owned by the user.  *  filters shared with a group that the user is a member of.  *  filters shared with a private project that the user has *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for.  *  filters shared with a public project.  *  filters shared with the public.

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


$apiInstance = new OpenAPI\Client\Api\FiltersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter_name = 'filter_name_example'; // string | String used to perform a case-insensitive partial match with `name`.
$account_id = 'account_id_example'; // string | User account ID used to return filters with the matching `owner.accountId`. This parameter cannot be used with `owner`.
$owner = 'owner_example'; // string | This parameter is deprecated because of privacy changes. Use `accountId` instead. See the [migration guide](https://developer.atlassian.com/cloud/jira/platform/deprecation-notice-user-privacy-api-migration-guide/) for details. User name used to return filters with the matching `owner.name`. This parameter cannot be used with `accountId`.
$groupname = 'groupname_example'; // string | As a group's name can change, use of `groupId` is recommended to identify a group. Group name used to returns filters that are shared with a group that matches `sharePermissions.group.groupname`. This parameter cannot be used with the `groupId` parameter.
$group_id = 'group_id_example'; // string | Group ID used to returns filters that are shared with a group that matches `sharePermissions.group.groupId`. This parameter cannot be used with the `groupname` parameter.
$project_id = 56; // int | Project ID used to returns filters that are shared with a project that matches `sharePermissions.project.id`.
$id = array(56); // int[] | The list of filter IDs. To include multiple IDs, provide an ampersand-separated list. For example, `id=10000&id=10001`. Do not exceed 200 filter IDs.
$order_by = 'name'; // string | [Order](#ordering) the results by a field:   *  `description` Sorts by filter description. Note that this sorting works independently of whether the expand to display the description field is in use.  *  `favourite_count` Sorts by the count of how many users have this filter as a favorite.  *  `is_favourite` Sorts by whether the filter is marked as a favorite.  *  `id` Sorts by filter ID.  *  `name` Sorts by filter name.  *  `owner` Sorts by the ID of the filter owner.  *  `is_shared` Sorts by whether the filter is shared.
$start_at = 0; // int | The index of the first item to return in a page of results (page offset).
$max_results = 50; // int | The maximum number of items to return per page.
$expand = 'expand_example'; // string | Use [expand](#expansion) to include additional information about filter in the response. This parameter accepts a comma-separated list. Expand options include:   *  `description` Returns the description of the filter.  *  `favourite` Returns an indicator of whether the user has set the filter as a favorite.  *  `favouritedCount` Returns a count of how many users have set this filter as a favorite.  *  `jql` Returns the JQL query that the filter uses.  *  `owner` Returns the owner of the filter.  *  `searchUrl` Returns a URL to perform the filter's JQL query.  *  `sharePermissions` Returns the share permissions defined for the filter.  *  `editPermissions` Returns the edit permissions defined for the filter.  *  `isWritable` Returns whether the current user has permission to edit the filter.  *  `subscriptions` Returns the users that are subscribed to the filter.  *  `viewUrl` Returns a URL to view the filter.
$override_share_permissions = false; // bool | EXPERIMENTAL: Whether share permissions are overridden to enable filters with any share permissions to be returned. Available to users with *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

try {
    $result = $apiInstance->getFiltersPaginated($filter_name, $account_id, $owner, $groupname, $group_id, $project_id, $id, $order_by, $start_at, $max_results, $expand, $override_share_permissions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiltersApi->getFiltersPaginated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter_name** | **string**| String used to perform a case-insensitive partial match with &#x60;name&#x60;. | [optional] |
| **account_id** | **string**| User account ID used to return filters with the matching &#x60;owner.accountId&#x60;. This parameter cannot be used with &#x60;owner&#x60;. | [optional] |
| **owner** | **string**| This parameter is deprecated because of privacy changes. Use &#x60;accountId&#x60; instead. See the [migration guide](https://developer.atlassian.com/cloud/jira/platform/deprecation-notice-user-privacy-api-migration-guide/) for details. User name used to return filters with the matching &#x60;owner.name&#x60;. This parameter cannot be used with &#x60;accountId&#x60;. | [optional] |
| **groupname** | **string**| As a group&#39;s name can change, use of &#x60;groupId&#x60; is recommended to identify a group. Group name used to returns filters that are shared with a group that matches &#x60;sharePermissions.group.groupname&#x60;. This parameter cannot be used with the &#x60;groupId&#x60; parameter. | [optional] |
| **group_id** | **string**| Group ID used to returns filters that are shared with a group that matches &#x60;sharePermissions.group.groupId&#x60;. This parameter cannot be used with the &#x60;groupname&#x60; parameter. | [optional] |
| **project_id** | **int**| Project ID used to returns filters that are shared with a project that matches &#x60;sharePermissions.project.id&#x60;. | [optional] |
| **id** | [**int[]**](../Model/int.md)| The list of filter IDs. To include multiple IDs, provide an ampersand-separated list. For example, &#x60;id&#x3D;10000&amp;id&#x3D;10001&#x60;. Do not exceed 200 filter IDs. | [optional] |
| **order_by** | **string**| [Order](#ordering) the results by a field:   *  &#x60;description&#x60; Sorts by filter description. Note that this sorting works independently of whether the expand to display the description field is in use.  *  &#x60;favourite_count&#x60; Sorts by the count of how many users have this filter as a favorite.  *  &#x60;is_favourite&#x60; Sorts by whether the filter is marked as a favorite.  *  &#x60;id&#x60; Sorts by filter ID.  *  &#x60;name&#x60; Sorts by filter name.  *  &#x60;owner&#x60; Sorts by the ID of the filter owner.  *  &#x60;is_shared&#x60; Sorts by whether the filter is shared. | [optional] [default to &#39;name&#39;] |
| **start_at** | **int**| The index of the first item to return in a page of results (page offset). | [optional] [default to 0] |
| **max_results** | **int**| The maximum number of items to return per page. | [optional] [default to 50] |
| **expand** | **string**| Use [expand](#expansion) to include additional information about filter in the response. This parameter accepts a comma-separated list. Expand options include:   *  &#x60;description&#x60; Returns the description of the filter.  *  &#x60;favourite&#x60; Returns an indicator of whether the user has set the filter as a favorite.  *  &#x60;favouritedCount&#x60; Returns a count of how many users have set this filter as a favorite.  *  &#x60;jql&#x60; Returns the JQL query that the filter uses.  *  &#x60;owner&#x60; Returns the owner of the filter.  *  &#x60;searchUrl&#x60; Returns a URL to perform the filter&#39;s JQL query.  *  &#x60;sharePermissions&#x60; Returns the share permissions defined for the filter.  *  &#x60;editPermissions&#x60; Returns the edit permissions defined for the filter.  *  &#x60;isWritable&#x60; Returns whether the current user has permission to edit the filter.  *  &#x60;subscriptions&#x60; Returns the users that are subscribed to the filter.  *  &#x60;viewUrl&#x60; Returns a URL to view the filter. | [optional] |
| **override_share_permissions** | **bool**| EXPERIMENTAL: Whether share permissions are overridden to enable filters with any share permissions to be returned. Available to users with *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg). | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\PageBeanFilterDetails**](../Model/PageBeanFilterDetails.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMyFilters()`

```php
getMyFilters($expand, $include_favourites): \OpenAPI\Client\Model\Filter[]
```

Get my filters

Returns the filters owned by the user. If `includeFavourites` is `true`, the user's visible favorite filters are also returned.  **[Permissions](#permissions) required:** Permission to access Jira, however, a favorite filters is only visible to the user where the filter is:   *  owned by the user.  *  shared with a group that the user is a member of.  *  shared with a private project that the user has *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for.  *  shared with a public project.  *  shared with the public.  For example, if the user favorites a public filter that is subsequently made private that filter is not returned by this operation.

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


$apiInstance = new OpenAPI\Client\Api\FiltersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$expand = 'expand_example'; // string | Use [expand](#expansion) to include additional information about filter in the response. This parameter accepts a comma-separated list. Expand options include:   *  `sharedUsers` Returns the users that the filter is shared with. This includes users that can browse projects that the filter is shared with. If you don't specify `sharedUsers`, then the `sharedUsers` object is returned but it doesn't list any users. The list of users returned is limited to 1000, to access additional users append `[start-index:end-index]` to the expand request. For example, to access the next 1000 users, use `?expand=sharedUsers[1001:2000]`.  *  `subscriptions` Returns the users that are subscribed to the filter. If you don't specify `subscriptions`, the `subscriptions` object is returned but it doesn't list any subscriptions. The list of subscriptions returned is limited to 1000, to access additional subscriptions append `[start-index:end-index]` to the expand request. For example, to access the next 1000 subscriptions, use `?expand=subscriptions[1001:2000]`.
$include_favourites = false; // bool | Include the user's favorite filters in the response.

try {
    $result = $apiInstance->getMyFilters($expand, $include_favourites);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiltersApi->getMyFilters: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **expand** | **string**| Use [expand](#expansion) to include additional information about filter in the response. This parameter accepts a comma-separated list. Expand options include:   *  &#x60;sharedUsers&#x60; Returns the users that the filter is shared with. This includes users that can browse projects that the filter is shared with. If you don&#39;t specify &#x60;sharedUsers&#x60;, then the &#x60;sharedUsers&#x60; object is returned but it doesn&#39;t list any users. The list of users returned is limited to 1000, to access additional users append &#x60;[start-index:end-index]&#x60; to the expand request. For example, to access the next 1000 users, use &#x60;?expand&#x3D;sharedUsers[1001:2000]&#x60;.  *  &#x60;subscriptions&#x60; Returns the users that are subscribed to the filter. If you don&#39;t specify &#x60;subscriptions&#x60;, the &#x60;subscriptions&#x60; object is returned but it doesn&#39;t list any subscriptions. The list of subscriptions returned is limited to 1000, to access additional subscriptions append &#x60;[start-index:end-index]&#x60; to the expand request. For example, to access the next 1000 subscriptions, use &#x60;?expand&#x3D;subscriptions[1001:2000]&#x60;. | [optional] |
| **include_favourites** | **bool**| Include the user&#39;s favorite filters in the response. | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\Filter[]**](../Model/Filter.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resetColumns()`

```php
resetColumns($id)
```

Reset columns

Reset the user's column configuration for the filter to the default.  **[Permissions](#permissions) required:** Permission to access Jira, however, columns are only reset for:   *  filters owned by the user.  *  filters shared with a group that the user is a member of.  *  filters shared with a private project that the user has *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for.  *  filters shared with a public project.  *  filters shared with the public.

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


$apiInstance = new OpenAPI\Client\Api\FiltersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the filter.

try {
    $apiInstance->resetColumns($id);
} catch (Exception $e) {
    echo 'Exception when calling FiltersApi->resetColumns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the filter. | |

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

## `setColumns()`

```php
setColumns($id, $request_body): mixed
```

Set columns

Sets the columns for a filter. Only navigable fields can be set as columns. Use [Get fields](#api-rest-api-2-field-get) to get the list fields in Jira. A navigable field has `navigable` set to `true`.  The parameters for this resource are expressed as HTML form data. For example, in curl:  `curl -X PUT -d columns=summary -d columns=description https://your-domain.atlassian.net/rest/api/2/filter/10000/columns`  **[Permissions](#permissions) required:** Permission to access Jira, however, columns are only set for:   *  filters owned by the user.  *  filters shared with a group that the user is a member of.  *  filters shared with a private project that the user has *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for.  *  filters shared with a public project.  *  filters shared with the public.

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


$apiInstance = new OpenAPI\Client\Api\FiltersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the filter.
$request_body = array('request_body_example'); // string[] | The IDs of the fields to set as columns. In the form data, specify each field as `columns=id`, where `id` is the *id* of a field (as seen in the response for [Get fields](#api-rest-api-<ver>-field-get)). For example, `columns=summary`.

try {
    $result = $apiInstance->setColumns($id, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiltersApi->setColumns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the filter. | |
| **request_body** | [**string[]**](../Model/string.md)| The IDs of the fields to set as columns. In the form data, specify each field as &#x60;columns&#x3D;id&#x60;, where &#x60;id&#x60; is the *id* of a field (as seen in the response for [Get fields](#api-rest-api-&lt;ver&gt;-field-get)). For example, &#x60;columns&#x3D;summary&#x60;. | [optional] |

### Return type

**mixed**

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setFavouriteForFilter()`

```php
setFavouriteForFilter($id, $expand): \OpenAPI\Client\Model\Filter
```

Add filter as favorite

Add a filter as a favorite for the user.  **[Permissions](#permissions) required:** Permission to access Jira, however, the user can only favorite:   *  filters owned by the user.  *  filters shared with a group that the user is a member of.  *  filters shared with a private project that the user has *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for.  *  filters shared with a public project.  *  filters shared with the public.

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


$apiInstance = new OpenAPI\Client\Api\FiltersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the filter.
$expand = 'expand_example'; // string | Use [expand](#expansion) to include additional information about filter in the response. This parameter accepts a comma-separated list. Expand options include:   *  `sharedUsers` Returns the users that the filter is shared with. This includes users that can browse projects that the filter is shared with. If you don't specify `sharedUsers`, then the `sharedUsers` object is returned but it doesn't list any users. The list of users returned is limited to 1000, to access additional users append `[start-index:end-index]` to the expand request. For example, to access the next 1000 users, use `?expand=sharedUsers[1001:2000]`.  *  `subscriptions` Returns the users that are subscribed to the filter. If you don't specify `subscriptions`, the `subscriptions` object is returned but it doesn't list any subscriptions. The list of subscriptions returned is limited to 1000, to access additional subscriptions append `[start-index:end-index]` to the expand request. For example, to access the next 1000 subscriptions, use `?expand=subscriptions[1001:2000]`.

try {
    $result = $apiInstance->setFavouriteForFilter($id, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiltersApi->setFavouriteForFilter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the filter. | |
| **expand** | **string**| Use [expand](#expansion) to include additional information about filter in the response. This parameter accepts a comma-separated list. Expand options include:   *  &#x60;sharedUsers&#x60; Returns the users that the filter is shared with. This includes users that can browse projects that the filter is shared with. If you don&#39;t specify &#x60;sharedUsers&#x60;, then the &#x60;sharedUsers&#x60; object is returned but it doesn&#39;t list any users. The list of users returned is limited to 1000, to access additional users append &#x60;[start-index:end-index]&#x60; to the expand request. For example, to access the next 1000 users, use &#x60;?expand&#x3D;sharedUsers[1001:2000]&#x60;.  *  &#x60;subscriptions&#x60; Returns the users that are subscribed to the filter. If you don&#39;t specify &#x60;subscriptions&#x60;, the &#x60;subscriptions&#x60; object is returned but it doesn&#39;t list any subscriptions. The list of subscriptions returned is limited to 1000, to access additional subscriptions append &#x60;[start-index:end-index]&#x60; to the expand request. For example, to access the next 1000 subscriptions, use &#x60;?expand&#x3D;subscriptions[1001:2000]&#x60;. | [optional] |

### Return type

[**\OpenAPI\Client\Model\Filter**](../Model/Filter.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateFilter()`

```php
updateFilter($id, $filter, $expand, $override_share_permissions): \OpenAPI\Client\Model\Filter
```

Update filter

Updates a filter. Use this operation to update a filter's name, description, JQL, or sharing.  **[Permissions](#permissions) required:** Permission to access Jira, however the user must own the filter.

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


$apiInstance = new OpenAPI\Client\Api\FiltersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the filter to update.
$filter = {"description":"Lists all open bugs","jql":"type = Bug and resolution is empty","name":"All Open Bugs"}; // \OpenAPI\Client\Model\Filter | The filter to update.
$expand = 'expand_example'; // string | Use [expand](#expansion) to include additional information about filter in the response. This parameter accepts a comma-separated list. Expand options include:   *  `sharedUsers` Returns the users that the filter is shared with. This includes users that can browse projects that the filter is shared with. If you don't specify `sharedUsers`, then the `sharedUsers` object is returned but it doesn't list any users. The list of users returned is limited to 1000, to access additional users append `[start-index:end-index]` to the expand request. For example, to access the next 1000 users, use `?expand=sharedUsers[1001:2000]`.  *  `subscriptions` Returns the users that are subscribed to the filter. If you don't specify `subscriptions`, the `subscriptions` object is returned but it doesn't list any subscriptions. The list of subscriptions returned is limited to 1000, to access additional subscriptions append `[start-index:end-index]` to the expand request. For example, to access the next 1000 subscriptions, use `?expand=subscriptions[1001:2000]`.
$override_share_permissions = false; // bool | EXPERIMENTAL: Whether share permissions are overridden to enable the addition of any share permissions to filters. Available to users with *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

try {
    $result = $apiInstance->updateFilter($id, $filter, $expand, $override_share_permissions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiltersApi->updateFilter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the filter to update. | |
| **filter** | [**\OpenAPI\Client\Model\Filter**](../Model/Filter.md)| The filter to update. | |
| **expand** | **string**| Use [expand](#expansion) to include additional information about filter in the response. This parameter accepts a comma-separated list. Expand options include:   *  &#x60;sharedUsers&#x60; Returns the users that the filter is shared with. This includes users that can browse projects that the filter is shared with. If you don&#39;t specify &#x60;sharedUsers&#x60;, then the &#x60;sharedUsers&#x60; object is returned but it doesn&#39;t list any users. The list of users returned is limited to 1000, to access additional users append &#x60;[start-index:end-index]&#x60; to the expand request. For example, to access the next 1000 users, use &#x60;?expand&#x3D;sharedUsers[1001:2000]&#x60;.  *  &#x60;subscriptions&#x60; Returns the users that are subscribed to the filter. If you don&#39;t specify &#x60;subscriptions&#x60;, the &#x60;subscriptions&#x60; object is returned but it doesn&#39;t list any subscriptions. The list of subscriptions returned is limited to 1000, to access additional subscriptions append &#x60;[start-index:end-index]&#x60; to the expand request. For example, to access the next 1000 subscriptions, use &#x60;?expand&#x3D;subscriptions[1001:2000]&#x60;. | [optional] |
| **override_share_permissions** | **bool**| EXPERIMENTAL: Whether share permissions are overridden to enable the addition of any share permissions to filters. Available to users with *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg). | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\Filter**](../Model/Filter.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
