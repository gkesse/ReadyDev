//===============================================
#include "GWindowPushButton.h"
#include "GPicto.h"
//===============================================
GWindowPushButton::GWindowPushButton(QWidget *parent) :
    GWindow(parent) {
    setObjectName("GWindowPushButton");
    setWindowFlags(Qt::Widget);

    QPushButton* lCreate = new QPushButton;
    lCreate->setText("Créer");
    lCreate->setIcon(GPicto::Instance()->getPicto(fa::plus));
    lCreate->setIconSize(QSize(20, 20));
    lCreate->setToolTip("Créer une donnée");
    lCreate->setCursor(Qt::PointingHandCursor);
    connect(lCreate, SIGNAL(clicked()), this, SLOT(slotCreateButtonClicked()));

    QPushButton* lRead = new QPushButton;
    lRead->setText("Lire");
    lRead->setIcon(GPicto::Instance()->getPicto(fa::filetexto));
    lRead->setIconSize(QSize(20, 20));
    lRead->setToolTip("Lire une donnée");
    lRead->setCursor(Qt::PointingHandCursor);
    connect(lRead, SIGNAL(clicked()), this, SLOT(slotReadButtonClicked()));

    QPushButton* lUpdate = new QPushButton;
    lUpdate->setText("Modifier");
    lUpdate->setIcon(GPicto::Instance()->getPicto(fa::refresh));
    lUpdate->setIconSize(QSize(20, 20));
    lUpdate->setToolTip("Modifier une donnée");
    lUpdate->setCursor(Qt::PointingHandCursor);
    connect(lUpdate, SIGNAL(clicked()), this, SLOT(slotUpdateButtonClicked()));

    QPushButton* lDelete = new QPushButton;
    lDelete->setText("Supprimer");
    lDelete->setIcon(GPicto::Instance()->getPicto(fa::trasho));
    lDelete->setIconSize(QSize(20, 20));
    lDelete->setToolTip("Supprimer une donnée");
    lDelete->setCursor(Qt::PointingHandCursor);
    connect(lDelete, SIGNAL(clicked()), this, SLOT(slotDeleteButtonClicked()));

    QHBoxLayout* lMainLayout = new QHBoxLayout;
    lMainLayout->setAlignment(Qt::AlignLeft | Qt::AlignTop);
    lMainLayout->addWidget(lCreate);
    lMainLayout->addWidget(lRead);
    lMainLayout->addWidget(lUpdate);
    lMainLayout->addWidget(lDelete);

    setLayout(lMainLayout);
}
//===============================================
GWindowPushButton::~GWindowPushButton() {

}
//===============================================
void GWindowPushButton::slotCreateButtonClicked() {
    cout << "slotCreateButtonClicked()...\n";
}
//===============================================
void GWindowPushButton::slotReadButtonClicked() {
    cout << "slotReadButtonClicked()...\n";
}
//===============================================
void GWindowPushButton::slotUpdateButtonClicked() {
    cout << "slotUpdateButtonClicked()...\n";
}
//===============================================
void GWindowPushButton::slotDeleteButtonClicked() {
    cout << "slotDeleteButtonClicked()...\n";
}
//===============================================
