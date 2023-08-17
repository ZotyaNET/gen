# OpenAPI\Client\IssueFieldsApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCustomField()**](IssueFieldsApi.md#createCustomField) | **POST** /rest/api/2/field | Create custom field |
| [**deleteCustomField()**](IssueFieldsApi.md#deleteCustomField) | **DELETE** /rest/api/2/field/{id} | Delete custom field |
| [**getContextsForFieldDeprecated()**](IssueFieldsApi.md#getContextsForFieldDeprecated) | **GET** /rest/api/2/field/{fieldId}/contexts | Get contexts for a field |
| [**getFields()**](IssueFieldsApi.md#getFields) | **GET** /rest/api/2/field | Get fields |
| [**getFieldsPaginated()**](IssueFieldsApi.md#getFieldsPaginated) | **GET** /rest/api/2/field/search | Get fields paginated |
| [**getTrashedFieldsPaginated()**](IssueFieldsApi.md#getTrashedFieldsPaginated) | **GET** /rest/api/2/field/search/trashed | Get fields in trash paginated |
| [**restoreCustomField()**](IssueFieldsApi.md#restoreCustomField) | **POST** /rest/api/2/field/{id}/restore | Restore custom field from trash |
| [**trashCustomField()**](IssueFieldsApi.md#trashCustomField) | **POST** /rest/api/2/field/{id}/trash | Move custom field to trash |
| [**updateCustomField()**](IssueFieldsApi.md#updateCustomField) | **PUT** /rest/api/2/field/{fieldId} | Update custom field |


## `createCustomField()`

```php
createCustomField($custom_field_definition_json_bean): \OpenAPI\Client\Model\FieldDetails
```

Create custom field

Creates a custom field.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$custom_field_definition_json_bean = {"description":"Custom field for picking groups","name":"New custom field","searcherKey":"com.atlassian.jira.plugin.system.customfieldtypes:grouppickersearcher","type":"com.atlassian.jira.plugin.system.customfieldtypes:grouppicker"}; // \OpenAPI\Client\Model\CustomFieldDefinitionJsonBean | Definition of the custom field to be created

try {
    $result = $apiInstance->createCustomField($custom_field_definition_json_bean);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueFieldsApi->createCustomField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **custom_field_definition_json_bean** | [**\OpenAPI\Client\Model\CustomFieldDefinitionJsonBean**](../Model/CustomFieldDefinitionJsonBean.md)| Definition of the custom field to be created | |

### Return type

[**\OpenAPI\Client\Model\FieldDetails**](../Model/FieldDetails.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCustomField()`

```php
deleteCustomField($id)
```

Delete custom field

Deletes a custom field. The custom field is deleted whether it is in the trash or not. See [Edit or delete a custom field](https://confluence.atlassian.com/x/Z44fOw) for more information on trashing and deleting custom fields.  This operation is [asynchronous](#async). Follow the `location` link in the response to determine the status of the task and use [Get task](#api-rest-api-2-task-taskId-get) to obtain subsequent updates.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of a custom field.

try {
    $apiInstance->deleteCustomField($id);
} catch (Exception $e) {
    echo 'Exception when calling IssueFieldsApi->deleteCustomField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of a custom field. | |

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

## `getContextsForFieldDeprecated()`

```php
getContextsForFieldDeprecated($field_id, $start_at, $max_results): \OpenAPI\Client\Model\PageBeanContext
```

Get contexts for a field

Returns a [paginated](#pagination) list of the contexts a field is used in. Deprecated, use [ Get custom field contexts](#api-rest-api-2-field-fieldId-context-get).  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field_id = 'field_id_example'; // string | The ID of the field to return contexts for.
$start_at = 0; // int | The index of the first item to return in a page of results (page offset).
$max_results = 20; // int | The maximum number of items to return per page.

try {
    $result = $apiInstance->getContextsForFieldDeprecated($field_id, $start_at, $max_results);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueFieldsApi->getContextsForFieldDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **field_id** | **string**| The ID of the field to return contexts for. | |
| **start_at** | **int**| The index of the first item to return in a page of results (page offset). | [optional] [default to 0] |
| **max_results** | **int**| The maximum number of items to return per page. | [optional] [default to 20] |

### Return type

[**\OpenAPI\Client\Model\PageBeanContext**](../Model/PageBeanContext.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFields()`

```php
getFields(): \OpenAPI\Client\Model\FieldDetails[]
```

Get fields

Returns system and custom issue fields according to the following rules:   *  Fields that cannot be added to the issue navigator are always returned.  *  Fields that cannot be placed on an issue screen are always returned.  *  Fields that depend on global Jira settings are only returned if the setting is enabled. That is, timetracking fields, subtasks, votes, and watches.  *  For all other fields, this operation only returns the fields that the user has permission to view (that is, the field is used in at least one project that the user has *Browse Projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for.)  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** None.

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


$apiInstance = new OpenAPI\Client\Api\IssueFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getFields();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueFieldsApi->getFields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\FieldDetails[]**](../Model/FieldDetails.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFieldsPaginated()`

```php
getFieldsPaginated($start_at, $max_results, $type, $id, $query, $order_by, $expand): \OpenAPI\Client\Model\PageBeanField
```

Get fields paginated

Returns a [paginated](#pagination) list of fields for Classic Jira projects. The list can include:   *  all fields  *  specific fields, by defining `id`  *  fields that contain a string in the field name or description, by defining `query`  *  specific fields that contain a string in the field name or description, by defining `id` and `query`  Only custom fields can be queried, `type` must be set to `custom`.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_at = 0; // int | The index of the first item to return in a page of results (page offset).
$max_results = 50; // int | The maximum number of items to return per page.
$type = array('type_example'); // string[] | The type of fields to search.
$id = array('id_example'); // string[] | The IDs of the custom fields to return or, where `query` is specified, filter.
$query = 'query_example'; // string | String used to perform a case-insensitive partial match with field names or descriptions.
$order_by = 'order_by_example'; // string | [Order](#ordering) the results by a field:   *  `contextsCount` sorts by the number of contexts related to a field  *  `lastUsed` sorts by the date when the value of the field last changed  *  `name` sorts by the field name  *  `screensCount` sorts by the number of screens related to a field
$expand = 'expand_example'; // string | Use [expand](#expansion) to include additional information in the response. This parameter accepts a comma-separated list. Expand options include:   *  `key` returns the key for each field  *  `lastUsed` returns the date when the value of the field last changed  *  `screensCount` returns the number of screens related to a field  *  `contextsCount` returns the number of contexts related to a field  *  `isLocked` returns information about whether the field is [locked](https://confluence.atlassian.com/x/ZSN7Og)  *  `searcherKey` returns the searcher key for each custom field

try {
    $result = $apiInstance->getFieldsPaginated($start_at, $max_results, $type, $id, $query, $order_by, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueFieldsApi->getFieldsPaginated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_at** | **int**| The index of the first item to return in a page of results (page offset). | [optional] [default to 0] |
| **max_results** | **int**| The maximum number of items to return per page. | [optional] [default to 50] |
| **type** | [**string[]**](../Model/string.md)| The type of fields to search. | [optional] |
| **id** | [**string[]**](../Model/string.md)| The IDs of the custom fields to return or, where &#x60;query&#x60; is specified, filter. | [optional] |
| **query** | **string**| String used to perform a case-insensitive partial match with field names or descriptions. | [optional] |
| **order_by** | **string**| [Order](#ordering) the results by a field:   *  &#x60;contextsCount&#x60; sorts by the number of contexts related to a field  *  &#x60;lastUsed&#x60; sorts by the date when the value of the field last changed  *  &#x60;name&#x60; sorts by the field name  *  &#x60;screensCount&#x60; sorts by the number of screens related to a field | [optional] |
| **expand** | **string**| Use [expand](#expansion) to include additional information in the response. This parameter accepts a comma-separated list. Expand options include:   *  &#x60;key&#x60; returns the key for each field  *  &#x60;lastUsed&#x60; returns the date when the value of the field last changed  *  &#x60;screensCount&#x60; returns the number of screens related to a field  *  &#x60;contextsCount&#x60; returns the number of contexts related to a field  *  &#x60;isLocked&#x60; returns information about whether the field is [locked](https://confluence.atlassian.com/x/ZSN7Og)  *  &#x60;searcherKey&#x60; returns the searcher key for each custom field | [optional] |

### Return type

[**\OpenAPI\Client\Model\PageBeanField**](../Model/PageBeanField.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTrashedFieldsPaginated()`

```php
getTrashedFieldsPaginated($start_at, $max_results, $id, $query, $expand, $order_by): \OpenAPI\Client\Model\PageBeanField
```

Get fields in trash paginated

Returns a [paginated](#pagination) list of fields in the trash. The list may be restricted to fields whose field name or description partially match a string.  Only custom fields can be queried, `type` must be set to `custom`.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_at = 0; // int | The index of the first item to return in a page of results (page offset).
$max_results = 50; // int | The maximum number of items to return per page.
$id = array('id_example'); // string[]
$query = 'query_example'; // string | String used to perform a case-insensitive partial match with field names or descriptions.
$expand = 'expand_example'; // string
$order_by = 'order_by_example'; // string | [Order](#ordering) the results by a field:   *  `name` sorts by the field name  *  `trashDate` sorts by the date the field was moved to the trash  *  `plannedDeletionDate` sorts by the planned deletion date

try {
    $result = $apiInstance->getTrashedFieldsPaginated($start_at, $max_results, $id, $query, $expand, $order_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueFieldsApi->getTrashedFieldsPaginated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_at** | **int**| The index of the first item to return in a page of results (page offset). | [optional] [default to 0] |
| **max_results** | **int**| The maximum number of items to return per page. | [optional] [default to 50] |
| **id** | [**string[]**](../Model/string.md)|  | [optional] |
| **query** | **string**| String used to perform a case-insensitive partial match with field names or descriptions. | [optional] |
| **expand** | **string**|  | [optional] |
| **order_by** | **string**| [Order](#ordering) the results by a field:   *  &#x60;name&#x60; sorts by the field name  *  &#x60;trashDate&#x60; sorts by the date the field was moved to the trash  *  &#x60;plannedDeletionDate&#x60; sorts by the planned deletion date | [optional] |

### Return type

[**\OpenAPI\Client\Model\PageBeanField**](../Model/PageBeanField.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restoreCustomField()`

```php
restoreCustomField($id): mixed
```

Restore custom field from trash

Restores a custom field from trash. See [Edit or delete a custom field](https://confluence.atlassian.com/x/Z44fOw) for more information on trashing and deleting custom fields.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of a custom field.

try {
    $result = $apiInstance->restoreCustomField($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueFieldsApi->restoreCustomField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of a custom field. | |

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

## `trashCustomField()`

```php
trashCustomField($id): mixed
```

Move custom field to trash

Moves a custom field to trash. See [Edit or delete a custom field](https://confluence.atlassian.com/x/Z44fOw) for more information on trashing and deleting custom fields.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of a custom field.

try {
    $result = $apiInstance->trashCustomField($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueFieldsApi->trashCustomField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of a custom field. | |

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

## `updateCustomField()`

```php
updateCustomField($field_id, $update_custom_field_details): mixed
```

Update custom field

Updates a custom field.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field_id = 'field_id_example'; // string | The ID of the custom field.
$update_custom_field_details = {"description":"Select the manager and the corresponding employee.","name":"Managers and employees list","searcherKey":"com.atlassian.jira.plugin.system.customfieldtypes:cascadingselectsearcher"}; // \OpenAPI\Client\Model\UpdateCustomFieldDetails | The custom field update details.

try {
    $result = $apiInstance->updateCustomField($field_id, $update_custom_field_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueFieldsApi->updateCustomField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **field_id** | **string**| The ID of the custom field. | |
| **update_custom_field_details** | [**\OpenAPI\Client\Model\UpdateCustomFieldDetails**](../Model/UpdateCustomFieldDetails.md)| The custom field update details. | |

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
