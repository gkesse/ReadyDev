//===============================================
#include "GProcessDesigner.h"
#include "GDialogGoToCell.h"
//===============================================
GProcessDesigner* GProcessDesigner::m_instance = 0;
//===============================================
GProcessDesigner::GProcessDesigner() {

}
//===============================================
GProcessDesigner::~GProcessDesigner() {

}
//===============================================
GProcessDesigner* GProcessDesigner::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessDesigner;
    }
    return m_instance;
}
//===============================================
void GProcessDesigner::run() {
    GDialogGoToCell* lDialogGoToCell = new GDialogGoToCell;
    lDialogGoToCell->show();
}
//===============================================
