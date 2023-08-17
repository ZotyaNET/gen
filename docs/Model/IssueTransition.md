# # IssueTransition

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**expand** | **string** | Expand options that include additional transition details in the response. | [optional] [readonly]
**fields** | [**array<string,\OpenAPI\Client\Model\FieldMetadata>**](FieldMetadata.md) | Details of the fields associated with the issue transition screen. Use this information to populate &#x60;fields&#x60; and &#x60;update&#x60; in a transition request. | [optional] [readonly]
**has_screen** | **bool** | Whether there is a screen associated with the issue transition. | [optional] [readonly]
**id** | **string** | The ID of the issue transition. Required when specifying a transition to undertake. | [optional]
**is_available** | **bool** | Whether the transition is available to be performed. | [optional] [readonly]
**is_conditional** | **bool** | Whether the issue has to meet criteria before the issue transition is applied. | [optional] [readonly]
**is_global** | **bool** | Whether the issue transition is global, that is, the transition is applied to issues regardless of their status. | [optional] [readonly]
**is_initial** | **bool** | Whether this is the initial issue transition for the workflow. | [optional] [readonly]
**looped** | **bool** |  | [optional]
**name** | **string** | The name of the issue transition. | [optional] [readonly]
**to** | [**\OpenAPI\Client\Model\IssueTransitionTo**](IssueTransitionTo.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
