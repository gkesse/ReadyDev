//================================================
#ifndef _GStrategy_
#define _GStrategy_
//================================================
#include "GInclude.h"
//================================================
class GStrategy {
public:
    GStrategy();
    virtual ~GStrategy();

public:
    static GStrategy* Instance();
    void setName(const string &name);
    virtual void print() const = 0;

protected:
    string m_name;
};
//================================================
#endif
//================================================
