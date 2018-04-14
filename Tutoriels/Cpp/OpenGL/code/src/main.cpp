//===============================================
#include "GWindow.h"
#include "GConfig.h"
//===============================================
int main(int argc, char** argv) {
    GConfig::Instance()->setData("WINDOW_TYPE", "OPENGL_SDL_GLEW");
    GConfig::Instance()->setData("BACKGROUND_FLAG", "TRUE");
    GConfig::Instance()->setData("BACKGROUND_COLOR", "5;16;57;255");
    GConfig::Instance()->setData("DRAW_FLAG", "TRUE");
    GWindow::Instance()->show(&argc, argv);
    return 0;
}
//===============================================
