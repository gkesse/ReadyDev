//===============================================
#include "GProcessInheritance.h"
//===============================================
GProcessInheritance* GProcessInheritance::m_instance = 0;
//===============================================
GProcessInheritance::GProcessInheritance() {

}
//===============================================
GProcessInheritance::~GProcessInheritance() {

}
//===============================================
GProcessInheritance* GProcessInheritance::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessInheritance;
    }
    return m_instance;
}
//===============================================
void GProcessInheritance::run(int argc, char **argv) {
    cout << "\n### Heritage\n\n";
    GPerson lPerson(10, "John");
    cout << lPerson.whoAmI() << "\n";
    GWorker lWorker(35, "Mary", "En vacances");
    cout << lWorker.whoAmI() << endl;
    GStudent lStudent(22, "Sandra", "Medecin");
    cout << lStudent.whoAmI() << endl;
}
//===============================================
// GPerson
//===============================================
GPerson::GPerson() {
    m_age = 0;
    m_name = "";
}
//===============================================
GPerson::GPerson(int age, string name) {
    m_age = age;
    m_name = name;
}
//===============================================
string GPerson::whoAmI() {
    return "Je suis une personne: " +
           m_name + " | " + to_string(m_age);
}
//===============================================
// GWorker
//===============================================
GWorker::GWorker() {
    m_employmentStatus = "";
}
//===============================================
GWorker::GWorker(int age, string name, string employmentStatus) :
    GPerson(age, name){
    m_employmentStatus = employmentStatus;
}
//===============================================
string GWorker::whoAmI() {
    return "Je suis un travailleur: " +
            m_name + " | " + to_string(m_age) + " | " + m_employmentStatus;
}
//===============================================
// GStudent
//===============================================
GStudent::GStudent() {
    m_studentIdentityCard = "";
}
//===============================================
GStudent::GStudent(int age, string name, string studentIdentityCard) :
    GPerson(age, name){
    m_studentIdentityCard = studentIdentityCard;
}
//===============================================
string GStudent::whoAmI() {
    return "Je suis un etudiant: " +
            m_name + " | " + to_string(m_age) + " | " + m_studentIdentityCard;
}
//===============================================
