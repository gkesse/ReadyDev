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
    lListView->setResizeMode(QListView::Adjust);
    lListView->setEditTriggers(QAbstractItemView::NoEditTriggers);
    lListView->setSelectionMode(QAbstractItemView::ExtendedSelection);
    lModel->insertRow(lModel->rowCount());
    QModelIndex lIndex = lModel->index(lModel->rowCount() - 1);
    lModel->setData(lIndex, "Moon Test");

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
    lListView2->setResizeMode(QListView::Adjust);
    lListView2->setEditTriggers(QAbstractItemView::NoEditTriggers);

    QIcon lIcon2 = GPicto::Instance()->getPicto(fa::database);
    QStandardItemModel* lModel3 = new QStandardItemModel;
    lModel3->appendRow(new QStandardItem(lIcon2, "SQL"));
    lModel3->appendRow(new QStandardItem(lIcon2, "SQLite"));
    lModel3->appendRow(new QStandardItem(lIcon2, "MySQL"));
    lModel3->appendRow(new QStandardItem(lIcon2, "PostgreSQL"));
    lModel3->appendRow(new QStandardItem(lIcon2, "Firebird"));
    lModel3->appendRow(new QStandardItem(lIcon2, "NoSQL"));
    lModel3->appendRow(new QStandardItem(lIcon2, "MongoDB"));
    QListView* lListView3 = new QListView;
    lListView3->setModel(lModel3);
    lListView3->setViewMode(QListView::IconMode);
    lListView3->setResizeMode(QListView::Adjust);
    lListView3->setEditTriggers(QAbstractItemView::NoEditTriggers);

    QTabWidget* lTabWidget = new QTabWidget;
    lTabWidget->addTab(lListView, "StringListModel");
    lTabWidget->addTab(lListView2, "StandardItemModel");
    lTabWidget->addTab(lListView3, "IconMode");
    lTabWidget->setUsesScrollButtons(false);

    QHBoxLayout* lMainLayout = new QHBoxLayout;
    lMainLayout->addWidget(lTabWidget);

    setLayout(lMainLayout);
    resize(500, 500);
}
//===============================================
GWindowListView::~GWindowListView() {

}
//===============================================
