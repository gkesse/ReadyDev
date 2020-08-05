//===============================================
#ifndef _GMenuNormal_
#define _GMenuNormal_
//================================================
#include "GMenu.h"
//===============================================
class GMenuNormal : public GMenu {
    Q_OBJECT

public:
    GMenuNormal(QWidget* parent = 0);
    ~GMenuNormal();

public slots:
    void slotModuleAdd();
    void slotModuleDatabaseAdd();

private:
    QMenu* m_addModuleMenu;
};
//===============================================
#endif
//===============================================
