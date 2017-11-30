//===============================================
#ifndef _GDebugLogger_
#define _GDebugLogger_
//===============================================
#include "GLogger.h"
//===============================================
class GDebugLogger : public GLogger {
public:
    GDebugLogger(const int& level);
    ~GDebugLogger();

public:
    void writeMessage(const string& msg);
};
//===============================================
#endif
//===============================================
