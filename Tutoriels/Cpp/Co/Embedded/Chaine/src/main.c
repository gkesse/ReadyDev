//===============================================
#include "GString.h"
//===============================================
int main(int argc, char** argv) {
    char lData[50];
    
    printf("\n### Chaine Taille\n\n");
    printf("Taille: Bonjour: %d\n", GString().Size("Bonjour"));

    printf("\n### Chaine Est Egal\n\n");
    printf("Est Egal: Bonjour:Bonjour: %d\n", GString().Is_Equal("Bonjour", "Bonjour"));
    printf("Est Egal: Bonjour:bonjour: %d\n", GString().Is_Equal("Bonjour", "bonjour"));
    printf("Est Egal: Bonjour:Bon: %d\n", GString().Is_Equal("Bonjour", "bonjour"));
    
    printf("\n### Chaine Copier\n\n");
    GString().Copy(lData, "Bonjour tout le monde");
    printf("Copier: %s\n", lData);
    
    return 0;
}
//=============== ================================
