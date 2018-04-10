//===============================================
#include "GSingleton.h"
//===============================================
void saveData(string data) {
	GSingleton::Instance()->setData(data);
}
//===============================================
void printData() {
	string m_data = GSingleton::Instance()->getData();
	cout << "m_data: " << m_data << "\n";
}
//===============================================
int main(int argc, char** argv) {
	printData();
	saveData("Bonjour tout le monde");
	printData();
    return 0;
}
//===============================================
