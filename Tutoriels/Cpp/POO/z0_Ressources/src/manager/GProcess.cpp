//===============================================
#include "GProcess.h"
#include "GProcessHello.h"
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
    if(lProcess == "HELLO") return GProcessHello::Instance();
    return GProcessHello::Instance();
}
//===============================================
void GProcess::run(int argc, char **argv) {}
//===============================================
