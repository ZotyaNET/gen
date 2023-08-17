# OpenAPI\Client\WorkflowTransitionRulesApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteWorkflowTransitionRuleConfigurations()**](WorkflowTransitionRulesApi.md#deleteWorkflowTransitionRuleConfigurations) | **PUT** /rest/api/2/workflow/rule/config/delete | Delete workflow transition rule configurations |
| [**getWorkflowTransitionRuleConfigurations()**](WorkflowTransitionRulesApi.md#getWorkflowTransitionRuleConfigurations) | **GET** /rest/api/2/workflow/rule/config | Get workflow transition rule configurations |
| [**updateWorkflowTransitionRuleConfigurations()**](WorkflowTransitionRulesApi.md#updateWorkflowTransitionRuleConfigurations) | **PUT** /rest/api/2/workflow/rule/config | Update workflow transition rule configurations |


## `deleteWorkflowTransitionRuleConfigurations()`

```php
deleteWorkflowTransitionRuleConfigurations($workflows_with_transition_rules_details): \OpenAPI\Client\Model\WorkflowTransitionRulesUpdateErrors
```

Delete workflow transition rule configurations

Deletes workflow transition rules from one or more workflows. These rule types are supported:   *  [post functions](https://developer.atlassian.com/cloud/jira/platform/modules/workflow-post-function/)  *  [conditions](https://developer.atlassian.com/cloud/jira/platform/modules/workflow-condition/)  *  [validators](https://developer.atlassian.com/cloud/jira/platform/modules/workflow-validator/)  Only rules created by the calling Connect app can be deleted.  **[Permissions](#permissions) required:** Only Connect apps can use this operation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\WorkflowTransitionRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workflows_with_transition_rules_details = {"workflows":[{"workflowId":{"draft":false,"name":"Internal support workflow"},"workflowRuleIds":["b4d6cbdc-59f5-11e9-8647-d663bd873d93","d663bd873d93-59f5-11e9-8647-b4d6cbdc","11e9-59f5-b4d6cbdc-8647-d663bd873d93"]}]}; // \OpenAPI\Client\Model\WorkflowsWithTransitionRulesDetails

try {
    $result = $apiInstance->deleteWorkflowTransitionRuleConfigurations($workflows_with_transition_rules_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowTransitionRulesApi->deleteWorkflowTransitionRuleConfigurations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workflows_with_transition_rules_details** | [**\OpenAPI\Client\Model\WorkflowsWithTransitionRulesDetails**](../Model/WorkflowsWithTransitionRulesDetails.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WorkflowTransitionRulesUpdateErrors**](../Model/WorkflowTransitionRulesUpdateErrors.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWorkflowTransitionRuleConfigurations()`

```php
getWorkflowTransitionRuleConfigurations($types, $start_at, $max_results, $keys, $workflow_names, $with_tags, $draft, $expand): \OpenAPI\Client\Model\PageBeanWorkflowTransitionRules
```

Get workflow transition rule configurations

Returns a [paginated](#pagination) list of workflows with transition rules. The workflows can be filtered to return only those containing workflow transition rules:   *  of one or more transition rule types, such as [workflow post functions](https://developer.atlassian.com/cloud/jira/platform/modules/workflow-post-function/).  *  matching one or more transition rule keys.  Only workflows containing transition rules created by the calling [Connect](https://developer.atlassian.com/cloud/jira/platform/index/#connect-apps) or [Forge](https://developer.atlassian.com/cloud/jira/platform/index/#forge-apps) app are returned.  Due to server-side optimizations, workflows with an empty list of rules may be returned; these workflows can be ignored.  **[Permissions](#permissions) required:** Only [Connect](https://developer.atlassian.com/cloud/jira/platform/index/#connect-apps) or [Forge](https://developer.atlassian.com/cloud/jira/platform/index/#forge-apps) apps can use this operation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\WorkflowTransitionRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$types = array('types_example'); // string[] | The types of the transition rules to return.
$start_at = 0; // int | The index of the first item to return in a page of results (page offset).
$max_results = 10; // int | The maximum number of items to return per page.
$keys = array('keys_example'); // string[] | The transition rule class keys, as defined in the Connect or the Forge app descriptor, of the transition rules to return.
$workflow_names = array('workflow_names_example'); // string[] | The list of workflow names to filter by.
$with_tags = array('with_tags_example'); // string[] | The list of `tags` to filter by.
$draft = True; // bool | Whether draft or published workflows are returned. If not provided, both workflow types are returned.
$expand = 'expand_example'; // string | Use [expand](#expansion) to include additional information in the response. This parameter accepts `transition`, which, for each rule, returns information about the transition the rule is assigned to.

try {
    $result = $apiInstance->getWorkflowTransitionRuleConfigurations($types, $start_at, $max_results, $keys, $workflow_names, $with_tags, $draft, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowTransitionRulesApi->getWorkflowTransitionRuleConfigurations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **types** | [**string[]**](../Model/string.md)| The types of the transition rules to return. | |
| **start_at** | **int**| The index of the first item to return in a page of results (page offset). | [optional] [default to 0] |
| **max_results** | **int**| The maximum number of items to return per page. | [optional] [default to 10] |
| **keys** | [**string[]**](../Model/string.md)| The transition rule class keys, as defined in the Connect or the Forge app descriptor, of the transition rules to return. | [optional] |
| **workflow_names** | [**string[]**](../Model/string.md)| The list of workflow names to filter by. | [optional] |
| **with_tags** | [**string[]**](../Model/string.md)| The list of &#x60;tags&#x60; to filter by. | [optional] |
| **draft** | **bool**| Whether draft or published workflows are returned. If not provided, both workflow types are returned. | [optional] |
| **expand** | **string**| Use [expand](#expansion) to include additional information in the response. This parameter accepts &#x60;transition&#x60;, which, for each rule, returns information about the transition the rule is assigned to. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PageBeanWorkflowTransitionRules**](../Model/PageBeanWorkflowTransitionRules.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWorkflowTransitionRuleConfigurations()`

```php
updateWorkflowTransitionRuleConfigurations($workflow_transition_rules_update): \OpenAPI\Client\Model\WorkflowTransitionRulesUpdateErrors
```

Update workflow transition rule configurations

Updates configuration of workflow transition rules. The following rule types are supported:   *  [post functions](https://developer.atlassian.com/cloud/jira/platform/modules/workflow-post-function/)  *  [conditions](https://developer.atlassian.com/cloud/jira/platform/modules/workflow-condition/)  *  [validators](https://developer.atlassian.com/cloud/jira/platform/modules/workflow-validator/)  Only rules created by the calling [Connect](https://developer.atlassian.com/cloud/jira/platform/index/#connect-apps) or [Forge](https://developer.atlassian.com/cloud/jira/platform/index/#forge-apps) app can be updated.  To assist with app migration, this operation can be used to:   *  Disable a rule.  *  Add a `tag`. Use this to filter rules in the [Get workflow transition rule configurations](https://developer.atlassian.com/cloud/jira/platform/rest/v3/api-group-workflow-transition-rules/#api-rest-api-3-workflow-rule-config-get).  Rules are enabled if the `disabled` parameter is not provided.  **[Permissions](#permissions) required:** Only [Connect](https://developer.atlassian.com/cloud/jira/platform/index/#connect-apps) or [Forge](https://developer.atlassian.com/cloud/jira/platform/index/#forge-apps) apps can use this operation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\WorkflowTransitionRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workflow_transition_rules_update = {"workflows":[{"conditions":[{"configuration":{"disabled":false,"tag":"Another tag","value":"{ \"size\": \"medium\" }"},"id":"d663bd873d93-59f5-11e9-8647-b4d6cbdc"}],"postFunctions":[{"configuration":{"disabled":false,"tag":"Sample tag","value":"{ \"color\": \"red\" }"},"id":"b4d6cbdc-59f5-11e9-8647-d663bd873d93"}],"validators":[{"configuration":{"disabled":false,"value":"{ \"shape\": \"square\" }"},"id":"11e9-59f5-b4d6cbdc-8647-d663bd873d93"}],"workflowId":{"draft":false,"name":"My Workflow name"}}]}; // \OpenAPI\Client\Model\WorkflowTransitionRulesUpdate

try {
    $result = $apiInstance->updateWorkflowTransitionRuleConfigurations($workflow_transition_rules_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowTransitionRulesApi->updateWorkflowTransitionRuleConfigurations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workflow_transition_rules_update** | [**\OpenAPI\Client\Model\WorkflowTransitionRulesUpdate**](../Model/WorkflowTransitionRulesUpdate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WorkflowTransitionRulesUpdateErrors**](../Model/WorkflowTransitionRulesUpdateErrors.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
