//===============================================
#ifndef _GTrackbarSet_
#define _GTrackbarSet_
//===============================================
#include "GTrackbar.h"
//===============================================
class GTrackbarSet : public GTrackbar {
public:
    GTrackbarSet();
    ~GTrackbarSet();

public:
    static GTrackbarSet* Instance();
    void setTrackbar(const string& name);

private:
    static GTrackbarSet* m_instance;
};
//===============================================
#endif
//===============================================
