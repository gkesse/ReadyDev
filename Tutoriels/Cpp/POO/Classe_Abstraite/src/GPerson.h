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
    virtual ~GPerson();

public:
    virtual void print() const = 0;
    virtual void printType() const;
    void printInfo() const;

protected:
    string m_name;
    string m_email;
};
//===============================================
#endif
//===============================================
