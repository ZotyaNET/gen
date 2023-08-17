# OpenAPI\Client\JiraExpressionsApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**analyseExpression()**](JiraExpressionsApi.md#analyseExpression) | **POST** /rest/api/2/expression/analyse | Analyse Jira expression |
| [**evaluateJiraExpression()**](JiraExpressionsApi.md#evaluateJiraExpression) | **POST** /rest/api/2/expression/eval | Evaluate Jira expression |


## `analyseExpression()`

```php
analyseExpression($jira_expression_for_analysis, $check): \OpenAPI\Client\Model\JiraExpressionsAnalysis
```

Analyse Jira expression

Analyses and validates Jira expressions.  As an experimental feature, this operation can also attempt to type-check the expressions.  Learn more about Jira expressions in the [documentation](https://developer.atlassian.com/cloud/jira/platform/jira-expressions/).  **[Permissions](#permissions) required**: None.

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


$apiInstance = new OpenAPI\Client\Api\JiraExpressionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$jira_expression_for_analysis = {"contextVariables":{"listOfStrings":"List<String>","record":"{ a: Number, b: String }","value":"User"},"expressions":["issues.map(issue => issue.properties['property_key'])"]}; // \OpenAPI\Client\Model\JiraExpressionForAnalysis | The Jira expressions to analyse.
$check = 'syntax'; // string | The check to perform:   *  `syntax` Each expression's syntax is checked to ensure the expression can be parsed. Also, syntactic limits are validated. For example, the expression's length.  *  `type` EXPERIMENTAL. Each expression is type checked and the final type of the expression inferred. Any type errors that would result in the expression failure at runtime are reported. For example, accessing properties that don't exist or passing the wrong number of arguments to functions. Also performs the syntax check.  *  `complexity` EXPERIMENTAL. Determines the formulae for how many [expensive operations](https://developer.atlassian.com/cloud/jira/platform/jira-expressions/#expensive-operations) each expression may execute.

try {
    $result = $apiInstance->analyseExpression($jira_expression_for_analysis, $check);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JiraExpressionsApi->analyseExpression: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **jira_expression_for_analysis** | [**\OpenAPI\Client\Model\JiraExpressionForAnalysis**](../Model/JiraExpressionForAnalysis.md)| The Jira expressions to analyse. | |
| **check** | **string**| The check to perform:   *  &#x60;syntax&#x60; Each expression&#39;s syntax is checked to ensure the expression can be parsed. Also, syntactic limits are validated. For example, the expression&#39;s length.  *  &#x60;type&#x60; EXPERIMENTAL. Each expression is type checked and the final type of the expression inferred. Any type errors that would result in the expression failure at runtime are reported. For example, accessing properties that don&#39;t exist or passing the wrong number of arguments to functions. Also performs the syntax check.  *  &#x60;complexity&#x60; EXPERIMENTAL. Determines the formulae for how many [expensive operations](https://developer.atlassian.com/cloud/jira/platform/jira-expressions/#expensive-operations) each expression may execute. | [optional] [default to &#39;syntax&#39;] |

### Return type

[**\OpenAPI\Client\Model\JiraExpressionsAnalysis**](../Model/JiraExpressionsAnalysis.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `evaluateJiraExpression()`

```php
evaluateJiraExpression($jira_expression_eval_request_bean, $expand): \OpenAPI\Client\Model\JiraExpressionResult
```

Evaluate Jira expression

Evaluates a Jira expression and returns its value.  This resource can be used to test Jira expressions that you plan to use elsewhere, or to fetch data in a flexible way. Consult the [Jira expressions documentation](https://developer.atlassian.com/cloud/jira/platform/jira-expressions/) for more details.  #### Context variables ####  The following context variables are available to Jira expressions evaluated by this resource. Their presence depends on various factors; usually you need to manually request them in the context object sent in the payload, but some of them are added automatically under certain conditions.   *  `user` ([User](https://developer.atlassian.com/cloud/jira/platform/jira-expressions-type-reference#user)): The current user. Always available and equal to `null` if the request is anonymous.  *  `app` ([App](https://developer.atlassian.com/cloud/jira/platform/jira-expressions-type-reference#app)): The [Connect app](https://developer.atlassian.com/cloud/jira/platform/index/#connect-apps) that made the request. Available only for authenticated requests made by Connect Apps (read more here: [Authentication for Connect apps](https://developer.atlassian.com/cloud/jira/platform/security-for-connect-apps/)).  *  `issue` ([Issue](https://developer.atlassian.com/cloud/jira/platform/jira-expressions-type-reference#issue)): The current issue. Available only when the issue is provided in the request context object.  *  `issues` ([List](https://developer.atlassian.com/cloud/jira/platform/jira-expressions-type-reference#list) of [Issues](https://developer.atlassian.com/cloud/jira/platform/jira-expressions-type-reference#issue)): A collection of issues matching a JQL query. Available only when JQL is provided in the request context object.  *  `project` ([Project](https://developer.atlassian.com/cloud/jira/platform/jira-expressions-type-reference#project)): The current project. Available only when the project is provided in the request context object.  *  `sprint` ([Sprint](https://developer.atlassian.com/cloud/jira/platform/jira-expressions-type-reference#sprint)): The current sprint. Available only when the sprint is provided in the request context object.  *  `board` ([Board](https://developer.atlassian.com/cloud/jira/platform/jira-expressions-type-reference#board)): The current board. Available only when the board is provided in the request context object.  *  `serviceDesk` ([ServiceDesk](https://developer.atlassian.com/cloud/jira/platform/jira-expressions-type-reference#servicedesk)): The current service desk. Available only when the service desk is provided in the request context object.  *  `customerRequest` ([CustomerRequest](https://developer.atlassian.com/cloud/jira/platform/jira-expressions-type-reference#customerrequest)): The current customer request. Available only when the customer request is provided in the request context object.  Also, custom context variables can be passed in the request with their types. Those variables can be accessed by key in the Jira expression. These variable types are available for use in a custom context:   *  `user`: A [user](https://developer.atlassian.com/cloud/jira/platform/jira-expressions-type-reference#user) specified as an Atlassian account ID.  *  `issue`: An [issue](https://developer.atlassian.com/cloud/jira/platform/jira-expressions-type-reference#issue) specified by ID or key. All the fields of the issue object are available in the Jira expression.  *  `json`: A JSON object containing custom content.  *  `list`: A JSON list of `user`, `issue`, or `json` variable types.  This operation can be accessed anonymously.  **[Permissions](#permissions) required**: None. However, an expression may return different results for different users depending on their permissions. For example, different users may see different comments on the same issue.   Permission to access Jira Software is required to access Jira Software context variables (`board` and `sprint`) or fields (for example, `issue.sprint`).

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


$apiInstance = new OpenAPI\Client\Api\JiraExpressionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$jira_expression_eval_request_bean = {"context":{"board":10100,"custom":{"config":{"type":"json","value":{"userId":"10002"}},"issuesList":[{"key":"ACJIRA-1471","type":"issue"},{"id":100001,"type":"issue"}],"myUser":{"accountId":"100001","type":"user"},"nullField":{"type":"json"}},"customerRequest":1450,"issue":{"key":"ACJIRA-1470"},"issues":{"jql":{"maxResults":100,"query":"project = HSP","startAt":0,"validation":"strict"}},"project":{"key":"ACJIRA"},"serviceDesk":10023,"sprint":10001},"expression":"{ key: issue.key, type: issue.issueType.name, links: issue.links.map(link => link.linkedIssue.id), listCustomVariable: issuesList.includes(issue), customVariables: myUser.accountId == config.userId}"}; // \OpenAPI\Client\Model\JiraExpressionEvalRequestBean | The Jira expression and the evaluation context.
$expand = 'expand_example'; // string | Use [expand](#expansion) to include additional information in the response. This parameter accepts `meta.complexity` that returns information about the expression complexity. For example, the number of expensive operations used by the expression and how close the expression is to reaching the [complexity limit](https://developer.atlassian.com/cloud/jira/platform/jira-expressions/#restrictions). Useful when designing and debugging your expressions.

try {
    $result = $apiInstance->evaluateJiraExpression($jira_expression_eval_request_bean, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JiraExpressionsApi->evaluateJiraExpression: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **jira_expression_eval_request_bean** | [**\OpenAPI\Client\Model\JiraExpressionEvalRequestBean**](../Model/JiraExpressionEvalRequestBean.md)| The Jira expression and the evaluation context. | |
| **expand** | **string**| Use [expand](#expansion) to include additional information in the response. This parameter accepts &#x60;meta.complexity&#x60; that returns information about the expression complexity. For example, the number of expensive operations used by the expression and how close the expression is to reaching the [complexity limit](https://developer.atlassian.com/cloud/jira/platform/jira-expressions/#restrictions). Useful when designing and debugging your expressions. | [optional] |

### Return type

[**\OpenAPI\Client\Model\JiraExpressionResult**](../Model/JiraExpressionResult.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
