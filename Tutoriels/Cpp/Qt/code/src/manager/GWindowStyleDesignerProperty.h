//===============================================
#ifndef _GWindowStyleDesignerProperty_
#define _GWindowStyleDesignerProperty_
//===============================================
#include "GWindow.h"
//===============================================
namespace Ui {
class GWindowStyleDesignerProperty;
}
//===============================================
class GWindowStyleDesignerProperty : public QWidget, public GWindow {
    Q_OBJECT

public:
    GWindowStyleDesignerProperty(QWidget* parent = 0);
    ~GWindowStyleDesignerProperty();

public:
    static GWindowStyleDesignerProperty* Instance();
    void run();
    void updateButtonProperty(const int& index);

public slots:
    void slotCreateButtonClicked();
    void slotReadButtonClicked();
    void slotUpdateButtonClicked();
    void slotDeleteButtonClicked();

private:
    Ui::GWindowStyleDesignerProperty* ui;
    static GWindowStyleDesignerProperty* m_instance;
};
//===============================================
#endif
//===============================================
