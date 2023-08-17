# # SharePermissionRole

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**actors** | [**\OpenAPI\Client\Model\RoleActor[]**](RoleActor.md) | The list of users who act in this role. | [optional] [readonly]
**admin** | **bool** | Whether this role is the admin role for the project. | [optional] [readonly]
**current_user_role** | **bool** | Whether the calling user is part of this role. | [optional]
**default** | **bool** | Whether this role is the default role for the project | [optional] [readonly]
**description** | **string** | The description of the project role. | [optional] [readonly]
**id** | **int** | The ID of the project role. | [optional] [readonly]
**name** | **string** | The name of the project role. | [optional]
**role_configurable** | **bool** | Whether the roles are configurable for this project. | [optional] [readonly]
**scope** | [**\OpenAPI\Client\Model\ProjectRoleScope**](ProjectRoleScope.md) |  | [optional]
**self** | **string** | The URL the project role details. | [optional] [readonly]
**translated_name** | **string** | The translated name of the project role. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
