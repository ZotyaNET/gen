# # SharePermission

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**group** | [**\OpenAPI\Client\Model\SharePermissionGroup**](SharePermissionGroup.md) |  | [optional]
**id** | **int** | The unique identifier of the share permission. | [optional] [readonly]
**project** | [**\OpenAPI\Client\Model\SharePermissionProject**](SharePermissionProject.md) |  | [optional]
**role** | [**\OpenAPI\Client\Model\SharePermissionRole**](SharePermissionRole.md) |  | [optional]
**type** | **string** | The type of share permission:   *  &#x60;user&#x60; Shared with a user.  *  &#x60;group&#x60; Shared with a group. If set in a request, then specify &#x60;sharePermission.group&#x60; as well.  *  &#x60;project&#x60; Shared with a project. If set in a request, then specify &#x60;sharePermission.project&#x60; as well.  *  &#x60;projectRole&#x60; Share with a project role in a project. This value is not returned in responses. It is used in requests, where it needs to be specify with &#x60;projectId&#x60; and &#x60;projectRoleId&#x60;.  *  &#x60;global&#x60; Shared globally. If set in a request, no other &#x60;sharePermission&#x60; properties need to be specified.  *  &#x60;loggedin&#x60; Shared with all logged-in users. Note: This value is set in a request by specifying &#x60;authenticated&#x60; as the &#x60;type&#x60;.  *  &#x60;project-unknown&#x60; Shared with a project that the user does not have access to. Cannot be set in a request. |
**user** | [**\OpenAPI\Client\Model\SharePermissionUser**](SharePermissionUser.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
