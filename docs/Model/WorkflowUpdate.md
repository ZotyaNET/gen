# # WorkflowUpdate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**default_status_mappings** | [**\OpenAPI\Client\Model\StatusMigration[]**](StatusMigration.md) | The mapping of old to new status ID. | [optional]
**description** | **string** | The new description for this workflow. | [optional]
**id** | **string** | The ID of this workflow. |
**start_point_layout** | [**\OpenAPI\Client\Model\WorkflowLayout**](WorkflowLayout.md) |  | [optional]
**status_mappings** | [**\OpenAPI\Client\Model\StatusMappingDTO[]**](StatusMappingDTO.md) | The mapping of old to new status ID for a specific project and issue type. | [optional]
**statuses** | [**\OpenAPI\Client\Model\StatusLayoutUpdate[]**](StatusLayoutUpdate.md) | The statuses associated with this workflow. |
**transitions** | [**\OpenAPI\Client\Model\TransitionUpdateDTO[]**](TransitionUpdateDTO.md) | The transitions of this workflow. |
**version** | [**\OpenAPI\Client\Model\DocumentVersion**](DocumentVersion.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
