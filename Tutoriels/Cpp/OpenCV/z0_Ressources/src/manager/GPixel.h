//================================================
#ifndef _GPixel_
#define _GPixel_
//================================================
#include "GInclude.h"
//================================================
class GPixel {
public:
    GPixel();
    ~GPixel();
	
public:
    static GPixel* Instance();
    void setPixel(cv::Mat& img, const int& x, const int& y, const uchar& r, const uchar& g, const uchar& b);
    void setPixel(cv::Mat& img, const int& x, const int& y, const uchar& color);

private:
    static GPixel* m_instance;
};
//================================================
#endif
//================================================
