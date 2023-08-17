# # IssueLinkType

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID of the issue link type and is used as follows:   *  In the [ issueLink](#api-rest-api-2-issueLink-post) resource it is the type of issue link. Required on create when &#x60;name&#x60; isn&#39;t provided. Otherwise, read only.  *  In the [ issueLinkType](#api-rest-api-2-issueLinkType-post) resource it is read only. | [optional]
**inward** | **string** | The description of the issue link type inward link and is used as follows:   *  In the [ issueLink](#api-rest-api-2-issueLink-post) resource it is read only.  *  In the [ issueLinkType](#api-rest-api-2-issueLinkType-post) resource it is required on create and optional on update. Otherwise, read only. | [optional]
**name** | **string** | The name of the issue link type and is used as follows:   *  In the [ issueLink](#api-rest-api-2-issueLink-post) resource it is the type of issue link. Required on create when &#x60;id&#x60; isn&#39;t provided. Otherwise, read only.  *  In the [ issueLinkType](#api-rest-api-2-issueLinkType-post) resource it is required on create and optional on update. Otherwise, read only. | [optional]
**outward** | **string** | The description of the issue link type outward link and is used as follows:   *  In the [ issueLink](#api-rest-api-2-issueLink-post) resource it is read only.  *  In the [ issueLinkType](#api-rest-api-2-issueLinkType-post) resource it is required on create and optional on update. Otherwise, read only. | [optional]
**self** | **string** | The URL of the issue link type. Read only. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
