//===============================================
#include "GStrategy.h"
#include "GConfig.h"
//===============================================
int main(int argc, char** argv) {
    printf("\n### Strategie Defaut\n\n");
    GStrategy()->Run();
    
    printf("\n### Strategie Python\n\n");
    GConfig()->Set_Data("STRATEGY", "PYTHON");
    GStrategy()->Run();
    
    printf("\n### Strategie JAVA\n\n");
    GConfig()->Set_Data("STRATEGY", "JAVA");
    GStrategy()->Run();
    return 0;
}
//===============================================
