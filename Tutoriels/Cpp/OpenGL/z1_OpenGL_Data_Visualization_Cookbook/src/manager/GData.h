//================================================
#ifndef _GData_
#define _GData_
//================================================
#include "GInclude.h"
//================================================
class GData {
public:
    GData();
    ~GData();
	
public:
    static GData* Instance();
    GVertex *sinus(const double &tmin, const double &tmax, const double &dt, const double &phi, int *size);

private:
    static GData* m_instance;
};
//================================================
#endif
//================================================
