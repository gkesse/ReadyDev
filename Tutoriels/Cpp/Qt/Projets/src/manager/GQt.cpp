//================================================
#include "GQt.h"
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
void GQt::setListViewAlternatingRowColors(const QString &listViewName, const bool& ok) {
    QListView* lListView = m_listViewMap[listViewName];
    lListView->setAlternatingRowColors(ok);
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
