//===============================================
#ifndef _GProcess_
#define _GProcess_
//================================================
#include "GInclude.h"
//===============================================
class GProcess : public QObject {
    Q_OBJECT

public:
    GProcess();
    ~GProcess();

public:
    static GProcess* Instance();
    virtual void run() = 0;

private:
    static GProcess* m_instance;
};
//===============================================
#endif
//===============================================