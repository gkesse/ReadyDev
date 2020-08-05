//===============================================
#include "GAddress.h"
#include "GAddressOpenFileDialog.h"
#include "GConfig.h"
//===============================================
GAddress::GAddress(QWidget *parent) :
    QWidget(parent) {
    setObjectName("GAddress");
}
//===============================================
GAddress::~GAddress() {

}
//===============================================
GAddress* GAddress::Create(QWidget* parent) {
    string lKey = GConfig::Instance()->getData("PROCESS");
    if(lKey == "OPEN_FILE_DIALOG") return new GAddressOpenFileDialog(parent);
    return new GAddressOpenFileDialog(parent);
}
//===============================================
GAddress* GAddress::Create(const QString &key, QWidget* parent) {
    if(key == "OPEN_FILE_DIALOG") return new GAddressOpenFileDialog(parent);
    return new GAddressOpenFileDialog(parent);
}
//===============================================
