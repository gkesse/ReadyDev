//================================================
#ifndef _GVision_
#define _GVision_
//================================================
#include "GInclude.h"
//================================================
class GVision {
public:
    GVision();
    ~GVision();
	
public:
    static GVision* Instance();
    void loadImage(const string &imageName, const string &imageFile);
    bool emptyImage(const string &imageName);
    void showImage(const string &imageName, const string &windowName);
    void copyImage(const string &imageSrcName, const string &imageDstName);
    cv::Mat getImage(const string &imageName);
    void getImagePixel(const string &imageName, const int& x, const int& y, uchar &red, uchar& green, uchar& blue);
    void getImagePixel(const string &imageName, const int& x, const int& y, uchar &color);
    void setImagePixel(const string &imageName, const int& x, const int& y, const uchar& red, const uchar& green, const uchar& blue);
    void setImagePixel(const string &imageName, const int& x, const int& y, const uchar& color);

    void smoothImage(const string &imageSrcName, const string &imageDstName);
    void pyramidImage(const string &imageSrcName, const string &imageDstName);
    void cannyImage(const string &imageSrcName, const string &imageDstName);
    void convertImage(const string &imageSrcName, const string &imageDstName, int code);

    void showWindow(const string &windowName);
    void destroyWindow(const string &windowName);
    void destroyWindowAll();

    void createTrackbar(const string &trackbarName, const string &windowName, int* value, int count, cv::TrackbarCallback onTrackbar = 0, void* params = 0);
    int waitKey(const int& delay);

    void loadVideo(const string &videoName, const string &videoFile);
    void loadVideo(const string &videoName, const int& index);
    void releaseVideo(const string &videoName);
    bool emptyVideo(const string &videoName);
    void getVideoImage(const string &videoName, const string &imageName);
    double getVideoProp(const string &videoName, const int& prop);

    void createVideoWriter(const string& writerName, const string& writerFile, const double& fps, const int& width, const int& height);
    void setVideoWriterImage(const string& writerName, const string& imageName);
    void releaseVideoWriter(const string& writerName);

private:
    static GVision* m_instance;
    map<string, cv::Mat> m_imageMap;
    map<string, cv::VideoCapture> m_videoMap;
    map<string, cv::VideoWriter> m_writerMap;
};
//================================================
#endif
//================================================
