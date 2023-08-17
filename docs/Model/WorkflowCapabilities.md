# # WorkflowCapabilities

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**connect_rules** | [**\OpenAPI\Client\Model\AvailableWorkflowConnectRule[]**](AvailableWorkflowConnectRule.md) | The Connect provided ecosystem rules available. | [optional]
**editor_scope** | **string** | The scope of the workflow capabilities. &#x60;GLOBAL&#x60; for company-managed projects and &#x60;PROJECT&#x60; for team-managed projects. | [optional]
**forge_rules** | [**\OpenAPI\Client\Model\AvailableWorkflowForgeRule[]**](AvailableWorkflowForgeRule.md) | The Forge provided ecosystem rules available. | [optional]
**project_types** | **string[]** | The types of projects that this capability set is available for. | [optional]
**system_rules** | [**\OpenAPI\Client\Model\AvailableWorkflowSystemRule[]**](AvailableWorkflowSystemRule.md) | The Atlassian provided system rules available. | [optional]
**trigger_rules** | [**\OpenAPI\Client\Model\AvailableWorkflowTriggers[]**](AvailableWorkflowTriggers.md) | The trigger rules available. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
