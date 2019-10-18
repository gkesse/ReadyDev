//===============================================
#include "GPerson.h"
//===============================================
int main(int argc, char** argv) {
    cout << "\n### Classe\n\n";

    GPerson* lPerson = new GPerson("Gerard", "gerard@readydev.com");
    GPerson* lPerson2 = new GPerson("Bryan", "bryan@readydev.com");
    GPerson* lPerson3 = new GPerson("Deborah", "deborah@readydev.com");

    lPerson->print();
    lPerson2->print();
    lPerson3->print();

    return 0;
}
//===============================================
