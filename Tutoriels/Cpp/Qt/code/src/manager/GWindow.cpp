//===============================================
#include "GWindow.h"
#include "GWindowSimple.h"
#include "GWindowStyleDesigner.h"
#include "GWindowStyleDesignerGlobal.h"
#include "GWindowStyleDesignerProperty.h"
#include "GWindowResource.h"
#include "GWindowQml.h"
#include "GWindowQmlRect.h"
#include "GWindowQmlPropertyBind.h"
#include "GWindowQmlPropertyCondition.h"
#include "GWindowQmlPropertyFunction.h"
#include "GWindowQmlPropertyGroup.h"
#include "GWindowQmlButtonText.h"
#include "GWindowQmlButtonIcon.h"
#include "GWindowQmlObj.h"
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
    if(lType == "QML_RECT") return GWindowQmlRect::Instance();
    if(lType == "QML_PROPERTY_BIND") return GWindowQmlPropertyBind::Instance();
    if(lType == "QML_PROPERTY_CONDITION") return GWindowQmlPropertyCondition::Instance();
    if(lType == "QML_PROPERTY_FUNCTION") return GWindowQmlPropertyFunction::Instance();
    if(lType == "QML_PROPERTY_GROUP") return GWindowQmlPropertyGroup::Instance();
    if(lType == "QML_BUTTON_TEXT") return GWindowQmlButtonText::Instance();
    if(lType == "QML_BUTTON_ICON") return GWindowQmlButtonIcon::Instance();
    if(lType == "QML_OBJ") return GWindowQmlObj::Instance();
    if(lType == "RESOURCE") return GWindowResource::Instance();
    return GWindowSimple::Instance();
}
//===============================================
