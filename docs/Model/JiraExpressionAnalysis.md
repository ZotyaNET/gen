# # JiraExpressionAnalysis

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**complexity** | [**\OpenAPI\Client\Model\JiraExpressionComplexity**](JiraExpressionComplexity.md) |  | [optional]
**errors** | [**\OpenAPI\Client\Model\JiraExpressionValidationError[]**](JiraExpressionValidationError.md) | A list of validation errors. Not included if the expression is valid. | [optional]
**expression** | **string** | The analysed expression. |
**type** | **string** | EXPERIMENTAL. The inferred type of the expression. | [optional]
**valid** | **bool** | Whether the expression is valid and the interpreter will evaluate it. Note that the expression may fail at runtime (for example, if it executes too many expensive operations). |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
