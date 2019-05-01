//===============================================
#ifndef _GWorkspace_
#define _GWorkspace_
//===============================================
#include "GInclude.h"
//===============================================
class GWorkspace : public QWidget {
    Q_OBJECT

public:
    GWorkspace(QWidget *parent = 0);
    ~GWorkspace();
    static GWorkspace* Create(const string& key);
};
//===============================================
#endif
//===============================================
