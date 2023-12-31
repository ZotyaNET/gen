# # SharePermissionUser

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | The account ID of the user, which uniquely identifies the user across all Atlassian products. For example, *5b10ac8d82e05b22cc7d4ef5*. | [optional]
**active** | **bool** | Whether the user is active. | [optional]
**avatar_urls** | [**\OpenAPI\Client\Model\UserBeanAvatarUrls**](UserBeanAvatarUrls.md) |  | [optional]
**display_name** | **string** | The display name of the user. Depending on the user’s privacy setting, this may return an alternative value. | [optional]
**key** | **string** | This property is deprecated in favor of &#x60;accountId&#x60; because of privacy changes. See the [migration guide](https://developer.atlassian.com/cloud/jira/platform/deprecation-notice-user-privacy-api-migration-guide/) for details.   The key of the user. | [optional]
**name** | **string** | This property is deprecated in favor of &#x60;accountId&#x60; because of privacy changes. See the [migration guide](https://developer.atlassian.com/cloud/jira/platform/deprecation-notice-user-privacy-api-migration-guide/) for details.   The username of the user. | [optional]
**self** | **string** | The URL of the user. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
