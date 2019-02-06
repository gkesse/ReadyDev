//===============================================
#include "GClass.h"
//===============================================
int main(int argc, char** argv) {
    printf("\n### Classe Constructeur\n\n");
    GClass* lObj = GClass_Constructor();
    GClass* lObj2 = GClass_Constructor2("Bonjour tout le monde");
    lObj->Print(lObj);
    lObj2->Print(lObj2);

    printf("\n### Classe Ecriture\n\n");
    lObj->Set_Data(lObj, "Bonjour Gerard");
    lObj->Print(lObj);
    
    printf("\n### Classe Lecture\n\n");
    printf("Lecture: %s\n", lObj2->Get_Data(lObj2));
    
    printf("\n### Classe Destructeur\n\n");
    lObj->Destructor(lObj);
    lObj2->Destructor(lObj2);
    return 0;
}
//===============================================
