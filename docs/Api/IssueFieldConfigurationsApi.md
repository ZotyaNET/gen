# OpenAPI\Client\IssueFieldConfigurationsApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**assignFieldConfigurationSchemeToProject()**](IssueFieldConfigurationsApi.md#assignFieldConfigurationSchemeToProject) | **PUT** /rest/api/2/fieldconfigurationscheme/project | Assign field configuration scheme to project |
| [**createFieldConfiguration()**](IssueFieldConfigurationsApi.md#createFieldConfiguration) | **POST** /rest/api/2/fieldconfiguration | Create field configuration |
| [**createFieldConfigurationScheme()**](IssueFieldConfigurationsApi.md#createFieldConfigurationScheme) | **POST** /rest/api/2/fieldconfigurationscheme | Create field configuration scheme |
| [**deleteFieldConfiguration()**](IssueFieldConfigurationsApi.md#deleteFieldConfiguration) | **DELETE** /rest/api/2/fieldconfiguration/{id} | Delete field configuration |
| [**deleteFieldConfigurationScheme()**](IssueFieldConfigurationsApi.md#deleteFieldConfigurationScheme) | **DELETE** /rest/api/2/fieldconfigurationscheme/{id} | Delete field configuration scheme |
| [**getAllFieldConfigurationSchemes()**](IssueFieldConfigurationsApi.md#getAllFieldConfigurationSchemes) | **GET** /rest/api/2/fieldconfigurationscheme | Get all field configuration schemes |
| [**getAllFieldConfigurations()**](IssueFieldConfigurationsApi.md#getAllFieldConfigurations) | **GET** /rest/api/2/fieldconfiguration | Get all field configurations |
| [**getFieldConfigurationItems()**](IssueFieldConfigurationsApi.md#getFieldConfigurationItems) | **GET** /rest/api/2/fieldconfiguration/{id}/fields | Get field configuration items |
| [**getFieldConfigurationSchemeMappings()**](IssueFieldConfigurationsApi.md#getFieldConfigurationSchemeMappings) | **GET** /rest/api/2/fieldconfigurationscheme/mapping | Get field configuration issue type items |
| [**getFieldConfigurationSchemeProjectMapping()**](IssueFieldConfigurationsApi.md#getFieldConfigurationSchemeProjectMapping) | **GET** /rest/api/2/fieldconfigurationscheme/project | Get field configuration schemes for projects |
| [**removeIssueTypesFromGlobalFieldConfigurationScheme()**](IssueFieldConfigurationsApi.md#removeIssueTypesFromGlobalFieldConfigurationScheme) | **POST** /rest/api/2/fieldconfigurationscheme/{id}/mapping/delete | Remove issue types from field configuration scheme |
| [**setFieldConfigurationSchemeMapping()**](IssueFieldConfigurationsApi.md#setFieldConfigurationSchemeMapping) | **PUT** /rest/api/2/fieldconfigurationscheme/{id}/mapping | Assign issue types to field configurations |
| [**updateFieldConfiguration()**](IssueFieldConfigurationsApi.md#updateFieldConfiguration) | **PUT** /rest/api/2/fieldconfiguration/{id} | Update field configuration |
| [**updateFieldConfigurationItems()**](IssueFieldConfigurationsApi.md#updateFieldConfigurationItems) | **PUT** /rest/api/2/fieldconfiguration/{id}/fields | Update field configuration items |
| [**updateFieldConfigurationScheme()**](IssueFieldConfigurationsApi.md#updateFieldConfigurationScheme) | **PUT** /rest/api/2/fieldconfigurationscheme/{id} | Update field configuration scheme |


## `assignFieldConfigurationSchemeToProject()`

```php
assignFieldConfigurationSchemeToProject($field_configuration_scheme_project_association): mixed
```

Assign field configuration scheme to project

Assigns a field configuration scheme to a project. If the field configuration scheme ID is `null`, the operation assigns the default field configuration scheme.  Field configuration schemes can only be assigned to classic projects.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueFieldConfigurationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field_configuration_scheme_project_association = {"fieldConfigurationSchemeId":"10000","projectId":"10000"}; // \OpenAPI\Client\Model\FieldConfigurationSchemeProjectAssociation

try {
    $result = $apiInstance->assignFieldConfigurationSchemeToProject($field_configuration_scheme_project_association);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueFieldConfigurationsApi->assignFieldConfigurationSchemeToProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **field_configuration_scheme_project_association** | [**\OpenAPI\Client\Model\FieldConfigurationSchemeProjectAssociation**](../Model/FieldConfigurationSchemeProjectAssociation.md)|  | |

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

## `createFieldConfiguration()`

```php
createFieldConfiguration($field_configuration_details): \OpenAPI\Client\Model\FieldConfiguration
```

Create field configuration

Creates a field configuration. The field configuration is created with the same field properties as the default configuration, with all the fields being optional.  This operation can only create configurations for use in company-managed (classic) projects.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueFieldConfigurationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field_configuration_details = {"description":"My field configuration description","name":"My Field Configuration"}; // \OpenAPI\Client\Model\FieldConfigurationDetails

try {
    $result = $apiInstance->createFieldConfiguration($field_configuration_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueFieldConfigurationsApi->createFieldConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **field_configuration_details** | [**\OpenAPI\Client\Model\FieldConfigurationDetails**](../Model/FieldConfigurationDetails.md)|  | |

### Return type

[**\OpenAPI\Client\Model\FieldConfiguration**](../Model/FieldConfiguration.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createFieldConfigurationScheme()`

```php
createFieldConfigurationScheme($update_field_configuration_scheme_details): \OpenAPI\Client\Model\FieldConfigurationScheme
```

Create field configuration scheme

Creates a field configuration scheme.  This operation can only create field configuration schemes used in company-managed (classic) projects.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueFieldConfigurationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_field_configuration_scheme_details = {"description":"We can use this one for software projects.","name":"Field Configuration Scheme for software related projects"}; // \OpenAPI\Client\Model\UpdateFieldConfigurationSchemeDetails | The details of the field configuration scheme.

try {
    $result = $apiInstance->createFieldConfigurationScheme($update_field_configuration_scheme_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueFieldConfigurationsApi->createFieldConfigurationScheme: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_field_configuration_scheme_details** | [**\OpenAPI\Client\Model\UpdateFieldConfigurationSchemeDetails**](../Model/UpdateFieldConfigurationSchemeDetails.md)| The details of the field configuration scheme. | |

### Return type

[**\OpenAPI\Client\Model\FieldConfigurationScheme**](../Model/FieldConfigurationScheme.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteFieldConfiguration()`

```php
deleteFieldConfiguration($id): mixed
```

Delete field configuration

Deletes a field configuration.  This operation can only delete configurations used in company-managed (classic) projects.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueFieldConfigurationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the field configuration.

try {
    $result = $apiInstance->deleteFieldConfiguration($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueFieldConfigurationsApi->deleteFieldConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the field configuration. | |

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

## `deleteFieldConfigurationScheme()`

```php
deleteFieldConfigurationScheme($id): mixed
```

Delete field configuration scheme

Deletes a field configuration scheme.  This operation can only delete field configuration schemes used in company-managed (classic) projects.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueFieldConfigurationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the field configuration scheme.

try {
    $result = $apiInstance->deleteFieldConfigurationScheme($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueFieldConfigurationsApi->deleteFieldConfigurationScheme: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the field configuration scheme. | |

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

## `getAllFieldConfigurationSchemes()`

```php
getAllFieldConfigurationSchemes($start_at, $max_results, $id): \OpenAPI\Client\Model\PageBeanFieldConfigurationScheme
```

Get all field configuration schemes

Returns a [paginated](#pagination) list of field configuration schemes.  Only field configuration schemes used in classic projects are returned.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueFieldConfigurationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_at = 0; // int | The index of the first item to return in a page of results (page offset).
$max_results = 50; // int | The maximum number of items to return per page.
$id = array(56); // int[] | The list of field configuration scheme IDs. To include multiple IDs, provide an ampersand-separated list. For example, `id=10000&id=10001`.

try {
    $result = $apiInstance->getAllFieldConfigurationSchemes($start_at, $max_results, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueFieldConfigurationsApi->getAllFieldConfigurationSchemes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_at** | **int**| The index of the first item to return in a page of results (page offset). | [optional] [default to 0] |
| **max_results** | **int**| The maximum number of items to return per page. | [optional] [default to 50] |
| **id** | [**int[]**](../Model/int.md)| The list of field configuration scheme IDs. To include multiple IDs, provide an ampersand-separated list. For example, &#x60;id&#x3D;10000&amp;id&#x3D;10001&#x60;. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PageBeanFieldConfigurationScheme**](../Model/PageBeanFieldConfigurationScheme.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllFieldConfigurations()`

```php
getAllFieldConfigurations($start_at, $max_results, $id, $is_default, $query): \OpenAPI\Client\Model\PageBeanFieldConfigurationDetails
```

Get all field configurations

Returns a [paginated](#pagination) list of field configurations. The list can be for all field configurations or a subset determined by any combination of these criteria:   *  a list of field configuration item IDs.  *  whether the field configuration is a default.  *  whether the field configuration name or description contains a query string.  Only field configurations used in company-managed (classic) projects are returned.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueFieldConfigurationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_at = 0; // int | The index of the first item to return in a page of results (page offset).
$max_results = 50; // int | The maximum number of items to return per page.
$id = array(56); // int[] | The list of field configuration IDs. To include multiple IDs, provide an ampersand-separated list. For example, `id=10000&id=10001`.
$is_default = false; // bool | If *true* returns default field configurations only.
$query = ''; // string | The query string used to match against field configuration names and descriptions.

try {
    $result = $apiInstance->getAllFieldConfigurations($start_at, $max_results, $id, $is_default, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueFieldConfigurationsApi->getAllFieldConfigurations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_at** | **int**| The index of the first item to return in a page of results (page offset). | [optional] [default to 0] |
| **max_results** | **int**| The maximum number of items to return per page. | [optional] [default to 50] |
| **id** | [**int[]**](../Model/int.md)| The list of field configuration IDs. To include multiple IDs, provide an ampersand-separated list. For example, &#x60;id&#x3D;10000&amp;id&#x3D;10001&#x60;. | [optional] |
| **is_default** | **bool**| If *true* returns default field configurations only. | [optional] [default to false] |
| **query** | **string**| The query string used to match against field configuration names and descriptions. | [optional] [default to &#39;&#39;] |

### Return type

[**\OpenAPI\Client\Model\PageBeanFieldConfigurationDetails**](../Model/PageBeanFieldConfigurationDetails.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFieldConfigurationItems()`

```php
getFieldConfigurationItems($id, $start_at, $max_results): \OpenAPI\Client\Model\PageBeanFieldConfigurationItem
```

Get field configuration items

Returns a [paginated](#pagination) list of all fields for a configuration.  Only the fields from configurations used in company-managed (classic) projects are returned.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueFieldConfigurationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the field configuration.
$start_at = 0; // int | The index of the first item to return in a page of results (page offset).
$max_results = 50; // int | The maximum number of items to return per page.

try {
    $result = $apiInstance->getFieldConfigurationItems($id, $start_at, $max_results);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueFieldConfigurationsApi->getFieldConfigurationItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the field configuration. | |
| **start_at** | **int**| The index of the first item to return in a page of results (page offset). | [optional] [default to 0] |
| **max_results** | **int**| The maximum number of items to return per page. | [optional] [default to 50] |

### Return type

[**\OpenAPI\Client\Model\PageBeanFieldConfigurationItem**](../Model/PageBeanFieldConfigurationItem.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFieldConfigurationSchemeMappings()`

```php
getFieldConfigurationSchemeMappings($start_at, $max_results, $field_configuration_scheme_id): \OpenAPI\Client\Model\PageBeanFieldConfigurationIssueTypeItem
```

Get field configuration issue type items

Returns a [paginated](#pagination) list of field configuration issue type items.  Only items used in classic projects are returned.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueFieldConfigurationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_at = 0; // int | The index of the first item to return in a page of results (page offset).
$max_results = 50; // int | The maximum number of items to return per page.
$field_configuration_scheme_id = array(56); // int[] | The list of field configuration scheme IDs. To include multiple field configuration schemes separate IDs with ampersand: `fieldConfigurationSchemeId=10000&fieldConfigurationSchemeId=10001`.

try {
    $result = $apiInstance->getFieldConfigurationSchemeMappings($start_at, $max_results, $field_configuration_scheme_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueFieldConfigurationsApi->getFieldConfigurationSchemeMappings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_at** | **int**| The index of the first item to return in a page of results (page offset). | [optional] [default to 0] |
| **max_results** | **int**| The maximum number of items to return per page. | [optional] [default to 50] |
| **field_configuration_scheme_id** | [**int[]**](../Model/int.md)| The list of field configuration scheme IDs. To include multiple field configuration schemes separate IDs with ampersand: &#x60;fieldConfigurationSchemeId&#x3D;10000&amp;fieldConfigurationSchemeId&#x3D;10001&#x60;. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PageBeanFieldConfigurationIssueTypeItem**](../Model/PageBeanFieldConfigurationIssueTypeItem.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFieldConfigurationSchemeProjectMapping()`

```php
getFieldConfigurationSchemeProjectMapping($project_id, $start_at, $max_results): \OpenAPI\Client\Model\PageBeanFieldConfigurationSchemeProjects
```

Get field configuration schemes for projects

Returns a [paginated](#pagination) list of field configuration schemes and, for each scheme, a list of the projects that use it.  The list is sorted by field configuration scheme ID. The first item contains the list of project IDs assigned to the default field configuration scheme.  Only field configuration schemes used in classic projects are returned.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueFieldConfigurationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = array(56); // int[] | The list of project IDs. To include multiple projects, separate IDs with ampersand: `projectId=10000&projectId=10001`.
$start_at = 0; // int | The index of the first item to return in a page of results (page offset).
$max_results = 50; // int | The maximum number of items to return per page.

try {
    $result = $apiInstance->getFieldConfigurationSchemeProjectMapping($project_id, $start_at, $max_results);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueFieldConfigurationsApi->getFieldConfigurationSchemeProjectMapping: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | [**int[]**](../Model/int.md)| The list of project IDs. To include multiple projects, separate IDs with ampersand: &#x60;projectId&#x3D;10000&amp;projectId&#x3D;10001&#x60;. | |
| **start_at** | **int**| The index of the first item to return in a page of results (page offset). | [optional] [default to 0] |
| **max_results** | **int**| The maximum number of items to return per page. | [optional] [default to 50] |

### Return type

[**\OpenAPI\Client\Model\PageBeanFieldConfigurationSchemeProjects**](../Model/PageBeanFieldConfigurationSchemeProjects.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeIssueTypesFromGlobalFieldConfigurationScheme()`

```php
removeIssueTypesFromGlobalFieldConfigurationScheme($id, $issue_type_ids_to_remove): mixed
```

Remove issue types from field configuration scheme

Removes issue types from the field configuration scheme.  This operation can only modify field configuration schemes used in company-managed (classic) projects.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueFieldConfigurationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the field configuration scheme.
$issue_type_ids_to_remove = {"issueTypeIds":["10000","10001","10002"]}; // \OpenAPI\Client\Model\IssueTypeIdsToRemove | The issue type IDs to remove.

try {
    $result = $apiInstance->removeIssueTypesFromGlobalFieldConfigurationScheme($id, $issue_type_ids_to_remove);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueFieldConfigurationsApi->removeIssueTypesFromGlobalFieldConfigurationScheme: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the field configuration scheme. | |
| **issue_type_ids_to_remove** | [**\OpenAPI\Client\Model\IssueTypeIdsToRemove**](../Model/IssueTypeIdsToRemove.md)| The issue type IDs to remove. | |

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

## `setFieldConfigurationSchemeMapping()`

```php
setFieldConfigurationSchemeMapping($id, $associate_field_configurations_with_issue_types_request): mixed
```

Assign issue types to field configurations

Assigns issue types to field configurations on field configuration scheme.  This operation can only modify field configuration schemes used in company-managed (classic) projects.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueFieldConfigurationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the field configuration scheme.
$associate_field_configurations_with_issue_types_request = {"mappings":[{"fieldConfigurationId":"10000","issueTypeId":"default"},{"fieldConfigurationId":"10002","issueTypeId":"10001"},{"fieldConfigurationId":"10001","issueTypeId":"10002"}]}; // \OpenAPI\Client\Model\AssociateFieldConfigurationsWithIssueTypesRequest

try {
    $result = $apiInstance->setFieldConfigurationSchemeMapping($id, $associate_field_configurations_with_issue_types_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueFieldConfigurationsApi->setFieldConfigurationSchemeMapping: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the field configuration scheme. | |
| **associate_field_configurations_with_issue_types_request** | [**\OpenAPI\Client\Model\AssociateFieldConfigurationsWithIssueTypesRequest**](../Model/AssociateFieldConfigurationsWithIssueTypesRequest.md)|  | |

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

## `updateFieldConfiguration()`

```php
updateFieldConfiguration($id, $field_configuration_details): mixed
```

Update field configuration

Updates a field configuration. The name and the description provided in the request override the existing values.  This operation can only update configurations used in company-managed (classic) projects.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueFieldConfigurationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the field configuration.
$field_configuration_details = {"description":"A brand new description","name":"My Modified Field Configuration"}; // \OpenAPI\Client\Model\FieldConfigurationDetails

try {
    $result = $apiInstance->updateFieldConfiguration($id, $field_configuration_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueFieldConfigurationsApi->updateFieldConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the field configuration. | |
| **field_configuration_details** | [**\OpenAPI\Client\Model\FieldConfigurationDetails**](../Model/FieldConfigurationDetails.md)|  | |

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

## `updateFieldConfigurationItems()`

```php
updateFieldConfigurationItems($id, $field_configuration_items_details): mixed
```

Update field configuration items

Updates fields in a field configuration. The properties of the field configuration fields provided override the existing values.  This operation can only update field configurations used in company-managed (classic) projects.  The operation can set the renderer for text fields to the default text renderer (`text-renderer`) or wiki style renderer (`wiki-renderer`). However, the renderer cannot be updated for fields using the autocomplete renderer (`autocomplete-renderer`).  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueFieldConfigurationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the field configuration.
$field_configuration_items_details = {"fieldConfigurationItems":[{"description":"The new description of this item.","id":"customfield_10012","isHidden":false},{"id":"customfield_10011","isRequired":true},{"description":"Another new description.","id":"customfield_10010","isHidden":false,"isRequired":false,"renderer":"wiki-renderer"}]}; // \OpenAPI\Client\Model\FieldConfigurationItemsDetails

try {
    $result = $apiInstance->updateFieldConfigurationItems($id, $field_configuration_items_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueFieldConfigurationsApi->updateFieldConfigurationItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the field configuration. | |
| **field_configuration_items_details** | [**\OpenAPI\Client\Model\FieldConfigurationItemsDetails**](../Model/FieldConfigurationItemsDetails.md)|  | |

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

## `updateFieldConfigurationScheme()`

```php
updateFieldConfigurationScheme($id, $update_field_configuration_scheme_details): mixed
```

Update field configuration scheme

Updates a field configuration scheme.  This operation can only update field configuration schemes used in company-managed (classic) projects.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\IssueFieldConfigurationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the field configuration scheme.
$update_field_configuration_scheme_details = {"description":"We can use this one for software projects.","name":"Field Configuration Scheme for software related projects"}; // \OpenAPI\Client\Model\UpdateFieldConfigurationSchemeDetails | The details of the field configuration scheme.

try {
    $result = $apiInstance->updateFieldConfigurationScheme($id, $update_field_configuration_scheme_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueFieldConfigurationsApi->updateFieldConfigurationScheme: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the field configuration scheme. | |
| **update_field_configuration_scheme_details** | [**\OpenAPI\Client\Model\UpdateFieldConfigurationSchemeDetails**](../Model/UpdateFieldConfigurationSchemeDetails.md)| The details of the field configuration scheme. | |

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
