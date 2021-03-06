/**
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

#ifndef _SWG_SWGBrandsApi_H_
#define _SWG_SWGBrandsApi_H_

#include "SWGHttpRequest.h"

#include <QString>
#include "SWGBrand.h"
#include "SWGInline_response_200_5.h"
#include "SWGInline_response_200_6.h"
#include "SWGInline_response_200_7.h"
#include "SWGInline_response_200_8.h"
#include "SWGInline_response_200_9.h"

#include <QObject>

namespace Swagger {

class SWGBrandsApi: public QObject {
    Q_OBJECT

public:
    SWGBrandsApi();
    SWGBrandsApi(QString host, QString basePath);
    ~SWGBrandsApi();

    QString host;
    QString basePath;
    QMap<QString, QString> defaultHeaders;

    void getBrandByOcpc(QString* ocpc);
    void getBrandEdibles(QString* ocpc, qint32 page, qint32 count, QString* sort);
    void getBrandExtracts(QString* ocpc, qint32 page, qint32 count, QString* sort);
    void getBrandFlowers(QString* ocpc, qint32 page, qint32 count, QString* sort);
    void getBrandProducts(QString* ocpc, qint32 page, qint32 count, QString* sort);
    void getBrands(qint32 page, qint32 count, QString* sort);
    
private:
    void getBrandByOcpcCallback (HttpRequestWorker * worker);
    void getBrandEdiblesCallback (HttpRequestWorker * worker);
    void getBrandExtractsCallback (HttpRequestWorker * worker);
    void getBrandFlowersCallback (HttpRequestWorker * worker);
    void getBrandProductsCallback (HttpRequestWorker * worker);
    void getBrandsCallback (HttpRequestWorker * worker);
    
signals:
    void getBrandByOcpcSignal(SWGBrand* summary);
    void getBrandEdiblesSignal(SWGInline_response_200_8* summary);
    void getBrandExtractsSignal(SWGInline_response_200_7* summary);
    void getBrandFlowersSignal(SWGInline_response_200_6* summary);
    void getBrandProductsSignal(SWGInline_response_200_9* summary);
    void getBrandsSignal(SWGInline_response_200_5* summary);
    
    void getBrandByOcpcSignalE(SWGBrand* summary, QNetworkReply::NetworkError error_type, QString& error_str);
    void getBrandEdiblesSignalE(SWGInline_response_200_8* summary, QNetworkReply::NetworkError error_type, QString& error_str);
    void getBrandExtractsSignalE(SWGInline_response_200_7* summary, QNetworkReply::NetworkError error_type, QString& error_str);
    void getBrandFlowersSignalE(SWGInline_response_200_6* summary, QNetworkReply::NetworkError error_type, QString& error_str);
    void getBrandProductsSignalE(SWGInline_response_200_9* summary, QNetworkReply::NetworkError error_type, QString& error_str);
    void getBrandsSignalE(SWGInline_response_200_5* summary, QNetworkReply::NetworkError error_type, QString& error_str);
    
};

}
#endif
