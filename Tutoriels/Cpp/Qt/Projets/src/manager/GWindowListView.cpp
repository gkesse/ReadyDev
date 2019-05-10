//===============================================
#include "GWindowListView.h"
#include "GPicto.h"
//===============================================
GWindowListView::GWindowListView(QWidget *parent) :
    GWindow(parent) {
    setObjectName("GWindowListView");
    setWindowFlags(Qt::Widget);

    QStringList lData;
    lData << "C" << "C++" << "C#" << "Java" << "Python" << "PHP";
    QStringListModel* lModel = new QStringListModel;
    lModel->setStringList(lData);
    QListView* lListView = new QListView;
    lListView->setModel(lModel);

    QIcon lIcon = GPicto::Instance()->getPicto(fa::database);
    QStandardItemModel* lModel2 = new QStandardItemModel;
    lModel2->appendRow(new QStandardItem(lIcon, "SQL"));
    lModel2->appendRow(new QStandardItem(lIcon, "SQLite"));
    lModel2->appendRow(new QStandardItem(lIcon, "MySQL"));
    lModel2->appendRow(new QStandardItem(lIcon, "PostgreSQL"));
    lModel2->appendRow(new QStandardItem(lIcon, "Firebird"));
    lModel2->appendRow(new QStandardItem(lIcon, "NoSQL"));
    lModel2->appendRow(new QStandardItem(lIcon, "MongoDB"));
    QListView* lListView2 = new QListView;
    lListView2->setModel(lModel2);

    QTabWidget* lTabWidget = new QTabWidget;
    lTabWidget->addTab(lListView, "QStringListModel");
    lTabWidget->addTab(lListView2, "QStandardItemModel");

    QHBoxLayout* lMainLayout = new QHBoxLayout;
    lMainLayout->addWidget(lTabWidget);

    setLayout(lMainLayout);
    resize(500, 500);
}
//===============================================
GWindowListView::~GWindowListView() {

}
//===============================================
