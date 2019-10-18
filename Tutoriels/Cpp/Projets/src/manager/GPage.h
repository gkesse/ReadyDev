//===============================================
#ifndef _GPage_
#define _GPage_
//===============================================
#include "GInclude.h"
//===============================================
class GPage : public QWidget {
    Q_OBJECT

public:
    GPage(QWidget *parent = 0);
    virtual ~GPage();
    static GPage* Create(QWidget *parent = 0);
    static GPage* Create(const QString& key, QWidget *parent = 0);
    virtual void setNoData(const QString &module, const QString &text);
    virtual void setImageData(const cv::Mat& img);

protected:
    void resizeEvent(QResizeEvent *event);
    void paintEvent(QPaintEvent *event);
    virtual void drawNoData();
    virtual void drawImageData();

protected:
    QPixmap* m_pixmap;
    int m_drawFlag;
};
//===============================================
#endif
//===============================================
