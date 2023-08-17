# # Worklog

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**author** | [**\OpenAPI\Client\Model\WorklogAuthor**](WorklogAuthor.md) |  | [optional]
**comment** | **string** | A comment about the worklog. Optional when creating or updating a worklog. | [optional]
**created** | **\DateTime** | The datetime on which the worklog was created. | [optional] [readonly]
**id** | **string** | The ID of the worklog record. | [optional] [readonly]
**issue_id** | **string** | The ID of the issue this worklog is for. | [optional] [readonly]
**properties** | [**\OpenAPI\Client\Model\EntityProperty[]**](EntityProperty.md) | Details of properties for the worklog. Optional when creating or updating a worklog. | [optional]
**self** | **string** | The URL of the worklog item. | [optional] [readonly]
**started** | **\DateTime** | The datetime on which the worklog effort was started. Required when creating a worklog. Optional when updating a worklog. | [optional]
**time_spent** | **string** | The time spent working on the issue as days (\\#d), hours (\\#h), or minutes (\\#m or \\#). Required when creating a worklog if &#x60;timeSpentSeconds&#x60; isn&#39;t provided. Optional when updating a worklog. Cannot be provided if &#x60;timeSpentSecond&#x60; is provided. | [optional]
**time_spent_seconds** | **int** | The time in seconds spent working on the issue. Required when creating a worklog if &#x60;timeSpent&#x60; isn&#39;t provided. Optional when updating a worklog. Cannot be provided if &#x60;timeSpent&#x60; is provided. | [optional]
**update_author** | [**\OpenAPI\Client\Model\WorklogUpdateAuthor**](WorklogUpdateAuthor.md) |  | [optional]
**updated** | **\DateTime** | The datetime on which the worklog was last updated. | [optional] [readonly]
**visibility** | [**\OpenAPI\Client\Model\WorklogVisibility**](WorklogVisibility.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
