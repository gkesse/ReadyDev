//===============================================
#include <iostream>
#include <string>
//===============================================
using namespace std;
//===============================================
int main(int argc, char** argv) {
	string m_cin;
	int m_code;
	int ACCESS_CODE = 1325;
	
	cout << "\n### Saisir vos identifiants:\n";
	cout << "Code: "; getline(cin, m_cin); m_code = stoi(m_cin);
	
	cout << "\n### Verification d'acces:\n";
	if(m_code == ACCESS_CODE) {
		cout << "BRAVO !!! Code Correct\n";
		return 0;
	}
	cout << "ERREUR !!! Code Incorrect\n";
	return 0;
}
//===============================================
