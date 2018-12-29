//===============================================
#include "GProcess.h"
#include "GConfig.h"
//===============================================
int main(int argc, char** argv) {
    GConfig()->Set_Data("PROCESS", "VARIABLE");
    GConfig()->Set_Data("OS", "WINDOWS");
    GConfig()->Print();
    GProcess()->Run();
    return 0;
}
//===============================================
