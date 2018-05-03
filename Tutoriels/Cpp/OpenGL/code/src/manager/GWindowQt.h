//===============================================
#ifndef _GWindowQt_
#define _GWindowQt_
//===============================================
#include "GWindow.h"
#include "GWindowQtForm.h"
//===============================================
#include <QWidget>
//===============================================
class GWindowQt : public GWindow {
public:
    GWindowQt();
    ~GWindowQt();

public:
    static GWindowQt* Instance();
    void show(int* argc=0, char** argv=0);

private:
    static GWindowQt* m_instance;
    GWindowQtForm* m_window;
};
//===============================================
#endif
//===============================================
