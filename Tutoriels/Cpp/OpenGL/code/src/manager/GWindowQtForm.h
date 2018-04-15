//===============================================
#ifndef _GWindowQtForm_
#define _GWindowQtForm_
//===============================================
#include <iostream>
//===============================================
#include <QWidget>
//===============================================
using namespace std;
//===============================================
namespace Ui {
class GWindowQtForm;
}
//===============================================
class GWindowQtForm : public QWidget {
    Q_OBJECT

public:
    GWindowQtForm(QWidget* parent = 0);
    ~GWindowQtForm();

private:
    void createObjects();
    void createConnections();

public slots:
    void slotPhotoClicked();
    void slotAnimateClicked();

private:
    Ui::GWindowQtForm* ui;
    int m_x;
    int m_y;
    int m_w;
    int m_h;
    QString m_title;
};
//===============================================
#endif
//===============================================
