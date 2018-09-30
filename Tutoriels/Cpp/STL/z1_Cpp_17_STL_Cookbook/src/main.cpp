//===============================================
#include "GProcess.h"
#include "GConfig.h"
//===============================================
int main(int argc, char** argv) {
    GConfig::Instance()->setData("PROCESS", "STRUCTURED_BINDING_STRUCT");
    GProcess::Instance()->run();
    return 0;
}
//===============================================
