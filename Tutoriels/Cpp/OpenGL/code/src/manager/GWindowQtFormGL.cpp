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
    float m_red = 5.0f/255.0f;
    float m_green = 16.0f/255.0f;
    float m_blue = 57.0f/255.0f;
    float m_alpha = 255.0f/255.0f;
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
    glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);
    GDraw::Instance()->draw();
}
//===============================================
void GWindowQtFormGL::resizeGL(int w, int h) {
    GDraw::Instance()->resize(w, h);
}
//===============================================
