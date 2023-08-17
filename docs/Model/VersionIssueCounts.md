# # VersionIssueCounts

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**custom_field_usage** | [**\OpenAPI\Client\Model\VersionUsageInCustomField[]**](VersionUsageInCustomField.md) | List of custom fields using the version. | [optional] [readonly]
**issue_count_with_custom_fields_showing_version** | **int** | Count of issues where a version custom field is set to the version. | [optional] [readonly]
**issues_affected_count** | **int** | Count of issues where the &#x60;affectedVersion&#x60; is set to the version. | [optional] [readonly]
**issues_fixed_count** | **int** | Count of issues where the &#x60;fixVersion&#x60; is set to the version. | [optional] [readonly]
**self** | **string** | The URL of these count details. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
