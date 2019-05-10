//===============================================
#include "GWindowDial.h"
#include "GPicto.h"
//===============================================
GWindowDial::GWindowDial(QWidget *parent) :
    GWindow(parent) {
    setObjectName("GWindowDial");
    setWindowFlags(Qt::Widget);

    QDial* lDial = new QDial;
    lDial->setMinimum(0);
    lDial->setMaximum(100);

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
    lTabWidget->addTab(lDial, "Dial");
    lTabWidget->addTab(lRead, "Lire");
    lTabWidget->addTab(lUpdate, "Modifier");
    lTabWidget->addTab(lDelete, "Supprimer");

    QHBoxLayout* lMainLayout = new QHBoxLayout;
    lMainLayout->addWidget(lTabWidget);

    setLayout(lMainLayout);
    resize(500, 500);
}
//===============================================
GWindowDial::~GWindowDial() {

}
//===============================================
