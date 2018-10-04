//===============================================
#ifndef _GProcessInheritance_
#define _GProcessInheritance_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessInheritance;
class GPerson;
class GWorker;
class GStudent;
//===============================================
class GProcessInheritance : public GProcess {
public:
    GProcessInheritance();
    ~GProcessInheritance();

public:
    static GProcessInheritance* Instance();
    void run(int argc = 0, char** argv = 0);

private:
    static GProcessInheritance* m_instance;
};
//===============================================
// GPerson
//===============================================
class GPerson {
public:
    GPerson();
    GPerson(int age, string name);

public:
    virtual string whoAmI();

protected:
    int m_age;
    string m_name;
};
//===============================================
// GWorker
//===============================================
class GWorker : public GPerson {
public:
    GWorker();
    GWorker(int age, string name, string employmentStatus);

public:
    string whoAmI();

private:
    string m_employmentStatus;
};
//===============================================
// GStudent
//===============================================
class GStudent : public GPerson {
public:
    GStudent();
    GStudent(int age, string name, string studentIdentityCard);

public:
    string whoAmI();

private:
    string m_studentIdentityCard;
};
//===============================================
#endif
//===============================================
