//===============================================
#include "GList2.h"
//===============================================
int main(int argc, char** argv) {
    printf("\n### Liste Chainee FIFO\n\n");
    GList_Instance()->Add_Data("Un");
    GList_Instance()->Add_Data("Deux");
    GList_Instance()->Add_Data("Trois");
    GList_Instance()->Add_Data("Quatre");
    GList_Instance()->Add_Data("Cinq");
    GList_Instance()->Show_Data();
    
    printf("\n### Lire Taille\n\n");
    GList_Instance()->Get_Size();
    
    printf("\n### Trouver Donnee\n\n");
    GList_Instance()->Get_Data(3);
    
    printf("\n### Changer Donnee\n\n");
    GList_Instance()->Change_Data(3, "Nouvelle Valeur");
    GList_Instance()->Show_Data();
    
    return 0;
}
//===============================================
