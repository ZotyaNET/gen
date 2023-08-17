# # AttachmentAuthor

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | The account ID of the user, which uniquely identifies the user across all Atlassian products. For example, *5b10ac8d82e05b22cc7d4ef5*. | [optional]
**account_type** | **string** | The type of account represented by this user. This will be one of &#39;atlassian&#39; (normal users), &#39;app&#39; (application user) or &#39;customer&#39; (Jira Service Desk customer user) | [optional] [readonly]
**active** | **bool** | Whether the user is active. | [optional] [readonly]
**avatar_urls** | [**\OpenAPI\Client\Model\UserAvatarUrls**](UserAvatarUrls.md) |  | [optional]
**display_name** | **string** | The display name of the user. Depending on the user’s privacy settings, this may return an alternative value. | [optional] [readonly]
**email_address** | **string** | The email address of the user. Depending on the user’s privacy settings, this may be returned as null. | [optional] [readonly]
**key** | **string** | This property is no longer available and will be removed from the documentation soon. See the [deprecation notice](https://developer.atlassian.com/cloud/jira/platform/deprecation-notice-user-privacy-api-migration-guide/) for details. | [optional] [readonly]
**name** | **string** | This property is no longer available and will be removed from the documentation soon. See the [deprecation notice](https://developer.atlassian.com/cloud/jira/platform/deprecation-notice-user-privacy-api-migration-guide/) for details. | [optional] [readonly]
**self** | **string** | The URL of the user. | [optional] [readonly]
**time_zone** | **string** | The time zone specified in the user&#39;s profile. Depending on the user’s privacy settings, this may be returned as null. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
