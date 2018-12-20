//===============================================
#include "GModuleVideo.h"
#include "GPicto.h"
//===============================================
int GModuleVideo::m_moduleCount = 0;
//===============================================
GModuleVideo::GModuleVideo(QWidget *parent) :
    GModule(parent) {
    setObjectName("GModuleVideo");
    setAttribute(Qt::WA_StyledBackground, true);

    m_pixmap = 0;
    m_moduleCount++;
    m_oneOnlyFlag = true;
    m_moduleSelectFlag = false;
    m_moduleName = QString("Video %1").arg(m_moduleCount);
}
//===============================================
GModuleVideo::~GModuleVideo() {

}
//===============================================
void GModuleVideo::setModuleSelectFlag(bool arg) {
    if(m_moduleSelectFlag != arg) {
        m_moduleSelectFlag = arg;
    }
}
//===============================================
bool GModuleVideo::getModuleSelectFlag() {
    return m_moduleSelectFlag;
}
//===============================================
void GModuleVideo::createPixmap() {
    if(m_pixmap != 0) delete m_pixmap;
    m_pixmap = new QPixmap(size());
    m_pixmap->fill(Qt::transparent);
}
//===============================================
void GModuleVideo::drawPixmap() {
    QPainter lPainter(m_pixmap);
    lPainter.setPen(QPen(QColor("white")));
    GPicto::Instance()->setColor(QColor("white"));
    QPixmap lPixmap = GPicto::Instance()->getPicto(fa::videocamera).pixmap(QSize(20, 20));
    lPainter.drawPixmap(QRect(15, 15, 20, 20), lPixmap);
    lPainter.drawText(QRect(0, 0, width(), height() - 2), Qt::AlignHCenter | Qt::AlignBottom, m_moduleName);
    setToolTip(m_moduleName);
}
//===============================================
void GModuleVideo::resizeEvent(QResizeEvent *event) {
    if(m_oneOnlyFlag == true) {
        createPixmap();
        drawPixmap();
        m_oneOnlyFlag = false;
    }
}
//===============================================
void GModuleVideo::paintEvent(QPaintEvent *event) {
    if(m_pixmap != 0) {
        QPainter lPainter(this);
        lPainter.drawPixmap(0, 0, *m_pixmap);
    }
}
//===============================================
void GModuleVideo::mousePressEvent(QMouseEvent *event) {
    if(event->button() == Qt::LeftButton) {
        bool lModuleSelectFlag = !m_moduleSelectFlag;
        setProperty("ModuleSelectFlag", lModuleSelectFlag);
        style()->unpolish(this);
        style()->polish(this);
        update();
    }
    if(event->button() == Qt::LeftButton) {

    }
    QWidget::mousePressEvent(event);
}
//===============================================
