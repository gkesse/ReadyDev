//===============================================
#include "GExpressionMinus.h"
//===============================================
GExpressionMinus::GExpressionMinus() {

}
//===============================================
GExpressionMinus::~GExpressionMinus() {

}
//===============================================
void GExpressionMinus::interpret(stack<int>& s) {
    int m_number = 0;
    m_number -= s.top(); s.pop();
    m_number += s.top(); s.pop();
    s.push(m_number);
}
//===============================================
