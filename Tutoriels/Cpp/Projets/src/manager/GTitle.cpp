//===============================================
#include "GTitle.h"
#include "GTitleOpenFileDialog.h"
#include "GTitleReadyVision.h"
#include "GConfig.h"
//===============================================
GTitle::GTitle(QWidget *parent) :
    QWidget(parent) {
    setObjectName("GTitle");
}
//===============================================
GTitle::~GTitle() {

}
//===============================================
GTitle* GTitle::Create(QWidget* parent) {
    string lKey = GConfig::Instance()->getData("PROCESS");
    if(lKey == "READY_VISION") return new GTitleReadyVision(parent);
    if(lKey == "OPEN_FILE_DIALOG") return new GTitleOpenFileDialog(parent);
    return new GTitleReadyVision(parent);
}
//===============================================
GTitle* GTitle::Create(const QString &key, QWidget* parent) {
    if(key == "READY_VISION") return new GTitleReadyVision(parent);
    if(key == "OPEN_FILE_DIALOG") return new GTitleOpenFileDialog(parent);
    return new GTitleReadyVision(parent);
}
//===============================================
