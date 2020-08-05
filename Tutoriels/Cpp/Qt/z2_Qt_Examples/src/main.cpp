//===============================================
#include "GProcess.h"
#include "GSetting.h"
//===============================================
int main(int argc, char** argv) {
    QApplication lApp(argc, argv);
    GSetting::Instance()->load("res/cfg/config.cfg");
    GProcess::Instance()->run();
    return lApp.exec();
}
//===============================================
