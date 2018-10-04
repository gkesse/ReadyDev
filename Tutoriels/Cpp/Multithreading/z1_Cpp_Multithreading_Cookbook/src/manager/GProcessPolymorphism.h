//===============================================
#ifndef _GProcessPolymorphism_
#define _GProcessPolymorphism_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessPolymorphism;
class GFigure;
class GTriangle;
class GSquare;
class GCircle;
//===============================================
class GProcessPolymorphism : public GProcess {
public:
    GProcessPolymorphism();
    ~GProcessPolymorphism();

public:
    static GProcessPolymorphism* Instance();
    void run(int argc = 0, char** argv = 0);

private:
    static GProcessPolymorphism* m_instance;
};
//===============================================
// GFigure
//===============================================
class GFigure {
public:
    virtual ~GFigure() {}
    virtual string figureType() = 0;
    virtual double circumference() = 0;
    virtual double area() = 0;
};
//===============================================
// GTriangle
//===============================================
class GTriangle : public GFigure {
public:
    GTriangle();
    GTriangle(double a, double b, double c);

public:
    string figureType();
    double circumference();
    double area();

private:
    double m_a, m_b, m_c;
};
//===============================================
// GSquare
//===============================================
class GSquare : public GFigure {
public:
    GSquare();
    GSquare(double a, double b);

public:
    string figureType();
    double circumference();
    double area();

private:
    double m_a, m_b;
};
//===============================================
// GCircle
//===============================================
class GCircle : public GFigure {
public:
    GCircle();
    GCircle(double r);

public:
    string figureType();
    double circumference();
    double area();

private:
    double m_r;
};
//===============================================
#endif
//===============================================
