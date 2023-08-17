# # FilterSubscriptionUser

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | The account ID of the user, which uniquely identifies the user across all Atlassian products. For example, *5b10ac8d82e05b22cc7d4ef5*. Required in requests. | [optional]
**account_type** | **string** | The user account type. Can take the following values:   *  &#x60;atlassian&#x60; regular Atlassian user account  *  &#x60;app&#x60; system account used for Connect applications and OAuth to represent external systems  *  &#x60;customer&#x60; Jira Service Desk account representing an external service desk | [optional] [readonly]
**active** | **bool** | Whether the user is active. | [optional] [readonly]
**application_roles** | [**\OpenAPI\Client\Model\UserApplicationRoles**](UserApplicationRoles.md) |  | [optional]
**avatar_urls** | [**\OpenAPI\Client\Model\UserAvatarUrls**](UserAvatarUrls.md) |  | [optional]
**display_name** | **string** | The display name of the user. Depending on the user’s privacy setting, this may return an alternative value. | [optional] [readonly]
**email_address** | **string** | The email address of the user. Depending on the user’s privacy setting, this may be returned as null. | [optional] [readonly]
**expand** | **string** | Expand options that include additional user details in the response. | [optional] [readonly]
**groups** | [**\OpenAPI\Client\Model\UserGroups**](UserGroups.md) |  | [optional]
**key** | **string** | This property is no longer available and will be removed from the documentation soon. See the [deprecation notice](https://developer.atlassian.com/cloud/jira/platform/deprecation-notice-user-privacy-api-migration-guide/) for details. | [optional]
**locale** | **string** | The locale of the user. Depending on the user’s privacy setting, this may be returned as null. | [optional] [readonly]
**name** | **string** | This property is no longer available and will be removed from the documentation soon. See the [deprecation notice](https://developer.atlassian.com/cloud/jira/platform/deprecation-notice-user-privacy-api-migration-guide/) for details. | [optional]
**self** | **string** | The URL of the user. | [optional] [readonly]
**time_zone** | **string** | The time zone specified in the user&#39;s profile. Depending on the user’s privacy setting, this may be returned as null. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
