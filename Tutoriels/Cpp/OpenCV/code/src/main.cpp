//===============================================
#include "GProcess.h"
#include "GConfig.h"
//===============================================
int main(int argc, char** argv) {
    GConfig::Instance()->setData("PROCESS_NAME", "VIDEO_READ");
    GProcess::Instance()->run();
    return 0;
}
//===============================================
