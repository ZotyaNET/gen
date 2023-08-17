# # PermissionScheme

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | A description for the permission scheme. | [optional]
**expand** | **string** | The expand options available for the permission scheme. | [optional] [readonly]
**id** | **int** | The ID of the permission scheme. | [optional] [readonly]
**name** | **string** | The name of the permission scheme. Must be unique. |
**permissions** | [**\OpenAPI\Client\Model\PermissionGrant[]**](PermissionGrant.md) | The permission scheme to create or update. See [About permission schemes and grants](../api-group-permission-schemes/#about-permission-schemes-and-grants) for more information. | [optional]
**scope** | [**\OpenAPI\Client\Model\PermissionSchemeScope**](PermissionSchemeScope.md) |  | [optional]
**self** | **string** | The URL of the permission scheme. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
