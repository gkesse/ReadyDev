//===============================================
#include "GPerson.h"
//===============================================
int main(int argc, char** argv) {
    cout << "\n### Classe\n\n";
    GPerson lPerson("Gerard", "gerard@readydev.com");
    GPerson lPerson2("Bryan", "deborah@readydev.com");
    lPerson.toString();
    lPerson2.toString();
    return 0;
}
//===============================================
