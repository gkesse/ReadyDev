//===============================================
#include "GWindowQtForm.h"
#include "ui_GWindowQtForm.h"
//===============================================
GWindowQtForm::GWindowQtForm(QWidget *parent) :
    QWidget(parent), ui(new Ui::GWindowQtForm) {
    ui->setupUi(this);
    m_x = 0;
    m_y = 0;
    m_w = 400;
    m_h = 400;
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
    QGLFormat m_format;
    m_format.setVersion(4,0);
    m_format.setProfile(QGLFormat::CoreProfile);
    ui->m_glWindow->setFormat(m_format);
}
//===============================================
void GWindowQtForm::createConnections() {
    connect(ui->m_photoButton, SIGNAL(clicked()), ui->m_glWindow, SLOT(slotPhotoClicked()));
    connect(ui->m_animateButton, SIGNAL(clicked()), ui->m_glWindow, SLOT(slotAnimateClicked()));
}
//===============================================
