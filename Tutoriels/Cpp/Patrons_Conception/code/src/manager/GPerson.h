//================================================
#ifndef _GPerson_
#define _GPerson_
//================================================
#include "GInclude.h"
//================================================
class GPerson {
public:
    GPerson();
    ~GPerson();

public:
    void setName(const string &name);
    void print() const;

private:
    string m_name;
};
//================================================
#endif
//================================================
