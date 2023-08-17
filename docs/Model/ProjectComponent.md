# # ProjectComponent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**assignee** | [**\OpenAPI\Client\Model\ProjectComponentAssignee**](ProjectComponentAssignee.md) |  | [optional]
**assignee_type** | **string** | The nominal user type used to determine the assignee for issues created with this component. See &#x60;realAssigneeType&#x60; for details on how the type of the user, and hence the user, assigned to issues is determined. Can take the following values:   *  &#x60;PROJECT_LEAD&#x60; the assignee to any issues created with this component is nominally the lead for the project the component is in.  *  &#x60;COMPONENT_LEAD&#x60; the assignee to any issues created with this component is nominally the lead for the component.  *  &#x60;UNASSIGNED&#x60; an assignee is not set for issues created with this component.  *  &#x60;PROJECT_DEFAULT&#x60; the assignee to any issues created with this component is nominally the default assignee for the project that the component is in.  Default value: &#x60;PROJECT_DEFAULT&#x60;.   Optional when creating or updating a component. | [optional]
**description** | **string** | The description for the component. Optional when creating or updating a component. | [optional]
**id** | **string** | The unique identifier for the component. | [optional] [readonly]
**is_assignee_type_valid** | **bool** | Whether a user is associated with &#x60;assigneeType&#x60;. For example, if the &#x60;assigneeType&#x60; is set to &#x60;COMPONENT_LEAD&#x60; but the component lead is not set, then &#x60;false&#x60; is returned. | [optional] [readonly]
**lead** | [**\OpenAPI\Client\Model\ProjectComponentLead**](ProjectComponentLead.md) |  | [optional]
**lead_account_id** | **string** | The accountId of the component&#39;s lead user. The accountId uniquely identifies the user across all Atlassian products. For example, *5b10ac8d82e05b22cc7d4ef5*. | [optional]
**lead_user_name** | **string** | This property is no longer available and will be removed from the documentation soon. See the [deprecation notice](https://developer.atlassian.com/cloud/jira/platform/deprecation-notice-user-privacy-api-migration-guide/) for details. | [optional]
**name** | **string** | The unique name for the component in the project. Required when creating a component. Optional when updating a component. The maximum length is 255 characters. | [optional]
**project** | **string** | The key of the project the component is assigned to. Required when creating a component. Can&#39;t be updated. | [optional]
**project_id** | **int** | The ID of the project the component is assigned to. | [optional] [readonly]
**real_assignee** | [**\OpenAPI\Client\Model\ProjectComponentRealAssignee**](ProjectComponentRealAssignee.md) |  | [optional]
**real_assignee_type** | **string** | The type of the assignee that is assigned to issues created with this component, when an assignee cannot be set from the &#x60;assigneeType&#x60;. For example, &#x60;assigneeType&#x60; is set to &#x60;COMPONENT_LEAD&#x60; but no component lead is set. This property is set to one of the following values:   *  &#x60;PROJECT_LEAD&#x60; when &#x60;assigneeType&#x60; is &#x60;PROJECT_LEAD&#x60; and the project lead has permission to be assigned issues in the project that the component is in.  *  &#x60;COMPONENT_LEAD&#x60; when &#x60;assignee&#x60;Type is &#x60;COMPONENT_LEAD&#x60; and the component lead has permission to be assigned issues in the project that the component is in.  *  &#x60;UNASSIGNED&#x60; when &#x60;assigneeType&#x60; is &#x60;UNASSIGNED&#x60; and Jira is configured to allow unassigned issues.  *  &#x60;PROJECT_DEFAULT&#x60; when none of the preceding cases are true. | [optional] [readonly]
**self** | **string** | The URL of the component. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
