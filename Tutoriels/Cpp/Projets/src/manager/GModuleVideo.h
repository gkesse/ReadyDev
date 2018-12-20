//===============================================
#ifndef _GModuleVideo_
#define _GModuleVideo_
//===============================================
#include "GModule.h"
//===============================================
class GModuleVideo : public GModule {
    Q_OBJECT
    Q_PROPERTY(bool ModuleSelectFlag READ getModuleSelectFlag WRITE setModuleSelectFlag)

public:
    GModuleVideo(QWidget *parent = 0);
    ~GModuleVideo();

private:
    void createPixmap();
    void drawPixmap();
    void setModuleSelectFlag(bool arg);
    bool getModuleSelectFlag();

protected:
    void resizeEvent(QResizeEvent *event);
    void paintEvent(QPaintEvent *event);
    void mousePressEvent(QMouseEvent *event);

private:
    QPixmap *m_pixmap;
    static int m_moduleCount;
    bool m_oneOnlyFlag;
    bool m_moduleSelectFlag;
};
//===============================================
#endif
//===============================================
