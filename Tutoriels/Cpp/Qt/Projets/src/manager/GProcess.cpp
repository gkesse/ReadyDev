//===============================================
#include "GProcess.h"
#include "GProcessWindow.h"
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
    if(lKey == "DATABASE") return GProcessDatabase::Instance();
    return GProcessWindow::Instance();
}
//===============================================
