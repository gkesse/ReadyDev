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
    double degreeToRadian(const double& degree);
    double radianToDegree(const double& radian);

private:
    static GMath* m_instance;
};
//================================================
#endif
//================================================
