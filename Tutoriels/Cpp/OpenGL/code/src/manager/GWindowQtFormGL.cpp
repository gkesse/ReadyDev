//===============================================
#include "GWindowQtFormGL.h"
#include "GDraw.h"
#include "GConfig.h"
//===============================================
GWindowQtFormGL::GWindowQtFormGL(QWidget* parent) :
    QGLWidget(parent) {
    setTimer();
}
//===============================================
GWindowQtFormGL::~GWindowQtFormGL() {

}
//===============================================
void GWindowQtFormGL::setBackground() {
    QString m_backgroundFlag = GConfig::Instance()->getData("BACKGROUND_FLAG");
    if(m_backgroundFlag == "FALSE") return;
    QString m_backgroundColor = GConfig::Instance()->getData("BACKGROUND_COLOR");
    QStringList m_backgroundColorMap = m_backgroundColor.split(";");
    float m_red = QString(m_backgroundColorMap[0]).toFloat()/255.0;
    float m_green = QString(m_backgroundColorMap[1]).toFloat()/255.0;
    float m_blue = QString(m_backgroundColorMap[2]).toFloat()/255.0;
    float m_alpha = QString(m_backgroundColorMap[3]).toFloat()/255.0;
    glClearColor(m_red, m_green, m_blue, m_alpha);
}
//===============================================
void GWindowQtFormGL::setTimer() {
    m_timer = new QTimer(this);
    connect(m_timer, SIGNAL(timeout()), this, SLOT(slotTimerUpdate()));
    m_timer->start(50);

}
//===============================================
void GWindowQtFormGL::slotTimerUpdate() {
    GDraw::Instance()->updateDraw();
    updateGL();
}
//===============================================
void GWindowQtFormGL::initializeGL() {
    glewInit();
    setBackground();
    GDraw::Instance()->initDraw();
}
//===============================================
void GWindowQtFormGL::paintGL() {
    glClear(GL_COLOR_BUFFER_BIT);
    GDraw::Instance()->draw();
}
//===============================================
void GWindowQtFormGL::resizeGL(int w, int h) {
    glViewport(0, 0, w, h);
}
//===============================================
