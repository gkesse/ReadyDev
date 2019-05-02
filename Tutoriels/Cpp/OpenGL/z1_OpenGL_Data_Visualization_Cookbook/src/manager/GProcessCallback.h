//===============================================
#ifndef _GProcessCallback_
#define _GProcessCallback_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessCallback : public GProcess {
public:
    GProcessCallback();
    ~GProcessCallback();

public:
    static GProcessCallback* Instance();
    static void onKeyboard(GLFWwindow* window, int key, int scancode, int action, int mods);
    static void onResize(GLFWwindow* window, int width, int height);
    void run(int argc = 0, char** argv = 0);

private:
    static GProcessCallback* m_instance;
};
//===============================================
#endif
//===============================================
