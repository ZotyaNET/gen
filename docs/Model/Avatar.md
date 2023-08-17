# # Avatar

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**file_name** | **string** | The file name of the avatar icon. Returned for system avatars. | [optional] [readonly]
**id** | **string** | The ID of the avatar. |
**is_deletable** | **bool** | Whether the avatar can be deleted. | [optional] [readonly]
**is_selected** | **bool** | Whether the avatar is used in Jira. For example, shown as a project&#39;s avatar. | [optional] [readonly]
**is_system_avatar** | **bool** | Whether the avatar is a system avatar. | [optional] [readonly]
**owner** | **string** | The owner of the avatar. For a system avatar the owner is null (and nothing is returned). For non-system avatars this is the appropriate identifier, such as the ID for a project or the account ID for a user. | [optional] [readonly]
**urls** | **array<string,string>** | The list of avatar icon URLs. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
