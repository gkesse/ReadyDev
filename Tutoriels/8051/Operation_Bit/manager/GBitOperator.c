//===============================================
#include "GBitOperator.h"
#include "GRS232.h"
//===============================================
void GBitOperator_Init() {
    uchar A = 0xFE;
    uint B = 0x0A0B;
    
    GRS232_Write_String("\n### Operations sur les bits\n\n");
    GRS232_Write_String("A = ");
    GRS232_Write_Hexa(A, 2);    
    GRS232_Write_String(" = ");
    GRS232_Write_Int(A, 0);    
    GRS232_Write_String("\n");
    GRS232_Write_String("B = ");
    GRS232_Write_Hexa(B, 4);    
    GRS232_Write_String(" = ");
    GRS232_Write_Int(B, 0);    
    GRS232_Write_String("\n");
}
//===============================================
