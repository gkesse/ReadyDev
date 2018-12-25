//===============================================
#include "GMenuOpenFileDialog.h"
#include "ui_GMenuOpenFileDialog.h"
#include "GPicto.h"
//===============================================
GMenuOpenFileDialog::GMenuOpenFileDialog(QWidget *parent) :
    GMenu(parent), ui(new Ui::GMenuOpenFileDialog) {
    ui->setupUi(this);
    setAttribute(Qt::WA_StyledBackground, true);

    ui->m_homeButton->setIcon(GPicto::Instance()->getPicto(fa::home));
    ui->m_homeButton->setIconSize(QSize(50,50));

    ui->m_drivesButton->setIcon(GPicto::Instance()->getPicto(fa::hddo));
    ui->m_drivesButton->setIconSize(QSize(50,50));

    connect(ui->m_homeButton, SIGNAL(clicked()), this, SIGNAL(emitHomeClicked()));
    connect(ui->m_drivesButton, SIGNAL(clicked()), this, SIGNAL(emitDrivesClicked()));

    ui->m_mainLayout->setContentsMargins(0, 0, 0, 0);
    ui->m_mainLayout->setSpacing(6);
    ui->m_mainLayout->setAlignment(Qt::AlignTop);
}
//===============================================
GMenuOpenFileDialog::~GMenuOpenFileDialog() {

}
//===============================================
