//===============================================
#ifndef _GProcessMouse_
#define _GProcessMouse_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessMouse : public GProcess {
public:
    GProcessMouse();
    ~GProcessMouse();

public:
    static GProcessMouse* Instance();
    void run(int argc, char** argv);
    static void onMouse(int event, int x, int y, int flags, void* params);
    void drawBox(const cv::Mat& src, cv::Mat& dst);
    void drawCopy(const cv::Mat& src, cv::Mat& dst);

private:
    static GProcessMouse* m_instance;
    static bool m_drawFlag;
    static cv::Rect m_drawBox;
    static bool m_drawCopyFlag;
};
//===============================================
#endif
//===============================================
