# # JiraExpressionEvalRequestBeanContext

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**board** | **int** | The ID of the board that is available under the &#x60;board&#x60; variable when evaluating the expression. | [optional]
**custom** | [**\OpenAPI\Client\Model\CustomContextVariable[]**](CustomContextVariable.md) | Custom context variables and their types. These variable types are available for use in a custom context:   *  &#x60;user&#x60;: A [user](https://developer.atlassian.com/cloud/jira/platform/jira-expressions-type-reference#user) specified as an Atlassian account ID.  *  &#x60;issue&#x60;: An [issue](https://developer.atlassian.com/cloud/jira/platform/jira-expressions-type-reference#issue) specified by ID or key. All the fields of the issue object are available in the Jira expression.  *  &#x60;json&#x60;: A JSON object containing custom content.  *  &#x60;list&#x60;: A JSON list of &#x60;user&#x60;, &#x60;issue&#x60;, or &#x60;json&#x60; variable types. | [optional]
**customer_request** | **int** | The ID of the customer request that is available under the &#x60;customerRequest&#x60; variable when evaluating the expression. This is the same as the ID of the underlying Jira issue, but the customer request context variable will have a different type. | [optional]
**issue** | [**\OpenAPI\Client\Model\JiraExpressionEvalContextBeanIssue**](JiraExpressionEvalContextBeanIssue.md) |  | [optional]
**issues** | [**\OpenAPI\Client\Model\JiraExpressionEvalContextBeanIssues**](JiraExpressionEvalContextBeanIssues.md) |  | [optional]
**project** | [**\OpenAPI\Client\Model\JiraExpressionEvalContextBeanProject**](JiraExpressionEvalContextBeanProject.md) |  | [optional]
**service_desk** | **int** | The ID of the service desk that is available under the &#x60;serviceDesk&#x60; variable when evaluating the expression. | [optional]
**sprint** | **int** | The ID of the sprint that is available under the &#x60;sprint&#x60; variable when evaluating the expression. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
