//===============================================
#include "GMainWindow.h"
#include "ui_GMainWindow.h"
//===============================================
GMainWindow::GMainWindow(QWidget *parent) :
    QWidget(parent), ui(new Ui::GMainWindow) {
    ui->setupUi(this);
}
//===============================================
GMainWindow::~GMainWindow() {
    delete ui;
}
//===============================================
