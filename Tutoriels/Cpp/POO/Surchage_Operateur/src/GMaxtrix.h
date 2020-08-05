//===============================================
#ifndef _GMaxtrix_
#define _GMaxtrix_
//===============================================
#include <iostream>
#include <string>
//===============================================
using namespace std;
//===============================================
class GMaxtrix {
public:
    GMaxtrix();
    GMaxtrix(const int& row, const int& col);
    GMaxtrix(const int& row, const int& col, double data[]);
    GMaxtrix(const GMaxtrix& mA);
    ~GMaxtrix();

public:
    void create();
    void create(const int& row, const int& col);
    void release();
    void setData(const int& i, const int& j, const double& data);
    void setData(double data[]);
    double getData(const int& i, const int& j) const;

private:
    void print() const;
    void add(const GMaxtrix& mB);

public:
    GMaxtrix& operator=(const GMaxtrix& mB);
    GMaxtrix& operator+=(const GMaxtrix& mB);
    friend ostream& operator<<(ostream& s, const GMaxtrix& mA);

protected:
    int m_row;
    int m_col;
    double* m_data;
};
//===============================================
#endif
//===============================================
