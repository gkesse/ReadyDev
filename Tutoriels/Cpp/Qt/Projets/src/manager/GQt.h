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

    void createWidget(const QString &widgetName, QWidget *parent = 0);
    QWidget* getWidget(const QString &widgetName);

    void createPushButton(const QString &name);
    QPushButton* getPushButton(const QString &name);

    void createHBoxLayout(const QString &hBoxLayoutName);
    QHBoxLayout* getHBoxLayout(const QString &hBoxLayoutName);

    void createListView(const QString &listViewName);
    void showListView(const QString &listViewName);
    void setListViewModel(const QString &listViewName, const QString &stringListModelName);
    void setListViewModel2(const QString &listViewName, const QString &standardItemModel);
    void setListViewAlternatingRowColors(const QString &listViewName, const bool& ok);
    void setListViewEditTriggers(const QString &listViewName, QAbstractItemView::EditTriggers triggers);

    void createTabWidget(const QString &tabWidgetName, QWidget *parent = 0);
    void showTabWidget(const QString &tabWidgetName);
    void addTabWidgetListView(const QString &tabWidgetName, const QString &listViewName, const QString& tabName);

    void createStringListModel(const QString &stringListModelName);
    void setStringListModelData(const QString &stringListModelName, initializer_list<QString> data);

    void createStandardItemModel(const QString &standardItemModelName, QObject *parent = 0);
    void setStandardItemModellData(const QString &standardItemModelName, const int &icon, initializer_list<QString> data);

private:
    static GQt* m_instance;
    QMap<QString, QWidget*> m_widgetMap;
    QMap<QString, QPushButton*> m_pushButtonMap;
    QMap<QString, QHBoxLayout*> m_hBoxLayoutMap;
    QMap<QString, QListView*> m_listViewMap;
    QMap<QString, QTabWidget*> m_tabWidgetMap;

    QMap<QString, QStringListModel*> m_stringListModelMap;
    QMap<QString, QStandardItemModel*> m_standardItemModelMap;
};
//================================================
#endif
//================================================
