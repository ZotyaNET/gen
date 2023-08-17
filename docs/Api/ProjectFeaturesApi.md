# OpenAPI\Client\ProjectFeaturesApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getFeaturesForProject()**](ProjectFeaturesApi.md#getFeaturesForProject) | **GET** /rest/api/2/project/{projectIdOrKey}/features | Get project features |
| [**toggleFeatureForProject()**](ProjectFeaturesApi.md#toggleFeatureForProject) | **PUT** /rest/api/2/project/{projectIdOrKey}/features/{featureKey} | Set project feature state |


## `getFeaturesForProject()`

```php
getFeaturesForProject($project_id_or_key): \OpenAPI\Client\Model\ContainerForProjectFeatures
```

Get project features

Returns the list of features for a project.

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


$apiInstance = new OpenAPI\Client\Api\ProjectFeaturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id_or_key = 'project_id_or_key_example'; // string | The ID or (case-sensitive) key of the project.

try {
    $result = $apiInstance->getFeaturesForProject($project_id_or_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectFeaturesApi->getFeaturesForProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id_or_key** | **string**| The ID or (case-sensitive) key of the project. | |

### Return type

[**\OpenAPI\Client\Model\ContainerForProjectFeatures**](../Model/ContainerForProjectFeatures.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `toggleFeatureForProject()`

```php
toggleFeatureForProject($project_id_or_key, $feature_key, $project_feature_state): \OpenAPI\Client\Model\ContainerForProjectFeatures
```

Set project feature state

Sets the state of a project feature.

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


$apiInstance = new OpenAPI\Client\Api\ProjectFeaturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id_or_key = 'project_id_or_key_example'; // string | The ID or (case-sensitive) key of the project.
$feature_key = 'feature_key_example'; // string | The key of the feature.
$project_feature_state = {"state":"ENABLED"}; // \OpenAPI\Client\Model\ProjectFeatureState | Details of the feature state change.

try {
    $result = $apiInstance->toggleFeatureForProject($project_id_or_key, $feature_key, $project_feature_state);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectFeaturesApi->toggleFeatureForProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id_or_key** | **string**| The ID or (case-sensitive) key of the project. | |
| **feature_key** | **string**| The key of the feature. | |
| **project_feature_state** | [**\OpenAPI\Client\Model\ProjectFeatureState**](../Model/ProjectFeatureState.md)| Details of the feature state change. | |

### Return type

[**\OpenAPI\Client\Model\ContainerForProjectFeatures**](../Model/ContainerForProjectFeatures.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
