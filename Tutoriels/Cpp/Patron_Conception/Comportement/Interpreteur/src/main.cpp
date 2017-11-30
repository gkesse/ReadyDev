//===============================================
#include "GParser.h"
//===============================================
int main(int argc, char** argv) {
    char m_expr[] = "42 4 2 - +";
    GParser* m_parser = new GParser(m_expr);
    cout << "Parser Evaluate : " << m_parser->evaluate() << "\n";
    return 0;
}
//===============================================
