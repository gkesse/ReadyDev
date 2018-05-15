//===============================================
#include <QApplication>
#include "GWindow.h"
#include "GConfig.h"
//===============================================
int main(int argc, char** argv) {
    QApplication app(argc, argv);
    GConfig::Instance()->setData("WINDOW_TYPE", "STYLE_DESIGNER");
    GWindow::Instance()->run();
    return app.exec();
}
//===============================================
