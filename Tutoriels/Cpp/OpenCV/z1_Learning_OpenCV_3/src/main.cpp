//===============================================
#include "GProcess.h"
#include "GConfig.h"
//===============================================
int main(int argc, char** argv) {
    GConfig::Instance()->setData("APP_NAME", "IMAGE_PYRAMID");
    GProcess::Instance()->run();
    return 0;
}
//===============================================
