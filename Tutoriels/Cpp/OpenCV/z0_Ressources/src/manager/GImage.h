//================================================
#ifndef _GImage_
#define _GImage_
//================================================
#include "GInclude.h"
//================================================
class GImage {
public:
    GImage();
    ~GImage();
	
public:
    static GImage* Instance();
    void load(const string& name, cv::Mat& img);
    void center(const cv::Mat& img, int& xC, int& yC);
    void width(const cv::Mat& img, int& w);
    void height(const cv::Mat& img, int& h);
    void size(const cv::Mat& img, int& w, int& h);
    void create(cv::Mat& img, const int& w, const int& h);
    void copy(const cv::Mat& src, cv::Mat& dst);
    void copy(const cv::Mat& src, QImage& dst);
    void convert(const cv::Mat &img, QImage& qimg);
    void rectangle(cv::Mat& img, const cv::Rect& rect, const cv::Scalar &color, const int& thickness = 1);

private:
    static GImage* m_instance;
};
//================================================
#endif
//================================================
