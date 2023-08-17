# OpenAPI\Client\ProjectCategoriesApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createProjectCategory()**](ProjectCategoriesApi.md#createProjectCategory) | **POST** /rest/api/2/projectCategory | Create project category |
| [**getAllProjectCategories()**](ProjectCategoriesApi.md#getAllProjectCategories) | **GET** /rest/api/2/projectCategory | Get all project categories |
| [**getProjectCategoryById()**](ProjectCategoriesApi.md#getProjectCategoryById) | **GET** /rest/api/2/projectCategory/{id} | Get project category by ID |
| [**removeProjectCategory()**](ProjectCategoriesApi.md#removeProjectCategory) | **DELETE** /rest/api/2/projectCategory/{id} | Delete project category |
| [**updateProjectCategory()**](ProjectCategoriesApi.md#updateProjectCategory) | **PUT** /rest/api/2/projectCategory/{id} | Update project category |


## `createProjectCategory()`

```php
createProjectCategory($project_category): \OpenAPI\Client\Model\ProjectCategory
```

Create project category

Creates a project category.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\ProjectCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_category = {"description":"Created Project Category","name":"CREATED"}; // \OpenAPI\Client\Model\ProjectCategory

try {
    $result = $apiInstance->createProjectCategory($project_category);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectCategoriesApi->createProjectCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_category** | [**\OpenAPI\Client\Model\ProjectCategory**](../Model/ProjectCategory.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProjectCategory**](../Model/ProjectCategory.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllProjectCategories()`

```php
getAllProjectCategories(): \OpenAPI\Client\Model\ProjectCategory[]
```

Get all project categories

Returns all project categories.  **[Permissions](#permissions) required:** Permission to access Jira.

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


$apiInstance = new OpenAPI\Client\Api\ProjectCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllProjectCategories();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectCategoriesApi->getAllProjectCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ProjectCategory[]**](../Model/ProjectCategory.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProjectCategoryById()`

```php
getProjectCategoryById($id): \OpenAPI\Client\Model\ProjectCategory
```

Get project category by ID

Returns a project category.  **[Permissions](#permissions) required:** Permission to access Jira.

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


$apiInstance = new OpenAPI\Client\Api\ProjectCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the project category.

try {
    $result = $apiInstance->getProjectCategoryById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectCategoriesApi->getProjectCategoryById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the project category. | |

### Return type

[**\OpenAPI\Client\Model\ProjectCategory**](../Model/ProjectCategory.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeProjectCategory()`

```php
removeProjectCategory($id)
```

Delete project category

Deletes a project category.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\ProjectCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of the project category to delete.

try {
    $apiInstance->removeProjectCategory($id);
} catch (Exception $e) {
    echo 'Exception when calling ProjectCategoriesApi->removeProjectCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of the project category to delete. | |

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

## `updateProjectCategory()`

```php
updateProjectCategory($id, $project_category): \OpenAPI\Client\Model\UpdatedProjectCategory
```

Update project category

Updates a project category.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\ProjectCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$project_category = {"description":"Updated Project Category","name":"UPDATED"}; // \OpenAPI\Client\Model\ProjectCategory

try {
    $result = $apiInstance->updateProjectCategory($id, $project_category);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectCategoriesApi->updateProjectCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **project_category** | [**\OpenAPI\Client\Model\ProjectCategory**](../Model/ProjectCategory.md)|  | |

### Return type

[**\OpenAPI\Client\Model\UpdatedProjectCategory**](../Model/UpdatedProjectCategory.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
