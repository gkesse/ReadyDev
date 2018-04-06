//===============================================
#include <iostream>
#include <iomanip>
//===============================================
using namespace std;
//===============================================
int main(int argc, char** argv) {
    int ROW_MAX = 10;
    int FACTOR = 9;
    
    cout << "### Table de multiplication par 9\n\n";
    
	for(int i = 0; i <= ROW_MAX; i++) {
        int m_data = i * FACTOR;
        cout << setw(2) << i << " x ";
        cout << FACTOR << " = ";
        cout << setw(2) << m_data << "\n";
    }
	return 0;
}
//===============================================
