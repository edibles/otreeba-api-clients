/**
 * Otreeba Open Cannabis API
 * This is an open, canonical database of cannabis seed companies, strains, brands, products, retailers, and studies from [Otreeba](https://otreeba.com). It is written on the OpenAPI Specification AKA Swagger. You can find out more about the Open API Initiative at [https://www.openapis.org/](https://www.openapis.org), or more info on Swagger at [http://swagger.io/](http://swagger.io/).
 *
 * OpenAPI spec version: 1.0.0
 * Contact: api@otreeba.com
 *
 * NOTE: This class is auto generated by the swagger code generator 2.2.3.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 */

/*
 * ExtractsApi.h
 *
 * 
 */

#ifndef ExtractsApi_H_
#define ExtractsApi_H_


#include "ApiClient.h"

#include "Extract.h"
#include "Inline_response_200_3.h"
#include <cpprest/details/basic_types.h>

namespace io {
namespace swagger {
namespace client {
namespace api {

using namespace io::swagger::client::model;

class  ExtractsApi
{
public:
    ExtractsApi( std::shared_ptr<ApiClient> apiClient );
    virtual ~ExtractsApi();
    /// <summary>
    /// Find extract by Open Cannabis Product Code (OCPC).
    /// </summary>
    /// <remarks>
    /// Returns a single extract.
    /// </remarks>
    /// <param name="ocpc">OCPC of the extract to return.</param>
    pplx::task<std::shared_ptr<Extract>> getExtractByOcpc(utility::string_t ocpc);
    /// <summary>
    /// Get a list of all current extracts.
    /// </summary>
    /// <remarks>
    /// Returns a paginated list of extracts.
    /// </remarks>
    /// <param name="page">Page to be returned. (optional)</param>/// <param name="count">The number of items to return. Default 10. Max 50. (optional, default to 10)</param>/// <param name="sort">How to sort the items. (optional, default to -createdAt)</param>
    pplx::task<std::shared_ptr<Inline_response_200_3>> getExtracts(int32_t page, int32_t count, utility::string_t sort);

protected:
    std::shared_ptr<ApiClient> m_ApiClient;
};

}
}
}
}

#endif /* ExtractsApi_H_ */

