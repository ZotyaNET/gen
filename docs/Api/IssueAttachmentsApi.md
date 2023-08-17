# OpenAPI\Client\IssueAttachmentsApi

All URIs are relative to https://your-domain.atlassian.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addAttachment()**](IssueAttachmentsApi.md#addAttachment) | **POST** /rest/api/2/issue/{issueIdOrKey}/attachments | Add attachment |
| [**expandAttachmentForHumans()**](IssueAttachmentsApi.md#expandAttachmentForHumans) | **GET** /rest/api/2/attachment/{id}/expand/human | Get all metadata for an expanded attachment |
| [**expandAttachmentForMachines()**](IssueAttachmentsApi.md#expandAttachmentForMachines) | **GET** /rest/api/2/attachment/{id}/expand/raw | Get contents metadata for an expanded attachment |
| [**getAttachment()**](IssueAttachmentsApi.md#getAttachment) | **GET** /rest/api/2/attachment/{id} | Get attachment metadata |
| [**getAttachmentContent()**](IssueAttachmentsApi.md#getAttachmentContent) | **GET** /rest/api/2/attachment/content/{id} | Get attachment content |
| [**getAttachmentMeta()**](IssueAttachmentsApi.md#getAttachmentMeta) | **GET** /rest/api/2/attachment/meta | Get Jira attachment settings |
| [**getAttachmentThumbnail()**](IssueAttachmentsApi.md#getAttachmentThumbnail) | **GET** /rest/api/2/attachment/thumbnail/{id} | Get attachment thumbnail |
| [**removeAttachment()**](IssueAttachmentsApi.md#removeAttachment) | **DELETE** /rest/api/2/attachment/{id} | Delete attachment |


## `addAttachment()`

```php
addAttachment($issue_id_or_key): \OpenAPI\Client\Model\Attachment[]
```

Add attachment

Adds one or more attachments to an issue. Attachments are posted as multipart/form-data ([RFC 1867](https://www.ietf.org/rfc/rfc1867.txt)).  Note that:   *  The request must have a `X-Atlassian-Token: no-check` header, if not it is blocked. See [Special headers](#special-request-headers) for more information.  *  The name of the multipart/form-data parameter that contains the attachments must be `file`.  The following examples upload a file called *myfile.txt* to the issue *TEST-123*:  #### curl ####      curl --location --request POST 'https://your-domain.atlassian.net/rest/api/2/issue/TEST-123/attachments'      -u 'email@example.com:<api_token>'      -H 'X-Atlassian-Token: no-check'      --form 'file=@\"myfile.txt\"'  #### Node.js ####      // This code sample uses the 'node-fetch' and 'form-data' libraries:      // https://www.npmjs.com/package/node-fetch      // https://www.npmjs.com/package/form-data      const fetch = require('node-fetch');      const FormData = require('form-data');      const fs = require('fs');           const filePath = 'myfile.txt';      const form = new FormData();      const stats = fs.statSync(filePath);      const fileSizeInBytes = stats.size;      const fileStream = fs.createReadStream(filePath);           form.append('file', fileStream, {knownLength: fileSizeInBytes});           fetch('https://your-domain.atlassian.net/rest/api/2/issue/TEST-123/attachments', {          method: 'POST',          body: form,          headers: {              'Authorization': `Basic ${Buffer.from(                  'email@example.com:'              ).toString('base64')}`,              'Accept': 'application/json',              'X-Atlassian-Token': 'no-check'          }      })          .then(response => {              console.log(                  `Response: ${response.status} ${response.statusText}`              );              return response.text();          })          .then(text => console.log(text))          .catch(err => console.error(err));  #### Java ####      // This code sample uses the  'Unirest' library:      // http://unirest.io/java.html      HttpResponse response = Unirest.post(\"https://your-domain.atlassian.net/rest/api/2/issue/{issueIdOrKey}/attachments\")              .basicAuth(\"email@example.com\", \"\")              .header(\"Accept\", \"application/json\")              .header(\"X-Atlassian-Token\", \"no-check\")              .field(\"file\", new File(\"myfile.txt\"))              .asJson();                   System.out.println(response.getBody());  #### Python ####      # This code sample uses the 'requests' library:      # http://docs.python-requests.org      import requests      from requests.auth import HTTPBasicAuth      import json           url = \"https://your-domain.atlassian.net/rest/api/2/issue/{issueIdOrKey}/attachments\"           auth = HTTPBasicAuth(\"email@example.com\", \"\")           headers = {         \"Accept\": \"application/json\",         \"X-Atlassian-Token\": \"no-check\"      }           response = requests.request(         \"POST\",         url,         headers = headers,         auth = auth,         files = {              \"file\": (\"myfile.txt\", open(\"myfile.txt\",\"rb\"), \"application-type\")         }      )           print(json.dumps(json.loads(response.text), sort_keys=True, indent=4, separators=(\",\", \": \")))  #### PHP ####      // This code sample uses the 'Unirest' library:      // http://unirest.io/php.html      Unirest\\Request::auth('email@example.com', '');           $headers = array(        'Accept' => 'application/json',        'X-Atlassian-Token' => 'no-check'      );           $parameters = array(        'file' => File::add('myfile.txt')      );           $response = Unirest\\Request::post(        'https://your-domain.atlassian.net/rest/api/2/issue/{issueIdOrKey}/attachments',        $headers,        $parameters      );           var_dump($response)  #### Forge ####      // This sample uses Atlassian Forge and the `form-data` library.      // https://developer.atlassian.com/platform/forge/      // https://www.npmjs.com/package/form-data      import api from \"@forge/api\";      import FormData from \"form-data\";           const form = new FormData();      form.append('file', fileStream, {knownLength: fileSizeInBytes});           const response = await api.asApp().requestJira('/rest/api/2/issue/{issueIdOrKey}/attachments', {          method: 'POST',          body: form,          headers: {              'Accept': 'application/json',              'X-Atlassian-Token': 'no-check'          }      });           console.log(`Response: ${response.status} ${response.statusText}`);      console.log(await response.json());  Tip: Use a client library. Many client libraries have classes for handling multipart POST operations. For example, in Java, the Apache HTTP Components library provides a [MultiPartEntity](http://hc.apache.org/httpcomponents-client-ga/httpmime/apidocs/org/apache/http/entity/mime/MultipartEntity.html) class for multipart POST operations.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:**    *  *Browse Projects* and *Create attachments* [ project permission](https://confluence.atlassian.com/x/yodKLg) for the project that the issue is in.  *  If [issue-level security](https://confluence.atlassian.com/x/J4lKLg) is configured, issue-level security permission to view the issue.

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


$apiInstance = new OpenAPI\Client\Api\IssueAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_id_or_key = 'issue_id_or_key_example'; // string | The ID or key of the issue that attachments are added to.

try {
    $result = $apiInstance->addAttachment($issue_id_or_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueAttachmentsApi->addAttachment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_id_or_key** | **string**| The ID or key of the issue that attachments are added to. | |

### Return type

[**\OpenAPI\Client\Model\Attachment[]**](../Model/Attachment.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `expandAttachmentForHumans()`

```php
expandAttachmentForHumans($id): \OpenAPI\Client\Model\AttachmentArchiveMetadataReadable
```

Get all metadata for an expanded attachment

Returns the metadata for the contents of an attachment, if it is an archive, and metadata for the attachment itself. For example, if the attachment is a ZIP archive, then information about the files in the archive is returned and metadata for the ZIP archive. Currently, only the ZIP archive format is supported.  Use this operation to retrieve data that is presented to the user, as this operation returns the metadata for the attachment itself, such as the attachment's ID and name. Otherwise, use [ Get contents metadata for an expanded attachment](#api-rest-api-2-attachment-id-expand-raw-get), which only returns the metadata for the attachment's contents.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** For the issue containing the attachment:   *  *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project that the issue is in.  *  If [issue-level security](https://confluence.atlassian.com/x/J4lKLg) is configured, issue-level security permission to view the issue.

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


$apiInstance = new OpenAPI\Client\Api\IssueAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the attachment.

try {
    $result = $apiInstance->expandAttachmentForHumans($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueAttachmentsApi->expandAttachmentForHumans: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the attachment. | |

### Return type

[**\OpenAPI\Client\Model\AttachmentArchiveMetadataReadable**](../Model/AttachmentArchiveMetadataReadable.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `expandAttachmentForMachines()`

```php
expandAttachmentForMachines($id): \OpenAPI\Client\Model\AttachmentArchiveImpl
```

Get contents metadata for an expanded attachment

Returns the metadata for the contents of an attachment, if it is an archive. For example, if the attachment is a ZIP archive, then information about the files in the archive is returned. Currently, only the ZIP archive format is supported.  Use this operation if you are processing the data without presenting it to the user, as this operation only returns the metadata for the contents of the attachment. Otherwise, to retrieve data to present to the user, use [ Get all metadata for an expanded attachment](#api-rest-api-2-attachment-id-expand-human-get) which also returns the metadata for the attachment itself, such as the attachment's ID and name.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** For the issue containing the attachment:   *  *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project that the issue is in.  *  If [issue-level security](https://confluence.atlassian.com/x/J4lKLg) is configured, issue-level security permission to view the issue.

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


$apiInstance = new OpenAPI\Client\Api\IssueAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the attachment.

try {
    $result = $apiInstance->expandAttachmentForMachines($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueAttachmentsApi->expandAttachmentForMachines: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the attachment. | |

### Return type

[**\OpenAPI\Client\Model\AttachmentArchiveImpl**](../Model/AttachmentArchiveImpl.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAttachment()`

```php
getAttachment($id): \OpenAPI\Client\Model\AttachmentMetadata
```

Get attachment metadata

Returns the metadata for an attachment. Note that the attachment itself is not returned.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:**   *  *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project that the issue is in.  *  If [issue-level security](https://confluence.atlassian.com/x/J4lKLg) is configured, issue-level security permission to view the issue.

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


$apiInstance = new OpenAPI\Client\Api\IssueAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the attachment.

try {
    $result = $apiInstance->getAttachment($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueAttachmentsApi->getAttachment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the attachment. | |

### Return type

[**\OpenAPI\Client\Model\AttachmentMetadata**](../Model/AttachmentMetadata.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAttachmentContent()`

```php
getAttachmentContent($id, $redirect): object
```

Get attachment content

Returns the contents of an attachment. A `Range` header can be set to define a range of bytes within the attachment to download. See the [HTTP Range header standard](https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Range) for details.  To return a thumbnail of the attachment, use [Get attachment thumbnail](#api-rest-api-2-attachment-thumbnail-id-get).  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** For the issue containing the attachment:   *  *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project that the issue is in.  *  If [issue-level security](https://confluence.atlassian.com/x/J4lKLg) is configured, issue-level security permission to view the issue.

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


$apiInstance = new OpenAPI\Client\Api\IssueAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the attachment.
$redirect = true; // bool | Whether a redirect is provided for the attachment download. Clients that do not automatically follow redirects can set this to `false` to avoid making multiple requests to download the attachment.

try {
    $result = $apiInstance->getAttachmentContent($id, $redirect);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueAttachmentsApi->getAttachmentContent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the attachment. | |
| **redirect** | **bool**| Whether a redirect is provided for the attachment download. Clients that do not automatically follow redirects can set this to &#x60;false&#x60; to avoid making multiple requests to download the attachment. | [optional] [default to true] |

### Return type

**object**

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAttachmentMeta()`

```php
getAttachmentMeta(): \OpenAPI\Client\Model\AttachmentSettings
```

Get Jira attachment settings

Returns the attachment settings, that is, whether attachments are enabled and the maximum attachment size allowed.  Note that there are also [project permissions](https://confluence.atlassian.com/x/yodKLg) that restrict whether users can create and delete attachments.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** None.

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


$apiInstance = new OpenAPI\Client\Api\IssueAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAttachmentMeta();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueAttachmentsApi->getAttachmentMeta: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\AttachmentSettings**](../Model/AttachmentSettings.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAttachmentThumbnail()`

```php
getAttachmentThumbnail($id, $redirect, $fallback_to_default, $width, $height): object
```

Get attachment thumbnail

Returns the thumbnail of an attachment.  To return the attachment contents, use [Get attachment content](#api-rest-api-2-attachment-content-id-get).  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** For the issue containing the attachment:   *  *Browse projects* [project permission](https://confluence.atlassian.com/x/yodKLg) for the project that the issue is in.  *  If [issue-level security](https://confluence.atlassian.com/x/J4lKLg) is configured, issue-level security permission to view the issue.

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


$apiInstance = new OpenAPI\Client\Api\IssueAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the attachment.
$redirect = true; // bool | Whether a redirect is provided for the attachment download. Clients that do not automatically follow redirects can set this to `false` to avoid making multiple requests to download the attachment.
$fallback_to_default = true; // bool | Whether a default thumbnail is returned when the requested thumbnail is not found.
$width = 56; // int | The maximum width to scale the thumbnail to.
$height = 56; // int | The maximum height to scale the thumbnail to.

try {
    $result = $apiInstance->getAttachmentThumbnail($id, $redirect, $fallback_to_default, $width, $height);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueAttachmentsApi->getAttachmentThumbnail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the attachment. | |
| **redirect** | **bool**| Whether a redirect is provided for the attachment download. Clients that do not automatically follow redirects can set this to &#x60;false&#x60; to avoid making multiple requests to download the attachment. | [optional] [default to true] |
| **fallback_to_default** | **bool**| Whether a default thumbnail is returned when the requested thumbnail is not found. | [optional] [default to true] |
| **width** | **int**| The maximum width to scale the thumbnail to. | [optional] |
| **height** | **int**| The maximum height to scale the thumbnail to. | [optional] |

### Return type

**object**

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeAttachment()`

```php
removeAttachment($id)
```

Delete attachment

Deletes an attachment from an issue.  This operation can be accessed anonymously.  **[Permissions](#permissions) required:** For the project holding the issue containing the attachment:   *  *Delete own attachments* [project permission](https://confluence.atlassian.com/x/yodKLg) to delete an attachment created by the calling user.  *  *Delete all attachments* [project permission](https://confluence.atlassian.com/x/yodKLg) to delete an attachment created by any user.

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


$apiInstance = new OpenAPI\Client\Api\IssueAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the attachment.

try {
    $apiInstance->removeAttachment($id);
} catch (Exception $e) {
    echo 'Exception when calling IssueAttachmentsApi->removeAttachment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the attachment. | |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
