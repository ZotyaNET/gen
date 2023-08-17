# # IssueUpdateDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**fields** | **array<string,mixed>** | List of issue screen fields to update, specifying the sub-field to update and its value for each field. This field provides a straightforward option when setting a sub-field. When multiple sub-fields or other operations are required, use &#x60;update&#x60;. Fields included in here cannot be included in &#x60;update&#x60;. | [optional]
**history_metadata** | [**\OpenAPI\Client\Model\IssueUpdateDetailsHistoryMetadata**](IssueUpdateDetailsHistoryMetadata.md) |  | [optional]
**properties** | [**\OpenAPI\Client\Model\EntityProperty[]**](EntityProperty.md) | Details of issue properties to be add or update. | [optional]
**transition** | [**\OpenAPI\Client\Model\IssueUpdateDetailsTransition**](IssueUpdateDetailsTransition.md) |  | [optional]
**update** | **array<string,\OpenAPI\Client\Model\FieldUpdateOperation[]>** | A Map containing the field field name and a list of operations to perform on the issue screen field. Note that fields included in here cannot be included in &#x60;fields&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
