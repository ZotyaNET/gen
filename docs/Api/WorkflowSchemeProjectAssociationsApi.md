# OpenAPI\Client\WorkflowSchemeProjectAssociationsApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**assignSchemeToProject()**](WorkflowSchemeProjectAssociationsApi.md#assignSchemeToProject) | **PUT** /rest/api/2/workflowscheme/project | Assign workflow scheme to project |
| [**getWorkflowSchemeProjectAssociations()**](WorkflowSchemeProjectAssociationsApi.md#getWorkflowSchemeProjectAssociations) | **GET** /rest/api/2/workflowscheme/project | Get workflow scheme project associations |


## `assignSchemeToProject()`

```php
assignSchemeToProject($workflow_scheme_project_association): mixed
```

Assign workflow scheme to project

Assigns a workflow scheme to a project. This operation is performed only when there are no issues in the project.  Workflow schemes can only be assigned to classic projects.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\WorkflowSchemeProjectAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workflow_scheme_project_association = {"projectId":"10001","workflowSchemeId":"10032"}; // \OpenAPI\Client\Model\WorkflowSchemeProjectAssociation

try {
    $result = $apiInstance->assignSchemeToProject($workflow_scheme_project_association);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowSchemeProjectAssociationsApi->assignSchemeToProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workflow_scheme_project_association** | [**\OpenAPI\Client\Model\WorkflowSchemeProjectAssociation**](../Model/WorkflowSchemeProjectAssociation.md)|  | |

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

## `getWorkflowSchemeProjectAssociations()`

```php
getWorkflowSchemeProjectAssociations($project_id): \OpenAPI\Client\Model\ContainerOfWorkflowSchemeAssociations
```

Get workflow scheme project associations

Returns a list of the workflow schemes associated with a list of projects. Each returned workflow scheme includes a list of the requested projects associated with it. Any team-managed or non-existent projects in the request are ignored and no errors are returned.  If the project is associated with the `Default Workflow Scheme` no ID is returned. This is because the way the `Default Workflow Scheme` is stored means it has no ID.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\WorkflowSchemeProjectAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = array(56); // int[] | The ID of a project to return the workflow schemes for. To include multiple projects, provide an ampersand-Jim: oneseparated list. For example, `projectId=10000&projectId=10001`.

try {
    $result = $apiInstance->getWorkflowSchemeProjectAssociations($project_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowSchemeProjectAssociationsApi->getWorkflowSchemeProjectAssociations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | [**int[]**](../Model/int.md)| The ID of a project to return the workflow schemes for. To include multiple projects, provide an ampersand-Jim: oneseparated list. For example, &#x60;projectId&#x3D;10000&amp;projectId&#x3D;10001&#x60;. | |

### Return type

[**\OpenAPI\Client\Model\ContainerOfWorkflowSchemeAssociations**](../Model/ContainerOfWorkflowSchemeAssociations.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
