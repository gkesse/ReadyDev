//===============================================
#include "GProcess.h"
#include "GProcessConfigurationOptionsLong.h"
#include "GProcessConfigurationOptionsShort.h"
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
    if(lProcess == "CONFIGURATION_OPTIONS_LONG") return GProcessConfigurationOptionsLong::Instance();
    if(lProcess == "CONFIGURATION_OPTIONS_SHORT") return GProcessConfigurationOptionsShort::Instance();
    return GProcessConfigurationOptionsLong::Instance();
}
//===============================================
