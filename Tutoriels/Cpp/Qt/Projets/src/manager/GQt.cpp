//================================================
#include "GQt.h"
#include "GPicto.h"
//================================================
GQt* GQt::m_instance = 0;
//================================================
GQt::GQt() {

}
//================================================
GQt::~GQt() {

}
//================================================
GQt* GQt::Instance() {
    if(m_instance == 0) {
        m_instance = new GQt;
    }
    return m_instance;
}
//================================================
void GQt::createListView(const QString &listViewName) {
    QListView* lListView = new QListView;
    m_listViewMap[listViewName] = lListView;
    lListView->resize(400, 400);
    lListView->setCursor(Qt::PointingHandCursor);
}
//================================================
void GQt::showListView(const QString &listViewName) {
    QListView* lListView = m_listViewMap[listViewName];
    lListView->show();
}
//================================================
void GQt::setListViewModel(const QString &listViewName, const QString &stringListModelName) {
    QListView* lListView = m_listViewMap[listViewName];
    QStringListModel* lModel = m_stringListModelMap[stringListModelName];
    lListView->setModel(lModel);
}
//================================================
void GQt::setListViewModel2(const QString &listViewName, const QString &standardItemModel) {
    QListView* lListView = m_listViewMap[listViewName];
    QStandardItemModel* lModel = m_standardItemModelMap[standardItemModel];
    lListView->setModel(lModel);
    lListView->setIconSize(QSize(25, 25));
    lListView->setViewMode(QListView::IconMode);
    lListView->setResizeMode(QListView::Adjust);
}
//================================================
void GQt::setListViewAlternatingRowColors(const QString &listViewName, const bool& ok) {
    QListView* lListView = m_listViewMap[listViewName];
    lListView->setAlternatingRowColors(ok);
}
//================================================
void GQt::setListViewEditTriggers(const QString &listViewName, QAbstractItemView::EditTriggers triggers) {
    QListView* lListView = m_listViewMap[listViewName];
    lListView->setEditTriggers(triggers);
}
//================================================
void GQt::createTabWidget(const QString &tabWidgetName, QWidget* parent) {
    QTabWidget* lTabWidget = new QTabWidget(parent);
    m_tabWidgetMap[tabWidgetName] = lTabWidget;
    lTabWidget->tabBar()->setCursor(Qt::PointingHandCursor);
    lTabWidget->resize(400, 400);
}
//================================================
void GQt::showTabWidget(const QString &tabWidgetName) {
    QTabWidget* lTabWidget = m_tabWidgetMap[tabWidgetName];
    lTabWidget->show();
}
//================================================
void GQt::addTabWidgetListView(const QString &tabWidgetName, const QString &listViewName, const QString &tabName) {
    QTabWidget* lTabWidget = m_tabWidgetMap[tabWidgetName];
    QListView* lListView = m_listViewMap[listViewName];
    lTabWidget->addTab(lListView, tabName);
}
//================================================
void GQt::createStringListModel(const QString &stringListModelName) {
    QStringListModel* lModel = new QStringListModel;
    m_stringListModelMap[stringListModelName] = lModel;
}
//================================================
void GQt::setStringListModelData(const QString &stringListModelName, initializer_list<QString> data) {
    QStringListModel* lModel = m_stringListModelMap[stringListModelName];
    QStringList lDataMap;
    for(QString lData : data) {
        lDataMap << lData;
    }
    lModel->setStringList(lDataMap);
}
//================================================
void GQt::createStandardItemModel(const QString &standardItemModelName, QObject *parent) {
    QStandardItemModel* lStandardItemModel = new QStandardItemModel(parent);
    m_standardItemModelMap[standardItemModelName] = lStandardItemModel;
}
//================================================
void GQt::setStandardItemModellData(const QString &standardItemModelName, const int& icon, initializer_list<QString> data) {
    QStandardItemModel* lStandardItemModel = m_standardItemModelMap[standardItemModelName];
    QIcon lIcon = GPicto::Instance()->getPicto(icon);
    for(QString lData : data) {
        lStandardItemModel->appendRow(new QStandardItem(lIcon, lData));
    }
}
//================================================
