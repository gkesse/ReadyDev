//===============================================
#include "GProcessWritingVideo.h"
#include "GVision.h"
//===============================================
GProcessWritingVideo* GProcessWritingVideo::m_instance = 0;
//===============================================
GProcessWritingVideo::GProcessWritingVideo() {

}
//===============================================
GProcessWritingVideo::~GProcessWritingVideo() {

}
//===============================================
GProcessWritingVideo* GProcessWritingVideo::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessWritingVideo;
    }
    return m_instance;
}
//===============================================
void GProcessWritingVideo::run() {
    GVision::Instance()->showWindow("VIDEO");

    GVision::Instance()->loadVideo("VIDEO", 0);
    int lWidth = GVision::Instance()->getVideoProp("VIDEO", cv::CAP_PROP_FRAME_WIDTH);
    int lHeight = GVision::Instance()->getVideoProp("VIDEO", cv::CAP_PROP_FRAME_HEIGHT);
    GVision::Instance()->createVideoWriter("VIDEO", "res/video/video.avi", 25, lWidth, lHeight);

    while(1) {
        GVision::Instance()->getVideoImage("VIDEO", "IMAGE");
        if(GVision::Instance()->emptyImage("IMAGE")) break;
        GVision::Instance()->showImage("IMAGE", "VIDEO");
        GVision::Instance()->setVideoWriterImage("VIDEO", "IMAGE");
        if(GVision::Instance()->waitKey(33) >= 0) break;
    }

    GVision::Instance()->destroyWindow("VIDEO");
    GVision::Instance()->releaseVideoWriter("VIDEO");
}
//===============================================
