# OpenAPI\Client\WorkflowTransitionPropertiesApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createWorkflowTransitionProperty()**](WorkflowTransitionPropertiesApi.md#createWorkflowTransitionProperty) | **POST** /rest/api/2/workflow/transitions/{transitionId}/properties | Create workflow transition property |
| [**deleteWorkflowTransitionProperty()**](WorkflowTransitionPropertiesApi.md#deleteWorkflowTransitionProperty) | **DELETE** /rest/api/2/workflow/transitions/{transitionId}/properties | Delete workflow transition property |
| [**getWorkflowTransitionProperties()**](WorkflowTransitionPropertiesApi.md#getWorkflowTransitionProperties) | **GET** /rest/api/2/workflow/transitions/{transitionId}/properties | Get workflow transition properties |
| [**updateWorkflowTransitionProperty()**](WorkflowTransitionPropertiesApi.md#updateWorkflowTransitionProperty) | **PUT** /rest/api/2/workflow/transitions/{transitionId}/properties | Update workflow transition property |


## `createWorkflowTransitionProperty()`

```php
createWorkflowTransitionProperty($transition_id, $key, $workflow_name, $request_body, $workflow_mode): \OpenAPI\Client\Model\WorkflowTransitionProperty
```

Create workflow transition property

Adds a property to a workflow transition. Transition properties are used to change the behavior of a transition. For more information, see [Transition properties](https://confluence.atlassian.com/x/zIhKLg#Advancedworkflowconfiguration-transitionproperties) and [Workflow properties](https://confluence.atlassian.com/x/JYlKLg).  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\WorkflowTransitionPropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transition_id = 56; // int | The ID of the transition. To get the ID, view the workflow in text mode in the Jira admin settings. The ID is shown next to the transition.
$key = 'key_example'; // string | The key of the property being added, also known as the name of the property. Set this to the same value as the `key` defined in the request body.
$workflow_name = 'workflow_name_example'; // string | The name of the workflow that the transition belongs to.
$request_body = {"value":"createissue"}; // array<string,mixed>
$workflow_mode = 'live'; // string | The workflow status. Set to *live* for inactive workflows or *draft* for draft workflows. Active workflows cannot be edited.

try {
    $result = $apiInstance->createWorkflowTransitionProperty($transition_id, $key, $workflow_name, $request_body, $workflow_mode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowTransitionPropertiesApi->createWorkflowTransitionProperty: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transition_id** | **int**| The ID of the transition. To get the ID, view the workflow in text mode in the Jira admin settings. The ID is shown next to the transition. | |
| **key** | **string**| The key of the property being added, also known as the name of the property. Set this to the same value as the &#x60;key&#x60; defined in the request body. | |
| **workflow_name** | **string**| The name of the workflow that the transition belongs to. | |
| **request_body** | [**array<string,mixed>**](../Model/mixed.md)|  | |
| **workflow_mode** | **string**| The workflow status. Set to *live* for inactive workflows or *draft* for draft workflows. Active workflows cannot be edited. | [optional] [default to &#39;live&#39;] |

### Return type

[**\OpenAPI\Client\Model\WorkflowTransitionProperty**](../Model/WorkflowTransitionProperty.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWorkflowTransitionProperty()`

```php
deleteWorkflowTransitionProperty($transition_id, $key, $workflow_name, $workflow_mode)
```

Delete workflow transition property

Deletes a property from a workflow transition. Transition properties are used to change the behavior of a transition. For more information, see [Transition properties](https://confluence.atlassian.com/x/zIhKLg#Advancedworkflowconfiguration-transitionproperties) and [Workflow properties](https://confluence.atlassian.com/x/JYlKLg).  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\WorkflowTransitionPropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transition_id = 56; // int | The ID of the transition. To get the ID, view the workflow in text mode in the Jira admin settings. The ID is shown next to the transition.
$key = 'key_example'; // string | The name of the transition property to delete, also known as the name of the property.
$workflow_name = 'workflow_name_example'; // string | The name of the workflow that the transition belongs to.
$workflow_mode = 'workflow_mode_example'; // string | The workflow status. Set to `live` for inactive workflows or `draft` for draft workflows. Active workflows cannot be edited.

try {
    $apiInstance->deleteWorkflowTransitionProperty($transition_id, $key, $workflow_name, $workflow_mode);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowTransitionPropertiesApi->deleteWorkflowTransitionProperty: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transition_id** | **int**| The ID of the transition. To get the ID, view the workflow in text mode in the Jira admin settings. The ID is shown next to the transition. | |
| **key** | **string**| The name of the transition property to delete, also known as the name of the property. | |
| **workflow_name** | **string**| The name of the workflow that the transition belongs to. | |
| **workflow_mode** | **string**| The workflow status. Set to &#x60;live&#x60; for inactive workflows or &#x60;draft&#x60; for draft workflows. Active workflows cannot be edited. | [optional] |

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

## `getWorkflowTransitionProperties()`

```php
getWorkflowTransitionProperties($transition_id, $workflow_name, $include_reserved_keys, $key, $workflow_mode): \OpenAPI\Client\Model\WorkflowTransitionProperty
```

Get workflow transition properties

Returns the properties on a workflow transition. Transition properties are used to change the behavior of a transition. For more information, see [Transition properties](https://confluence.atlassian.com/x/zIhKLg#Advancedworkflowconfiguration-transitionproperties) and [Workflow properties](https://confluence.atlassian.com/x/JYlKLg).  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\WorkflowTransitionPropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transition_id = 56; // int | The ID of the transition. To get the ID, view the workflow in text mode in the Jira administration console. The ID is shown next to the transition.
$workflow_name = 'workflow_name_example'; // string | The name of the workflow that the transition belongs to.
$include_reserved_keys = false; // bool | Some properties with keys that have the *jira.* prefix are reserved, which means they are not editable. To include these properties in the results, set this parameter to *true*.
$key = 'key_example'; // string | The key of the property being returned, also known as the name of the property. If this parameter is not specified, all properties on the transition are returned.
$workflow_mode = 'live'; // string | The workflow status. Set to *live* for active and inactive workflows, or *draft* for draft workflows.

try {
    $result = $apiInstance->getWorkflowTransitionProperties($transition_id, $workflow_name, $include_reserved_keys, $key, $workflow_mode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowTransitionPropertiesApi->getWorkflowTransitionProperties: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transition_id** | **int**| The ID of the transition. To get the ID, view the workflow in text mode in the Jira administration console. The ID is shown next to the transition. | |
| **workflow_name** | **string**| The name of the workflow that the transition belongs to. | |
| **include_reserved_keys** | **bool**| Some properties with keys that have the *jira.* prefix are reserved, which means they are not editable. To include these properties in the results, set this parameter to *true*. | [optional] [default to false] |
| **key** | **string**| The key of the property being returned, also known as the name of the property. If this parameter is not specified, all properties on the transition are returned. | [optional] |
| **workflow_mode** | **string**| The workflow status. Set to *live* for active and inactive workflows, or *draft* for draft workflows. | [optional] [default to &#39;live&#39;] |

### Return type

[**\OpenAPI\Client\Model\WorkflowTransitionProperty**](../Model/WorkflowTransitionProperty.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWorkflowTransitionProperty()`

```php
updateWorkflowTransitionProperty($transition_id, $key, $workflow_name, $request_body, $workflow_mode): \OpenAPI\Client\Model\WorkflowTransitionProperty
```

Update workflow transition property

Updates a workflow transition by changing the property value. Trying to update a property that does not exist results in a new property being added to the transition. Transition properties are used to change the behavior of a transition. For more information, see [Transition properties](https://confluence.atlassian.com/x/zIhKLg#Advancedworkflowconfiguration-transitionproperties) and [Workflow properties](https://confluence.atlassian.com/x/JYlKLg).  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\WorkflowTransitionPropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transition_id = 56; // int | The ID of the transition. To get the ID, view the workflow in text mode in the Jira admin settings. The ID is shown next to the transition.
$key = 'key_example'; // string | The key of the property being updated, also known as the name of the property. Set this to the same value as the `key` defined in the request body.
$workflow_name = 'workflow_name_example'; // string | The name of the workflow that the transition belongs to.
$request_body = {"value":"createissue"}; // array<string,mixed>
$workflow_mode = 'workflow_mode_example'; // string | The workflow status. Set to `live` for inactive workflows or `draft` for draft workflows. Active workflows cannot be edited.

try {
    $result = $apiInstance->updateWorkflowTransitionProperty($transition_id, $key, $workflow_name, $request_body, $workflow_mode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowTransitionPropertiesApi->updateWorkflowTransitionProperty: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transition_id** | **int**| The ID of the transition. To get the ID, view the workflow in text mode in the Jira admin settings. The ID is shown next to the transition. | |
| **key** | **string**| The key of the property being updated, also known as the name of the property. Set this to the same value as the &#x60;key&#x60; defined in the request body. | |
| **workflow_name** | **string**| The name of the workflow that the transition belongs to. | |
| **request_body** | [**array<string,mixed>**](../Model/mixed.md)|  | |
| **workflow_mode** | **string**| The workflow status. Set to &#x60;live&#x60; for inactive workflows or &#x60;draft&#x60; for draft workflows. Active workflows cannot be edited. | [optional] |

### Return type

[**\OpenAPI\Client\Model\WorkflowTransitionProperty**](../Model/WorkflowTransitionProperty.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
