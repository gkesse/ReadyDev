//===============================================
#include "GPersonStudent.h"
#include "GPersonProfessor.h"
//===============================================
int main(int argc, char** argv) {
    cout << "\n### Heritage Probleme\n\n";
    GPerson* lPerson = new GPerson("Gerard", "gerard@readydev.com");
    GPerson* lPerson2 = new GPersonStudent("Deborah", "deborah@readydev.com", 17.25);
    GPerson* lPerson3 = new GPersonProfessor("Bryan", "bryan@readydev.com", "Informatique");
    lPerson->toString();
    lPerson2->toString();
    lPerson3->toString();
    return 0;
}
//===============================================
