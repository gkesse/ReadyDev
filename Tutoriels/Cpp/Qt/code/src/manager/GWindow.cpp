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
#include "GWindowQmlPropertyCreate.h"
#include "GWindowQmlPropertyAlias.h"
#include "GWindowQmlPropertyChanged.h"
#include "GWindowQmlButtonText.h"
#include "GWindowQmlButtonIcon.h"
#include "GWindowQmlObj.h"
#include "GWindowQmlImplicit.h"
#include "GWindowQmlSignal.h"
#include "GWindowQmlConsole.h"
#include "GWindowQmlEventPressed.h"
#include "GWindowQmlEventHover.h"
#include "GWindowQmlEventMouseButton.h"
#include "GWindowQmlEventDrag.h"
#include "GWindowQmlEventPinch.h"
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
    if(lType == "RESOURCE") return GWindowResource::Instance();
    if(lType == "QML") return GWindowQml::Instance();
    if(lType == "QML_RECT") return GWindowQmlRect::Instance();
    if(lType == "QML_PROPERTY_BIND") return GWindowQmlPropertyBind::Instance();
    if(lType == "QML_PROPERTY_CONDITION") return GWindowQmlPropertyCondition::Instance();
    if(lType == "QML_PROPERTY_FUNCTION") return GWindowQmlPropertyFunction::Instance();
    if(lType == "QML_PROPERTY_GROUP") return GWindowQmlPropertyGroup::Instance();
    if(lType == "QML_PROPERTY_CREATE") return GWindowQmlPropertyCreate::Instance();
    if(lType == "QML_PROPERTY_ALIAS") return GWindowQmlPropertyAlias::Instance();
    if(lType == "QML_PROPERTY_CHANGED") return GWindowQmlPropertyChanged::Instance();
    if(lType == "QML_BUTTON_TEXT") return GWindowQmlButtonText::Instance();
    if(lType == "QML_BUTTON_ICON") return GWindowQmlButtonIcon::Instance();
    if(lType == "QML_OBJ") return GWindowQmlObj::Instance();
    if(lType == "QML_IMPLICIT") return GWindowQmlImplicit::Instance();
    if(lType == "QML_SIGNAL") return GWindowQmlSignal::Instance();
    if(lType == "QML_CONSOLE") return GWindowQmlConsole::Instance();
    if(lType == "QML_EVENT_PRESSED") return GWindowQmlEventPressed::Instance();
    if(lType == "QML_EVENT_HOVER") return GWindowQmlEventHover::Instance();
    if(lType == "QML_EVENT_MOUSE_BUTTON") return GWindowQmlEventMouseButton::Instance();
    if(lType == "QML_EVENT_DRAG") return GWindowQmlEventDrag::Instance();
    if(lType == "QML_EVENT_PINCH") return GWindowQmlEventPinch::Instance();
    return GWindowSimple::Instance();
}
//===============================================