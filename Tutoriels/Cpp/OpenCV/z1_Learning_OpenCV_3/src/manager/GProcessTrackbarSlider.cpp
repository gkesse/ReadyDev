//===============================================
#include "GProcessTrackbarSlider.h"
//===============================================
GProcessTrackbarSlider* GProcessTrackbarSlider::m_instance = 0;
//===============================================
GProcessTrackbarSlider::GProcessTrackbarSlider() {
    m_run = 1;
    m_dontset = 0;
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
    cv::VideoCapture* lCap = (cv::VideoCapture*)params;
    lCap->set( cv::CAP_PROP_POS_FRAMES, pos);
}
//===============================================
void GProcessTrackbarSlider::run() {
    cv::namedWindow("Barre Slider | ReadyDev", cv::WINDOW_AUTOSIZE);
    m_cap.open("res/video/tree.avi");
    int lFrames = (int)m_cap.get(cv::CAP_PROP_FRAME_COUNT);
    int lWidth = (int)m_cap.get(cv::CAP_PROP_FRAME_WIDTH);
    int lHeight = (int)m_cap.get(cv::CAP_PROP_FRAME_HEIGHT);

    cout << "Nombre Frames: " << lFrames << "\n";
    cout << "Dimensions Frame: (" << lWidth << ", " << lHeight << ")\n";

    cv::createTrackbar("Position", "Barre Slider | ReadyDev", &m_position, lFrames, onTrackbarSlider, &m_cap);

    cv::Mat lFrame;

    while(1) {
        if(m_run != 0) {
            m_cap >> lFrame;
            if(lFrame.empty()) break;
            int lCurrentPos = (int)m_cap.get(cv::CAP_PROP_POS_FRAMES);
            m_dontset = 1;
            cv::setTrackbarPos("Position", "Barre Slider | ReadyDev", lCurrentPos);
            cv::imshow( "Barre Slider | ReadyDev", lFrame);
            m_run -= 1;
        }
        char lChar = (char)cv::waitKey(10);
        if(lChar == 's') {m_run = 1; cout << "Execution Pas a Pas: " << m_run << "\n";}
        if(lChar == 'r') {m_run = -1; cout << "Execution Mode: " << m_run << "\n";}
        if(lChar == 27) break;
    }
}
//===============================================
