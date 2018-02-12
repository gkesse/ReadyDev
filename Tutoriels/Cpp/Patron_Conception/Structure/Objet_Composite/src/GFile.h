//===============================================
#ifndef _GFile_
#define _GFile_
//===============================================
#include "GDocument.h"
//===============================================
class GFile : public GDocument {
public:
    GFile();
    GFile(const string& name);
    ~GFile();

public:
    void printInfo();

private:
    string m_name;
};
//===============================================
#endif
//===============================================
