//================================================
#ifndef _GKeyboard_
#define _GKeyboard_
//================================================
#include "GInclude.h"
//================================================
class GKeyboard {
public:
    GKeyboard();
    ~GKeyboard();
	
public:
    static GKeyboard* Instance();
    void onKeyboard(GLFWwindow* window, int key, int scancode, int action, int mods);
    bool isPressed();
    int key();

private:
    static GKeyboard* m_instance;
    GLFWwindow* m_window;
    int m_key;
    int m_scancode;
    int m_action;
    int m_mods;
};
//================================================
#endif
//================================================
