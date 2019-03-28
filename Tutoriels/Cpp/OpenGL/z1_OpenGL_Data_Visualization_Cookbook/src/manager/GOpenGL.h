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
    void init();
    void createWindow(const int &w, const int &h, const string &title);
    void setContext();
    void setLineSmooth();
    void setPointSmooth();
    void setBlendAlpha();
    bool getWindowClose();
    void setViewPort();
    void clearBuffer(const int &mask);
    void setProjection();
    void swapBuffers();
    void getEvents();
    void destroyWindow();
    void terminate();
    void drawPoint(const GVertex &vertex, const GColor &color, const int &size);
    void drawTriangle(const GVertex *vertex, const GColor *color);

private:
    static GOpenGL* m_instance;
    GLFWwindow* m_window;
    int m_width;
    int m_height;
    double m_ratio;
};
//================================================
#endif
//================================================
