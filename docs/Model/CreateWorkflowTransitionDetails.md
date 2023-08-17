# # CreateWorkflowTransitionDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | The description of the transition. The maximum length is 1000 characters. | [optional]
**from** | **string[]** | The statuses the transition can start from. | [optional]
**name** | **string** | The name of the transition. The maximum length is 60 characters. |
**properties** | **array<string,string>** | The properties of the transition. | [optional]
**rules** | [**\OpenAPI\Client\Model\CreateWorkflowTransitionDetailsRules**](CreateWorkflowTransitionDetailsRules.md) |  | [optional]
**screen** | [**\OpenAPI\Client\Model\CreateWorkflowTransitionDetailsScreen**](CreateWorkflowTransitionDetailsScreen.md) |  | [optional]
**to** | **string** | The status the transition goes to. |
**type** | **string** | The type of the transition. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
