# # WorkflowTransitionRulesUpdateErrorDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**rule_update_errors** | [**array<string,string[]>**](Set.md) | A list of transition rule update errors, indexed by the transition rule ID. Any transition rule that appears here wasn&#39;t updated. |
**update_errors** | **string[]** | The list of errors that specify why the workflow update failed. The workflow was not updated if the list contains any entries. |
**workflow_id** | [**\OpenAPI\Client\Model\WorkflowId**](WorkflowId.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
