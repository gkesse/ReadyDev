//===============================================
#ifndef _GMath_
#define _GMath_
//===============================================
#ifdef DLL_APP  
#define DLL_API __declspec(dllexport)   
#else  
#define DLL_API __declspec(dllimport)   
#endif 
//===============================================
class GMath {
private:
    GMath();
    
public:
    ~GMath();
    
public:
    static DLL_API GMath* Instance();
    
public:
    DLL_API double add(const double& a, const double& b);
    DLL_API double subtract(const double& a, const double& b);
    DLL_API double multiply(const double& a, const double& b);
    DLL_API double divide(const double& a, const double& b);
    DLL_API double quotient(const double& a, const double& b);
    DLL_API double modulo(const int& a, const int& b);
    
private:
    static GMath* m_instance;
};
//===============================================
#endif
//===============================================
