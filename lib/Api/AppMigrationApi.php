<?php
/**
 * AppMigrationApi
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * The Jira Cloud platform REST API
 *
 * Jira Cloud platform REST API documentation
 *
 * The version of the OpenAPI document: 1001.0.0-SNAPSHOT
 * Contact: ecosystem@atlassian.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use OpenAPI\Client\ApiException;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\HeaderSelector;
use OpenAPI\Client\ObjectSerializer;

/**
 * AppMigrationApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AppMigrationApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation appIssueFieldValueUpdateResourceUpdateIssueFieldsPut
     *
     * Bulk update custom field value
     *
     * @param  string $atlassian_transfer_id The ID of the transfer. (required)
     * @param  \OpenAPI\Client\Model\ConnectCustomFieldValues $connect_custom_field_values connect_custom_field_values (required)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return mixed
     */
    public function appIssueFieldValueUpdateResourceUpdateIssueFieldsPut($atlassian_transfer_id, $connect_custom_field_values)
    {
        list($response) = $this->appIssueFieldValueUpdateResourceUpdateIssueFieldsPutWithHttpInfo($atlassian_transfer_id, $connect_custom_field_values);
        return $response;
    }

    /**
     * Operation appIssueFieldValueUpdateResourceUpdateIssueFieldsPutWithHttpInfo
     *
     * Bulk update custom field value
     *
     * @param  string $atlassian_transfer_id The ID of the transfer. (required)
     * @param  \OpenAPI\Client\Model\ConnectCustomFieldValues $connect_custom_field_values (required)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of mixed, HTTP status code, HTTP response headers (array of strings)
     */
    public function appIssueFieldValueUpdateResourceUpdateIssueFieldsPutWithHttpInfo($atlassian_transfer_id, $connect_custom_field_values)
    {
        $request = $this->appIssueFieldValueUpdateResourceUpdateIssueFieldsPutRequest($atlassian_transfer_id, $connect_custom_field_values);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
            
                case 200:
                    if ('mixed' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('mixed' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'mixed', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            
            
            
            }

            $returnType = 'mixed';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'mixed',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            
            
            
            }
            throw $e;
        }
    }

    /**
     * Operation appIssueFieldValueUpdateResourceUpdateIssueFieldsPutAsync
     *
     * Bulk update custom field value
     *
     * @param  string $atlassian_transfer_id The ID of the transfer. (required)
     * @param  \OpenAPI\Client\Model\ConnectCustomFieldValues $connect_custom_field_values (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function appIssueFieldValueUpdateResourceUpdateIssueFieldsPutAsync($atlassian_transfer_id, $connect_custom_field_values)
    {
        return $this->appIssueFieldValueUpdateResourceUpdateIssueFieldsPutAsyncWithHttpInfo($atlassian_transfer_id, $connect_custom_field_values)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation appIssueFieldValueUpdateResourceUpdateIssueFieldsPutAsyncWithHttpInfo
     *
     * Bulk update custom field value
     *
     * @param  string $atlassian_transfer_id The ID of the transfer. (required)
     * @param  \OpenAPI\Client\Model\ConnectCustomFieldValues $connect_custom_field_values (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function appIssueFieldValueUpdateResourceUpdateIssueFieldsPutAsyncWithHttpInfo($atlassian_transfer_id, $connect_custom_field_values)
    {
        $returnType = 'mixed';
        $request = $this->appIssueFieldValueUpdateResourceUpdateIssueFieldsPutRequest($atlassian_transfer_id, $connect_custom_field_values);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'appIssueFieldValueUpdateResourceUpdateIssueFieldsPut'
     *
     * @param  string $atlassian_transfer_id The ID of the transfer. (required)
     * @param  \OpenAPI\Client\Model\ConnectCustomFieldValues $connect_custom_field_values (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function appIssueFieldValueUpdateResourceUpdateIssueFieldsPutRequest($atlassian_transfer_id, $connect_custom_field_values)
    {

        // verify the required parameter 'atlassian_transfer_id' is set
        if ($atlassian_transfer_id === null || (is_array($atlassian_transfer_id) && count($atlassian_transfer_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $atlassian_transfer_id when calling appIssueFieldValueUpdateResourceUpdateIssueFieldsPut'
            );
        }

        // verify the required parameter 'connect_custom_field_values' is set
        if ($connect_custom_field_values === null || (is_array($connect_custom_field_values) && count($connect_custom_field_values) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $connect_custom_field_values when calling appIssueFieldValueUpdateResourceUpdateIssueFieldsPut'
            );
        }

        $resourcePath = '/rest/atlassian-connect/1/migration/field';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($atlassian_transfer_id !== null) {
            $headerParams['Atlassian-Transfer-Id'] = ObjectSerializer::toHeaderValue($atlassian_transfer_id);
        }



        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($connect_custom_field_values)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($connect_custom_field_values));
            } else {
                $httpBody = $connect_custom_field_values;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'PUT',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation migrationResourceUpdateEntityPropertiesValuePut
     *
     * Bulk update entity properties
     *
     * @param  string $atlassian_transfer_id The app migration transfer ID. (required)
     * @param  string $entity_type The type indicating the object that contains the entity properties. (required)
     * @param  \OpenAPI\Client\Model\EntityPropertyDetails[] $entity_property_details entity_property_details (required)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function migrationResourceUpdateEntityPropertiesValuePut($atlassian_transfer_id, $entity_type, $entity_property_details)
    {
        $this->migrationResourceUpdateEntityPropertiesValuePutWithHttpInfo($atlassian_transfer_id, $entity_type, $entity_property_details);
    }

    /**
     * Operation migrationResourceUpdateEntityPropertiesValuePutWithHttpInfo
     *
     * Bulk update entity properties
     *
     * @param  string $atlassian_transfer_id The app migration transfer ID. (required)
     * @param  string $entity_type The type indicating the object that contains the entity properties. (required)
     * @param  \OpenAPI\Client\Model\EntityPropertyDetails[] $entity_property_details (required)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function migrationResourceUpdateEntityPropertiesValuePutWithHttpInfo($atlassian_transfer_id, $entity_type, $entity_property_details)
    {
        $request = $this->migrationResourceUpdateEntityPropertiesValuePutRequest($atlassian_transfer_id, $entity_type, $entity_property_details);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            
            
            
            }
            throw $e;
        }
    }

    /**
     * Operation migrationResourceUpdateEntityPropertiesValuePutAsync
     *
     * Bulk update entity properties
     *
     * @param  string $atlassian_transfer_id The app migration transfer ID. (required)
     * @param  string $entity_type The type indicating the object that contains the entity properties. (required)
     * @param  \OpenAPI\Client\Model\EntityPropertyDetails[] $entity_property_details (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function migrationResourceUpdateEntityPropertiesValuePutAsync($atlassian_transfer_id, $entity_type, $entity_property_details)
    {
        return $this->migrationResourceUpdateEntityPropertiesValuePutAsyncWithHttpInfo($atlassian_transfer_id, $entity_type, $entity_property_details)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation migrationResourceUpdateEntityPropertiesValuePutAsyncWithHttpInfo
     *
     * Bulk update entity properties
     *
     * @param  string $atlassian_transfer_id The app migration transfer ID. (required)
     * @param  string $entity_type The type indicating the object that contains the entity properties. (required)
     * @param  \OpenAPI\Client\Model\EntityPropertyDetails[] $entity_property_details (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function migrationResourceUpdateEntityPropertiesValuePutAsyncWithHttpInfo($atlassian_transfer_id, $entity_type, $entity_property_details)
    {
        $returnType = '';
        $request = $this->migrationResourceUpdateEntityPropertiesValuePutRequest($atlassian_transfer_id, $entity_type, $entity_property_details);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'migrationResourceUpdateEntityPropertiesValuePut'
     *
     * @param  string $atlassian_transfer_id The app migration transfer ID. (required)
     * @param  string $entity_type The type indicating the object that contains the entity properties. (required)
     * @param  \OpenAPI\Client\Model\EntityPropertyDetails[] $entity_property_details (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function migrationResourceUpdateEntityPropertiesValuePutRequest($atlassian_transfer_id, $entity_type, $entity_property_details)
    {

        // verify the required parameter 'atlassian_transfer_id' is set
        if ($atlassian_transfer_id === null || (is_array($atlassian_transfer_id) && count($atlassian_transfer_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $atlassian_transfer_id when calling migrationResourceUpdateEntityPropertiesValuePut'
            );
        }

        // verify the required parameter 'entity_type' is set
        if ($entity_type === null || (is_array($entity_type) && count($entity_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $entity_type when calling migrationResourceUpdateEntityPropertiesValuePut'
            );
        }

        // verify the required parameter 'entity_property_details' is set
        if ($entity_property_details === null || (is_array($entity_property_details) && count($entity_property_details) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $entity_property_details when calling migrationResourceUpdateEntityPropertiesValuePut'
            );
        }
        if (count($entity_property_details) > 50) {
            throw new \InvalidArgumentException('invalid value for "$entity_property_details" when calling AppMigrationApi.migrationResourceUpdateEntityPropertiesValuePut, number of items must be less than or equal to 50.');
        }
        if (count($entity_property_details) < 1) {
            throw new \InvalidArgumentException('invalid value for "$entity_property_details" when calling AppMigrationApi.migrationResourceUpdateEntityPropertiesValuePut, number of items must be greater than or equal to 1.');
        }


        $resourcePath = '/rest/atlassian-connect/1/migration/properties/{entityType}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($atlassian_transfer_id !== null) {
            $headerParams['Atlassian-Transfer-Id'] = ObjectSerializer::toHeaderValue($atlassian_transfer_id);
        }

        // path params
        if ($entity_type !== null) {
            $resourcePath = str_replace(
                '{' . 'entityType' . '}',
                ObjectSerializer::toPathValue($entity_type),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($entity_property_details)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($entity_property_details));
            } else {
                $httpBody = $entity_property_details;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'PUT',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation migrationResourceWorkflowRuleSearchPost
     *
     * Get workflow transition rule configurations
     *
     * @param  string $atlassian_transfer_id The app migration transfer ID. (required)
     * @param  \OpenAPI\Client\Model\WorkflowRulesSearch $workflow_rules_search workflow_rules_search (required)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\WorkflowRulesSearchDetails
     */
    public function migrationResourceWorkflowRuleSearchPost($atlassian_transfer_id, $workflow_rules_search)
    {
        list($response) = $this->migrationResourceWorkflowRuleSearchPostWithHttpInfo($atlassian_transfer_id, $workflow_rules_search);
        return $response;
    }

    /**
     * Operation migrationResourceWorkflowRuleSearchPostWithHttpInfo
     *
     * Get workflow transition rule configurations
     *
     * @param  string $atlassian_transfer_id The app migration transfer ID. (required)
     * @param  \OpenAPI\Client\Model\WorkflowRulesSearch $workflow_rules_search (required)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\WorkflowRulesSearchDetails, HTTP status code, HTTP response headers (array of strings)
     */
    public function migrationResourceWorkflowRuleSearchPostWithHttpInfo($atlassian_transfer_id, $workflow_rules_search)
    {
        $request = $this->migrationResourceWorkflowRuleSearchPostRequest($atlassian_transfer_id, $workflow_rules_search);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
            
                case 200:
                    if ('\OpenAPI\Client\Model\WorkflowRulesSearchDetails' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\WorkflowRulesSearchDetails' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\WorkflowRulesSearchDetails', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            
            
            
            }

            $returnType = '\OpenAPI\Client\Model\WorkflowRulesSearchDetails';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\WorkflowRulesSearchDetails',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            
            
            
            }
            throw $e;
        }
    }

    /**
     * Operation migrationResourceWorkflowRuleSearchPostAsync
     *
     * Get workflow transition rule configurations
     *
     * @param  string $atlassian_transfer_id The app migration transfer ID. (required)
     * @param  \OpenAPI\Client\Model\WorkflowRulesSearch $workflow_rules_search (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function migrationResourceWorkflowRuleSearchPostAsync($atlassian_transfer_id, $workflow_rules_search)
    {
        return $this->migrationResourceWorkflowRuleSearchPostAsyncWithHttpInfo($atlassian_transfer_id, $workflow_rules_search)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation migrationResourceWorkflowRuleSearchPostAsyncWithHttpInfo
     *
     * Get workflow transition rule configurations
     *
     * @param  string $atlassian_transfer_id The app migration transfer ID. (required)
     * @param  \OpenAPI\Client\Model\WorkflowRulesSearch $workflow_rules_search (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function migrationResourceWorkflowRuleSearchPostAsyncWithHttpInfo($atlassian_transfer_id, $workflow_rules_search)
    {
        $returnType = '\OpenAPI\Client\Model\WorkflowRulesSearchDetails';
        $request = $this->migrationResourceWorkflowRuleSearchPostRequest($atlassian_transfer_id, $workflow_rules_search);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'migrationResourceWorkflowRuleSearchPost'
     *
     * @param  string $atlassian_transfer_id The app migration transfer ID. (required)
     * @param  \OpenAPI\Client\Model\WorkflowRulesSearch $workflow_rules_search (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function migrationResourceWorkflowRuleSearchPostRequest($atlassian_transfer_id, $workflow_rules_search)
    {

        // verify the required parameter 'atlassian_transfer_id' is set
        if ($atlassian_transfer_id === null || (is_array($atlassian_transfer_id) && count($atlassian_transfer_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $atlassian_transfer_id when calling migrationResourceWorkflowRuleSearchPost'
            );
        }

        // verify the required parameter 'workflow_rules_search' is set
        if ($workflow_rules_search === null || (is_array($workflow_rules_search) && count($workflow_rules_search) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $workflow_rules_search when calling migrationResourceWorkflowRuleSearchPost'
            );
        }

        $resourcePath = '/rest/atlassian-connect/1/migration/workflow/rule/search';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($atlassian_transfer_id !== null) {
            $headerParams['Atlassian-Transfer-Id'] = ObjectSerializer::toHeaderValue($atlassian_transfer_id);
        }



        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($workflow_rules_search)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($workflow_rules_search));
            } else {
                $httpBody = $workflow_rules_search;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
