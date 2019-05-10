//===============================================
#include "GWindowTabWidget.h"
#include "GPicto.h"
//===============================================
GWindowTabWidget::GWindowTabWidget(QWidget *parent) :
    GWindow(parent) {
    setObjectName("GWindowTabWidget");
    setWindowFlags(Qt::Widget);

    QLabel* lCreate = new QLabel;
    lCreate->setObjectName("GTab");
    lCreate->setText("Créer");
    lCreate->setAlignment(Qt::AlignCenter);

    QLabel* lRead = new QLabel;
    lRead->setObjectName("GTab");
    lRead->setText("Lire");
    lRead->setAlignment(Qt::AlignCenter);

    QLabel* lUpdate = new QLabel;
    lUpdate->setObjectName("GTab");
    lUpdate->setText("Modifier");
    lUpdate->setAlignment(Qt::AlignCenter);

    QLabel* lDelete = new QLabel;
    lDelete->setObjectName("GTab");
    lDelete->setText("Supprimer");
    lDelete->setAlignment(Qt::AlignCenter);

    QTabWidget* lTabWidget = new QTabWidget;
    lTabWidget->addTab(lCreate, "Créer");
    lTabWidget->addTab(lRead, "Lire");
    lTabWidget->addTab(lUpdate, "Modifier");
    lTabWidget->addTab(lDelete, "Supprimer");

    QHBoxLayout* lMainLayout = new QHBoxLayout;
    lMainLayout->addWidget(lTabWidget);

    setLayout(lMainLayout);
    resize(500, 500);
}
//===============================================
GWindowTabWidget::~GWindowTabWidget() {

}
//===============================================
