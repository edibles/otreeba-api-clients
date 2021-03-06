# SeedCompaniesApi

All URIs are relative to *https://api.otreeba.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSeedCompanies**](SeedCompaniesApi.md#getSeedCompanies) | **GET** /seed-companies | Get a list of all current seed companies.
[**getSeedCompanyByOcpc**](SeedCompaniesApi.md#getSeedCompanyByOcpc) | **GET** /seed-companies/{ocpc} | Find seed company by Open Cannabis Product Code (OCPC).
[**getSeedCompanyStrainsByOcpc**](SeedCompaniesApi.md#getSeedCompanyStrainsByOcpc) | **GET** /seed-companies/{ocpc}/strains | Find strains for a seed company by Open Cannabis Product Code (OCPC).


<a name="getSeedCompanies"></a>
# **getSeedCompanies**
> InlineResponse200 getSeedCompanies(page, count, sort)

Get a list of all current seed companies.

Returns a paginated list of seed companies.

### Example
```java
// Import classes:
//import io.swagger.client.ApiClient;
//import io.swagger.client.ApiException;
//import io.swagger.client.Configuration;
//import io.swagger.client.auth.*;
//import io.swagger.client.api.SeedCompaniesApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: api_key
ApiKeyAuth api_key = (ApiKeyAuth) defaultClient.getAuthentication("api_key");
api_key.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//api_key.setApiKeyPrefix("Token");

SeedCompaniesApi apiInstance = new SeedCompaniesApi();
Integer page = 56; // Integer | Page to be returned.
Integer count = 10; // Integer | The number of items to return. Default 10. Max 50.
String sort = "-createdAt"; // String | How to sort the items.
try {
    InlineResponse200 result = apiInstance.getSeedCompanies(page, count, sort);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling SeedCompaniesApi#getSeedCompanies");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **Integer**| Page to be returned. | [optional]
 **count** | **Integer**| The number of items to return. Default 10. Max 50. | [optional] [default to 10]
 **sort** | **String**| How to sort the items. | [optional] [default to -createdAt] [enum: -createdAt, createdAt, -updatedAt, updatedAt, -name, name]

### Return type

[**InlineResponse200**](InlineResponse200.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getSeedCompanyByOcpc"></a>
# **getSeedCompanyByOcpc**
> SeedCompany getSeedCompanyByOcpc(ocpc)

Find seed company by Open Cannabis Product Code (OCPC).

Returns a single seed company.

### Example
```java
// Import classes:
//import io.swagger.client.ApiClient;
//import io.swagger.client.ApiException;
//import io.swagger.client.Configuration;
//import io.swagger.client.auth.*;
//import io.swagger.client.api.SeedCompaniesApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: api_key
ApiKeyAuth api_key = (ApiKeyAuth) defaultClient.getAuthentication("api_key");
api_key.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//api_key.setApiKeyPrefix("Token");

SeedCompaniesApi apiInstance = new SeedCompaniesApi();
String ocpc = "ocpc_example"; // String | OCPC of the seed company to return.
try {
    SeedCompany result = apiInstance.getSeedCompanyByOcpc(ocpc);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling SeedCompaniesApi#getSeedCompanyByOcpc");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ocpc** | **String**| OCPC of the seed company to return. |

### Return type

[**SeedCompany**](SeedCompany.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getSeedCompanyStrainsByOcpc"></a>
# **getSeedCompanyStrainsByOcpc**
> InlineResponse2001 getSeedCompanyStrainsByOcpc(ocpc, page, count)

Find strains for a seed company by Open Cannabis Product Code (OCPC).

Returns a paginated list of strains for a single seed company.

### Example
```java
// Import classes:
//import io.swagger.client.ApiClient;
//import io.swagger.client.ApiException;
//import io.swagger.client.Configuration;
//import io.swagger.client.auth.*;
//import io.swagger.client.api.SeedCompaniesApi;

ApiClient defaultClient = Configuration.getDefaultApiClient();

// Configure API key authorization: api_key
ApiKeyAuth api_key = (ApiKeyAuth) defaultClient.getAuthentication("api_key");
api_key.setApiKey("YOUR API KEY");
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//api_key.setApiKeyPrefix("Token");

SeedCompaniesApi apiInstance = new SeedCompaniesApi();
String ocpc = "ocpc_example"; // String | OCPC of the seed company to return strains for.
Integer page = 56; // Integer | Page to be returned.
Integer count = 10; // Integer | The number of items to return. Default 10. Max 50.
try {
    InlineResponse2001 result = apiInstance.getSeedCompanyStrainsByOcpc(ocpc, page, count);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling SeedCompaniesApi#getSeedCompanyStrainsByOcpc");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ocpc** | **String**| OCPC of the seed company to return strains for. |
 **page** | **Integer**| Page to be returned. | [optional]
 **count** | **Integer**| The number of items to return. Default 10. Max 50. | [optional] [default to 10]

### Return type

[**InlineResponse2001**](InlineResponse2001.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

