# # JiraWorkflowStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | The description of the status. | [optional]
**id** | **string** | The ID of the status. | [optional]
**name** | **string** | The name of the status. | [optional]
**scope** | [**\OpenAPI\Client\Model\WorkflowScope**](WorkflowScope.md) |  | [optional]
**status_category** | **string** | The category of the status. | [optional]
**status_reference** | **string** | The reference of the status. | [optional]
**usages** | [**\OpenAPI\Client\Model\ProjectIssueTypes[]**](ProjectIssueTypes.md) | The &#x60;statuses.usages&#x60; expand is an optional parameter that can be used when reading and updating statuses in Jira. It provides additional information about the projects and issue types associated with the requested statuses. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
