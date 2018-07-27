//===============================================
#include "GMap.h"
//===============================================
int main(int argc, char** argv) {
    printf("\n### Map Cle Valeur\n\n");
    GMap_Instance().Set_Data("Name", "Gerard KESSE");
    GMap_Instance().Set_Data("Email", "gerard.kesse@gmail.com");
    GMap_Instance().Set_Data("Tel", "06.00.06.00.06");
    GMap_Instance().Show_Data();
    
    printf("\n### Changer Donnee\n\n");
    GMap_Instance().Set_Data("Name", "Deborah YOBOUE");
    GMap_Instance().Set_Data("Email", "deborah.yoboue@gmail.com");
    GMap_Instance().Set_Data("Tel", "06.22.06.22.06");
    GMap_Instance().Set_Data("Nationalite", "Ivoirienne");
    GMap_Instance().Show_Data();
    
    printf("\n### Lire Donnee\n\n");
    GMap_Instance().Get_Data("Name");
    
    return 0;
}
//===============================================
