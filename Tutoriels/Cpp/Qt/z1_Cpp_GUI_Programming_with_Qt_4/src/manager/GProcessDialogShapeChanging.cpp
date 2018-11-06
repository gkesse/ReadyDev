//===============================================
#include "GProcessDialogShapeChanging.h"
#include "GDialogSort.h"
//===============================================
GProcessDialogShapeChanging* GProcessDialogShapeChanging::m_instance = 0;
//===============================================
GProcessDialogShapeChanging::GProcessDialogShapeChanging() {

}
//===============================================
GProcessDialogShapeChanging::~GProcessDialogShapeChanging() {

}
//===============================================
GProcessDialogShapeChanging* GProcessDialogShapeChanging::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessDialogShapeChanging;
    }
    return m_instance;
}
//===============================================
void GProcessDialogShapeChanging::run() {
    GDialogSort* lGDialogSort = new GDialogSort;
    lGDialogSort->show();
}
//===============================================
