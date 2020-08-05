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
    lTabWidget->addTab(lCreate, GPicto::Instance()->getPicto(fa::plus), "Creer");
    lTabWidget->addTab(lRead, GPicto::Instance()->getPicto(fa::filetexto), "Lire");
    lTabWidget->addTab(lUpdate, GPicto::Instance()->getPicto(fa::refresh), "Modifier");
    lTabWidget->addTab(lDelete, GPicto::Instance()->getPicto(fa::trasho), "Supprimer");
    lTabWidget->setUsesScrollButtons(false);
    lTabWidget->setIconSize(QSize(18, 18));
    connect(lTabWidget, SIGNAL(currentChanged(int)), this, SLOT(slotCurrentChanged(int)));

    QHBoxLayout* lMainLayout = new QHBoxLayout;
    lMainLayout->addWidget(lTabWidget);

    setLayout(lMainLayout);
    resize(500, 500);
}
//===============================================
GWindowTabWidget::~GWindowTabWidget() {

}
//===============================================
void GWindowTabWidget::slotCurrentChanged(const int &index) {
    QTabWidget* lTabWidget = qobject_cast<QTabWidget*>(sender());
    cout << "slotCurrentChanged()...(" << lTabWidget->tabText(index).toStdString() << ")...\n";
}
//===============================================
