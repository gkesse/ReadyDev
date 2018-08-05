//===============================================
#include "GSingleton.h"
//===============================================
int main(int argc, char** argv) {
    printf("\n### Singleton Lire Donnee\n\n");
    printf("Lire: %s\n", GSingleton().Get_Data());
    
    printf("\n### Singleton Enregistrer Donnee\n\n");
    GSingleton().Set_Data("Bonjour tout le monde");
    printf("Enregistrer: %s\n", GSingleton().Get_Data());
    
    return 0;
}
//===============================================
