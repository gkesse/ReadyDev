//===============================================
#include "GProcessBackgroundColor.h"
#include "GStyle.h"
#include "GSetting.h"
#include "GWindow.h"
//===============================================
GProcessBackgroundColor* GProcessBackgroundColor::m_instance = 0;
//===============================================
GProcessBackgroundColor::GProcessBackgroundColor() {

}
//===============================================
GProcessBackgroundColor::~GProcessBackgroundColor() {

}
//===============================================
GProcessBackgroundColor* GProcessBackgroundColor::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessBackgroundColor;
    }
    return m_instance;
}
//===============================================
void GProcessBackgroundColor::run() {
    GStyle::Instance()->load("res/css/style.css");
    GSetting::Instance()->load("res/cfg/config.cfg");
    GWindow* lWindow = new GWindow;
    lWindow->show();
}
//===============================================
