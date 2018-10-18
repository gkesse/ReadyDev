//===============================================
#include "GProcess.h"
#include "GConfig.h"
//===============================================
#ifdef G_WIN_MAIN_ON
//===============================================
int WINAPI WinMain(HINSTANCE hThis, HINSTANCE hPrev, LPSTR szCmdLine, int iCmdShow) {
    GConfig::Instance()->setData("PROCESS", "INTERPROCESS_COMMUNICATION_CLIENT");
    GProcess::Instance()->run2(hThis, hPrev, szCmdLine, iCmdShow);
    return 0;
}
//===============================================
#else
//===============================================
int main(int argc, char** argv) {
    GConfig::Instance()->setData("PROCESS", "PROCESS_IMPLEMENTATION");
    GProcess::Instance()->run(argc, argv);
    return 0;
}
//===============================================
#endif
//===============================================
