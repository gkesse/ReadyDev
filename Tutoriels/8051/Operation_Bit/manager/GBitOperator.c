//===============================================
#include "GBitOperator.h"
#include "GRS232.h"
//===============================================
void GBitOperator_Init() {
    uchar A = 0xFE;
    uchar B = 0x0F;
    uint C = 0x0A0B;
    uchar lData = 0;
    uint lData2 = 0;
    
    GRS232_Write_String("\n### Operations sur les bits\n\n");
    GRS232_Write_String_Space("A ", 30, '.');
    GRS232_Write_Hexa(A, 2);    
    GRS232_Write_String(" = ");
    GRS232_Write_Bin(A, 8);    
    GRS232_Write_String(" = ");
    GRS232_Write_Int(A, 0);    
    GRS232_Write_String("\n");
    
    GRS232_Write_String_Space("B ", 30, '.');
    GRS232_Write_Hexa(B, 2);    
    GRS232_Write_String(" = ");
    GRS232_Write_Bin(A, 8);    
    GRS232_Write_String(" = ");
    GRS232_Write_Int(B, 0);    
    GRS232_Write_String("\n");
    
    GRS232_Write_String_Space("C ", 30, '.');
    GRS232_Write_Hexa(C, 4);    
    GRS232_Write_String(" = ");
    GRS232_Write_Bin(A, 8);    
    GRS232_Write_String(" = ");
    GRS232_Write_Int(C, 0);    
    GRS232_Write_String("\n");
    
    GRS232_Write_String("\n### Operateur Complementaire\n\n");
    lData = A;
    GRS232_Write_String_Space("A ", 30, '.');
    GRS232_Write_Bin(lData, 8);    
    GRS232_Write_String(" = ");
    GRS232_Write_Hexa(lData, 2);    
    GRS232_Write_String("\n");
    lData = ~A;
    GRS232_Write_String_Space("Complementaire(A) ", 30, '.');
    GRS232_Write_Bin(lData, 8);    
    GRS232_Write_String(" = ");
    GRS232_Write_Hexa(lData, 2);    
    GRS232_Write_String("\n");
    
    GRS232_Write_String("\n### Operateur ET Logique\n\n");
    lData = A;
    GRS232_Write_String_Space("A ", 30, '.');
    GRS232_Write_Bin(lData, 8);    
    GRS232_Write_String(" = ");
    GRS232_Write_Hexa(lData, 2);    
    GRS232_Write_String("\n");
    lData = B;
    GRS232_Write_String_Space("B ", 30, '.');
    GRS232_Write_Bin(lData, 8);    
    GRS232_Write_String(" = ");
    GRS232_Write_Hexa(lData, 2);    
    GRS232_Write_String("\n");
    lData = A & B;
    GRS232_Write_String_Space("ET Logique(A, B) ", 30, '.');
    GRS232_Write_Bin(lData, 8);    
    GRS232_Write_String(" = ");
    GRS232_Write_Hexa(lData, 2);    
    GRS232_Write_String("\n");
    
    GRS232_Write_String("\n### Operateur OU Logique\n\n");
    lData = A;
    GRS232_Write_String_Space("A ", 30, '.');
    GRS232_Write_Bin(lData, 8);    
    GRS232_Write_String(" = ");
    GRS232_Write_Hexa(lData, 2);    
    GRS232_Write_String("\n");
    lData = B;
    GRS232_Write_String_Space("B ", 30, '.');
    GRS232_Write_Bin(lData, 8);    
    GRS232_Write_String(" = ");
    GRS232_Write_Hexa(lData, 2);    
    GRS232_Write_String("\n");
    lData = A | B;
    GRS232_Write_String_Space("OU Logique(A, B) ", 30, '.');
    GRS232_Write_Bin(lData, 8);    
    GRS232_Write_String(" = ");
    GRS232_Write_Hexa(lData, 2);    
    GRS232_Write_String("\n");
    
    GRS232_Write_String("\n### Operateur OU Exclusif\n\n");
    lData = A;
    GRS232_Write_String_Space("A ", 30, '.');
    GRS232_Write_Bin(lData, 8);    
    GRS232_Write_String(" = ");
    GRS232_Write_Hexa(lData, 2);    
    GRS232_Write_String("\n");
    lData = B;
    GRS232_Write_String_Space("B ", 30, '.');
    GRS232_Write_Bin(lData, 8);    
    GRS232_Write_String(" = ");
    GRS232_Write_Hexa(lData, 2);    
    GRS232_Write_String("\n");
    lData = A ^ B;
    GRS232_Write_String_Space("OU Exclusif(A, B) ", 30, '.');
    GRS232_Write_Bin(lData, 8);    
    GRS232_Write_String(" = ");
    GRS232_Write_Hexa(lData, 2);    
    GRS232_Write_String("\n");
    
    GRS232_Write_String("\n### Operateur Decalage Gauche\n\n");
    lData = A;
    GRS232_Write_String_Space("A ", 30, '.');
    GRS232_Write_Bin(lData, 8);    
    GRS232_Write_String(" = ");
    GRS232_Write_Hexa(lData, 2);    
    GRS232_Write_String("\n");
    lData = A << 2;
    GRS232_Write_String_Space("Decalage Gauche(A, 2) ", 30, '.');
    GRS232_Write_Bin(lData, 8);    
    GRS232_Write_String(" = ");
    GRS232_Write_Hexa(lData, 2);    
    GRS232_Write_String("\n");
    
    GRS232_Write_String("\n### Operateur Decalage Droite\n\n");
    lData = A;
    GRS232_Write_String_Space("A ", 30, '.');
    GRS232_Write_Bin(lData, 8);    
    GRS232_Write_String(" = ");
    GRS232_Write_Hexa(lData, 2);    
    GRS232_Write_String("\n");
    lData = A >> 2;
    GRS232_Write_String_Space("Decalage Droite(A, 2) ", 30, '.');
    GRS232_Write_Bin(lData, 8);    
    GRS232_Write_String(" = ");
    GRS232_Write_Hexa(lData, 2);    
    GRS232_Write_String("\n");
    
    GRS232_Write_String("\n### Octet Fort & Faible\n\n");
    lData2 = C;
    GRS232_Write_String_Space("C ", 30, '.');
    GRS232_Write_Bin(lData2, 16);    
    GRS232_Write_String(" = ");
    GRS232_Write_Hexa(lData2, 4);    
    GRS232_Write_String("\n");
    lData = C >> 8;
    GRS232_Write_String_Space("Octet Fort(C) ", 30, '.');
    GRS232_Write_Bin(lData, 8);    
    GRS232_Write_String(" = ");
    GRS232_Write_Hexa(lData, 2);    
    GRS232_Write_String("\n");
    lData = C & 0xFF;
    GRS232_Write_String_Space("Octet Faible(C) ", 30, '.');
    GRS232_Write_Bin(lData, 8);    
    GRS232_Write_String(" = ");
    GRS232_Write_Hexa(lData, 2);    
    GRS232_Write_String("\n");
}
//===============================================
