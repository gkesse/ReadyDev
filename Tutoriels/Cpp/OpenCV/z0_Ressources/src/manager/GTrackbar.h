//================================================
#ifndef _GTrackbar_
#define _GTrackbar_
//================================================
#include "GInclude.h"
//================================================
class GTrackbar {
public:
    GTrackbar();
    ~GTrackbar();

public:
    static GTrackbar* Instance();
    void create(const string& name, const string& title, int* pos, int max, cv::TrackbarCallback onTrackbar = 0, void* params = 0);

private:
    static GTrackbar* m_instance;
};
//================================================
#endif
//================================================
