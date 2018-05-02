//===============================================
#ifndef _GVideo_
#define _GVideo_
//================================================
#include "GInclude.h"
//===============================================
class GVideo {
public:
    GVideo();
    ~GVideo();

public:
    static GVideo* Instance();
    void readVideo(const char* filename);

private:
    static GVideo* m_instance;
    const char* m_windowName;
};
//===============================================
#endif
//===============================================
