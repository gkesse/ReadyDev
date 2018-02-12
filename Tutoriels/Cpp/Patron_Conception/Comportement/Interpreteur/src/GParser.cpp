//===============================================
#include "GParser.h"
#include "GExpressionNumber.h"
#include "GExpressionPlus.h"
#include "GExpressionMinus.h"
//===============================================
GParser::GParser(char* expr) {
    char* m_split = strtok(expr, " ");
    while(m_split != 0) {
        if(strcmp(m_split, "+") == 0) {
            m_exprMap.push_back(new GExpressionPlus);
        }
        else if(strcmp(m_split, "-") == 0) {
            m_exprMap.push_back(new GExpressionMinus);
        }
        else {
            m_exprMap.push_back(new GExpressionNumber(atoi(m_split)));
        }
        m_split = strtok(0, " ");
    }
}
//===============================================
GParser::~GParser() {

}
//===============================================
int GParser::evaluate() {
    stack<int> m_context;
    for(int i = 0; i < m_exprMap.size(); i++) {
        GExpression* m_expr = m_exprMap.at(i);
        m_expr->interpret(m_context);
    }
    return m_context.top();
}
//===============================================
