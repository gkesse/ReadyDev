//===============================================
#include "GProcess.h"
#include "GProcessWindow.h"
#include "GProcessPushButton.h"
#include "GProcessListView.h"
#include "GProcessTabWidget.h"
#include "GProcessDatabase.h"
#include "GConfig.h"
//===============================================
GProcess::GProcess() {

}
//===============================================
GProcess::~GProcess() {

}
//===============================================
GProcess* GProcess::Instance() {
    string lKey = GConfig::Instance()->getData("PROCESS");
    if(lKey == "WINDOW") return GProcessWindow::Instance();
    if(lKey == "PUSHBUTTON") return GProcessPushButton::Instance();
    if(lKey == "LISTVIEW") return GProcessListView::Instance();
    if(lKey == "TABWIDGET") return GProcessTabWidget::Instance();
    if(lKey == "DATABASE") return GProcessDatabase::Instance();
    return GProcessWindow::Instance();
}
//===============================================
