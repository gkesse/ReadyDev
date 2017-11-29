//===============================================
#ifndef _GPizza_
#define _GPizza_
//===============================================
#include <iostream>
#include <string>
//===============================================
using namespace std;
//===============================================
class GPizza {
public:
    GPizza();
    ~GPizza();

public:
    void setDough(const string& dough);
    void setSauce(const string& sauce);
    void setGarnish(const string& garnish);
    void print() const;

private:
    string m_dough;
    string m_sauce;
    string m_garnish;
};
//===============================================
#endif
//===============================================
