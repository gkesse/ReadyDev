//===============================================
#include "GPersonStudent.h"
#include "GPersonProfessor.h"
//===============================================
int main(int argc, char** argv) {
    cout << "\n### Heritage\n\n";

    GPerson* lPerson = new GPerson("Bryan", "bryan@readydev.com");
    GPerson* lPerson2 = new GPersonStudent("Robins", "robins@readydev.com", "17.25");
    GPerson* lPerson3 = new GPersonProfessor("Gerard", "gerard@readydev.com", "Informatique");

    lPerson->printInfo();
    lPerson->print();
    cout << "\n";

    lPerson2->printInfo();
    lPerson2->print();
    cout << "\n";

    lPerson3->printInfo();
    lPerson3->print();
    cout << "\n";

    return 0;
}
//===============================================
