//===============================================
#include "GProcess.h"
#include "GSetting.h"
#include "GFileSystem.h"
//===============================================
int main(int argc, char** argv) {
    GSetting::Instance()->load("res/cfg/config.txt");
    GProcess::Instance()->run(argc, argv);
    return 0;
}
//===============================================
