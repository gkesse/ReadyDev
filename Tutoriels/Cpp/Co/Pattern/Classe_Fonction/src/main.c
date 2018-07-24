//===============================================
#include "GClass2.h"
//===============================================
int main(int argc, char** argv) {
    printf("\n### Classe Fonction\n\n");
    GClass* lObj = GClass_Constructor();
    GClass* lObj2 = GClass_Constructor2("Bonjour tout le monde");
    lObj->Print(lObj);
    lObj2->Print(lObj2);
    lObj->Set_Data(lObj, "Bonjour Gerard");
    lObj->Print(lObj);
    printf("Lecture: %s\n", lObj2->Get_Data(lObj2));
    lObj->Destructor(lObj);
    lObj2->Destructor(lObj2);
    return 0;
}
//===============================================
