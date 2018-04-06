//===============================================
#include <iostream>
#include <iomanip>
//===============================================
using namespace std;
//===============================================
int main(int argc, char** argv) {
    int INDEFINE = 5;
    int ROW_MAX = 10;
    
    cout << "### Fonction inverse 1 / (x - 5)\n\n";
    
	for(int i = 0; i <= ROW_MAX; i++) {
        double x = i*1.0;
        if(x == INDEFINE) {
            cout << "x = " << setw(2) << x << " | ";
            cout << "y = " << "INDEFINE" << "\n";
            continue;
        }
        double y = 1/(x - INDEFINE);
        cout << "x = " << setw(2) << x << " | ";
        cout << "y = " << setprecision(2) << y << "\n";
    }
	return 0;
}
//===============================================
