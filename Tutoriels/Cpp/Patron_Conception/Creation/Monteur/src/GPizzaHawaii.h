//===============================================
#ifndef _GPizzaHawaii_
#define _GPizzaHawaii_
//===============================================
#include "GBuilder.h"
//===============================================
class GPizzaHawaii : public GBuilder {
private:
    GPizzaHawaii();

public:
    ~GPizzaHawaii();
    static GPizzaHawaii* Instance();

public:
    void buildDough();
    void buildSauce();
    void buildGarnish();

private:
    static GPizzaHawaii* m_instance;
};
//===============================================
#endif
//===============================================
