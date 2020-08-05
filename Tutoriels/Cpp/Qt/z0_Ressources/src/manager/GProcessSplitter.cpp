//===============================================
#include "GProcessSplitter.h"
#include "GStyle.h"
#include "GSplitter.h"
//===============================================
GProcessSplitter* GProcessSplitter::m_instance = 0;
//===============================================
GProcessSplitter::GProcessSplitter() {

}
//===============================================
GProcessSplitter::~GProcessSplitter() {

}
//===============================================
GProcessSplitter* GProcessSplitter::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessSplitter;
    }
    return m_instance;
}
//===============================================
void GProcessSplitter::run() {
    GStyle::Instance()->load("res/css/style.css");
    GSplitter* lWindow = new GSplitter;
    lWindow->show();
}
//===============================================
