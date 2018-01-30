//===============================================
#ifndef _GFolder_
#define _GFolder_
//===============================================
#include "GDocument.h"
//===============================================
class GFolder : public GDocument {
public:
    GFolder();
    GFolder(const string& name);
    ~GFolder();

public:
    void addDoc(GDocument* doc);
    void printInfo();

private:
    vector<GDocument*> m_docMap;
    string m_name;
};
//===============================================
#endif
//===============================================
