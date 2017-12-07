//===============================================
#ifndef _GCar_
#define _GCar_
//===============================================
#include "GCarItem.h"
//===============================================
class GCar {
public:
    GCar();
    ~GCar();

public:
    vector<GCarItem*> getCarItemMap() const;

private:
    vector<GCarItem*> m_carItemMap;
};
//===============================================
#endif
//===============================================
