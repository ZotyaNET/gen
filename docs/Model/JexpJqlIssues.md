# # JexpJqlIssues

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**max_results** | **int** | The maximum number of issues to return from the JQL query. Inspect &#x60;meta.issues.jql.maxResults&#x60; in the response to ensure the maximum value has not been exceeded. | [optional]
**query** | **string** | The JQL query. | [optional]
**start_at** | **int** | The index of the first issue to return from the JQL query. | [optional]
**validation** | **string** | Determines how to validate the JQL query and treat the validation results. | [optional] [default to 'strict']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
