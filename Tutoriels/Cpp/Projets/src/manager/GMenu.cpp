//===============================================
#include "GMenu.h"
#include "GMenuReadyVision.h"
#include "GMenuOpenFileDialog.h"
#include "GConfig.h"
//===============================================
GMenu::GMenu(QWidget *parent) :
    QWidget(parent) {
    setObjectName("GMenu");
}
//===============================================
GMenu::~GMenu() {

}
//===============================================
GMenu* GMenu::Create(QWidget* parent) {
    string lKey = GConfig::Instance()->getData("PROCESS");
    if(lKey == "READY_VISION") return new GMenuReadyVision(parent);
    if(lKey == "OPEN_FILE_DIALOG") return new GMenuOpenFileDialog(parent);
    return new GMenuReadyVision(parent);
}
//===============================================
GMenu* GMenu::Create(const QString &key, QWidget* parent) {
    if(key == "READY_VISION") return new GMenuReadyVision(parent);
    if(key == "OPEN_FILE_DIALOG") return new GMenuOpenFileDialog(parent);
    return new GMenuReadyVision(parent);
}
//===============================================
