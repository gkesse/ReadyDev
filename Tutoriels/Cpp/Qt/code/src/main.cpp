//===============================================
#include <QApplication>
#include "GWindow.h"
#include "GConfig.h"
//===============================================
int main(int argc, char** argv) {
    QApplication lApp(argc, argv);
    GConfig::Instance()->setData("WINDOW_TYPE", "QML_EVENT_PINCH");
    GWindow::Instance()->run();
    return lApp.exec();
}
//===============================================