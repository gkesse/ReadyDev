//===============================================
#ifndef _GLogger_
#define _GLogger_
//===============================================
#include <iostream>
#include <string>
//===============================================
using namespace std;
//===============================================
class GLogger {
public:
    enum {DEBUG = 0, EMAIL = 1, ERROR = 2};

public:
    GLogger* setNext(GLogger* next);
    void message(const string& msg, const int& priority);

public:
    virtual void writeMessage(const string& msg) = 0;

protected:
    int m_level;
    GLogger* m_next;
};
//===============================================
#endif
//===============================================
