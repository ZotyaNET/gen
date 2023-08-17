# OpenAPI\Client\JQLApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAutoComplete()**](JQLApi.md#getAutoComplete) | **GET** /rest/api/2/jql/autocompletedata | Get field reference data (GET) |
| [**getAutoCompletePost()**](JQLApi.md#getAutoCompletePost) | **POST** /rest/api/2/jql/autocompletedata | Get field reference data (POST) |
| [**getFieldAutoCompleteForQueryString()**](JQLApi.md#getFieldAutoCompleteForQueryString) | **GET** /rest/api/2/jql/autocompletedata/suggestions | Get field auto complete suggestions |
| [**migrateQueries()**](JQLApi.md#migrateQueries) | **POST** /rest/api/2/jql/pdcleaner | Convert user identifiers to account IDs in JQL queries |
| [**parseJqlQueries()**](JQLApi.md#parseJqlQueries) | **POST** /rest/api/2/jql/parse | Parse JQL query |
| [**sanitiseJqlQueries()**](JQLApi.md#sanitiseJqlQueries) | **POST** /rest/api/2/jql/sanitize | Sanitize JQL queries |


## `getAutoComplete()`

```php
getAutoComplete(): \OpenAPI\Client\Model\JQLReferenceData
```

Get field reference data (GET)

Returns reference data for JQL searches. This is a downloadable version of the documentation provided in [Advanced searching - fields reference](https://confluence.atlassian.com/x/gwORLQ) and [Advanced searching - functions reference](https://confluence.atlassian.com/x/hgORLQ), along with a list of JQL-reserved words. Use this information to assist with the programmatic creation of JQL queries or the validation of queries built in a custom query builder.  To filter visible field details by project or collapse non-unique fields by field type then [Get field reference data (POST)](#api-rest-api-2-jql-autocompletedata-post) can be used.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** None.

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


$apiInstance = new OpenAPI\Client\Api\JQLApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAutoComplete();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JQLApi->getAutoComplete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\JQLReferenceData**](../Model/JQLReferenceData.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAutoCompletePost()`

```php
getAutoCompletePost($search_auto_complete_filter): \OpenAPI\Client\Model\JQLReferenceData
```

Get field reference data (POST)

Returns reference data for JQL searches. This is a downloadable version of the documentation provided in [Advanced searching - fields reference](https://confluence.atlassian.com/x/gwORLQ) and [Advanced searching - functions reference](https://confluence.atlassian.com/x/hgORLQ), along with a list of JQL-reserved words. Use this information to assist with the programmatic creation of JQL queries or the validation of queries built in a custom query builder.  This operation can filter the custom fields returned by project. Invalid project IDs in `projectIds` are ignored. System fields are always returned.  It can also return the collapsed field for custom fields. Collapsed fields enable searches to be performed across all fields with the same name and of the same field type. For example, the collapsed field `Component - Component[Dropdown]` enables dropdown fields `Component - cf[10061]` and `Component - cf[10062]` to be searched simultaneously.  **[Permissions](#permissions) required:** None.

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


$apiInstance = new OpenAPI\Client\Api\JQLApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search_auto_complete_filter = {"includeCollapsedFields":true,"projectIds":[10000,10001,10002]}; // \OpenAPI\Client\Model\SearchAutoCompleteFilter

try {
    $result = $apiInstance->getAutoCompletePost($search_auto_complete_filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JQLApi->getAutoCompletePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **search_auto_complete_filter** | [**\OpenAPI\Client\Model\SearchAutoCompleteFilter**](../Model/SearchAutoCompleteFilter.md)|  | |

### Return type

[**\OpenAPI\Client\Model\JQLReferenceData**](../Model/JQLReferenceData.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFieldAutoCompleteForQueryString()`

```php
getFieldAutoCompleteForQueryString($field_name, $field_value, $predicate_name, $predicate_value): \OpenAPI\Client\Model\AutoCompleteSuggestions
```

Get field auto complete suggestions

Returns the JQL search auto complete suggestions for a field.  Suggestions can be obtained by providing:   *  `fieldName` to get a list of all values for the field.  *  `fieldName` and `fieldValue` to get a list of values containing the text in `fieldValue`.  *  `fieldName` and `predicateName` to get a list of all predicate values for the field.  *  `fieldName`, `predicateName`, and `predicateValue` to get a list of predicate values containing the text in `predicateValue`.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** None.

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


$apiInstance = new OpenAPI\Client\Api\JQLApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field_name = reporter; // string | The name of the field.
$field_value = 'field_value_example'; // string | The partial field item name entered by the user.
$predicate_name = 'predicate_name_example'; // string | The name of the [ CHANGED operator predicate](https://confluence.atlassian.com/x/hQORLQ#Advancedsearching-operatorsreference-CHANGEDCHANGED) for which the suggestions are generated. The valid predicate operators are *by*, *from*, and *to*.
$predicate_value = 'predicate_value_example'; // string | The partial predicate item name entered by the user.

try {
    $result = $apiInstance->getFieldAutoCompleteForQueryString($field_name, $field_value, $predicate_name, $predicate_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JQLApi->getFieldAutoCompleteForQueryString: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **field_name** | **string**| The name of the field. | [optional] |
| **field_value** | **string**| The partial field item name entered by the user. | [optional] |
| **predicate_name** | **string**| The name of the [ CHANGED operator predicate](https://confluence.atlassian.com/x/hQORLQ#Advancedsearching-operatorsreference-CHANGEDCHANGED) for which the suggestions are generated. The valid predicate operators are *by*, *from*, and *to*. | [optional] |
| **predicate_value** | **string**| The partial predicate item name entered by the user. | [optional] |

### Return type

[**\OpenAPI\Client\Model\AutoCompleteSuggestions**](../Model/AutoCompleteSuggestions.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `migrateQueries()`

```php
migrateQueries($jql_personal_data_migration_request): \OpenAPI\Client\Model\ConvertedJQLQueries
```

Convert user identifiers to account IDs in JQL queries

Converts one or more JQL queries with user identifiers (username or user key) to equivalent JQL queries with account IDs.  You may wish to use this operation if your system stores JQL queries and you want to make them GDPR-compliant. For more information about GDPR-related changes, see the [migration guide](https://developer.atlassian.com/cloud/jira/platform/deprecation-notice-user-privacy-api-migration-guide/).  **[Permissions](#permissions) required:** Permission to access Jira.

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


$apiInstance = new OpenAPI\Client\Api\JQLApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$jql_personal_data_migration_request = {"queryStrings":["assignee = mia","issuetype = Bug AND assignee in (mia) AND reporter in (alana) order by lastViewed DESC"]}; // \OpenAPI\Client\Model\JQLPersonalDataMigrationRequest

try {
    $result = $apiInstance->migrateQueries($jql_personal_data_migration_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JQLApi->migrateQueries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **jql_personal_data_migration_request** | [**\OpenAPI\Client\Model\JQLPersonalDataMigrationRequest**](../Model/JQLPersonalDataMigrationRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ConvertedJQLQueries**](../Model/ConvertedJQLQueries.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `parseJqlQueries()`

```php
parseJqlQueries($jql_queries_to_parse, $validation): \OpenAPI\Client\Model\ParsedJqlQueries
```

Parse JQL query

Parses and validates JQL queries.  Validation is performed in context of the current user.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** None.

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


$apiInstance = new OpenAPI\Client\Api\JQLApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$jql_queries_to_parse = {"queries":["summary ~ test AND (labels in (urgent, blocker) OR lastCommentedBy = currentUser()) AND status CHANGED AFTER startOfMonth(-1M) ORDER BY updated DESC","issue.property[\"spaces here\"].value in (\"Service requests\", Incidents)","invalid query","summary = test","summary in test","project = INVALID","universe = 42"]}; // \OpenAPI\Client\Model\JqlQueriesToParse
$validation = 'strict'; // string | How to validate the JQL query and treat the validation results. Validation options include:   *  `strict` Returns all errors. If validation fails, the query structure is not returned.  *  `warn` Returns all errors. If validation fails but the JQL query is correctly formed, the query structure is returned.  *  `none` No validation is performed. If JQL query is correctly formed, the query structure is returned.

try {
    $result = $apiInstance->parseJqlQueries($jql_queries_to_parse, $validation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JQLApi->parseJqlQueries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **jql_queries_to_parse** | [**\OpenAPI\Client\Model\JqlQueriesToParse**](../Model/JqlQueriesToParse.md)|  | |
| **validation** | **string**| How to validate the JQL query and treat the validation results. Validation options include:   *  &#x60;strict&#x60; Returns all errors. If validation fails, the query structure is not returned.  *  &#x60;warn&#x60; Returns all errors. If validation fails but the JQL query is correctly formed, the query structure is returned.  *  &#x60;none&#x60; No validation is performed. If JQL query is correctly formed, the query structure is returned. | [optional] [default to &#39;strict&#39;] |

### Return type

[**\OpenAPI\Client\Model\ParsedJqlQueries**](../Model/ParsedJqlQueries.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sanitiseJqlQueries()`

```php
sanitiseJqlQueries($jql_queries_to_sanitize): \OpenAPI\Client\Model\SanitizedJqlQueries
```

Sanitize JQL queries

Sanitizes one or more JQL queries by converting readable details into IDs where a user doesn't have permission to view the entity.  For example, if the query contains the clause *project = 'Secret project'*, and a user does not have browse permission for the project \"Secret project\", the sanitized query replaces the clause with *project = 12345\"* (where 12345 is the ID of the project). If a user has the required permission, the clause is not sanitized. If the account ID is null, sanitizing is performed for an anonymous user.  Note that sanitization doesn't make the queries GDPR-compliant, because it doesn't remove user identifiers (username or user key). If you need to make queries GDPR-compliant, use [Convert user identifiers to account IDs in JQL queries](https://developer.atlassian.com/cloud/jira/platform/rest/v3/api-group-jql/#api-rest-api-3-jql-sanitize-post).  Before sanitization each JQL query is parsed. The queries are returned in the same order that they were passed.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\JQLApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$jql_queries_to_sanitize = {"queries":[{"query":"project = 'Sample project'"},{"accountId":"5b10ac8d82e05b22cc7d4ef5","query":"project = 'Sample project'"},{"accountId":"cda2aa1395ac195d951b3387","query":"project = 'Sample project'"},{"accountId":"5b10ac8d82e05b22cc7d4ef5","query":"invalid query"}]}; // \OpenAPI\Client\Model\JqlQueriesToSanitize

try {
    $result = $apiInstance->sanitiseJqlQueries($jql_queries_to_sanitize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JQLApi->sanitiseJqlQueries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **jql_queries_to_sanitize** | [**\OpenAPI\Client\Model\JqlQueriesToSanitize**](../Model/JqlQueriesToSanitize.md)|  | |

### Return type

[**\OpenAPI\Client\Model\SanitizedJqlQueries**](../Model/SanitizedJqlQueries.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
