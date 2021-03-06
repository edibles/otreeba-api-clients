<?php
/**
 * BrandsApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Otreeba Open Cannabis API
 *
 * This is an open, canonical database of cannabis seed companies, strains, brands, products, retailers, and studies from [Otreeba](https://otreeba.com). It is written on the OpenAPI Specification AKA Swagger. You can find out more about the Open API Initiative at [https://www.openapis.org/](https://www.openapis.org), or more info on Swagger at [http://swagger.io/](http://swagger.io/).
 *
 * OpenAPI spec version: 1.0.0
 * Contact: api@otreeba.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\Configuration;
use \Swagger\Client\ObjectSerializer;

/**
 * BrandsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BrandsApi
{
    /**
     * API Client
     *
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swagger\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     *
     * @return BrandsApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getBrandByOcpc
     *
     * Find brand by Open Cannabis Product Code (OCPC).
     *
     * @param string $ocpc OCPC of the brand to return. (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\Brand
     */
    public function getBrandByOcpc($ocpc)
    {
        list($response) = $this->getBrandByOcpcWithHttpInfo($ocpc);
        return $response;
    }

    /**
     * Operation getBrandByOcpcWithHttpInfo
     *
     * Find brand by Open Cannabis Product Code (OCPC).
     *
     * @param string $ocpc OCPC of the brand to return. (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\Brand, HTTP status code, HTTP response headers (array of strings)
     */
    public function getBrandByOcpcWithHttpInfo($ocpc)
    {
        // verify the required parameter 'ocpc' is set
        if ($ocpc === null) {
            throw new \InvalidArgumentException('Missing the required parameter $ocpc when calling getBrandByOcpc');
        }
        // parse inputs
        $resourcePath = "/brands/{ocpc}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($ocpc !== null) {
            $resourcePath = str_replace(
                "{" . "ocpc" . "}",
                $this->apiClient->getSerializer()->toPathValue($ocpc),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('X-API-Key');
        if (strlen($apiKey) !== 0) {
            $headerParams['X-API-Key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\Brand',
                '/brands/{ocpc}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Brand', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Brand', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getBrandEdibles
     *
     * Get a list of all current edibles for the given brand.
     *
     * @param string $ocpc OCPC of the brand to list edibles for. (required)
     * @param int $page Page to be returned. (optional)
     * @param int $count The number of items to return. Default 10. Max 50. (optional, default to 10)
     * @param string $sort How to sort the items. (optional, default to -createdAt)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\InlineResponse2008
     */
    public function getBrandEdibles($ocpc, $page = null, $count = '10', $sort = '-createdAt')
    {
        list($response) = $this->getBrandEdiblesWithHttpInfo($ocpc, $page, $count, $sort);
        return $response;
    }

    /**
     * Operation getBrandEdiblesWithHttpInfo
     *
     * Get a list of all current edibles for the given brand.
     *
     * @param string $ocpc OCPC of the brand to list edibles for. (required)
     * @param int $page Page to be returned. (optional)
     * @param int $count The number of items to return. Default 10. Max 50. (optional, default to 10)
     * @param string $sort How to sort the items. (optional, default to -createdAt)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\InlineResponse2008, HTTP status code, HTTP response headers (array of strings)
     */
    public function getBrandEdiblesWithHttpInfo($ocpc, $page = null, $count = '10', $sort = '-createdAt')
    {
        // verify the required parameter 'ocpc' is set
        if ($ocpc === null) {
            throw new \InvalidArgumentException('Missing the required parameter $ocpc when calling getBrandEdibles');
        }
        // parse inputs
        $resourcePath = "/brands/{ocpc}/edibles";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($page);
        }
        // query params
        if ($count !== null) {
            $queryParams['count'] = $this->apiClient->getSerializer()->toQueryValue($count);
        }
        // query params
        if ($sort !== null) {
            $queryParams['sort'] = $this->apiClient->getSerializer()->toQueryValue($sort);
        }
        // path params
        if ($ocpc !== null) {
            $resourcePath = str_replace(
                "{" . "ocpc" . "}",
                $this->apiClient->getSerializer()->toPathValue($ocpc),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('X-API-Key');
        if (strlen($apiKey) !== 0) {
            $headerParams['X-API-Key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\InlineResponse2008',
                '/brands/{ocpc}/edibles'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\InlineResponse2008', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse2008', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getBrandExtracts
     *
     * Get a list of all current extracts for the given brand.
     *
     * @param string $ocpc OCPC of the brand to list extracts for. (required)
     * @param int $page Page to be returned. (optional)
     * @param int $count The number of items to return. Default 10. Max 50. (optional, default to 10)
     * @param string $sort How to sort the items. (optional, default to -createdAt)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\InlineResponse2007
     */
    public function getBrandExtracts($ocpc, $page = null, $count = '10', $sort = '-createdAt')
    {
        list($response) = $this->getBrandExtractsWithHttpInfo($ocpc, $page, $count, $sort);
        return $response;
    }

    /**
     * Operation getBrandExtractsWithHttpInfo
     *
     * Get a list of all current extracts for the given brand.
     *
     * @param string $ocpc OCPC of the brand to list extracts for. (required)
     * @param int $page Page to be returned. (optional)
     * @param int $count The number of items to return. Default 10. Max 50. (optional, default to 10)
     * @param string $sort How to sort the items. (optional, default to -createdAt)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\InlineResponse2007, HTTP status code, HTTP response headers (array of strings)
     */
    public function getBrandExtractsWithHttpInfo($ocpc, $page = null, $count = '10', $sort = '-createdAt')
    {
        // verify the required parameter 'ocpc' is set
        if ($ocpc === null) {
            throw new \InvalidArgumentException('Missing the required parameter $ocpc when calling getBrandExtracts');
        }
        // parse inputs
        $resourcePath = "/brands/{ocpc}/extracts";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($page);
        }
        // query params
        if ($count !== null) {
            $queryParams['count'] = $this->apiClient->getSerializer()->toQueryValue($count);
        }
        // query params
        if ($sort !== null) {
            $queryParams['sort'] = $this->apiClient->getSerializer()->toQueryValue($sort);
        }
        // path params
        if ($ocpc !== null) {
            $resourcePath = str_replace(
                "{" . "ocpc" . "}",
                $this->apiClient->getSerializer()->toPathValue($ocpc),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('X-API-Key');
        if (strlen($apiKey) !== 0) {
            $headerParams['X-API-Key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\InlineResponse2007',
                '/brands/{ocpc}/extracts'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\InlineResponse2007', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse2007', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getBrandFlowers
     *
     * Get a list of all current flowers for the given brand.
     *
     * @param string $ocpc OCPC of the brand to list flowers for. (required)
     * @param int $page Page to be returned. (optional)
     * @param int $count The number of items to return. Default 10. Max 50. (optional, default to 10)
     * @param string $sort How to sort the items. (optional, default to -createdAt)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\InlineResponse2006
     */
    public function getBrandFlowers($ocpc, $page = null, $count = '10', $sort = '-createdAt')
    {
        list($response) = $this->getBrandFlowersWithHttpInfo($ocpc, $page, $count, $sort);
        return $response;
    }

    /**
     * Operation getBrandFlowersWithHttpInfo
     *
     * Get a list of all current flowers for the given brand.
     *
     * @param string $ocpc OCPC of the brand to list flowers for. (required)
     * @param int $page Page to be returned. (optional)
     * @param int $count The number of items to return. Default 10. Max 50. (optional, default to 10)
     * @param string $sort How to sort the items. (optional, default to -createdAt)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\InlineResponse2006, HTTP status code, HTTP response headers (array of strings)
     */
    public function getBrandFlowersWithHttpInfo($ocpc, $page = null, $count = '10', $sort = '-createdAt')
    {
        // verify the required parameter 'ocpc' is set
        if ($ocpc === null) {
            throw new \InvalidArgumentException('Missing the required parameter $ocpc when calling getBrandFlowers');
        }
        // parse inputs
        $resourcePath = "/brands/{ocpc}/flowers";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($page);
        }
        // query params
        if ($count !== null) {
            $queryParams['count'] = $this->apiClient->getSerializer()->toQueryValue($count);
        }
        // query params
        if ($sort !== null) {
            $queryParams['sort'] = $this->apiClient->getSerializer()->toQueryValue($sort);
        }
        // path params
        if ($ocpc !== null) {
            $resourcePath = str_replace(
                "{" . "ocpc" . "}",
                $this->apiClient->getSerializer()->toPathValue($ocpc),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('X-API-Key');
        if (strlen($apiKey) !== 0) {
            $headerParams['X-API-Key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\InlineResponse2006',
                '/brands/{ocpc}/flowers'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\InlineResponse2006', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse2006', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getBrandProducts
     *
     * Get a list of all current products for the given brand.
     *
     * @param string $ocpc OCPC of the brand to list products for. (required)
     * @param int $page Page to be returned. (optional)
     * @param int $count The number of items to return. Default 10. Max 50. (optional, default to 10)
     * @param string $sort How to sort the items. (optional, default to -createdAt)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\InlineResponse2009
     */
    public function getBrandProducts($ocpc, $page = null, $count = '10', $sort = '-createdAt')
    {
        list($response) = $this->getBrandProductsWithHttpInfo($ocpc, $page, $count, $sort);
        return $response;
    }

    /**
     * Operation getBrandProductsWithHttpInfo
     *
     * Get a list of all current products for the given brand.
     *
     * @param string $ocpc OCPC of the brand to list products for. (required)
     * @param int $page Page to be returned. (optional)
     * @param int $count The number of items to return. Default 10. Max 50. (optional, default to 10)
     * @param string $sort How to sort the items. (optional, default to -createdAt)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\InlineResponse2009, HTTP status code, HTTP response headers (array of strings)
     */
    public function getBrandProductsWithHttpInfo($ocpc, $page = null, $count = '10', $sort = '-createdAt')
    {
        // verify the required parameter 'ocpc' is set
        if ($ocpc === null) {
            throw new \InvalidArgumentException('Missing the required parameter $ocpc when calling getBrandProducts');
        }
        // parse inputs
        $resourcePath = "/brands/{ocpc}/products";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($page);
        }
        // query params
        if ($count !== null) {
            $queryParams['count'] = $this->apiClient->getSerializer()->toQueryValue($count);
        }
        // query params
        if ($sort !== null) {
            $queryParams['sort'] = $this->apiClient->getSerializer()->toQueryValue($sort);
        }
        // path params
        if ($ocpc !== null) {
            $resourcePath = str_replace(
                "{" . "ocpc" . "}",
                $this->apiClient->getSerializer()->toPathValue($ocpc),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('X-API-Key');
        if (strlen($apiKey) !== 0) {
            $headerParams['X-API-Key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\InlineResponse2009',
                '/brands/{ocpc}/products'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\InlineResponse2009', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse2009', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getBrands
     *
     * Get a list of all current brands.
     *
     * @param int $page Page to be returned. (optional)
     * @param int $count The number of items to return. Default 10. Max 50. (optional, default to 10)
     * @param string $sort How to sort the items. (optional, default to -createdAt)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\InlineResponse2005
     */
    public function getBrands($page = null, $count = '10', $sort = '-createdAt')
    {
        list($response) = $this->getBrandsWithHttpInfo($page, $count, $sort);
        return $response;
    }

    /**
     * Operation getBrandsWithHttpInfo
     *
     * Get a list of all current brands.
     *
     * @param int $page Page to be returned. (optional)
     * @param int $count The number of items to return. Default 10. Max 50. (optional, default to 10)
     * @param string $sort How to sort the items. (optional, default to -createdAt)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\InlineResponse2005, HTTP status code, HTTP response headers (array of strings)
     */
    public function getBrandsWithHttpInfo($page = null, $count = '10', $sort = '-createdAt')
    {
        // parse inputs
        $resourcePath = "/brands";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($page);
        }
        // query params
        if ($count !== null) {
            $queryParams['count'] = $this->apiClient->getSerializer()->toQueryValue($count);
        }
        // query params
        if ($sort !== null) {
            $queryParams['sort'] = $this->apiClient->getSerializer()->toQueryValue($sort);
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('X-API-Key');
        if (strlen($apiKey) !== 0) {
            $headerParams['X-API-Key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\InlineResponse2005',
                '/brands'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\InlineResponse2005', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse2005', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
