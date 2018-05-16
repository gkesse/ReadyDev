//===============================================
#include "GWindow.h"
#include "GWindowSimple.h"
#include "GWindowStyleDesigner.h"
#include "GWindowStyleDesignerGlobal.h"
#include "GWindowStyleDesignerProperty.h"
#include "GWindowResource.h"
#include "GWindowQml.h"
#include "GWindowQmlTitle.h"
#include "GWindowQmlMouseArea.h"
#include "GConfig.h"
//===============================================
GWindow* GWindow::m_instance = 0;
//===============================================
GWindow::GWindow() {

}
//===============================================
GWindow::~GWindow() {

}
//===============================================
GWindow* GWindow::Instance() {
    QString lType = GConfig::Instance()->getData("WINDOW_TYPE");
    if(lType == "SIMPLE") return GWindowSimple::Instance();
    if(lType == "STYLE_DESIGNER") return GWindowStyleDesigner::Instance();
    if(lType == "STYLE_DESIGNER_GLOBAL") return GWindowStyleDesignerGlobal::Instance();
    if(lType == "STYLE_DESIGNER_PROPERTY") return GWindowStyleDesignerProperty::Instance();
    if(lType == "QML") return GWindowQml::Instance();
    if(lType == "QML_TITLE") return GWindowQmlTitle::Instance();
    if(lType == "QML_MOUSE_AREA") return GWindowQmlMouseArea::Instance();
    if(lType == "RESOURCE") return GWindowResource::Instance();
    return GWindowSimple::Instance();
}
//===============================================
