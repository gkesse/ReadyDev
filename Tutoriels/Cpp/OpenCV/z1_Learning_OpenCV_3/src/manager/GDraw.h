//================================================
#ifndef _GDraw_
#define _GDraw_
//================================================
#include "GInclude.h"
//================================================
class GDraw {
public:
    GDraw();
    ~GDraw();
	
public:
    static GDraw* Instance();
    virtual void cercle(cv::Mat& img, const int& xC, const int& yC, const int& r) = 0;
	
private:
    static GDraw* m_instance;
};
//================================================
#endif
//================================================
