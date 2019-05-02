//===============================================
#include "GWindow.h"
#include "GWindowNormal.h"
//===============================================
GWindow::GWindow(QWidget *parent) :
    QWidget(parent) {
    setObjectName("GWindow");
    setAttribute(Qt::WA_StyledBackground, true);
    setWindowFlags(Qt::FramelessWindowHint);
    resize(400, 400);
}
//===============================================
GWindow::~GWindow() {

}
//===============================================
GWindow* GWindow::Create(const string &key) {
    if(key == "NORMAL") return new GWindowNormal;
    return new GWindowNormal;
}
//===============================================
