//===============================================
#include "GProcess.h"
#include "GSetting.h"
//===============================================
int main(int argc, char** argv) {
    GSetting::Instance()->load("res/cfg/config.cfg");
    GProcess::Instance()->run(argc, argv);
    return 0;
}
//===============================================
