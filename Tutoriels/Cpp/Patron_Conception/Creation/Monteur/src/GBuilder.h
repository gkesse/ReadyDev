//===============================================
#ifndef _GBuilder_
#define _GBuilder_
//===============================================
#include "GPizza.h"
//===============================================
class GBuilder {
public:
    void createPizza();
    GPizza* getPizza() const;
    static GBuilder* Instance();
    void build();

public:
    virtual void buildDough() = 0;
    virtual void buildSauce() = 0;
    virtual void buildGarnish() = 0;

protected:
    GPizza* m_pizza;
};
//===============================================
#endif
//===============================================
