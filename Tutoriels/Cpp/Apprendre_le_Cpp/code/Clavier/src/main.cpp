//===============================================
#include <iostream>
//===============================================
using namespace std;
//===============================================
int main(int argc, char** argv) {
	string m_name;
	int m_code;
	
	cout << "\n### Saisir vos identifiants:\n";
	cout << "Nom: "; cin >> m_name;
	cout << "Code: "; cin >> m_code;
	
	cout << "\n### Vous avez saisi:\n";
	cout << "Nom: " << m_name << "\n";
	cout << "Code: " << m_code << "\n";
	return 0;
}
//===============================================
