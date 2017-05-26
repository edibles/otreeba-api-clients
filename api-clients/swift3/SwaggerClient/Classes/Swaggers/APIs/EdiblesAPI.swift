//
// EdiblesAPI.swift
//
// Generated by swagger-codegen
// https://github.com/swagger-api/swagger-codegen
//

import Alamofire



open class EdiblesAPI: APIBase {
    /**
     Find edible by Open Cannabis Product Code (OCPC).
     
     - parameter ocpc: (path) OCPC of the edible to return. 
     - parameter completion: completion handler to receive the data and the error objects
     */
    open class func getEdibleByOcpc(ocpc: String, completion: @escaping ((_ data: Edible?,_ error: Error?) -> Void)) {
        getEdibleByOcpcWithRequestBuilder(ocpc: ocpc).execute { (response, error) -> Void in
            completion(response?.body, error);
        }
    }


    /**
     Find edible by Open Cannabis Product Code (OCPC).
     - GET /edibles/{ocpc}
     - Returns a single edible.
     - examples: [{contentType=application/json, example={
  "strain" : {
    "name" : "Confidential Cheese",
    "ocpc" : "TTUYNUF3TP000000000000000"
  },
  "qr" : "https://www.cannabisreports.com/edible-reports/qr-code/mr-moxeys-mints/moxeys-mints-ginger",
  "image" : "https://www.cannabisreports.com/images/edibles/b/full_bf53ef28bb19d97624cab43e12614b3affbf1a31.jpg",
  "cbd" : "100mg",
  "cannabis" : "0mg",
  "description" : "aeiou",
  "type" : "Mint",
  "labTest" : "https://www.cannabisreports.com/lab-tests/b/bf53ef28bb19d97624cab43e12614b3affbf1a31.pdf",
  "url" : "https://www.cannabisreports.com/edible-reports/mr-moxeys-mints/moxeys-mints-ginger",
  "thc" : "20mg",
  "createdAt" : "2014-04-09 09:29:57",
  "ocpc" : "0000000000NJKLWH2HNZ00000",
  "hashOil" : "0mg",
  "name" : "Moxey's Mints - Ginger",
  "brand" : {
    "name" : "Mr. Moxey's Mints",
    "ocpc" : "0000000000NJKLW0000000000"
  },
  "updatedAt" : "2014-04-09 09:29:57"
}}]
     
     - parameter ocpc: (path) OCPC of the edible to return. 

     - returns: RequestBuilder<Edible> 
     */
    open class func getEdibleByOcpcWithRequestBuilder(ocpc: String) -> RequestBuilder<Edible> {
        var path = "/edibles/{ocpc}"
        path = path.replacingOccurrences(of: "{ocpc}", with: "\(ocpc)", options: .literal, range: nil)
        let URLString = SwaggerClientAPI.basePath + path
        let parameters: [String:Any]? = nil

        let url = NSURLComponents(string: URLString)


        let requestBuilder: RequestBuilder<Edible>.Type = SwaggerClientAPI.requestBuilderFactory.getBuilder()

        return requestBuilder.init(method: "GET", URLString: (url?.string ?? URLString), parameters: parameters, isBody: false)
    }

    /**
     * enum for parameter sort
     */
    public enum Sort_getEdibles: String { 
        case createdat = "-createdAt"
        case createdat = "createdAt"
        case updatedat = "-updatedAt"
        case updatedat = "updatedAt"
        case name = "-name"
        case name = "name"
    }

    /**
     Get a list of all current edibles.
     
     - parameter page: (query) Page to be returned. (optional)
     - parameter count: (query) The number of items to return. Default 10. Max 50. (optional, default to 10)
     - parameter sort: (query) How to sort the items. (optional, default to -createdAt)
     - parameter completion: completion handler to receive the data and the error objects
     */
    open class func getEdibles(page: Int32? = nil, count: Int32? = nil, sort: Sort_getEdibles? = nil, completion: @escaping ((_ data: InlineResponse2002?,_ error: Error?) -> Void)) {
        getEdiblesWithRequestBuilder(page: page, count: count, sort: sort).execute { (response, error) -> Void in
            completion(response?.body, error);
        }
    }


    /**
     Get a list of all current edibles.
     - GET /edibles
     - Returns a paginated list of edibles.
     - examples: [{contentType=application/json, example={
  "meta" : {
    "pagination" : {
      "per_page" : 10,
      "total" : 64,
      "count" : 10,
      "links" : {
        "previous" : "https://api.otreeba.com/v1/seed-companies/VUJCJ00000000000000000000/strains?page=1",
        "next" : "https://api.otreeba.com/v1/seed-companies/VUJCJ00000000000000000000/strains?page=3"
      },
      "total_pages" : 1,
      "current_page" : 1
    }
  }
}}]
     
     - parameter page: (query) Page to be returned. (optional)
     - parameter count: (query) The number of items to return. Default 10. Max 50. (optional, default to 10)
     - parameter sort: (query) How to sort the items. (optional, default to -createdAt)

     - returns: RequestBuilder<InlineResponse2002> 
     */
    open class func getEdiblesWithRequestBuilder(page: Int32? = nil, count: Int32? = nil, sort: Sort_getEdibles? = nil) -> RequestBuilder<InlineResponse2002> {
        let path = "/edibles"
        let URLString = SwaggerClientAPI.basePath + path
        let parameters: [String:Any]? = nil

        let url = NSURLComponents(string: URLString)
        url?.queryItems = APIHelper.mapValuesToQueryItems(values:[
            "page": page?.encodeToJSON(), 
            "count": count?.encodeToJSON(), 
            "sort": sort?.rawValue
        ])
        

        let requestBuilder: RequestBuilder<InlineResponse2002>.Type = SwaggerClientAPI.requestBuilderFactory.getBuilder()

        return requestBuilder.init(method: "GET", URLString: (url?.string ?? URLString), parameters: parameters, isBody: false)
    }

}