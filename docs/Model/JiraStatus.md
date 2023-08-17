# # JiraStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | The description of the status. | [optional]
**id** | **string** | The ID of the status. | [optional]
**name** | **string** | The name of the status. | [optional]
**scope** | [**\OpenAPI\Client\Model\StatusScope**](StatusScope.md) |  | [optional]
**status_category** | **string** | The category of the status. | [optional]
**usages** | [**\OpenAPI\Client\Model\ProjectIssueTypes[]**](ProjectIssueTypes.md) | Projects and issue types where the status is used. Only available if the &#x60;usages&#x60; expand is requested. | [optional]
**workflow_usages** | [**\OpenAPI\Client\Model\WorkflowUsages[]**](WorkflowUsages.md) | The workflows that use this status. Only available if the &#x60;workflowUsages&#x60; expand is requested. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
