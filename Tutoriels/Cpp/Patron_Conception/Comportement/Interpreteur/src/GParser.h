//===============================================
#ifndef _GParser_
#define _GParser_
//===============================================
#include "GExpression.h"
//===============================================
class GParser {
public:
    GParser(char* expr);
    ~GParser();

public:
    int evaluate();

private:
    vector<GExpression*> m_exprMap;
};
//===============================================
#endif
//===============================================
