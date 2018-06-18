//===============================================
#include "GPerson.h"
//===============================================
int main(int argc, char** argv) {
    cout << "\n### Classe\n\n";
    GPerson* lPerson = new GPerson("Gerard", "gerard@readydev.com");
    GPerson* lPerson2 = new GPerson("Deborah", "deborah@readydev.com");
    GPerson* lPerson3 = new GPerson("Bryan", "bryan@readydev.com");
    lPerson->toString();
    lPerson2->toString();
    lPerson3->toString();
    return 0;
}
//===============================================
