//===============================================
#ifndef _GPizzaRoyal_
#define _GPizzaRoyal_
//===============================================
#include "GBuilder.h"
//===============================================
class GPizzaRoyal : public GBuilder {
private:
    GPizzaRoyal();

public:
    ~GPizzaRoyal();
    static GPizzaRoyal* Instance();

public:
    void buildDough();
    void buildSauce();
    void buildGarnish();

private:
    static GPizzaRoyal* m_instance;
};
//===============================================
#endif
//===============================================
