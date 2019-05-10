//===============================================
#include "GWindowCheckBox.h"
#include "GPicto.h"
//===============================================
GWindowCheckBox::GWindowCheckBox(QWidget *parent) :
    GWindow(parent) {
    setObjectName("GWindowCheckBox");
    setWindowFlags(Qt::Widget);

    QCheckBox* lCreate = new QCheckBox;
    lCreate->setText("Créer");
    lCreate->setCursor(Qt::PointingHandCursor);
    connect(lCreate, SIGNAL(clicked()), this, SLOT(slotCreateButtonClicked()));

    QCheckBox* lRead = new QCheckBox;
    lRead->setText("Lire");
    lRead->setCursor(Qt::PointingHandCursor);
    connect(lRead, SIGNAL(clicked()), this, SLOT(slotReadButtonClicked()));

    QCheckBox* lUpdate = new QCheckBox;
    lUpdate->setText("Modifier");
    lUpdate->setCursor(Qt::PointingHandCursor);
    connect(lUpdate, SIGNAL(clicked()), this, SLOT(slotUpdateButtonClicked()));

    QCheckBox* lDelete = new QCheckBox;
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
GWindowCheckBox::~GWindowCheckBox() {

}
//===============================================
void GWindowCheckBox::slotCreateButtonClicked() {
    cout << "slotCreateButtonClicked()...\n";
}
//===============================================
void GWindowCheckBox::slotReadButtonClicked() {
    cout << "slotReadButtonClicked()...\n";
}
//===============================================
void GWindowCheckBox::slotUpdateButtonClicked() {
    cout << "slotUpdateButtonClicked()...\n";
}
//===============================================
void GWindowCheckBox::slotDeleteButtonClicked() {
    cout << "slotDeleteButtonClicked()...\n";
}
//===============================================
