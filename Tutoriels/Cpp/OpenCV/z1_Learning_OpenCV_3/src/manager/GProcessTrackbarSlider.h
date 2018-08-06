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
    static void onTrackbarSlider(int pos, void* params);
    void run();

private:
    static GProcessTrackbarSlider* m_instance;
    cv::VideoCapture m_cap;
    int m_position;
    int m_run;
    int m_dontset;
};
//===============================================
#endif
//===============================================
