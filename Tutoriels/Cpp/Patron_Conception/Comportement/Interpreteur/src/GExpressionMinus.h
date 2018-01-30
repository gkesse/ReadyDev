//===============================================
#ifndef _GExpressionMinus_
#define _GExpressionMinus_
//===============================================
#include "GExpression.h"
//===============================================
class GExpressionMinus : public GExpression {
public:
    GExpressionMinus();
    ~GExpressionMinus();

public:
    void interpret(stack<int>& s);
};
//===============================================
#endif
//===============================================
