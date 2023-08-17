# # FilterDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | The description of the filter. | [optional]
**edit_permissions** | [**\OpenAPI\Client\Model\SharePermission[]**](SharePermission.md) | The groups and projects that can edit the filter. This can be specified when updating a filter, but not when creating a filter. | [optional]
**expand** | **string** | Expand options that include additional filter details in the response. | [optional] [readonly]
**favourite** | **bool** | Whether the filter is selected as a favorite by any users, not including the filter owner. | [optional] [readonly]
**favourited_count** | **int** | The count of how many users have selected this filter as a favorite, including the filter owner. | [optional] [readonly]
**id** | **string** | The unique identifier for the filter. | [optional] [readonly]
**jql** | **string** | The JQL query for the filter. For example, *project &#x3D; SSP AND issuetype &#x3D; Bug*. | [optional] [readonly]
**name** | **string** | The name of the filter. |
**owner** | [**\OpenAPI\Client\Model\FilterDetailsOwner**](FilterDetailsOwner.md) |  | [optional]
**search_url** | **string** | A URL to view the filter results in Jira, using the [Search for issues using JQL](#api-rest-api-2-filter-search-get) operation with the filter&#39;s JQL string to return the filter results. For example, *https://your-domain.atlassian.net/rest/api/2/search?jql&#x3D;project+%3D+SSP+AND+issuetype+%3D+Bug*. | [optional] [readonly]
**self** | **string** | The URL of the filter. | [optional] [readonly]
**share_permissions** | [**\OpenAPI\Client\Model\SharePermission[]**](SharePermission.md) | The groups and projects that the filter is shared with. This can be specified when updating a filter, but not when creating a filter. | [optional]
**subscriptions** | [**\OpenAPI\Client\Model\FilterSubscription[]**](FilterSubscription.md) | The users that are subscribed to the filter. | [optional] [readonly]
**view_url** | **string** | A URL to view the filter results in Jira, using the ID of the filter. For example, *https://your-domain.atlassian.net/issues/?filter&#x3D;10100*. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
