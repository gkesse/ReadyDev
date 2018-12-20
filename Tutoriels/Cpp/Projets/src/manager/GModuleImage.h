//===============================================
#ifndef _GModuleImage_
#define _GModuleImage_
//===============================================
#include "GModule.h"
//===============================================
class GModuleImage : public GModule {
    Q_OBJECT
    Q_PROPERTY(bool ModuleSelectFlag READ getModuleSelectFlag WRITE setModuleSelectFlag)

public:
    GModuleImage(QWidget *parent = 0);
    ~GModuleImage();

private:
    void setModuleSelectFlag(bool arg);
    bool getModuleSelectFlag();
    void createPixmap();
    void drawPixmap();
    void createMenu();

public slots:
    void slotStatusBar();
    void slotSettingMenu();
    void slotLoadImage();

protected:
    void resizeEvent(QResizeEvent *event);
    void paintEvent(QPaintEvent *event);
    void mousePressEvent(QMouseEvent *event);

private:
    QPixmap *m_pixmap;
    static int m_moduleCount;
    bool m_oneOnlyFlag;
    bool m_moduleSelectFlag;
    QMenu* m_moduleMenu;
    QToolButton* m_settingButton;
};
//===============================================
#endif
//===============================================
