//===============================================
#include <iostream>
//===============================================
using namespace std;
//===============================================
pair<int, int> divide(int dividend, int divisor) {
    pair<int, int> lDivide;
    int lFraction = dividend / divisor;
    int lRemainder = dividend % divisor;
    lDivide.first = lFraction;
    lDivide.second = lRemainder;
    return lDivide;
}
//===============================================
int main(int argc, char** argv) {
    cout << "\n### Decompresser des donnees\n\n";
    auto lDivide = divide(16, 3);
    cout << "Division (16, 3)\n";
    cout << "Quotient: " << lDivide.first << "\n";
    cout << "Reste: " << lDivide.second << "\n";
    
    cout << "\n### Decompresser des donnees\n\n";
    auto [a, b] = divide(16, 3);
    return 0;
}
//===============================================
