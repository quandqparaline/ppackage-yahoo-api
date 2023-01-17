<?php
/**
 * AdGroupLabelServiceApi
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Yahoo!広告 検索広告 API リファレンス / Yahoo! JAPAN Ads Search Ads API Reference
 *
 * <div lang=\"ja\">Yahoo!広告 検索広告 APIのWebサービスについて説明します。</div> <div lang=\"en\">Search Ads API Web Services supported in Yahoo! JAPAN Ads API.</div> <div><a target=\"_blank\" href=\"https://github.com/yahoojp-marketing/ads-search-api-documents/blob/master/design/v9/Route.yaml\">OpenAPI Specification</a></div> <div lang=\"ja\"><a target=\"_blank\" href=\"https://github.com/yahoojp-marketing/ads-search-api-documents/blob/master/bestpractice/ja\">Best Practice</a></div> <div lang=\"en\"><a target=\"_blank\" href=\"https://github.com/yahoojp-marketing/ads-search-api-documents/blob/master/bestpractice/en\">Best Practice</a></div>
 *
 * The version of the OpenAPI document: v9
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
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
 * AdGroupLabelServiceApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AdGroupLabelServiceApi
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

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'adGroupLabelServiceAddPost' => [
            'application/json',
        ],
        'adGroupLabelServiceRemovePost' => [
            'application/json',
        ],
    ];

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
     * Operation adGroupLabelServiceAddPost
     *
     * @param  \OpenAPI\Client\Model\AdGroupLabelServiceOperation $ad_group_label_service_operation ad_group_label_service_operation (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adGroupLabelServiceAddPost'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return |\OpenAPI\Client\Model\AdGroupLabelServiceMutateResponse
     */
    public function adGroupLabelServiceAddPost($ad_group_label_service_operation = null, string $contentType = self::contentTypes['adGroupLabelServiceAddPost'][0])
    {
        list($response) = $this->adGroupLabelServiceAddPostWithHttpInfo($ad_group_label_service_operation, $contentType);
        return $response;
    }

    /**
     * Operation adGroupLabelServiceAddPostWithHttpInfo
     *
     * @param  \OpenAPI\Client\Model\AdGroupLabelServiceOperation $ad_group_label_service_operation (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adGroupLabelServiceAddPost'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of |\OpenAPI\Client\Model\AdGroupLabelServiceMutateResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function adGroupLabelServiceAddPostWithHttpInfo($ad_group_label_service_operation = null, string $contentType = self::contentTypes['adGroupLabelServiceAddPost'][0])
    {
        $request = $this->adGroupLabelServiceAddPostRequest($ad_group_label_service_operation, $contentType);

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
                    if ('\OpenAPI\Client\Model\AdGroupLabelServiceMutateResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\AdGroupLabelServiceMutateResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\AdGroupLabelServiceMutateResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\Model\AdGroupLabelServiceMutateResponse';
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
                        '\OpenAPI\Client\Model\AdGroupLabelServiceMutateResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation adGroupLabelServiceAddPostAsync
     *
     * @param  \OpenAPI\Client\Model\AdGroupLabelServiceOperation $ad_group_label_service_operation (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adGroupLabelServiceAddPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function adGroupLabelServiceAddPostAsync($ad_group_label_service_operation = null, string $contentType = self::contentTypes['adGroupLabelServiceAddPost'][0])
    {
        return $this->adGroupLabelServiceAddPostAsyncWithHttpInfo($ad_group_label_service_operation, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation adGroupLabelServiceAddPostAsyncWithHttpInfo
     *
     * @param  \OpenAPI\Client\Model\AdGroupLabelServiceOperation $ad_group_label_service_operation (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adGroupLabelServiceAddPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function adGroupLabelServiceAddPostAsyncWithHttpInfo($ad_group_label_service_operation = null, string $contentType = self::contentTypes['adGroupLabelServiceAddPost'][0])
    {
        $returnType = '\OpenAPI\Client\Model\AdGroupLabelServiceMutateResponse';
        $request = $this->adGroupLabelServiceAddPostRequest($ad_group_label_service_operation, $contentType);

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
     * Create request for operation 'adGroupLabelServiceAddPost'
     *
     * @param  \OpenAPI\Client\Model\AdGroupLabelServiceOperation $ad_group_label_service_operation (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adGroupLabelServiceAddPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function adGroupLabelServiceAddPostRequest($ad_group_label_service_operation = null, string $contentType = self::contentTypes['adGroupLabelServiceAddPost'][0])
    {



        $resourcePath = '/AdGroupLabelService/add';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($ad_group_label_service_operation)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($ad_group_label_service_operation));
            } else {
                $httpBody = $ad_group_label_service_operation;
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

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
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
     * Operation adGroupLabelServiceRemovePost
     *
     * @param  \OpenAPI\Client\Model\AdGroupLabelServiceOperation $ad_group_label_service_operation ad_group_label_service_operation (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adGroupLabelServiceRemovePost'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return |\OpenAPI\Client\Model\AdGroupLabelServiceMutateResponse
     */
    public function adGroupLabelServiceRemovePost($ad_group_label_service_operation = null, string $contentType = self::contentTypes['adGroupLabelServiceRemovePost'][0])
    {
        list($response) = $this->adGroupLabelServiceRemovePostWithHttpInfo($ad_group_label_service_operation, $contentType);
        return $response;
    }

    /**
     * Operation adGroupLabelServiceRemovePostWithHttpInfo
     *
     * @param  \OpenAPI\Client\Model\AdGroupLabelServiceOperation $ad_group_label_service_operation (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adGroupLabelServiceRemovePost'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of |\OpenAPI\Client\Model\AdGroupLabelServiceMutateResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function adGroupLabelServiceRemovePostWithHttpInfo($ad_group_label_service_operation = null, string $contentType = self::contentTypes['adGroupLabelServiceRemovePost'][0])
    {
        $request = $this->adGroupLabelServiceRemovePostRequest($ad_group_label_service_operation, $contentType);

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
                    if ('\OpenAPI\Client\Model\AdGroupLabelServiceMutateResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\AdGroupLabelServiceMutateResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\AdGroupLabelServiceMutateResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\Model\AdGroupLabelServiceMutateResponse';
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
                        '\OpenAPI\Client\Model\AdGroupLabelServiceMutateResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation adGroupLabelServiceRemovePostAsync
     *
     * @param  \OpenAPI\Client\Model\AdGroupLabelServiceOperation $ad_group_label_service_operation (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adGroupLabelServiceRemovePost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function adGroupLabelServiceRemovePostAsync($ad_group_label_service_operation = null, string $contentType = self::contentTypes['adGroupLabelServiceRemovePost'][0])
    {
        return $this->adGroupLabelServiceRemovePostAsyncWithHttpInfo($ad_group_label_service_operation, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation adGroupLabelServiceRemovePostAsyncWithHttpInfo
     *
     * @param  \OpenAPI\Client\Model\AdGroupLabelServiceOperation $ad_group_label_service_operation (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adGroupLabelServiceRemovePost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function adGroupLabelServiceRemovePostAsyncWithHttpInfo($ad_group_label_service_operation = null, string $contentType = self::contentTypes['adGroupLabelServiceRemovePost'][0])
    {
        $returnType = '\OpenAPI\Client\Model\AdGroupLabelServiceMutateResponse';
        $request = $this->adGroupLabelServiceRemovePostRequest($ad_group_label_service_operation, $contentType);

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
     * Create request for operation 'adGroupLabelServiceRemovePost'
     *
     * @param  \OpenAPI\Client\Model\AdGroupLabelServiceOperation $ad_group_label_service_operation (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adGroupLabelServiceRemovePost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function adGroupLabelServiceRemovePostRequest($ad_group_label_service_operation = null, string $contentType = self::contentTypes['adGroupLabelServiceRemovePost'][0])
    {



        $resourcePath = '/AdGroupLabelService/remove';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($ad_group_label_service_operation)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($ad_group_label_service_operation));
            } else {
                $httpBody = $ad_group_label_service_operation;
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

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
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
