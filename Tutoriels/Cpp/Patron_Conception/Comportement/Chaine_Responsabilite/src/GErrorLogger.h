//===============================================
#ifndef _GErrorLogger_
#define _GErrorLogger_
//===============================================
#include "GLogger.h"
//===============================================
class GErrorLogger : public GLogger {
public:
    GErrorLogger(const int& level);
    ~GErrorLogger();

public:
    void writeMessage(const string& msg);
};
//===============================================
#endif
//===============================================
