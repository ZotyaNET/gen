# OpenAPI\Client\ProjectEmailApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getProjectEmail()**](ProjectEmailApi.md#getProjectEmail) | **GET** /rest/api/2/project/{projectId}/email | Get project&#39;s sender email |
| [**updateProjectEmail()**](ProjectEmailApi.md#updateProjectEmail) | **PUT** /rest/api/2/project/{projectId}/email | Set project&#39;s sender email |


## `getProjectEmail()`

```php
getProjectEmail($project_id): \OpenAPI\Client\Model\ProjectEmailAddress
```

Get project's sender email

Returns the [project's sender email address](https://confluence.atlassian.com/x/dolKLg).  **[Permissions](#permissions) required:** *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project.

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


$apiInstance = new OpenAPI\Client\Api\ProjectEmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 56; // int | The project ID.

try {
    $result = $apiInstance->getProjectEmail($project_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectEmailApi->getProjectEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| The project ID. | |

### Return type

[**\OpenAPI\Client\Model\ProjectEmailAddress**](../Model/ProjectEmailAddress.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProjectEmail()`

```php
updateProjectEmail($project_id, $project_email_address): mixed
```

Set project's sender email

Sets the [project's sender email address](https://confluence.atlassian.com/x/dolKLg).  If `emailAddress` is an empty string, the default email address is restored.  **[Permissions](#permissions) required:** *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project.

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


$apiInstance = new OpenAPI\Client\Api\ProjectEmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 56; // int | The project ID.
$project_email_address = {"emailAddress":"jira@example.atlassian.net"}; // \OpenAPI\Client\Model\ProjectEmailAddress | The project's sender email address to be set.

try {
    $result = $apiInstance->updateProjectEmail($project_id, $project_email_address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectEmailApi->updateProjectEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| The project ID. | |
| **project_email_address** | [**\OpenAPI\Client\Model\ProjectEmailAddress**](../Model/ProjectEmailAddress.md)| The project&#39;s sender email address to be set. | |

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
