# OpenAPI\Client\WorkflowSchemesApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createWorkflowScheme()**](WorkflowSchemesApi.md#createWorkflowScheme) | **POST** /rest/api/2/workflowscheme | Create workflow scheme |
| [**deleteDefaultWorkflow()**](WorkflowSchemesApi.md#deleteDefaultWorkflow) | **DELETE** /rest/api/2/workflowscheme/{id}/default | Delete default workflow |
| [**deleteWorkflowMapping()**](WorkflowSchemesApi.md#deleteWorkflowMapping) | **DELETE** /rest/api/2/workflowscheme/{id}/workflow | Delete issue types for workflow in workflow scheme |
| [**deleteWorkflowScheme()**](WorkflowSchemesApi.md#deleteWorkflowScheme) | **DELETE** /rest/api/2/workflowscheme/{id} | Delete workflow scheme |
| [**deleteWorkflowSchemeIssueType()**](WorkflowSchemesApi.md#deleteWorkflowSchemeIssueType) | **DELETE** /rest/api/2/workflowscheme/{id}/issuetype/{issueType} | Delete workflow for issue type in workflow scheme |
| [**getAllWorkflowSchemes()**](WorkflowSchemesApi.md#getAllWorkflowSchemes) | **GET** /rest/api/2/workflowscheme | Get all workflow schemes |
| [**getDefaultWorkflow()**](WorkflowSchemesApi.md#getDefaultWorkflow) | **GET** /rest/api/2/workflowscheme/{id}/default | Get default workflow |
| [**getWorkflow()**](WorkflowSchemesApi.md#getWorkflow) | **GET** /rest/api/2/workflowscheme/{id}/workflow | Get issue types for workflows in workflow scheme |
| [**getWorkflowScheme()**](WorkflowSchemesApi.md#getWorkflowScheme) | **GET** /rest/api/2/workflowscheme/{id} | Get workflow scheme |
| [**getWorkflowSchemeIssueType()**](WorkflowSchemesApi.md#getWorkflowSchemeIssueType) | **GET** /rest/api/2/workflowscheme/{id}/issuetype/{issueType} | Get workflow for issue type in workflow scheme |
| [**setWorkflowSchemeIssueType()**](WorkflowSchemesApi.md#setWorkflowSchemeIssueType) | **PUT** /rest/api/2/workflowscheme/{id}/issuetype/{issueType} | Set workflow for issue type in workflow scheme |
| [**updateDefaultWorkflow()**](WorkflowSchemesApi.md#updateDefaultWorkflow) | **PUT** /rest/api/2/workflowscheme/{id}/default | Update default workflow |
| [**updateWorkflowMapping()**](WorkflowSchemesApi.md#updateWorkflowMapping) | **PUT** /rest/api/2/workflowscheme/{id}/workflow | Set issue types for workflow in workflow scheme |
| [**updateWorkflowScheme()**](WorkflowSchemesApi.md#updateWorkflowScheme) | **PUT** /rest/api/2/workflowscheme/{id} | Update workflow scheme |


## `createWorkflowScheme()`

```php
createWorkflowScheme($workflow_scheme): \OpenAPI\Client\Model\WorkflowScheme
```

Create workflow scheme

Creates a workflow scheme.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\WorkflowSchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workflow_scheme = {"defaultWorkflow":"jira","description":"The description of the example workflow scheme.","issueTypeMappings":{"10000":"scrum workflow","10001":"builds workflow"},"name":"Example workflow scheme"}; // \OpenAPI\Client\Model\WorkflowScheme

try {
    $result = $apiInstance->createWorkflowScheme($workflow_scheme);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowSchemesApi->createWorkflowScheme: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workflow_scheme** | [**\OpenAPI\Client\Model\WorkflowScheme**](../Model/WorkflowScheme.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WorkflowScheme**](../Model/WorkflowScheme.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDefaultWorkflow()`

```php
deleteDefaultWorkflow($id, $update_draft_if_needed): \OpenAPI\Client\Model\WorkflowScheme
```

Delete default workflow

Resets the default workflow for a workflow scheme. That is, the default workflow is set to Jira's system workflow (the *jira* workflow).  Note that active workflow schemes cannot be edited. If the workflow scheme is active, set `updateDraftIfNeeded` to `true` and a draft workflow scheme is created or updated with the default workflow reset. The draft workflow scheme can be published in Jira.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\WorkflowSchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the workflow scheme.
$update_draft_if_needed = True; // bool | Set to true to create or update the draft of a workflow scheme and delete the mapping from the draft, when the workflow scheme cannot be edited. Defaults to `false`.

try {
    $result = $apiInstance->deleteDefaultWorkflow($id, $update_draft_if_needed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowSchemesApi->deleteDefaultWorkflow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the workflow scheme. | |
| **update_draft_if_needed** | **bool**| Set to true to create or update the draft of a workflow scheme and delete the mapping from the draft, when the workflow scheme cannot be edited. Defaults to &#x60;false&#x60;. | [optional] |

### Return type

[**\OpenAPI\Client\Model\WorkflowScheme**](../Model/WorkflowScheme.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWorkflowMapping()`

```php
deleteWorkflowMapping($id, $workflow_name, $update_draft_if_needed)
```

Delete issue types for workflow in workflow scheme

Deletes the workflow-issue type mapping for a workflow in a workflow scheme.  Note that active workflow schemes cannot be edited. If the workflow scheme is active, set `updateDraftIfNeeded` to `true` and a draft workflow scheme is created or updated with the workflow-issue type mapping deleted. The draft workflow scheme can be published in Jira.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\WorkflowSchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the workflow scheme.
$workflow_name = 'workflow_name_example'; // string | The name of the workflow.
$update_draft_if_needed = True; // bool | Set to true to create or update the draft of a workflow scheme and delete the mapping from the draft, when the workflow scheme cannot be edited. Defaults to `false`.

try {
    $apiInstance->deleteWorkflowMapping($id, $workflow_name, $update_draft_if_needed);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowSchemesApi->deleteWorkflowMapping: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the workflow scheme. | |
| **workflow_name** | **string**| The name of the workflow. | |
| **update_draft_if_needed** | **bool**| Set to true to create or update the draft of a workflow scheme and delete the mapping from the draft, when the workflow scheme cannot be edited. Defaults to &#x60;false&#x60;. | [optional] |

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

## `deleteWorkflowScheme()`

```php
deleteWorkflowScheme($id): mixed
```

Delete workflow scheme

Deletes a workflow scheme. Note that a workflow scheme cannot be deleted if it is active (that is, being used by at least one project).  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\WorkflowSchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the workflow scheme. Find this ID by editing the desired workflow scheme in Jira. The ID is shown in the URL as `schemeId`. For example, *schemeId=10301*.

try {
    $result = $apiInstance->deleteWorkflowScheme($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowSchemesApi->deleteWorkflowScheme: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the workflow scheme. Find this ID by editing the desired workflow scheme in Jira. The ID is shown in the URL as &#x60;schemeId&#x60;. For example, *schemeId&#x3D;10301*. | |

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

## `deleteWorkflowSchemeIssueType()`

```php
deleteWorkflowSchemeIssueType($id, $issue_type, $update_draft_if_needed): \OpenAPI\Client\Model\WorkflowScheme
```

Delete workflow for issue type in workflow scheme

Deletes the issue type-workflow mapping for an issue type in a workflow scheme.  Note that active workflow schemes cannot be edited. If the workflow scheme is active, set `updateDraftIfNeeded` to `true` and a draft workflow scheme is created or updated with the issue type-workflow mapping deleted. The draft workflow scheme can be published in Jira.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\WorkflowSchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the workflow scheme.
$issue_type = 'issue_type_example'; // string | The ID of the issue type.
$update_draft_if_needed = True; // bool | Set to true to create or update the draft of a workflow scheme and update the mapping in the draft, when the workflow scheme cannot be edited. Defaults to `false`.

try {
    $result = $apiInstance->deleteWorkflowSchemeIssueType($id, $issue_type, $update_draft_if_needed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowSchemesApi->deleteWorkflowSchemeIssueType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the workflow scheme. | |
| **issue_type** | **string**| The ID of the issue type. | |
| **update_draft_if_needed** | **bool**| Set to true to create or update the draft of a workflow scheme and update the mapping in the draft, when the workflow scheme cannot be edited. Defaults to &#x60;false&#x60;. | [optional] |

### Return type

[**\OpenAPI\Client\Model\WorkflowScheme**](../Model/WorkflowScheme.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllWorkflowSchemes()`

```php
getAllWorkflowSchemes($start_at, $max_results): \OpenAPI\Client\Model\PageBeanWorkflowScheme
```

Get all workflow schemes

Returns a [paginated](#pagination) list of all workflow schemes, not including draft workflow schemes.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\WorkflowSchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_at = 0; // int | The index of the first item to return in a page of results (page offset).
$max_results = 50; // int | The maximum number of items to return per page.

try {
    $result = $apiInstance->getAllWorkflowSchemes($start_at, $max_results);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowSchemesApi->getAllWorkflowSchemes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_at** | **int**| The index of the first item to return in a page of results (page offset). | [optional] [default to 0] |
| **max_results** | **int**| The maximum number of items to return per page. | [optional] [default to 50] |

### Return type

[**\OpenAPI\Client\Model\PageBeanWorkflowScheme**](../Model/PageBeanWorkflowScheme.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDefaultWorkflow()`

```php
getDefaultWorkflow($id, $return_draft_if_exists): \OpenAPI\Client\Model\DefaultWorkflow
```

Get default workflow

Returns the default workflow for a workflow scheme. The default workflow is the workflow that is assigned any issue types that have not been mapped to any other workflow. The default workflow has *All Unassigned Issue Types* listed in its issue types for the workflow scheme in Jira.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\WorkflowSchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the workflow scheme.
$return_draft_if_exists = false; // bool | Set to `true` to return the default workflow for the workflow scheme's draft rather than scheme itself. If the workflow scheme does not have a draft, then the default workflow for the workflow scheme is returned.

try {
    $result = $apiInstance->getDefaultWorkflow($id, $return_draft_if_exists);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowSchemesApi->getDefaultWorkflow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the workflow scheme. | |
| **return_draft_if_exists** | **bool**| Set to &#x60;true&#x60; to return the default workflow for the workflow scheme&#39;s draft rather than scheme itself. If the workflow scheme does not have a draft, then the default workflow for the workflow scheme is returned. | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\DefaultWorkflow**](../Model/DefaultWorkflow.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWorkflow()`

```php
getWorkflow($id, $workflow_name, $return_draft_if_exists): \OpenAPI\Client\Model\IssueTypesWorkflowMapping
```

Get issue types for workflows in workflow scheme

Returns the workflow-issue type mappings for a workflow scheme.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\WorkflowSchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the workflow scheme.
$workflow_name = 'workflow_name_example'; // string | The name of a workflow in the scheme. Limits the results to the workflow-issue type mapping for the specified workflow.
$return_draft_if_exists = false; // bool | Returns the mapping from the workflow scheme's draft rather than the workflow scheme, if set to true. If no draft exists, the mapping from the workflow scheme is returned.

try {
    $result = $apiInstance->getWorkflow($id, $workflow_name, $return_draft_if_exists);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowSchemesApi->getWorkflow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the workflow scheme. | |
| **workflow_name** | **string**| The name of a workflow in the scheme. Limits the results to the workflow-issue type mapping for the specified workflow. | [optional] |
| **return_draft_if_exists** | **bool**| Returns the mapping from the workflow scheme&#39;s draft rather than the workflow scheme, if set to true. If no draft exists, the mapping from the workflow scheme is returned. | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\IssueTypesWorkflowMapping**](../Model/IssueTypesWorkflowMapping.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWorkflowScheme()`

```php
getWorkflowScheme($id, $return_draft_if_exists): \OpenAPI\Client\Model\WorkflowScheme
```

Get workflow scheme

Returns a workflow scheme.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\WorkflowSchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the workflow scheme. Find this ID by editing the desired workflow scheme in Jira. The ID is shown in the URL as `schemeId`. For example, *schemeId=10301*.
$return_draft_if_exists = false; // bool | Returns the workflow scheme's draft rather than scheme itself, if set to true. If the workflow scheme does not have a draft, then the workflow scheme is returned.

try {
    $result = $apiInstance->getWorkflowScheme($id, $return_draft_if_exists);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowSchemesApi->getWorkflowScheme: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the workflow scheme. Find this ID by editing the desired workflow scheme in Jira. The ID is shown in the URL as &#x60;schemeId&#x60;. For example, *schemeId&#x3D;10301*. | |
| **return_draft_if_exists** | **bool**| Returns the workflow scheme&#39;s draft rather than scheme itself, if set to true. If the workflow scheme does not have a draft, then the workflow scheme is returned. | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\WorkflowScheme**](../Model/WorkflowScheme.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWorkflowSchemeIssueType()`

```php
getWorkflowSchemeIssueType($id, $issue_type, $return_draft_if_exists): \OpenAPI\Client\Model\IssueTypeWorkflowMapping
```

Get workflow for issue type in workflow scheme

Returns the issue type-workflow mapping for an issue type in a workflow scheme.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\WorkflowSchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the workflow scheme.
$issue_type = 'issue_type_example'; // string | The ID of the issue type.
$return_draft_if_exists = false; // bool | Returns the mapping from the workflow scheme's draft rather than the workflow scheme, if set to true. If no draft exists, the mapping from the workflow scheme is returned.

try {
    $result = $apiInstance->getWorkflowSchemeIssueType($id, $issue_type, $return_draft_if_exists);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowSchemesApi->getWorkflowSchemeIssueType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the workflow scheme. | |
| **issue_type** | **string**| The ID of the issue type. | |
| **return_draft_if_exists** | **bool**| Returns the mapping from the workflow scheme&#39;s draft rather than the workflow scheme, if set to true. If no draft exists, the mapping from the workflow scheme is returned. | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\IssueTypeWorkflowMapping**](../Model/IssueTypeWorkflowMapping.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setWorkflowSchemeIssueType()`

```php
setWorkflowSchemeIssueType($id, $issue_type, $issue_type_workflow_mapping): \OpenAPI\Client\Model\WorkflowScheme
```

Set workflow for issue type in workflow scheme

Sets the workflow for an issue type in a workflow scheme.  Note that active workflow schemes cannot be edited. If the workflow scheme is active, set `updateDraftIfNeeded` to `true` in the request body and a draft workflow scheme is created or updated with the new issue type-workflow mapping. The draft workflow scheme can be published in Jira.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\WorkflowSchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the workflow scheme.
$issue_type = 'issue_type_example'; // string | The ID of the issue type.
$issue_type_workflow_mapping = {"issueType":"10000","updateDraftIfNeeded":false,"workflow":"jira"}; // \OpenAPI\Client\Model\IssueTypeWorkflowMapping | The issue type-project mapping.

try {
    $result = $apiInstance->setWorkflowSchemeIssueType($id, $issue_type, $issue_type_workflow_mapping);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowSchemesApi->setWorkflowSchemeIssueType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the workflow scheme. | |
| **issue_type** | **string**| The ID of the issue type. | |
| **issue_type_workflow_mapping** | [**\OpenAPI\Client\Model\IssueTypeWorkflowMapping**](../Model/IssueTypeWorkflowMapping.md)| The issue type-project mapping. | |

### Return type

[**\OpenAPI\Client\Model\WorkflowScheme**](../Model/WorkflowScheme.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDefaultWorkflow()`

```php
updateDefaultWorkflow($id, $default_workflow): \OpenAPI\Client\Model\WorkflowScheme
```

Update default workflow

Sets the default workflow for a workflow scheme.  Note that active workflow schemes cannot be edited. If the workflow scheme is active, set `updateDraftIfNeeded` to `true` in the request object and a draft workflow scheme is created or updated with the new default workflow. The draft workflow scheme can be published in Jira.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\WorkflowSchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the workflow scheme.
$default_workflow = {"updateDraftIfNeeded":false,"workflow":"jira"}; // \OpenAPI\Client\Model\DefaultWorkflow | The new default workflow.

try {
    $result = $apiInstance->updateDefaultWorkflow($id, $default_workflow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowSchemesApi->updateDefaultWorkflow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the workflow scheme. | |
| **default_workflow** | [**\OpenAPI\Client\Model\DefaultWorkflow**](../Model/DefaultWorkflow.md)| The new default workflow. | |

### Return type

[**\OpenAPI\Client\Model\WorkflowScheme**](../Model/WorkflowScheme.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWorkflowMapping()`

```php
updateWorkflowMapping($id, $workflow_name, $issue_types_workflow_mapping): \OpenAPI\Client\Model\WorkflowScheme
```

Set issue types for workflow in workflow scheme

Sets the issue types for a workflow in a workflow scheme. The workflow can also be set as the default workflow for the workflow scheme. Unmapped issues types are mapped to the default workflow.  Note that active workflow schemes cannot be edited. If the workflow scheme is active, set `updateDraftIfNeeded` to `true` in the request body and a draft workflow scheme is created or updated with the new workflow-issue types mappings. The draft workflow scheme can be published in Jira.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\WorkflowSchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the workflow scheme.
$workflow_name = 'workflow_name_example'; // string | The name of the workflow.
$issue_types_workflow_mapping = {"issueTypes":["10000"],"updateDraftIfNeeded":true,"workflow":"jira"}; // \OpenAPI\Client\Model\IssueTypesWorkflowMapping

try {
    $result = $apiInstance->updateWorkflowMapping($id, $workflow_name, $issue_types_workflow_mapping);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowSchemesApi->updateWorkflowMapping: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the workflow scheme. | |
| **workflow_name** | **string**| The name of the workflow. | |
| **issue_types_workflow_mapping** | [**\OpenAPI\Client\Model\IssueTypesWorkflowMapping**](../Model/IssueTypesWorkflowMapping.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WorkflowScheme**](../Model/WorkflowScheme.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWorkflowScheme()`

```php
updateWorkflowScheme($id, $workflow_scheme): \OpenAPI\Client\Model\WorkflowScheme
```

Update workflow scheme

Updates a workflow scheme, including the name, default workflow, issue type to project mappings, and more. If the workflow scheme is active (that is, being used by at least one project), then a draft workflow scheme is created or updated instead, provided that `updateDraftIfNeeded` is set to `true`.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\WorkflowSchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the workflow scheme. Find this ID by editing the desired workflow scheme in Jira. The ID is shown in the URL as `schemeId`. For example, *schemeId=10301*.
$workflow_scheme = {"defaultWorkflow":"jira","description":"The description of the example workflow scheme.","issueTypeMappings":{"10000":"scrum workflow"},"name":"Example workflow scheme","updateDraftIfNeeded":false}; // \OpenAPI\Client\Model\WorkflowScheme

try {
    $result = $apiInstance->updateWorkflowScheme($id, $workflow_scheme);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowSchemesApi->updateWorkflowScheme: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the workflow scheme. Find this ID by editing the desired workflow scheme in Jira. The ID is shown in the URL as &#x60;schemeId&#x60;. For example, *schemeId&#x3D;10301*. | |
| **workflow_scheme** | [**\OpenAPI\Client\Model\WorkflowScheme**](../Model/WorkflowScheme.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WorkflowScheme**](../Model/WorkflowScheme.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
