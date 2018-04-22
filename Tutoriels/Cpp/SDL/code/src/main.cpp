//===============================================
#include "GWindow.h"
#include "GConfig.h"
//===============================================
int main(int argc, char** argv) {
    GConfig::Instance()->setData("FULLSCREEN_FLAG", "FALSE");
    GConfig::Instance()->setData("DRAW_TYPE", "ANIMATE");
    GWindow::Instance()->show();
    return 0;
}
//===============================================
