//===============================================
#include "GProcess.h"
#include "GConfig.h"
//===============================================
#ifndef G_WIN_MAIN_OFF
//===============================================
int main(int argc, char** argv) {
    GConfig::Instance()->setData("PROCESS", "INTERPROCESS_COMMUNICATION_CLIENT");
    GProcess::Instance()->run(argc, argv);
    return 0;
}
//===============================================
#else
//===============================================
int WINAPI WinMain(HINSTANCE hThis, HINSTANCE hPrev, LPSTR szCmdLine, int iCmdShow) {
    GConfig::Instance()->setData("PROCESS", "INTERPROCESS_COMMUNICATION_CLIENT");
    GProcess::Instance()->run2(hThis, hPrev, szCmdLine, iCmdShow);
    return 0;
}
//===============================================
#endif
//===============================================
