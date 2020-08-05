//===============================================
#include "GWindowRadioButton.h"
#include "GPicto.h"
//===============================================
GWindowRadioButton::GWindowRadioButton(QWidget *parent) :
    GWindow(parent) {
    setObjectName("GWindowRadioButton");
    setWindowFlags(Qt::Widget);

    QRadioButton* lCreate = new QRadioButton;
    lCreate->setText("Créer");
    lCreate->setCursor(Qt::PointingHandCursor);
    connect(lCreate, SIGNAL(clicked()), this, SLOT(slotCreateButtonClicked()));

    QRadioButton* lRead = new QRadioButton;
    lRead->setText("Lire");
    lRead->setCursor(Qt::PointingHandCursor);
    connect(lRead, SIGNAL(clicked()), this, SLOT(slotReadButtonClicked()));

    QRadioButton* lUpdate = new QRadioButton;
    lUpdate->setText("Modifier");
    lUpdate->setCursor(Qt::PointingHandCursor);
    connect(lUpdate, SIGNAL(clicked()), this, SLOT(slotUpdateButtonClicked()));

    QRadioButton* lDelete = new QRadioButton;
    lDelete->setText("Supprimer");
    lDelete->setCursor(Qt::PointingHandCursor);
    connect(lDelete, SIGNAL(clicked()), this, SLOT(slotDeleteButtonClicked()));

    QVBoxLayout* lMainLayout = new QVBoxLayout;
    lMainLayout->setAlignment(Qt::AlignLeft | Qt::AlignTop);
    lMainLayout->addWidget(lCreate);
    lMainLayout->addWidget(lRead);
    lMainLayout->addWidget(lUpdate);
    lMainLayout->addWidget(lDelete);

    setLayout(lMainLayout);
}
//===============================================
GWindowRadioButton::~GWindowRadioButton() {

}
//===============================================
void GWindowRadioButton::slotCreateButtonClicked() {
    cout << "slotCreateButtonClicked()...\n";
}
//===============================================
void GWindowRadioButton::slotReadButtonClicked() {
    cout << "slotReadButtonClicked()...\n";
}
//===============================================
void GWindowRadioButton::slotUpdateButtonClicked() {
    cout << "slotUpdateButtonClicked()...\n";
}
//===============================================
void GWindowRadioButton::slotDeleteButtonClicked() {
    cout << "slotDeleteButtonClicked()...\n";
}
//===============================================
