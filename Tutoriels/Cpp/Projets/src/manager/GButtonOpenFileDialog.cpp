//===============================================
#include "GButtonOpenFileDialog.h"
#include "ui_GButtonOpenFileDialog.h"
//===============================================
GButtonOpenFileDialog::GButtonOpenFileDialog(QWidget *parent) :
    GButton(parent), ui(new Ui::GButtonOpenFileDialog) {
    ui->setupUi(this);
    setAttribute(Qt::WA_StyledBackground, true);

    connect(ui->m_okButton, SIGNAL(clicked()), this, SIGNAL(emitAccept()));
    connect(ui->m_cancelButton, SIGNAL(clicked()), this, SIGNAL(emitReject()));

    ui->m_mainLayout->setContentsMargins(10, 10, 10, 10);
    ui->m_mainLayout->setAlignment(Qt::AlignRight);
}
//===============================================
GButtonOpenFileDialog::~GButtonOpenFileDialog() {

}
//===============================================
