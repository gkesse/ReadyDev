//===============================================
#include "GProcessListView.h"
#include "GWindow.h"
#include "GStyle.h"
#include "GQt.h"
//===============================================
GProcessListView* GProcessListView::m_instance = 0;
//===============================================
GProcessListView::GProcessListView() {

}
//===============================================
GProcessListView::~GProcessListView() {

}
//===============================================
GProcessListView* GProcessListView::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessListView;
    }
    return m_instance;
}
//===============================================
void GProcessListView::run(int argc, char **argv) {
    QApplication lApp(argc, argv);
    GStyle::Instance()->load("data/css/style.css");

    GQt::Instance()->createStringListModel("MODEL");
    GQt::Instance()->setStringListModelData("MODEL", {"AUCHAN", "LECLERC", "CARREFOUR", "LIDL", "INTER MARCHE", "GEANT CASINO"});

    GQt::Instance()->createListView("LISTVIEW");
    GQt::Instance()->setListViewAlternatingRowColors("LISTVIEW", true);
    GQt::Instance()->setListViewModel("LISTVIEW", "MODEL");
    GQt::Instance()->showListView("LISTVIEW");

    lApp.exec();
}
//===============================================
