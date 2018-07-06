//===============================================
#include "GMaxtrix.h"
//===============================================
#include <iomanip>
//===============================================
GMaxtrix::GMaxtrix() {
    m_row = 0;
    m_col = 0;
    m_data = 0;
}
//===============================================
GMaxtrix::GMaxtrix(const int& row, const int& col) {
    m_row = row;
    m_col = col;
    create();
}
//===============================================
GMaxtrix::GMaxtrix(const int& row, const int& col, double data[]) {
    m_row = row;
    m_col = col;
    create();
    setData(data);
}
//===============================================
GMaxtrix::GMaxtrix(const GMaxtrix& mA) {
    m_row = mA.m_row;
    m_col = mA.m_col;
    create();
    setData(mA.m_data);
}
//===============================================
GMaxtrix::~GMaxtrix() {
    release();
}
//===============================================
void GMaxtrix::create() {
    int lSize = m_row*m_col;
    m_data = new double[lSize];
}
//===============================================
void GMaxtrix::release() {
    if(m_data == 0) return;
    delete[] m_data;
    m_data = 0;
}
//===============================================
void GMaxtrix::setData(const int& i, const int& j, const double& data) {
    int k = i*m_col + j;
    m_data[k] = data;
}
//===============================================
void GMaxtrix::setData(double data[]) {
    for(int i = 0; i < m_row; i++) {
        for(int j = 0; j < m_col; j++) {
            int k = i*m_col + j;
            m_data[k] = data[k];
        }
    }
}
//===============================================
double GMaxtrix::getData(const int& i, const int& j) const {
    int k = i*m_col + j;
    return m_data[k];
}
//===============================================
void GMaxtrix::add(const GMaxtrix& mB) {
    if(m_row != mB.m_row || m_col != mB.m_col) return;
    for(int i = 0; i < m_row; i++) {
        for(int j = 0; j < m_col; j++) {
            double Aij = getData(i, j);
            double Bij = mB.getData(i, j);
            Aij = Aij + Bij;
            setData(i, j, Aij);
        }
    }
}
//===============================================
void GMaxtrix::print() const {
    for(int i = 0; i < m_row; i++) {
        cout << "|";
        for(int j = 0; j < m_col; j++) {
            int k = i*m_col + j;
            cout << setw(5) << right << m_data[k];
        }
        cout << "|\n";
    }
}
//===============================================
GMaxtrix& GMaxtrix::operator=(const GMaxtrix& mB) {
    release();
    m_row = mB.m_row;
    m_col = mB.m_col;
    create();
    setData(mB.m_data);
}
//===============================================
GMaxtrix& GMaxtrix::operator+=(const GMaxtrix& mB) {
    add(mB);
    return *this;
}
//===============================================
ostream& operator<<(ostream& s, const GMaxtrix& mA) {
    mA.print();
    return s;
}
//===============================================
