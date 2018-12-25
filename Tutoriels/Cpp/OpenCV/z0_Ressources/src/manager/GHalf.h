//================================================
#ifndef _GHalf_
#define _GHalf_
//================================================
#include "GInclude.h"
//================================================
class GHalf {
public:
    GHalf();
    ~GHalf();
	
public:
    static GHalf* Instance();
    void half(const cv::Mat& src, cv::Mat& dst);
	
private:
    static GHalf* m_instance;
};
//================================================
#endif
//================================================
