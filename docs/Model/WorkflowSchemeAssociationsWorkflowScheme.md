# # WorkflowSchemeAssociationsWorkflowScheme

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**default_workflow** | **string** | The name of the default workflow for the workflow scheme. The default workflow has *All Unassigned Issue Types* assigned to it in Jira. If &#x60;defaultWorkflow&#x60; is not specified when creating a workflow scheme, it is set to *Jira Workflow (jira)*. | [optional]
**description** | **string** | The description of the workflow scheme. | [optional]
**draft** | **bool** | Whether the workflow scheme is a draft or not. | [optional] [readonly]
**id** | **int** | The ID of the workflow scheme. | [optional] [readonly]
**issue_type_mappings** | **array<string,string>** | The issue type to workflow mappings, where each mapping is an issue type ID and workflow name pair. Note that an issue type can only be mapped to one workflow in a workflow scheme. | [optional]
**issue_types** | [**array<string,\OpenAPI\Client\Model\IssueTypeDetails>**](IssueTypeDetails.md) | The issue types available in Jira. | [optional] [readonly]
**last_modified** | **string** | The date-time that the draft workflow scheme was last modified. A modification is a change to the issue type-project mappings only. This property does not apply to non-draft workflows. | [optional] [readonly]
**last_modified_user** | [**\OpenAPI\Client\Model\WorkflowSchemeLastModifiedUser**](WorkflowSchemeLastModifiedUser.md) |  | [optional]
**name** | **string** | The name of the workflow scheme. The name must be unique. The maximum length is 255 characters. Required when creating a workflow scheme. | [optional]
**original_default_workflow** | **string** | For draft workflow schemes, this property is the name of the default workflow for the original workflow scheme. The default workflow has *All Unassigned Issue Types* assigned to it in Jira. | [optional] [readonly]
**original_issue_type_mappings** | **array<string,string>** | For draft workflow schemes, this property is the issue type to workflow mappings for the original workflow scheme, where each mapping is an issue type ID and workflow name pair. Note that an issue type can only be mapped to one workflow in a workflow scheme. | [optional] [readonly]
**self** | **string** |  | [optional] [readonly]
**update_draft_if_needed** | **bool** | Whether to create or update a draft workflow scheme when updating an active workflow scheme. An active workflow scheme is a workflow scheme that is used by at least one project. The following examples show how this property works:   *  Update an active workflow scheme with &#x60;updateDraftIfNeeded&#x60; set to &#x60;true&#x60;: If a draft workflow scheme exists, it is updated. Otherwise, a draft workflow scheme is created.  *  Update an active workflow scheme with &#x60;updateDraftIfNeeded&#x60; set to &#x60;false&#x60;: An error is returned, as active workflow schemes cannot be updated.  *  Update an inactive workflow scheme with &#x60;updateDraftIfNeeded&#x60; set to &#x60;true&#x60;: The workflow scheme is updated, as inactive workflow schemes do not require drafts to update.  Defaults to &#x60;false&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
