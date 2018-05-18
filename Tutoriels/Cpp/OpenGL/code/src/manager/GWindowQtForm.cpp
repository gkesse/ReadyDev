//===============================================
#include "GWindowQtForm.h"
#include "ui_GWindowQtForm.h"
#include "GDraw.h"
//===============================================
GWindowQtForm::GWindowQtForm(QWidget *parent) :
    QWidget(parent), ui(new Ui::GWindowQtForm) {
    ui->setupUi(this);
    m_x = 0;
    m_y = 0;
    m_w = 800;
    m_h = 800;
    m_title = "OpenGL | Qt | ReadyDev";
    createObjects();
    createConnections();
}
//===============================================
GWindowQtForm::~GWindowQtForm() {

}
//===============================================
void GWindowQtForm::createObjects() {
    setWindowTitle(m_title);
    resize(m_w, m_h);
    QGLFormat lFormat;
    lFormat.setVersion(4,0);
    lFormat.setProfile(QGLFormat::CoreProfile);
    ui->m_glWindow->setFormat(lFormat);
}
//===============================================
void GWindowQtForm::createConnections() {
    connect(ui->m_photoButton, SIGNAL(clicked()), ui->m_glWindow, SLOT(slotPhotoClicked()));
    connect(ui->m_animateButton, SIGNAL(clicked()), ui->m_glWindow, SLOT(slotAnimateClicked()));
}
//===============================================
void GWindowQtForm::keyPressEvent(QKeyEvent* event) {
    GDraw::Instance()->onKeyPress(event);
}
//===============================================
