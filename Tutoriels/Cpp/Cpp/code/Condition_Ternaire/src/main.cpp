//===============================================
#include <iostream>
#include <iomanip>
//===============================================
using namespace std;
//===============================================
int main(int argc, char** argv) {
	int THRESHOLD = 100;
    int DATA_MAX = 10;
	
    cout << "### Signal carre\n\n";
    
    for(int i =0; i < DATA_MAX; i++) {
        double x = i*0.1;
        double y1 = i*20.0;
        double y2 = (y1 < THRESHOLD) ? 0.0 : 5.0;
        cout << "x = " << setw(3) << x <<  " (s) | ";
        cout << "y1 = " << setw(3) << y1 <<  " (V) | ";
        cout << "y2 = " << y2 <<   " (V)\n";
    }
	
	return 0;
}
//===============================================
