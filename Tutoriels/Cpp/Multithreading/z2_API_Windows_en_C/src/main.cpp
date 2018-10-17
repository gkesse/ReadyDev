//===============================================
#include "GProcess.h"
#include "GConfig.h"
//===============================================
int WINAPI WinMain(HINSTANCE hInstance, HINSTANCE hPrevInstance, LPSTR lpCmdLine, int nCmdShow) {
    GConfig::Instance()->setData("PROCESS", "RESOURCE");
    GProcess::Instance()->run(hInstance, hPrevInstance, lpCmdLine, nCmdShow);
    return 0;
}
//===============================================
