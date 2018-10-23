//===============================================
#include "GProcess.h"
#include "GProcessHelloSdl.h"
#include "GProcessHelloSdlBreaking.h"
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
    if(lProcess == "HELLO_SDL") return GProcessHelloSdl::Instance();
    if(lProcess == "HELLO_SDL_BREAKING") return GProcessHelloSdlBreaking::Instance();
    if(lProcess == "STRUCTURED_BINDING_STRUCT") return GProcessStructuredBindingStruct::Instance();
    return GProcessHelloSdl::Instance();
}
//===============================================
