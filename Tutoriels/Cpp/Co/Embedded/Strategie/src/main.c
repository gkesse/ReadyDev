//===============================================
#include "GDatabase.h"
//===============================================
int main(int argc, char** argv) {
    printf("\n### Strategie MySQL\n\n");
    GDatabase().Strategy("MySQL");
    GDatabase().Open();
    
    printf("\n### Strategie SQLite\n\n");
    GDatabase().Strategy("SQLite");
    GDatabase().Open();
    
    return 0;
}
//===============================================
