//===============================================
#ifndef _GCamera_
#define _GCamera_
//================================================
#include "GInclude.h"
//===============================================
class GCamera {
public:
    GCamera();
    ~GCamera();

public:
    static GCamera* Instance();
    void update(int witdh, int height);
    void initCamera(int witdh, int height);
    void updateViewport();
    void updateMVP();

private:
    static GCamera* m_instance;
    int m_width;
    int m_height;
    float m_ratio;
};
//===============================================
#endif
//===============================================
