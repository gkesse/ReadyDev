//================================================
#ifndef _GVideo_
#define _GVideo_
//================================================
#include "GInclude.h"
//================================================
class GVideo {
public:
    GVideo();
    ~GVideo();
	
public:
    static GVideo* Instance();
    void load(const string& name, cv::VideoCapture& cap);
    void open(const int& index, cv::VideoCapture& cap);
    void image(cv::VideoCapture &cap, cv::Mat& img);
    void getProperty(cv::VideoCapture& cap, const int& key, double& prop);
    void setProperty(cv::VideoCapture& cap, const int& key, const double& prop);
    void relase(cv::VideoCapture& cap);
    void codec(const cv::VideoCapture& cap, char* fourcc);

private:
    static GVideo* m_instance;
};
//================================================
#endif
//================================================
