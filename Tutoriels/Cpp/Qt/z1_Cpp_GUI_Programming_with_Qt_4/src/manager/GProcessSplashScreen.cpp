//===============================================
#include "GProcessSplashScreen.h"
#include "GMultipleDocument.h"
//===============================================
GProcessSplashScreen* GProcessSplashScreen::m_instance = 0;
//===============================================
GProcessSplashScreen::GProcessSplashScreen() {

}
//===============================================
GProcessSplashScreen::~GProcessSplashScreen() {

}
//===============================================
GProcessSplashScreen* GProcessSplashScreen::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessSplashScreen;
    }
    return m_instance;
}
//===============================================
void GProcessSplashScreen::run() {
    QSplashScreen *splash = new QSplashScreen;
    splash->setPixmap(QPixmap(":/img/splash.png"));
    splash->show();
    Qt::Alignment topRight = Qt::AlignRight | Qt::AlignBottom;
    splash->showMessage(QObject::tr("Setting up the main window..."), topRight, Qt::white);
    GMultipleDocument *mainWin = new GMultipleDocument;
    splash->showMessage(QObject::tr("Loading modules..."), topRight, Qt::white);
    loadModules();
    splash->showMessage(QObject::tr("Establishing connections..."), topRight, Qt::white);
    establishConnections();
    mainWin->show();
    splash->finish(mainWin);
    delete splash;
}
//===============================================
void GProcessSplashScreen::loadModules() {
    cout << "loadModules()...\n";
    Sleep(5000);
}
//===============================================
void GProcessSplashScreen::establishConnections() {
    cout << "establishConnections()...\n";
    Sleep(5000);
}
//===============================================
