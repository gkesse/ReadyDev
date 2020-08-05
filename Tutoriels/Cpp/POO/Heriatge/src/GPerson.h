//===============================================
#ifndef _GPerson_
#define _GPerson_
//===============================================
#include <iostream>
#include <string>
//===============================================
using namespace std;
//===============================================
class GPerson {
public:
    GPerson();
    GPerson(const string& name, const string& email);
    ~GPerson();

public:
    void print() const;
    void printInfo() const;

protected:
    string m_name;
    string m_email;
};
//===============================================
#endif
//===============================================
