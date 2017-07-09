#ifndef _GMath_
#define _GMath_

#include <QtGlobal>

#ifdef DLL_APP  
#define DLL_API Q_DECL_EXPORT
#else  
#define DLL_API Q_DECL_IMPORT
#endif 

class DLL_API GMath {
private:
    GMath();
    
public:
    ~GMath();
    
public:
    static GMath* Instance();
    
public:
    double add(const double& a, const double& b);
    double subtract(const double& a, const double& b);
    double multiply(const double& a, const double& b);
    double divide(const double& a, const double& b);
    double quotient(const double& a, const double& b);
    double modulus(const int& a, const int& b);
    
private:
    static GMath* m_instance;
};

#endif
