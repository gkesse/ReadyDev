//===============================================
#include "GProcess.h"
#include "GProcessHelloQt.h"
#include "GConfig.h"
//===============================================
GProcess* GProcess::m_instance = 0;
//===============================================
GProcess::GProcess() {

}
//===============================================
GProcess::~GProcess() {

}
//===============================================
GProcess* GProcess::Instance() {
    QString lType = GConfig::Instance()->getData("APP_NAME");
    if(lType == "HELLO_QT") return GProcessHelloQt::Instance();
    return GProcessHelloQt::Instance();
}
//===============================================
