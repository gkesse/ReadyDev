//===============================================
#include "GButtonCustom.h"
#include "ui_GButtonCustom.h"
//===============================================
GButtonCustom::GButtonCustom(QWidget *parent) :
    QWidget(parent), ui(new Ui::GButtonCustom) {
    ui->setupUi(this);
}
//===============================================
GButtonCustom::~GButtonCustom() {
    delete ui;
}
//===============================================
