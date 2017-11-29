//===============================================
#ifndef _GCat_
#define _GCat_
//===============================================
#include "GAnimal.h"
//===============================================
class GCat : public GAnimal {
private:
    GCat();

public:
    ~GCat();
    static GCat* Instance();

public:
    void showName();

private:
    static GCat* m_instance;
};
//===============================================
#endif
//===============================================
