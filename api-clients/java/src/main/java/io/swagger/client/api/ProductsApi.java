/*
 * Otreeba Open Cannabis API
 * This is an open, canonical database of cannabis seed companies, strains, brands, products, retailers, and studies from [Otreeba](https://otreeba.com). It is written on the OpenAPI Specification AKA Swagger. You can find out more about the Open API Initiative at [https://www.openapis.org/](https://www.openapis.org), or more info on Swagger at [http://swagger.io/](http://swagger.io/).
 *
 * OpenAPI spec version: 1.0.0
 * Contact: api@otreeba.com
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 */


package io.swagger.client.api;

import io.swagger.client.ApiCallback;
import io.swagger.client.ApiClient;
import io.swagger.client.ApiException;
import io.swagger.client.ApiResponse;
import io.swagger.client.Configuration;
import io.swagger.client.Pair;
import io.swagger.client.ProgressRequestBody;
import io.swagger.client.ProgressResponseBody;

import com.google.gson.reflect.TypeToken;

import java.io.IOException;


import io.swagger.client.model.InlineResponse20010;
import io.swagger.client.model.Product;

import java.lang.reflect.Type;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

public class ProductsApi {
    private ApiClient apiClient;

    public ProductsApi() {
        this(Configuration.getDefaultApiClient());
    }

    public ProductsApi(ApiClient apiClient) {
        this.apiClient = apiClient;
    }

    public ApiClient getApiClient() {
        return apiClient;
    }

    public void setApiClient(ApiClient apiClient) {
        this.apiClient = apiClient;
    }

    /* Build call for getProductByOcpc */
    private com.squareup.okhttp.Call getProductByOcpcCall(String ocpc, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = null;
        
        // create path and map variables
        String localVarPath = "/products/{ocpc}".replaceAll("\\{format\\}","json")
        .replaceAll("\\{" + "ocpc" + "\\}", apiClient.escapeString(ocpc.toString()));

        List<Pair> localVarQueryParams = new ArrayList<Pair>();

        Map<String, String> localVarHeaderParams = new HashMap<String, String>();

        Map<String, Object> localVarFormParams = new HashMap<String, Object>();

        final String[] localVarAccepts = {
            "application/json"
        };
        final String localVarAccept = apiClient.selectHeaderAccept(localVarAccepts);
        if (localVarAccept != null) localVarHeaderParams.put("Accept", localVarAccept);

        final String[] localVarContentTypes = {
            "application/json"
        };
        final String localVarContentType = apiClient.selectHeaderContentType(localVarContentTypes);
        localVarHeaderParams.put("Content-Type", localVarContentType);

        if(progressListener != null) {
            apiClient.getHttpClient().networkInterceptors().add(new com.squareup.okhttp.Interceptor() {
                @Override
                public com.squareup.okhttp.Response intercept(com.squareup.okhttp.Interceptor.Chain chain) throws IOException {
                    com.squareup.okhttp.Response originalResponse = chain.proceed(chain.request());
                    return originalResponse.newBuilder()
                    .body(new ProgressResponseBody(originalResponse.body(), progressListener))
                    .build();
                }
            });
        }

        String[] localVarAuthNames = new String[] {  };
        return apiClient.buildCall(localVarPath, "GET", localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarAuthNames, progressRequestListener);
    }
    
    @SuppressWarnings("rawtypes")
    private com.squareup.okhttp.Call getProductByOcpcValidateBeforeCall(String ocpc, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        
        // verify the required parameter 'ocpc' is set
        if (ocpc == null) {
            throw new ApiException("Missing the required parameter 'ocpc' when calling getProductByOcpc(Async)");
        }
        
        
        com.squareup.okhttp.Call call = getProductByOcpcCall(ocpc, progressListener, progressRequestListener);
        return call;

        
        
        
        
    }

    /**
     * Find product by Open Cannabis Product Code (OCPC).
     * Returns a single product.
     * @param ocpc OCPC of the product to return. (required)
     * @return Product
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public Product getProductByOcpc(String ocpc) throws ApiException {
        ApiResponse<Product> resp = getProductByOcpcWithHttpInfo(ocpc);
        return resp.getData();
    }

    /**
     * Find product by Open Cannabis Product Code (OCPC).
     * Returns a single product.
     * @param ocpc OCPC of the product to return. (required)
     * @return ApiResponse&lt;Product&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<Product> getProductByOcpcWithHttpInfo(String ocpc) throws ApiException {
        com.squareup.okhttp.Call call = getProductByOcpcValidateBeforeCall(ocpc, null, null);
        Type localVarReturnType = new TypeToken<Product>(){}.getType();
        return apiClient.execute(call, localVarReturnType);
    }

    /**
     * Find product by Open Cannabis Product Code (OCPC). (asynchronously)
     * Returns a single product.
     * @param ocpc OCPC of the product to return. (required)
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call getProductByOcpcAsync(String ocpc, final ApiCallback<Product> callback) throws ApiException {

        ProgressResponseBody.ProgressListener progressListener = null;
        ProgressRequestBody.ProgressRequestListener progressRequestListener = null;

        if (callback != null) {
            progressListener = new ProgressResponseBody.ProgressListener() {
                @Override
                public void update(long bytesRead, long contentLength, boolean done) {
                    callback.onDownloadProgress(bytesRead, contentLength, done);
                }
            };

            progressRequestListener = new ProgressRequestBody.ProgressRequestListener() {
                @Override
                public void onRequestProgress(long bytesWritten, long contentLength, boolean done) {
                    callback.onUploadProgress(bytesWritten, contentLength, done);
                }
            };
        }

        com.squareup.okhttp.Call call = getProductByOcpcValidateBeforeCall(ocpc, progressListener, progressRequestListener);
        Type localVarReturnType = new TypeToken<Product>(){}.getType();
        apiClient.executeAsync(call, localVarReturnType, callback);
        return call;
    }
    /* Build call for getProducts */
    private com.squareup.okhttp.Call getProductsCall(Integer page, Integer count, String sort, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = null;
        
        // create path and map variables
        String localVarPath = "/products".replaceAll("\\{format\\}","json");

        List<Pair> localVarQueryParams = new ArrayList<Pair>();
        if (page != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "page", page));
        if (count != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "count", count));
        if (sort != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "sort", sort));

        Map<String, String> localVarHeaderParams = new HashMap<String, String>();

        Map<String, Object> localVarFormParams = new HashMap<String, Object>();

        final String[] localVarAccepts = {
            "application/json"
        };
        final String localVarAccept = apiClient.selectHeaderAccept(localVarAccepts);
        if (localVarAccept != null) localVarHeaderParams.put("Accept", localVarAccept);

        final String[] localVarContentTypes = {
            "application/json"
        };
        final String localVarContentType = apiClient.selectHeaderContentType(localVarContentTypes);
        localVarHeaderParams.put("Content-Type", localVarContentType);

        if(progressListener != null) {
            apiClient.getHttpClient().networkInterceptors().add(new com.squareup.okhttp.Interceptor() {
                @Override
                public com.squareup.okhttp.Response intercept(com.squareup.okhttp.Interceptor.Chain chain) throws IOException {
                    com.squareup.okhttp.Response originalResponse = chain.proceed(chain.request());
                    return originalResponse.newBuilder()
                    .body(new ProgressResponseBody(originalResponse.body(), progressListener))
                    .build();
                }
            });
        }

        String[] localVarAuthNames = new String[] {  };
        return apiClient.buildCall(localVarPath, "GET", localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarAuthNames, progressRequestListener);
    }
    
    @SuppressWarnings("rawtypes")
    private com.squareup.okhttp.Call getProductsValidateBeforeCall(Integer page, Integer count, String sort, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        
        
        com.squareup.okhttp.Call call = getProductsCall(page, count, sort, progressListener, progressRequestListener);
        return call;

        
        
        
        
    }

    /**
     * Get a list of all current products.
     * Returns a paginated list of products.
     * @param page Page to be returned. (optional)
     * @param count The number of items to return. Default 10. Max 50. (optional, default to 10)
     * @param sort How to sort the items. (optional, default to -createdAt)
     * @return InlineResponse20010
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public InlineResponse20010 getProducts(Integer page, Integer count, String sort) throws ApiException {
        ApiResponse<InlineResponse20010> resp = getProductsWithHttpInfo(page, count, sort);
        return resp.getData();
    }

    /**
     * Get a list of all current products.
     * Returns a paginated list of products.
     * @param page Page to be returned. (optional)
     * @param count The number of items to return. Default 10. Max 50. (optional, default to 10)
     * @param sort How to sort the items. (optional, default to -createdAt)
     * @return ApiResponse&lt;InlineResponse20010&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<InlineResponse20010> getProductsWithHttpInfo(Integer page, Integer count, String sort) throws ApiException {
        com.squareup.okhttp.Call call = getProductsValidateBeforeCall(page, count, sort, null, null);
        Type localVarReturnType = new TypeToken<InlineResponse20010>(){}.getType();
        return apiClient.execute(call, localVarReturnType);
    }

    /**
     * Get a list of all current products. (asynchronously)
     * Returns a paginated list of products.
     * @param page Page to be returned. (optional)
     * @param count The number of items to return. Default 10. Max 50. (optional, default to 10)
     * @param sort How to sort the items. (optional, default to -createdAt)
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call getProductsAsync(Integer page, Integer count, String sort, final ApiCallback<InlineResponse20010> callback) throws ApiException {

        ProgressResponseBody.ProgressListener progressListener = null;
        ProgressRequestBody.ProgressRequestListener progressRequestListener = null;

        if (callback != null) {
            progressListener = new ProgressResponseBody.ProgressListener() {
                @Override
                public void update(long bytesRead, long contentLength, boolean done) {
                    callback.onDownloadProgress(bytesRead, contentLength, done);
                }
            };

            progressRequestListener = new ProgressRequestBody.ProgressRequestListener() {
                @Override
                public void onRequestProgress(long bytesWritten, long contentLength, boolean done) {
                    callback.onUploadProgress(bytesWritten, contentLength, done);
                }
            };
        }

        com.squareup.okhttp.Call call = getProductsValidateBeforeCall(page, count, sort, progressListener, progressRequestListener);
        Type localVarReturnType = new TypeToken<InlineResponse20010>(){}.getType();
        apiClient.executeAsync(call, localVarReturnType, callback);
        return call;
    }
}