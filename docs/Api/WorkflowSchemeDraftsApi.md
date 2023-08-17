# OpenAPI\Client\WorkflowSchemeDraftsApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createWorkflowSchemeDraftFromParent()**](WorkflowSchemeDraftsApi.md#createWorkflowSchemeDraftFromParent) | **POST** /rest/api/2/workflowscheme/{id}/createdraft | Create draft workflow scheme |
| [**deleteDraftDefaultWorkflow()**](WorkflowSchemeDraftsApi.md#deleteDraftDefaultWorkflow) | **DELETE** /rest/api/2/workflowscheme/{id}/draft/default | Delete draft default workflow |
| [**deleteDraftWorkflowMapping()**](WorkflowSchemeDraftsApi.md#deleteDraftWorkflowMapping) | **DELETE** /rest/api/2/workflowscheme/{id}/draft/workflow | Delete issue types for workflow in draft workflow scheme |
| [**deleteWorkflowSchemeDraft()**](WorkflowSchemeDraftsApi.md#deleteWorkflowSchemeDraft) | **DELETE** /rest/api/2/workflowscheme/{id}/draft | Delete draft workflow scheme |
| [**deleteWorkflowSchemeDraftIssueType()**](WorkflowSchemeDraftsApi.md#deleteWorkflowSchemeDraftIssueType) | **DELETE** /rest/api/2/workflowscheme/{id}/draft/issuetype/{issueType} | Delete workflow for issue type in draft workflow scheme |
| [**getDraftDefaultWorkflow()**](WorkflowSchemeDraftsApi.md#getDraftDefaultWorkflow) | **GET** /rest/api/2/workflowscheme/{id}/draft/default | Get draft default workflow |
| [**getDraftWorkflow()**](WorkflowSchemeDraftsApi.md#getDraftWorkflow) | **GET** /rest/api/2/workflowscheme/{id}/draft/workflow | Get issue types for workflows in draft workflow scheme |
| [**getWorkflowSchemeDraft()**](WorkflowSchemeDraftsApi.md#getWorkflowSchemeDraft) | **GET** /rest/api/2/workflowscheme/{id}/draft | Get draft workflow scheme |
| [**getWorkflowSchemeDraftIssueType()**](WorkflowSchemeDraftsApi.md#getWorkflowSchemeDraftIssueType) | **GET** /rest/api/2/workflowscheme/{id}/draft/issuetype/{issueType} | Get workflow for issue type in draft workflow scheme |
| [**publishDraftWorkflowScheme()**](WorkflowSchemeDraftsApi.md#publishDraftWorkflowScheme) | **POST** /rest/api/2/workflowscheme/{id}/draft/publish | Publish draft workflow scheme |
| [**setWorkflowSchemeDraftIssueType()**](WorkflowSchemeDraftsApi.md#setWorkflowSchemeDraftIssueType) | **PUT** /rest/api/2/workflowscheme/{id}/draft/issuetype/{issueType} | Set workflow for issue type in draft workflow scheme |
| [**updateDraftDefaultWorkflow()**](WorkflowSchemeDraftsApi.md#updateDraftDefaultWorkflow) | **PUT** /rest/api/2/workflowscheme/{id}/draft/default | Update draft default workflow |
| [**updateDraftWorkflowMapping()**](WorkflowSchemeDraftsApi.md#updateDraftWorkflowMapping) | **PUT** /rest/api/2/workflowscheme/{id}/draft/workflow | Set issue types for workflow in workflow scheme |
| [**updateWorkflowSchemeDraft()**](WorkflowSchemeDraftsApi.md#updateWorkflowSchemeDraft) | **PUT** /rest/api/2/workflowscheme/{id}/draft | Update draft workflow scheme |


## `createWorkflowSchemeDraftFromParent()`

```php
createWorkflowSchemeDraftFromParent($id): \OpenAPI\Client\Model\WorkflowScheme
```

Create draft workflow scheme

Create a draft workflow scheme from an active workflow scheme, by copying the active workflow scheme. Note that an active workflow scheme can only have one draft workflow scheme.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\WorkflowSchemeDraftsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the active workflow scheme that the draft is created from.

try {
    $result = $apiInstance->createWorkflowSchemeDraftFromParent($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowSchemeDraftsApi->createWorkflowSchemeDraftFromParent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the active workflow scheme that the draft is created from. | |

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

## `deleteDraftDefaultWorkflow()`

```php
deleteDraftDefaultWorkflow($id): \OpenAPI\Client\Model\WorkflowScheme
```

Delete draft default workflow

Resets the default workflow for a workflow scheme's draft. That is, the default workflow is set to Jira's system workflow (the *jira* workflow).  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\WorkflowSchemeDraftsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the workflow scheme that the draft belongs to.

try {
    $result = $apiInstance->deleteDraftDefaultWorkflow($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowSchemeDraftsApi->deleteDraftDefaultWorkflow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the workflow scheme that the draft belongs to. | |

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

## `deleteDraftWorkflowMapping()`

```php
deleteDraftWorkflowMapping($id, $workflow_name)
```

Delete issue types for workflow in draft workflow scheme

Deletes the workflow-issue type mapping for a workflow in a workflow scheme's draft.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\WorkflowSchemeDraftsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the workflow scheme that the draft belongs to.
$workflow_name = 'workflow_name_example'; // string | The name of the workflow.

try {
    $apiInstance->deleteDraftWorkflowMapping($id, $workflow_name);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowSchemeDraftsApi->deleteDraftWorkflowMapping: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the workflow scheme that the draft belongs to. | |
| **workflow_name** | **string**| The name of the workflow. | |

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

## `deleteWorkflowSchemeDraft()`

```php
deleteWorkflowSchemeDraft($id)
```

Delete draft workflow scheme

Deletes a draft workflow scheme.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\WorkflowSchemeDraftsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the active workflow scheme that the draft was created from.

try {
    $apiInstance->deleteWorkflowSchemeDraft($id);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowSchemeDraftsApi->deleteWorkflowSchemeDraft: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the active workflow scheme that the draft was created from. | |

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

## `deleteWorkflowSchemeDraftIssueType()`

```php
deleteWorkflowSchemeDraftIssueType($id, $issue_type): \OpenAPI\Client\Model\WorkflowScheme
```

Delete workflow for issue type in draft workflow scheme

Deletes the issue type-workflow mapping for an issue type in a workflow scheme's draft.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\WorkflowSchemeDraftsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the workflow scheme that the draft belongs to.
$issue_type = 'issue_type_example'; // string | The ID of the issue type.

try {
    $result = $apiInstance->deleteWorkflowSchemeDraftIssueType($id, $issue_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowSchemeDraftsApi->deleteWorkflowSchemeDraftIssueType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the workflow scheme that the draft belongs to. | |
| **issue_type** | **string**| The ID of the issue type. | |

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

## `getDraftDefaultWorkflow()`

```php
getDraftDefaultWorkflow($id): \OpenAPI\Client\Model\DefaultWorkflow
```

Get draft default workflow

Returns the default workflow for a workflow scheme's draft. The default workflow is the workflow that is assigned any issue types that have not been mapped to any other workflow. The default workflow has *All Unassigned Issue Types* listed in its issue types for the workflow scheme in Jira.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\WorkflowSchemeDraftsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the workflow scheme that the draft belongs to.

try {
    $result = $apiInstance->getDraftDefaultWorkflow($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowSchemeDraftsApi->getDraftDefaultWorkflow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the workflow scheme that the draft belongs to. | |

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

## `getDraftWorkflow()`

```php
getDraftWorkflow($id, $workflow_name): \OpenAPI\Client\Model\IssueTypesWorkflowMapping
```

Get issue types for workflows in draft workflow scheme

Returns the workflow-issue type mappings for a workflow scheme's draft.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\WorkflowSchemeDraftsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the workflow scheme that the draft belongs to.
$workflow_name = 'workflow_name_example'; // string | The name of a workflow in the scheme. Limits the results to the workflow-issue type mapping for the specified workflow.

try {
    $result = $apiInstance->getDraftWorkflow($id, $workflow_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowSchemeDraftsApi->getDraftWorkflow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the workflow scheme that the draft belongs to. | |
| **workflow_name** | **string**| The name of a workflow in the scheme. Limits the results to the workflow-issue type mapping for the specified workflow. | [optional] |

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

## `getWorkflowSchemeDraft()`

```php
getWorkflowSchemeDraft($id): \OpenAPI\Client\Model\WorkflowScheme
```

Get draft workflow scheme

Returns the draft workflow scheme for an active workflow scheme. Draft workflow schemes allow changes to be made to the active workflow schemes: When an active workflow scheme is updated, a draft copy is created. The draft is modified, then the changes in the draft are copied back to the active workflow scheme. See [Configuring workflow schemes](https://confluence.atlassian.com/x/tohKLg) for more information.   Note that:   *  Only active workflow schemes can have draft workflow schemes.  *  An active workflow scheme can only have one draft workflow scheme.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\WorkflowSchemeDraftsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the active workflow scheme that the draft was created from.

try {
    $result = $apiInstance->getWorkflowSchemeDraft($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowSchemeDraftsApi->getWorkflowSchemeDraft: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the active workflow scheme that the draft was created from. | |

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

## `getWorkflowSchemeDraftIssueType()`

```php
getWorkflowSchemeDraftIssueType($id, $issue_type): \OpenAPI\Client\Model\IssueTypeWorkflowMapping
```

Get workflow for issue type in draft workflow scheme

Returns the issue type-workflow mapping for an issue type in a workflow scheme's draft.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\WorkflowSchemeDraftsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the workflow scheme that the draft belongs to.
$issue_type = 'issue_type_example'; // string | The ID of the issue type.

try {
    $result = $apiInstance->getWorkflowSchemeDraftIssueType($id, $issue_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowSchemeDraftsApi->getWorkflowSchemeDraftIssueType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the workflow scheme that the draft belongs to. | |
| **issue_type** | **string**| The ID of the issue type. | |

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

## `publishDraftWorkflowScheme()`

```php
publishDraftWorkflowScheme($id, $publish_draft_workflow_scheme, $validate_only)
```

Publish draft workflow scheme

Publishes a draft workflow scheme.  Where the draft workflow includes new workflow statuses for an issue type, mappings are provided to update issues with the original workflow status to the new workflow status.  This operation is [asynchronous](#async). Follow the `location` link in the response to determine the status of the task and use [Get task](#api-rest-api-2-task-taskId-get) to obtain updates.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\WorkflowSchemeDraftsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the workflow scheme that the draft belongs to.
$publish_draft_workflow_scheme = {"statusMappings":[{"issueTypeId":"10001","newStatusId":"1","statusId":"3"},{"issueTypeId":"10001","newStatusId":"2","statusId":"2"},{"issueTypeId":"10002","newStatusId":"10003","statusId":"10005"},{"issueTypeId":"10003","newStatusId":"1","statusId":"4"}]}; // \OpenAPI\Client\Model\PublishDraftWorkflowScheme | Details of the status mappings.
$validate_only = false; // bool | Whether the request only performs a validation.

try {
    $apiInstance->publishDraftWorkflowScheme($id, $publish_draft_workflow_scheme, $validate_only);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowSchemeDraftsApi->publishDraftWorkflowScheme: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the workflow scheme that the draft belongs to. | |
| **publish_draft_workflow_scheme** | [**\OpenAPI\Client\Model\PublishDraftWorkflowScheme**](../Model/PublishDraftWorkflowScheme.md)| Details of the status mappings. | |
| **validate_only** | **bool**| Whether the request only performs a validation. | [optional] [default to false] |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setWorkflowSchemeDraftIssueType()`

```php
setWorkflowSchemeDraftIssueType($id, $issue_type, $issue_type_workflow_mapping): \OpenAPI\Client\Model\WorkflowScheme
```

Set workflow for issue type in draft workflow scheme

Sets the workflow for an issue type in a workflow scheme's draft.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\WorkflowSchemeDraftsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the workflow scheme that the draft belongs to.
$issue_type = 'issue_type_example'; // string | The ID of the issue type.
$issue_type_workflow_mapping = {"issueType":"10000","updateDraftIfNeeded":false,"workflow":"jira"}; // \OpenAPI\Client\Model\IssueTypeWorkflowMapping | The issue type-project mapping.

try {
    $result = $apiInstance->setWorkflowSchemeDraftIssueType($id, $issue_type, $issue_type_workflow_mapping);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowSchemeDraftsApi->setWorkflowSchemeDraftIssueType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the workflow scheme that the draft belongs to. | |
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

## `updateDraftDefaultWorkflow()`

```php
updateDraftDefaultWorkflow($id, $default_workflow): \OpenAPI\Client\Model\WorkflowScheme
```

Update draft default workflow

Sets the default workflow for a workflow scheme's draft.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\WorkflowSchemeDraftsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the workflow scheme that the draft belongs to.
$default_workflow = {"updateDraftIfNeeded":false,"workflow":"jira"}; // \OpenAPI\Client\Model\DefaultWorkflow | The object for the new default workflow.

try {
    $result = $apiInstance->updateDraftDefaultWorkflow($id, $default_workflow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowSchemeDraftsApi->updateDraftDefaultWorkflow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the workflow scheme that the draft belongs to. | |
| **default_workflow** | [**\OpenAPI\Client\Model\DefaultWorkflow**](../Model/DefaultWorkflow.md)| The object for the new default workflow. | |

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

## `updateDraftWorkflowMapping()`

```php
updateDraftWorkflowMapping($id, $workflow_name, $issue_types_workflow_mapping): \OpenAPI\Client\Model\WorkflowScheme
```

Set issue types for workflow in workflow scheme

Sets the issue types for a workflow in a workflow scheme's draft. The workflow can also be set as the default workflow for the draft workflow scheme. Unmapped issues types are mapped to the default workflow.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\WorkflowSchemeDraftsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the workflow scheme that the draft belongs to.
$workflow_name = 'workflow_name_example'; // string | The name of the workflow.
$issue_types_workflow_mapping = {"issueTypes":["10000"],"updateDraftIfNeeded":true,"workflow":"jira"}; // \OpenAPI\Client\Model\IssueTypesWorkflowMapping

try {
    $result = $apiInstance->updateDraftWorkflowMapping($id, $workflow_name, $issue_types_workflow_mapping);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowSchemeDraftsApi->updateDraftWorkflowMapping: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the workflow scheme that the draft belongs to. | |
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

## `updateWorkflowSchemeDraft()`

```php
updateWorkflowSchemeDraft($id, $workflow_scheme): \OpenAPI\Client\Model\WorkflowScheme
```

Update draft workflow scheme

Updates a draft workflow scheme. If a draft workflow scheme does not exist for the active workflow scheme, then a draft is created. Note that an active workflow scheme can only have one draft workflow scheme.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\WorkflowSchemeDraftsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the active workflow scheme that the draft was created from.
$workflow_scheme = {"defaultWorkflow":"jira","description":"The description of the example workflow scheme.","issueTypeMappings":{"10000":"scrum workflow"},"name":"Example workflow scheme","updateDraftIfNeeded":false}; // \OpenAPI\Client\Model\WorkflowScheme

try {
    $result = $apiInstance->updateWorkflowSchemeDraft($id, $workflow_scheme);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowSchemeDraftsApi->updateWorkflowSchemeDraft: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the active workflow scheme that the draft was created from. | |
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
