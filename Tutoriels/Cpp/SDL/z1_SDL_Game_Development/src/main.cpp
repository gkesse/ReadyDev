//===============================================
#include "GProcess.h"
#include "GConfig.h"
//===============================================
int main(int argc, char** argv) {
    GConfig::Instance()->setData("PROCESS", "HELLO_SDL_BREAKING");
    GProcess::Instance()->run();
    return 0;
}
//===============================================
