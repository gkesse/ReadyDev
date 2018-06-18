//===============================================
#include "GPersonStudent.h"
#include "GPersonProfessor.h"
#include "GPersonMinor.h"
//===============================================
int main(int argc, char** argv) {
    cout << "\n### Classe Abstraite\n\n";

    GPerson* lPerson = new GPersonStudent("Gerard", "gerard@readydev.com", 17.25);
    GPerson* lPerson2 = new GPersonProfessor("Deborah", "deborah@readydev.com", "Informatique");
    GPerson* lPerson3 = new GPersonMinor("Bryan", "bryan@readydev.com");

    lPerson->printInfo();
    lPerson->printType();
    lPerson->print();
    cout << "\n";

    lPerson2->printInfo();
    lPerson2->printType();
    lPerson2->print();
    cout << "\n";

    lPerson3->printInfo();
    lPerson3->printType();
    lPerson3->print();

    return 0;
}
//===============================================
