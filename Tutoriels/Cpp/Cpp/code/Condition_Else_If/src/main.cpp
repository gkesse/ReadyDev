//===============================================
#include <iostream>
#include <string>
//===============================================
using namespace std;
//===============================================
int main(int argc, char** argv) {
	string m_cin;
	int m_code;
	int ADMIN_CODE = 1325;
	int USER_CODE = 2513;
	
	cout << "\n### Saisir vos identifiants:\n";
	cout << "Code: "; getline(cin, m_cin); m_code = stoi(m_cin);
	
	cout << "\n### Verification d'acces:\n";
	if(m_code == ADMIN_CODE) {
		cout << "BRAVO !!! Code Administrateur Correct\n";
	}
	else if(m_code == USER_CODE) {
		cout << "BRAVO !!! Code Utilisateur Correct\n";
	}
	else {
		cout << "ERREUR !!! Code Incorrect\n";
	}
	return 0;
}
//===============================================
