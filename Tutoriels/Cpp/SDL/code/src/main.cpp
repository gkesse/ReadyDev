//===============================================
#include "GWindow.h"
#include "GConfig.h"
//===============================================
int main(int argc, char** argv) {
    GConfig::Instance()->setData("WINDOW_TYPE", "NORMAL");
    GConfig::Instance()->setData("DRAW_TYPE", "TEXTURE_REDUCE_MOVE");
    GWindow::Instance()->show();
    return 0;
}
//===============================================
