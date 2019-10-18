//===============================================
#include "GProcess.h"
#include "GProcessStructuredBinding.h"
#include "GProcessStructuredBindingTuple.h"
#include "GProcessStructuredBindingStruct.h"
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
    if(lProcess == "STRUCTURED_BINDING_PAIR") return GProcessStructuredBinding::Instance();
    if(lProcess == "STRUCTURED_BINDING_TUPLE") return GProcessStructuredBindingTuple::Instance();
    if(lProcess == "STRUCTURED_BINDING_STRUCT") return GProcessStructuredBindingStruct::Instance();
    return GProcessStructuredBinding::Instance();
}
//===============================================
