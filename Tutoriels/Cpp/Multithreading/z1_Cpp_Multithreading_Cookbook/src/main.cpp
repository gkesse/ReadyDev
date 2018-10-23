//===============================================
#include "GProcess.h"
#include "GConfig.h"
//===============================================
#ifdef G_WIN_MAIN_ON
//===============================================
int WINAPI WinMain(HINSTANCE hInstance, HINSTANCE hPrevInstance, LPSTR lpCmdLine, int nCmdShow) {
    GConfig::Instance()->setData("PROCESS", "INTERPROCESS_COMMUNICATION_SEMAPHORE_CLIENT");
    GProcess::Instance()->run2(hInstance, hPrevInstance, lpCmdLine, nCmdShow);
    return 0;
}
//===============================================
#else
//===============================================
int main(int argc, char** argv) {
    GConfig::Instance()->setData("PROCESS", "INTERPROCESS_COMMUNICATION_SEMAPHORE_SERVER");
    GProcess::Instance()->run(argc, argv);
    return 0;
}
//===============================================
#endif
//===============================================
