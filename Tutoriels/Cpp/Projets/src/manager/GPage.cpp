//===============================================
#include "GPage.h"
#include "GPageReadyVision.h"
#include "GPrint.h"
#include "GConfig.h"
//===============================================
GPage::GPage(QWidget *parent) :
    QWidget(parent) {
    setObjectName("GPage");
    m_pixmap = 0;
    m_drawFlag = 0;
}
//===============================================
GPage::~GPage() {

}
//===============================================
GPage* GPage::Create(QWidget* parent) {
    string lKey = GConfig::Instance()->getData("PROCESS");
    if(lKey == "READY_VISION") return new GPageReadyVision(parent);
    return new GPageReadyVision(parent);
}
//===============================================
GPage* GPage::Create(const QString &key, QWidget* parent) {
    if(key == "READY_VISION") return new GPageReadyVision(parent);
    return new GPageReadyVision(parent);
}
//===============================================
void GPage::resizeEvent(QResizeEvent *event) {
    if(m_pixmap != 0) delete m_pixmap;
    m_pixmap = new QPixmap(size());
}
//===============================================
void GPage::paintEvent(QPaintEvent *event) {
    if(m_pixmap == 0) return;
    m_pixmap->fill(Qt::transparent);
    drawNoData();
    drawImageData();
    QPainter lPainter(this);
    lPainter.drawPixmap(0, 0, *m_pixmap);
}
//===============================================
void GPage::setNoData(const QString& module, const QString &text) {}
void GPage::setImageData(const cv::Mat &img) {}
void GPage::drawNoData() {}
void GPage::drawImageData() {}
//===============================================
