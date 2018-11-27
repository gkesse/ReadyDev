//===============================================
#include "GSection.h"
#include "GModule.h"
//===============================================
GSection::GSection(QWidget *parent) :
    QWidget(parent) {
    setObjectName("GSection");
    setAttribute(Qt::WA_StyledBackground, true);

    m_mainLayout = new QVBoxLayout;
    m_mainLayout->setAlignment(Qt::AlignTop | Qt::AlignHCenter);
    m_mainLayout->setMargin(5);
    m_mainLayout->setSpacing(5);

    QWidget *lWidget = new QWidget;
    lWidget->setLayout(m_mainLayout);

    m_scrollArea = new QScrollArea(this);
    m_scrollArea->setVerticalScrollBarPolicy(Qt::ScrollBarAlwaysOn);
    m_scrollArea->setWidgetResizable(true);
    m_scrollArea->setWidget(lWidget);
}
//===============================================
GSection::~GSection() {

}
//===============================================
void GSection::slotAddModule(const QString& module) {
    GModule* lModule = GModule::Create(module);
    connect(lModule, SIGNAL(emitStatusBar(QString)), this, SIGNAL(emitStatusBar(QString)));
    m_mainLayout->addWidget(lModule);
}
//===============================================
void GSection::resizeEvent(QResizeEvent *event) {
    m_scrollArea->setGeometry(0, 0, width() - 8, height());
}
//===============================================
