//===============================================
#include "GSingleton.h"
//===============================================
int main(int argc, char** argv) {
    printf("\n### Singleton Affichage\n\n");
    GSingleton()->Print();

    printf("\n### Singleton Ecriture\n\n");
    GSingleton()->Set_Data("Bonjour tout le monde");
    GSingleton()->Print();
    
    printf("\n### Singleton Lecture\n\n");
    printf("Lecture: %s\n", GSingleton()->Get_Data());
    return 0;
}
//===============================================
