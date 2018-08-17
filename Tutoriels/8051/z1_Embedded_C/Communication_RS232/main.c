//===============================================
#include "GSeos.h"
#include "GRS232.h"
#include "GTimeElapse.h"
#include "GLedFlash.h"
//===============================================
void main() {
    GSeos_Init(5);
    GRS232_Init(9600);
    GTimeElapse_Init();
    GLedFlash_Init();
    GSeos_Start();
    
    while(1) {
        GSeos_Go_To_Sleep();
    }
}
//===============================================
