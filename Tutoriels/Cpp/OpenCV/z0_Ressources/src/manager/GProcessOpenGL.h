//===============================================
#ifndef _GProcessOpenGL_
#define _GProcessOpenGL_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessOpenGL : public GProcess {
public:
    GProcessOpenGL();
    ~GProcessOpenGL();

public:
    static GProcessOpenGL* Instance();
    void run(int argc, char** argv);
    static void onOpenGlDraw(void* params);
    static void onTrackbar(int pos, void* params);

private:
    static GProcessOpenGL* m_instance;
    static cv::ogl::Texture2D m_texture;
    static int m_rotX;
    static int m_rotY;
};
//===============================================
#endif
//===============================================
