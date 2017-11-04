#ifndef _GShow_
#define _GShow_

#include <QtGlobal>
#include <string>

#ifdef DLL_APP  
#define DLL_API Q_DECL_EXPORT
#else  
#define DLL_API Q_DECL_IMPORT
#endif 

using namespace std;

class DLL_API GShow {
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

#endif
