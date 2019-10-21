//===============================================
#ifndef _GProcessHelloQtHtml_
#define _GProcessHelloQtHtml_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessHelloQtHtml : public GProcess {
public:
    GProcessHelloQtHtml();
    ~GProcessHelloQtHtml();

public:
    static GProcessHelloQtHtml* Instance();
    void run();

private:
    static GProcessHelloQtHtml* m_instance;
};
//===============================================
#endif
//===============================================
