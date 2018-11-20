//===============================================
#include "GProcessQt.h"
#include "GImage.h"
#include "GWindow.h"
#include "GDelay.h"
#include "GOpenGL.h"
#include "GMoviePlayer.h"
//===============================================
GProcessQt* GProcessQt::m_instance = 0;
//===============================================
GProcessQt::GProcessQt() {

}
//===============================================
GProcessQt::~GProcessQt() {

}
//===============================================
GProcessQt* GProcessQt::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessQt;
    }
    return m_instance;
}
//===============================================
void GProcessQt::run(int argc, char** argv) {
    QApplication lApp(argc, argv);
    GMoviePlayer* lWindow = new GMoviePlayer;
    lWindow->open("res/video/tree.avi");
    lWindow->show();
    lApp.exec();
}
//===============================================
