//===============================================
#include "GProcess.h"
#include "GConfig.h"
//===============================================
int main(int argc, char** argv) {
    GConfig::Instance()->setData("PROCESS", "POLYMORPHISM");
    GProcess::Instance()->run(argc, argv);
    return 0;
}
//===============================================
