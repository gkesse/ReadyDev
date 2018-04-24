//===============================================
#include "GWindow.h"
#include "GConfig.h"
//===============================================
int main(int argc, char** argv) {
    GConfig::Instance()->setData("WINDOW_TYPE", "OPENGL_GLFW");
    GConfig::Instance()->setData("DRAW_TYPE", "LINE");
    GConfig::Instance()->setData("SHADER_LOAD_METHOD", "LAYOUT");
    GWindow::Instance()->show(&argc, argv);
    return 0;
}
//===============================================
