//===============================================
#ifndef _GPizzaRoyal_
#define _GPizzaRoyal_
//===============================================
#include "GBuilder.h"
//===============================================
class GPizzaRoyal : public GBuilder {
public:
    GPizzaRoyal();
    ~GPizzaRoyal();

public:
    void buildDough();
    void buildSauce();
    void buildGarnish();
};
//===============================================
#endif
//===============================================
