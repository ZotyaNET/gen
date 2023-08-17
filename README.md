# OpenAPIClient-php

Jira Cloud platform REST API documentation


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AnnouncementBannerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getBanner();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnnouncementBannerApi->getBanner: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://your-domain.atlassian.net*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AnnouncementBannerApi* | [**getBanner**](docs/Api/AnnouncementBannerApi.md#getbanner) | **GET** /rest/api/2/announcementBanner | Get announcement banner configuration
*AnnouncementBannerApi* | [**setBanner**](docs/Api/AnnouncementBannerApi.md#setbanner) | **PUT** /rest/api/2/announcementBanner | Update announcement banner configuration
*AppMigrationApi* | [**appIssueFieldValueUpdateResourceUpdateIssueFieldsPut**](docs/Api/AppMigrationApi.md#appissuefieldvalueupdateresourceupdateissuefieldsput) | **PUT** /rest/atlassian-connect/1/migration/field | Bulk update custom field value
*AppMigrationApi* | [**migrationResourceUpdateEntityPropertiesValuePut**](docs/Api/AppMigrationApi.md#migrationresourceupdateentitypropertiesvalueput) | **PUT** /rest/atlassian-connect/1/migration/properties/{entityType} | Bulk update entity properties
*AppMigrationApi* | [**migrationResourceWorkflowRuleSearchPost**](docs/Api/AppMigrationApi.md#migrationresourceworkflowrulesearchpost) | **POST** /rest/atlassian-connect/1/migration/workflow/rule/search | Get workflow transition rule configurations
*AppPropertiesApi* | [**addonPropertiesResourceDeleteAddonPropertyDelete**](docs/Api/AppPropertiesApi.md#addonpropertiesresourcedeleteaddonpropertydelete) | **DELETE** /rest/atlassian-connect/1/addons/{addonKey}/properties/{propertyKey} | Delete app property
*AppPropertiesApi* | [**addonPropertiesResourceDeleteAppPropertyDelete**](docs/Api/AppPropertiesApi.md#addonpropertiesresourcedeleteapppropertydelete) | **DELETE** /rest/forge/1/app/properties/{propertyKey} | Delete app property (Forge)
*AppPropertiesApi* | [**addonPropertiesResourceGetAddonPropertiesGet**](docs/Api/AppPropertiesApi.md#addonpropertiesresourcegetaddonpropertiesget) | **GET** /rest/atlassian-connect/1/addons/{addonKey}/properties | Get app properties
*AppPropertiesApi* | [**addonPropertiesResourceGetAddonPropertyGet**](docs/Api/AppPropertiesApi.md#addonpropertiesresourcegetaddonpropertyget) | **GET** /rest/atlassian-connect/1/addons/{addonKey}/properties/{propertyKey} | Get app property
*AppPropertiesApi* | [**addonPropertiesResourcePutAddonPropertyPut**](docs/Api/AppPropertiesApi.md#addonpropertiesresourceputaddonpropertyput) | **PUT** /rest/atlassian-connect/1/addons/{addonKey}/properties/{propertyKey} | Set app property
*AppPropertiesApi* | [**addonPropertiesResourcePutAppPropertyPut**](docs/Api/AppPropertiesApi.md#addonpropertiesresourceputapppropertyput) | **PUT** /rest/forge/1/app/properties/{propertyKey} | Set app property (Forge)
*ApplicationRolesApi* | [**getAllApplicationRoles**](docs/Api/ApplicationRolesApi.md#getallapplicationroles) | **GET** /rest/api/2/applicationrole | Get all application roles
*ApplicationRolesApi* | [**getApplicationRole**](docs/Api/ApplicationRolesApi.md#getapplicationrole) | **GET** /rest/api/2/applicationrole/{key} | Get application role
*AuditRecordsApi* | [**getAuditRecords**](docs/Api/AuditRecordsApi.md#getauditrecords) | **GET** /rest/api/2/auditing/record | Get audit records
*AvatarsApi* | [**deleteAvatar**](docs/Api/AvatarsApi.md#deleteavatar) | **DELETE** /rest/api/2/universal_avatar/type/{type}/owner/{owningObjectId}/avatar/{id} | Delete avatar
*AvatarsApi* | [**getAllSystemAvatars**](docs/Api/AvatarsApi.md#getallsystemavatars) | **GET** /rest/api/2/avatar/{type}/system | Get system avatars by type
*AvatarsApi* | [**getAvatarImageByID**](docs/Api/AvatarsApi.md#getavatarimagebyid) | **GET** /rest/api/2/universal_avatar/view/type/{type}/avatar/{id} | Get avatar image by ID
*AvatarsApi* | [**getAvatarImageByOwner**](docs/Api/AvatarsApi.md#getavatarimagebyowner) | **GET** /rest/api/2/universal_avatar/view/type/{type}/owner/{entityId} | Get avatar image by owner
*AvatarsApi* | [**getAvatarImageByType**](docs/Api/AvatarsApi.md#getavatarimagebytype) | **GET** /rest/api/2/universal_avatar/view/type/{type} | Get avatar image by type
*AvatarsApi* | [**getAvatars**](docs/Api/AvatarsApi.md#getavatars) | **GET** /rest/api/2/universal_avatar/type/{type}/owner/{entityId} | Get avatars
*AvatarsApi* | [**storeAvatar**](docs/Api/AvatarsApi.md#storeavatar) | **POST** /rest/api/2/universal_avatar/type/{type}/owner/{entityId} | Load avatar
*DashboardsApi* | [**addGadget**](docs/Api/DashboardsApi.md#addgadget) | **POST** /rest/api/2/dashboard/{dashboardId}/gadget | Add gadget to dashboard
*DashboardsApi* | [**copyDashboard**](docs/Api/DashboardsApi.md#copydashboard) | **POST** /rest/api/2/dashboard/{id}/copy | Copy dashboard
*DashboardsApi* | [**createDashboard**](docs/Api/DashboardsApi.md#createdashboard) | **POST** /rest/api/2/dashboard | Create dashboard
*DashboardsApi* | [**deleteDashboard**](docs/Api/DashboardsApi.md#deletedashboard) | **DELETE** /rest/api/2/dashboard/{id} | Delete dashboard
*DashboardsApi* | [**deleteDashboardItemProperty**](docs/Api/DashboardsApi.md#deletedashboarditemproperty) | **DELETE** /rest/api/2/dashboard/{dashboardId}/items/{itemId}/properties/{propertyKey} | Delete dashboard item property
*DashboardsApi* | [**getAllAvailableDashboardGadgets**](docs/Api/DashboardsApi.md#getallavailabledashboardgadgets) | **GET** /rest/api/2/dashboard/gadgets | Get available gadgets
*DashboardsApi* | [**getAllDashboards**](docs/Api/DashboardsApi.md#getalldashboards) | **GET** /rest/api/2/dashboard | Get all dashboards
*DashboardsApi* | [**getAllGadgets**](docs/Api/DashboardsApi.md#getallgadgets) | **GET** /rest/api/2/dashboard/{dashboardId}/gadget | Get gadgets
*DashboardsApi* | [**getDashboard**](docs/Api/DashboardsApi.md#getdashboard) | **GET** /rest/api/2/dashboard/{id} | Get dashboard
*DashboardsApi* | [**getDashboardItemProperty**](docs/Api/DashboardsApi.md#getdashboarditemproperty) | **GET** /rest/api/2/dashboard/{dashboardId}/items/{itemId}/properties/{propertyKey} | Get dashboard item property
*DashboardsApi* | [**getDashboardItemPropertyKeys**](docs/Api/DashboardsApi.md#getdashboarditempropertykeys) | **GET** /rest/api/2/dashboard/{dashboardId}/items/{itemId}/properties | Get dashboard item property keys
*DashboardsApi* | [**getDashboardsPaginated**](docs/Api/DashboardsApi.md#getdashboardspaginated) | **GET** /rest/api/2/dashboard/search | Search for dashboards
*DashboardsApi* | [**removeGadget**](docs/Api/DashboardsApi.md#removegadget) | **DELETE** /rest/api/2/dashboard/{dashboardId}/gadget/{gadgetId} | Remove gadget from dashboard
*DashboardsApi* | [**setDashboardItemProperty**](docs/Api/DashboardsApi.md#setdashboarditemproperty) | **PUT** /rest/api/2/dashboard/{dashboardId}/items/{itemId}/properties/{propertyKey} | Set dashboard item property
*DashboardsApi* | [**updateDashboard**](docs/Api/DashboardsApi.md#updatedashboard) | **PUT** /rest/api/2/dashboard/{id} | Update dashboard
*DashboardsApi* | [**updateGadget**](docs/Api/DashboardsApi.md#updategadget) | **PUT** /rest/api/2/dashboard/{dashboardId}/gadget/{gadgetId} | Update gadget on dashboard
*DynamicModulesApi* | [**dynamicModulesResourceGetModulesGet**](docs/Api/DynamicModulesApi.md#dynamicmodulesresourcegetmodulesget) | **GET** /rest/atlassian-connect/1/app/module/dynamic | Get modules
*DynamicModulesApi* | [**dynamicModulesResourceRegisterModulesPost**](docs/Api/DynamicModulesApi.md#dynamicmodulesresourceregistermodulespost) | **POST** /rest/atlassian-connect/1/app/module/dynamic | Register modules
*DynamicModulesApi* | [**dynamicModulesResourceRemoveModulesDelete**](docs/Api/DynamicModulesApi.md#dynamicmodulesresourceremovemodulesdelete) | **DELETE** /rest/atlassian-connect/1/app/module/dynamic | Remove modules
*FilterSharingApi* | [**addSharePermission**](docs/Api/FilterSharingApi.md#addsharepermission) | **POST** /rest/api/2/filter/{id}/permission | Add share permission
*FilterSharingApi* | [**deleteSharePermission**](docs/Api/FilterSharingApi.md#deletesharepermission) | **DELETE** /rest/api/2/filter/{id}/permission/{permissionId} | Delete share permission
*FilterSharingApi* | [**getDefaultShareScope**](docs/Api/FilterSharingApi.md#getdefaultsharescope) | **GET** /rest/api/2/filter/defaultShareScope | Get default share scope
*FilterSharingApi* | [**getSharePermission**](docs/Api/FilterSharingApi.md#getsharepermission) | **GET** /rest/api/2/filter/{id}/permission/{permissionId} | Get share permission
*FilterSharingApi* | [**getSharePermissions**](docs/Api/FilterSharingApi.md#getsharepermissions) | **GET** /rest/api/2/filter/{id}/permission | Get share permissions
*FilterSharingApi* | [**setDefaultShareScope**](docs/Api/FilterSharingApi.md#setdefaultsharescope) | **PUT** /rest/api/2/filter/defaultShareScope | Set default share scope
*FiltersApi* | [**changeFilterOwner**](docs/Api/FiltersApi.md#changefilterowner) | **PUT** /rest/api/2/filter/{id}/owner | Change filter owner
*FiltersApi* | [**createFilter**](docs/Api/FiltersApi.md#createfilter) | **POST** /rest/api/2/filter | Create filter
*FiltersApi* | [**deleteFavouriteForFilter**](docs/Api/FiltersApi.md#deletefavouriteforfilter) | **DELETE** /rest/api/2/filter/{id}/favourite | Remove filter as favorite
*FiltersApi* | [**deleteFilter**](docs/Api/FiltersApi.md#deletefilter) | **DELETE** /rest/api/2/filter/{id} | Delete filter
*FiltersApi* | [**getColumns**](docs/Api/FiltersApi.md#getcolumns) | **GET** /rest/api/2/filter/{id}/columns | Get columns
*FiltersApi* | [**getFavouriteFilters**](docs/Api/FiltersApi.md#getfavouritefilters) | **GET** /rest/api/2/filter/favourite | Get favorite filters
*FiltersApi* | [**getFilter**](docs/Api/FiltersApi.md#getfilter) | **GET** /rest/api/2/filter/{id} | Get filter
*FiltersApi* | [**getFiltersPaginated**](docs/Api/FiltersApi.md#getfilterspaginated) | **GET** /rest/api/2/filter/search | Search for filters
*FiltersApi* | [**getMyFilters**](docs/Api/FiltersApi.md#getmyfilters) | **GET** /rest/api/2/filter/my | Get my filters
*FiltersApi* | [**resetColumns**](docs/Api/FiltersApi.md#resetcolumns) | **DELETE** /rest/api/2/filter/{id}/columns | Reset columns
*FiltersApi* | [**setColumns**](docs/Api/FiltersApi.md#setcolumns) | **PUT** /rest/api/2/filter/{id}/columns | Set columns
*FiltersApi* | [**setFavouriteForFilter**](docs/Api/FiltersApi.md#setfavouriteforfilter) | **PUT** /rest/api/2/filter/{id}/favourite | Add filter as favorite
*FiltersApi* | [**updateFilter**](docs/Api/FiltersApi.md#updatefilter) | **PUT** /rest/api/2/filter/{id} | Update filter
*GroupAndUserPickerApi* | [**findUsersAndGroups**](docs/Api/GroupAndUserPickerApi.md#findusersandgroups) | **GET** /rest/api/2/groupuserpicker | Find users and groups
*GroupsApi* | [**addUserToGroup**](docs/Api/GroupsApi.md#addusertogroup) | **POST** /rest/api/2/group/user | Add user to group
*GroupsApi* | [**bulkGetGroups**](docs/Api/GroupsApi.md#bulkgetgroups) | **GET** /rest/api/2/group/bulk | Bulk get groups
*GroupsApi* | [**createGroup**](docs/Api/GroupsApi.md#creategroup) | **POST** /rest/api/2/group | Create group
*GroupsApi* | [**findGroups**](docs/Api/GroupsApi.md#findgroups) | **GET** /rest/api/2/groups/picker | Find groups
*GroupsApi* | [**getGroup**](docs/Api/GroupsApi.md#getgroup) | **GET** /rest/api/2/group | Get group
*GroupsApi* | [**getUsersFromGroup**](docs/Api/GroupsApi.md#getusersfromgroup) | **GET** /rest/api/2/group/member | Get users from group
*GroupsApi* | [**removeGroup**](docs/Api/GroupsApi.md#removegroup) | **DELETE** /rest/api/2/group | Remove group
*GroupsApi* | [**removeUserFromGroup**](docs/Api/GroupsApi.md#removeuserfromgroup) | **DELETE** /rest/api/2/group/user | Remove user from group
*IssueAttachmentsApi* | [**addAttachment**](docs/Api/IssueAttachmentsApi.md#addattachment) | **POST** /rest/api/2/issue/{issueIdOrKey}/attachments | Add attachment
*IssueAttachmentsApi* | [**expandAttachmentForHumans**](docs/Api/IssueAttachmentsApi.md#expandattachmentforhumans) | **GET** /rest/api/2/attachment/{id}/expand/human | Get all metadata for an expanded attachment
*IssueAttachmentsApi* | [**expandAttachmentForMachines**](docs/Api/IssueAttachmentsApi.md#expandattachmentformachines) | **GET** /rest/api/2/attachment/{id}/expand/raw | Get contents metadata for an expanded attachment
*IssueAttachmentsApi* | [**getAttachment**](docs/Api/IssueAttachmentsApi.md#getattachment) | **GET** /rest/api/2/attachment/{id} | Get attachment metadata
*IssueAttachmentsApi* | [**getAttachmentContent**](docs/Api/IssueAttachmentsApi.md#getattachmentcontent) | **GET** /rest/api/2/attachment/content/{id} | Get attachment content
*IssueAttachmentsApi* | [**getAttachmentMeta**](docs/Api/IssueAttachmentsApi.md#getattachmentmeta) | **GET** /rest/api/2/attachment/meta | Get Jira attachment settings
*IssueAttachmentsApi* | [**getAttachmentThumbnail**](docs/Api/IssueAttachmentsApi.md#getattachmentthumbnail) | **GET** /rest/api/2/attachment/thumbnail/{id} | Get attachment thumbnail
*IssueAttachmentsApi* | [**removeAttachment**](docs/Api/IssueAttachmentsApi.md#removeattachment) | **DELETE** /rest/api/2/attachment/{id} | Delete attachment
*IssueCommentPropertiesApi* | [**deleteCommentProperty**](docs/Api/IssueCommentPropertiesApi.md#deletecommentproperty) | **DELETE** /rest/api/2/comment/{commentId}/properties/{propertyKey} | Delete comment property
*IssueCommentPropertiesApi* | [**getCommentProperty**](docs/Api/IssueCommentPropertiesApi.md#getcommentproperty) | **GET** /rest/api/2/comment/{commentId}/properties/{propertyKey} | Get comment property
*IssueCommentPropertiesApi* | [**getCommentPropertyKeys**](docs/Api/IssueCommentPropertiesApi.md#getcommentpropertykeys) | **GET** /rest/api/2/comment/{commentId}/properties | Get comment property keys
*IssueCommentPropertiesApi* | [**setCommentProperty**](docs/Api/IssueCommentPropertiesApi.md#setcommentproperty) | **PUT** /rest/api/2/comment/{commentId}/properties/{propertyKey} | Set comment property
*IssueCommentsApi* | [**addComment**](docs/Api/IssueCommentsApi.md#addcomment) | **POST** /rest/api/2/issue/{issueIdOrKey}/comment | Add comment
*IssueCommentsApi* | [**deleteComment**](docs/Api/IssueCommentsApi.md#deletecomment) | **DELETE** /rest/api/2/issue/{issueIdOrKey}/comment/{id} | Delete comment
*IssueCommentsApi* | [**getComment**](docs/Api/IssueCommentsApi.md#getcomment) | **GET** /rest/api/2/issue/{issueIdOrKey}/comment/{id} | Get comment
*IssueCommentsApi* | [**getComments**](docs/Api/IssueCommentsApi.md#getcomments) | **GET** /rest/api/2/issue/{issueIdOrKey}/comment | Get comments
*IssueCommentsApi* | [**getCommentsByIds**](docs/Api/IssueCommentsApi.md#getcommentsbyids) | **POST** /rest/api/2/comment/list | Get comments by IDs
*IssueCommentsApi* | [**updateComment**](docs/Api/IssueCommentsApi.md#updatecomment) | **PUT** /rest/api/2/issue/{issueIdOrKey}/comment/{id} | Update comment
*IssueCustomFieldConfigurationAppsApi* | [**getCustomFieldConfiguration**](docs/Api/IssueCustomFieldConfigurationAppsApi.md#getcustomfieldconfiguration) | **GET** /rest/api/2/app/field/{fieldIdOrKey}/context/configuration | Get custom field configurations
*IssueCustomFieldConfigurationAppsApi* | [**updateCustomFieldConfiguration**](docs/Api/IssueCustomFieldConfigurationAppsApi.md#updatecustomfieldconfiguration) | **PUT** /rest/api/2/app/field/{fieldIdOrKey}/context/configuration | Update custom field configurations
*IssueCustomFieldContextsApi* | [**addIssueTypesToContext**](docs/Api/IssueCustomFieldContextsApi.md#addissuetypestocontext) | **PUT** /rest/api/2/field/{fieldId}/context/{contextId}/issuetype | Add issue types to context
*IssueCustomFieldContextsApi* | [**assignProjectsToCustomFieldContext**](docs/Api/IssueCustomFieldContextsApi.md#assignprojectstocustomfieldcontext) | **PUT** /rest/api/2/field/{fieldId}/context/{contextId}/project | Assign custom field context to projects
*IssueCustomFieldContextsApi* | [**createCustomFieldContext**](docs/Api/IssueCustomFieldContextsApi.md#createcustomfieldcontext) | **POST** /rest/api/2/field/{fieldId}/context | Create custom field context
*IssueCustomFieldContextsApi* | [**deleteCustomFieldContext**](docs/Api/IssueCustomFieldContextsApi.md#deletecustomfieldcontext) | **DELETE** /rest/api/2/field/{fieldId}/context/{contextId} | Delete custom field context
*IssueCustomFieldContextsApi* | [**getContextsForField**](docs/Api/IssueCustomFieldContextsApi.md#getcontextsforfield) | **GET** /rest/api/2/field/{fieldId}/context | Get custom field contexts
*IssueCustomFieldContextsApi* | [**getCustomFieldContextsForProjectsAndIssueTypes**](docs/Api/IssueCustomFieldContextsApi.md#getcustomfieldcontextsforprojectsandissuetypes) | **POST** /rest/api/2/field/{fieldId}/context/mapping | Get custom field contexts for projects and issue types
*IssueCustomFieldContextsApi* | [**getDefaultValues**](docs/Api/IssueCustomFieldContextsApi.md#getdefaultvalues) | **GET** /rest/api/2/field/{fieldId}/context/defaultValue | Get custom field contexts default values
*IssueCustomFieldContextsApi* | [**getIssueTypeMappingsForContexts**](docs/Api/IssueCustomFieldContextsApi.md#getissuetypemappingsforcontexts) | **GET** /rest/api/2/field/{fieldId}/context/issuetypemapping | Get issue types for custom field context
*IssueCustomFieldContextsApi* | [**getProjectContextMapping**](docs/Api/IssueCustomFieldContextsApi.md#getprojectcontextmapping) | **GET** /rest/api/2/field/{fieldId}/context/projectmapping | Get project mappings for custom field context
*IssueCustomFieldContextsApi* | [**removeCustomFieldContextFromProjects**](docs/Api/IssueCustomFieldContextsApi.md#removecustomfieldcontextfromprojects) | **POST** /rest/api/2/field/{fieldId}/context/{contextId}/project/remove | Remove custom field context from projects
*IssueCustomFieldContextsApi* | [**removeIssueTypesFromContext**](docs/Api/IssueCustomFieldContextsApi.md#removeissuetypesfromcontext) | **POST** /rest/api/2/field/{fieldId}/context/{contextId}/issuetype/remove | Remove issue types from context
*IssueCustomFieldContextsApi* | [**setDefaultValues**](docs/Api/IssueCustomFieldContextsApi.md#setdefaultvalues) | **PUT** /rest/api/2/field/{fieldId}/context/defaultValue | Set custom field contexts default values
*IssueCustomFieldContextsApi* | [**updateCustomFieldContext**](docs/Api/IssueCustomFieldContextsApi.md#updatecustomfieldcontext) | **PUT** /rest/api/2/field/{fieldId}/context/{contextId} | Update custom field context
*IssueCustomFieldOptionsApi* | [**createCustomFieldOption**](docs/Api/IssueCustomFieldOptionsApi.md#createcustomfieldoption) | **POST** /rest/api/2/field/{fieldId}/context/{contextId}/option | Create custom field options (context)
*IssueCustomFieldOptionsApi* | [**deleteCustomFieldOption**](docs/Api/IssueCustomFieldOptionsApi.md#deletecustomfieldoption) | **DELETE** /rest/api/2/field/{fieldId}/context/{contextId}/option/{optionId} | Delete custom field options (context)
*IssueCustomFieldOptionsApi* | [**getCustomFieldOption**](docs/Api/IssueCustomFieldOptionsApi.md#getcustomfieldoption) | **GET** /rest/api/2/customFieldOption/{id} | Get custom field option
*IssueCustomFieldOptionsApi* | [**getOptionsForContext**](docs/Api/IssueCustomFieldOptionsApi.md#getoptionsforcontext) | **GET** /rest/api/2/field/{fieldId}/context/{contextId}/option | Get custom field options (context)
*IssueCustomFieldOptionsApi* | [**reorderCustomFieldOptions**](docs/Api/IssueCustomFieldOptionsApi.md#reordercustomfieldoptions) | **PUT** /rest/api/2/field/{fieldId}/context/{contextId}/option/move | Reorder custom field options (context)
*IssueCustomFieldOptionsApi* | [**updateCustomFieldOption**](docs/Api/IssueCustomFieldOptionsApi.md#updatecustomfieldoption) | **PUT** /rest/api/2/field/{fieldId}/context/{contextId}/option | Update custom field options (context)
*IssueCustomFieldOptionsAppsApi* | [**createIssueFieldOption**](docs/Api/IssueCustomFieldOptionsAppsApi.md#createissuefieldoption) | **POST** /rest/api/2/field/{fieldKey}/option | Create issue field option
*IssueCustomFieldOptionsAppsApi* | [**deleteIssueFieldOption**](docs/Api/IssueCustomFieldOptionsAppsApi.md#deleteissuefieldoption) | **DELETE** /rest/api/2/field/{fieldKey}/option/{optionId} | Delete issue field option
*IssueCustomFieldOptionsAppsApi* | [**getAllIssueFieldOptions**](docs/Api/IssueCustomFieldOptionsAppsApi.md#getallissuefieldoptions) | **GET** /rest/api/2/field/{fieldKey}/option | Get all issue field options
*IssueCustomFieldOptionsAppsApi* | [**getIssueFieldOption**](docs/Api/IssueCustomFieldOptionsAppsApi.md#getissuefieldoption) | **GET** /rest/api/2/field/{fieldKey}/option/{optionId} | Get issue field option
*IssueCustomFieldOptionsAppsApi* | [**getSelectableIssueFieldOptions**](docs/Api/IssueCustomFieldOptionsAppsApi.md#getselectableissuefieldoptions) | **GET** /rest/api/2/field/{fieldKey}/option/suggestions/edit | Get selectable issue field options
*IssueCustomFieldOptionsAppsApi* | [**getVisibleIssueFieldOptions**](docs/Api/IssueCustomFieldOptionsAppsApi.md#getvisibleissuefieldoptions) | **GET** /rest/api/2/field/{fieldKey}/option/suggestions/search | Get visible issue field options
*IssueCustomFieldOptionsAppsApi* | [**replaceIssueFieldOption**](docs/Api/IssueCustomFieldOptionsAppsApi.md#replaceissuefieldoption) | **DELETE** /rest/api/2/field/{fieldKey}/option/{optionId}/issue | Replace issue field option
*IssueCustomFieldOptionsAppsApi* | [**updateIssueFieldOption**](docs/Api/IssueCustomFieldOptionsAppsApi.md#updateissuefieldoption) | **PUT** /rest/api/2/field/{fieldKey}/option/{optionId} | Update issue field option
*IssueCustomFieldValuesAppsApi* | [**updateCustomFieldValue**](docs/Api/IssueCustomFieldValuesAppsApi.md#updatecustomfieldvalue) | **PUT** /rest/api/2/app/field/{fieldIdOrKey}/value | Update custom field value
*IssueCustomFieldValuesAppsApi* | [**updateMultipleCustomFieldValues**](docs/Api/IssueCustomFieldValuesAppsApi.md#updatemultiplecustomfieldvalues) | **POST** /rest/api/2/app/field/value | Update custom fields
*IssueFieldConfigurationsApi* | [**assignFieldConfigurationSchemeToProject**](docs/Api/IssueFieldConfigurationsApi.md#assignfieldconfigurationschemetoproject) | **PUT** /rest/api/2/fieldconfigurationscheme/project | Assign field configuration scheme to project
*IssueFieldConfigurationsApi* | [**createFieldConfiguration**](docs/Api/IssueFieldConfigurationsApi.md#createfieldconfiguration) | **POST** /rest/api/2/fieldconfiguration | Create field configuration
*IssueFieldConfigurationsApi* | [**createFieldConfigurationScheme**](docs/Api/IssueFieldConfigurationsApi.md#createfieldconfigurationscheme) | **POST** /rest/api/2/fieldconfigurationscheme | Create field configuration scheme
*IssueFieldConfigurationsApi* | [**deleteFieldConfiguration**](docs/Api/IssueFieldConfigurationsApi.md#deletefieldconfiguration) | **DELETE** /rest/api/2/fieldconfiguration/{id} | Delete field configuration
*IssueFieldConfigurationsApi* | [**deleteFieldConfigurationScheme**](docs/Api/IssueFieldConfigurationsApi.md#deletefieldconfigurationscheme) | **DELETE** /rest/api/2/fieldconfigurationscheme/{id} | Delete field configuration scheme
*IssueFieldConfigurationsApi* | [**getAllFieldConfigurationSchemes**](docs/Api/IssueFieldConfigurationsApi.md#getallfieldconfigurationschemes) | **GET** /rest/api/2/fieldconfigurationscheme | Get all field configuration schemes
*IssueFieldConfigurationsApi* | [**getAllFieldConfigurations**](docs/Api/IssueFieldConfigurationsApi.md#getallfieldconfigurations) | **GET** /rest/api/2/fieldconfiguration | Get all field configurations
*IssueFieldConfigurationsApi* | [**getFieldConfigurationItems**](docs/Api/IssueFieldConfigurationsApi.md#getfieldconfigurationitems) | **GET** /rest/api/2/fieldconfiguration/{id}/fields | Get field configuration items
*IssueFieldConfigurationsApi* | [**getFieldConfigurationSchemeMappings**](docs/Api/IssueFieldConfigurationsApi.md#getfieldconfigurationschememappings) | **GET** /rest/api/2/fieldconfigurationscheme/mapping | Get field configuration issue type items
*IssueFieldConfigurationsApi* | [**getFieldConfigurationSchemeProjectMapping**](docs/Api/IssueFieldConfigurationsApi.md#getfieldconfigurationschemeprojectmapping) | **GET** /rest/api/2/fieldconfigurationscheme/project | Get field configuration schemes for projects
*IssueFieldConfigurationsApi* | [**removeIssueTypesFromGlobalFieldConfigurationScheme**](docs/Api/IssueFieldConfigurationsApi.md#removeissuetypesfromglobalfieldconfigurationscheme) | **POST** /rest/api/2/fieldconfigurationscheme/{id}/mapping/delete | Remove issue types from field configuration scheme
*IssueFieldConfigurationsApi* | [**setFieldConfigurationSchemeMapping**](docs/Api/IssueFieldConfigurationsApi.md#setfieldconfigurationschememapping) | **PUT** /rest/api/2/fieldconfigurationscheme/{id}/mapping | Assign issue types to field configurations
*IssueFieldConfigurationsApi* | [**updateFieldConfiguration**](docs/Api/IssueFieldConfigurationsApi.md#updatefieldconfiguration) | **PUT** /rest/api/2/fieldconfiguration/{id} | Update field configuration
*IssueFieldConfigurationsApi* | [**updateFieldConfigurationItems**](docs/Api/IssueFieldConfigurationsApi.md#updatefieldconfigurationitems) | **PUT** /rest/api/2/fieldconfiguration/{id}/fields | Update field configuration items
*IssueFieldConfigurationsApi* | [**updateFieldConfigurationScheme**](docs/Api/IssueFieldConfigurationsApi.md#updatefieldconfigurationscheme) | **PUT** /rest/api/2/fieldconfigurationscheme/{id} | Update field configuration scheme
*IssueFieldsApi* | [**createCustomField**](docs/Api/IssueFieldsApi.md#createcustomfield) | **POST** /rest/api/2/field | Create custom field
*IssueFieldsApi* | [**deleteCustomField**](docs/Api/IssueFieldsApi.md#deletecustomfield) | **DELETE** /rest/api/2/field/{id} | Delete custom field
*IssueFieldsApi* | [**getContextsForFieldDeprecated**](docs/Api/IssueFieldsApi.md#getcontextsforfielddeprecated) | **GET** /rest/api/2/field/{fieldId}/contexts | Get contexts for a field
*IssueFieldsApi* | [**getFields**](docs/Api/IssueFieldsApi.md#getfields) | **GET** /rest/api/2/field | Get fields
*IssueFieldsApi* | [**getFieldsPaginated**](docs/Api/IssueFieldsApi.md#getfieldspaginated) | **GET** /rest/api/2/field/search | Get fields paginated
*IssueFieldsApi* | [**getTrashedFieldsPaginated**](docs/Api/IssueFieldsApi.md#gettrashedfieldspaginated) | **GET** /rest/api/2/field/search/trashed | Get fields in trash paginated
*IssueFieldsApi* | [**restoreCustomField**](docs/Api/IssueFieldsApi.md#restorecustomfield) | **POST** /rest/api/2/field/{id}/restore | Restore custom field from trash
*IssueFieldsApi* | [**trashCustomField**](docs/Api/IssueFieldsApi.md#trashcustomfield) | **POST** /rest/api/2/field/{id}/trash | Move custom field to trash
*IssueFieldsApi* | [**updateCustomField**](docs/Api/IssueFieldsApi.md#updatecustomfield) | **PUT** /rest/api/2/field/{fieldId} | Update custom field
*IssueLinkTypesApi* | [**createIssueLinkType**](docs/Api/IssueLinkTypesApi.md#createissuelinktype) | **POST** /rest/api/2/issueLinkType | Create issue link type
*IssueLinkTypesApi* | [**deleteIssueLinkType**](docs/Api/IssueLinkTypesApi.md#deleteissuelinktype) | **DELETE** /rest/api/2/issueLinkType/{issueLinkTypeId} | Delete issue link type
*IssueLinkTypesApi* | [**getIssueLinkType**](docs/Api/IssueLinkTypesApi.md#getissuelinktype) | **GET** /rest/api/2/issueLinkType/{issueLinkTypeId} | Get issue link type
*IssueLinkTypesApi* | [**getIssueLinkTypes**](docs/Api/IssueLinkTypesApi.md#getissuelinktypes) | **GET** /rest/api/2/issueLinkType | Get issue link types
*IssueLinkTypesApi* | [**updateIssueLinkType**](docs/Api/IssueLinkTypesApi.md#updateissuelinktype) | **PUT** /rest/api/2/issueLinkType/{issueLinkTypeId} | Update issue link type
*IssueLinksApi* | [**deleteIssueLink**](docs/Api/IssueLinksApi.md#deleteissuelink) | **DELETE** /rest/api/2/issueLink/{linkId} | Delete issue link
*IssueLinksApi* | [**getIssueLink**](docs/Api/IssueLinksApi.md#getissuelink) | **GET** /rest/api/2/issueLink/{linkId} | Get issue link
*IssueLinksApi* | [**linkIssues**](docs/Api/IssueLinksApi.md#linkissues) | **POST** /rest/api/2/issueLink | Create issue link
*IssueNavigatorSettingsApi* | [**getIssueNavigatorDefaultColumns**](docs/Api/IssueNavigatorSettingsApi.md#getissuenavigatordefaultcolumns) | **GET** /rest/api/2/settings/columns | Get issue navigator default columns
*IssueNavigatorSettingsApi* | [**setIssueNavigatorDefaultColumns**](docs/Api/IssueNavigatorSettingsApi.md#setissuenavigatordefaultcolumns) | **PUT** /rest/api/2/settings/columns | Set issue navigator default columns
*IssueNotificationSchemesApi* | [**addNotifications**](docs/Api/IssueNotificationSchemesApi.md#addnotifications) | **PUT** /rest/api/2/notificationscheme/{id}/notification | Add notifications to notification scheme
*IssueNotificationSchemesApi* | [**createNotificationScheme**](docs/Api/IssueNotificationSchemesApi.md#createnotificationscheme) | **POST** /rest/api/2/notificationscheme | Create notification scheme
*IssueNotificationSchemesApi* | [**deleteNotificationScheme**](docs/Api/IssueNotificationSchemesApi.md#deletenotificationscheme) | **DELETE** /rest/api/2/notificationscheme/{notificationSchemeId} | Delete notification scheme
*IssueNotificationSchemesApi* | [**getNotificationScheme**](docs/Api/IssueNotificationSchemesApi.md#getnotificationscheme) | **GET** /rest/api/2/notificationscheme/{id} | Get notification scheme
*IssueNotificationSchemesApi* | [**getNotificationSchemeToProjectMappings**](docs/Api/IssueNotificationSchemesApi.md#getnotificationschemetoprojectmappings) | **GET** /rest/api/2/notificationscheme/project | Get projects using notification schemes paginated
*IssueNotificationSchemesApi* | [**getNotificationSchemes**](docs/Api/IssueNotificationSchemesApi.md#getnotificationschemes) | **GET** /rest/api/2/notificationscheme | Get notification schemes paginated
*IssueNotificationSchemesApi* | [**removeNotificationFromNotificationScheme**](docs/Api/IssueNotificationSchemesApi.md#removenotificationfromnotificationscheme) | **DELETE** /rest/api/2/notificationscheme/{notificationSchemeId}/notification/{notificationId} | Remove notification from notification scheme
*IssueNotificationSchemesApi* | [**updateNotificationScheme**](docs/Api/IssueNotificationSchemesApi.md#updatenotificationscheme) | **PUT** /rest/api/2/notificationscheme/{id} | Update notification scheme
*IssuePrioritiesApi* | [**createPriority**](docs/Api/IssuePrioritiesApi.md#createpriority) | **POST** /rest/api/2/priority | Create priority
*IssuePrioritiesApi* | [**deletePriority**](docs/Api/IssuePrioritiesApi.md#deletepriority) | **DELETE** /rest/api/2/priority/{id} | Delete priority
*IssuePrioritiesApi* | [**getPriorities**](docs/Api/IssuePrioritiesApi.md#getpriorities) | **GET** /rest/api/2/priority | Get priorities
*IssuePrioritiesApi* | [**getPriority**](docs/Api/IssuePrioritiesApi.md#getpriority) | **GET** /rest/api/2/priority/{id} | Get priority
*IssuePrioritiesApi* | [**movePriorities**](docs/Api/IssuePrioritiesApi.md#movepriorities) | **PUT** /rest/api/2/priority/move | Move priorities
*IssuePrioritiesApi* | [**searchPriorities**](docs/Api/IssuePrioritiesApi.md#searchpriorities) | **GET** /rest/api/2/priority/search | Search priorities
*IssuePrioritiesApi* | [**setDefaultPriority**](docs/Api/IssuePrioritiesApi.md#setdefaultpriority) | **PUT** /rest/api/2/priority/default | Set default priority
*IssuePrioritiesApi* | [**updatePriority**](docs/Api/IssuePrioritiesApi.md#updatepriority) | **PUT** /rest/api/2/priority/{id} | Update priority
*IssuePropertiesApi* | [**bulkDeleteIssueProperty**](docs/Api/IssuePropertiesApi.md#bulkdeleteissueproperty) | **DELETE** /rest/api/2/issue/properties/{propertyKey} | Bulk delete issue property
*IssuePropertiesApi* | [**bulkSetIssuePropertiesByIssue**](docs/Api/IssuePropertiesApi.md#bulksetissuepropertiesbyissue) | **POST** /rest/api/2/issue/properties/multi | Bulk set issue properties by issue
*IssuePropertiesApi* | [**bulkSetIssueProperty**](docs/Api/IssuePropertiesApi.md#bulksetissueproperty) | **PUT** /rest/api/2/issue/properties/{propertyKey} | Bulk set issue property
*IssuePropertiesApi* | [**bulkSetIssuesPropertiesList**](docs/Api/IssuePropertiesApi.md#bulksetissuespropertieslist) | **POST** /rest/api/2/issue/properties | Bulk set issues properties by list
*IssuePropertiesApi* | [**deleteIssueProperty**](docs/Api/IssuePropertiesApi.md#deleteissueproperty) | **DELETE** /rest/api/2/issue/{issueIdOrKey}/properties/{propertyKey} | Delete issue property
*IssuePropertiesApi* | [**getIssueProperty**](docs/Api/IssuePropertiesApi.md#getissueproperty) | **GET** /rest/api/2/issue/{issueIdOrKey}/properties/{propertyKey} | Get issue property
*IssuePropertiesApi* | [**getIssuePropertyKeys**](docs/Api/IssuePropertiesApi.md#getissuepropertykeys) | **GET** /rest/api/2/issue/{issueIdOrKey}/properties | Get issue property keys
*IssuePropertiesApi* | [**setIssueProperty**](docs/Api/IssuePropertiesApi.md#setissueproperty) | **PUT** /rest/api/2/issue/{issueIdOrKey}/properties/{propertyKey} | Set issue property
*IssueRemoteLinksApi* | [**createOrUpdateRemoteIssueLink**](docs/Api/IssueRemoteLinksApi.md#createorupdateremoteissuelink) | **POST** /rest/api/2/issue/{issueIdOrKey}/remotelink | Create or update remote issue link
*IssueRemoteLinksApi* | [**deleteRemoteIssueLinkByGlobalId**](docs/Api/IssueRemoteLinksApi.md#deleteremoteissuelinkbyglobalid) | **DELETE** /rest/api/2/issue/{issueIdOrKey}/remotelink | Delete remote issue link by global ID
*IssueRemoteLinksApi* | [**deleteRemoteIssueLinkById**](docs/Api/IssueRemoteLinksApi.md#deleteremoteissuelinkbyid) | **DELETE** /rest/api/2/issue/{issueIdOrKey}/remotelink/{linkId} | Delete remote issue link by ID
*IssueRemoteLinksApi* | [**getRemoteIssueLinkById**](docs/Api/IssueRemoteLinksApi.md#getremoteissuelinkbyid) | **GET** /rest/api/2/issue/{issueIdOrKey}/remotelink/{linkId} | Get remote issue link by ID
*IssueRemoteLinksApi* | [**getRemoteIssueLinks**](docs/Api/IssueRemoteLinksApi.md#getremoteissuelinks) | **GET** /rest/api/2/issue/{issueIdOrKey}/remotelink | Get remote issue links
*IssueRemoteLinksApi* | [**updateRemoteIssueLink**](docs/Api/IssueRemoteLinksApi.md#updateremoteissuelink) | **PUT** /rest/api/2/issue/{issueIdOrKey}/remotelink/{linkId} | Update remote issue link by ID
*IssueResolutionsApi* | [**createResolution**](docs/Api/IssueResolutionsApi.md#createresolution) | **POST** /rest/api/2/resolution | Create resolution
*IssueResolutionsApi* | [**deleteResolution**](docs/Api/IssueResolutionsApi.md#deleteresolution) | **DELETE** /rest/api/2/resolution/{id} | Delete resolution
*IssueResolutionsApi* | [**getResolution**](docs/Api/IssueResolutionsApi.md#getresolution) | **GET** /rest/api/2/resolution/{id} | Get resolution
*IssueResolutionsApi* | [**getResolutions**](docs/Api/IssueResolutionsApi.md#getresolutions) | **GET** /rest/api/2/resolution | Get resolutions
*IssueResolutionsApi* | [**moveResolutions**](docs/Api/IssueResolutionsApi.md#moveresolutions) | **PUT** /rest/api/2/resolution/move | Move resolutions
*IssueResolutionsApi* | [**searchResolutions**](docs/Api/IssueResolutionsApi.md#searchresolutions) | **GET** /rest/api/2/resolution/search | Search resolutions
*IssueResolutionsApi* | [**setDefaultResolution**](docs/Api/IssueResolutionsApi.md#setdefaultresolution) | **PUT** /rest/api/2/resolution/default | Set default resolution
*IssueResolutionsApi* | [**updateResolution**](docs/Api/IssueResolutionsApi.md#updateresolution) | **PUT** /rest/api/2/resolution/{id} | Update resolution
*IssueSearchApi* | [**getIssuePickerResource**](docs/Api/IssueSearchApi.md#getissuepickerresource) | **GET** /rest/api/2/issue/picker | Get issue picker suggestions
*IssueSearchApi* | [**matchIssues**](docs/Api/IssueSearchApi.md#matchissues) | **POST** /rest/api/2/jql/match | Check issues against JQL
*IssueSearchApi* | [**searchForIssuesUsingJql**](docs/Api/IssueSearchApi.md#searchforissuesusingjql) | **GET** /rest/api/2/search | Search for issues using JQL (GET)
*IssueSearchApi* | [**searchForIssuesUsingJqlPost**](docs/Api/IssueSearchApi.md#searchforissuesusingjqlpost) | **POST** /rest/api/2/search | Search for issues using JQL (POST)
*IssueSecurityLevelApi* | [**getIssueSecurityLevel**](docs/Api/IssueSecurityLevelApi.md#getissuesecuritylevel) | **GET** /rest/api/2/securitylevel/{id} | Get issue security level
*IssueSecurityLevelApi* | [**getIssueSecurityLevelMembers**](docs/Api/IssueSecurityLevelApi.md#getissuesecuritylevelmembers) | **GET** /rest/api/2/issuesecurityschemes/{issueSecuritySchemeId}/members | Get issue security level members
*IssueSecuritySchemesApi* | [**addSecurityLevel**](docs/Api/IssueSecuritySchemesApi.md#addsecuritylevel) | **PUT** /rest/api/2/issuesecurityschemes/{schemeId}/level | Add issue security levels
*IssueSecuritySchemesApi* | [**addSecurityLevelMembers**](docs/Api/IssueSecuritySchemesApi.md#addsecuritylevelmembers) | **PUT** /rest/api/2/issuesecurityschemes/{schemeId}/level/{levelId}/member | Add issue security level members
*IssueSecuritySchemesApi* | [**associateSchemesToProjects**](docs/Api/IssueSecuritySchemesApi.md#associateschemestoprojects) | **PUT** /rest/api/2/issuesecurityschemes/project | Associate security scheme to project
*IssueSecuritySchemesApi* | [**createIssueSecurityScheme**](docs/Api/IssueSecuritySchemesApi.md#createissuesecurityscheme) | **POST** /rest/api/2/issuesecurityschemes | Create issue security scheme
*IssueSecuritySchemesApi* | [**deleteSecurityScheme**](docs/Api/IssueSecuritySchemesApi.md#deletesecurityscheme) | **DELETE** /rest/api/2/issuesecurityschemes/{schemeId} | Delete issue security scheme
*IssueSecuritySchemesApi* | [**getIssueSecurityScheme**](docs/Api/IssueSecuritySchemesApi.md#getissuesecurityscheme) | **GET** /rest/api/2/issuesecurityschemes/{id} | Get issue security scheme
*IssueSecuritySchemesApi* | [**getIssueSecuritySchemes**](docs/Api/IssueSecuritySchemesApi.md#getissuesecurityschemes) | **GET** /rest/api/2/issuesecurityschemes | Get issue security schemes
*IssueSecuritySchemesApi* | [**getSecurityLevelMembers**](docs/Api/IssueSecuritySchemesApi.md#getsecuritylevelmembers) | **GET** /rest/api/2/issuesecurityschemes/level/member | Get issue security level members
*IssueSecuritySchemesApi* | [**getSecurityLevels**](docs/Api/IssueSecuritySchemesApi.md#getsecuritylevels) | **GET** /rest/api/2/issuesecurityschemes/level | Get issue security levels
*IssueSecuritySchemesApi* | [**removeLevel**](docs/Api/IssueSecuritySchemesApi.md#removelevel) | **DELETE** /rest/api/2/issuesecurityschemes/{schemeId}/level/{levelId} | Remove issue security level
*IssueSecuritySchemesApi* | [**removeMemberFromSecurityLevel**](docs/Api/IssueSecuritySchemesApi.md#removememberfromsecuritylevel) | **DELETE** /rest/api/2/issuesecurityschemes/{schemeId}/level/{levelId}/member/{memberId} | Remove member from issue security level
*IssueSecuritySchemesApi* | [**searchProjectsUsingSecuritySchemes**](docs/Api/IssueSecuritySchemesApi.md#searchprojectsusingsecurityschemes) | **GET** /rest/api/2/issuesecurityschemes/project | Get projects using issue security schemes
*IssueSecuritySchemesApi* | [**searchSecuritySchemes**](docs/Api/IssueSecuritySchemesApi.md#searchsecurityschemes) | **GET** /rest/api/2/issuesecurityschemes/search | Search issue security schemes
*IssueSecuritySchemesApi* | [**setDefaultLevels**](docs/Api/IssueSecuritySchemesApi.md#setdefaultlevels) | **PUT** /rest/api/2/issuesecurityschemes/level/default | Set default issue security levels
*IssueSecuritySchemesApi* | [**updateIssueSecurityScheme**](docs/Api/IssueSecuritySchemesApi.md#updateissuesecurityscheme) | **PUT** /rest/api/2/issuesecurityschemes/{id} | Update issue security scheme
*IssueSecuritySchemesApi* | [**updateSecurityLevel**](docs/Api/IssueSecuritySchemesApi.md#updatesecuritylevel) | **PUT** /rest/api/2/issuesecurityschemes/{schemeId}/level/{levelId} | Update issue security level
*IssueTypePropertiesApi* | [**deleteIssueTypeProperty**](docs/Api/IssueTypePropertiesApi.md#deleteissuetypeproperty) | **DELETE** /rest/api/2/issuetype/{issueTypeId}/properties/{propertyKey} | Delete issue type property
*IssueTypePropertiesApi* | [**getIssueTypeProperty**](docs/Api/IssueTypePropertiesApi.md#getissuetypeproperty) | **GET** /rest/api/2/issuetype/{issueTypeId}/properties/{propertyKey} | Get issue type property
*IssueTypePropertiesApi* | [**getIssueTypePropertyKeys**](docs/Api/IssueTypePropertiesApi.md#getissuetypepropertykeys) | **GET** /rest/api/2/issuetype/{issueTypeId}/properties | Get issue type property keys
*IssueTypePropertiesApi* | [**setIssueTypeProperty**](docs/Api/IssueTypePropertiesApi.md#setissuetypeproperty) | **PUT** /rest/api/2/issuetype/{issueTypeId}/properties/{propertyKey} | Set issue type property
*IssueTypeSchemesApi* | [**addIssueTypesToIssueTypeScheme**](docs/Api/IssueTypeSchemesApi.md#addissuetypestoissuetypescheme) | **PUT** /rest/api/2/issuetypescheme/{issueTypeSchemeId}/issuetype | Add issue types to issue type scheme
*IssueTypeSchemesApi* | [**assignIssueTypeSchemeToProject**](docs/Api/IssueTypeSchemesApi.md#assignissuetypeschemetoproject) | **PUT** /rest/api/2/issuetypescheme/project | Assign issue type scheme to project
*IssueTypeSchemesApi* | [**createIssueTypeScheme**](docs/Api/IssueTypeSchemesApi.md#createissuetypescheme) | **POST** /rest/api/2/issuetypescheme | Create issue type scheme
*IssueTypeSchemesApi* | [**deleteIssueTypeScheme**](docs/Api/IssueTypeSchemesApi.md#deleteissuetypescheme) | **DELETE** /rest/api/2/issuetypescheme/{issueTypeSchemeId} | Delete issue type scheme
*IssueTypeSchemesApi* | [**getAllIssueTypeSchemes**](docs/Api/IssueTypeSchemesApi.md#getallissuetypeschemes) | **GET** /rest/api/2/issuetypescheme | Get all issue type schemes
*IssueTypeSchemesApi* | [**getIssueTypeSchemeForProjects**](docs/Api/IssueTypeSchemesApi.md#getissuetypeschemeforprojects) | **GET** /rest/api/2/issuetypescheme/project | Get issue type schemes for projects
*IssueTypeSchemesApi* | [**getIssueTypeSchemesMapping**](docs/Api/IssueTypeSchemesApi.md#getissuetypeschemesmapping) | **GET** /rest/api/2/issuetypescheme/mapping | Get issue type scheme items
*IssueTypeSchemesApi* | [**removeIssueTypeFromIssueTypeScheme**](docs/Api/IssueTypeSchemesApi.md#removeissuetypefromissuetypescheme) | **DELETE** /rest/api/2/issuetypescheme/{issueTypeSchemeId}/issuetype/{issueTypeId} | Remove issue type from issue type scheme
*IssueTypeSchemesApi* | [**reorderIssueTypesInIssueTypeScheme**](docs/Api/IssueTypeSchemesApi.md#reorderissuetypesinissuetypescheme) | **PUT** /rest/api/2/issuetypescheme/{issueTypeSchemeId}/issuetype/move | Change order of issue types
*IssueTypeSchemesApi* | [**updateIssueTypeScheme**](docs/Api/IssueTypeSchemesApi.md#updateissuetypescheme) | **PUT** /rest/api/2/issuetypescheme/{issueTypeSchemeId} | Update issue type scheme
*IssueTypeScreenSchemesApi* | [**appendMappingsForIssueTypeScreenScheme**](docs/Api/IssueTypeScreenSchemesApi.md#appendmappingsforissuetypescreenscheme) | **PUT** /rest/api/2/issuetypescreenscheme/{issueTypeScreenSchemeId}/mapping | Append mappings to issue type screen scheme
*IssueTypeScreenSchemesApi* | [**assignIssueTypeScreenSchemeToProject**](docs/Api/IssueTypeScreenSchemesApi.md#assignissuetypescreenschemetoproject) | **PUT** /rest/api/2/issuetypescreenscheme/project | Assign issue type screen scheme to project
*IssueTypeScreenSchemesApi* | [**createIssueTypeScreenScheme**](docs/Api/IssueTypeScreenSchemesApi.md#createissuetypescreenscheme) | **POST** /rest/api/2/issuetypescreenscheme | Create issue type screen scheme
*IssueTypeScreenSchemesApi* | [**deleteIssueTypeScreenScheme**](docs/Api/IssueTypeScreenSchemesApi.md#deleteissuetypescreenscheme) | **DELETE** /rest/api/2/issuetypescreenscheme/{issueTypeScreenSchemeId} | Delete issue type screen scheme
*IssueTypeScreenSchemesApi* | [**getIssueTypeScreenSchemeMappings**](docs/Api/IssueTypeScreenSchemesApi.md#getissuetypescreenschememappings) | **GET** /rest/api/2/issuetypescreenscheme/mapping | Get issue type screen scheme items
*IssueTypeScreenSchemesApi* | [**getIssueTypeScreenSchemeProjectAssociations**](docs/Api/IssueTypeScreenSchemesApi.md#getissuetypescreenschemeprojectassociations) | **GET** /rest/api/2/issuetypescreenscheme/project | Get issue type screen schemes for projects
*IssueTypeScreenSchemesApi* | [**getIssueTypeScreenSchemes**](docs/Api/IssueTypeScreenSchemesApi.md#getissuetypescreenschemes) | **GET** /rest/api/2/issuetypescreenscheme | Get issue type screen schemes
*IssueTypeScreenSchemesApi* | [**getProjectsForIssueTypeScreenScheme**](docs/Api/IssueTypeScreenSchemesApi.md#getprojectsforissuetypescreenscheme) | **GET** /rest/api/2/issuetypescreenscheme/{issueTypeScreenSchemeId}/project | Get issue type screen scheme projects
*IssueTypeScreenSchemesApi* | [**removeMappingsFromIssueTypeScreenScheme**](docs/Api/IssueTypeScreenSchemesApi.md#removemappingsfromissuetypescreenscheme) | **POST** /rest/api/2/issuetypescreenscheme/{issueTypeScreenSchemeId}/mapping/remove | Remove mappings from issue type screen scheme
*IssueTypeScreenSchemesApi* | [**updateDefaultScreenScheme**](docs/Api/IssueTypeScreenSchemesApi.md#updatedefaultscreenscheme) | **PUT** /rest/api/2/issuetypescreenscheme/{issueTypeScreenSchemeId}/mapping/default | Update issue type screen scheme default screen scheme
*IssueTypeScreenSchemesApi* | [**updateIssueTypeScreenScheme**](docs/Api/IssueTypeScreenSchemesApi.md#updateissuetypescreenscheme) | **PUT** /rest/api/2/issuetypescreenscheme/{issueTypeScreenSchemeId} | Update issue type screen scheme
*IssueTypesApi* | [**createIssueType**](docs/Api/IssueTypesApi.md#createissuetype) | **POST** /rest/api/2/issuetype | Create issue type
*IssueTypesApi* | [**createIssueTypeAvatar**](docs/Api/IssueTypesApi.md#createissuetypeavatar) | **POST** /rest/api/2/issuetype/{id}/avatar2 | Load issue type avatar
*IssueTypesApi* | [**deleteIssueType**](docs/Api/IssueTypesApi.md#deleteissuetype) | **DELETE** /rest/api/2/issuetype/{id} | Delete issue type
*IssueTypesApi* | [**getAlternativeIssueTypes**](docs/Api/IssueTypesApi.md#getalternativeissuetypes) | **GET** /rest/api/2/issuetype/{id}/alternatives | Get alternative issue types
*IssueTypesApi* | [**getIssueAllTypes**](docs/Api/IssueTypesApi.md#getissuealltypes) | **GET** /rest/api/2/issuetype | Get all issue types for user
*IssueTypesApi* | [**getIssueType**](docs/Api/IssueTypesApi.md#getissuetype) | **GET** /rest/api/2/issuetype/{id} | Get issue type
*IssueTypesApi* | [**getIssueTypesForProject**](docs/Api/IssueTypesApi.md#getissuetypesforproject) | **GET** /rest/api/2/issuetype/project | Get issue types for project
*IssueTypesApi* | [**updateIssueType**](docs/Api/IssueTypesApi.md#updateissuetype) | **PUT** /rest/api/2/issuetype/{id} | Update issue type
*IssueVotesApi* | [**addVote**](docs/Api/IssueVotesApi.md#addvote) | **POST** /rest/api/2/issue/{issueIdOrKey}/votes | Add vote
*IssueVotesApi* | [**getVotes**](docs/Api/IssueVotesApi.md#getvotes) | **GET** /rest/api/2/issue/{issueIdOrKey}/votes | Get votes
*IssueVotesApi* | [**removeVote**](docs/Api/IssueVotesApi.md#removevote) | **DELETE** /rest/api/2/issue/{issueIdOrKey}/votes | Delete vote
*IssueWatchersApi* | [**addWatcher**](docs/Api/IssueWatchersApi.md#addwatcher) | **POST** /rest/api/2/issue/{issueIdOrKey}/watchers | Add watcher
*IssueWatchersApi* | [**getIsWatchingIssueBulk**](docs/Api/IssueWatchersApi.md#getiswatchingissuebulk) | **POST** /rest/api/2/issue/watching | Get is watching issue bulk
*IssueWatchersApi* | [**getIssueWatchers**](docs/Api/IssueWatchersApi.md#getissuewatchers) | **GET** /rest/api/2/issue/{issueIdOrKey}/watchers | Get issue watchers
*IssueWatchersApi* | [**removeWatcher**](docs/Api/IssueWatchersApi.md#removewatcher) | **DELETE** /rest/api/2/issue/{issueIdOrKey}/watchers | Delete watcher
*IssueWorklogPropertiesApi* | [**deleteWorklogProperty**](docs/Api/IssueWorklogPropertiesApi.md#deleteworklogproperty) | **DELETE** /rest/api/2/issue/{issueIdOrKey}/worklog/{worklogId}/properties/{propertyKey} | Delete worklog property
*IssueWorklogPropertiesApi* | [**getWorklogProperty**](docs/Api/IssueWorklogPropertiesApi.md#getworklogproperty) | **GET** /rest/api/2/issue/{issueIdOrKey}/worklog/{worklogId}/properties/{propertyKey} | Get worklog property
*IssueWorklogPropertiesApi* | [**getWorklogPropertyKeys**](docs/Api/IssueWorklogPropertiesApi.md#getworklogpropertykeys) | **GET** /rest/api/2/issue/{issueIdOrKey}/worklog/{worklogId}/properties | Get worklog property keys
*IssueWorklogPropertiesApi* | [**setWorklogProperty**](docs/Api/IssueWorklogPropertiesApi.md#setworklogproperty) | **PUT** /rest/api/2/issue/{issueIdOrKey}/worklog/{worklogId}/properties/{propertyKey} | Set worklog property
*IssueWorklogsApi* | [**addWorklog**](docs/Api/IssueWorklogsApi.md#addworklog) | **POST** /rest/api/2/issue/{issueIdOrKey}/worklog | Add worklog
*IssueWorklogsApi* | [**deleteWorklog**](docs/Api/IssueWorklogsApi.md#deleteworklog) | **DELETE** /rest/api/2/issue/{issueIdOrKey}/worklog/{id} | Delete worklog
*IssueWorklogsApi* | [**getIdsOfWorklogsDeletedSince**](docs/Api/IssueWorklogsApi.md#getidsofworklogsdeletedsince) | **GET** /rest/api/2/worklog/deleted | Get IDs of deleted worklogs
*IssueWorklogsApi* | [**getIdsOfWorklogsModifiedSince**](docs/Api/IssueWorklogsApi.md#getidsofworklogsmodifiedsince) | **GET** /rest/api/2/worklog/updated | Get IDs of updated worklogs
*IssueWorklogsApi* | [**getIssueWorklog**](docs/Api/IssueWorklogsApi.md#getissueworklog) | **GET** /rest/api/2/issue/{issueIdOrKey}/worklog | Get issue worklogs
*IssueWorklogsApi* | [**getWorklog**](docs/Api/IssueWorklogsApi.md#getworklog) | **GET** /rest/api/2/issue/{issueIdOrKey}/worklog/{id} | Get worklog
*IssueWorklogsApi* | [**getWorklogsForIds**](docs/Api/IssueWorklogsApi.md#getworklogsforids) | **POST** /rest/api/2/worklog/list | Get worklogs
*IssueWorklogsApi* | [**updateWorklog**](docs/Api/IssueWorklogsApi.md#updateworklog) | **PUT** /rest/api/2/issue/{issueIdOrKey}/worklog/{id} | Update worklog
*IssuesApi* | [**archiveIssues**](docs/Api/IssuesApi.md#archiveissues) | **PUT** /rest/api/2/issue/archive | Archive issue(s) by issue ID/key
*IssuesApi* | [**archiveIssuesAsync**](docs/Api/IssuesApi.md#archiveissuesasync) | **POST** /rest/api/2/issue/archive | Archive issue(s) by JQL
*IssuesApi* | [**assignIssue**](docs/Api/IssuesApi.md#assignissue) | **PUT** /rest/api/2/issue/{issueIdOrKey}/assignee | Assign issue
*IssuesApi* | [**createIssue**](docs/Api/IssuesApi.md#createissue) | **POST** /rest/api/2/issue | Create issue
*IssuesApi* | [**createIssues**](docs/Api/IssuesApi.md#createissues) | **POST** /rest/api/2/issue/bulk | Bulk create issue
*IssuesApi* | [**deleteIssue**](docs/Api/IssuesApi.md#deleteissue) | **DELETE** /rest/api/2/issue/{issueIdOrKey} | Delete issue
*IssuesApi* | [**doTransition**](docs/Api/IssuesApi.md#dotransition) | **POST** /rest/api/2/issue/{issueIdOrKey}/transitions | Transition issue
*IssuesApi* | [**editIssue**](docs/Api/IssuesApi.md#editissue) | **PUT** /rest/api/2/issue/{issueIdOrKey} | Edit issue
*IssuesApi* | [**exportArchivedIssues**](docs/Api/IssuesApi.md#exportarchivedissues) | **PUT** /rest/api/2/issues/archive/export | Export archived issue(s)
*IssuesApi* | [**getChangeLogs**](docs/Api/IssuesApi.md#getchangelogs) | **GET** /rest/api/2/issue/{issueIdOrKey}/changelog | Get changelogs
*IssuesApi* | [**getChangeLogsByIds**](docs/Api/IssuesApi.md#getchangelogsbyids) | **POST** /rest/api/2/issue/{issueIdOrKey}/changelog/list | Get changelogs by IDs
*IssuesApi* | [**getCreateIssueMeta**](docs/Api/IssuesApi.md#getcreateissuemeta) | **GET** /rest/api/2/issue/createmeta | Get create issue metadata
*IssuesApi* | [**getEditIssueMeta**](docs/Api/IssuesApi.md#geteditissuemeta) | **GET** /rest/api/2/issue/{issueIdOrKey}/editmeta | Get edit issue metadata
*IssuesApi* | [**getEvents**](docs/Api/IssuesApi.md#getevents) | **GET** /rest/api/2/events | Get events
*IssuesApi* | [**getIssue**](docs/Api/IssuesApi.md#getissue) | **GET** /rest/api/2/issue/{issueIdOrKey} | Get issue
*IssuesApi* | [**getTransitions**](docs/Api/IssuesApi.md#gettransitions) | **GET** /rest/api/2/issue/{issueIdOrKey}/transitions | Get transitions
*IssuesApi* | [**notify**](docs/Api/IssuesApi.md#notify) | **POST** /rest/api/2/issue/{issueIdOrKey}/notify | Send notification for issue
*IssuesApi* | [**unarchiveIssues**](docs/Api/IssuesApi.md#unarchiveissues) | **PUT** /rest/api/2/issue/unarchive | Unarchive issue(s) by issue keys/ID
*JQLApi* | [**getAutoComplete**](docs/Api/JQLApi.md#getautocomplete) | **GET** /rest/api/2/jql/autocompletedata | Get field reference data (GET)
*JQLApi* | [**getAutoCompletePost**](docs/Api/JQLApi.md#getautocompletepost) | **POST** /rest/api/2/jql/autocompletedata | Get field reference data (POST)
*JQLApi* | [**getFieldAutoCompleteForQueryString**](docs/Api/JQLApi.md#getfieldautocompleteforquerystring) | **GET** /rest/api/2/jql/autocompletedata/suggestions | Get field auto complete suggestions
*JQLApi* | [**migrateQueries**](docs/Api/JQLApi.md#migratequeries) | **POST** /rest/api/2/jql/pdcleaner | Convert user identifiers to account IDs in JQL queries
*JQLApi* | [**parseJqlQueries**](docs/Api/JQLApi.md#parsejqlqueries) | **POST** /rest/api/2/jql/parse | Parse JQL query
*JQLApi* | [**sanitiseJqlQueries**](docs/Api/JQLApi.md#sanitisejqlqueries) | **POST** /rest/api/2/jql/sanitize | Sanitize JQL queries
*JQLFunctionsAppsApi* | [**getPrecomputations**](docs/Api/JQLFunctionsAppsApi.md#getprecomputations) | **GET** /rest/api/2/jql/function/computation | Get precomputations (apps)
*JQLFunctionsAppsApi* | [**updatePrecomputations**](docs/Api/JQLFunctionsAppsApi.md#updateprecomputations) | **POST** /rest/api/2/jql/function/computation | Update precomputations (apps)
*JiraExpressionsApi* | [**analyseExpression**](docs/Api/JiraExpressionsApi.md#analyseexpression) | **POST** /rest/api/2/expression/analyse | Analyse Jira expression
*JiraExpressionsApi* | [**evaluateJiraExpression**](docs/Api/JiraExpressionsApi.md#evaluatejiraexpression) | **POST** /rest/api/2/expression/eval | Evaluate Jira expression
*JiraSettingsApi* | [**getAdvancedSettings**](docs/Api/JiraSettingsApi.md#getadvancedsettings) | **GET** /rest/api/2/application-properties/advanced-settings | Get advanced settings
*JiraSettingsApi* | [**getApplicationProperty**](docs/Api/JiraSettingsApi.md#getapplicationproperty) | **GET** /rest/api/2/application-properties | Get application property
*JiraSettingsApi* | [**getConfiguration**](docs/Api/JiraSettingsApi.md#getconfiguration) | **GET** /rest/api/2/configuration | Get global settings
*JiraSettingsApi* | [**setApplicationProperty**](docs/Api/JiraSettingsApi.md#setapplicationproperty) | **PUT** /rest/api/2/application-properties/{id} | Set application property
*LabelsApi* | [**getAllLabels**](docs/Api/LabelsApi.md#getalllabels) | **GET** /rest/api/2/label | Get all labels
*LicenseMetricsApi* | [**getApproximateApplicationLicenseCount**](docs/Api/LicenseMetricsApi.md#getapproximateapplicationlicensecount) | **GET** /rest/api/2/license/approximateLicenseCount/product/{applicationKey} | Get approximate application license count
*LicenseMetricsApi* | [**getApproximateLicenseCount**](docs/Api/LicenseMetricsApi.md#getapproximatelicensecount) | **GET** /rest/api/2/license/approximateLicenseCount | Get approximate license count
*LicenseMetricsApi* | [**getLicense**](docs/Api/LicenseMetricsApi.md#getlicense) | **GET** /rest/api/2/instance/license | Get license
*MyselfApi* | [**deleteLocale**](docs/Api/MyselfApi.md#deletelocale) | **DELETE** /rest/api/2/mypreferences/locale | Delete locale
*MyselfApi* | [**getCurrentUser**](docs/Api/MyselfApi.md#getcurrentuser) | **GET** /rest/api/2/myself | Get current user
*MyselfApi* | [**getLocale**](docs/Api/MyselfApi.md#getlocale) | **GET** /rest/api/2/mypreferences/locale | Get locale
*MyselfApi* | [**getPreference**](docs/Api/MyselfApi.md#getpreference) | **GET** /rest/api/2/mypreferences | Get preference
*MyselfApi* | [**removePreference**](docs/Api/MyselfApi.md#removepreference) | **DELETE** /rest/api/2/mypreferences | Delete preference
*MyselfApi* | [**setLocale**](docs/Api/MyselfApi.md#setlocale) | **PUT** /rest/api/2/mypreferences/locale | Set locale
*MyselfApi* | [**setPreference**](docs/Api/MyselfApi.md#setpreference) | **PUT** /rest/api/2/mypreferences | Set preference
*PermissionSchemesApi* | [**createPermissionGrant**](docs/Api/PermissionSchemesApi.md#createpermissiongrant) | **POST** /rest/api/2/permissionscheme/{schemeId}/permission | Create permission grant
*PermissionSchemesApi* | [**createPermissionScheme**](docs/Api/PermissionSchemesApi.md#createpermissionscheme) | **POST** /rest/api/2/permissionscheme | Create permission scheme
*PermissionSchemesApi* | [**deletePermissionScheme**](docs/Api/PermissionSchemesApi.md#deletepermissionscheme) | **DELETE** /rest/api/2/permissionscheme/{schemeId} | Delete permission scheme
*PermissionSchemesApi* | [**deletePermissionSchemeEntity**](docs/Api/PermissionSchemesApi.md#deletepermissionschemeentity) | **DELETE** /rest/api/2/permissionscheme/{schemeId}/permission/{permissionId} | Delete permission scheme grant
*PermissionSchemesApi* | [**getAllPermissionSchemes**](docs/Api/PermissionSchemesApi.md#getallpermissionschemes) | **GET** /rest/api/2/permissionscheme | Get all permission schemes
*PermissionSchemesApi* | [**getPermissionScheme**](docs/Api/PermissionSchemesApi.md#getpermissionscheme) | **GET** /rest/api/2/permissionscheme/{schemeId} | Get permission scheme
*PermissionSchemesApi* | [**getPermissionSchemeGrant**](docs/Api/PermissionSchemesApi.md#getpermissionschemegrant) | **GET** /rest/api/2/permissionscheme/{schemeId}/permission/{permissionId} | Get permission scheme grant
*PermissionSchemesApi* | [**getPermissionSchemeGrants**](docs/Api/PermissionSchemesApi.md#getpermissionschemegrants) | **GET** /rest/api/2/permissionscheme/{schemeId}/permission | Get permission scheme grants
*PermissionSchemesApi* | [**updatePermissionScheme**](docs/Api/PermissionSchemesApi.md#updatepermissionscheme) | **PUT** /rest/api/2/permissionscheme/{schemeId} | Update permission scheme
*PermissionsApi* | [**getAllPermissions**](docs/Api/PermissionsApi.md#getallpermissions) | **GET** /rest/api/2/permissions | Get all permissions
*PermissionsApi* | [**getBulkPermissions**](docs/Api/PermissionsApi.md#getbulkpermissions) | **POST** /rest/api/2/permissions/check | Get bulk permissions
*PermissionsApi* | [**getMyPermissions**](docs/Api/PermissionsApi.md#getmypermissions) | **GET** /rest/api/2/mypermissions | Get my permissions
*PermissionsApi* | [**getPermittedProjects**](docs/Api/PermissionsApi.md#getpermittedprojects) | **POST** /rest/api/2/permissions/project | Get permitted projects
*ProjectAvatarsApi* | [**createProjectAvatar**](docs/Api/ProjectAvatarsApi.md#createprojectavatar) | **POST** /rest/api/2/project/{projectIdOrKey}/avatar2 | Load project avatar
*ProjectAvatarsApi* | [**deleteProjectAvatar**](docs/Api/ProjectAvatarsApi.md#deleteprojectavatar) | **DELETE** /rest/api/2/project/{projectIdOrKey}/avatar/{id} | Delete project avatar
*ProjectAvatarsApi* | [**getAllProjectAvatars**](docs/Api/ProjectAvatarsApi.md#getallprojectavatars) | **GET** /rest/api/2/project/{projectIdOrKey}/avatars | Get all project avatars
*ProjectAvatarsApi* | [**updateProjectAvatar**](docs/Api/ProjectAvatarsApi.md#updateprojectavatar) | **PUT** /rest/api/2/project/{projectIdOrKey}/avatar | Set project avatar
*ProjectCategoriesApi* | [**createProjectCategory**](docs/Api/ProjectCategoriesApi.md#createprojectcategory) | **POST** /rest/api/2/projectCategory | Create project category
*ProjectCategoriesApi* | [**getAllProjectCategories**](docs/Api/ProjectCategoriesApi.md#getallprojectcategories) | **GET** /rest/api/2/projectCategory | Get all project categories
*ProjectCategoriesApi* | [**getProjectCategoryById**](docs/Api/ProjectCategoriesApi.md#getprojectcategorybyid) | **GET** /rest/api/2/projectCategory/{id} | Get project category by ID
*ProjectCategoriesApi* | [**removeProjectCategory**](docs/Api/ProjectCategoriesApi.md#removeprojectcategory) | **DELETE** /rest/api/2/projectCategory/{id} | Delete project category
*ProjectCategoriesApi* | [**updateProjectCategory**](docs/Api/ProjectCategoriesApi.md#updateprojectcategory) | **PUT** /rest/api/2/projectCategory/{id} | Update project category
*ProjectComponentsApi* | [**createComponent**](docs/Api/ProjectComponentsApi.md#createcomponent) | **POST** /rest/api/2/component | Create component
*ProjectComponentsApi* | [**deleteComponent**](docs/Api/ProjectComponentsApi.md#deletecomponent) | **DELETE** /rest/api/2/component/{id} | Delete component
*ProjectComponentsApi* | [**getComponent**](docs/Api/ProjectComponentsApi.md#getcomponent) | **GET** /rest/api/2/component/{id} | Get component
*ProjectComponentsApi* | [**getComponentRelatedIssues**](docs/Api/ProjectComponentsApi.md#getcomponentrelatedissues) | **GET** /rest/api/2/component/{id}/relatedIssueCounts | Get component issues count
*ProjectComponentsApi* | [**getProjectComponents**](docs/Api/ProjectComponentsApi.md#getprojectcomponents) | **GET** /rest/api/2/project/{projectIdOrKey}/components | Get project components
*ProjectComponentsApi* | [**getProjectComponentsPaginated**](docs/Api/ProjectComponentsApi.md#getprojectcomponentspaginated) | **GET** /rest/api/2/project/{projectIdOrKey}/component | Get project components paginated
*ProjectComponentsApi* | [**updateComponent**](docs/Api/ProjectComponentsApi.md#updatecomponent) | **PUT** /rest/api/2/component/{id} | Update component
*ProjectEmailApi* | [**getProjectEmail**](docs/Api/ProjectEmailApi.md#getprojectemail) | **GET** /rest/api/2/project/{projectId}/email | Get project&#39;s sender email
*ProjectEmailApi* | [**updateProjectEmail**](docs/Api/ProjectEmailApi.md#updateprojectemail) | **PUT** /rest/api/2/project/{projectId}/email | Set project&#39;s sender email
*ProjectFeaturesApi* | [**getFeaturesForProject**](docs/Api/ProjectFeaturesApi.md#getfeaturesforproject) | **GET** /rest/api/2/project/{projectIdOrKey}/features | Get project features
*ProjectFeaturesApi* | [**toggleFeatureForProject**](docs/Api/ProjectFeaturesApi.md#togglefeatureforproject) | **PUT** /rest/api/2/project/{projectIdOrKey}/features/{featureKey} | Set project feature state
*ProjectKeyAndNameValidationApi* | [**getValidProjectKey**](docs/Api/ProjectKeyAndNameValidationApi.md#getvalidprojectkey) | **GET** /rest/api/2/projectvalidate/validProjectKey | Get valid project key
*ProjectKeyAndNameValidationApi* | [**getValidProjectName**](docs/Api/ProjectKeyAndNameValidationApi.md#getvalidprojectname) | **GET** /rest/api/2/projectvalidate/validProjectName | Get valid project name
*ProjectKeyAndNameValidationApi* | [**validateProjectKey**](docs/Api/ProjectKeyAndNameValidationApi.md#validateprojectkey) | **GET** /rest/api/2/projectvalidate/key | Validate project key
*ProjectPermissionSchemesApi* | [**assignPermissionScheme**](docs/Api/ProjectPermissionSchemesApi.md#assignpermissionscheme) | **PUT** /rest/api/2/project/{projectKeyOrId}/permissionscheme | Assign permission scheme
*ProjectPermissionSchemesApi* | [**getAssignedPermissionScheme**](docs/Api/ProjectPermissionSchemesApi.md#getassignedpermissionscheme) | **GET** /rest/api/2/project/{projectKeyOrId}/permissionscheme | Get assigned permission scheme
*ProjectPermissionSchemesApi* | [**getProjectIssueSecurityScheme**](docs/Api/ProjectPermissionSchemesApi.md#getprojectissuesecurityscheme) | **GET** /rest/api/2/project/{projectKeyOrId}/issuesecuritylevelscheme | Get project issue security scheme
*ProjectPermissionSchemesApi* | [**getSecurityLevelsForProject**](docs/Api/ProjectPermissionSchemesApi.md#getsecuritylevelsforproject) | **GET** /rest/api/2/project/{projectKeyOrId}/securitylevel | Get project issue security levels
*ProjectPropertiesApi* | [**deleteProjectProperty**](docs/Api/ProjectPropertiesApi.md#deleteprojectproperty) | **DELETE** /rest/api/2/project/{projectIdOrKey}/properties/{propertyKey} | Delete project property
*ProjectPropertiesApi* | [**getProjectProperty**](docs/Api/ProjectPropertiesApi.md#getprojectproperty) | **GET** /rest/api/2/project/{projectIdOrKey}/properties/{propertyKey} | Get project property
*ProjectPropertiesApi* | [**getProjectPropertyKeys**](docs/Api/ProjectPropertiesApi.md#getprojectpropertykeys) | **GET** /rest/api/2/project/{projectIdOrKey}/properties | Get project property keys
*ProjectPropertiesApi* | [**setProjectProperty**](docs/Api/ProjectPropertiesApi.md#setprojectproperty) | **PUT** /rest/api/2/project/{projectIdOrKey}/properties/{propertyKey} | Set project property
*ProjectRoleActorsApi* | [**addActorUsers**](docs/Api/ProjectRoleActorsApi.md#addactorusers) | **POST** /rest/api/2/project/{projectIdOrKey}/role/{id} | Add actors to project role
*ProjectRoleActorsApi* | [**addProjectRoleActorsToRole**](docs/Api/ProjectRoleActorsApi.md#addprojectroleactorstorole) | **POST** /rest/api/2/role/{id}/actors | Add default actors to project role
*ProjectRoleActorsApi* | [**deleteActor**](docs/Api/ProjectRoleActorsApi.md#deleteactor) | **DELETE** /rest/api/2/project/{projectIdOrKey}/role/{id} | Delete actors from project role
*ProjectRoleActorsApi* | [**deleteProjectRoleActorsFromRole**](docs/Api/ProjectRoleActorsApi.md#deleteprojectroleactorsfromrole) | **DELETE** /rest/api/2/role/{id}/actors | Delete default actors from project role
*ProjectRoleActorsApi* | [**getProjectRoleActorsForRole**](docs/Api/ProjectRoleActorsApi.md#getprojectroleactorsforrole) | **GET** /rest/api/2/role/{id}/actors | Get default actors for project role
*ProjectRoleActorsApi* | [**setActors**](docs/Api/ProjectRoleActorsApi.md#setactors) | **PUT** /rest/api/2/project/{projectIdOrKey}/role/{id} | Set actors for project role
*ProjectRolesApi* | [**createProjectRole**](docs/Api/ProjectRolesApi.md#createprojectrole) | **POST** /rest/api/2/role | Create project role
*ProjectRolesApi* | [**deleteProjectRole**](docs/Api/ProjectRolesApi.md#deleteprojectrole) | **DELETE** /rest/api/2/role/{id} | Delete project role
*ProjectRolesApi* | [**fullyUpdateProjectRole**](docs/Api/ProjectRolesApi.md#fullyupdateprojectrole) | **PUT** /rest/api/2/role/{id} | Fully update project role
*ProjectRolesApi* | [**getAllProjectRoles**](docs/Api/ProjectRolesApi.md#getallprojectroles) | **GET** /rest/api/2/role | Get all project roles
*ProjectRolesApi* | [**getProjectRole**](docs/Api/ProjectRolesApi.md#getprojectrole) | **GET** /rest/api/2/project/{projectIdOrKey}/role/{id} | Get project role for project
*ProjectRolesApi* | [**getProjectRoleById**](docs/Api/ProjectRolesApi.md#getprojectrolebyid) | **GET** /rest/api/2/role/{id} | Get project role by ID
*ProjectRolesApi* | [**getProjectRoleDetails**](docs/Api/ProjectRolesApi.md#getprojectroledetails) | **GET** /rest/api/2/project/{projectIdOrKey}/roledetails | Get project role details
*ProjectRolesApi* | [**getProjectRoles**](docs/Api/ProjectRolesApi.md#getprojectroles) | **GET** /rest/api/2/project/{projectIdOrKey}/role | Get project roles for project
*ProjectRolesApi* | [**partialUpdateProjectRole**](docs/Api/ProjectRolesApi.md#partialupdateprojectrole) | **POST** /rest/api/2/role/{id} | Partial update project role
*ProjectTypesApi* | [**getAccessibleProjectTypeByKey**](docs/Api/ProjectTypesApi.md#getaccessibleprojecttypebykey) | **GET** /rest/api/2/project/type/{projectTypeKey}/accessible | Get accessible project type by key
*ProjectTypesApi* | [**getAllAccessibleProjectTypes**](docs/Api/ProjectTypesApi.md#getallaccessibleprojecttypes) | **GET** /rest/api/2/project/type/accessible | Get licensed project types
*ProjectTypesApi* | [**getAllProjectTypes**](docs/Api/ProjectTypesApi.md#getallprojecttypes) | **GET** /rest/api/2/project/type | Get all project types
*ProjectTypesApi* | [**getProjectTypeByKey**](docs/Api/ProjectTypesApi.md#getprojecttypebykey) | **GET** /rest/api/2/project/type/{projectTypeKey} | Get project type by key
*ProjectVersionsApi* | [**createVersion**](docs/Api/ProjectVersionsApi.md#createversion) | **POST** /rest/api/2/version | Create version
*ProjectVersionsApi* | [**deleteAndReplaceVersion**](docs/Api/ProjectVersionsApi.md#deleteandreplaceversion) | **POST** /rest/api/2/version/{id}/removeAndSwap | Delete and replace version
*ProjectVersionsApi* | [**deleteVersion**](docs/Api/ProjectVersionsApi.md#deleteversion) | **DELETE** /rest/api/2/version/{id} | Delete version
*ProjectVersionsApi* | [**getProjectVersions**](docs/Api/ProjectVersionsApi.md#getprojectversions) | **GET** /rest/api/2/project/{projectIdOrKey}/versions | Get project versions
*ProjectVersionsApi* | [**getProjectVersionsPaginated**](docs/Api/ProjectVersionsApi.md#getprojectversionspaginated) | **GET** /rest/api/2/project/{projectIdOrKey}/version | Get project versions paginated
*ProjectVersionsApi* | [**getVersion**](docs/Api/ProjectVersionsApi.md#getversion) | **GET** /rest/api/2/version/{id} | Get version
*ProjectVersionsApi* | [**getVersionRelatedIssues**](docs/Api/ProjectVersionsApi.md#getversionrelatedissues) | **GET** /rest/api/2/version/{id}/relatedIssueCounts | Get version&#39;s related issues count
*ProjectVersionsApi* | [**getVersionUnresolvedIssues**](docs/Api/ProjectVersionsApi.md#getversionunresolvedissues) | **GET** /rest/api/2/version/{id}/unresolvedIssueCount | Get version&#39;s unresolved issues count
*ProjectVersionsApi* | [**mergeVersions**](docs/Api/ProjectVersionsApi.md#mergeversions) | **PUT** /rest/api/2/version/{id}/mergeto/{moveIssuesTo} | Merge versions
*ProjectVersionsApi* | [**moveVersion**](docs/Api/ProjectVersionsApi.md#moveversion) | **POST** /rest/api/2/version/{id}/move | Move version
*ProjectVersionsApi* | [**updateVersion**](docs/Api/ProjectVersionsApi.md#updateversion) | **PUT** /rest/api/2/version/{id} | Update version
*ProjectsApi* | [**archiveProject**](docs/Api/ProjectsApi.md#archiveproject) | **POST** /rest/api/2/project/{projectIdOrKey}/archive | Archive project
*ProjectsApi* | [**createProject**](docs/Api/ProjectsApi.md#createproject) | **POST** /rest/api/2/project | Create project
*ProjectsApi* | [**deleteProject**](docs/Api/ProjectsApi.md#deleteproject) | **DELETE** /rest/api/2/project/{projectIdOrKey} | Delete project
*ProjectsApi* | [**deleteProjectAsynchronously**](docs/Api/ProjectsApi.md#deleteprojectasynchronously) | **POST** /rest/api/2/project/{projectIdOrKey}/delete | Delete project asynchronously
*ProjectsApi* | [**getAllProjects**](docs/Api/ProjectsApi.md#getallprojects) | **GET** /rest/api/2/project | Get all projects
*ProjectsApi* | [**getAllStatuses**](docs/Api/ProjectsApi.md#getallstatuses) | **GET** /rest/api/2/project/{projectIdOrKey}/statuses | Get all statuses for project
*ProjectsApi* | [**getHierarchy**](docs/Api/ProjectsApi.md#gethierarchy) | **GET** /rest/api/2/project/{projectId}/hierarchy | Get project issue type hierarchy
*ProjectsApi* | [**getNotificationSchemeForProject**](docs/Api/ProjectsApi.md#getnotificationschemeforproject) | **GET** /rest/api/2/project/{projectKeyOrId}/notificationscheme | Get project notification scheme
*ProjectsApi* | [**getProject**](docs/Api/ProjectsApi.md#getproject) | **GET** /rest/api/2/project/{projectIdOrKey} | Get project
*ProjectsApi* | [**getRecent**](docs/Api/ProjectsApi.md#getrecent) | **GET** /rest/api/2/project/recent | Get recent projects
*ProjectsApi* | [**restore**](docs/Api/ProjectsApi.md#restore) | **POST** /rest/api/2/project/{projectIdOrKey}/restore | Restore deleted or archived project
*ProjectsApi* | [**searchProjects**](docs/Api/ProjectsApi.md#searchprojects) | **GET** /rest/api/2/project/search | Get projects paginated
*ProjectsApi* | [**updateProject**](docs/Api/ProjectsApi.md#updateproject) | **PUT** /rest/api/2/project/{projectIdOrKey} | Update project
*ScreenSchemesApi* | [**createScreenScheme**](docs/Api/ScreenSchemesApi.md#createscreenscheme) | **POST** /rest/api/2/screenscheme | Create screen scheme
*ScreenSchemesApi* | [**deleteScreenScheme**](docs/Api/ScreenSchemesApi.md#deletescreenscheme) | **DELETE** /rest/api/2/screenscheme/{screenSchemeId} | Delete screen scheme
*ScreenSchemesApi* | [**getScreenSchemes**](docs/Api/ScreenSchemesApi.md#getscreenschemes) | **GET** /rest/api/2/screenscheme | Get screen schemes
*ScreenSchemesApi* | [**updateScreenScheme**](docs/Api/ScreenSchemesApi.md#updatescreenscheme) | **PUT** /rest/api/2/screenscheme/{screenSchemeId} | Update screen scheme
*ScreenTabFieldsApi* | [**addScreenTabField**](docs/Api/ScreenTabFieldsApi.md#addscreentabfield) | **POST** /rest/api/2/screens/{screenId}/tabs/{tabId}/fields | Add screen tab field
*ScreenTabFieldsApi* | [**getAllScreenTabFields**](docs/Api/ScreenTabFieldsApi.md#getallscreentabfields) | **GET** /rest/api/2/screens/{screenId}/tabs/{tabId}/fields | Get all screen tab fields
*ScreenTabFieldsApi* | [**moveScreenTabField**](docs/Api/ScreenTabFieldsApi.md#movescreentabfield) | **POST** /rest/api/2/screens/{screenId}/tabs/{tabId}/fields/{id}/move | Move screen tab field
*ScreenTabFieldsApi* | [**removeScreenTabField**](docs/Api/ScreenTabFieldsApi.md#removescreentabfield) | **DELETE** /rest/api/2/screens/{screenId}/tabs/{tabId}/fields/{id} | Remove screen tab field
*ScreenTabsApi* | [**addScreenTab**](docs/Api/ScreenTabsApi.md#addscreentab) | **POST** /rest/api/2/screens/{screenId}/tabs | Create screen tab
*ScreenTabsApi* | [**deleteScreenTab**](docs/Api/ScreenTabsApi.md#deletescreentab) | **DELETE** /rest/api/2/screens/{screenId}/tabs/{tabId} | Delete screen tab
*ScreenTabsApi* | [**getAllScreenTabs**](docs/Api/ScreenTabsApi.md#getallscreentabs) | **GET** /rest/api/2/screens/{screenId}/tabs | Get all screen tabs
*ScreenTabsApi* | [**moveScreenTab**](docs/Api/ScreenTabsApi.md#movescreentab) | **POST** /rest/api/2/screens/{screenId}/tabs/{tabId}/move/{pos} | Move screen tab
*ScreenTabsApi* | [**renameScreenTab**](docs/Api/ScreenTabsApi.md#renamescreentab) | **PUT** /rest/api/2/screens/{screenId}/tabs/{tabId} | Update screen tab
*ScreensApi* | [**addFieldToDefaultScreen**](docs/Api/ScreensApi.md#addfieldtodefaultscreen) | **POST** /rest/api/2/screens/addToDefault/{fieldId} | Add field to default screen
*ScreensApi* | [**createScreen**](docs/Api/ScreensApi.md#createscreen) | **POST** /rest/api/2/screens | Create screen
*ScreensApi* | [**deleteScreen**](docs/Api/ScreensApi.md#deletescreen) | **DELETE** /rest/api/2/screens/{screenId} | Delete screen
*ScreensApi* | [**getAvailableScreenFields**](docs/Api/ScreensApi.md#getavailablescreenfields) | **GET** /rest/api/2/screens/{screenId}/availableFields | Get available screen fields
*ScreensApi* | [**getScreens**](docs/Api/ScreensApi.md#getscreens) | **GET** /rest/api/2/screens | Get screens
*ScreensApi* | [**getScreensForField**](docs/Api/ScreensApi.md#getscreensforfield) | **GET** /rest/api/2/field/{fieldId}/screens | Get screens for a field
*ScreensApi* | [**updateScreen**](docs/Api/ScreensApi.md#updatescreen) | **PUT** /rest/api/2/screens/{screenId} | Update screen
*ServerInfoApi* | [**getServerInfo**](docs/Api/ServerInfoApi.md#getserverinfo) | **GET** /rest/api/2/serverInfo | Get Jira instance info
*StatusApi* | [**createStatuses**](docs/Api/StatusApi.md#createstatuses) | **POST** /rest/api/2/statuses | Bulk create statuses
*StatusApi* | [**deleteStatusesById**](docs/Api/StatusApi.md#deletestatusesbyid) | **DELETE** /rest/api/2/statuses | Bulk delete Statuses
*StatusApi* | [**getStatusesById**](docs/Api/StatusApi.md#getstatusesbyid) | **GET** /rest/api/2/statuses | Bulk get statuses
*StatusApi* | [**search**](docs/Api/StatusApi.md#search) | **GET** /rest/api/2/statuses/search | Search statuses paginated
*StatusApi* | [**updateStatuses**](docs/Api/StatusApi.md#updatestatuses) | **PUT** /rest/api/2/statuses | Bulk update statuses
*TasksApi* | [**cancelTask**](docs/Api/TasksApi.md#canceltask) | **POST** /rest/api/2/task/{taskId}/cancel | Cancel task
*TasksApi* | [**getTask**](docs/Api/TasksApi.md#gettask) | **GET** /rest/api/2/task/{taskId} | Get task
*TimeTrackingApi* | [**getAvailableTimeTrackingImplementations**](docs/Api/TimeTrackingApi.md#getavailabletimetrackingimplementations) | **GET** /rest/api/2/configuration/timetracking/list | Get all time tracking providers
*TimeTrackingApi* | [**getSelectedTimeTrackingImplementation**](docs/Api/TimeTrackingApi.md#getselectedtimetrackingimplementation) | **GET** /rest/api/2/configuration/timetracking | Get selected time tracking provider
*TimeTrackingApi* | [**getSharedTimeTrackingConfiguration**](docs/Api/TimeTrackingApi.md#getsharedtimetrackingconfiguration) | **GET** /rest/api/2/configuration/timetracking/options | Get time tracking settings
*TimeTrackingApi* | [**selectTimeTrackingImplementation**](docs/Api/TimeTrackingApi.md#selecttimetrackingimplementation) | **PUT** /rest/api/2/configuration/timetracking | Select time tracking provider
*TimeTrackingApi* | [**setSharedTimeTrackingConfiguration**](docs/Api/TimeTrackingApi.md#setsharedtimetrackingconfiguration) | **PUT** /rest/api/2/configuration/timetracking/options | Set time tracking settings
*UIModificationsAppsApi* | [**createUiModification**](docs/Api/UIModificationsAppsApi.md#createuimodification) | **POST** /rest/api/2/uiModifications | Create UI modification
*UIModificationsAppsApi* | [**deleteUiModification**](docs/Api/UIModificationsAppsApi.md#deleteuimodification) | **DELETE** /rest/api/2/uiModifications/{uiModificationId} | Delete UI modification
*UIModificationsAppsApi* | [**getUiModifications**](docs/Api/UIModificationsAppsApi.md#getuimodifications) | **GET** /rest/api/2/uiModifications | Get UI modifications
*UIModificationsAppsApi* | [**updateUiModification**](docs/Api/UIModificationsAppsApi.md#updateuimodification) | **PUT** /rest/api/2/uiModifications/{uiModificationId} | Update UI modification
*UserPropertiesApi* | [**deleteUserProperty**](docs/Api/UserPropertiesApi.md#deleteuserproperty) | **DELETE** /rest/api/2/user/properties/{propertyKey} | Delete user property
*UserPropertiesApi* | [**getUserProperty**](docs/Api/UserPropertiesApi.md#getuserproperty) | **GET** /rest/api/2/user/properties/{propertyKey} | Get user property
*UserPropertiesApi* | [**getUserPropertyKeys**](docs/Api/UserPropertiesApi.md#getuserpropertykeys) | **GET** /rest/api/2/user/properties | Get user property keys
*UserPropertiesApi* | [**setUserProperty**](docs/Api/UserPropertiesApi.md#setuserproperty) | **PUT** /rest/api/2/user/properties/{propertyKey} | Set user property
*UserSearchApi* | [**findAssignableUsers**](docs/Api/UserSearchApi.md#findassignableusers) | **GET** /rest/api/2/user/assignable/search | Find users assignable to issues
*UserSearchApi* | [**findBulkAssignableUsers**](docs/Api/UserSearchApi.md#findbulkassignableusers) | **GET** /rest/api/2/user/assignable/multiProjectSearch | Find users assignable to projects
*UserSearchApi* | [**findUserKeysByQuery**](docs/Api/UserSearchApi.md#finduserkeysbyquery) | **GET** /rest/api/2/user/search/query/key | Find user keys by query
*UserSearchApi* | [**findUsers**](docs/Api/UserSearchApi.md#findusers) | **GET** /rest/api/2/user/search | Find users
*UserSearchApi* | [**findUsersByQuery**](docs/Api/UserSearchApi.md#findusersbyquery) | **GET** /rest/api/2/user/search/query | Find users by query
*UserSearchApi* | [**findUsersForPicker**](docs/Api/UserSearchApi.md#findusersforpicker) | **GET** /rest/api/2/user/picker | Find users for picker
*UserSearchApi* | [**findUsersWithAllPermissions**](docs/Api/UserSearchApi.md#finduserswithallpermissions) | **GET** /rest/api/2/user/permission/search | Find users with permissions
*UserSearchApi* | [**findUsersWithBrowsePermission**](docs/Api/UserSearchApi.md#finduserswithbrowsepermission) | **GET** /rest/api/2/user/viewissue/search | Find users with browse permission
*UsersApi* | [**bulkGetUsers**](docs/Api/UsersApi.md#bulkgetusers) | **GET** /rest/api/2/user/bulk | Bulk get users
*UsersApi* | [**bulkGetUsersMigration**](docs/Api/UsersApi.md#bulkgetusersmigration) | **GET** /rest/api/2/user/bulk/migration | Get account IDs for users
*UsersApi* | [**createUser**](docs/Api/UsersApi.md#createuser) | **POST** /rest/api/2/user | Create user
*UsersApi* | [**getAllUsers**](docs/Api/UsersApi.md#getallusers) | **GET** /rest/api/2/users/search | Get all users
*UsersApi* | [**getAllUsersDefault**](docs/Api/UsersApi.md#getallusersdefault) | **GET** /rest/api/2/users | Get all users default
*UsersApi* | [**getUser**](docs/Api/UsersApi.md#getuser) | **GET** /rest/api/2/user | Get user
*UsersApi* | [**getUserDefaultColumns**](docs/Api/UsersApi.md#getuserdefaultcolumns) | **GET** /rest/api/2/user/columns | Get user default columns
*UsersApi* | [**getUserEmail**](docs/Api/UsersApi.md#getuseremail) | **GET** /rest/api/2/user/email | Get user email
*UsersApi* | [**getUserEmailBulk**](docs/Api/UsersApi.md#getuseremailbulk) | **GET** /rest/api/2/user/email/bulk | Get user email bulk
*UsersApi* | [**getUserGroups**](docs/Api/UsersApi.md#getusergroups) | **GET** /rest/api/2/user/groups | Get user groups
*UsersApi* | [**removeUser**](docs/Api/UsersApi.md#removeuser) | **DELETE** /rest/api/2/user | Delete user
*UsersApi* | [**resetUserColumns**](docs/Api/UsersApi.md#resetusercolumns) | **DELETE** /rest/api/2/user/columns | Reset user default columns
*UsersApi* | [**setUserColumns**](docs/Api/UsersApi.md#setusercolumns) | **PUT** /rest/api/2/user/columns | Set user default columns
*WebhooksApi* | [**deleteWebhookById**](docs/Api/WebhooksApi.md#deletewebhookbyid) | **DELETE** /rest/api/2/webhook | Delete webhooks by ID
*WebhooksApi* | [**getDynamicWebhooksForApp**](docs/Api/WebhooksApi.md#getdynamicwebhooksforapp) | **GET** /rest/api/2/webhook | Get dynamic webhooks for app
*WebhooksApi* | [**getFailedWebhooks**](docs/Api/WebhooksApi.md#getfailedwebhooks) | **GET** /rest/api/2/webhook/failed | Get failed webhooks
*WebhooksApi* | [**refreshWebhooks**](docs/Api/WebhooksApi.md#refreshwebhooks) | **PUT** /rest/api/2/webhook/refresh | Extend webhook life
*WebhooksApi* | [**registerDynamicWebhooks**](docs/Api/WebhooksApi.md#registerdynamicwebhooks) | **POST** /rest/api/2/webhook | Register dynamic webhooks
*WorkflowSchemeDraftsApi* | [**createWorkflowSchemeDraftFromParent**](docs/Api/WorkflowSchemeDraftsApi.md#createworkflowschemedraftfromparent) | **POST** /rest/api/2/workflowscheme/{id}/createdraft | Create draft workflow scheme
*WorkflowSchemeDraftsApi* | [**deleteDraftDefaultWorkflow**](docs/Api/WorkflowSchemeDraftsApi.md#deletedraftdefaultworkflow) | **DELETE** /rest/api/2/workflowscheme/{id}/draft/default | Delete draft default workflow
*WorkflowSchemeDraftsApi* | [**deleteDraftWorkflowMapping**](docs/Api/WorkflowSchemeDraftsApi.md#deletedraftworkflowmapping) | **DELETE** /rest/api/2/workflowscheme/{id}/draft/workflow | Delete issue types for workflow in draft workflow scheme
*WorkflowSchemeDraftsApi* | [**deleteWorkflowSchemeDraft**](docs/Api/WorkflowSchemeDraftsApi.md#deleteworkflowschemedraft) | **DELETE** /rest/api/2/workflowscheme/{id}/draft | Delete draft workflow scheme
*WorkflowSchemeDraftsApi* | [**deleteWorkflowSchemeDraftIssueType**](docs/Api/WorkflowSchemeDraftsApi.md#deleteworkflowschemedraftissuetype) | **DELETE** /rest/api/2/workflowscheme/{id}/draft/issuetype/{issueType} | Delete workflow for issue type in draft workflow scheme
*WorkflowSchemeDraftsApi* | [**getDraftDefaultWorkflow**](docs/Api/WorkflowSchemeDraftsApi.md#getdraftdefaultworkflow) | **GET** /rest/api/2/workflowscheme/{id}/draft/default | Get draft default workflow
*WorkflowSchemeDraftsApi* | [**getDraftWorkflow**](docs/Api/WorkflowSchemeDraftsApi.md#getdraftworkflow) | **GET** /rest/api/2/workflowscheme/{id}/draft/workflow | Get issue types for workflows in draft workflow scheme
*WorkflowSchemeDraftsApi* | [**getWorkflowSchemeDraft**](docs/Api/WorkflowSchemeDraftsApi.md#getworkflowschemedraft) | **GET** /rest/api/2/workflowscheme/{id}/draft | Get draft workflow scheme
*WorkflowSchemeDraftsApi* | [**getWorkflowSchemeDraftIssueType**](docs/Api/WorkflowSchemeDraftsApi.md#getworkflowschemedraftissuetype) | **GET** /rest/api/2/workflowscheme/{id}/draft/issuetype/{issueType} | Get workflow for issue type in draft workflow scheme
*WorkflowSchemeDraftsApi* | [**publishDraftWorkflowScheme**](docs/Api/WorkflowSchemeDraftsApi.md#publishdraftworkflowscheme) | **POST** /rest/api/2/workflowscheme/{id}/draft/publish | Publish draft workflow scheme
*WorkflowSchemeDraftsApi* | [**setWorkflowSchemeDraftIssueType**](docs/Api/WorkflowSchemeDraftsApi.md#setworkflowschemedraftissuetype) | **PUT** /rest/api/2/workflowscheme/{id}/draft/issuetype/{issueType} | Set workflow for issue type in draft workflow scheme
*WorkflowSchemeDraftsApi* | [**updateDraftDefaultWorkflow**](docs/Api/WorkflowSchemeDraftsApi.md#updatedraftdefaultworkflow) | **PUT** /rest/api/2/workflowscheme/{id}/draft/default | Update draft default workflow
*WorkflowSchemeDraftsApi* | [**updateDraftWorkflowMapping**](docs/Api/WorkflowSchemeDraftsApi.md#updatedraftworkflowmapping) | **PUT** /rest/api/2/workflowscheme/{id}/draft/workflow | Set issue types for workflow in workflow scheme
*WorkflowSchemeDraftsApi* | [**updateWorkflowSchemeDraft**](docs/Api/WorkflowSchemeDraftsApi.md#updateworkflowschemedraft) | **PUT** /rest/api/2/workflowscheme/{id}/draft | Update draft workflow scheme
*WorkflowSchemeProjectAssociationsApi* | [**assignSchemeToProject**](docs/Api/WorkflowSchemeProjectAssociationsApi.md#assignschemetoproject) | **PUT** /rest/api/2/workflowscheme/project | Assign workflow scheme to project
*WorkflowSchemeProjectAssociationsApi* | [**getWorkflowSchemeProjectAssociations**](docs/Api/WorkflowSchemeProjectAssociationsApi.md#getworkflowschemeprojectassociations) | **GET** /rest/api/2/workflowscheme/project | Get workflow scheme project associations
*WorkflowSchemesApi* | [**createWorkflowScheme**](docs/Api/WorkflowSchemesApi.md#createworkflowscheme) | **POST** /rest/api/2/workflowscheme | Create workflow scheme
*WorkflowSchemesApi* | [**deleteDefaultWorkflow**](docs/Api/WorkflowSchemesApi.md#deletedefaultworkflow) | **DELETE** /rest/api/2/workflowscheme/{id}/default | Delete default workflow
*WorkflowSchemesApi* | [**deleteWorkflowMapping**](docs/Api/WorkflowSchemesApi.md#deleteworkflowmapping) | **DELETE** /rest/api/2/workflowscheme/{id}/workflow | Delete issue types for workflow in workflow scheme
*WorkflowSchemesApi* | [**deleteWorkflowScheme**](docs/Api/WorkflowSchemesApi.md#deleteworkflowscheme) | **DELETE** /rest/api/2/workflowscheme/{id} | Delete workflow scheme
*WorkflowSchemesApi* | [**deleteWorkflowSchemeIssueType**](docs/Api/WorkflowSchemesApi.md#deleteworkflowschemeissuetype) | **DELETE** /rest/api/2/workflowscheme/{id}/issuetype/{issueType} | Delete workflow for issue type in workflow scheme
*WorkflowSchemesApi* | [**getAllWorkflowSchemes**](docs/Api/WorkflowSchemesApi.md#getallworkflowschemes) | **GET** /rest/api/2/workflowscheme | Get all workflow schemes
*WorkflowSchemesApi* | [**getDefaultWorkflow**](docs/Api/WorkflowSchemesApi.md#getdefaultworkflow) | **GET** /rest/api/2/workflowscheme/{id}/default | Get default workflow
*WorkflowSchemesApi* | [**getWorkflow**](docs/Api/WorkflowSchemesApi.md#getworkflow) | **GET** /rest/api/2/workflowscheme/{id}/workflow | Get issue types for workflows in workflow scheme
*WorkflowSchemesApi* | [**getWorkflowScheme**](docs/Api/WorkflowSchemesApi.md#getworkflowscheme) | **GET** /rest/api/2/workflowscheme/{id} | Get workflow scheme
*WorkflowSchemesApi* | [**getWorkflowSchemeIssueType**](docs/Api/WorkflowSchemesApi.md#getworkflowschemeissuetype) | **GET** /rest/api/2/workflowscheme/{id}/issuetype/{issueType} | Get workflow for issue type in workflow scheme
*WorkflowSchemesApi* | [**setWorkflowSchemeIssueType**](docs/Api/WorkflowSchemesApi.md#setworkflowschemeissuetype) | **PUT** /rest/api/2/workflowscheme/{id}/issuetype/{issueType} | Set workflow for issue type in workflow scheme
*WorkflowSchemesApi* | [**updateDefaultWorkflow**](docs/Api/WorkflowSchemesApi.md#updatedefaultworkflow) | **PUT** /rest/api/2/workflowscheme/{id}/default | Update default workflow
*WorkflowSchemesApi* | [**updateWorkflowMapping**](docs/Api/WorkflowSchemesApi.md#updateworkflowmapping) | **PUT** /rest/api/2/workflowscheme/{id}/workflow | Set issue types for workflow in workflow scheme
*WorkflowSchemesApi* | [**updateWorkflowScheme**](docs/Api/WorkflowSchemesApi.md#updateworkflowscheme) | **PUT** /rest/api/2/workflowscheme/{id} | Update workflow scheme
*WorkflowStatusCategoriesApi* | [**getStatusCategories**](docs/Api/WorkflowStatusCategoriesApi.md#getstatuscategories) | **GET** /rest/api/2/statuscategory | Get all status categories
*WorkflowStatusCategoriesApi* | [**getStatusCategory**](docs/Api/WorkflowStatusCategoriesApi.md#getstatuscategory) | **GET** /rest/api/2/statuscategory/{idOrKey} | Get status category
*WorkflowStatusesApi* | [**getStatus**](docs/Api/WorkflowStatusesApi.md#getstatus) | **GET** /rest/api/2/status/{idOrName} | Get status
*WorkflowStatusesApi* | [**getStatuses**](docs/Api/WorkflowStatusesApi.md#getstatuses) | **GET** /rest/api/2/status | Get all statuses
*WorkflowTransitionPropertiesApi* | [**createWorkflowTransitionProperty**](docs/Api/WorkflowTransitionPropertiesApi.md#createworkflowtransitionproperty) | **POST** /rest/api/2/workflow/transitions/{transitionId}/properties | Create workflow transition property
*WorkflowTransitionPropertiesApi* | [**deleteWorkflowTransitionProperty**](docs/Api/WorkflowTransitionPropertiesApi.md#deleteworkflowtransitionproperty) | **DELETE** /rest/api/2/workflow/transitions/{transitionId}/properties | Delete workflow transition property
*WorkflowTransitionPropertiesApi* | [**getWorkflowTransitionProperties**](docs/Api/WorkflowTransitionPropertiesApi.md#getworkflowtransitionproperties) | **GET** /rest/api/2/workflow/transitions/{transitionId}/properties | Get workflow transition properties
*WorkflowTransitionPropertiesApi* | [**updateWorkflowTransitionProperty**](docs/Api/WorkflowTransitionPropertiesApi.md#updateworkflowtransitionproperty) | **PUT** /rest/api/2/workflow/transitions/{transitionId}/properties | Update workflow transition property
*WorkflowTransitionRulesApi* | [**deleteWorkflowTransitionRuleConfigurations**](docs/Api/WorkflowTransitionRulesApi.md#deleteworkflowtransitionruleconfigurations) | **PUT** /rest/api/2/workflow/rule/config/delete | Delete workflow transition rule configurations
*WorkflowTransitionRulesApi* | [**getWorkflowTransitionRuleConfigurations**](docs/Api/WorkflowTransitionRulesApi.md#getworkflowtransitionruleconfigurations) | **GET** /rest/api/2/workflow/rule/config | Get workflow transition rule configurations
*WorkflowTransitionRulesApi* | [**updateWorkflowTransitionRuleConfigurations**](docs/Api/WorkflowTransitionRulesApi.md#updateworkflowtransitionruleconfigurations) | **PUT** /rest/api/2/workflow/rule/config | Update workflow transition rule configurations
*WorkflowsApi* | [**createWorkflow**](docs/Api/WorkflowsApi.md#createworkflow) | **POST** /rest/api/2/workflow | Create workflow
*WorkflowsApi* | [**createWorkflows**](docs/Api/WorkflowsApi.md#createworkflows) | **POST** /rest/api/2/workflows/create | Bulk create workflows
*WorkflowsApi* | [**deleteInactiveWorkflow**](docs/Api/WorkflowsApi.md#deleteinactiveworkflow) | **DELETE** /rest/api/2/workflow/{entityId} | Delete inactive workflow
*WorkflowsApi* | [**getAllWorkflows**](docs/Api/WorkflowsApi.md#getallworkflows) | **GET** /rest/api/2/workflow | Get all workflows
*WorkflowsApi* | [**getWorkflowsPaginated**](docs/Api/WorkflowsApi.md#getworkflowspaginated) | **GET** /rest/api/2/workflow/search | Get workflows paginated
*WorkflowsApi* | [**readWorkflows**](docs/Api/WorkflowsApi.md#readworkflows) | **POST** /rest/api/2/workflows | Bulk get workflows
*WorkflowsApi* | [**updateWorkflows**](docs/Api/WorkflowsApi.md#updateworkflows) | **POST** /rest/api/2/workflows/update | Bulk update workflows
*WorkflowsApi* | [**validateCreateWorkflows**](docs/Api/WorkflowsApi.md#validatecreateworkflows) | **POST** /rest/api/2/workflows/create/validation | Validate create workflows
*WorkflowsApi* | [**validateUpdateWorkflows**](docs/Api/WorkflowsApi.md#validateupdateworkflows) | **POST** /rest/api/2/workflows/update/validation | Validate update workflows
*WorkflowsApi* | [**workflowCapabilities**](docs/Api/WorkflowsApi.md#workflowcapabilities) | **GET** /rest/api/2/workflows/capabilities | Get available workflow capabilities

## Models

- [ActorInputBean](docs/Model/ActorInputBean.md)
- [ActorsMap](docs/Model/ActorsMap.md)
- [AddFieldBean](docs/Model/AddFieldBean.md)
- [AddGroupBean](docs/Model/AddGroupBean.md)
- [AddNotificationsDetails](docs/Model/AddNotificationsDetails.md)
- [AddSecuritySchemeLevelsRequestBean](docs/Model/AddSecuritySchemeLevelsRequestBean.md)
- [AnnouncementBannerConfiguration](docs/Model/AnnouncementBannerConfiguration.md)
- [AnnouncementBannerConfigurationUpdate](docs/Model/AnnouncementBannerConfigurationUpdate.md)
- [AppWorkflowTransitionRule](docs/Model/AppWorkflowTransitionRule.md)
- [Application](docs/Model/Application.md)
- [ApplicationProperty](docs/Model/ApplicationProperty.md)
- [ApplicationRole](docs/Model/ApplicationRole.md)
- [ArchiveIssueAsyncRequest](docs/Model/ArchiveIssueAsyncRequest.md)
- [ArchivedIssuesFilterRequest](docs/Model/ArchivedIssuesFilterRequest.md)
- [AssociateFieldConfigurationsWithIssueTypesRequest](docs/Model/AssociateFieldConfigurationsWithIssueTypesRequest.md)
- [AssociateSecuritySchemeWithProjectDetails](docs/Model/AssociateSecuritySchemeWithProjectDetails.md)
- [AssociatedItemBean](docs/Model/AssociatedItemBean.md)
- [Attachment](docs/Model/Attachment.md)
- [AttachmentArchive](docs/Model/AttachmentArchive.md)
- [AttachmentArchiveEntry](docs/Model/AttachmentArchiveEntry.md)
- [AttachmentArchiveImpl](docs/Model/AttachmentArchiveImpl.md)
- [AttachmentArchiveItemReadable](docs/Model/AttachmentArchiveItemReadable.md)
- [AttachmentArchiveMetadataReadable](docs/Model/AttachmentArchiveMetadataReadable.md)
- [AttachmentAuthor](docs/Model/AttachmentAuthor.md)
- [AttachmentMetadata](docs/Model/AttachmentMetadata.md)
- [AttachmentMetadataAuthor](docs/Model/AttachmentMetadataAuthor.md)
- [AttachmentSettings](docs/Model/AttachmentSettings.md)
- [AuditRecordBean](docs/Model/AuditRecordBean.md)
- [AuditRecords](docs/Model/AuditRecords.md)
- [AutoCompleteSuggestion](docs/Model/AutoCompleteSuggestion.md)
- [AutoCompleteSuggestions](docs/Model/AutoCompleteSuggestions.md)
- [AvailableDashboardGadget](docs/Model/AvailableDashboardGadget.md)
- [AvailableDashboardGadgetsResponse](docs/Model/AvailableDashboardGadgetsResponse.md)
- [AvailableWorkflowConnectRule](docs/Model/AvailableWorkflowConnectRule.md)
- [AvailableWorkflowForgeRule](docs/Model/AvailableWorkflowForgeRule.md)
- [AvailableWorkflowSystemRule](docs/Model/AvailableWorkflowSystemRule.md)
- [AvailableWorkflowTriggerTypes](docs/Model/AvailableWorkflowTriggerTypes.md)
- [AvailableWorkflowTriggers](docs/Model/AvailableWorkflowTriggers.md)
- [Avatar](docs/Model/Avatar.md)
- [AvatarUrlsBean](docs/Model/AvatarUrlsBean.md)
- [Avatars](docs/Model/Avatars.md)
- [BulkCustomFieldOptionCreateRequest](docs/Model/BulkCustomFieldOptionCreateRequest.md)
- [BulkCustomFieldOptionUpdateRequest](docs/Model/BulkCustomFieldOptionUpdateRequest.md)
- [BulkIssueIsWatching](docs/Model/BulkIssueIsWatching.md)
- [BulkIssuePropertyUpdateRequest](docs/Model/BulkIssuePropertyUpdateRequest.md)
- [BulkIssuePropertyUpdateRequestFilter](docs/Model/BulkIssuePropertyUpdateRequestFilter.md)
- [BulkOperationErrorResult](docs/Model/BulkOperationErrorResult.md)
- [BulkPermissionGrants](docs/Model/BulkPermissionGrants.md)
- [BulkPermissionsRequestBean](docs/Model/BulkPermissionsRequestBean.md)
- [BulkProjectPermissionGrants](docs/Model/BulkProjectPermissionGrants.md)
- [BulkProjectPermissions](docs/Model/BulkProjectPermissions.md)
- [ChangeDetails](docs/Model/ChangeDetails.md)
- [ChangeFilterOwner](docs/Model/ChangeFilterOwner.md)
- [ChangedValueBean](docs/Model/ChangedValueBean.md)
- [ChangedWorklog](docs/Model/ChangedWorklog.md)
- [ChangedWorklogs](docs/Model/ChangedWorklogs.md)
- [Changelog](docs/Model/Changelog.md)
- [ChangelogAuthor](docs/Model/ChangelogAuthor.md)
- [ChangelogHistoryMetadata](docs/Model/ChangelogHistoryMetadata.md)
- [ColumnItem](docs/Model/ColumnItem.md)
- [Comment](docs/Model/Comment.md)
- [CommentAuthor](docs/Model/CommentAuthor.md)
- [CommentUpdateAuthor](docs/Model/CommentUpdateAuthor.md)
- [CommentVisibility](docs/Model/CommentVisibility.md)
- [ComponentIssuesCount](docs/Model/ComponentIssuesCount.md)
- [ComponentWithIssueCount](docs/Model/ComponentWithIssueCount.md)
- [ComponentWithIssueCountAssignee](docs/Model/ComponentWithIssueCountAssignee.md)
- [ComponentWithIssueCountLead](docs/Model/ComponentWithIssueCountLead.md)
- [ComponentWithIssueCountRealAssignee](docs/Model/ComponentWithIssueCountRealAssignee.md)
- [CompoundClause](docs/Model/CompoundClause.md)
- [ConditionGroupConfiguration](docs/Model/ConditionGroupConfiguration.md)
- [ConditionGroupUpdate](docs/Model/ConditionGroupUpdate.md)
- [Configuration](docs/Model/Configuration.md)
- [ConfigurationTimeTrackingConfiguration](docs/Model/ConfigurationTimeTrackingConfiguration.md)
- [ConnectCustomFieldValue](docs/Model/ConnectCustomFieldValue.md)
- [ConnectCustomFieldValues](docs/Model/ConnectCustomFieldValues.md)
- [ConnectModules](docs/Model/ConnectModules.md)
- [ConnectWorkflowTransitionRule](docs/Model/ConnectWorkflowTransitionRule.md)
- [ContainerForProjectFeatures](docs/Model/ContainerForProjectFeatures.md)
- [ContainerForRegisteredWebhooks](docs/Model/ContainerForRegisteredWebhooks.md)
- [ContainerForWebhookIDs](docs/Model/ContainerForWebhookIDs.md)
- [ContainerOfWorkflowSchemeAssociations](docs/Model/ContainerOfWorkflowSchemeAssociations.md)
- [Context](docs/Model/Context.md)
- [ContextForProjectAndIssueType](docs/Model/ContextForProjectAndIssueType.md)
- [ContextScope](docs/Model/ContextScope.md)
- [ContextualConfiguration](docs/Model/ContextualConfiguration.md)
- [ConvertedJQLQueries](docs/Model/ConvertedJQLQueries.md)
- [CreateCustomFieldContext](docs/Model/CreateCustomFieldContext.md)
- [CreateIssueSecuritySchemeDetails](docs/Model/CreateIssueSecuritySchemeDetails.md)
- [CreateNotificationSchemeDetails](docs/Model/CreateNotificationSchemeDetails.md)
- [CreatePriorityDetails](docs/Model/CreatePriorityDetails.md)
- [CreateProjectDetails](docs/Model/CreateProjectDetails.md)
- [CreateResolutionDetails](docs/Model/CreateResolutionDetails.md)
- [CreateUiModificationDetails](docs/Model/CreateUiModificationDetails.md)
- [CreateUpdateRoleRequestBean](docs/Model/CreateUpdateRoleRequestBean.md)
- [CreateWorkflowCondition](docs/Model/CreateWorkflowCondition.md)
- [CreateWorkflowDetails](docs/Model/CreateWorkflowDetails.md)
- [CreateWorkflowStatusDetails](docs/Model/CreateWorkflowStatusDetails.md)
- [CreateWorkflowTransitionDetails](docs/Model/CreateWorkflowTransitionDetails.md)
- [CreateWorkflowTransitionDetailsRules](docs/Model/CreateWorkflowTransitionDetailsRules.md)
- [CreateWorkflowTransitionDetailsScreen](docs/Model/CreateWorkflowTransitionDetailsScreen.md)
- [CreateWorkflowTransitionRule](docs/Model/CreateWorkflowTransitionRule.md)
- [CreateWorkflowTransitionRulesDetails](docs/Model/CreateWorkflowTransitionRulesDetails.md)
- [CreateWorkflowTransitionRulesDetailsConditions](docs/Model/CreateWorkflowTransitionRulesDetailsConditions.md)
- [CreateWorkflowTransitionScreenDetails](docs/Model/CreateWorkflowTransitionScreenDetails.md)
- [CreatedIssue](docs/Model/CreatedIssue.md)
- [CreatedIssueTransition](docs/Model/CreatedIssueTransition.md)
- [CreatedIssueWatchers](docs/Model/CreatedIssueWatchers.md)
- [CreatedIssues](docs/Model/CreatedIssues.md)
- [CustomContextVariable](docs/Model/CustomContextVariable.md)
- [CustomFieldConfigurations](docs/Model/CustomFieldConfigurations.md)
- [CustomFieldContext](docs/Model/CustomFieldContext.md)
- [CustomFieldContextDefaultValue](docs/Model/CustomFieldContextDefaultValue.md)
- [CustomFieldContextDefaultValueCascadingOption](docs/Model/CustomFieldContextDefaultValueCascadingOption.md)
- [CustomFieldContextDefaultValueDate](docs/Model/CustomFieldContextDefaultValueDate.md)
- [CustomFieldContextDefaultValueDateTime](docs/Model/CustomFieldContextDefaultValueDateTime.md)
- [CustomFieldContextDefaultValueFloat](docs/Model/CustomFieldContextDefaultValueFloat.md)
- [CustomFieldContextDefaultValueForgeDateTimeField](docs/Model/CustomFieldContextDefaultValueForgeDateTimeField.md)
- [CustomFieldContextDefaultValueForgeGroupField](docs/Model/CustomFieldContextDefaultValueForgeGroupField.md)
- [CustomFieldContextDefaultValueForgeMultiGroupField](docs/Model/CustomFieldContextDefaultValueForgeMultiGroupField.md)
- [CustomFieldContextDefaultValueForgeMultiStringField](docs/Model/CustomFieldContextDefaultValueForgeMultiStringField.md)
- [CustomFieldContextDefaultValueForgeMultiUserField](docs/Model/CustomFieldContextDefaultValueForgeMultiUserField.md)
- [CustomFieldContextDefaultValueForgeNumberField](docs/Model/CustomFieldContextDefaultValueForgeNumberField.md)
- [CustomFieldContextDefaultValueForgeObjectField](docs/Model/CustomFieldContextDefaultValueForgeObjectField.md)
- [CustomFieldContextDefaultValueForgeStringField](docs/Model/CustomFieldContextDefaultValueForgeStringField.md)
- [CustomFieldContextDefaultValueForgeUserField](docs/Model/CustomFieldContextDefaultValueForgeUserField.md)
- [CustomFieldContextDefaultValueLabels](docs/Model/CustomFieldContextDefaultValueLabels.md)
- [CustomFieldContextDefaultValueMultiUserPicker](docs/Model/CustomFieldContextDefaultValueMultiUserPicker.md)
- [CustomFieldContextDefaultValueMultipleGroupPicker](docs/Model/CustomFieldContextDefaultValueMultipleGroupPicker.md)
- [CustomFieldContextDefaultValueMultipleOption](docs/Model/CustomFieldContextDefaultValueMultipleOption.md)
- [CustomFieldContextDefaultValueMultipleVersionPicker](docs/Model/CustomFieldContextDefaultValueMultipleVersionPicker.md)
- [CustomFieldContextDefaultValueProject](docs/Model/CustomFieldContextDefaultValueProject.md)
- [CustomFieldContextDefaultValueReadOnly](docs/Model/CustomFieldContextDefaultValueReadOnly.md)
- [CustomFieldContextDefaultValueSingleGroupPicker](docs/Model/CustomFieldContextDefaultValueSingleGroupPicker.md)
- [CustomFieldContextDefaultValueSingleOption](docs/Model/CustomFieldContextDefaultValueSingleOption.md)
- [CustomFieldContextDefaultValueSingleVersionPicker](docs/Model/CustomFieldContextDefaultValueSingleVersionPicker.md)
- [CustomFieldContextDefaultValueTextArea](docs/Model/CustomFieldContextDefaultValueTextArea.md)
- [CustomFieldContextDefaultValueTextField](docs/Model/CustomFieldContextDefaultValueTextField.md)
- [CustomFieldContextDefaultValueURL](docs/Model/CustomFieldContextDefaultValueURL.md)
- [CustomFieldContextDefaultValueUpdate](docs/Model/CustomFieldContextDefaultValueUpdate.md)
- [CustomFieldContextOption](docs/Model/CustomFieldContextOption.md)
- [CustomFieldContextProjectMapping](docs/Model/CustomFieldContextProjectMapping.md)
- [CustomFieldContextSingleUserPickerDefaults](docs/Model/CustomFieldContextSingleUserPickerDefaults.md)
- [CustomFieldContextUpdateDetails](docs/Model/CustomFieldContextUpdateDetails.md)
- [CustomFieldCreatedContextOptionsList](docs/Model/CustomFieldCreatedContextOptionsList.md)
- [CustomFieldDefinitionJsonBean](docs/Model/CustomFieldDefinitionJsonBean.md)
- [CustomFieldOption](docs/Model/CustomFieldOption.md)
- [CustomFieldOptionCreate](docs/Model/CustomFieldOptionCreate.md)
- [CustomFieldOptionUpdate](docs/Model/CustomFieldOptionUpdate.md)
- [CustomFieldReplacement](docs/Model/CustomFieldReplacement.md)
- [CustomFieldUpdatedContextOptionsList](docs/Model/CustomFieldUpdatedContextOptionsList.md)
- [CustomFieldValueUpdate](docs/Model/CustomFieldValueUpdate.md)
- [CustomFieldValueUpdateDetails](docs/Model/CustomFieldValueUpdateDetails.md)
- [Dashboard](docs/Model/Dashboard.md)
- [DashboardDetails](docs/Model/DashboardDetails.md)
- [DashboardGadget](docs/Model/DashboardGadget.md)
- [DashboardGadgetPosition](docs/Model/DashboardGadgetPosition.md)
- [DashboardGadgetResponse](docs/Model/DashboardGadgetResponse.md)
- [DashboardGadgetSettings](docs/Model/DashboardGadgetSettings.md)
- [DashboardGadgetSettingsPosition](docs/Model/DashboardGadgetSettingsPosition.md)
- [DashboardGadgetUpdateRequest](docs/Model/DashboardGadgetUpdateRequest.md)
- [DashboardGadgetUpdateRequestPosition](docs/Model/DashboardGadgetUpdateRequestPosition.md)
- [DashboardOwner](docs/Model/DashboardOwner.md)
- [DateRangeFilterRequest](docs/Model/DateRangeFilterRequest.md)
- [DefaultLevelValue](docs/Model/DefaultLevelValue.md)
- [DefaultShareScope](docs/Model/DefaultShareScope.md)
- [DefaultWorkflow](docs/Model/DefaultWorkflow.md)
- [DeleteAndReplaceVersionBean](docs/Model/DeleteAndReplaceVersionBean.md)
- [DeprecatedWorkflow](docs/Model/DeprecatedWorkflow.md)
- [DeprecatedWorkflowScope](docs/Model/DeprecatedWorkflowScope.md)
- [DocumentVersion](docs/Model/DocumentVersion.md)
- [EntityProperty](docs/Model/EntityProperty.md)
- [EntityPropertyDetails](docs/Model/EntityPropertyDetails.md)
- [Error](docs/Model/Error.md)
- [ErrorCollection](docs/Model/ErrorCollection.md)
- [ErrorMessage](docs/Model/ErrorMessage.md)
- [Errors](docs/Model/Errors.md)
- [EventNotification](docs/Model/EventNotification.md)
- [EventNotificationField](docs/Model/EventNotificationField.md)
- [EventNotificationGroup](docs/Model/EventNotificationGroup.md)
- [EventNotificationProjectRole](docs/Model/EventNotificationProjectRole.md)
- [EventNotificationUser](docs/Model/EventNotificationUser.md)
- [ExportArchivedIssuesTaskProgressResponse](docs/Model/ExportArchivedIssuesTaskProgressResponse.md)
- [FailedWebhook](docs/Model/FailedWebhook.md)
- [FailedWebhooks](docs/Model/FailedWebhooks.md)
- [Field](docs/Model/Field.md)
- [FieldChangedClause](docs/Model/FieldChangedClause.md)
- [FieldConfiguration](docs/Model/FieldConfiguration.md)
- [FieldConfigurationDetails](docs/Model/FieldConfigurationDetails.md)
- [FieldConfigurationIssueTypeItem](docs/Model/FieldConfigurationIssueTypeItem.md)
- [FieldConfigurationItem](docs/Model/FieldConfigurationItem.md)
- [FieldConfigurationItemsDetails](docs/Model/FieldConfigurationItemsDetails.md)
- [FieldConfigurationScheme](docs/Model/FieldConfigurationScheme.md)
- [FieldConfigurationSchemeProjectAssociation](docs/Model/FieldConfigurationSchemeProjectAssociation.md)
- [FieldConfigurationSchemeProjects](docs/Model/FieldConfigurationSchemeProjects.md)
- [FieldConfigurationToIssueTypeMapping](docs/Model/FieldConfigurationToIssueTypeMapping.md)
- [FieldDetails](docs/Model/FieldDetails.md)
- [FieldDetailsSchema](docs/Model/FieldDetailsSchema.md)
- [FieldDetailsScope](docs/Model/FieldDetailsScope.md)
- [FieldLastUsed](docs/Model/FieldLastUsed.md)
- [FieldMetadata](docs/Model/FieldMetadata.md)
- [FieldMetadataSchema](docs/Model/FieldMetadataSchema.md)
- [FieldReferenceData](docs/Model/FieldReferenceData.md)
- [FieldUpdateOperation](docs/Model/FieldUpdateOperation.md)
- [FieldValueClause](docs/Model/FieldValueClause.md)
- [FieldWasClause](docs/Model/FieldWasClause.md)
- [Fields](docs/Model/Fields.md)
- [FieldsAssignee](docs/Model/FieldsAssignee.md)
- [FieldsIssueType](docs/Model/FieldsIssueType.md)
- [FieldsPriority](docs/Model/FieldsPriority.md)
- [FieldsStatus](docs/Model/FieldsStatus.md)
- [FieldsTimetracking](docs/Model/FieldsTimetracking.md)
- [Filter](docs/Model/Filter.md)
- [FilterDetails](docs/Model/FilterDetails.md)
- [FilterDetailsOwner](docs/Model/FilterDetailsOwner.md)
- [FilterOwner](docs/Model/FilterOwner.md)
- [FilterSharedUsers](docs/Model/FilterSharedUsers.md)
- [FilterSubscription](docs/Model/FilterSubscription.md)
- [FilterSubscriptionGroup](docs/Model/FilterSubscriptionGroup.md)
- [FilterSubscriptionUser](docs/Model/FilterSubscriptionUser.md)
- [FilterSubscriptions](docs/Model/FilterSubscriptions.md)
- [FilterSubscriptionsList](docs/Model/FilterSubscriptionsList.md)
- [FoundGroup](docs/Model/FoundGroup.md)
- [FoundGroups](docs/Model/FoundGroups.md)
- [FoundUsers](docs/Model/FoundUsers.md)
- [FoundUsersAndGroups](docs/Model/FoundUsersAndGroups.md)
- [FunctionOperand](docs/Model/FunctionOperand.md)
- [FunctionReferenceData](docs/Model/FunctionReferenceData.md)
- [GlobalScopeBean](docs/Model/GlobalScopeBean.md)
- [Group](docs/Model/Group.md)
- [GroupDetails](docs/Model/GroupDetails.md)
- [GroupLabel](docs/Model/GroupLabel.md)
- [GroupName](docs/Model/GroupName.md)
- [GroupUsers](docs/Model/GroupUsers.md)
- [HealthCheckResult](docs/Model/HealthCheckResult.md)
- [Hierarchy](docs/Model/Hierarchy.md)
- [HistoryMetadata](docs/Model/HistoryMetadata.md)
- [HistoryMetadataActor](docs/Model/HistoryMetadataActor.md)
- [HistoryMetadataCause](docs/Model/HistoryMetadataCause.md)
- [HistoryMetadataGenerator](docs/Model/HistoryMetadataGenerator.md)
- [HistoryMetadataParticipant](docs/Model/HistoryMetadataParticipant.md)
- [Icon](docs/Model/Icon.md)
- [IconBean](docs/Model/IconBean.md)
- [IdBean](docs/Model/IdBean.md)
- [IdOrKeyBean](docs/Model/IdOrKeyBean.md)
- [IncludedFields](docs/Model/IncludedFields.md)
- [IssueArchivalSyncRequest](docs/Model/IssueArchivalSyncRequest.md)
- [IssueArchivalSyncResponse](docs/Model/IssueArchivalSyncResponse.md)
- [IssueBean](docs/Model/IssueBean.md)
- [IssueBeanChangelog](docs/Model/IssueBeanChangelog.md)
- [IssueBeanEditmeta](docs/Model/IssueBeanEditmeta.md)
- [IssueBeanOperations](docs/Model/IssueBeanOperations.md)
- [IssueChangelogIds](docs/Model/IssueChangelogIds.md)
- [IssueCommentListRequestBean](docs/Model/IssueCommentListRequestBean.md)
- [IssueContextVariable](docs/Model/IssueContextVariable.md)
- [IssueCreateMetadata](docs/Model/IssueCreateMetadata.md)
- [IssueEntityProperties](docs/Model/IssueEntityProperties.md)
- [IssueEntityPropertiesForMultiUpdate](docs/Model/IssueEntityPropertiesForMultiUpdate.md)
- [IssueEvent](docs/Model/IssueEvent.md)
- [IssueFieldOption](docs/Model/IssueFieldOption.md)
- [IssueFieldOptionConfiguration](docs/Model/IssueFieldOptionConfiguration.md)
- [IssueFieldOptionConfigurationScope](docs/Model/IssueFieldOptionConfigurationScope.md)
- [IssueFieldOptionCreateBean](docs/Model/IssueFieldOptionCreateBean.md)
- [IssueFieldOptionScopeBean](docs/Model/IssueFieldOptionScopeBean.md)
- [IssueFieldOptionScopeBeanGlobal](docs/Model/IssueFieldOptionScopeBeanGlobal.md)
- [IssueFilterForBulkPropertyDelete](docs/Model/IssueFilterForBulkPropertyDelete.md)
- [IssueFilterForBulkPropertySet](docs/Model/IssueFilterForBulkPropertySet.md)
- [IssueLink](docs/Model/IssueLink.md)
- [IssueLinkInwardIssue](docs/Model/IssueLinkInwardIssue.md)
- [IssueLinkOutwardIssue](docs/Model/IssueLinkOutwardIssue.md)
- [IssueLinkType](docs/Model/IssueLinkType.md)
- [IssueLinkTypes](docs/Model/IssueLinkTypes.md)
- [IssueList](docs/Model/IssueList.md)
- [IssueMatches](docs/Model/IssueMatches.md)
- [IssueMatchesForJQL](docs/Model/IssueMatchesForJQL.md)
- [IssuePickerSuggestions](docs/Model/IssuePickerSuggestions.md)
- [IssuePickerSuggestionsIssueType](docs/Model/IssuePickerSuggestionsIssueType.md)
- [IssueSecurityLevelMember](docs/Model/IssueSecurityLevelMember.md)
- [IssueSecurityLevelMemberHolder](docs/Model/IssueSecurityLevelMemberHolder.md)
- [IssueSecuritySchemeToProjectMapping](docs/Model/IssueSecuritySchemeToProjectMapping.md)
- [IssueTransition](docs/Model/IssueTransition.md)
- [IssueTransitionTo](docs/Model/IssueTransitionTo.md)
- [IssueTypeCreateBean](docs/Model/IssueTypeCreateBean.md)
- [IssueTypeDetails](docs/Model/IssueTypeDetails.md)
- [IssueTypeDetailsScope](docs/Model/IssueTypeDetailsScope.md)
- [IssueTypeIds](docs/Model/IssueTypeIds.md)
- [IssueTypeIdsToRemove](docs/Model/IssueTypeIdsToRemove.md)
- [IssueTypeInfo](docs/Model/IssueTypeInfo.md)
- [IssueTypeIssueCreateMetadata](docs/Model/IssueTypeIssueCreateMetadata.md)
- [IssueTypeScheme](docs/Model/IssueTypeScheme.md)
- [IssueTypeSchemeDetails](docs/Model/IssueTypeSchemeDetails.md)
- [IssueTypeSchemeID](docs/Model/IssueTypeSchemeID.md)
- [IssueTypeSchemeMapping](docs/Model/IssueTypeSchemeMapping.md)
- [IssueTypeSchemeProjectAssociation](docs/Model/IssueTypeSchemeProjectAssociation.md)
- [IssueTypeSchemeProjects](docs/Model/IssueTypeSchemeProjects.md)
- [IssueTypeSchemeProjectsIssueTypeScheme](docs/Model/IssueTypeSchemeProjectsIssueTypeScheme.md)
- [IssueTypeSchemeUpdateDetails](docs/Model/IssueTypeSchemeUpdateDetails.md)
- [IssueTypeScreenScheme](docs/Model/IssueTypeScreenScheme.md)
- [IssueTypeScreenSchemeDetails](docs/Model/IssueTypeScreenSchemeDetails.md)
- [IssueTypeScreenSchemeId](docs/Model/IssueTypeScreenSchemeId.md)
- [IssueTypeScreenSchemeItem](docs/Model/IssueTypeScreenSchemeItem.md)
- [IssueTypeScreenSchemeMapping](docs/Model/IssueTypeScreenSchemeMapping.md)
- [IssueTypeScreenSchemeMappingDetails](docs/Model/IssueTypeScreenSchemeMappingDetails.md)
- [IssueTypeScreenSchemeProjectAssociation](docs/Model/IssueTypeScreenSchemeProjectAssociation.md)
- [IssueTypeScreenSchemeUpdateDetails](docs/Model/IssueTypeScreenSchemeUpdateDetails.md)
- [IssueTypeScreenSchemesProjects](docs/Model/IssueTypeScreenSchemesProjects.md)
- [IssueTypeScreenSchemesProjectsIssueTypeScreenScheme](docs/Model/IssueTypeScreenSchemesProjectsIssueTypeScreenScheme.md)
- [IssueTypeToContextMapping](docs/Model/IssueTypeToContextMapping.md)
- [IssueTypeUpdateBean](docs/Model/IssueTypeUpdateBean.md)
- [IssueTypeWithStatus](docs/Model/IssueTypeWithStatus.md)
- [IssueTypeWorkflowMapping](docs/Model/IssueTypeWorkflowMapping.md)
- [IssueTypesWorkflowMapping](docs/Model/IssueTypesWorkflowMapping.md)
- [IssueUpdateDetails](docs/Model/IssueUpdateDetails.md)
- [IssueUpdateDetailsHistoryMetadata](docs/Model/IssueUpdateDetailsHistoryMetadata.md)
- [IssueUpdateDetailsTransition](docs/Model/IssueUpdateDetailsTransition.md)
- [IssueUpdateMetadata](docs/Model/IssueUpdateMetadata.md)
- [IssuesAndJQLQueries](docs/Model/IssuesAndJQLQueries.md)
- [IssuesJqlMetaDataBean](docs/Model/IssuesJqlMetaDataBean.md)
- [IssuesMetaBean](docs/Model/IssuesMetaBean.md)
- [IssuesUpdateBean](docs/Model/IssuesUpdateBean.md)
- [JQLPersonalDataMigrationRequest](docs/Model/JQLPersonalDataMigrationRequest.md)
- [JQLQueryWithUnknownUsers](docs/Model/JQLQueryWithUnknownUsers.md)
- [JQLReferenceData](docs/Model/JQLReferenceData.md)
- [JexpIssues](docs/Model/JexpIssues.md)
- [JexpIssuesJql](docs/Model/JexpIssuesJql.md)
- [JexpJqlIssues](docs/Model/JexpJqlIssues.md)
- [JiraExpressionAnalysis](docs/Model/JiraExpressionAnalysis.md)
- [JiraExpressionComplexity](docs/Model/JiraExpressionComplexity.md)
- [JiraExpressionEvalContextBean](docs/Model/JiraExpressionEvalContextBean.md)
- [JiraExpressionEvalContextBeanIssue](docs/Model/JiraExpressionEvalContextBeanIssue.md)
- [JiraExpressionEvalContextBeanIssues](docs/Model/JiraExpressionEvalContextBeanIssues.md)
- [JiraExpressionEvalContextBeanProject](docs/Model/JiraExpressionEvalContextBeanProject.md)
- [JiraExpressionEvalRequestBean](docs/Model/JiraExpressionEvalRequestBean.md)
- [JiraExpressionEvalRequestBeanContext](docs/Model/JiraExpressionEvalRequestBeanContext.md)
- [JiraExpressionEvaluationMetaDataBean](docs/Model/JiraExpressionEvaluationMetaDataBean.md)
- [JiraExpressionEvaluationMetaDataBeanComplexity](docs/Model/JiraExpressionEvaluationMetaDataBeanComplexity.md)
- [JiraExpressionEvaluationMetaDataBeanIssues](docs/Model/JiraExpressionEvaluationMetaDataBeanIssues.md)
- [JiraExpressionForAnalysis](docs/Model/JiraExpressionForAnalysis.md)
- [JiraExpressionResult](docs/Model/JiraExpressionResult.md)
- [JiraExpressionResultMeta](docs/Model/JiraExpressionResultMeta.md)
- [JiraExpressionValidationError](docs/Model/JiraExpressionValidationError.md)
- [JiraExpressionsAnalysis](docs/Model/JiraExpressionsAnalysis.md)
- [JiraExpressionsComplexityBean](docs/Model/JiraExpressionsComplexityBean.md)
- [JiraExpressionsComplexityBeanBeans](docs/Model/JiraExpressionsComplexityBeanBeans.md)
- [JiraExpressionsComplexityBeanExpensiveOperations](docs/Model/JiraExpressionsComplexityBeanExpensiveOperations.md)
- [JiraExpressionsComplexityBeanPrimitiveValues](docs/Model/JiraExpressionsComplexityBeanPrimitiveValues.md)
- [JiraExpressionsComplexityBeanSteps](docs/Model/JiraExpressionsComplexityBeanSteps.md)
- [JiraExpressionsComplexityValueBean](docs/Model/JiraExpressionsComplexityValueBean.md)
- [JiraStatus](docs/Model/JiraStatus.md)
- [JiraWorkflow](docs/Model/JiraWorkflow.md)
- [JiraWorkflowStatus](docs/Model/JiraWorkflowStatus.md)
- [JqlFunctionPrecomputationBean](docs/Model/JqlFunctionPrecomputationBean.md)
- [JqlFunctionPrecomputationUpdateBean](docs/Model/JqlFunctionPrecomputationUpdateBean.md)
- [JqlFunctionPrecomputationUpdateRequestBean](docs/Model/JqlFunctionPrecomputationUpdateRequestBean.md)
- [JqlQueriesToParse](docs/Model/JqlQueriesToParse.md)
- [JqlQueriesToSanitize](docs/Model/JqlQueriesToSanitize.md)
- [JqlQuery](docs/Model/JqlQuery.md)
- [JqlQueryClause](docs/Model/JqlQueryClause.md)
- [JqlQueryClauseOperand](docs/Model/JqlQueryClauseOperand.md)
- [JqlQueryClauseTimePredicate](docs/Model/JqlQueryClauseTimePredicate.md)
- [JqlQueryField](docs/Model/JqlQueryField.md)
- [JqlQueryFieldEntityProperty](docs/Model/JqlQueryFieldEntityProperty.md)
- [JqlQueryOrderByClause](docs/Model/JqlQueryOrderByClause.md)
- [JqlQueryOrderByClauseElement](docs/Model/JqlQueryOrderByClauseElement.md)
- [JqlQueryToSanitize](docs/Model/JqlQueryToSanitize.md)
- [JqlQueryUnitaryOperand](docs/Model/JqlQueryUnitaryOperand.md)
- [JsonContextVariable](docs/Model/JsonContextVariable.md)
- [JsonNode](docs/Model/JsonNode.md)
- [JsonTypeBean](docs/Model/JsonTypeBean.md)
- [KeywordOperand](docs/Model/KeywordOperand.md)
- [License](docs/Model/License.md)
- [LicenseMetric](docs/Model/LicenseMetric.md)
- [LicensedApplication](docs/Model/LicensedApplication.md)
- [LinkGroup](docs/Model/LinkGroup.md)
- [LinkIssueRequestJsonBean](docs/Model/LinkIssueRequestJsonBean.md)
- [LinkedIssue](docs/Model/LinkedIssue.md)
- [LinkedIssueFields](docs/Model/LinkedIssueFields.md)
- [ListOperand](docs/Model/ListOperand.md)
- [Locale](docs/Model/Locale.md)
- [MoveFieldBean](docs/Model/MoveFieldBean.md)
- [MultiIssueEntityProperties](docs/Model/MultiIssueEntityProperties.md)
- [MultipleCustomFieldValuesUpdate](docs/Model/MultipleCustomFieldValuesUpdate.md)
- [MultipleCustomFieldValuesUpdateDetails](docs/Model/MultipleCustomFieldValuesUpdateDetails.md)
- [NestedResponse](docs/Model/NestedResponse.md)
- [NewUserDetails](docs/Model/NewUserDetails.md)
- [Notification](docs/Model/Notification.md)
- [NotificationEvent](docs/Model/NotificationEvent.md)
- [NotificationEventTemplateEvent](docs/Model/NotificationEventTemplateEvent.md)
- [NotificationRecipients](docs/Model/NotificationRecipients.md)
- [NotificationRecipientsRestrictions](docs/Model/NotificationRecipientsRestrictions.md)
- [NotificationRestrict](docs/Model/NotificationRestrict.md)
- [NotificationScheme](docs/Model/NotificationScheme.md)
- [NotificationSchemeAndProjectMappingJsonBean](docs/Model/NotificationSchemeAndProjectMappingJsonBean.md)
- [NotificationSchemeEvent](docs/Model/NotificationSchemeEvent.md)
- [NotificationSchemeEventDetails](docs/Model/NotificationSchemeEventDetails.md)
- [NotificationSchemeEventDetailsEvent](docs/Model/NotificationSchemeEventDetailsEvent.md)
- [NotificationSchemeEventTypeId](docs/Model/NotificationSchemeEventTypeId.md)
- [NotificationSchemeId](docs/Model/NotificationSchemeId.md)
- [NotificationSchemeNotificationDetails](docs/Model/NotificationSchemeNotificationDetails.md)
- [NotificationSchemeScope](docs/Model/NotificationSchemeScope.md)
- [NotificationTo](docs/Model/NotificationTo.md)
- [OldToNewSecurityLevelMappingsBean](docs/Model/OldToNewSecurityLevelMappingsBean.md)
- [OperationMessage](docs/Model/OperationMessage.md)
- [Operations](docs/Model/Operations.md)
- [OrderOfCustomFieldOptions](docs/Model/OrderOfCustomFieldOptions.md)
- [OrderOfIssueTypes](docs/Model/OrderOfIssueTypes.md)
- [PageBeanChangelog](docs/Model/PageBeanChangelog.md)
- [PageBeanComment](docs/Model/PageBeanComment.md)
- [PageBeanComponentWithIssueCount](docs/Model/PageBeanComponentWithIssueCount.md)
- [PageBeanContext](docs/Model/PageBeanContext.md)
- [PageBeanContextForProjectAndIssueType](docs/Model/PageBeanContextForProjectAndIssueType.md)
- [PageBeanContextualConfiguration](docs/Model/PageBeanContextualConfiguration.md)
- [PageBeanCustomFieldContext](docs/Model/PageBeanCustomFieldContext.md)
- [PageBeanCustomFieldContextDefaultValue](docs/Model/PageBeanCustomFieldContextDefaultValue.md)
- [PageBeanCustomFieldContextOption](docs/Model/PageBeanCustomFieldContextOption.md)
- [PageBeanCustomFieldContextProjectMapping](docs/Model/PageBeanCustomFieldContextProjectMapping.md)
- [PageBeanDashboard](docs/Model/PageBeanDashboard.md)
- [PageBeanField](docs/Model/PageBeanField.md)
- [PageBeanFieldConfigurationDetails](docs/Model/PageBeanFieldConfigurationDetails.md)
- [PageBeanFieldConfigurationIssueTypeItem](docs/Model/PageBeanFieldConfigurationIssueTypeItem.md)
- [PageBeanFieldConfigurationItem](docs/Model/PageBeanFieldConfigurationItem.md)
- [PageBeanFieldConfigurationScheme](docs/Model/PageBeanFieldConfigurationScheme.md)
- [PageBeanFieldConfigurationSchemeProjects](docs/Model/PageBeanFieldConfigurationSchemeProjects.md)
- [PageBeanFilterDetails](docs/Model/PageBeanFilterDetails.md)
- [PageBeanGroupDetails](docs/Model/PageBeanGroupDetails.md)
- [PageBeanIssueFieldOption](docs/Model/PageBeanIssueFieldOption.md)
- [PageBeanIssueSecurityLevelMember](docs/Model/PageBeanIssueSecurityLevelMember.md)
- [PageBeanIssueSecuritySchemeToProjectMapping](docs/Model/PageBeanIssueSecuritySchemeToProjectMapping.md)
- [PageBeanIssueTypeScheme](docs/Model/PageBeanIssueTypeScheme.md)
- [PageBeanIssueTypeSchemeMapping](docs/Model/PageBeanIssueTypeSchemeMapping.md)
- [PageBeanIssueTypeSchemeProjects](docs/Model/PageBeanIssueTypeSchemeProjects.md)
- [PageBeanIssueTypeScreenScheme](docs/Model/PageBeanIssueTypeScreenScheme.md)
- [PageBeanIssueTypeScreenSchemeItem](docs/Model/PageBeanIssueTypeScreenSchemeItem.md)
- [PageBeanIssueTypeScreenSchemesProjects](docs/Model/PageBeanIssueTypeScreenSchemesProjects.md)
- [PageBeanIssueTypeToContextMapping](docs/Model/PageBeanIssueTypeToContextMapping.md)
- [PageBeanJqlFunctionPrecomputationBean](docs/Model/PageBeanJqlFunctionPrecomputationBean.md)
- [PageBeanNotificationScheme](docs/Model/PageBeanNotificationScheme.md)
- [PageBeanNotificationSchemeAndProjectMappingJsonBean](docs/Model/PageBeanNotificationSchemeAndProjectMappingJsonBean.md)
- [PageBeanPriority](docs/Model/PageBeanPriority.md)
- [PageBeanProject](docs/Model/PageBeanProject.md)
- [PageBeanProjectDetails](docs/Model/PageBeanProjectDetails.md)
- [PageBeanResolutionJsonBean](docs/Model/PageBeanResolutionJsonBean.md)
- [PageBeanScreen](docs/Model/PageBeanScreen.md)
- [PageBeanScreenScheme](docs/Model/PageBeanScreenScheme.md)
- [PageBeanScreenWithTab](docs/Model/PageBeanScreenWithTab.md)
- [PageBeanSecurityLevel](docs/Model/PageBeanSecurityLevel.md)
- [PageBeanSecurityLevelMember](docs/Model/PageBeanSecurityLevelMember.md)
- [PageBeanSecuritySchemeWithProjects](docs/Model/PageBeanSecuritySchemeWithProjects.md)
- [PageBeanString](docs/Model/PageBeanString.md)
- [PageBeanUiModificationDetails](docs/Model/PageBeanUiModificationDetails.md)
- [PageBeanUser](docs/Model/PageBeanUser.md)
- [PageBeanUserDetails](docs/Model/PageBeanUserDetails.md)
- [PageBeanUserKey](docs/Model/PageBeanUserKey.md)
- [PageBeanVersion](docs/Model/PageBeanVersion.md)
- [PageBeanWebhook](docs/Model/PageBeanWebhook.md)
- [PageBeanWorkflow](docs/Model/PageBeanWorkflow.md)
- [PageBeanWorkflowScheme](docs/Model/PageBeanWorkflowScheme.md)
- [PageBeanWorkflowTransitionRules](docs/Model/PageBeanWorkflowTransitionRules.md)
- [PageOfChangelogs](docs/Model/PageOfChangelogs.md)
- [PageOfComments](docs/Model/PageOfComments.md)
- [PageOfDashboards](docs/Model/PageOfDashboards.md)
- [PageOfStatuses](docs/Model/PageOfStatuses.md)
- [PageOfWorklogs](docs/Model/PageOfWorklogs.md)
- [PagedListUserDetailsApplicationUser](docs/Model/PagedListUserDetailsApplicationUser.md)
- [PaginatedResponseComment](docs/Model/PaginatedResponseComment.md)
- [ParsedJqlQueries](docs/Model/ParsedJqlQueries.md)
- [ParsedJqlQuery](docs/Model/ParsedJqlQuery.md)
- [ParsedJqlQueryStructure](docs/Model/ParsedJqlQueryStructure.md)
- [PermissionGrant](docs/Model/PermissionGrant.md)
- [PermissionGrantHolder](docs/Model/PermissionGrantHolder.md)
- [PermissionGrants](docs/Model/PermissionGrants.md)
- [PermissionHolder](docs/Model/PermissionHolder.md)
- [PermissionScheme](docs/Model/PermissionScheme.md)
- [PermissionSchemeScope](docs/Model/PermissionSchemeScope.md)
- [PermissionSchemes](docs/Model/PermissionSchemes.md)
- [Permissions](docs/Model/Permissions.md)
- [PermissionsKeysBean](docs/Model/PermissionsKeysBean.md)
- [PermittedProjects](docs/Model/PermittedProjects.md)
- [Priority](docs/Model/Priority.md)
- [PriorityId](docs/Model/PriorityId.md)
- [Project](docs/Model/Project.md)
- [ProjectAndIssueTypePair](docs/Model/ProjectAndIssueTypePair.md)
- [ProjectArchivedBy](docs/Model/ProjectArchivedBy.md)
- [ProjectAvatarUrls](docs/Model/ProjectAvatarUrls.md)
- [ProjectAvatars](docs/Model/ProjectAvatars.md)
- [ProjectCategory](docs/Model/ProjectCategory.md)
- [ProjectComponent](docs/Model/ProjectComponent.md)
- [ProjectComponentAssignee](docs/Model/ProjectComponentAssignee.md)
- [ProjectComponentLead](docs/Model/ProjectComponentLead.md)
- [ProjectComponentRealAssignee](docs/Model/ProjectComponentRealAssignee.md)
- [ProjectDeletedBy](docs/Model/ProjectDeletedBy.md)
- [ProjectDetails](docs/Model/ProjectDetails.md)
- [ProjectDetailsProjectCategory](docs/Model/ProjectDetailsProjectCategory.md)
- [ProjectEmailAddress](docs/Model/ProjectEmailAddress.md)
- [ProjectFeature](docs/Model/ProjectFeature.md)
- [ProjectFeatureState](docs/Model/ProjectFeatureState.md)
- [ProjectId](docs/Model/ProjectId.md)
- [ProjectIdentifierBean](docs/Model/ProjectIdentifierBean.md)
- [ProjectIdentifiers](docs/Model/ProjectIdentifiers.md)
- [ProjectIds](docs/Model/ProjectIds.md)
- [ProjectInsight](docs/Model/ProjectInsight.md)
- [ProjectIssueCreateMetadata](docs/Model/ProjectIssueCreateMetadata.md)
- [ProjectIssueCreateMetadataAvatarUrls](docs/Model/ProjectIssueCreateMetadataAvatarUrls.md)
- [ProjectIssueSecurityLevels](docs/Model/ProjectIssueSecurityLevels.md)
- [ProjectIssueTypeHierarchy](docs/Model/ProjectIssueTypeHierarchy.md)
- [ProjectIssueTypeMapping](docs/Model/ProjectIssueTypeMapping.md)
- [ProjectIssueTypeMappings](docs/Model/ProjectIssueTypeMappings.md)
- [ProjectIssueTypes](docs/Model/ProjectIssueTypes.md)
- [ProjectIssueTypesHierarchyLevel](docs/Model/ProjectIssueTypesHierarchyLevel.md)
- [ProjectLandingPageInfo](docs/Model/ProjectLandingPageInfo.md)
- [ProjectLead](docs/Model/ProjectLead.md)
- [ProjectPermissions](docs/Model/ProjectPermissions.md)
- [ProjectProjectCategory](docs/Model/ProjectProjectCategory.md)
- [ProjectRole](docs/Model/ProjectRole.md)
- [ProjectRoleActorsUpdateBean](docs/Model/ProjectRoleActorsUpdateBean.md)
- [ProjectRoleDetails](docs/Model/ProjectRoleDetails.md)
- [ProjectRoleGroup](docs/Model/ProjectRoleGroup.md)
- [ProjectRoleScope](docs/Model/ProjectRoleScope.md)
- [ProjectRoleUser](docs/Model/ProjectRoleUser.md)
- [ProjectScopeBean](docs/Model/ProjectScopeBean.md)
- [ProjectType](docs/Model/ProjectType.md)
- [PropertyKey](docs/Model/PropertyKey.md)
- [PropertyKeys](docs/Model/PropertyKeys.md)
- [PublishDraftWorkflowScheme](docs/Model/PublishDraftWorkflowScheme.md)
- [PublishedWorkflowId](docs/Model/PublishedWorkflowId.md)
- [RegisteredWebhook](docs/Model/RegisteredWebhook.md)
- [RemoteIssueLink](docs/Model/RemoteIssueLink.md)
- [RemoteIssueLinkApplication](docs/Model/RemoteIssueLinkApplication.md)
- [RemoteIssueLinkIdentifies](docs/Model/RemoteIssueLinkIdentifies.md)
- [RemoteIssueLinkObject](docs/Model/RemoteIssueLinkObject.md)
- [RemoteIssueLinkRequest](docs/Model/RemoteIssueLinkRequest.md)
- [RemoteIssueLinkRequestApplication](docs/Model/RemoteIssueLinkRequestApplication.md)
- [RemoteObject](docs/Model/RemoteObject.md)
- [RemoteObjectIcon](docs/Model/RemoteObjectIcon.md)
- [RemoteObjectStatus](docs/Model/RemoteObjectStatus.md)
- [RemoveOptionFromIssuesResult](docs/Model/RemoveOptionFromIssuesResult.md)
- [RemoveOptionFromIssuesResultErrors](docs/Model/RemoveOptionFromIssuesResultErrors.md)
- [ReorderIssuePriorities](docs/Model/ReorderIssuePriorities.md)
- [ReorderIssueResolutionsRequest](docs/Model/ReorderIssueResolutionsRequest.md)
- [Resolution](docs/Model/Resolution.md)
- [ResolutionId](docs/Model/ResolutionId.md)
- [ResolutionJsonBean](docs/Model/ResolutionJsonBean.md)
- [RestrictedPermission](docs/Model/RestrictedPermission.md)
- [RichText](docs/Model/RichText.md)
- [RoleActor](docs/Model/RoleActor.md)
- [RuleConfiguration](docs/Model/RuleConfiguration.md)
- [SanitizedJqlQueries](docs/Model/SanitizedJqlQueries.md)
- [SanitizedJqlQuery](docs/Model/SanitizedJqlQuery.md)
- [SanitizedJqlQueryErrors](docs/Model/SanitizedJqlQueryErrors.md)
- [Scope](docs/Model/Scope.md)
- [ScopeProject](docs/Model/ScopeProject.md)
- [Screen](docs/Model/Screen.md)
- [ScreenDetails](docs/Model/ScreenDetails.md)
- [ScreenScheme](docs/Model/ScreenScheme.md)
- [ScreenSchemeDetails](docs/Model/ScreenSchemeDetails.md)
- [ScreenSchemeDetailsScreens](docs/Model/ScreenSchemeDetailsScreens.md)
- [ScreenSchemeId](docs/Model/ScreenSchemeId.md)
- [ScreenSchemeIssueTypeScreenSchemes](docs/Model/ScreenSchemeIssueTypeScreenSchemes.md)
- [ScreenSchemeScreens](docs/Model/ScreenSchemeScreens.md)
- [ScreenScope](docs/Model/ScreenScope.md)
- [ScreenTypes](docs/Model/ScreenTypes.md)
- [ScreenWithTab](docs/Model/ScreenWithTab.md)
- [ScreenWithTabTab](docs/Model/ScreenWithTabTab.md)
- [ScreenableField](docs/Model/ScreenableField.md)
- [ScreenableTab](docs/Model/ScreenableTab.md)
- [SearchAutoCompleteFilter](docs/Model/SearchAutoCompleteFilter.md)
- [SearchRequestBean](docs/Model/SearchRequestBean.md)
- [SearchResults](docs/Model/SearchResults.md)
- [SecurityLevel](docs/Model/SecurityLevel.md)
- [SecurityLevelMember](docs/Model/SecurityLevelMember.md)
- [SecurityLevelMemberHolder](docs/Model/SecurityLevelMemberHolder.md)
- [SecurityScheme](docs/Model/SecurityScheme.md)
- [SecuritySchemeId](docs/Model/SecuritySchemeId.md)
- [SecuritySchemeLevelBean](docs/Model/SecuritySchemeLevelBean.md)
- [SecuritySchemeLevelMemberBean](docs/Model/SecuritySchemeLevelMemberBean.md)
- [SecuritySchemeMembersRequest](docs/Model/SecuritySchemeMembersRequest.md)
- [SecuritySchemeWithProjects](docs/Model/SecuritySchemeWithProjects.md)
- [SecuritySchemes](docs/Model/SecuritySchemes.md)
- [ServerInformation](docs/Model/ServerInformation.md)
- [ServiceManagementNavigationInfo](docs/Model/ServiceManagementNavigationInfo.md)
- [SetDefaultLevelsRequest](docs/Model/SetDefaultLevelsRequest.md)
- [SetDefaultPriorityRequest](docs/Model/SetDefaultPriorityRequest.md)
- [SetDefaultResolutionRequest](docs/Model/SetDefaultResolutionRequest.md)
- [SharePermission](docs/Model/SharePermission.md)
- [SharePermissionGroup](docs/Model/SharePermissionGroup.md)
- [SharePermissionInputBean](docs/Model/SharePermissionInputBean.md)
- [SharePermissionProject](docs/Model/SharePermissionProject.md)
- [SharePermissionRole](docs/Model/SharePermissionRole.md)
- [SharePermissionUser](docs/Model/SharePermissionUser.md)
- [SimpleApplicationPropertyBean](docs/Model/SimpleApplicationPropertyBean.md)
- [SimpleErrorCollection](docs/Model/SimpleErrorCollection.md)
- [SimpleLink](docs/Model/SimpleLink.md)
- [SimpleListWrapperApplicationRole](docs/Model/SimpleListWrapperApplicationRole.md)
- [SimpleListWrapperGroupName](docs/Model/SimpleListWrapperGroupName.md)
- [SimplifiedHierarchyLevel](docs/Model/SimplifiedHierarchyLevel.md)
- [SoftwareNavigationInfo](docs/Model/SoftwareNavigationInfo.md)
- [Status](docs/Model/Status.md)
- [StatusCategory](docs/Model/StatusCategory.md)
- [StatusCreate](docs/Model/StatusCreate.md)
- [StatusCreateRequest](docs/Model/StatusCreateRequest.md)
- [StatusDetails](docs/Model/StatusDetails.md)
- [StatusDetailsStatusCategory](docs/Model/StatusDetailsStatusCategory.md)
- [StatusIcon](docs/Model/StatusIcon.md)
- [StatusLayoutUpdate](docs/Model/StatusLayoutUpdate.md)
- [StatusMapping](docs/Model/StatusMapping.md)
- [StatusMappingDTO](docs/Model/StatusMappingDTO.md)
- [StatusMigration](docs/Model/StatusMigration.md)
- [StatusReferenceAndPort](docs/Model/StatusReferenceAndPort.md)
- [StatusScope](docs/Model/StatusScope.md)
- [StatusUpdate](docs/Model/StatusUpdate.md)
- [StatusUpdateRequest](docs/Model/StatusUpdateRequest.md)
- [SuggestedIssue](docs/Model/SuggestedIssue.md)
- [SystemAvatars](docs/Model/SystemAvatars.md)
- [TaskProgressBeanObject](docs/Model/TaskProgressBeanObject.md)
- [TaskProgressBeanRemoveOptionFromIssuesResult](docs/Model/TaskProgressBeanRemoveOptionFromIssuesResult.md)
- [TaskProgressBeanRemoveOptionFromIssuesResultResult](docs/Model/TaskProgressBeanRemoveOptionFromIssuesResultResult.md)
- [TimeTrackingConfiguration](docs/Model/TimeTrackingConfiguration.md)
- [TimeTrackingDetails](docs/Model/TimeTrackingDetails.md)
- [TimeTrackingProvider](docs/Model/TimeTrackingProvider.md)
- [Transition](docs/Model/Transition.md)
- [TransitionScreenDetails](docs/Model/TransitionScreenDetails.md)
- [TransitionUpdateDTO](docs/Model/TransitionUpdateDTO.md)
- [Transitions](docs/Model/Transitions.md)
- [UiModificationContextDetails](docs/Model/UiModificationContextDetails.md)
- [UiModificationDetails](docs/Model/UiModificationDetails.md)
- [UiModificationIdentifiers](docs/Model/UiModificationIdentifiers.md)
- [UnrestrictedUserEmail](docs/Model/UnrestrictedUserEmail.md)
- [UpdateCustomFieldDetails](docs/Model/UpdateCustomFieldDetails.md)
- [UpdateDefaultScreenScheme](docs/Model/UpdateDefaultScreenScheme.md)
- [UpdateFieldConfigurationSchemeDetails](docs/Model/UpdateFieldConfigurationSchemeDetails.md)
- [UpdateIssueSecurityLevelDetails](docs/Model/UpdateIssueSecurityLevelDetails.md)
- [UpdateIssueSecuritySchemeRequestBean](docs/Model/UpdateIssueSecuritySchemeRequestBean.md)
- [UpdateNotificationSchemeDetails](docs/Model/UpdateNotificationSchemeDetails.md)
- [UpdatePriorityDetails](docs/Model/UpdatePriorityDetails.md)
- [UpdateProjectDetails](docs/Model/UpdateProjectDetails.md)
- [UpdateResolutionDetails](docs/Model/UpdateResolutionDetails.md)
- [UpdateScreenDetails](docs/Model/UpdateScreenDetails.md)
- [UpdateScreenSchemeDetails](docs/Model/UpdateScreenSchemeDetails.md)
- [UpdateScreenSchemeDetailsScreens](docs/Model/UpdateScreenSchemeDetailsScreens.md)
- [UpdateScreenTypes](docs/Model/UpdateScreenTypes.md)
- [UpdateUiModificationDetails](docs/Model/UpdateUiModificationDetails.md)
- [UpdateUserToGroupBean](docs/Model/UpdateUserToGroupBean.md)
- [UpdatedProjectCategory](docs/Model/UpdatedProjectCategory.md)
- [User](docs/Model/User.md)
- [UserApplicationRoles](docs/Model/UserApplicationRoles.md)
- [UserAvatarUrls](docs/Model/UserAvatarUrls.md)
- [UserBean](docs/Model/UserBean.md)
- [UserBeanAvatarUrls](docs/Model/UserBeanAvatarUrls.md)
- [UserContextVariable](docs/Model/UserContextVariable.md)
- [UserDetails](docs/Model/UserDetails.md)
- [UserFilter](docs/Model/UserFilter.md)
- [UserGroups](docs/Model/UserGroups.md)
- [UserKey](docs/Model/UserKey.md)
- [UserList](docs/Model/UserList.md)
- [UserMigrationBean](docs/Model/UserMigrationBean.md)
- [UserPermission](docs/Model/UserPermission.md)
- [UserPickerUser](docs/Model/UserPickerUser.md)
- [ValidationOptionsForCreate](docs/Model/ValidationOptionsForCreate.md)
- [ValidationOptionsForUpdate](docs/Model/ValidationOptionsForUpdate.md)
- [ValueOperand](docs/Model/ValueOperand.md)
- [Version](docs/Model/Version.md)
- [VersionIssueCounts](docs/Model/VersionIssueCounts.md)
- [VersionIssuesStatus](docs/Model/VersionIssuesStatus.md)
- [VersionIssuesStatusForFixVersion](docs/Model/VersionIssuesStatusForFixVersion.md)
- [VersionMoveBean](docs/Model/VersionMoveBean.md)
- [VersionUnresolvedIssuesCount](docs/Model/VersionUnresolvedIssuesCount.md)
- [VersionUsageInCustomField](docs/Model/VersionUsageInCustomField.md)
- [Visibility](docs/Model/Visibility.md)
- [Votes](docs/Model/Votes.md)
- [WarningCollection](docs/Model/WarningCollection.md)
- [Watchers](docs/Model/Watchers.md)
- [Webhook](docs/Model/Webhook.md)
- [WebhookDetails](docs/Model/WebhookDetails.md)
- [WebhookRegistrationDetails](docs/Model/WebhookRegistrationDetails.md)
- [WebhooksExpirationDate](docs/Model/WebhooksExpirationDate.md)
- [WorkManagementNavigationInfo](docs/Model/WorkManagementNavigationInfo.md)
- [Workflow](docs/Model/Workflow.md)
- [WorkflowCapabilities](docs/Model/WorkflowCapabilities.md)
- [WorkflowCompoundCondition](docs/Model/WorkflowCompoundCondition.md)
- [WorkflowCondition](docs/Model/WorkflowCondition.md)
- [WorkflowCreate](docs/Model/WorkflowCreate.md)
- [WorkflowCreateRequest](docs/Model/WorkflowCreateRequest.md)
- [WorkflowCreateResponse](docs/Model/WorkflowCreateResponse.md)
- [WorkflowCreateValidateRequest](docs/Model/WorkflowCreateValidateRequest.md)
- [WorkflowElementReference](docs/Model/WorkflowElementReference.md)
- [WorkflowIDs](docs/Model/WorkflowIDs.md)
- [WorkflowId](docs/Model/WorkflowId.md)
- [WorkflowLayout](docs/Model/WorkflowLayout.md)
- [WorkflowOperations](docs/Model/WorkflowOperations.md)
- [WorkflowReadRequest](docs/Model/WorkflowReadRequest.md)
- [WorkflowReadResponse](docs/Model/WorkflowReadResponse.md)
- [WorkflowReferenceStatus](docs/Model/WorkflowReferenceStatus.md)
- [WorkflowRuleConfiguration](docs/Model/WorkflowRuleConfiguration.md)
- [WorkflowRules](docs/Model/WorkflowRules.md)
- [WorkflowRulesSearch](docs/Model/WorkflowRulesSearch.md)
- [WorkflowRulesSearchDetails](docs/Model/WorkflowRulesSearchDetails.md)
- [WorkflowScheme](docs/Model/WorkflowScheme.md)
- [WorkflowSchemeAssociations](docs/Model/WorkflowSchemeAssociations.md)
- [WorkflowSchemeAssociationsWorkflowScheme](docs/Model/WorkflowSchemeAssociationsWorkflowScheme.md)
- [WorkflowSchemeIdName](docs/Model/WorkflowSchemeIdName.md)
- [WorkflowSchemeLastModifiedUser](docs/Model/WorkflowSchemeLastModifiedUser.md)
- [WorkflowSchemeProjectAssociation](docs/Model/WorkflowSchemeProjectAssociation.md)
- [WorkflowScope](docs/Model/WorkflowScope.md)
- [WorkflowSimpleCondition](docs/Model/WorkflowSimpleCondition.md)
- [WorkflowStatus](docs/Model/WorkflowStatus.md)
- [WorkflowStatusAndPort](docs/Model/WorkflowStatusAndPort.md)
- [WorkflowStatusLayout](docs/Model/WorkflowStatusLayout.md)
- [WorkflowStatusUpdate](docs/Model/WorkflowStatusUpdate.md)
- [WorkflowTransition](docs/Model/WorkflowTransition.md)
- [WorkflowTransitionProperty](docs/Model/WorkflowTransitionProperty.md)
- [WorkflowTransitionRule](docs/Model/WorkflowTransitionRule.md)
- [WorkflowTransitionRules](docs/Model/WorkflowTransitionRules.md)
- [WorkflowTransitionRulesDetails](docs/Model/WorkflowTransitionRulesDetails.md)
- [WorkflowTransitionRulesUpdate](docs/Model/WorkflowTransitionRulesUpdate.md)
- [WorkflowTransitionRulesUpdateErrorDetails](docs/Model/WorkflowTransitionRulesUpdateErrorDetails.md)
- [WorkflowTransitionRulesUpdateErrors](docs/Model/WorkflowTransitionRulesUpdateErrors.md)
- [WorkflowTransitions](docs/Model/WorkflowTransitions.md)
- [WorkflowTrigger](docs/Model/WorkflowTrigger.md)
- [WorkflowUpdate](docs/Model/WorkflowUpdate.md)
- [WorkflowUpdateRequest](docs/Model/WorkflowUpdateRequest.md)
- [WorkflowUpdateResponse](docs/Model/WorkflowUpdateResponse.md)
- [WorkflowUpdateValidateRequestBean](docs/Model/WorkflowUpdateValidateRequestBean.md)
- [WorkflowUsages](docs/Model/WorkflowUsages.md)
- [WorkflowValidationError](docs/Model/WorkflowValidationError.md)
- [WorkflowValidationErrorList](docs/Model/WorkflowValidationErrorList.md)
- [WorkflowsWithTransitionRulesDetails](docs/Model/WorkflowsWithTransitionRulesDetails.md)
- [Worklog](docs/Model/Worklog.md)
- [WorklogAuthor](docs/Model/WorklogAuthor.md)
- [WorklogIdsRequestBean](docs/Model/WorklogIdsRequestBean.md)
- [WorklogUpdateAuthor](docs/Model/WorklogUpdateAuthor.md)
- [WorklogVisibility](docs/Model/WorklogVisibility.md)

## Authorization

### OAuth2

- **Type**: `OAuth`
- **Flow**: `accessCode`
- **Authorization URL**: `https://auth.atlassian.com/authorize`
- **Scopes**: 
    - **delete:async-task:jira**: Delete asynchronous task.
    - **delete:attachment:jira**: Delete issue attachments.
    - **delete:avatar:jira**: Delete system and custom avatars.
    - **delete:comment.property:jira**: Delete issue comment properties.
    - **delete:comment:jira**: Delete issue comments.
    - **delete:dashboard.property:jira**: Delete dashboard properties.
    - **delete:dashboard:jira**: Delete dashboards.
    - **delete:field-configuration-scheme:jira**: Delete field configuration schemes.
    - **delete:field-configuration:jira**: Delete field configurations.
    - **delete:field.option:jira**: Delete field options.
    - **delete:field:jira**: Delete fields.
    - **delete:filter.column:jira**: Delete filter columns.
    - **delete:filter:jira**: Delete filters.
    - **delete:group:jira**: Delete user groups.
    - **delete:issue-link-type:jira**: Delete issue link types.
    - **delete:issue-link:jira**: Delete issue links.
    - **delete:issue-type-scheme:jira**: Delete issue type schemes.
    - **delete:issue-type-screen-scheme:jira**: Delete issue type screen schemes.
    - **delete:issue-type.property:jira**: Delete issue type properties.
    - **delete:issue-type:jira**: Delete issue types.
    - **delete:issue-worklog.property:jira**: Delete issue worklog properties.
    - **delete:issue-worklog:jira**: Delete issue worklogs.
    - **delete:issue.property:jira**: Delete issue properties.
    - **delete:issue.remote-link:jira**: Delete issue remote links.
    - **delete:issue:jira**: Delete issues.
    - **delete:permission-scheme:jira**: Delete permission schemes.
    - **delete:permission:jira**: Delete permissions.
    - **delete:project-category:jira**: Delete project categories.
    - **delete:project-role:jira**: Delete project roles.
    - **delete:project-version:jira**: Delete project versions.
    - **delete:project.avatar:jira**: Delete project avatars.
    - **delete:project.component:jira**: Delete project components.
    - **delete:project.property:jira**: Delete project properties.
    - **delete:project:jira**: Delete projects and their details, such as issue types, project lead, and avatars.
    - **delete:screen-scheme:jira**: Delete screen schemes.
    - **delete:screen-tab:jira**: Delete screen tabs.
    - **delete:screen:jira**: Delete screens.
    - **delete:screenable-field:jira**: Delete screenable fields.
    - **delete:user-configuration:jira**: Delete user configurations.
    - **delete:user.property:jira**: Delete user properties.
    - **delete:webhook:jira**: Delete webhooks.
    - **delete:workflow-scheme:jira**: Delete workflow schemes.
    - **delete:workflow.property:jira**: Delete workflow properties.
    - **delete:workflow:jira**: Delete workflows.
    - **manage:jira-configuration**: Configure Jira settings that require the Jira administrators permission, for example, create projects and custom fields, view workflows, manage issue link types.
    - **manage:jira-project**: Create and edit project settings and create new project-level objects, for example, versions, components.
    - **manage:jira-webhook**: Manage Jira webhooks. Enables an OAuth app to register and unregister dynamic webhooks in Jira. It also provides for fetching of registered webhooks.
    - **read:application-role:jira**: View application roles.
    - **read:attachment:jira**: View issue attachments.
    - **read:audit-log:jira**: View audit logs.
    - **read:avatar:jira**: View system and custom avatars.
    - **read:comment.property:jira**: View issue comment properties.
    - **read:comment:jira**: View issue comments.
    - **read:custom-field-contextual-configuration:jira**: Read custom field contextual configurations.
    - **read:dashboard.property:jira**: View dashboard properties.
    - **read:dashboard:jira**: View dashboards.
    - **read:field-configuration-scheme:jira**: View field configuration schemes.
    - **read:field-configuration:jira**: Read field configurations.
    - **read:field.default-value:jira**: View field default values.
    - **read:field.option:jira**: View field options.
    - **read:field.options:jira**: Read field options.
    - **read:field:jira**: View fields.
    - **read:filter.column:jira**: View filter columns.
    - **read:filter.default-share-scope:jira**: View filter default share scopes.
    - **read:filter:jira**: View filters.
    - **read:group:jira**: View user groups.
    - **read:instance-configuration:jira**: View instance configurations.
    - **read:issue-details:jira**: View issue details.
    - **read:issue-event:jira**: Read issue events.
    - **read:issue-field-values:jira**: View issue field valueses.
    - **read:issue-link-type:jira**: View issue link types.
    - **read:issue-link:jira**: View issue links.
    - **read:issue-meta:jira**: View issue meta.
    - **read:issue-security-level:jira**: View issue security levels.
    - **read:issue-security-scheme:jira**: View issue security schemes.
    - **read:issue-status:jira**: View issue statuses.
    - **read:issue-type-hierarchy:jira**: Read issue type hierarchies.
    - **read:issue-type-scheme:jira**: View issue type schemes.
    - **read:issue-type-screen-scheme:jira**: View issue type screen schemes.
    - **read:issue-type.property:jira**: View issue type properties.
    - **read:issue-type:jira**: View issue types.
    - **read:issue-worklog.property:jira**: View issue worklog properties.
    - **read:issue-worklog:jira**: View issue worklogs.
    - **read:issue.changelog:jira**: View issue changelogs.
    - **read:issue.property:jira**: View issue properties.
    - **read:issue.remote-link:jira**: View issue remote links.
    - **read:issue.time-tracking:jira**: View issue time trackings.
    - **read:issue.transition:jira**: View issue transitions.
    - **read:issue.vote:jira**: View issue votes.
    - **read:issue.votes:jira**: View issue voteses.
    - **read:issue.watcher:jira**: View issue watchers.
    - **read:issue:jira**: View issues.
    - **read:jira-expressions:jira**: View jira expressions.
    - **read:jira-user**: View user information in Jira that you have access to, including usernames, email addresses, and avatars.
    - **read:jira-work**: Read project and issue data. Search for issues and objects associated with issues (such as attachments and worklogs).
    - **read:jql:jira**: View JQL.
    - **read:label:jira**: View labels.
    - **read:license:jira**: View licenses.
    - **read:notification-scheme:jira**: View notification schemes.
    - **read:permission-scheme:jira**: View permission schemes.
    - **read:permission:jira**: View permissions.
    - **read:priority:jira**: View priorities.
    - **read:project-category:jira**: View project categories.
    - **read:project-role:jira**: View project roles.
    - **read:project-type:jira**: View project types.
    - **read:project-version:jira**: View project versions.
    - **read:project.avatar:jira**: Read project avatars.
    - **read:project.component:jira**: View project components.
    - **read:project.email:jira**: View project emails.
    - **read:project.feature:jira**: Read project features.
    - **read:project.property:jira**: View project properties.
    - **read:project:jira**: View projects.
    - **read:resolution:jira**: View resolutions.
    - **read:role:jira**: View roles.
    - **read:screen-field:jira**: View screen fields.
    - **read:screen-scheme:jira**: View screen schemes.
    - **read:screen-tab:jira**: View screen tabs.
    - **read:screen:jira**: View screens.
    - **read:screenable-field:jira**: View screenable fields.
    - **read:status:jira**: View statuses.
    - **read:user-configuration:jira**: View user configurations.
    - **read:user.columns:jira**: View user columnses.
    - **read:user.property:jira**: View user properties.
    - **read:user:jira**: View users.
    - **read:webhook:jira**: View webhooks.
    - **read:workflow-scheme:jira**: View workflow schemes.
    - **read:workflow.property:jira**: View workflow properties.
    - **read:workflow:jira**: View workflows.
    - **send:notification:jira**: Send notifications.
    - **validate:jql:jira**: Validate JQL.
    - **write:attachment:jira**: Create and update issue attachments.
    - **write:avatar:jira**: Create and update system and custom avatars.
    - **write:comment.property:jira**: Create and update issue comment properties.
    - **write:comment:jira**: Create and update issue comments.
    - **write:custom-field-contextual-configuration:jira**: Save custom field contextual configurations.
    - **write:dashboard.property:jira**: Create and update dashboard properties.
    - **write:dashboard:jira**: Create and update dashboards.
    - **write:field-configuration-scheme:jira**: Create and update field configuration schemes.
    - **write:field-configuration:jira**: Save field configurations.
    - **write:field.default-value:jira**: Create and update field default values.
    - **write:field.option:jira**: Create and update field options.
    - **write:field:jira**: Create and update fields.
    - **write:filter.column:jira**: Create and update filter columns.
    - **write:filter.default-share-scope:jira**: Create and update filter default share scopes.
    - **write:filter:jira**: Create and update filters.
    - **write:group:jira**: Create and update user groups.
    - **write:instance-configuration:jira**: Create and update instance configurations.
    - **write:issue-link-type:jira**: Create and update issue link types.
    - **write:issue-link:jira**: Create and update issue links.
    - **write:issue-type-scheme:jira**: Create and update issue type schemes.
    - **write:issue-type-screen-scheme:jira**: Create and update issue type screen schemes.
    - **write:issue-type.property:jira**: Create and update issue type properties.
    - **write:issue-type:jira**: Create and update issue types.
    - **write:issue-worklog.property:jira**: Create and update issue worklog properties.
    - **write:issue-worklog:jira**: Create and update issue worklogs.
    - **write:issue.property:jira**: Create and update issue properties.
    - **write:issue.remote-link:jira**: Create and update issue remote links.
    - **write:issue.time-tracking:jira**: Create and update issue time trackings.
    - **write:issue.vote:jira**: Create and update issue votes.
    - **write:issue.watcher:jira**: Create and update issue watchers.
    - **write:issue:jira**: Create and update issues.
    - **write:jira-work**: Create and edit issues in Jira, post comments, create worklogs, and delete issues.
    - **write:permission-scheme:jira**: Create and update permission schemes.
    - **write:permission:jira**: Create and update permissions.
    - **write:project-category:jira**: Create and update project categories.
    - **write:project-role:jira**: Create and update project roles.
    - **write:project-version:jira**: Create and update project versions.
    - **write:project.avatar:jira**: Create and update project avatars.
    - **write:project.component:jira**: Create and update project components.
    - **write:project.email:jira**: Create and update project emails.
    - **write:project.feature:jira**: Save project features.
    - **write:project.property:jira**: Create and update project properties.
    - **write:project:jira**: Create and update projects.
    - **write:screen-scheme:jira**: Create and update screen schemes.
    - **write:screen-tab:jira**: Create and update screen tabs.
    - **write:screen:jira**: Create and update screens.
    - **write:screenable-field:jira**: Create and update screenable fields.
    - **write:user-configuration:jira**: Create and update user configurations.
    - **write:user.property:jira**: Create and update user properties.
    - **write:webhook:jira**: Create and update webhooks.
    - **write:workflow-scheme:jira**: Create and update workflow schemes.
    - **write:workflow.property:jira**: Create and update workflow properties.
    - **write:workflow:jira**: Create and update workflows.


### basicAuth

- **Type**: HTTP basic authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

ecosystem@atlassian.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1001.0.0-SNAPSHOT`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
