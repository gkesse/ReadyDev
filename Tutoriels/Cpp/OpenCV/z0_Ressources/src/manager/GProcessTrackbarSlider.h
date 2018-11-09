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
    void run();
    static void onTrackbarSlider(int pos, void* params);

private:
    static GProcessTrackbarSlider* m_instance;
    int m_pos;
};
//===============================================
#endif
//===============================================
