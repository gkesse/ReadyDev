//===============================================
#include "GSplitter.h"
#include "ui_GSplitter.h"
//===============================================
GSplitter::GSplitter(QWidget *parent) :
    QWidget(parent), ui(new Ui::GSplitter) {
    ui->setupUi(this);
}
//===============================================
GSplitter::~GSplitter() {
    delete ui;
}
//===============================================
