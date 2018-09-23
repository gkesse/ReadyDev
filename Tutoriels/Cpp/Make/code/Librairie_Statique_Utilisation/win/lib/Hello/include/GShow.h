//===============================================
#ifndef _GShow_
#define _GShow_
//===============================================
#include <string>
//===============================================
using namespace std;
//===============================================
class GShow {
private:
    GShow();
    
public:
    ~GShow();
    
public:
    static GShow* Instance();
    
public:
    void show(const string& data, const string& name = "");
    void show(const double& data, const string& name = "");
    
private:
    static GShow* m_instance;
};
//===============================================
#endif
//===============================================
