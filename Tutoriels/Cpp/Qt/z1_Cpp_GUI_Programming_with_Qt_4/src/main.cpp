//===============================================
#include "GProcess.h"
#include "GConfig.h"
//===============================================
int main(int argc, char** argv) {
    QApplication lApp(argc, argv);

    GConfig::Instance()->setData("APP_NAME", "DESIGNER");
    GProcess::Instance()->run();

    return lApp.exec();
}
//===============================================
