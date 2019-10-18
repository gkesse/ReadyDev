//===============================================
#ifndef _GPageReadyVision_
#define _GPageReadyVision_
//===============================================
#include "GPage.h"
//===============================================
class GPageReadyVision : public GPage {
    Q_OBJECT

public:
    GPageReadyVision(QWidget *parent = 0);
    ~GPageReadyVision();
    void setNoData(const QString &module, const QString &text);
    void setImageData(const cv::Mat &img);
    void drawNoData();
    void drawImageData();

private:
    QString m_noDataText;
    QPixmap m_noDataIcon;
    QImage m_imageData;
    int m_iconW;
    int m_iconH;
};
//===============================================
#endif
//===============================================
