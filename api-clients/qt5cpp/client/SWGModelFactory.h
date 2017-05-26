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

#ifndef ModelFactory_H_
#define ModelFactory_H_


#include "SWGBrand.h"
#include "SWGEdible.h"
#include "SWGError.h"
#include "SWGExtract.h"
#include "SWGFlower.h"
#include "SWGInline_response_200.h"
#include "SWGInline_response_200_1.h"
#include "SWGInline_response_200_10.h"
#include "SWGInline_response_200_10_meta.h"
#include "SWGInline_response_200_11.h"
#include "SWGInline_response_200_11_meta.h"
#include "SWGInline_response_200_1_meta.h"
#include "SWGInline_response_200_2.h"
#include "SWGInline_response_200_2_meta.h"
#include "SWGInline_response_200_3.h"
#include "SWGInline_response_200_3_meta.h"
#include "SWGInline_response_200_4.h"
#include "SWGInline_response_200_4_meta.h"
#include "SWGInline_response_200_5.h"
#include "SWGInline_response_200_5_meta.h"
#include "SWGInline_response_200_6.h"
#include "SWGInline_response_200_6_meta.h"
#include "SWGInline_response_200_7.h"
#include "SWGInline_response_200_7_meta.h"
#include "SWGInline_response_200_8.h"
#include "SWGInline_response_200_8_meta.h"
#include "SWGInline_response_200_9.h"
#include "SWGInline_response_200_9_meta.h"
#include "SWGInline_response_200_meta.h"
#include "SWGPagination.h"
#include "SWGProduct.h"
#include "SWGSeedCompany.h"
#include "SWGStrain.h"

namespace Swagger {
  inline void* create(QString type) {
    if(QString("SWGBrand").compare(type) == 0) {
      return new SWGBrand();
    }
    if(QString("SWGEdible").compare(type) == 0) {
      return new SWGEdible();
    }
    if(QString("SWGError").compare(type) == 0) {
      return new SWGError();
    }
    if(QString("SWGExtract").compare(type) == 0) {
      return new SWGExtract();
    }
    if(QString("SWGFlower").compare(type) == 0) {
      return new SWGFlower();
    }
    if(QString("SWGInline_response_200").compare(type) == 0) {
      return new SWGInline_response_200();
    }
    if(QString("SWGInline_response_200_1").compare(type) == 0) {
      return new SWGInline_response_200_1();
    }
    if(QString("SWGInline_response_200_10").compare(type) == 0) {
      return new SWGInline_response_200_10();
    }
    if(QString("SWGInline_response_200_10_meta").compare(type) == 0) {
      return new SWGInline_response_200_10_meta();
    }
    if(QString("SWGInline_response_200_11").compare(type) == 0) {
      return new SWGInline_response_200_11();
    }
    if(QString("SWGInline_response_200_11_meta").compare(type) == 0) {
      return new SWGInline_response_200_11_meta();
    }
    if(QString("SWGInline_response_200_1_meta").compare(type) == 0) {
      return new SWGInline_response_200_1_meta();
    }
    if(QString("SWGInline_response_200_2").compare(type) == 0) {
      return new SWGInline_response_200_2();
    }
    if(QString("SWGInline_response_200_2_meta").compare(type) == 0) {
      return new SWGInline_response_200_2_meta();
    }
    if(QString("SWGInline_response_200_3").compare(type) == 0) {
      return new SWGInline_response_200_3();
    }
    if(QString("SWGInline_response_200_3_meta").compare(type) == 0) {
      return new SWGInline_response_200_3_meta();
    }
    if(QString("SWGInline_response_200_4").compare(type) == 0) {
      return new SWGInline_response_200_4();
    }
    if(QString("SWGInline_response_200_4_meta").compare(type) == 0) {
      return new SWGInline_response_200_4_meta();
    }
    if(QString("SWGInline_response_200_5").compare(type) == 0) {
      return new SWGInline_response_200_5();
    }
    if(QString("SWGInline_response_200_5_meta").compare(type) == 0) {
      return new SWGInline_response_200_5_meta();
    }
    if(QString("SWGInline_response_200_6").compare(type) == 0) {
      return new SWGInline_response_200_6();
    }
    if(QString("SWGInline_response_200_6_meta").compare(type) == 0) {
      return new SWGInline_response_200_6_meta();
    }
    if(QString("SWGInline_response_200_7").compare(type) == 0) {
      return new SWGInline_response_200_7();
    }
    if(QString("SWGInline_response_200_7_meta").compare(type) == 0) {
      return new SWGInline_response_200_7_meta();
    }
    if(QString("SWGInline_response_200_8").compare(type) == 0) {
      return new SWGInline_response_200_8();
    }
    if(QString("SWGInline_response_200_8_meta").compare(type) == 0) {
      return new SWGInline_response_200_8_meta();
    }
    if(QString("SWGInline_response_200_9").compare(type) == 0) {
      return new SWGInline_response_200_9();
    }
    if(QString("SWGInline_response_200_9_meta").compare(type) == 0) {
      return new SWGInline_response_200_9_meta();
    }
    if(QString("SWGInline_response_200_meta").compare(type) == 0) {
      return new SWGInline_response_200_meta();
    }
    if(QString("SWGPagination").compare(type) == 0) {
      return new SWGPagination();
    }
    if(QString("SWGProduct").compare(type) == 0) {
      return new SWGProduct();
    }
    if(QString("SWGSeedCompany").compare(type) == 0) {
      return new SWGSeedCompany();
    }
    if(QString("SWGStrain").compare(type) == 0) {
      return new SWGStrain();
    }
    
    return nullptr;
  }

  inline void* create(QString json, QString type) {
    void* val = create(type);
    if(val != nullptr) {
      SWGObject* obj = static_cast<SWGObject*>(val);
      return obj->fromJson(json);
    }
    if(type.startsWith("QString")) {
      return new QString();
    }
    return nullptr;
  }
} /* namespace Swagger */

#endif /* ModelFactory_H_ */