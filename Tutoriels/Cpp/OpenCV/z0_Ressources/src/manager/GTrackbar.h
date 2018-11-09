//===============================================
#ifndef _GTrackbar_
#define _GTrackbar_
//================================================
#include "GInclude.h"
//===============================================
class GTrackbar {
public:
    GTrackbar();
    virtual ~GTrackbar();

public:
    static GTrackbar* Instance();
    virtual void setTrackbar(const string& name);
};
//===============================================
#endif
//===============================================
