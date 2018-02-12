//===============================================
#ifndef _GExpressionPlus_
#define _GExpressionPlus_
//===============================================
#include "GExpression.h"
//===============================================
class GExpressionPlus : public GExpression {
public:
    GExpressionPlus();
    ~GExpressionPlus();

public:
    void interpret(stack<int>& s);
};
//===============================================
#endif
//===============================================
