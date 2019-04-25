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
    void createWindow(const int &width, const int &height, const string &title);

    void setOnKeyboard(GLFWkeyfun onKeyboard);
    void setOnResize(GLFWframebuffersizefun onResize);
    void onResize(GLFWwindow* window, int width, int height);
    void onResize();

    void setContext();
    void swapInterval(const int& delay);
    void setPointSmooth(const bool &ok = true);
    void setLineSmooth(const bool &ok = true);
    void setBlendAlpha(const bool &ok = true);
    bool getWindowClose();
    void setViewPort();

    void clear(const int &mask);
    void clearColor(const double& r, const double& g, const double& b, const double& a);

    void setProjection();
    void setModelView();

    void swapBuffers();
    void pollEvents();
    void closeWindow();
    void destroyWindow();
    void terminate();
    void drawPoint(const GVertex &vertex, const GColor &color, const int &pointSize);
    void drawPoints(const GVertex* vertex, const GColor& color, const int& pointSize, const int& nVertex);
    void drawLine(const GVertex* vertex, const GColor* color, const double &width);
    void drawLines(const GVertex* vertex, const GColor &color, const double &width, const int &nVertex);
    void drawTriangle(const GVertex *vertex, const GColor *color);

private:
    static GOpenGL* m_instance;
    GLFWwindow* m_window;
    int m_width;
    int m_height;
    double m_ratio;
    double m_fovY;
    double m_front;
    double m_back;
};
//================================================
#endif
//================================================
