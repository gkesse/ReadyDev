//===============================================
#ifndef _GMainWindow_
#define _GMainWindow_
//===============================================
#include <QWidget>
//===============================================
namespace Ui {
class GMainWindow;
}
//===============================================
class GMainWindow : public QWidget {
    Q_OBJECT

public:
    GMainWindow(QWidget *parent = 0);
    ~GMainWindow();

private:
    Ui::GMainWindow *ui;
};
//===============================================
#endif
//===============================================
