# # UserPermission

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**deprecated_key** | **bool** | Indicate whether the permission key is deprecated. Note that deprecated keys cannot be used in the &#x60;permissions parameter of Get my permissions. Deprecated keys are not returned by Get all permissions.&#x60; | [optional]
**description** | **string** | The description of the permission. | [optional]
**have_permission** | **bool** | Whether the permission is available to the user in the queried context. | [optional]
**id** | **string** | The ID of the permission. Either &#x60;id&#x60; or &#x60;key&#x60; must be specified. Use [Get all permissions](#api-rest-api-2-permissions-get) to get the list of permissions. | [optional]
**key** | **string** | The key of the permission. Either &#x60;id&#x60; or &#x60;key&#x60; must be specified. Use [Get all permissions](#api-rest-api-2-permissions-get) to get the list of permissions. | [optional]
**name** | **string** | The name of the permission. | [optional]
**type** | **string** | The type of the permission. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
