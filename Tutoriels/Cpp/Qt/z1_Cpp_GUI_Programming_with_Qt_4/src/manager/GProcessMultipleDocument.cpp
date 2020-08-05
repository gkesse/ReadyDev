//===============================================
#include "GProcessMultipleDocument.h"
#include "GMultipleDocument.h"
//===============================================
GProcessMultipleDocument* GProcessMultipleDocument::m_instance = 0;
//===============================================
GProcessMultipleDocument::GProcessMultipleDocument() {

}
//===============================================
GProcessMultipleDocument::~GProcessMultipleDocument() {

}
//===============================================
GProcessMultipleDocument* GProcessMultipleDocument::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessMultipleDocument;
    }
    return m_instance;
}
//===============================================
void GProcessMultipleDocument::run() {
    GMultipleDocument* mainWin = new GMultipleDocument;
    mainWin->show();
}
//===============================================
