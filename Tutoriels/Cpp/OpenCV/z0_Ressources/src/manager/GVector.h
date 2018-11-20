//================================================
#ifndef _GVector_
#define _GVector_
//================================================
#include "GInclude.h"
//================================================
class GVector {
public:
    GVector();
    ~GVector();
	
public:
    static GVector* Instance();
    void set(vector<double>& dataMap, double* dataList, const int& size);

private:
    static GVector* m_instance;
};
//================================================
#endif
//================================================
