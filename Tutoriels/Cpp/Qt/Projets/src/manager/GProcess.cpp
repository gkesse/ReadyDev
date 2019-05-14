//===============================================
#include "GProcess.h"
#include "GProcessWindow.h"
#include "GProcessPushButton.h"
#include "GProcessToolButton.h"
#include "GProcessRadioButton.h"
#include "GProcessCheckBox.h"
#include "GProcessLabel.h"
#include "GProcessDial.h"
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
    if(lKey == "TOOLBUTTON") return GProcessToolButton::Instance();
    if(lKey == "RADIOBUTTON") return GProcessRadioButton::Instance();
    if(lKey == "CHECKBOX") return GProcessCheckBox::Instance();
    if(lKey == "LABEL") return GProcessLabel::Instance();
    if(lKey == "DIAL") return GProcessDial::Instance();
    if(lKey == "LISTVIEW") return GProcessListView::Instance();
    if(lKey == "TABWIDGET") return GProcessTabWidget::Instance();
    if(lKey == "DATABASE") return GProcessDatabase::Instance();
    return GProcessWindow::Instance();
}
//===============================================
