//================================================
#ifndef _GMath_
#define _GMath_
//================================================
#include "GInclude.h"
//================================================
class GMath {
public:
    GMath();
    ~GMath();
	
public:
    static GMath* Instance();
    double rad(const double& deg);
    double deg(const double& rad);
    double sinus(const double &time, const double &vmax, const double &freq, const double &phi);

private:
    static GMath* m_instance;
};
//================================================
#endif
//================================================