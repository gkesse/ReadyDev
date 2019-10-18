//===============================================
#include "GProcessButtonCustom.h"
#include "GStyle.h"
#include "GButtonCustom.h"
//===============================================
GProcessButtonCustom* GProcessButtonCustom::m_instance = 0;
//===============================================
GProcessButtonCustom::GProcessButtonCustom() {

}
//===============================================
GProcessButtonCustom::~GProcessButtonCustom() {

}
//===============================================
GProcessButtonCustom* GProcessButtonCustom::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessButtonCustom;
    }
    return m_instance;
}
//===============================================
void GProcessButtonCustom::run() {
    GStyle::Instance()->load("res/css/style.css");
    GButtonCustom* lWindow = new GButtonCustom;
    lWindow->show();
}
//===============================================
