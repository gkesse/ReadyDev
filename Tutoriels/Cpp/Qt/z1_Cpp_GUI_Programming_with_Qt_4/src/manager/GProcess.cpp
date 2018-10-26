//===============================================
#include "GProcess.h"
#include "GProcessHelloQt.h"
#include "GProcessHelloQtHtml.h"
#include "GProcessConnection.h"
#include "GProcessLayout.h"
#include "GProcessDesigner.h"
#include "GProcessDialog.h"
#include "GProcessDialogShapeChanging.h"
#include "GProcessMainWindow.h"
#include "GProcessMultipleDocument.h"
#include "GProcessSplashScreen.h"
#include "GProcessCustomWidget.h"
#include "GProcessIconEditor.h"
#include "GProcessPromotedClass.h"
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
    if(lType == "DIALOG_SHAPE_CHANGING") return GProcessDialogShapeChanging::Instance();
    if(lType == "DESIGNER") return GProcessDesigner::Instance();
    if(lType == "MAIN_WINDOW") return GProcessMainWindow::Instance();
    if(lType == "MULTIPLE_DOCUMENT") return GProcessMultipleDocument::Instance();
    if(lType == "SPLASH_SCREEN") return GProcessSplashScreen::Instance();
    if(lType == "CUSTOM_WIDGET") return GProcessCustomWidget::Instance();
    if(lType == "ICON_EDITOR") return GProcessIconEditor::Instance();
    if(lType == "PROMOTED_CLASS") return GProcessPromotedClass::Instance();
    return GProcessHelloQt::Instance();
}
//===============================================
