//===============================================
#include "GProcess.h"
#include "GConfig.h"
//===============================================
int main(int argc, char** argv) {
    GConfig::Instance()->setData("PROCESS", "CONFIGURATION_OPTIONS_SHORT");
    GProcess::Instance()->run(argc, argv);
    return 0;
}
//===============================================
