//===============================================
#ifndef _GTrackbarNoSet_
#define _GTrackbarNoSet_
//===============================================
#include "GProcess.h"
//===============================================
class GTrackbarNoSet : public GProcess {
public:
    GTrackbarNoSet();
    ~GTrackbarNoSet();

public:
    static GTrackbarNoSet* Instance();
    void run();

private:
    static GTrackbarNoSet* m_instance;
};
//===============================================
#endif
//===============================================
