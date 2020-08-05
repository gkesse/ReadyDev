//===============================================
#include "GProcess.h"
#include "GSetting.h"
//===============================================
int main(int argc, char** argv) {
    GSetting::Instance()->load("data/config/config.txt");
    GProcess::Instance()->run(argc, argv);
    return 0;
}
//===============================================
