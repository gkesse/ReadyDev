//===============================================
#include "GPageReadyVision.h"
#include "GPicto.h"
//===============================================
GPageReadyVision::GPageReadyVision(QWidget *parent) :
    GPage(parent) {
    setObjectName("GPageReadyVision");
    setAttribute(Qt::WA_StyledBackground, true);
    m_iconW = 200;
    m_iconH = 200;
}
//===============================================
GPageReadyVision::~GPageReadyVision() {
    if(m_pixmap != 0) delete m_pixmap;
}
//===============================================
void GPageReadyVision::setNoData(const QString& module, const QString &text) {
    GPicto::Instance()->setColor(QColor("white"));
    if(module == "IMAGE") m_noDataIcon = GPicto::Instance()->getPicto(fa::pictureo).pixmap(QSize(m_iconW, m_iconH));
    else if(module == "VIDEO") m_noDataIcon = GPicto::Instance()->getPicto(fa::film).pixmap(QSize(m_iconW, m_iconH));
    m_noDataText = text;
    m_drawFlag = 1;
    update();
}
//===============================================
void GPageReadyVision::drawNoData() {
    if(m_drawFlag != 1) return;

    QFont lFont;
    lFont.setFamily("Impact");
    lFont.setPixelSize(25);

    QFontMetrics lFontMetrics(lFont);
    int lTextW = lFontMetrics.width(m_noDataText);
    int lTextH = lFontMetrics.height();

    QPainter lPainter(m_pixmap);

    lPainter.drawPixmap(QRect((width() - m_iconW)/2, height()/2 - m_iconH - 10, m_iconW, m_iconH), m_noDataIcon);

    lPainter.setPen(QPen(QColor("white")));
    lPainter.setFont(lFont);
    lPainter.drawText(QRect((width() - lTextW)/2, (height() - lTextH)/2, lTextW, lTextH), m_noDataText);
}
//===============================================
