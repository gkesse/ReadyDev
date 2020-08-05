//===============================================
#include "GSplitterCustom.h"
#include "ui_GSplitterCustom.h"
//===============================================
GSplitterCustom::GSplitterCustom(QWidget *parent) :
    QWidget(parent), ui(new Ui::GSplitterCustom) {
    ui->setupUi(this);
}
//===============================================
GSplitterCustom::~GSplitterCustom() {
    delete ui;
}
//===============================================
