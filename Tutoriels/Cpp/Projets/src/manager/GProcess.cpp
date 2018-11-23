//===============================================
#include "GProcess.h"
#include "GProcessReadyVision.h"
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
    if(lProcess == "READY_VISION") return GProcessReadyVision::Instance();
    return GProcessReadyVision::Instance();
}
//===============================================
void GProcess::run(int argc, char **argv) {}
//===============================================
