# # WorkflowTransitions

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**actions** | [**\OpenAPI\Client\Model\WorkflowRuleConfiguration[]**](WorkflowRuleConfiguration.md) | The post-functions of the transition. | [optional]
**conditions** | [**\OpenAPI\Client\Model\ConditionGroupConfiguration**](ConditionGroupConfiguration.md) |  | [optional]
**custom_issue_event_id** | **string** | The custom event ID of the transition. | [optional]
**description** | **string** | The description of the transition. | [optional]
**from** | [**\OpenAPI\Client\Model\WorkflowStatusAndPort[]**](WorkflowStatusAndPort.md) | The statuses the transition can start from. | [optional]
**id** | **string** | The ID of the transition. | [optional]
**name** | **string** | The name of the transition. | [optional]
**properties** | **array<string,string>** | The properties of the transition. | [optional]
**to** | [**\OpenAPI\Client\Model\WorkflowStatusAndPort**](WorkflowStatusAndPort.md) |  | [optional]
**transition_screen** | [**\OpenAPI\Client\Model\WorkflowRuleConfiguration**](WorkflowRuleConfiguration.md) |  | [optional]
**triggers** | [**\OpenAPI\Client\Model\WorkflowTrigger[]**](WorkflowTrigger.md) | The triggers of the transition. | [optional]
**type** | **string** | The transition type. | [optional]
**validators** | [**\OpenAPI\Client\Model\WorkflowRuleConfiguration[]**](WorkflowRuleConfiguration.md) | The validators of the transition. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
