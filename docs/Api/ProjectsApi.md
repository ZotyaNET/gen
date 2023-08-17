# OpenAPI\Client\ProjectsApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**archiveProject()**](ProjectsApi.md#archiveProject) | **POST** /rest/api/2/project/{projectIdOrKey}/archive | Archive project |
| [**createProject()**](ProjectsApi.md#createProject) | **POST** /rest/api/2/project | Create project |
| [**deleteProject()**](ProjectsApi.md#deleteProject) | **DELETE** /rest/api/2/project/{projectIdOrKey} | Delete project |
| [**deleteProjectAsynchronously()**](ProjectsApi.md#deleteProjectAsynchronously) | **POST** /rest/api/2/project/{projectIdOrKey}/delete | Delete project asynchronously |
| [**getAllProjects()**](ProjectsApi.md#getAllProjects) | **GET** /rest/api/2/project | Get all projects |
| [**getAllStatuses()**](ProjectsApi.md#getAllStatuses) | **GET** /rest/api/2/project/{projectIdOrKey}/statuses | Get all statuses for project |
| [**getHierarchy()**](ProjectsApi.md#getHierarchy) | **GET** /rest/api/2/project/{projectId}/hierarchy | Get project issue type hierarchy |
| [**getNotificationSchemeForProject()**](ProjectsApi.md#getNotificationSchemeForProject) | **GET** /rest/api/2/project/{projectKeyOrId}/notificationscheme | Get project notification scheme |
| [**getProject()**](ProjectsApi.md#getProject) | **GET** /rest/api/2/project/{projectIdOrKey} | Get project |
| [**getRecent()**](ProjectsApi.md#getRecent) | **GET** /rest/api/2/project/recent | Get recent projects |
| [**restore()**](ProjectsApi.md#restore) | **POST** /rest/api/2/project/{projectIdOrKey}/restore | Restore deleted or archived project |
| [**searchProjects()**](ProjectsApi.md#searchProjects) | **GET** /rest/api/2/project/search | Get projects paginated |
| [**updateProject()**](ProjectsApi.md#updateProject) | **PUT** /rest/api/2/project/{projectIdOrKey} | Update project |


## `archiveProject()`

```php
archiveProject($project_id_or_key): mixed
```

Archive project

Archives a project. You can't delete a project if it's archived. To delete an archived project, restore the project and then delete it. To restore a project, use the Jira UI.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id_or_key = 'project_id_or_key_example'; // string | The project ID or project key (case sensitive).

try {
    $result = $apiInstance->archiveProject($project_id_or_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->archiveProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id_or_key** | **string**| The project ID or project key (case sensitive). | |

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

## `createProject()`

```php
createProject($create_project_details): \OpenAPI\Client\Model\ProjectIdentifiers
```

Create project

Creates a project based on a project type template, as shown in the following table:  | Project Type Key | Project Template Key |   |--|--|   | `business` | `com.atlassian.jira-core-project-templates:jira-core-simplified-content-management`, `com.atlassian.jira-core-project-templates:jira-core-simplified-document-approval`, `com.atlassian.jira-core-project-templates:jira-core-simplified-lead-tracking`, `com.atlassian.jira-core-project-templates:jira-core-simplified-process-control`, `com.atlassian.jira-core-project-templates:jira-core-simplified-procurement`, `com.atlassian.jira-core-project-templates:jira-core-simplified-project-management`, `com.atlassian.jira-core-project-templates:jira-core-simplified-recruitment`, `com.atlassian.jira-core-project-templates:jira-core-simplified-task-tracking` |   | `service_desk` | `com.atlassian.servicedesk:simplified-it-service-management`, `com.atlassian.servicedesk:simplified-general-service-desk-it`, `com.atlassian.servicedesk:simplified-general-service-desk-business`, `com.atlassian.servicedesk:simplified-external-service-desk`, `com.atlassian.servicedesk:simplified-hr-service-desk`, `com.atlassian.servicedesk:simplified-facilities-service-desk`, `com.atlassian.servicedesk:simplified-legal-service-desk`, `com.atlassian.servicedesk:simplified-analytics-service-desk`, `com.atlassian.servicedesk:simplified-marketing-service-desk`, `com.atlassian.servicedesk:simplified-design-service-desk`, `com.atlassian.servicedesk:simplified-sales-service-desk`, `com.atlassian.servicedesk:simplified-finance-service-desk`, `com.atlassian.servicedesk:next-gen-it-service-desk`, `com.atlassian.servicedesk:next-gen-hr-service-desk`, `com.atlassian.servicedesk:next-gen-legal-service-desk`, `com.atlassian.servicedesk:next-gen-marketing-service-desk`, `com.atlassian.servicedesk:next-gen-facilities-service-desk`, `com.atlassian.servicedesk:next-gen-general-service-desk`, `com.atlassian.servicedesk:next-gen-general-it-service-desk`, `com.atlassian.servicedesk:next-gen-general-business-service-desk`, `com.atlassian.servicedesk:next-gen-analytics-service-desk`, `com.atlassian.servicedesk:next-gen-finance-service-desk`, `com.atlassian.servicedesk:next-gen-design-service-desk`, `com.atlassian.servicedesk:next-gen-sales-service-desk` |   | `software` | `com.pyxis.greenhopper.jira:gh-simplified-agility-kanban`, `com.pyxis.greenhopper.jira:gh-simplified-agility-scrum`, `com.pyxis.greenhopper.jira:gh-simplified-basic`, `com.pyxis.greenhopper.jira:gh-simplified-kanban-classic`, `com.pyxis.greenhopper.jira:gh-simplified-scrum-classic` |   The project types are available according to the installed Jira features as follows:   *  Jira Core, the default, enables `business` projects.  *  Jira Service Management enables `service_desk` projects.  *  Jira Software enables `software` projects.  To determine which features are installed, go to **Jira settings** > **Apps** > **Manage apps** and review the System Apps list. To add Jira Software or Jira Service Management into a JIRA instance, use **Jira settings** > **Apps** > **Finding new apps**. For more information, see [ Managing add-ons](https://confluence.atlassian.com/x/S31NLg).  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_project_details = {"assigneeType":"PROJECT_LEAD","avatarId":10200,"categoryId":10120,"description":"Cloud migration initiative","issueSecurityScheme":10001,"key":"EX","leadAccountId":"5b10a0effa615349cb016cd8","name":"Example","notificationScheme":10021,"permissionScheme":10011,"projectTemplateKey":"com.atlassian.jira-core-project-templates:jira-core-simplified-process-control","projectTypeKey":"business","url":"http://atlassian.com"}; // \OpenAPI\Client\Model\CreateProjectDetails | The JSON representation of the project being created.

try {
    $result = $apiInstance->createProject($create_project_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->createProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_project_details** | [**\OpenAPI\Client\Model\CreateProjectDetails**](../Model/CreateProjectDetails.md)| The JSON representation of the project being created. | |

### Return type

[**\OpenAPI\Client\Model\ProjectIdentifiers**](../Model/ProjectIdentifiers.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteProject()`

```php
deleteProject($project_id_or_key, $enable_undo)
```

Delete project

Deletes a project.  You can't delete a project if it's archived. To delete an archived project, restore the project and then delete it. To restore a project, use the Jira UI.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id_or_key = 10001; // string | The project ID or project key (case sensitive).
$enable_undo = true; // bool | Whether this project is placed in the Jira recycle bin where it will be available for restoration.

try {
    $apiInstance->deleteProject($project_id_or_key, $enable_undo);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->deleteProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id_or_key** | **string**| The project ID or project key (case sensitive). | |
| **enable_undo** | **bool**| Whether this project is placed in the Jira recycle bin where it will be available for restoration. | [optional] [default to true] |

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

## `deleteProjectAsynchronously()`

```php
deleteProjectAsynchronously($project_id_or_key)
```

Delete project asynchronously

Deletes a project asynchronously.  This operation is:   *  transactional, that is, if part of the delete fails the project is not deleted.  *  [asynchronous](#async). Follow the `location` link in the response to determine the status of the task and use [Get task](#api-rest-api-2-task-taskId-get) to obtain subsequent updates.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id_or_key = 'project_id_or_key_example'; // string | The project ID or project key (case sensitive).

try {
    $apiInstance->deleteProjectAsynchronously($project_id_or_key);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->deleteProjectAsynchronously: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id_or_key** | **string**| The project ID or project key (case sensitive). | |

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

## `getAllProjects()`

```php
getAllProjects($expand, $recent, $properties): \OpenAPI\Client\Model\Project[]
```

Get all projects

Returns all projects visible to the user. Deprecated, use [ Get projects paginated](#api-rest-api-2-project-search-get) that supports search and pagination.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** Projects are returned only where the user has *Browse Projects* or *Administer projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project.

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


$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$expand = 'expand_example'; // string | Use [expand](#expansion) to include additional information in the response. This parameter accepts a comma-separated list. Expanded options include:   *  `description` Returns the project description.  *  `issueTypes` Returns all issue types associated with the project.  *  `lead` Returns information about the project lead.  *  `projectKeys` Returns all project keys associated with the project.
$recent = 56; // int | Returns the user's most recently accessed projects. You may specify the number of results to return up to a maximum of 20. If access is anonymous, then the recently accessed projects are based on the current HTTP session.
$properties = array('properties_example'); // string[] | A list of project properties to return for the project. This parameter accepts a comma-separated list.

try {
    $result = $apiInstance->getAllProjects($expand, $recent, $properties);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->getAllProjects: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **expand** | **string**| Use [expand](#expansion) to include additional information in the response. This parameter accepts a comma-separated list. Expanded options include:   *  &#x60;description&#x60; Returns the project description.  *  &#x60;issueTypes&#x60; Returns all issue types associated with the project.  *  &#x60;lead&#x60; Returns information about the project lead.  *  &#x60;projectKeys&#x60; Returns all project keys associated with the project. | [optional] |
| **recent** | **int**| Returns the user&#39;s most recently accessed projects. You may specify the number of results to return up to a maximum of 20. If access is anonymous, then the recently accessed projects are based on the current HTTP session. | [optional] |
| **properties** | [**string[]**](../Model/string.md)| A list of project properties to return for the project. This parameter accepts a comma-separated list. | [optional] |

### Return type

[**\OpenAPI\Client\Model\Project[]**](../Model/Project.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllStatuses()`

```php
getAllStatuses($project_id_or_key): \OpenAPI\Client\Model\IssueTypeWithStatus[]
```

Get all statuses for project

Returns the valid statuses for a project. The statuses are grouped by issue type, as each project has a set of valid issue types and each issue type has a set of valid statuses.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** *Browse Projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project.

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


$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id_or_key = 'project_id_or_key_example'; // string | The project ID or project key (case sensitive).

try {
    $result = $apiInstance->getAllStatuses($project_id_or_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->getAllStatuses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id_or_key** | **string**| The project ID or project key (case sensitive). | |

### Return type

[**\OpenAPI\Client\Model\IssueTypeWithStatus[]**](../Model/IssueTypeWithStatus.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHierarchy()`

```php
getHierarchy($project_id): \OpenAPI\Client\Model\ProjectIssueTypeHierarchy
```

Get project issue type hierarchy

Get the issue type hierarchy for a next-gen project.  The issue type hierarchy for a project consists of:   *  *Epic* at level 1 (optional).  *  One or more issue types at level 0 such as *Story*, *Task*, or *Bug*. Where the issue type *Epic* is defined, these issue types are used to break down the content of an epic.  *  *Subtask* at level -1 (optional). This issue type enables level 0 issue types to be broken down into components. Issues based on a level -1 issue type must have a parent issue.  **[Permissions](#permissions) required:** *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project.

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


$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 56; // int | The ID of the project.

try {
    $result = $apiInstance->getHierarchy($project_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->getHierarchy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| The ID of the project. | |

### Return type

[**\OpenAPI\Client\Model\ProjectIssueTypeHierarchy**](../Model/ProjectIssueTypeHierarchy.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNotificationSchemeForProject()`

```php
getNotificationSchemeForProject($project_key_or_id, $expand): \OpenAPI\Client\Model\NotificationScheme
```

Get project notification scheme

Gets a [notification scheme](https://confluence.atlassian.com/x/8YdKLg) associated with the project.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg) or *Administer Projects* [project permission](https://confluence.atlassian.com/x/yodKLg).

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


$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_key_or_id = 'project_key_or_id_example'; // string | The project ID or project key (case sensitive).
$expand = 'expand_example'; // string | Use [expand](#expansion) to include additional information in the response. This parameter accepts a comma-separated list. Expand options include:   *  `all` Returns all expandable information  *  `field` Returns information about any custom fields assigned to receive an event  *  `group` Returns information about any groups assigned to receive an event  *  `notificationSchemeEvents` Returns a list of event associations. This list is returned for all expandable information  *  `projectRole` Returns information about any project roles assigned to receive an event  *  `user` Returns information about any users assigned to receive an event

try {
    $result = $apiInstance->getNotificationSchemeForProject($project_key_or_id, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->getNotificationSchemeForProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_key_or_id** | **string**| The project ID or project key (case sensitive). | |
| **expand** | **string**| Use [expand](#expansion) to include additional information in the response. This parameter accepts a comma-separated list. Expand options include:   *  &#x60;all&#x60; Returns all expandable information  *  &#x60;field&#x60; Returns information about any custom fields assigned to receive an event  *  &#x60;group&#x60; Returns information about any groups assigned to receive an event  *  &#x60;notificationSchemeEvents&#x60; Returns a list of event associations. This list is returned for all expandable information  *  &#x60;projectRole&#x60; Returns information about any project roles assigned to receive an event  *  &#x60;user&#x60; Returns information about any users assigned to receive an event | [optional] |

### Return type

[**\OpenAPI\Client\Model\NotificationScheme**](../Model/NotificationScheme.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProject()`

```php
getProject($project_id_or_key, $expand, $properties): \OpenAPI\Client\Model\Project
```

Get project

Returns the [project details](https://confluence.atlassian.com/x/ahLpNw) for a project.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project.

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


$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id_or_key = 'project_id_or_key_example'; // string | The project ID or project key (case sensitive).
$expand = 'expand_example'; // string | Use [expand](#expansion) to include additional information in the response. This parameter accepts a comma-separated list. Note that the project description, issue types, and project lead are included in all responses by default. Expand options include:   *  `description` The project description.  *  `issueTypes` The issue types associated with the project.  *  `lead` The project lead.  *  `projectKeys` All project keys associated with the project.  *  `issueTypeHierarchy` The project issue type hierarchy.
$properties = array('properties_example'); // string[] | A list of project properties to return for the project. This parameter accepts a comma-separated list.

try {
    $result = $apiInstance->getProject($project_id_or_key, $expand, $properties);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->getProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id_or_key** | **string**| The project ID or project key (case sensitive). | |
| **expand** | **string**| Use [expand](#expansion) to include additional information in the response. This parameter accepts a comma-separated list. Note that the project description, issue types, and project lead are included in all responses by default. Expand options include:   *  &#x60;description&#x60; The project description.  *  &#x60;issueTypes&#x60; The issue types associated with the project.  *  &#x60;lead&#x60; The project lead.  *  &#x60;projectKeys&#x60; All project keys associated with the project.  *  &#x60;issueTypeHierarchy&#x60; The project issue type hierarchy. | [optional] |
| **properties** | [**string[]**](../Model/string.md)| A list of project properties to return for the project. This parameter accepts a comma-separated list. | [optional] |

### Return type

[**\OpenAPI\Client\Model\Project**](../Model/Project.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRecent()`

```php
getRecent($expand, $properties): \OpenAPI\Client\Model\Project[]
```

Get recent projects

Returns a list of up to 20 projects recently viewed by the user that are still visible to the user.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** Projects are returned only where the user has one of:   *  *Browse Projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project.  *  *Administer Projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project.  *  *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$expand = 'expand_example'; // string | Use [expand](#expansion) to include additional information in the response. This parameter accepts a comma-separated list. Expanded options include:   *  `description` Returns the project description.  *  `projectKeys` Returns all project keys associated with a project.  *  `lead` Returns information about the project lead.  *  `issueTypes` Returns all issue types associated with the project.  *  `url` Returns the URL associated with the project.  *  `permissions` Returns the permissions associated with the project.  *  `insight` EXPERIMENTAL. Returns the insight details of total issue count and last issue update time for the project.  *  `*` Returns the project with all available expand options.
$properties = array(new \stdClass); // object[] | EXPERIMENTAL. A list of project properties to return for the project. This parameter accepts a comma-separated list. Invalid property names are ignored.

try {
    $result = $apiInstance->getRecent($expand, $properties);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->getRecent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **expand** | **string**| Use [expand](#expansion) to include additional information in the response. This parameter accepts a comma-separated list. Expanded options include:   *  &#x60;description&#x60; Returns the project description.  *  &#x60;projectKeys&#x60; Returns all project keys associated with a project.  *  &#x60;lead&#x60; Returns information about the project lead.  *  &#x60;issueTypes&#x60; Returns all issue types associated with the project.  *  &#x60;url&#x60; Returns the URL associated with the project.  *  &#x60;permissions&#x60; Returns the permissions associated with the project.  *  &#x60;insight&#x60; EXPERIMENTAL. Returns the insight details of total issue count and last issue update time for the project.  *  &#x60;*&#x60; Returns the project with all available expand options. | [optional] |
| **properties** | [**object[]**](../Model/object.md)| EXPERIMENTAL. A list of project properties to return for the project. This parameter accepts a comma-separated list. Invalid property names are ignored. | [optional] |

### Return type

[**\OpenAPI\Client\Model\Project[]**](../Model/Project.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restore()`

```php
restore($project_id_or_key): \OpenAPI\Client\Model\Project
```

Restore deleted or archived project

Restores a project that has been archived or placed in the Jira recycle bin.  **[Permissions](#permissions) required:**   *  *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg)for Company managed projects.  *  *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg) or *Administer projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project for Team managed projects.

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


$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id_or_key = 'project_id_or_key_example'; // string | The project ID or project key (case sensitive).

try {
    $result = $apiInstance->restore($project_id_or_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->restore: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id_or_key** | **string**| The project ID or project key (case sensitive). | |

### Return type

[**\OpenAPI\Client\Model\Project**](../Model/Project.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchProjects()`

```php
searchProjects($start_at, $max_results, $order_by, $id, $keys, $query, $type_key, $category_id, $action, $expand, $status, $properties, $property_query): \OpenAPI\Client\Model\PageBeanProject
```

Get projects paginated

Returns a [paginated](#pagination) list of projects visible to the user.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** Projects are returned only where the user has one of:   *  *Browse Projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project.  *  *Administer Projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project.  *  *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_at = 0; // int | The index of the first item to return in a page of results (page offset).
$max_results = 50; // int | The maximum number of items to return per page.
$order_by = 'key'; // string | [Order](#ordering) the results by a field.   *  `category` Sorts by project category. A complete list of category IDs is found using [Get all project categories](#api-rest-api-2-projectCategory-get).  *  `issueCount` Sorts by the total number of issues in each project.  *  `key` Sorts by project key.  *  `lastIssueUpdatedTime` Sorts by the last issue update time.  *  `name` Sorts by project name.  *  `owner` Sorts by project lead.  *  `archivedDate` EXPERIMENTAL. Sorts by project archived date.  *  `deletedDate` EXPERIMENTAL. Sorts by project deleted date.
$id = array(56); // int[] | The project IDs to filter the results by. To include multiple IDs, provide an ampersand-separated list. For example, `id=10000&id=10001`. Up to 50 project IDs can be provided.
$keys = array('keys_example'); // string[] | The project keys to filter the results by. To include multiple keys, provide an ampersand-separated list. For example, `keys=PA&keys=PB`. Up to 50 project keys can be provided.
$query = 'query_example'; // string | Filter the results using a literal string. Projects with a matching `key` or `name` are returned (case insensitive).
$type_key = 'type_key_example'; // string | Orders results by the [project type](https://confluence.atlassian.com/x/GwiiLQ#Jiraapplicationsoverview-Productfeaturesandprojecttypes). This parameter accepts a comma-separated list. Valid values are `business`, `service_desk`, and `software`.
$category_id = 56; // int | The ID of the project's category. A complete list of category IDs is found using the [Get all project categories](#api-rest-api-2-projectCategory-get) operation.
$action = 'view'; // string | Filter results by projects for which the user can:   *  `view` the project, meaning that they have one of the following permissions:           *  *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project.      *  *Administer projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project.      *  *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).  *  `browse` the project, meaning that they have the *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project.  *  `edit` the project, meaning that they have one of the following permissions:           *  *Administer projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project.      *  *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).
$expand = 'expand_example'; // string | Use [expand](#expansion) to include additional information in the response. This parameter accepts a comma-separated list. Expanded options include:   *  `description` Returns the project description.  *  `projectKeys` Returns all project keys associated with a project.  *  `lead` Returns information about the project lead.  *  `issueTypes` Returns all issue types associated with the project.  *  `url` Returns the URL associated with the project.  *  `insight` EXPERIMENTAL. Returns the insight details of total issue count and last issue update time for the project.
$status = array('status_example'); // string[] | EXPERIMENTAL. Filter results by project status:   *  `live` Search live projects.  *  `archived` Search archived projects.  *  `deleted` Search deleted projects, those in the recycle bin.
$properties = array(new \stdClass); // object[] | EXPERIMENTAL. A list of project properties to return for the project. This parameter accepts a comma-separated list.
$property_query = 'property_query_example'; // string | EXPERIMENTAL. A query string used to search properties. The query string cannot be specified using a JSON object. For example, to search for the value of `nested` from `{\"something\":{\"nested\":1,\"other\":2}}` use `[thepropertykey].something.nested=1`. Note that the propertyQuery key is enclosed in square brackets to enable searching where the propertyQuery key includes dot (.) or equals (=) characters. Note that `thepropertykey` is only returned when included in `properties`.

try {
    $result = $apiInstance->searchProjects($start_at, $max_results, $order_by, $id, $keys, $query, $type_key, $category_id, $action, $expand, $status, $properties, $property_query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->searchProjects: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_at** | **int**| The index of the first item to return in a page of results (page offset). | [optional] [default to 0] |
| **max_results** | **int**| The maximum number of items to return per page. | [optional] [default to 50] |
| **order_by** | **string**| [Order](#ordering) the results by a field.   *  &#x60;category&#x60; Sorts by project category. A complete list of category IDs is found using [Get all project categories](#api-rest-api-2-projectCategory-get).  *  &#x60;issueCount&#x60; Sorts by the total number of issues in each project.  *  &#x60;key&#x60; Sorts by project key.  *  &#x60;lastIssueUpdatedTime&#x60; Sorts by the last issue update time.  *  &#x60;name&#x60; Sorts by project name.  *  &#x60;owner&#x60; Sorts by project lead.  *  &#x60;archivedDate&#x60; EXPERIMENTAL. Sorts by project archived date.  *  &#x60;deletedDate&#x60; EXPERIMENTAL. Sorts by project deleted date. | [optional] [default to &#39;key&#39;] |
| **id** | [**int[]**](../Model/int.md)| The project IDs to filter the results by. To include multiple IDs, provide an ampersand-separated list. For example, &#x60;id&#x3D;10000&amp;id&#x3D;10001&#x60;. Up to 50 project IDs can be provided. | [optional] |
| **keys** | [**string[]**](../Model/string.md)| The project keys to filter the results by. To include multiple keys, provide an ampersand-separated list. For example, &#x60;keys&#x3D;PA&amp;keys&#x3D;PB&#x60;. Up to 50 project keys can be provided. | [optional] |
| **query** | **string**| Filter the results using a literal string. Projects with a matching &#x60;key&#x60; or &#x60;name&#x60; are returned (case insensitive). | [optional] |
| **type_key** | **string**| Orders results by the [project type](https://confluence.atlassian.com/x/GwiiLQ#Jiraapplicationsoverview-Productfeaturesandprojecttypes). This parameter accepts a comma-separated list. Valid values are &#x60;business&#x60;, &#x60;service_desk&#x60;, and &#x60;software&#x60;. | [optional] |
| **category_id** | **int**| The ID of the project&#39;s category. A complete list of category IDs is found using the [Get all project categories](#api-rest-api-2-projectCategory-get) operation. | [optional] |
| **action** | **string**| Filter results by projects for which the user can:   *  &#x60;view&#x60; the project, meaning that they have one of the following permissions:           *  *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project.      *  *Administer projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project.      *  *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).  *  &#x60;browse&#x60; the project, meaning that they have the *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project.  *  &#x60;edit&#x60; the project, meaning that they have one of the following permissions:           *  *Administer projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project.      *  *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg). | [optional] [default to &#39;view&#39;] |
| **expand** | **string**| Use [expand](#expansion) to include additional information in the response. This parameter accepts a comma-separated list. Expanded options include:   *  &#x60;description&#x60; Returns the project description.  *  &#x60;projectKeys&#x60; Returns all project keys associated with a project.  *  &#x60;lead&#x60; Returns information about the project lead.  *  &#x60;issueTypes&#x60; Returns all issue types associated with the project.  *  &#x60;url&#x60; Returns the URL associated with the project.  *  &#x60;insight&#x60; EXPERIMENTAL. Returns the insight details of total issue count and last issue update time for the project. | [optional] |
| **status** | [**string[]**](../Model/string.md)| EXPERIMENTAL. Filter results by project status:   *  &#x60;live&#x60; Search live projects.  *  &#x60;archived&#x60; Search archived projects.  *  &#x60;deleted&#x60; Search deleted projects, those in the recycle bin. | [optional] |
| **properties** | [**object[]**](../Model/object.md)| EXPERIMENTAL. A list of project properties to return for the project. This parameter accepts a comma-separated list. | [optional] |
| **property_query** | **string**| EXPERIMENTAL. A query string used to search properties. The query string cannot be specified using a JSON object. For example, to search for the value of &#x60;nested&#x60; from &#x60;{\&quot;something\&quot;:{\&quot;nested\&quot;:1,\&quot;other\&quot;:2}}&#x60; use &#x60;[thepropertykey].something.nested&#x3D;1&#x60;. Note that the propertyQuery key is enclosed in square brackets to enable searching where the propertyQuery key includes dot (.) or equals (&#x3D;) characters. Note that &#x60;thepropertykey&#x60; is only returned when included in &#x60;properties&#x60;. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PageBeanProject**](../Model/PageBeanProject.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProject()`

```php
updateProject($project_id_or_key, $update_project_details, $expand): \OpenAPI\Client\Model\Project
```

Update project

Updates the [project details](https://confluence.atlassian.com/x/ahLpNw) of a project.  All parameters are optional in the body of the request. Schemes will only be updated if they are included in the request, any omitted schemes will be left unchanged.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg). is only needed when changing the schemes or project key. Otherwise you will only need *Administer Projects* [project permission](https://confluence.atlassian.com/x/yodKLg)

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


$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id_or_key = 10001; // string | The project ID or project key (case sensitive).
$update_project_details = {"assigneeType":"PROJECT_LEAD","avatarId":10200,"categoryId":10120,"description":"Cloud migration initiative","issueSecurityScheme":10001,"key":"EX","leadAccountId":"5b10a0effa615349cb016cd8","name":"Example","notificationScheme":10021,"permissionScheme":10011,"url":"http://atlassian.com"}; // \OpenAPI\Client\Model\UpdateProjectDetails | The project details to be updated.
$expand = 'expand_example'; // string | Use [expand](#expansion) to include additional information in the response. This parameter accepts a comma-separated list. Note that the project description, issue types, and project lead are included in all responses by default. Expand options include:   *  `description` The project description.  *  `issueTypes` The issue types associated with the project.  *  `lead` The project lead.  *  `projectKeys` All project keys associated with the project.

try {
    $result = $apiInstance->updateProject($project_id_or_key, $update_project_details, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->updateProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id_or_key** | **string**| The project ID or project key (case sensitive). | |
| **update_project_details** | [**\OpenAPI\Client\Model\UpdateProjectDetails**](../Model/UpdateProjectDetails.md)| The project details to be updated. | |
| **expand** | **string**| Use [expand](#expansion) to include additional information in the response. This parameter accepts a comma-separated list. Note that the project description, issue types, and project lead are included in all responses by default. Expand options include:   *  &#x60;description&#x60; The project description.  *  &#x60;issueTypes&#x60; The issue types associated with the project.  *  &#x60;lead&#x60; The project lead.  *  &#x60;projectKeys&#x60; All project keys associated with the project. | [optional] |

### Return type

[**\OpenAPI\Client\Model\Project**](../Model/Project.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
