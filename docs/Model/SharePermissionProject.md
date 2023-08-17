# # SharePermissionProject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**archived** | **bool** | Whether the project is archived. | [optional] [readonly]
**archived_by** | [**\OpenAPI\Client\Model\ProjectArchivedBy**](ProjectArchivedBy.md) |  | [optional]
**archived_date** | **\DateTime** | The date when the project was archived. | [optional] [readonly]
**assignee_type** | **string** | The default assignee when creating issues for this project. | [optional] [readonly]
**avatar_urls** | [**\OpenAPI\Client\Model\ProjectAvatarUrls**](ProjectAvatarUrls.md) |  | [optional]
**components** | [**\OpenAPI\Client\Model\ProjectComponent[]**](ProjectComponent.md) | List of the components contained in the project. | [optional] [readonly]
**deleted** | **bool** | Whether the project is marked as deleted. | [optional] [readonly]
**deleted_by** | [**\OpenAPI\Client\Model\ProjectDeletedBy**](ProjectDeletedBy.md) |  | [optional]
**deleted_date** | **\DateTime** | The date when the project was marked as deleted. | [optional] [readonly]
**description** | **string** | A brief description of the project. | [optional] [readonly]
**email** | **string** | An email address associated with the project. | [optional]
**expand** | **string** | Expand options that include additional project details in the response. | [optional] [readonly]
**favourite** | **bool** | Whether the project is selected as a favorite. | [optional]
**id** | **string** | The ID of the project. | [optional]
**insight** | [**\OpenAPI\Client\Model\ProjectInsight**](ProjectInsight.md) |  | [optional]
**is_private** | **bool** | Whether the project is private. | [optional] [readonly]
**issue_type_hierarchy** | [**\OpenAPI\Client\Model\ProjectIssueTypeHierarchy**](ProjectIssueTypeHierarchy.md) |  | [optional]
**issue_types** | [**\OpenAPI\Client\Model\IssueTypeDetails[]**](IssueTypeDetails.md) | List of the issue types available in the project. | [optional] [readonly]
**key** | **string** | The key of the project. | [optional] [readonly]
**landing_page_info** | [**\OpenAPI\Client\Model\ProjectLandingPageInfo**](ProjectLandingPageInfo.md) |  | [optional]
**lead** | [**\OpenAPI\Client\Model\ProjectLead**](ProjectLead.md) |  | [optional]
**name** | **string** | The name of the project. | [optional] [readonly]
**permissions** | [**\OpenAPI\Client\Model\ProjectPermissions**](ProjectPermissions.md) |  | [optional]
**project_category** | [**\OpenAPI\Client\Model\ProjectProjectCategory**](ProjectProjectCategory.md) |  | [optional]
**project_type_key** | **string** | The [project type](https://confluence.atlassian.com/x/GwiiLQ#Jiraapplicationsoverview-Productfeaturesandprojecttypes) of the project. | [optional] [readonly]
**properties** | **array<string,mixed>** | Map of project properties | [optional] [readonly]
**retention_till_date** | **\DateTime** | The date when the project is deleted permanently. | [optional] [readonly]
**roles** | **array<string,string>** | The name and self URL for each role defined in the project. For more information, see [Create project role](#api-rest-api-2-role-post). | [optional] [readonly]
**self** | **string** | The URL of the project details. | [optional] [readonly]
**simplified** | **bool** | Whether the project is simplified. | [optional] [readonly]
**style** | **string** | The type of the project. | [optional] [readonly]
**url** | **string** | A link to information about this project, such as project documentation. | [optional] [readonly]
**uuid** | **string** | Unique ID for next-gen projects. | [optional] [readonly]
**versions** | [**\OpenAPI\Client\Model\Version[]**](Version.md) | The versions defined in the project. For more information, see [Create version](#api-rest-api-2-version-post). | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
