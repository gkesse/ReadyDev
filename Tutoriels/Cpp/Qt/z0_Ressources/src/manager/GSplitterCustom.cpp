//===============================================
#include "GSplitterCustom.h"
#include "ui_GSplitterCustom.h"
#include "GPicto.h"
//===============================================
GSplitterCustom::GSplitterCustom(QWidget *parent) :
    QWidget(parent), ui(new Ui::GSplitterCustom) {
    ui->setupUi(this);

    QSplitterHandle* lSplitterHandle = ui->m_horizontalSplitter->handle(1);
    QVBoxLayout* lHandleLayout = new QVBoxLayout;
    QPushButton* lAddButton = new QPushButton;
    QPushButton* lRemoveButton = new QPushButton;

    lAddButton->setIcon(GPicto::Instance()->getPicto(fa::chevronright));
    lRemoveButton->setIcon(GPicto::Instance()->getPicto(fa::chevronleft));

    lAddButton->setCursor(Qt::PointingHandCursor);
    lRemoveButton->setCursor(Qt::PointingHandCursor);

    lHandleLayout->addWidget(lAddButton);
    lHandleLayout->addWidget(lRemoveButton);
    lHandleLayout->setAlignment(Qt::AlignCenter);

    lSplitterHandle->setLayout(lHandleLayout);
    ui->m_horizontalSplitter->setHandleWidth(50);

    connect(lAddButton, SIGNAL(clicked()), this, SLOT(addSlot()));
    connect(lRemoveButton, SIGNAL(clicked()), this, SLOT(removeSlot()));
}
//===============================================
GSplitterCustom::~GSplitterCustom() {
    delete ui;
}
//===============================================
void GSplitterCustom::addSlot() {
    cout << "addSlot()...\n";
}
//===============================================
void GSplitterCustom::removeSlot() {
    cout << "removeSlot()...\n";
}
//===============================================
