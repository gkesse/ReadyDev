//================================================
#ifndef _GDrawGray_
#define _GDrawGray_
//================================================
#include "GDraw.h"
//================================================
class GDrawGray : public GDraw {
public:
    GDrawGray();
    ~GDrawGray();
	
public:
    static GDrawGray* Instance();
    void cercle(cv::Mat& img, const int& xC, const int& yC, const int& r);
	
private:
    static GDrawGray* m_instance;
};
//================================================
#endif
//================================================
