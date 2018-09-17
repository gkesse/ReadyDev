//===============================================
#include "GSingleton.h"
//===============================================
int main(int argc, char** argv) {
    cout << "\n### Patron Singleton\n\n";
    string lData;
    GSingleton::Instance()->showData();
    lData = GSingleton::Instance()->getData();
    cout << "Lecture: " << lData << "\n";
    GSingleton::Instance()->setData("Bonjour tout le monde");
    GSingleton::Instance()->showData();
    lData = GSingleton::Instance()->getData();
    cout << "Lecture: " << lData << "\n";
    return 0;
}
//===============================================
