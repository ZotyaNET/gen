# # Dashboard

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**automatic_refresh_ms** | **int** | The automatic refresh interval for the dashboard in milliseconds. | [optional] [readonly]
**description** | **string** |  | [optional]
**edit_permissions** | [**\OpenAPI\Client\Model\SharePermission[]**](SharePermission.md) | The details of any edit share permissions for the dashboard. | [optional] [readonly]
**id** | **string** | The ID of the dashboard. | [optional] [readonly]
**is_favourite** | **bool** | Whether the dashboard is selected as a favorite by the user. | [optional] [readonly]
**is_writable** | **bool** | Whether the current user has permission to edit the dashboard. | [optional] [readonly]
**name** | **string** | The name of the dashboard. | [optional] [readonly]
**owner** | [**\OpenAPI\Client\Model\DashboardOwner**](DashboardOwner.md) |  | [optional]
**popularity** | **int** | The number of users who have this dashboard as a favorite. | [optional] [readonly]
**rank** | **int** | The rank of this dashboard. | [optional] [readonly]
**self** | **string** | The URL of these dashboard details. | [optional] [readonly]
**share_permissions** | [**\OpenAPI\Client\Model\SharePermission[]**](SharePermission.md) | The details of any view share permissions for the dashboard. | [optional] [readonly]
**system_dashboard** | **bool** | Whether the current dashboard is system dashboard. | [optional] [readonly]
**view** | **string** | The URL of the dashboard. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
