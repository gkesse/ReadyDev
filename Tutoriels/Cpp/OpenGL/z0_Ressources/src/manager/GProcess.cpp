//===============================================
#include "GProcess.h"
#include "GProcessWindow.h"
#include "GConfig.h"
//===============================================
GProcess::GProcess() {

}
//===============================================
GProcess::~GProcess() {

}
//===============================================
GProcess* GProcess::Instance() {
    string lProcess = GConfig::Instance()->getData("PROCESS");
    if(lProcess == "WINDOW") return GProcessWindow::Instance();
    return GProcessWindow::Instance();
}
//===============================================
