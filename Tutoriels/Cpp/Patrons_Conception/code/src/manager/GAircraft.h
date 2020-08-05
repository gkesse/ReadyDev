//================================================
#ifndef _GAircraft_
#define _GAircraft_
//================================================
#include "GInclude.h"
//================================================
class GAircraft {
public:
    GAircraft();
    virtual ~GAircraft();

public:
    void setName(const string &name);
    virtual void print() const;

protected:
    string m_name;
};
//================================================
#endif
//================================================
