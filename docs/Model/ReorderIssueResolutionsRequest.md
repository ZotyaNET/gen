# # ReorderIssueResolutionsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**after** | **string** | The ID of the resolution. Required if &#x60;position&#x60; isn&#39;t provided. | [optional]
**ids** | **string[]** | The list of resolution IDs to be reordered. Cannot contain duplicates nor after ID. |
**position** | **string** | The position for issue resolutions to be moved to. Required if &#x60;after&#x60; isn&#39;t provided. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
