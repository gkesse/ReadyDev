//===============================================
#include "GTitle.h"
#include "GTitleWindowFullScreen.h"
#include "GTitleWindowShape.h"
#include "GTitleDialogNormal.h"
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
    if(lKey == "WINDOW_FULL_SCREEN") return new GTitleWindowFullScreen(parent);
    if(lKey == "WINDOW_SHAPE") return new GTitleWindowShape(parent);
    if(lKey == "DIALOG_NORMAL") return new GTitleDialogNormal(parent);
    return new GTitleWindowFullScreen(parent);
}
//===============================================
GTitle* GTitle::Create(const QString &key, QWidget* parent) {
    if(key == "WINDOW_FULL_SCREEN") return new GTitleWindowFullScreen(parent);
    if(key == "WINDOW_SHAPE") return new GTitleWindowShape(parent);
    if(key == "DIALOG_NORMAL") return new GTitleDialogNormal(parent);
    return new GTitleWindowFullScreen(parent);
}
//===============================================
