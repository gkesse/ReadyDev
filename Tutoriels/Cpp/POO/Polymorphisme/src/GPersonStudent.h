//===============================================
#ifndef _GPersonStudent_
#define _GPersonStudent_
//===============================================
#include "GPerson.h"
//===============================================
class GPersonStudent : public GPerson {
public:
    GPersonStudent();
    GPersonStudent(const string& name, const string& email, const float &average);
    ~GPersonStudent();

public:
    void toString() const;

private:
    float m_average;
};
//===============================================
#endif
//===============================================
