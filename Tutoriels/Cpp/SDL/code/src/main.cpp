//===============================================
#include "GWindow.h"
#include "GConfig.h"
//===============================================
int main(int argc, char** argv) {
    GConfig::Instance()->setData("FULLSCREEN_FLAG", "FALSE");
    GConfig::Instance()->setData("DRAW_TYPE", "BACKGROUND");
    GWindow::Instance()->show();
    return 0;
}
//===============================================
