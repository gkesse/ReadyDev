//================================================
#ifndef _GQt_
#define _GQt_
//================================================
#include "GInclude.h"
//================================================
class GQt {
public:
    GQt();
    virtual ~GQt();

public:
    static GQt* Instance();

    void createListView(const QString &listViewName);
    void showListView(const QString &listViewName);
    void setListViewModel(const QString &listViewName, const QString &stringListModelName);
    void setListViewAlternatingRowColors(const QString &listViewName, const bool& ok);

    void createStringListModel(const QString &stringListModelName);
    void setStringListModelData(const QString &stringListModelName, initializer_list<QString> data);

private:
    static GQt* m_instance;
    QMap<QString, QListView*> m_listViewMap;
    QMap<QString, QStringListModel*> m_stringListModelMap;
};
//================================================
#endif
//================================================
