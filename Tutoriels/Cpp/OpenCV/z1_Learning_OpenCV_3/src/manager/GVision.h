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
    void smoothImage(const string &imageSrcName, const string &imageDstName);

    void showWindow(const string &windowName);
    void destroyWindow(const string &windowName);
    void destroyWindowAll();

    void createTrackbar(const string &trackbarName, const string &windowName, int* value, int count, cv::TrackbarCallback onTrackbar = 0, void* params = 0);
    int waitKey(const int& delay);

    void loadVideo(const string &videoName, const string &videoFile);
    void getVideoImage(const string &videoName, const string &imageName);

private:
    static GVision* m_instance;
    map<string, cv::Mat> m_imageMap;
    map<string, cv::VideoCapture> m_videoMap;
};
//================================================
#endif
//================================================
