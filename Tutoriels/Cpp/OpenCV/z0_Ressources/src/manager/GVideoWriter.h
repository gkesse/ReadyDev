//================================================
#ifndef _GVideoWriter_
#define _GVideoWriter_
//================================================
#include "GInclude.h"
//================================================
class GVideoWriter {
public:
    GVideoWriter();
    ~GVideoWriter();
	
public:
    static GVideoWriter* Instance();
    void open(cv::VideoWriter& writer, const string& name);
    void save(cv::VideoWriter& writer, const cv::Mat& img);
    void release(cv::VideoWriter& writer);

private:
    static GVideoWriter* m_instance;
};
//================================================
#endif
//================================================
