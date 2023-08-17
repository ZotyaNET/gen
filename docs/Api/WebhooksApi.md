# OpenAPI\Client\WebhooksApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteWebhookById()**](WebhooksApi.md#deleteWebhookById) | **DELETE** /rest/api/2/webhook | Delete webhooks by ID |
| [**getDynamicWebhooksForApp()**](WebhooksApi.md#getDynamicWebhooksForApp) | **GET** /rest/api/2/webhook | Get dynamic webhooks for app |
| [**getFailedWebhooks()**](WebhooksApi.md#getFailedWebhooks) | **GET** /rest/api/2/webhook/failed | Get failed webhooks |
| [**refreshWebhooks()**](WebhooksApi.md#refreshWebhooks) | **PUT** /rest/api/2/webhook/refresh | Extend webhook life |
| [**registerDynamicWebhooks()**](WebhooksApi.md#registerDynamicWebhooks) | **POST** /rest/api/2/webhook | Register dynamic webhooks |


## `deleteWebhookById()`

```php
deleteWebhookById($container_for_webhook_ids)
```

Delete webhooks by ID

Removes webhooks by ID. Only webhooks registered by the calling app are removed. If webhooks created by other apps are specified, they are ignored.  **[Permissions](#permissions) required:** Only [Connect](https://developer.atlassian.com/cloud/jira/platform/#connect-apps) and [OAuth 2.0](https://developer.atlassian.com/cloud/jira/platform/oauth-2-3lo-apps) apps can use this operation.

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


$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$container_for_webhook_ids = {"webhookIds":[10000,10001,10042]}; // \OpenAPI\Client\Model\ContainerForWebhookIDs

try {
    $apiInstance->deleteWebhookById($container_for_webhook_ids);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->deleteWebhookById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **container_for_webhook_ids** | [**\OpenAPI\Client\Model\ContainerForWebhookIDs**](../Model/ContainerForWebhookIDs.md)|  | |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDynamicWebhooksForApp()`

```php
getDynamicWebhooksForApp($start_at, $max_results): \OpenAPI\Client\Model\PageBeanWebhook
```

Get dynamic webhooks for app

Returns a [paginated](#pagination) list of the webhooks registered by the calling app.  **[Permissions](#permissions) required:** Only [Connect](https://developer.atlassian.com/cloud/jira/platform/#connect-apps) and [OAuth 2.0](https://developer.atlassian.com/cloud/jira/platform/oauth-2-3lo-apps) apps can use this operation.

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


$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_at = 0; // int | The index of the first item to return in a page of results (page offset).
$max_results = 100; // int | The maximum number of items to return per page.

try {
    $result = $apiInstance->getDynamicWebhooksForApp($start_at, $max_results);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getDynamicWebhooksForApp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_at** | **int**| The index of the first item to return in a page of results (page offset). | [optional] [default to 0] |
| **max_results** | **int**| The maximum number of items to return per page. | [optional] [default to 100] |

### Return type

[**\OpenAPI\Client\Model\PageBeanWebhook**](../Model/PageBeanWebhook.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFailedWebhooks()`

```php
getFailedWebhooks($max_results, $after): \OpenAPI\Client\Model\FailedWebhooks
```

Get failed webhooks

Returns webhooks that have recently failed to be delivered to the requesting app after the maximum number of retries.  After 72 hours the failure may no longer be returned by this operation.  The oldest failure is returned first.  This method uses a cursor-based pagination. To request the next page use the failure time of the last webhook on the list as the `failedAfter` value or use the URL provided in `next`.  **[Permissions](#permissions) required:** Only [Connect apps](https://developer.atlassian.com/cloud/jira/platform/index/#connect-apps) can use this operation.

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


$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$max_results = 56; // int | The maximum number of webhooks to return per page. If obeying the maxResults directive would result in records with the same failure time being split across pages, the directive is ignored and all records with the same failure time included on the page.
$after = 56; // int | The time after which any webhook failure must have occurred for the record to be returned, expressed as milliseconds since the UNIX epoch.

try {
    $result = $apiInstance->getFailedWebhooks($max_results, $after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getFailedWebhooks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **max_results** | **int**| The maximum number of webhooks to return per page. If obeying the maxResults directive would result in records with the same failure time being split across pages, the directive is ignored and all records with the same failure time included on the page. | [optional] |
| **after** | **int**| The time after which any webhook failure must have occurred for the record to be returned, expressed as milliseconds since the UNIX epoch. | [optional] |

### Return type

[**\OpenAPI\Client\Model\FailedWebhooks**](../Model/FailedWebhooks.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `refreshWebhooks()`

```php
refreshWebhooks($container_for_webhook_ids): \OpenAPI\Client\Model\WebhooksExpirationDate
```

Extend webhook life

Extends the life of webhook. Webhooks registered through the REST API expire after 30 days. Call this operation to keep them alive.  Unrecognized webhook IDs (those that are not found or belong to other apps) are ignored.  **[Permissions](#permissions) required:** Only [Connect](https://developer.atlassian.com/cloud/jira/platform/#connect-apps) and [OAuth 2.0](https://developer.atlassian.com/cloud/jira/platform/oauth-2-3lo-apps) apps can use this operation.

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


$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$container_for_webhook_ids = {"webhookIds":[10000,10001,10042]}; // \OpenAPI\Client\Model\ContainerForWebhookIDs

try {
    $result = $apiInstance->refreshWebhooks($container_for_webhook_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->refreshWebhooks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **container_for_webhook_ids** | [**\OpenAPI\Client\Model\ContainerForWebhookIDs**](../Model/ContainerForWebhookIDs.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WebhooksExpirationDate**](../Model/WebhooksExpirationDate.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `registerDynamicWebhooks()`

```php
registerDynamicWebhooks($webhook_registration_details): \OpenAPI\Client\Model\ContainerForRegisteredWebhooks
```

Register dynamic webhooks

Registers webhooks.  **NOTE:** for non-public OAuth apps, webhooks are delivered only if there is a match between the app owner and the user who registered a dynamic webhook.  **[Permissions](#permissions) required:** Only [Connect](https://developer.atlassian.com/cloud/jira/platform/#connect-apps) and [OAuth 2.0](https://developer.atlassian.com/cloud/jira/platform/oauth-2-3lo-apps) apps can use this operation.

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


$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_registration_details = {"url":"https://your-app.example.com/webhook-received","webhooks":[{"events":["jira:issue_created","jira:issue_updated"],"fieldIdsFilter":["summary","customfield_10029"],"jqlFilter":"project = PROJ"},{"events":["jira:issue_deleted"],"jqlFilter":"project IN (PROJ, EXP) AND status = done"},{"events":["issue_property_set"],"issuePropertyKeysFilter":["my-issue-property-key"],"jqlFilter":"project = PROJ"}]}; // \OpenAPI\Client\Model\WebhookRegistrationDetails

try {
    $result = $apiInstance->registerDynamicWebhooks($webhook_registration_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->registerDynamicWebhooks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_registration_details** | [**\OpenAPI\Client\Model\WebhookRegistrationDetails**](../Model/WebhookRegistrationDetails.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ContainerForRegisteredWebhooks**](../Model/ContainerForRegisteredWebhooks.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
