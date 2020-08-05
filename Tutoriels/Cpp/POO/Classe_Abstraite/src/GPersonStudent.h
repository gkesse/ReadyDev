//===============================================
#ifndef _GPersonStudent_
#define _GPersonStudent_
//===============================================
#include "GPerson.h"
//===============================================
class GPersonStudent : public GPerson {
public:
    GPersonStudent();
    GPersonStudent(const string& name, const string& email, const string &average);
    ~GPersonStudent();

public:
    void print() const;
    void printType() const;

private:
    string m_average;
};
//===============================================
#endif
//===============================================
