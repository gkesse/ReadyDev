//===============================================
#include "GString.h"
//===============================================
int main(int argc, char** argv) {
    printf("\n### Chaine Taille\n\n");
    printf("Taille: Bonjour: %d\n", GString_Instance().Size("Bonjour"));

    printf("\n### Est Egal\n\n");
    printf("Est Egal: Bonjour:Bonjour: %d\n", GString_Instance().Is_Equal("Bonjour", "Bonjour"));
    printf("Est Egal: Bonjour:bonjour: %d\n", GString_Instance().Is_Equal("Bonjour", "bonjour"));
    printf("Est Egal: Bonjour:Bon: %d\n", GString_Instance().Is_Equal("Bonjour", "bonjour"));
    
    return 0;
}
//=============== ================================
