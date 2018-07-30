//===============================================
#include "GSingleton.h"
//===============================================
int main(int argc, char** argv) {
    printf("\n### Singleton Enregistrer Donnee\n\n");
    GSingleton().Strategy("MySQL");
    GSingleton().Open();
    
    printf("\n### Singleton Lire Donnee\n\n");
    GSingleton().Strategy("SQLite");
    GSingleton().Open();
    
    return 0;
}
//===============================================
