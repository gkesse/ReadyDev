//===============================================
#ifndef _GProcessDisplayPicture_
#define _GProcessDisplayPicture_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessDisplayPicture : public GProcess {
public:
    GProcessDisplayPicture();
    ~GProcessDisplayPicture();

public:
    static GProcessDisplayPicture* Instance();
    void run();

private:
    static GProcessDisplayPicture* m_instance;
};
//===============================================
#endif
//===============================================
