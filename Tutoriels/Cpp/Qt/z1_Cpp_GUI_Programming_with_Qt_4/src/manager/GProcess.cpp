//===============================================
#include "GProcess.h"
#include "GProcessHelloQt.h"
#include "GProcessHelloQtHtml.h"
#include "GProcessConnection.h"
#include "GProcessLayout.h"
#include "GProcessDesigner.h"
#include "GProcessDialog.h"
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
    if(lType == "HELLO_QT_HTML") return GProcessHelloQtHtml::Instance();
    if(lType == "CONNECTION") return GProcessConnection::Instance();
    if(lType == "LAYOUT") return GProcessLayout::Instance();
    if(lType == "DIALOG") return GProcessDialog::Instance();
    if(lType == "DESIGNER") return GProcessDesigner::Instance();
    return GProcessHelloQt::Instance();
}
//===============================================
