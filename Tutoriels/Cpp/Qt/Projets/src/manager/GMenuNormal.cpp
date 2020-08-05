//===============================================
#include "GMenuNormal.h"
#include "GPicto.h"
//===============================================
GMenuNormal::GMenuNormal(QWidget *parent) :
    GMenu(parent) {
    setObjectName("GMenuNormal");

    QToolButton* lModuleAdd = new QToolButton;
    lModuleAdd->setIcon(GPicto::Instance()->getPicto(fa::plus));
    lModuleAdd->setIconSize(QSize(20, 20));
    lModuleAdd->setCursor(Qt::PointingHandCursor);

    m_addModuleMenu = new QMenu(this);
    m_addModuleMenu->setCursor(Qt::PointingHandCursor);

    QAction* lAction = 0;
    lAction = new QAction(this);
    lAction->setText(tr("Ajouter un module base de données"));
    lAction->setIcon(GPicto::Instance()->getPicto(fa::database));
    m_addModuleMenu->addAction(lAction);
    connect(lAction, SIGNAL(triggered()), this, SLOT(slotModuleDatabaseAdd()));

    QVBoxLayout* lMainLayout = new QVBoxLayout;
    lMainLayout->addWidget(lModuleAdd, 0);
    lMainLayout->setMargin(0);
    lMainLayout->setAlignment(Qt::AlignTop);

    setLayout(lMainLayout);

    connect(lModuleAdd, SIGNAL(clicked()), this, SLOT(slotModuleAdd()));
}
//===============================================
GMenuNormal::~GMenuNormal() {

}
//===============================================
void GMenuNormal::slotModuleAdd() {
    QPoint lPos = QCursor::pos();
    m_addModuleMenu->exec(lPos);
}
//===============================================
void GMenuNormal::slotModuleDatabaseAdd() {

}
//===============================================
