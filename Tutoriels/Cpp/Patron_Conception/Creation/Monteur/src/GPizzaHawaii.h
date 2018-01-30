//===============================================
#ifndef _GPizzaHawaii_
#define _GPizzaHawaii_
//===============================================
#include "GBuilder.h"
//===============================================
class GPizzaHawaii : public GBuilder {
public:
    GPizzaHawaii();
    ~GPizzaHawaii();

public:
    void buildDough();
    void buildSauce();
    void buildGarnish();
};
//===============================================
#endif
//===============================================
