//===============================================
#include "GController.h"
//===============================================
int main(int argc, char** argv) {
    GController::Instance()->greenState();
    GController::Instance()->amberState();
    GController::Instance()->redRedState1();
    GController::Instance()->redState();
    GController::Instance()->redAmberState();
    GController::Instance()->redRedState2();
    return 0;
}
//===============================================
