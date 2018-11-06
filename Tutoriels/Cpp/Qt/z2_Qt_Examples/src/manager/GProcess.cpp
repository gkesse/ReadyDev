//===============================================
#include "GProcess.h"
#include "GProcessSplitterCustom.h"
#include "GProcessButtonCustom.h"
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
    if(lProcess == "SPLITTER_CUSTOM") return GProcessSplitterCustom::Instance();
    if(lProcess == "BUTTON_CUSTOM") return GProcessButtonCustom::Instance();
    return GProcessSplitterCustom::Instance();
}
//===============================================
