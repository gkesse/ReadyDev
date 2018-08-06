//===============================================
#include "GDialogGoToCell.h"
#include "ui_GDialogGoToCell.h"
//===============================================
GDialogGoToCell::GDialogGoToCell(QWidget *parent) :
    QDialog(parent), ui(new Ui::GDialogGoToCell) {
    ui->setupUi(this);
}
//===============================================
GDialogGoToCell::~GDialogGoToCell() {
    delete ui;
}
//===============================================
