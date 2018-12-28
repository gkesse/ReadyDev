//================================================
#ifndef _GConvert_
#define _GConvert_
//================================================
#include "GInclude.h"
//================================================
class GConvert {
public:
    GConvert();
    ~GConvert();
	
public:
    static GConvert* Instance();
    void convert(const cv::Mat& src, cv::Mat& dst, const int& code);
	
private:
    static GConvert* m_instance;
};
//================================================
#endif
//================================================
