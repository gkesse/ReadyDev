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
    void createMenu();
    void setModuleSelectFlag(const bool& arg);
    bool getModuleSelectFlag();

public slots:
    void slotStatusBar();
    void slotSettingMenu();
    void slotVideoLoadFile();
    void slotModuleSelect(const bool& arg);

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
    QCheckBox* m_selectButton;
};
//===============================================
#endif
//===============================================
