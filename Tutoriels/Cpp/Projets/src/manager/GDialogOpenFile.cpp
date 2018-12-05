//===============================================
#include "GDialogOpenFile.h"
#include "GTitle.h"
#include "GButton.h"
#include "GWorkspace.h"
//===============================================
GDialogOpenFile::GDialogOpenFile(QWidget *parent) :
    GDialog(parent) {
    setObjectName("GDialogOpenFile");
    setWindowFlags(Qt::FramelessWindowHint);

    GTitle* lTitle = GTitle::Create("OPEN_FILE_DIALOG");
    GButton* lButton = GButton::Create("OPEN_FILE_DIALOG");
    GWorkspace* lWorkspace = GWorkspace::Create("OPEN_FILE_DIALOG");

    QGridLayout* lMainLayout = new QGridLayout;
    lMainLayout->addWidget(lTitle, 0, 0, Qt::AlignTop);
    lMainLayout->addWidget(lWorkspace, 1, 0, Qt::AlignVCenter);
    lMainLayout->addWidget(lButton, 2, 0, Qt::AlignBottom);
    lMainLayout->setMargin(0);
    lMainLayout->setSpacing(0);

    setLayout(lMainLayout);

    connect(lButton, SIGNAL(emitAccept()), this, SLOT(accept()));
    connect(lButton, SIGNAL(emitReject()), this, SLOT(reject()));
    connect(lTitle, SIGNAL(emitReject()), this, SLOT(reject()));
    connect(this, SIGNAL(windowIconChanged(QIcon)), lTitle, SIGNAL(emitWindowIconChanged(QIcon)));
    connect(this, SIGNAL(windowTitleChanged(QString)), lTitle, SIGNAL(emitWindowTitleChanged(QString)));

    setWindowIcon(QIcon("res/img/logo.png"));
    setWindowTitle(tr("Ouvrir un fichier | rVision"));
}
//===============================================
GDialogOpenFile::~GDialogOpenFile() {

}
//===============================================
