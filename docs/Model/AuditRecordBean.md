# # AuditRecordBean

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**associated_items** | [**\OpenAPI\Client\Model\AssociatedItemBean[]**](AssociatedItemBean.md) | The list of items associated with the changed record. | [optional] [readonly]
**author_key** | **string** | Deprecated, use &#x60;authorAccountId&#x60; instead. The key of the user who created the audit record. | [optional] [readonly]
**category** | **string** | The category of the audit record. For a list of these categories, see the help article [Auditing in Jira applications](https://confluence.atlassian.com/x/noXKM). | [optional] [readonly]
**changed_values** | [**\OpenAPI\Client\Model\ChangedValueBean[]**](ChangedValueBean.md) | The list of values changed in the record event. | [optional] [readonly]
**created** | **\DateTime** | The date and time on which the audit record was created. | [optional] [readonly]
**description** | **string** | The description of the audit record. | [optional] [readonly]
**event_source** | **string** | The event the audit record originated from. | [optional] [readonly]
**id** | **int** | The ID of the audit record. | [optional] [readonly]
**object_item** | [**\OpenAPI\Client\Model\AssociatedItemBean**](AssociatedItemBean.md) |  | [optional]
**remote_address** | **string** | The URL of the computer where the creation of the audit record was initiated. | [optional] [readonly]
**summary** | **string** | The summary of the audit record. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
