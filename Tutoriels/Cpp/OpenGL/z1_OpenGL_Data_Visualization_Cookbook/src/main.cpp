//===============================================
#include "GProcess.h"
#include "GConfig.h"
//===============================================
int main(int argc, char** argv) {
    GConfig::Instance()->setData("PROCESS", "DRAWING_LINE");
    GProcess::Instance()->run(argc, argv);
    return 0;
}
//===============================================
