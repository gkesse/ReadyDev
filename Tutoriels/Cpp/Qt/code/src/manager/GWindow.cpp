//===============================================
#include "GWindow.h"
#include "GWindowSimple.h"
#include "GWindowStyleDesigner.h"
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
    return GWindowSimple::Instance();
}
//===============================================
