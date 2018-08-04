//===============================================
#include "GMainWindow.h"
#include <QApplication>
//===============================================
int main(int argc, char *argv[]) {
    QApplication lApp(argc, argv);

    GMainWindow lMainWindow;
    lMainWindow.show();

    return lApp.exec();
}
//===============================================
