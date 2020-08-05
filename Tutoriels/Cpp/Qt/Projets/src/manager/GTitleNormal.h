//===============================================
#ifndef _GTitleNormal_
#define _GTitleNormal_
//================================================
#include "GTitle.h"
//===============================================
class GTitleNormal : public GTitle {
    Q_OBJECT

public:
    GTitleNormal(QWidget* parent = 0);
    ~GTitleNormal();

public slots:
    void slotWidowIcon(const QIcon& icon);

private:
    QLabel* m_icon;
};
//===============================================
#endif
//===============================================
