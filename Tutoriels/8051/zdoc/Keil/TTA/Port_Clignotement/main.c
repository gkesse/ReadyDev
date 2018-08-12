//===============================================
#include "GSch.h"
#include "GPortFlash.h"
//===============================================
void main() {
    GSch_Init(1);
    GPortFlash_Init();
    
    GSch_Add_Task(GPortFlash_Update, 0, 1000);
    
    GSch_Start();
    
    while(1) {
        GSch_Dispatch_Tasks();
    }
}
//===============================================