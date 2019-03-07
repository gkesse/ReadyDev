//===============================================
#ifndef _GProcessTrackbarSlider_
#define _GProcessTrackbarSlider_
//===============================================
#include "GProcess.h"
//===============================================
typedef struct {
    cv::VideoCapture cap;
    int run;
    int dontset;
} GTrackbar;
//===============================================
class GProcessTrackbarSlider : public GProcess {
public:
    GProcessTrackbarSlider();
    ~GProcessTrackbarSlider();

public:
    static GProcessTrackbarSlider* Instance();
    static void onTrackbar(int pos, void* params);
    void run();

private:
    static GProcessTrackbarSlider* m_instance;
    GTrackbar m_trackbar;
     int m_position;
};
//===============================================
#endif
//===============================================
