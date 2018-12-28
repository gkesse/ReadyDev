//================================================
#ifndef _GRoi_
#define _GRoi_
//================================================
#include "GInclude.h"
//================================================
class GRoi {
public:
    GRoi();
    ~GRoi();
	
public:
    static GRoi* Instance();
    void roi(const cv::Mat &img, cv::Mat& roi, const int& x, const int& y, const int& w, const int& h);

private:
    static GRoi* m_instance;
};
//================================================
#endif
//================================================
