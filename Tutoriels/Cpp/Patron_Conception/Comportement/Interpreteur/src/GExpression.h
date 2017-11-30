//===============================================
#ifndef _GExpression_
#define _GExpression_
//===============================================
#include <iostream>
#include <string>
#include <stack>
#include <vector>
//===============================================
using namespace std;
//===============================================
class GExpression {
public:
    virtual void interpret(stack<int>& s) = 0;
};
//===============================================
#endif
//===============================================
