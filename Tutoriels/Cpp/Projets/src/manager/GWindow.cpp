//===============================================
#include "GWindow.h"
#include "GWindowShape.h"
#include "GWindowFullScreen.h"
#include "GWindowReadyVision.h"
#include "GConfig.h"
//===============================================
GWindow::GWindow(QWidget *parent) :
    QWidget(parent) {
    setObjectName("GWindow");
}
//===============================================
GWindow::~GWindow() {

}
//===============================================
GWindow* GWindow::Create(QWidget* parent) {
    string lKey = GConfig::Instance()->getData("PROCESS");
    if(lKey == "WINDOW_FULL_SCREEN") return new GWindowFullScreen(parent);
    if(lKey == "WINDOW_SHAPE") return new GWindowShape(parent);
    if(lKey == "WINDOW_READY_VISION") return new GWindowReadyVision(parent);
    return new GWindowFullScreen(parent);
}
//===============================================
GWindow* GWindow::Create(const QString &key, QWidget* parent) {
    if(key == "WINDOW_FULL_SCREEN") return new GWindowFullScreen(parent);
    if(key == "WINDOW_SHAPE") return new GWindowShape(parent);
    if(key == "WINDOW_READY_VISION") return new GWindowReadyVision(parent);
    return new GWindowFullScreen(parent);
}
//===============================================
