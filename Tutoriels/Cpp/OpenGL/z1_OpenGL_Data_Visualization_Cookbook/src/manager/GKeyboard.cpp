//================================================
#include "GKeyboard.h"
//================================================
GKeyboard* GKeyboard::m_instance = 0;
//================================================
GKeyboard::GKeyboard() {

}
//================================================
GKeyboard::~GKeyboard() {
	
}
//================================================
GKeyboard* GKeyboard::Instance() {
	if(m_instance == 0) {
        m_instance = new GKeyboard;
	}
	return m_instance;
}
//================================================
void GKeyboard::onKeyboard(GLFWwindow* window, int key, int scancode, int action, int mods) {
    m_window = window;
    m_key = key;
    m_scancode = scancode;
    m_action = action;
    m_mods = mods;
}
//================================================
bool GKeyboard::isPressed() {
    if(m_action == GLFW_PRESS) return true;
    return false;
}
//================================================
int GKeyboard::key() {
    return m_key;
}
//===============================================
