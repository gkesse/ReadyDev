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
    
    printf("\n### Lire Donnee\n\n");
    GList_Instance()->Get_Data(3);
    
    printf("\n### Changer Donnee\n\n");
    GList_Instance()->Change_Data(3, "Changer Donnee");
    GList_Instance()->Show_Data();
    
    printf("\n### Inserer Donnee Apres\n\n");
    GList_Instance()->Insert_Data_After(3, "Inserer Donnee Apres");
    GList_Instance()->Show_Data();
    
    printf("\n### Inserer Donnee Avant\n\n");
    GList_Instance()->Insert_Data_Before(3, "Inserer Donnee Avant");
    GList_Instance()->Show_Data();
    
    return 0;
}
//===============================================
