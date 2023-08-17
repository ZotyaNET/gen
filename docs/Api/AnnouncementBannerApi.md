# OpenAPI\Client\AnnouncementBannerApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getBanner()**](AnnouncementBannerApi.md#getBanner) | **GET** /rest/api/2/announcementBanner | Get announcement banner configuration |
| [**setBanner()**](AnnouncementBannerApi.md#setBanner) | **PUT** /rest/api/2/announcementBanner | Update announcement banner configuration |


## `getBanner()`

```php
getBanner(): \OpenAPI\Client\Model\AnnouncementBannerConfiguration
```

Get announcement banner configuration

Returns the current announcement banner configuration.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\AnnouncementBannerConfiguration**](../Model/AnnouncementBannerConfiguration.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setBanner()`

```php
setBanner($announcement_banner_configuration_update): mixed
```

Update announcement banner configuration

Updates the announcement banner configuration.  **[Permissions](#permissions) required:** *Administer Jira* [global permission](https://confluence.atlassian.com/x/x4dKLg).

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


$apiInstance = new OpenAPI\Client\Api\AnnouncementBannerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$announcement_banner_configuration_update = {"isDismissible":false,"isEnabled":true,"message":"This is a public, enabled, non-dismissible banner, set using the API","visibility":"public"}; // \OpenAPI\Client\Model\AnnouncementBannerConfigurationUpdate

try {
    $result = $apiInstance->setBanner($announcement_banner_configuration_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnnouncementBannerApi->setBanner: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **announcement_banner_configuration_update** | [**\OpenAPI\Client\Model\AnnouncementBannerConfigurationUpdate**](../Model/AnnouncementBannerConfigurationUpdate.md)|  | |

### Return type

**mixed**

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
