//===============================================
#include "GSch.h"
#include "GLedFlash.h"
//===============================================
void main() {
    GSch_Init(1);
    GLedFlash_Init();
    
    GSch_Add_Task(GLedFlash_Update, 0, 1000);
    
    GSch_Start();
    
    while(1) {
        GSch_Dispatch_Tasks();
    }
}
//===============================================