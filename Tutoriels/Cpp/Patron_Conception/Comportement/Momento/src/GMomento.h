//===============================================
#ifndef _GMomento_
#define _GMomento_
//===============================================
#include <iostream>
#include <string>
#include <memory>
//===============================================
using namespace std;
//===============================================
class GMomento {
public:
    GMomento(const string& state);
    ~GMomento();

public:
    string getState() const;

private:
    string m_state;
};
//===============================================
#endif
//===============================================
