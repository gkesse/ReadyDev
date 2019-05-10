//===============================================
#include "GWindow.h"
#include "GWindowNormal.h"
#include "GWindowPushButton.h"
#include "GWindowToolButton.h"
#include "GWindowRadioButton.h"
#include "GWindowCheckBox.h"
#include "GWindowDial.h"
#include "GWindowTabWidget.h"
#include "GWindowListView.h"
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
    if(key == "PUSHBUTTON") return new GWindowPushButton;
    if(key == "TOOLBUTTON") return new GWindowToolButton;
    if(key == "RADIOBUTTON") return new GWindowRadioButton;
    if(key == "CHECKBOX") return new GWindowCheckBox;
    if(key == "DIAL") return new GWindowDial;
    if(key == "TABWIDGET") return new GWindowTabWidget;
    if(key == "LISTVIEW") return new GWindowListView;
    return new GWindowNormal;
}
//===============================================
