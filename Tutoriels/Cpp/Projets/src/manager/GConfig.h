//===============================================
#ifndef _GConfig_
#define _GConfig_
//===============================================
#include "GInclude.h"
//===============================================
class GConfig {
public:
    GConfig();
    virtual ~GConfig();
    static GConfig* Instance();
    virtual void setData(const string& key, const string& value) = 0;
    virtual string getData(const string& key) = 0;
    virtual void show() = 0;
    virtual void remove(const string& key) = 0;
    virtual void clear() = 0;
};
//===============================================
#endif
//===============================================
