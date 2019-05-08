//===============================================
#ifndef _GQtPushButton_
#define _GQtPushButton_
//===============================================
#include "GQt.h"
//===============================================
class GQtPushButton : public GQt {
public:
    GQtPushButton();
    ~GQtPushButton();

public:
    static GQtPushButton* Instance();

private:
    static GQtPushButton* m_instance;
};
//===============================================
#endif
//===============================================
