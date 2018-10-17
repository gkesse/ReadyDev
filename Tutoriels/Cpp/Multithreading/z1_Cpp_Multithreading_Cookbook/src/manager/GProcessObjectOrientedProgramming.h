//===============================================
#ifndef _GProcessObjectOrientedProgramming_
#define _GProcessObjectOrientedProgramming_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessObjectOrientedProgramming;
class GComplex2;
//===============================================
class GProcessObjectOrientedProgramming : public GProcess {
public:
    GProcessObjectOrientedProgramming();
    ~GProcessObjectOrientedProgramming();

public:
    static GProcessObjectOrientedProgramming* Instance();
    GComplex2 complexAdd(const GComplex2& c1, const GComplex2& c2);
    void run(int argc = 0, char** argv = 0);

private:
    static GProcessObjectOrientedProgramming* m_instance;
};
//===============================================
class GComplex2 {
public:
    GComplex2();
    GComplex2(double dReal, double dImg);

public:
    double real() const;
    double img() const;
    friend GComplex2 operator+(const GComplex2& c1, const GComplex2& c2);
    friend ostream& operator<< (ostream& os, const GComplex2& c);

private:
    double m_dReal;
    double m_dImg;
};
//===============================================
#endif
//===============================================
