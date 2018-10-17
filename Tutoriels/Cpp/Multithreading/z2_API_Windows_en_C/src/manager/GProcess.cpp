//===============================================
#include "GProcess.h"
#include "GProcessMainWindow.h"
#include "GProcessControlMessage.h"
#include "GProcessOrderNotification.h"
#include "GProcessResource.h"
#include "GConfig.h"
//===============================================
GProcess* GProcess::m_instance = 0;
//===============================================
GProcess::GProcess() {

}
//===============================================
GProcess::~GProcess() {

}
//===============================================
GProcess* GProcess::Instance() {
    string lProcess = GConfig::Instance()->getData("PROCESS");
    if(lProcess == "MAIN_WINDOW") return GProcessMainWindow::Instance();
    if(lProcess == "CONTROL_MESSAGE") return GProcessControlMessage::Instance();
    if(lProcess == "ORDER_NOTIFICATION") return GProcessOrderNotification::Instance();
    if(lProcess == "RESOURCE") return GProcessResource::Instance();
    return GProcessMainWindow::Instance();
}
//===============================================
void GProcess::run(HINSTANCE hInstance, HINSTANCE hPrevInstance, LPSTR lpCmdLine, int nCmdShow) {}
//===============================================
