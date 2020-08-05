//===============================================
#include "GDialogFind.h"
//===============================================
GDialogFind::GDialogFind(QWidget* parent) :
    QDialog(parent) {
    m_label = new QLabel(tr("Rechercher &quoi :"));
    m_lineEdit = new QLineEdit;
    m_label->setBuddy(m_lineEdit);

    m_caseCheckBox = new QCheckBox(tr("Respecter la &casse"));
    m_backwardCheckBox = new QCheckBox(tr("Rechercher en &arrière"));

    m_findButton = new QPushButton(tr("&Rechercher"));
    m_findButton->setDefault(true);
    m_findButton->setEnabled(false);

    m_closeButton = new QPushButton(tr("&Fermer"));

    QHBoxLayout* lTopLeftLayout = new QHBoxLayout;
    lTopLeftLayout->addWidget(m_label);
    lTopLeftLayout->addWidget(m_lineEdit);

    QVBoxLayout* lLeftLayout = new QVBoxLayout;
    lLeftLayout->addLayout(lTopLeftLayout);
    lLeftLayout->addWidget(m_caseCheckBox);
    lLeftLayout->addWidget(m_backwardCheckBox);

    QVBoxLayout* lRightLayout = new QVBoxLayout;
    lRightLayout->addWidget(m_findButton);
    lRightLayout->addWidget(m_closeButton);
    lRightLayout->addStretch();

    QHBoxLayout* lMainLayout = new QHBoxLayout;
    lMainLayout->addLayout(lLeftLayout);
    lMainLayout->addLayout(lRightLayout);

    setLayout(lMainLayout);
    setWindowTitle(tr("Rechercher | ReadyDev"));
    setFixedHeight(sizeHint().height());

    connect(m_closeButton, SIGNAL(clicked()), this, SLOT(close()));
}
//===============================================
GDialogFind::~GDialogFind() {

}
//===============================================
