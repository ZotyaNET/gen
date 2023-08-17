# # JiraWorkflow

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | The description of the workflow. | [optional]
**id** | **string** | The ID of the workflow. | [optional]
**is_editable** | **bool** | Indicates if the workflow can be edited. | [optional]
**name** | **string** | The name of the workflow. | [optional]
**scope** | [**\OpenAPI\Client\Model\WorkflowScope**](WorkflowScope.md) |  | [optional]
**start_point_layout** | [**\OpenAPI\Client\Model\WorkflowLayout**](WorkflowLayout.md) |  | [optional]
**statuses** | [**\OpenAPI\Client\Model\WorkflowReferenceStatus[]**](WorkflowReferenceStatus.md) | The statuses referenced in this workflow. | [optional]
**task_id** | **string** | If there is a current [asynchronous task](#async-operations) operation for this workflow. | [optional]
**transitions** | [**\OpenAPI\Client\Model\WorkflowTransitions[]**](WorkflowTransitions.md) | The transitions of the workflow. | [optional]
**usages** | [**\OpenAPI\Client\Model\ProjectIssueTypes[]**](ProjectIssueTypes.md) | Use the optional &#x60;workflows.usages&#x60; expand to get additional information about the projects and issue types associated with the requested workflows. | [optional]
**version** | [**\OpenAPI\Client\Model\DocumentVersion**](DocumentVersion.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
