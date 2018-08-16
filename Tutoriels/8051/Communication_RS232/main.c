//===============================================
#include "GSeos.h"
#include "GRS232.h"
//===============================================
void main() {
    GSeos_Init(10);
    GRS232_Init(9600);
    GRS232_Write_String_To_Buffer("Bonjour tout le monde");
    GSeos_Start();
    
    while(1) {
        GSeos_Go_To_Sleep();
    }
}
//===============================================
