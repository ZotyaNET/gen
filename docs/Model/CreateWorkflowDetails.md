# # CreateWorkflowDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | The description of the workflow. The maximum length is 1000 characters. | [optional]
**name** | **string** | The name of the workflow. The name must be unique. The maximum length is 255 characters. Characters can be separated by a whitespace but the name cannot start or end with a whitespace. |
**statuses** | [**\OpenAPI\Client\Model\CreateWorkflowStatusDetails[]**](CreateWorkflowStatusDetails.md) | The statuses of the workflow. Any status that does not include a transition is added to the workflow without a transition. |
**transitions** | [**\OpenAPI\Client\Model\CreateWorkflowTransitionDetails[]**](CreateWorkflowTransitionDetails.md) | The transitions of the workflow. For the request to be valid, these transitions must:   *  include one *initial* transition.  *  not use the same name for a *global* and *directed* transition.  *  have a unique name for each *global* transition.  *  have a unique &#39;to&#39; status for each *global* transition.  *  have unique names for each transition from a status.  *  not have a &#39;from&#39; status on *initial* and *global* transitions.  *  have a &#39;from&#39; status on *directed* transitions.  All the transition statuses must be included in &#x60;statuses&#x60;. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
