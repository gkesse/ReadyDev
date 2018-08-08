//================================================
#ifndef _GDrawRgb_
#define _GDrawRgb_
//================================================
#include "GDraw.h"
//================================================
class GDrawRgb : public GDraw {
public:
    GDrawRgb();
    ~GDrawRgb();
	
public:
    static GDrawRgb* Instance();
    void cercle(cv::Mat& img, const int& xC, const int& yC, const int &r);
	
private:
    static GDrawRgb* m_instance;
};
//================================================
#endif
//================================================
