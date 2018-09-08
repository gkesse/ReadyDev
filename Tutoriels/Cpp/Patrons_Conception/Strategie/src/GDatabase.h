//===============================================
#ifndef _GDatabase_
#define _GDatabase_
//===============================================
#include <iostream>
#include <string>
//===============================================
using namespace std;
//===============================================
class GDatabase {
public:
    GDatabase();
    virtual ~GDatabase();
    
public:
    static GDatabase* Instance();
    virtual void open() = 0;
    
private:
    static GDatabase* m_instance;
};
//===============================================
#endif
//===============================================
