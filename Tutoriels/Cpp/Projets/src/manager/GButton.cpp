//===============================================
#include "GButton.h"
#include "GButtonOpenFileDialog.h"
#include "GConfig.h"
//===============================================
GButton::GButton(QWidget *parent) :
    QWidget(parent) {
    setObjectName("GButton");
}
//===============================================
GButton::~GButton() {

}
//===============================================
GButton* GButton::Create(QWidget* parent) {
    string lKey = GConfig::Instance()->getData("PROCESS");
    if(lKey == "OPEN_FILE_DIALOG") return new GButtonOpenFileDialog(parent);
    return new GButtonOpenFileDialog(parent);
}
//===============================================
GButton* GButton::Create(const QString &key, QWidget* parent) {
    if(key == "OPEN_FILE_DIALOG") return new GButtonOpenFileDialog(parent);
    return new GButtonOpenFileDialog(parent);
}
//===============================================
