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
    void build();
    static GBuilder* Create(const string& pizza);

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
