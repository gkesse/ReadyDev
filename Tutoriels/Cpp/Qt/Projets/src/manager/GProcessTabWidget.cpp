//===============================================
#include "GProcessTabWidget.h"
#include "GWindow.h"
#include "GStyle.h"
#include "GQt.h"
//===============================================
GProcessTabWidget* GProcessTabWidget::m_instance = 0;
//===============================================
GProcessTabWidget::GProcessTabWidget() {

}
//===============================================
GProcessTabWidget::~GProcessTabWidget() {

}
//===============================================
GProcessTabWidget* GProcessTabWidget::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessTabWidget;
    }
    return m_instance;
}
//===============================================
void GProcessTabWidget::run(int argc, char **argv) {
    QApplication lApp(argc, argv);
    GStyle::Instance()->load("data/css/style.css");

    GQt::Instance()->createStringListModel("MODEL");
    GQt::Instance()->createStandardItemModel("MODEL_2");

    GQt::Instance()->setStringListModelData("MODEL", {"AUCHAN", "LECLERC", "CARREFOUR", "LIDL", "INTER MARCHE", "GEANT CASINO"});
    GQt::Instance()->setStandardItemModellData("MODEL_2", fa::database, {"AUCHAN", "LECLERC", "CARREFOUR", "LIDL", "INTER MARCHE", "GEANT CASINO"});

    GQt::Instance()->createListView("LISTVIEW");
    GQt::Instance()->createListView("LISTVIEW_2");

    GQt::Instance()->setListViewAlternatingRowColors("LISTVIEW", true);
    GQt::Instance()->setListViewModel("LISTVIEW", "MODEL");
    GQt::Instance()->showListView("LISTVIEW");

    GQt::Instance()->setListViewAlternatingRowColors("LISTVIEW_2", true);
    GQt::Instance()->setListViewModel2("LISTVIEW_2", "MODEL_2");
    GQt::Instance()->showListView("LISTVIEW_2");

    GQt::Instance()->createTabWidget("TAB");
    GQt::Instance()->addTabWidgetListView("TAB", "LISTVIEW", "TEXTE");
    GQt::Instance()->addTabWidgetListView("TAB", "LISTVIEW_2", "ICONE");

    GQt::Instance()->showTabWidget("TAB");

    lApp.exec();
}
//===============================================
