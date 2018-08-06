//===============================================
#include "GProcess.h"
#include "GConfig.h"
//===============================================
int main(int argc, char** argv) {
    GConfig::Instance()->setData("APP_NAME", "TRACKBAR_SLIDER");
    GProcess::Instance()->run();
    return 0;
}
//===============================================
