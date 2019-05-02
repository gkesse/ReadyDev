//===============================================
#include "GProcess.h"
#include "GProcessClass.h"
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
    if(lKey == "CLASS") return GProcessClass::Instance();
    return GProcessClass::Instance();
}
//===============================================
