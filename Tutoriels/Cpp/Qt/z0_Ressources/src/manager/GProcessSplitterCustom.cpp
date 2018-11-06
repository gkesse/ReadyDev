//===============================================
#include "GProcessSplitterCustom.h"
#include "GStyle.h"
#include "GSplitterCustom.h"
//===============================================
GProcessSplitterCustom* GProcessSplitterCustom::m_instance = 0;
//===============================================
GProcessSplitterCustom::GProcessSplitterCustom() {

}
//===============================================
GProcessSplitterCustom::~GProcessSplitterCustom() {

}
//===============================================
GProcessSplitterCustom* GProcessSplitterCustom::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessSplitterCustom;
    }
    return m_instance;
}
//===============================================
void GProcessSplitterCustom::run() {
    GStyle::Instance()->load("res/css/style.css");
    GSplitterCustom* lWindow = new GSplitterCustom;
    lWindow->show();
}
//===============================================
