# # Workflow

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created** | **\DateTime** | The creation date of the workflow. | [optional]
**description** | **string** | The description of the workflow. |
**has_draft_workflow** | **bool** | Whether the workflow has a draft version. | [optional]
**id** | [**\OpenAPI\Client\Model\PublishedWorkflowId**](PublishedWorkflowId.md) |  |
**is_default** | **bool** | Whether this is the default workflow. | [optional]
**operations** | [**\OpenAPI\Client\Model\WorkflowOperations**](WorkflowOperations.md) |  | [optional]
**projects** | [**\OpenAPI\Client\Model\ProjectDetails[]**](ProjectDetails.md) | The projects the workflow is assigned to, through workflow schemes. | [optional]
**schemes** | [**\OpenAPI\Client\Model\WorkflowSchemeIdName[]**](WorkflowSchemeIdName.md) | The workflow schemes the workflow is assigned to. | [optional]
**statuses** | [**\OpenAPI\Client\Model\WorkflowStatus[]**](WorkflowStatus.md) | The statuses of the workflow. | [optional]
**transitions** | [**\OpenAPI\Client\Model\Transition[]**](Transition.md) | The transitions of the workflow. | [optional]
**updated** | **\DateTime** | The last edited date of the workflow. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
