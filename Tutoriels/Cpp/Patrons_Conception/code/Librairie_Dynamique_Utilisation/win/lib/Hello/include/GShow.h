//===============================================
#ifndef _GShow_
#define _GShow_
//===============================================
#include <string>
//===============================================
#ifdef DLL_APP  
#define DLL_API __declspec(dllexport)   
#else  
#define DLL_API __declspec(dllimport)   
#endif 
//===============================================
using namespace std;
//===============================================
class GShow {
private:
    GShow();
    
public:
    ~GShow();
    
public:
    static DLL_API GShow* Instance();
    
public:
    DLL_API void show(const string& data, const string& name = "");
    DLL_API void show(const double& data, const string& name = "");
    
private:
    static GShow* m_instance;
};
//===============================================
#endif
//===============================================
