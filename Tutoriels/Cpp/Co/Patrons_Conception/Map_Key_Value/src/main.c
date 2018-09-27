//===============================================
#include "GMap.h"
//===============================================
int main(int argc, char** argv) {
    printf("\n### Map Cle Valeur\n\n");
    GMap()->Set_Data("Name", "Gerard KESSE");
    GMap()->Set_Data("Email", "gerard.kesse@gmail.com");
    GMap()->Set_Data("Tel", "06.00.06.00.06");
    GMap()->Show_Data();
    
    printf("\n### Changer Donnee\n\n");
    GMap()->Set_Data("Name", "Deborah YOBOUE");
    GMap()->Set_Data("Email", "deborah.yoboue@gmail.com");
    GMap()->Set_Data("Tel", "06.22.06.22.06");
    GMap()->Set_Data("Nationalite", "Ivoirienne");
    GMap()->Show_Data();
    
    printf("\n### Lire Donnee\n\n");
    GMap()->Get_Data("Name");
    return 0;
}
//===============================================
