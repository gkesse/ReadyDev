//===============================================
#ifndef _GExpressionNumber_
#define _GExpressionNumber_
//===============================================
#include "GExpression.h"
//===============================================
class GExpressionNumber : public GExpression {
public:
    GExpressionNumber(const int& number);
    ~GExpressionNumber();

public:
    void interpret(stack<int>& s);

private:
    int m_number;
};
//===============================================
#endif
//===============================================
