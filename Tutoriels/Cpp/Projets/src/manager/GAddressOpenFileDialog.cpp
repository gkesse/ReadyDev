//===============================================
#include "GAddressOpenFileDialog.h"
#include "GFileSystem.h"
#include "GPicto.h"
//===============================================
GAddressOpenFileDialog::GAddressOpenFileDialog(QWidget *parent) :
    GAddress(parent) {
    setObjectName("GAddressOpenFileDialog");
    setAttribute(Qt::WA_StyledBackground, true);

    m_mainLayout = new QHBoxLayout;
    m_mainLayout->setContentsMargins(5, 0, 5, 0);
    m_mainLayout->setSpacing(0);
    m_mainLayout->setAlignment(Qt::AlignLeft);

    QStringList lDataList;
    GFileSystem::Instance()->getAddress(lDataList);
    updateAddress(lDataList);

    m_scrollWidget = new QWidget;
    m_scrollWidget->setLayout(m_mainLayout);

    m_scrollArea = new QScrollArea;
    m_scrollArea->setWidgetResizable(true);
    m_scrollArea->setWidget(m_scrollWidget);

    QHBoxLayout* lMainLayout = new QHBoxLayout;
    lMainLayout->addWidget(m_scrollArea);
    lMainLayout->setContentsMargins(0, 0, 0, 0);
    lMainLayout->setSpacing(0);
    setLayout(lMainLayout);

    connect(m_scrollArea->horizontalScrollBar(), SIGNAL(rangeChanged(int,int)),this, SLOT(slotRangeChanged(int,int)));
    connect(this, SIGNAL(emitUpdateAddress()), this, SLOT(slotUpdateAddress()));
}
//===============================================
GAddressOpenFileDialog::~GAddressOpenFileDialog() {

}
//===============================================
void GAddressOpenFileDialog::updateAddress(const QStringList& dataList) {
    removeAddress(m_mainLayout);

    for(int i = 0; i < dataList.size(); i++) {
        QString lData = dataList.at(i);
        if(i != 0) {
            QLabel* lChevron = new QLabel;
            lChevron->setPixmap(GPicto::Instance()->getPicto(fa::chevronright).pixmap(QSize(20, 20)));
            m_mainLayout->addWidget(lChevron);
        }

        if(lData != "_ROOT_") {
            QPushButton* lAddress = new QPushButton;
            lAddress->setText(lData);
            lAddress->setCursor(Qt::PointingHandCursor);
            m_mainLayout->addWidget(lAddress);
            connect(lAddress, SIGNAL(clicked()), this, SLOT(slotAddressClicked()));
        }
        else {
            QPushButton* lAddress = new QPushButton;
            lAddress->setIcon(GPicto::Instance()->getPicto(fa::hddo));
            lAddress->setIconSize(QSize(20, 20));
            lAddress->setCursor(Qt::PointingHandCursor);
            m_mainLayout->addWidget(lAddress);
            connect(lAddress, SIGNAL(clicked()), this, SIGNAL(emitDrivesClicked()));
        }
    }
}
//===============================================
void GAddressOpenFileDialog::removeAddress(QLayout* layout) {
    QLayoutItem* lItem = 0;
    QWidget* lWidget = 0;
    QLayout* lLayout = 0;

    while((lItem = layout->takeAt(0)) != 0) {
        if((lWidget = lItem->widget()) != 0) {
            delete lWidget;
        }
        if((lLayout = lItem->layout()) != 0) {
            removeAddress(lLayout);
        }
        delete lItem;
    }
}
//===============================================
void GAddressOpenFileDialog::slotUpdateAddress() {
    QStringList lDataList;
    GFileSystem::Instance()->getAddress(lDataList);
    updateAddress(lDataList);
}
//===============================================
void GAddressOpenFileDialog::slotRangeChanged(const int& min, const int& max) {
    m_scrollArea->horizontalScrollBar()->setValue(max);
}
//===============================================
void GAddressOpenFileDialog::slotAddressClicked() {
    QList<QPushButton*> lAddressMap = m_scrollWidget->findChildren<QPushButton*>();
    QPushButton* lAddressRef = qobject_cast<QPushButton*>(sender());
    QString lPath = "";

    for(int i = 0; i < lAddressMap.size(); i++) {
        QPushButton* lAddress = lAddressMap.at(i);
        QString lName = lAddress->text();
        if(lName == "") continue;
        lPath += lAddress->text() + "/";
        if(lAddress == lAddressRef) break;
    }
    GFileSystem::Instance()->setRootPath(lPath);
    emit emitUpdateAddress();
    emit emitAddressClicked();
}
//===============================================
