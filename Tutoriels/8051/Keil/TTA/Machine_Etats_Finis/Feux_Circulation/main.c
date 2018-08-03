//===============================================
#include "GSch.h"
#include "GTrafficLights.h"
//===============================================
void main() {
    GSch_Init(1);
    GTrafficLights_Init();
    
    GSch_Add_Task(GTrafficLights_Light_L1, 0, 1000);
    GSch_Add_Task(GTrafficLights_Light_L2, 1, 1000);
    
    GSch_Start();
    
    while(1) {
        GSch_Dispatch_Tasks();
    }
}
//===============================================