//===============================================
#include "GPersonStudent.h"
#include "GPersonProfessor.h"
//===============================================
int main(int argc, char** argv) {
    cout << "\n### Heritage Probleme\n\n";
    GPerson* lPerson = new GPersonStudent("Gerard", "gerard@readydev.com", 17.25);
    GPerson* lPerson2 = new GPersonProfessor("Bryan", "deborah@readydev.com", "Informatique");
    lPerson->toString();
    lPerson2->toString();
    return 0;
}
//===============================================
