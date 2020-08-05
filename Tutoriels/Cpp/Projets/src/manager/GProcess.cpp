//===============================================
#include "GProcess.h"
#include "GProcessReadyVision.h"
#include "GProcessOpenFileDialog.h"
#include "GProcessConfig.h"
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
    if(lProcess == "OPEN_FILE_DIALOG") return GProcessOpenFileDialog::Instance();
    if(lProcess == "CONFIG") return GProcessConfig::Instance();
    return GProcessReadyVision::Instance();
}
//===============================================
