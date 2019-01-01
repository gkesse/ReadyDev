//===============================================
#include "GProcess.h"
#include "GConfig.h"
#include "GSetting.h"
//===============================================
int main(int argc, char** argv) {
    GSetting()->Load("res/config/config.txt");
    GProcess()->Run();
    return 0;
}
//===============================================
