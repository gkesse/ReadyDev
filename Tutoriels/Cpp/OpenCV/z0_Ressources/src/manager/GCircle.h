//================================================
#ifndef _GCircle_
#define _GCircle_
//================================================
#include "GInclude.h"
//================================================
class GCircle {
public:
    GCircle();
    ~GCircle();
	
public:
    static GCircle* Instance();
    void draw(cv::Mat& img, const int& xC, const int& yC, const int& rC, const uchar& r, const uchar& g, const uchar& b);
    void draw(cv::Mat& img, const int& xC, const int& yC, const int& rC, const uchar& color);

private:
    static GCircle* m_instance;
};
//================================================
#endif
//================================================
