//===============================================
#ifndef _GDialog_
#define _GDialog_
//===============================================
#include "GInclude.h"
//===============================================
class GDialog : public QDialog {
    Q_OBJECT

public:
    GDialog(QWidget *parent = 0);
    virtual ~GDialog();
    static GDialog* Create(QWidget *parent = 0);
    static GDialog* Create(const QString& key, QWidget *parent = 0);

protected:
    QGridLayout* m_mainLayout;
    QPixmap* m_pixmap;
};
//===============================================
#endif
//===============================================
