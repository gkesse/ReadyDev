//===============================================
#include "GWindow.h"
#include "GConfig.h"
//===============================================
int main(int argc, char** argv) {
    GConfig::Instance()->setData("WINDOW_TYPE", "OPENGL_QT");
    GConfig::Instance()->setData("BACKGROUND_FLAG", "TRUE");
    GConfig::Instance()->setData("BACKGROUND_COLOR", "5;16;57;255");
    GConfig::Instance()->setData("DRAW_FLAG", "TRUE");
    GConfig::Instance()->setData("DRAW_TYPE", "SIMPLE");
    GConfig::Instance()->setData("SHADER_LOAD_METHOD", "LAYOUT");
    GConfig::Instance()->setData("COLOR_VAL", "55;63;96;255");
    GWindow::Instance()->show(&argc, argv);
    return 0;
}
//===============================================
