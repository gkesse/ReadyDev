//===============================================
#ifndef _GEmailLogger_
#define _GEmailLogger_
//===============================================
#include "GLogger.h"
//===============================================
class GEmailLogger : public GLogger {
public:
    GEmailLogger(const int& level);
    ~GEmailLogger();

public:
    void writeMessage(const string& msg);
};
//===============================================
#endif
//===============================================
