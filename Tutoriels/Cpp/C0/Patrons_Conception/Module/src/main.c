//===============================================
#include "GModule.h"
//===============================================
int main(int argc, char** argv) {
    printf("\n### Module Constructeur\n\n");
    GModule* lObj = GModule_Constructor();
    GModule* lObj2 = GModule_Constructor2("Bonjour tout le monde");
    GModule_Print(lObj);
    GModule_Print(lObj2);

    printf("\n### Module Ecriture\n\n");
    GModule_Set_Data(lObj, "Bonjour Gerard");
    GModule_Print(lObj);
    
    printf("\n### Module Lecture\n\n");
    printf("Lecture: %s\n", GModule_Get_Data(lObj2));
    
    printf("\n### Module Destructeur\n\n");
    GModule_Destructor(lObj);
    GModule_Destructor(lObj2);
    return 0;
}
//===============================================
