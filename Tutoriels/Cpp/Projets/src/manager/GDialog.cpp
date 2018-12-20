//===============================================
#include "GDialog.h"
#include "GDialogNormal.h"
#include "GDialogOpenFile.h"
#include "GConfig.h"
//===============================================
GDialog::GDialog(QWidget *parent) :
    QDialog(parent) {
    setObjectName("GDialog");
    m_pixmap = 0;
}
//===============================================
GDialog::~GDialog() {

}
//===============================================
GDialog* GDialog::Create(QWidget* parent) {
    string lKey = GConfig::Instance()->getData("PROCESS");
    if(lKey == "DIALOG_NORMAL") return new GDialogNormal(parent);
    if(lKey == "DIALOG_OPEN_FILE") return new GDialogOpenFile(parent);
    return new GDialogNormal(parent);
}
//===============================================
GDialog* GDialog::Create(const QString &key, QWidget* parent) {
    if(key == "DIALOG_NORMAL") return new GDialogNormal(parent);
    if(key == "DIALOG_OPEN_FILE") return new GDialogOpenFile(parent);
    return new GDialogNormal(parent);
}
//===============================================
