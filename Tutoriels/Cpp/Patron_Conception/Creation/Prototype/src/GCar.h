//===============================================
#ifndef _GCar_
#define _GCar_
//===============================================
#include "GPrototype.h"
//===============================================
class GCar : public GPrototype {
public:
    GCar();
    GCar(const GCar& car);
    ~GCar();

public:
    GPrototype* clone();
    void print();
    void setMaker(const string& maker);
    void setName(const string& name);
    void setPrice(const string &price);

private:
    string m_maker;
    string m_name;
    string m_price;
};
//===============================================
#endif
//===============================================
