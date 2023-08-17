# # FailedWebhooks

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**max_results** | **int** | The maximum number of items on the page. If the list of values is shorter than this number, then there are no more pages. |
**next** | **string** | The URL to the next page of results. Present only if the request returned at least one result.The next page may be empty at the time of receiving the response, but new failed webhooks may appear in time. You can save the URL to the next page and query for new results periodically (for example, every hour). | [optional]
**values** | [**\OpenAPI\Client\Model\FailedWebhook[]**](FailedWebhook.md) | The list of webhooks. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
