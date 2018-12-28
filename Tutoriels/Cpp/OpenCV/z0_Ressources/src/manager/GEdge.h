//================================================
#ifndef _GEdge_
#define _GEdge_
//================================================
#include "GInclude.h"
//================================================
class GEdge {
public:
    GEdge();
    ~GEdge();
	
public:
    static GEdge* Instance();
    void canny(const cv::Mat& src, cv::Mat& dst);
	
private:
    static GEdge* m_instance;
};
//================================================
#endif
//================================================
