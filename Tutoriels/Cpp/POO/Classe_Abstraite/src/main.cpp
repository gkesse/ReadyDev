//===============================================
#include "GPersonStudent.h"
#include "GPersonProfessor.h"
#include "GPersonMinor.h"
//===============================================
int main(int argc, char** argv) {
    cout << "\n### Classe Abstraite\n\n";

    GPerson* lPerson3 = new GPersonMinor("Bryan", "bryan@readydev.com");
    GPerson* lPerson = new GPersonStudent("Robins", "robins@readydev.com", "17.25");
    GPerson* lPerson2 = new GPersonProfessor("Gerard", "gerard@readydev.com", "Informatique");

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
