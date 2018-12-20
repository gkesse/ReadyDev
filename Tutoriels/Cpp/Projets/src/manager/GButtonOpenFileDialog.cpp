//===============================================
#include "GButtonOpenFileDialog.h"
#include "ui_GButtonOpenFileDialog.h"
//===============================================
GButtonOpenFileDialog::GButtonOpenFileDialog(QWidget *parent) :
    GButton(parent), ui(new Ui::GButtonOpenFileDialog) {
    ui->setupUi(this);
    setAttribute(Qt::WA_StyledBackground, true);

    ui->m_okButton->setEnabled(false);

    connect(ui->m_okButton, SIGNAL(clicked()), this, SIGNAL(emitAccept()));
    connect(ui->m_cancelButton, SIGNAL(clicked()), this, SIGNAL(emitReject()));
    connect(this, SIGNAL(emitOkButtonEnable(bool)), ui->m_okButton, SLOT(setEnabled(bool)));

    ui->m_mainLayout->setContentsMargins(0, 0, 0, 0);
    ui->m_mainLayout->setSpacing(6);
    ui->m_mainLayout->setAlignment(Qt::AlignRight);
}
//===============================================
GButtonOpenFileDialog::~GButtonOpenFileDialog() {

}
//===============================================
