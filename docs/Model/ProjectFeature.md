# # ProjectFeature

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**feature** | **string** | The key of the feature. | [optional]
**image_uri** | **string** | URI for the image representing the feature. | [optional]
**localised_description** | **string** | Localized display description for the feature. | [optional]
**localised_name** | **string** | Localized display name for the feature. | [optional]
**prerequisites** | **string[]** | List of keys of the features required to enable the feature. | [optional]
**project_id** | **int** | The ID of the project. | [optional]
**state** | **string** | The state of the feature. When updating the state of a feature, only ENABLED and DISABLED are supported. Responses can contain all values | [optional]
**toggle_locked** | **bool** | Whether the state of the feature can be updated. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
