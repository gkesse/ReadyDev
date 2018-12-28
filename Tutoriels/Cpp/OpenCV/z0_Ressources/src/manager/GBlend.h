//================================================
#ifndef _GBlend_
#define _GBlend_
//================================================
#include "GInclude.h"
//================================================
class GBlend {
public:
    GBlend();
    ~GBlend();
	
public:
    static GBlend* Instance();
    void blend(const cv::Mat &src1, const double& alpha, const cv::Mat &src2, const double& beta, cv::Mat& dst);

private:
    static GBlend* m_instance;
};
//================================================
#endif
//================================================
