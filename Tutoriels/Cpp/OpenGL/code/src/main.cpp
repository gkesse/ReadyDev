//===============================================
#include "GWindow.h"
#include "GConfig.h"
//===============================================
int main(int argc, char** argv) {
    GConfig::Instance()->setData("WINDOW_TYPE", "OPENGL_SDL");
    GConfig::Instance()->setData("DRAW_TYPE", "CUBE_VAO");
    GConfig::Instance()->setData("SHADER_LOAD_METHOD", "LAYOUT");
    GWindow::Instance()->show(&argc, argv);
    return 0;
}
//===============================================
