//===============================================
#include "GProcessDialog.h"
#include "GDialogFind.h"
//===============================================
GProcessDialog* GProcessDialog::m_instance = 0;
//===============================================
GProcessDialog::GProcessDialog() {

}
//===============================================
GProcessDialog::~GProcessDialog() {

}
//===============================================
GProcessDialog* GProcessDialog::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessDialog;
    }
    return m_instance;
}
//===============================================
void GProcessDialog::run() {
    GDialogFind* lDialogFind = new GDialogFind;
    lDialogFind->show();
}
//===============================================
