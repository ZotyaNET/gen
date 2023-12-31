<?php
/**
 * ProjectFeaturesApi
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
 * ProjectFeaturesApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ProjectFeaturesApi
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
     * Operation getFeaturesForProject
     *
     * Get project features
     *
     * @param  string $project_id_or_key The ID or (case-sensitive) key of the project. (required)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\ContainerForProjectFeatures
     */
    public function getFeaturesForProject($project_id_or_key)
    {
        list($response) = $this->getFeaturesForProjectWithHttpInfo($project_id_or_key);
        return $response;
    }

    /**
     * Operation getFeaturesForProjectWithHttpInfo
     *
     * Get project features
     *
     * @param  string $project_id_or_key The ID or (case-sensitive) key of the project. (required)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\ContainerForProjectFeatures, HTTP status code, HTTP response headers (array of strings)
     */
    public function getFeaturesForProjectWithHttpInfo($project_id_or_key)
    {
        $request = $this->getFeaturesForProjectRequest($project_id_or_key);

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
                    if ('\OpenAPI\Client\Model\ContainerForProjectFeatures' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\ContainerForProjectFeatures' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\ContainerForProjectFeatures', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            
            
            
            
            
            }

            $returnType = '\OpenAPI\Client\Model\ContainerForProjectFeatures';
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
                        '\OpenAPI\Client\Model\ContainerForProjectFeatures',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            
            
            
            
            
            }
            throw $e;
        }
    }

    /**
     * Operation getFeaturesForProjectAsync
     *
     * Get project features
     *
     * @param  string $project_id_or_key The ID or (case-sensitive) key of the project. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFeaturesForProjectAsync($project_id_or_key)
    {
        return $this->getFeaturesForProjectAsyncWithHttpInfo($project_id_or_key)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getFeaturesForProjectAsyncWithHttpInfo
     *
     * Get project features
     *
     * @param  string $project_id_or_key The ID or (case-sensitive) key of the project. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFeaturesForProjectAsyncWithHttpInfo($project_id_or_key)
    {
        $returnType = '\OpenAPI\Client\Model\ContainerForProjectFeatures';
        $request = $this->getFeaturesForProjectRequest($project_id_or_key);

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
     * Create request for operation 'getFeaturesForProject'
     *
     * @param  string $project_id_or_key The ID or (case-sensitive) key of the project. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getFeaturesForProjectRequest($project_id_or_key)
    {

        // verify the required parameter 'project_id_or_key' is set
        if ($project_id_or_key === null || (is_array($project_id_or_key) && count($project_id_or_key) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $project_id_or_key when calling getFeaturesForProject'
            );
        }

        $resourcePath = '/rest/api/2/project/{projectIdOrKey}/features';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($project_id_or_key !== null) {
            $resourcePath = str_replace(
                '{' . 'projectIdOrKey' . '}',
                ObjectSerializer::toPathValue($project_id_or_key),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
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

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
        // this endpoint requires HTTP basic authentication
        if (!empty($this->config->getUsername()) || !(empty($this->config->getPassword()))) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation toggleFeatureForProject
     *
     * Set project feature state
     *
     * @param  string $project_id_or_key The ID or (case-sensitive) key of the project. (required)
     * @param  string $feature_key The key of the feature. (required)
     * @param  \OpenAPI\Client\Model\ProjectFeatureState $project_feature_state Details of the feature state change. (required)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\ContainerForProjectFeatures
     */
    public function toggleFeatureForProject($project_id_or_key, $feature_key, $project_feature_state)
    {
        list($response) = $this->toggleFeatureForProjectWithHttpInfo($project_id_or_key, $feature_key, $project_feature_state);
        return $response;
    }

    /**
     * Operation toggleFeatureForProjectWithHttpInfo
     *
     * Set project feature state
     *
     * @param  string $project_id_or_key The ID or (case-sensitive) key of the project. (required)
     * @param  string $feature_key The key of the feature. (required)
     * @param  \OpenAPI\Client\Model\ProjectFeatureState $project_feature_state Details of the feature state change. (required)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\ContainerForProjectFeatures, HTTP status code, HTTP response headers (array of strings)
     */
    public function toggleFeatureForProjectWithHttpInfo($project_id_or_key, $feature_key, $project_feature_state)
    {
        $request = $this->toggleFeatureForProjectRequest($project_id_or_key, $feature_key, $project_feature_state);

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
                    if ('\OpenAPI\Client\Model\ContainerForProjectFeatures' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\ContainerForProjectFeatures' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\ContainerForProjectFeatures', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            
            
            
            
            
            }

            $returnType = '\OpenAPI\Client\Model\ContainerForProjectFeatures';
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
                        '\OpenAPI\Client\Model\ContainerForProjectFeatures',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            
            
            
            
            
            }
            throw $e;
        }
    }

    /**
     * Operation toggleFeatureForProjectAsync
     *
     * Set project feature state
     *
     * @param  string $project_id_or_key The ID or (case-sensitive) key of the project. (required)
     * @param  string $feature_key The key of the feature. (required)
     * @param  \OpenAPI\Client\Model\ProjectFeatureState $project_feature_state Details of the feature state change. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function toggleFeatureForProjectAsync($project_id_or_key, $feature_key, $project_feature_state)
    {
        return $this->toggleFeatureForProjectAsyncWithHttpInfo($project_id_or_key, $feature_key, $project_feature_state)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation toggleFeatureForProjectAsyncWithHttpInfo
     *
     * Set project feature state
     *
     * @param  string $project_id_or_key The ID or (case-sensitive) key of the project. (required)
     * @param  string $feature_key The key of the feature. (required)
     * @param  \OpenAPI\Client\Model\ProjectFeatureState $project_feature_state Details of the feature state change. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function toggleFeatureForProjectAsyncWithHttpInfo($project_id_or_key, $feature_key, $project_feature_state)
    {
        $returnType = '\OpenAPI\Client\Model\ContainerForProjectFeatures';
        $request = $this->toggleFeatureForProjectRequest($project_id_or_key, $feature_key, $project_feature_state);

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
     * Create request for operation 'toggleFeatureForProject'
     *
     * @param  string $project_id_or_key The ID or (case-sensitive) key of the project. (required)
     * @param  string $feature_key The key of the feature. (required)
     * @param  \OpenAPI\Client\Model\ProjectFeatureState $project_feature_state Details of the feature state change. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function toggleFeatureForProjectRequest($project_id_or_key, $feature_key, $project_feature_state)
    {

        // verify the required parameter 'project_id_or_key' is set
        if ($project_id_or_key === null || (is_array($project_id_or_key) && count($project_id_or_key) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $project_id_or_key when calling toggleFeatureForProject'
            );
        }

        // verify the required parameter 'feature_key' is set
        if ($feature_key === null || (is_array($feature_key) && count($feature_key) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $feature_key when calling toggleFeatureForProject'
            );
        }

        // verify the required parameter 'project_feature_state' is set
        if ($project_feature_state === null || (is_array($project_feature_state) && count($project_feature_state) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $project_feature_state when calling toggleFeatureForProject'
            );
        }

        $resourcePath = '/rest/api/2/project/{projectIdOrKey}/features/{featureKey}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($project_id_or_key !== null) {
            $resourcePath = str_replace(
                '{' . 'projectIdOrKey' . '}',
                ObjectSerializer::toPathValue($project_id_or_key),
                $resourcePath
            );
        }
        // path params
        if ($feature_key !== null) {
            $resourcePath = str_replace(
                '{' . 'featureKey' . '}',
                ObjectSerializer::toPathValue($feature_key),
                $resourcePath
            );
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
        if (isset($project_feature_state)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($project_feature_state));
            } else {
                $httpBody = $project_feature_state;
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

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
        // this endpoint requires HTTP basic authentication
        if (!empty($this->config->getUsername()) || !(empty($this->config->getPassword()))) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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
