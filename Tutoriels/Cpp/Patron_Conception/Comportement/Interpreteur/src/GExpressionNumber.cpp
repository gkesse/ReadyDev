//===============================================
#include "GExpressionNumber.h"
//===============================================
GExpressionNumber::GExpressionNumber(const int& number) {
    m_number = number;
}
//===============================================
GExpressionNumber::~GExpressionNumber() {

}
//===============================================
void GExpressionNumber::interpret(stack<int>& s) {
    s.push(m_number);
}
//===============================================
