# # Votes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**has_voted** | **bool** | Whether the user making this request has voted on the issue. | [optional] [readonly]
**self** | **string** | The URL of these issue vote details. | [optional] [readonly]
**voters** | [**\OpenAPI\Client\Model\User[]**](User.md) | List of the users who have voted on this issue. An empty list is returned when the calling user doesn&#39;t have the *View voters and watchers* project permission. | [optional] [readonly]
**votes** | **int** | The number of votes on the issue. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
