# # ServerInformation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**base_url** | **string** | The base URL of the Jira instance. | [optional]
**build_date** | **\DateTime** | The timestamp when the Jira version was built. | [optional]
**build_number** | **int** | The build number of the Jira version. | [optional]
**deployment_type** | **string** | The type of server deployment. This is always returned as *Cloud*. | [optional]
**health_checks** | [**\OpenAPI\Client\Model\HealthCheckResult[]**](HealthCheckResult.md) | Jira instance health check results. Deprecated and no longer returned. | [optional]
**scm_info** | **string** | The unique identifier of the Jira version. | [optional]
**server_time** | **\DateTime** | The time in Jira when this request was responded to. | [optional]
**server_title** | **string** | The name of the Jira instance. | [optional]
**version** | **string** | The version of Jira. | [optional]
**version_numbers** | **int[]** | The major, minor, and revision version numbers of the Jira version. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
