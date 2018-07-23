//===============================================
#include "GPerson.h"
//===============================================
int main(int argc, char** argv) {
    printf("\n### Classe Fonction\n\n");
    GPerson* lObj = GPerson_Constructor();
    GPerson* lObj2 = GPerson_Constructor2("Bonjour tout le monde");
    lObj->Print(lObj);
    lObj2->Print(lObj2);
    lObj->Set_Name(lObj, "Bonjour Gerard");
    lObj->Print(lObj);
    printf("Lecture: %s\n", lObj2->Get_Name(lObj2));
    lObj->Destructor(lObj);
    lObj2->Destructor(lObj2);
    return 0;
}
//===============================================
