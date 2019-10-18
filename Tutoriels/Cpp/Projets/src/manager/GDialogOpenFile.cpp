//===============================================
#include "GDialogOpenFile.h"
#include "GTitle.h"
#include "GAddress.h"
#include "GMenu.h"
#include "GWorkspace.h"
#include "GButton.h"
//===============================================
GDialogOpenFile::GDialogOpenFile(QWidget *parent) :
    GDialogNormal(parent) {
    setObjectName("GDialogOpenFile");

    GAddress* lAddress = GAddress::Create("OPEN_FILE_DIALOG");
    GMenu* lMenu = GMenu::Create("OPEN_FILE_DIALOG");
    GWorkspace* lWorkspace = GWorkspace::Create("OPEN_FILE_DIALOG");
    GButton* lButton = GButton::Create("OPEN_FILE_DIALOG");

    QGridLayout* lMainLayout = new QGridLayout;
    lMainLayout->addWidget(lAddress, 0, 0, 1, 2);
    lMainLayout->addWidget(lMenu, 1, 0, 1, 1);
    lMainLayout->addWidget(lWorkspace, 1, 1, 1, 1);
    lMainLayout->addWidget(lButton, 2, 0, 1, 2);
    lMainLayout->setContentsMargins(0, 0, 0, 0);
    lMainLayout->setSpacing(6);

    m_mainLayout->addLayout(lMainLayout, 1, 0);

    connect(lAddress, SIGNAL(emitDrivesClicked()), lWorkspace, SIGNAL(emitDrivesClicked()));
    connect(lAddress, SIGNAL(emitAddressClicked()), lWorkspace, SIGNAL(emitAddressClicked()));
    connect(lMenu, SIGNAL(emitHomeClicked()), lWorkspace, SIGNAL(emitHomeClicked()));
    connect(lMenu, SIGNAL(emitDrivesClicked()), lWorkspace, SIGNAL(emitDrivesClicked()));
    connect(lWorkspace, SIGNAL(emitUpdateAddress()), lAddress, SIGNAL(emitUpdateAddress()));
    connect(lWorkspace, SIGNAL(emitOkButtonEnable(bool)), lButton, SIGNAL(emitOkButtonEnable(bool)));
    connect(lButton, SIGNAL(emitAccept()), this, SLOT(accept()));
    connect(lButton, SIGNAL(emitReject()), this, SLOT(reject()));

    setWindowIcon(QIcon("res/img/logo.png"));
    setWindowTitle(tr("Ouvrir un fichier | rVision"));
}
//===============================================
GDialogOpenFile::~GDialogOpenFile() {

}
//===============================================
