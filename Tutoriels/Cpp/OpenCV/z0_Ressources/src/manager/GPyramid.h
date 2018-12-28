//================================================
#ifndef _GPyramid_
#define _GPyramid_
//================================================
#include "GInclude.h"
//================================================
class GPyramid {
public:
    GPyramid();
    ~GPyramid();
	
public:
    static GPyramid* Instance();
    void pyramid(const cv::Mat& src, cv::Mat& dst);
	
private:
    static GPyramid* m_instance;
};
//================================================
#endif
//================================================
