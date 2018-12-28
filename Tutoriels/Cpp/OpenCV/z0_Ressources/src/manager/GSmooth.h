//================================================
#ifndef _GSmooth_
#define _GSmooth_
//================================================
#include "GInclude.h"
//================================================
class GSmooth {
public:
    GSmooth();
    ~GSmooth();
	
public:
    static GSmooth* Instance();
    void smooth(const cv::Mat& src, cv::Mat& dst);
	
private:
    static GSmooth* m_instance;
};
//================================================
#endif
//================================================
