# # DashboardGadgetSettings

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**color** | **string** | The color of the gadget. Should be one of &#x60;blue&#x60;, &#x60;red&#x60;, &#x60;yellow&#x60;, &#x60;green&#x60;, &#x60;cyan&#x60;, &#x60;purple&#x60;, &#x60;gray&#x60;, or &#x60;white&#x60;. | [optional]
**ignore_uri_and_module_key_validation** | **bool** | Whether to ignore the validation of module key and URI. For example, when a gadget is created that is a part of an application that isn&#39;t installed. | [optional]
**module_key** | **string** | The module key of the gadget type. Can&#39;t be provided with &#x60;uri&#x60;. | [optional]
**position** | [**\OpenAPI\Client\Model\DashboardGadgetSettingsPosition**](DashboardGadgetSettingsPosition.md) |  | [optional]
**title** | **string** | The title of the gadget. | [optional]
**uri** | **string** | The URI of the gadget type. Can&#39;t be provided with &#x60;moduleKey&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
