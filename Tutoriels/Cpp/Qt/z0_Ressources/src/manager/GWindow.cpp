//===============================================
#include "GWindow.h"
#include "ui_GWindow.h"
//===============================================
GWindow::GWindow(QWidget *parent) :
    QWidget(parent), ui(new Ui::GWindow) {
    ui->setupUi(this);
}
//===============================================
GWindow::~GWindow() {
    delete ui;
}
//===============================================
