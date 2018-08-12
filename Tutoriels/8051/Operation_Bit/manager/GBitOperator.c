//===============================================
#include "GBitOperator.h"
#include "GRS232.h"
//===============================================
void GBitOperator_Init() {
    uchar A = 0xFE;
    uchar B = 0x0F;
    uint C = 0x0A0B;
    uchar lData = 0;
    
    GRS232_Write_String("\n### Operations sur les bits\n\n");
    GRS232_Write_String_Space("A ", 30, '.');
    GRS232_Write_Bin(A, 8);    
    GRS232_Write_String(" = ");
    GRS232_Write_Hexa(A, 2);    
    GRS232_Write_String(" = ");
    GRS232_Write_Int(A, 0);    
    GRS232_Write_String("\n");
    
    GRS232_Write_String_Space("B ", 30, '.');
    GRS232_Write_Bin(B, 8);    
    GRS232_Write_String(" = ");
    GRS232_Write_Hexa(B, 2);    
    GRS232_Write_String(" = ");
    GRS232_Write_Int(B, 0);    
    GRS232_Write_String("\n");
    
    GRS232_Write_String_Space("C ", 30, '.');
    GRS232_Write_Bin(C, 16);    
    GRS232_Write_String(" = ");
    GRS232_Write_Hexa(C, 4);    
    GRS232_Write_String(" = ");
    GRS232_Write_Int(C, 0);    
    GRS232_Write_String("\n");
    
    GRS232_Write_String("\n### Operateur sur les bits\n\n");
    
    lData = A;
    GRS232_Write_String_Space("A ", 30, '.');
    GRS232_Write_Bin(lData, 8);    
    GRS232_Write_String("\n");
    lData = ~A;
    GRS232_Write_String_Space("Complementaire(A) ", 30, '.');
    GRS232_Write_Bin(lData, 8);    
    GRS232_Write_String("\n");
}
//===============================================
