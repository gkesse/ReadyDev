//================================================
#ifndef _GOpenGL_
#define _GOpenGL_
//================================================
#include "GInclude.h"
//================================================
class GOpenGL {
public:
    GOpenGL();
    ~GOpenGL();
	
public:
    static GOpenGL* Instance();
    void setCallback(const string& title, cv::OpenGlDrawCallback onOpenGlDraw, void* params = 0);
    void setTexture(cv::ogl::Texture2D& texture, const cv::Mat& img);
    void update(const string& title);

private:
    static GOpenGL* m_instance;
};
//================================================
#endif
//================================================
