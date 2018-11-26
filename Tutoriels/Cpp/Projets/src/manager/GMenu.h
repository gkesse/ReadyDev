//===============================================
#ifndef _GMenu_
#define _GMenu_
//===============================================
#include "GInclude.h"
//===============================================
class GMenu : public QWidget {
    Q_OBJECT

public:
    GMenu(QWidget *parent = 0);
    ~GMenu();

public slots:
    void slotAddModule();
    void slotStatusTip();
    void slotAddImageModule();
    void slotAddVideoModule();

protected:
    void resizeEvent(QResizeEvent *event);

signals:
    void emitStatusBar(const QString& text);

private:
    QWidget* m_mainWidget;
    QWidget* m_mainWidgetOk;
    QToolButton* m_addModule;
    QMenu* m_addMenu;
    QAction* m_addImage;
    QAction* m_addVideo;
};
//===============================================
#endif
//===============================================
