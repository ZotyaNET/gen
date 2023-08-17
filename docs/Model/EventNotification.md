# # EventNotification

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email_address** | **string** | The email address. | [optional]
**expand** | **string** | Expand options that include additional event notification details in the response. | [optional]
**field** | [**\OpenAPI\Client\Model\EventNotificationField**](EventNotificationField.md) |  | [optional]
**group** | [**\OpenAPI\Client\Model\EventNotificationGroup**](EventNotificationGroup.md) |  | [optional]
**id** | **int** | The ID of the notification. | [optional]
**notification_type** | **string** | Identifies the recipients of the notification. | [optional]
**parameter** | **string** | As a group&#39;s name can change, use of &#x60;recipient&#x60; is recommended. The identifier associated with the &#x60;notificationType&#x60; value that defines the receiver of the notification, where the receiver isn&#39;t implied by &#x60;notificationType&#x60; value. So, when &#x60;notificationType&#x60; is:   *  &#x60;User&#x60; The &#x60;parameter&#x60; is the user account ID.  *  &#x60;Group&#x60; The &#x60;parameter&#x60; is the group name.  *  &#x60;ProjectRole&#x60; The &#x60;parameter&#x60; is the project role ID.  *  &#x60;UserCustomField&#x60; The &#x60;parameter&#x60; is the ID of the custom field.  *  &#x60;GroupCustomField&#x60; The &#x60;parameter&#x60; is the ID of the custom field. | [optional]
**project_role** | [**\OpenAPI\Client\Model\EventNotificationProjectRole**](EventNotificationProjectRole.md) |  | [optional]
**recipient** | **string** | The identifier associated with the &#x60;notificationType&#x60; value that defines the receiver of the notification, where the receiver isn&#39;t implied by the &#x60;notificationType&#x60; value. So, when &#x60;notificationType&#x60; is:   *  &#x60;User&#x60;, &#x60;recipient&#x60; is the user account ID.  *  &#x60;Group&#x60;, &#x60;recipient&#x60; is the group ID.  *  &#x60;ProjectRole&#x60;, &#x60;recipient&#x60; is the project role ID.  *  &#x60;UserCustomField&#x60;, &#x60;recipient&#x60; is the ID of the custom field.  *  &#x60;GroupCustomField&#x60;, &#x60;recipient&#x60; is the ID of the custom field. | [optional]
**user** | [**\OpenAPI\Client\Model\EventNotificationUser**](EventNotificationUser.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
