# # IssueBean

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**changelog** | [**\OpenAPI\Client\Model\IssueBeanChangelog**](IssueBeanChangelog.md) |  | [optional]
**editmeta** | [**\OpenAPI\Client\Model\IssueBeanEditmeta**](IssueBeanEditmeta.md) |  | [optional]
**expand** | **string** | Expand options that include additional issue details in the response. | [optional] [readonly]
**fields** | **array<string,mixed>** |  | [optional]
**fields_to_include** | [**\OpenAPI\Client\Model\IncludedFields**](IncludedFields.md) |  | [optional]
**id** | **string** | The ID of the issue. | [optional] [readonly]
**key** | **string** | The key of the issue. | [optional] [readonly]
**names** | **array<string,string>** | The ID and name of each field present on the issue. | [optional] [readonly]
**operations** | [**\OpenAPI\Client\Model\IssueBeanOperations**](IssueBeanOperations.md) |  | [optional]
**properties** | **array<string,mixed>** | Details of the issue properties identified in the request. | [optional] [readonly]
**rendered_fields** | **array<string,mixed>** | The rendered value of each field present on the issue. | [optional] [readonly]
**schema** | [**array<string,\OpenAPI\Client\Model\JsonTypeBean>**](JsonTypeBean.md) | The schema describing each field present on the issue. | [optional] [readonly]
**self** | **string** | The URL of the issue details. | [optional] [readonly]
**transitions** | [**\OpenAPI\Client\Model\IssueTransition[]**](IssueTransition.md) | The transitions that can be performed on the issue. | [optional] [readonly]
**versioned_representations** | **array<string,array<string,mixed>>** | The versions of each field on the issue. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
