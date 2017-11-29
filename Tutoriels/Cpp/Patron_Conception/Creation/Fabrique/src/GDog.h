//===============================================
#ifndef _GDog_
#define _GDog_
//===============================================
#include "GAnimal.h"
//===============================================
class GDog : public GAnimal {
private:
    GDog();

public:
    ~GDog();
    static GDog* Instance();

public:
    void showName();

private:
    static GDog* m_instance;
};
//===============================================
#endif
//===============================================
