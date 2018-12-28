//===============================================
#ifndef _GProcessTrackbarSlider_
#define _GProcessTrackbarSlider_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessTrackbarSlider : public GProcess {
public:
    GProcessTrackbarSlider();
    ~GProcessTrackbarSlider();

public:
    static GProcessTrackbarSlider* Instance();
    void run(int argc, char** argv);
    static void onTrackbar(int pos, void* params);

private:
    static GProcessTrackbarSlider* m_instance;
    static cv::VideoCapture m_cap;
};
//===============================================
#endif
//===============================================
