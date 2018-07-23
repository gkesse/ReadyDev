//===============================================
#include "GClass.h"
//===============================================
int main(int argc, char** argv) {
    printf("\n### Classe\n\n");
    GClass* lObj = GClass_Constructor();
    GClass* lObj2 = GClass_Constructor2("Bonjour tout le monde");
    GClass_Print_Data(lObj);
    GClass_Print_Data(lObj2);
    GClass_Destructor(lObj);
    GClass_Destructor(lObj2);
    return 0;
}
//===============================================
