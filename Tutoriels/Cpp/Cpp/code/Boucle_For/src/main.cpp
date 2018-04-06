//===============================================
#include <iostream>
#include <iomanip>
//===============================================
using namespace std;
//===============================================
int main(int argc, char** argv) {
    int ROW_MAX = 10;
    int COL_MAX = 10;
	for(int i = 0; i <= ROW_MAX + 1; i++) {
        for(int j = 0; j <= ROW_MAX; j++) {
            if(i == 0) {
                if(j == 0) {
                    cout << setw(3) << "|";
                    continue;
                }
                if(j == 1) {
                    cout << setw(3) << "X" << " | ";
                    continue;
                }
                cout << setw(3) << (j - 1) << " | ";
                continue;
            }
            if(i == 1) {
                if(j == 0) {
                    cout << setw(3) << "|";
                    continue;
                }
                cout << setw(3) << "---" << " | ";
                continue;
            }
            if(j == 0) {
                cout << setw(3) << "|";
                continue;
            }
            if(j == 1) {
                cout << setw(3) << (i - 2) << " | ";
                continue;
            }
            int m_data = (i - 2) * (j - 2);
            cout << setw(3) << m_data << " | ";
        }
        cout << "\n";
    }
	return 0;
}
//===============================================
