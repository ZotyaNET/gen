# # SearchResults

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**expand** | **string** | Expand options that include additional search result details in the response. | [optional] [readonly]
**issues** | [**\OpenAPI\Client\Model\IssueBean[]**](IssueBean.md) | The list of issues found by the search. | [optional] [readonly]
**max_results** | **int** | The maximum number of results that could be on the page. | [optional] [readonly]
**names** | **array<string,string>** | The ID and name of each field in the search results. | [optional] [readonly]
**schema** | [**array<string,\OpenAPI\Client\Model\JsonTypeBean>**](JsonTypeBean.md) | The schema describing the field types in the search results. | [optional] [readonly]
**start_at** | **int** | The index of the first item returned on the page. | [optional] [readonly]
**total** | **int** | The number of results on the page. | [optional] [readonly]
**warning_messages** | **string[]** | Any warnings related to the JQL query. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
