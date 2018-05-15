//===============================================
#ifndef _GWindowResource_
#define _GWindowResource_
//===============================================
#include "GWindow.h"
//===============================================
namespace Ui {
class GWindowResource;
}
//===============================================
class GWindowResource : public QWidget, public GWindow {
    Q_OBJECT

public:
    GWindowResource(QWidget* parent = 0);
    ~GWindowResource();

public:
    static GWindowResource* Instance();
    void run();
    void updateButtonProperty(const int& index);

public slots:
    void slotCreateButtonClicked();
    void slotReadButtonClicked();
    void slotUpdateButtonClicked();
    void slotDeleteButtonClicked();

private:
    Ui::GWindowResource* ui;
    static GWindowResource* m_instance;
};
//===============================================
#endif
//===============================================
