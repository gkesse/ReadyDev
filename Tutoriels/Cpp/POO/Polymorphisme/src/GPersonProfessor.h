//===============================================
#ifndef _GPersonProfessor_
#define _GPersonProfessor_
//===============================================
#include "GPerson.h"
//===============================================
class GPersonProfessor : public GPerson {
public:
    GPersonProfessor();
    GPersonProfessor(const string& name, const string& email, const string& lesson);
    ~GPersonProfessor();

public:
    void print() const;

private:
    string m_lesson;
};
//===============================================
#endif
//===============================================
