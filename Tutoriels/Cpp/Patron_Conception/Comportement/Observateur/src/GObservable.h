//===============================================
#ifndef _GObservable_
#define _GObservable_
//===============================================
#include "GObserver.h"
//===============================================
#include <iostream>
#include <string>
#include <memory>
#include <vector>
//===============================================
using namespace std;
//===============================================
class GObservable {
public:
    static GObservable* Instance();

public:
    void addObserver(GObserver* observer);
    void notify(const string& data);

private:
    vector<GObserver*> m_observerMap;
};
//===============================================
#endif
//===============================================
