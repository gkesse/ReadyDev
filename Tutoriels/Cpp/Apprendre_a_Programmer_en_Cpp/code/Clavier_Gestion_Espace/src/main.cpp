//===============================================
#include <iostream>
#include <string>
//===============================================
using namespace std;
//===============================================
int main(int argc, char** argv) {
	string m_cin;
	string m_name;
	int m_code;
	
	cout << "\n### Saisir vos identifiants:\n";
	cout << "Nom: "; getline(cin, m_cin); m_name = m_cin;
	cout << "Code: "; getline(cin, m_cin); m_code = stoi(m_cin);
	
	cout << "\n### Vous avez saisi:\n";
	cout << "Nom: " << m_name << "\n";
	cout << "Code: " << m_code << "\n";
	return 0;
}
//===============================================
