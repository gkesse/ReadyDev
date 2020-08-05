//================================================
#ifndef _GAnimal_
#define _GAnimal_
//================================================
#include "GInclude.h"
//================================================
class GAnimal {
public:
    GAnimal();
    ~GAnimal();

public:
    void setName(const string &name);
    void showName() const;

protected:
    string m_name;
};
//================================================
#endif
//================================================
