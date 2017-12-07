//===============================================
#ifndef _GIterator_
#define _GIterator_
//===============================================
#include <iostream>
#include <string>
#include <memory>
//===============================================
using namespace std;
//===============================================
template<class T>
class GIterator {
public:
    virtual void reset() = 0;
    virtual bool next() = 0;
    virtual T current() = 0;
};
//===============================================
#endif
//===============================================
