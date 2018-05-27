//===============================================
#include "GWindowQtFormGL.h"
#include "GDraw.h"
#include "GConfig.h"
#include "GCamera.h"
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
    float lRed = 5.0f/255.0f;
    float lGreen = 16.0f/255.0f;
    float lBlue = 57.0f/255.0f;
    float lAlpha = 255.0f/255.0f;
    glClearColor(lRed, lGreen, lBlue, lAlpha);
}
//===============================================
void GWindowQtFormGL::setTimer() {
    m_timer = new QTimer(this);
    connect(m_timer, SIGNAL(timeout()), this, SLOT(slotTimerUpdate()));
    m_timer->start(50);

}
//===============================================
void GWindowQtFormGL::initializeGL() {
    glewInit();
    setBackground();
    GDraw::Instance()->initDraw();
    GDraw::Instance()->initCamera(width(), height());
    glEnable(GL_DEPTH_TEST);
}
//===============================================
void GWindowQtFormGL::paintGL() {
    glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);
    GDraw::Instance()->draw();
}
//===============================================
void GWindowQtFormGL::resizeGL(int w, int h) {
    GCamera::Instance()->viewport(w, h);
    GDraw::Instance()->updateCamera(w, h);
}
//===============================================
void GWindowQtFormGL::slotTimerUpdate() {
    GDraw::Instance()->updateDraw();
    updateGL();
}
//===============================================
void GWindowQtFormGL::slotPhotoClicked() {
    QImage m_img = grabFrameBuffer(true);
    m_img.save("res/img/torus.png", "PNG");
}
//===============================================
void GWindowQtFormGL::slotAnimateClicked() {
    if(m_timer->isActive()) {m_timer->stop();}
    else {m_timer->start();}
}
//===============================================
