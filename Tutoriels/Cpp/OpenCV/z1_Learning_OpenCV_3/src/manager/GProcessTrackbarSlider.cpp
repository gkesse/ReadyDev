//===============================================
#include "GProcessTrackbarSlider.h"
//===============================================
GProcessTrackbarSlider* GProcessTrackbarSlider::m_instance = 0;
//===============================================
GProcessTrackbarSlider::GProcessTrackbarSlider() {
    m_trackbar.run = 1;
    m_trackbar.dontset = 0;
    m_position = 0;
}
//===============================================
GProcessTrackbarSlider::~GProcessTrackbarSlider() {

}
//===============================================
GProcessTrackbarSlider* GProcessTrackbarSlider::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessTrackbarSlider;
    }
    return m_instance;
}
//===============================================
void GProcessTrackbarSlider::onTrackbarSlider(int pos, void *params) {
    GTrackbar* lTrackbar = (GTrackbar*)params;
    lTrackbar->cap.set(cv::CAP_PROP_POS_FRAMES, pos);
    if(lTrackbar->dontset == 0) {lTrackbar->run = 1;}
    lTrackbar->dontset = 0;
}
//===============================================
void GProcessTrackbarSlider::run() {
    cv::namedWindow("Barre Slider | ReadyDev", cv::WINDOW_AUTOSIZE);
    m_trackbar.cap.open("res/video/tree.avi");
    int lFrames = (int)m_trackbar.cap.get(cv::CAP_PROP_FRAME_COUNT);
    int lWidth = (int)m_trackbar.cap.get(cv::CAP_PROP_FRAME_WIDTH);
    int lHeight = (int)m_trackbar.cap.get(cv::CAP_PROP_FRAME_HEIGHT);

    cout << "Nombre Frames: " << lFrames << "\n";
    cout << "Dimensions Frame: (" << lWidth << ", " << lHeight << ")\n";

    cv::createTrackbar("Position", "Barre Slider | ReadyDev", &m_position, lFrames, onTrackbarSlider, &m_trackbar);

    cv::Mat lFrame;

    while(1) {
        if(m_trackbar.run != 0) {
            m_trackbar.cap >> lFrame;
            if(lFrame.empty()) break;
            int lCurrentPos = (int)m_trackbar.cap.get(cv::CAP_PROP_POS_FRAMES);
            m_trackbar.dontset = 1;
            cv::setTrackbarPos("Position", "Barre Slider | ReadyDev", lCurrentPos);
            cv::imshow( "Barre Slider | ReadyDev", lFrame);
            if(m_trackbar.run == 1) {m_trackbar.run = 0;};
        }
        char lChar = (char)cv::waitKey(10);
        if(lChar == 's') {m_trackbar.run = 1; cout << "Execution Pas a Pas: " << m_trackbar.run << "\n";}
        if(lChar == 'r') {m_trackbar.run = -1; cout << "Execution Mode: " << m_trackbar.run << "\n";}
        if(lChar == 27) break;
    }
}
//===============================================
