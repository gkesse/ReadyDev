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
    void update(int width, int height);
    void updateViewport(int width, int height);
    void updateOrtho(int width, int height);

private:
    static GCamera* m_instance;
};
//===============================================
#endif
//===============================================
