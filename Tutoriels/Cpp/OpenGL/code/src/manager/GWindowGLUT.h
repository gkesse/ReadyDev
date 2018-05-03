//===============================================
#ifndef _GWindowGLUT_
#define _GWindowGLUT_
//===============================================
#include "GInclude.h"
#include "GWindow.h"
//===============================================
class GWindowGLUT : public GWindow {
public:
    GWindowGLUT();
    ~GWindowGLUT();

public:
    static GWindowGLUT* Instance();
    void show(int* argc, char** argv);
    void setCenter();
    static void KeyboardFunc(unsigned char key, int w, int h);
    static void KeyboardUpFunc(unsigned char key, int w, int h);
    static void SpecialFunc(int key, int w, int h);
    static void SpecialUpFunc(int key, int w, int h);
    static void ReshapeFunc(int w, int h);
    static void IdleFunc();
    static void MouseFunc(int button, int state, int x, int y);
    static void MotionFunc(int x,int y);
    static void DisplayFunc();

private:
    static GWindowGLUT* m_instance;
    int m_x;
    int m_y;
    int m_w;
    int m_h;
    string m_title;
};
//===============================================
#endif
//===============================================
